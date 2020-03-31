<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package CrazyCat\Theme\Frontend\Default
 * @author Liwei Zeng <zengliwei@163.com>
 * @link https://crazy-cat.cn
 */
return [
    'template' => '2columns_left',
    'css' => [
        'css/styles.css'
    ],
    'blocks' => [
        'head' => [
            'js-in-head' => [ 'class' => 'CrazyCat\Core\Block\Head' ]
        ],
        'header' => [
            'page-title' => [ 'class' => 'CrazyCat\Core\Block\Template', 'data' => [ 'template' => 'CrazyCat\Core::header' ] ]
        ],
        'left' => [
            'lang-switcher' => [ 'class' => 'CrazyCat\Core\Block\LanguageSwitcher' ],
            'main-menu' => [ 'class' => 'CrazyCat\Admin\Block\Menu' ]
        ],
        'messages' => [
            'message-box' => [ 'class' => 'CrazyCat\Core\Block\Message' ]
        ],
        'main' => [
            'main-content' => [ 'class' => 'CrazyCat\Core\Block\Template', 'data' => [ 'template' => 'CrazyCat\Core::main' ] ]
        ],
        'footer' => [
            'footer-content' => [ 'class' => 'CrazyCat\Core\Block\Template', 'data' => [ 'template' => 'CrazyCat\Core::footer' ] ]
        ]
    ]
];
