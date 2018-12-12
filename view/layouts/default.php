<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package CrazyCat\Theme\Frontend\Default
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
return [
    'template' => '2columns-left',
    'css' => [
        'css/styles.css'
    ],
    'blocks' => [
        'head' => [
            'js-in-head' => [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::head' ] ]
        ],
        'header' => [
            'page-title' => [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::header' ] ]
        ],
        'left' => [
            'lang-switcher' => [ 'class' => 'CrazyCat\Index\Block\LanguageSwitcher' ],
            'main-menu' => [ 'class' => 'CrazyCat\Admin\Block\Menu' ]
        ],
        'messages' => [
            'message-box' => [ 'class' => 'CrazyCat\Index\Block\Message' ]
        ],
        'main' => [
            'main-content' => [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::main' ] ]
        ],
        'footer' => [
            'footer-content' => [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::footer' ] ]
        ]
    ]
];
