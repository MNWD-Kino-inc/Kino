<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAb0v3fs\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAb0v3fs/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerAb0v3fs.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerAb0v3fs\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerAb0v3fs\appProdProjectContainer([
    'container.build_hash' => 'Ab0v3fs',
    'container.build_id' => '2d005923',
    'container.build_time' => 1670370316,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAb0v3fs');
