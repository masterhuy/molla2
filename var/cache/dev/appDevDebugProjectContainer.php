<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOmuwtul\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOmuwtul/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOmuwtul.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOmuwtul\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerOmuwtul\appDevDebugProjectContainer([
    'container.build_hash' => 'Omuwtul',
    'container.build_id' => '7857f2e0',
    'container.build_time' => 1601375310,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOmuwtul');
