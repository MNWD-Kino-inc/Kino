<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVwmtaa1\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVwmtaa1/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVwmtaa1.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVwmtaa1\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVwmtaa1\appProdProjectContainer([
    'container.build_hash' => 'Vwmtaa1',
    'container.build_id' => '93262c71',
    'container.build_time' => 1669844725,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVwmtaa1');
