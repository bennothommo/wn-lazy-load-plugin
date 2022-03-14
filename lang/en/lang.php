<?php

return [
    'plugin' => [
        'name' => 'Lazy Load',
        'description' => 'Lazy load images by default in Winter CMS',
    ],
    'fields' => [
        'lazyLoad' => [
            'label' => 'Lazy load images',
            'comment' => 'Images with a width and height specified will be loaded only when scrolled to.'
        ],
    ],
];
