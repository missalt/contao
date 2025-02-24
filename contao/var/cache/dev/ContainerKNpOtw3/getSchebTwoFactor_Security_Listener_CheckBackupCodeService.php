<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Listener_CheckBackupCodeService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.listener.check_backup_code' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\EventListener\CheckBackupCodeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/EventListener/AbstractCheckCodeListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-backup-code/Security/Http/EventListener/CheckBackupCodeListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-backup-code/Security/TwoFactor/Backup/BackupCodeManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-backup-code/Security/TwoFactor/Backup/BackupCodeManager.php';

        return $container->privates['scheb_two_factor.security.listener.check_backup_code'] = new \Scheb\TwoFactorBundle\Security\Http\EventListener\CheckBackupCodeListener(($container->privates['scheb_two_factor.provider_preparation_recorder'] ?? $container->getSchebTwoFactor_ProviderPreparationRecorderService()), new \Scheb\TwoFactorBundle\Security\TwoFactor\Backup\BackupCodeManager(($container->services['Scheb\\TwoFactorBundle\\Model\\PersisterInterface'] ?? $container->load('getPersisterInterfaceService'))));
    }
}
