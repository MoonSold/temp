<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7eaBxIh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7eaBxIh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7eaBxIh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7eaBxIh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7eaBxIh\App_KernelDevDebugContainer([
    'container.build_hash' => '7eaBxIh',
    'container.build_id' => '1007412c',
    'container.build_time' => 1703502023,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7eaBxIh');