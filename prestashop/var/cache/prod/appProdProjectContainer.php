<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJjbetof\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJjbetof/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJjbetof.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJjbetof\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJjbetof\appProdProjectContainer([
    'container.build_hash' => 'Jjbetof',
    'container.build_id' => 'b06ff814',
    'container.build_time' => 1669841777,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJjbetof');
