<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDe0dap3\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDe0dap3/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDe0dap3.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDe0dap3\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDe0dap3\appDevDebugProjectContainer([
    'container.build_hash' => 'De0dap3',
    'container.build_id' => '6f9a033f',
    'container.build_time' => 1605868390,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDe0dap3');
