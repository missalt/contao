<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJg0BwWq\Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJg0BwWq/Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer.php') {
    touch(__DIR__.'/ContainerJg0BwWq.legacy');

    return;
}

if (!\class_exists(Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, false)) {
    \class_alias(\ContainerJg0BwWq\Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer::class, false);
}

return new \ContainerJg0BwWq\Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer([
    'container.build_hash' => 'Jg0BwWq',
    'container.build_id' => '84bd25b1',
    'container.build_time' => 1720540589,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJg0BwWq');