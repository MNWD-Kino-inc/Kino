<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN1qixxq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN1qixxq/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerN1qixxq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerN1qixxq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerN1qixxq\appProdProjectContainer([
    'container.build_hash' => 'N1qixxq',
    'container.build_id' => 'bff57a8f',
    'container.build_time' => 1670265069,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN1qixxq');
