<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\DependencyInjection\Compiler;

use Composer\InstalledVersions;
use Symfony\Component\DependencyInjection\ChildDefinition;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Filesystem\Path;

/**
 * @internal
 */
class AddAssetsPackagesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->hasDefinition('assets.packages')) {
            return;
        }

        $this->addBundles($container);
        $this->addComponents($container);
    }

    /**
     * Adds every bundle with a public folder as assets package.
     */
    private function addBundles(ContainerBuilder $container): void
    {
        $packages = $container->getDefinition('assets.packages');
        $context = new Reference('contao.assets.assets_context');

        if ($container->hasDefinition('assets._version_default')) {
            $version = new Reference('assets._version_default');
        } else {
            $version = new Reference('assets.empty_version_strategy');
        }

        $bundles = $container->getParameter('kernel.bundles');
        $meta = $container->getParameter('kernel.bundles_metadata');

        foreach (array_keys($bundles) as $name) {
            if (null === ($path = $this->findBundlePath($meta, $name))) {
                continue;
            }

            $packageVersion = $version;
            $packageName = $this->getBundlePackageName($name);
            $serviceId = 'assets._package_'.$packageName;
            $basePath = Path::join('bundles', preg_replace('/bundle$/', '', strtolower($name)));

            if (is_file($manifestPath = Path::join($path, 'manifest.json'))) {
                $def = new ChildDefinition('assets.json_manifest_version_strategy');
                $def->replaceArgument(0, $manifestPath);

                $container->setDefinition('assets._version_'.$packageName, $def);
                $packageVersion = new Reference('assets._version_'.$packageName);
            }

            $container->setDefinition($serviceId, $this->createPackageDefinition($basePath, $packageVersion, $context));
            $packages->addMethodCall('addPackage', [$packageName, new Reference($serviceId)]);
        }
    }

    /**
     * Adds the Contao components as assets packages.
     */
    private function addComponents(ContainerBuilder $container): void
    {
        $packages = $container->getDefinition('assets.packages');
        $context = new Reference('contao.assets.assets_context');

        foreach (InstalledVersions::getInstalledPackagesByType('contao-component') as $name) {
            $serviceId = 'assets._package_'.$name;
            $basePath = Path::join('assets', Path::makeRelative($name, 'contao-components'));
            $version = $this->createVersionStrategy($container, $name);

            $container->setDefinition($serviceId, $this->createPackageDefinition($basePath, $version, $context));
            $packages->addMethodCall('addPackage', [$name, new Reference($serviceId)]);
        }
    }

    private function createPackageDefinition(string $basePath, Reference $version, Reference $context): Definition
    {
        $package = new ChildDefinition('assets.path_package');
        $package
            ->setPublic(false)
            ->replaceArgument(0, $basePath)
            ->replaceArgument(1, $version)
            ->replaceArgument(2, $context)
        ;

        return $package;
    }

    private function createVersionStrategy(ContainerBuilder $container, string $name): Reference
    {
        $def = new ChildDefinition('assets.static_version_strategy');
        $def->replaceArgument(0, InstalledVersions::getPrettyVersion($name));
        $def->replaceArgument(1, '%%s?v=%%s');

        $container->setDefinition('assets._version_'.$name, $def);

        return new Reference('assets._version_'.$name);
    }

    /**
     * Returns a bundle package name emulating what a bundle extension would look like.
     */
    private function getBundlePackageName(string $className): string
    {
        if ('Bundle' === substr($className, -6)) {
            $className = substr($className, 0, -6);
        }

        return Container::underscore($className);
    }

    private function findBundlePath(array $meta, string $name): ?string
    {
        if (is_dir($path = Path::join($meta[$name]['path'], 'Resources/public'))) {
            return $path;
        }

        if (is_dir($path = Path::join($meta[$name]['path'], 'public'))) {
            return $path;
        }

        return null;
    }
}
