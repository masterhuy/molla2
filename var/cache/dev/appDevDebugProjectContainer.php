<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXtj4uab\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXtj4uab/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXtj4uab.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXtj4uab\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXtj4uab\appDevDebugProjectContainer([
    'container.build_hash' => 'Xtj4uab',
    'container.build_id' => 'cce48efb',
    'container.build_time' => 1598406273,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXtj4uab');
