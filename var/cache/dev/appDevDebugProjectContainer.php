<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGbky3ix\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGbky3ix/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerGbky3ix.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerGbky3ix\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerGbky3ix\appDevDebugProjectContainer([
    'container.build_hash' => 'Gbky3ix',
    'container.build_id' => '1668c924',
    'container.build_time' => 1609313971,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGbky3ix');
