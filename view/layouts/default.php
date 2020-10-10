<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package  CrazyCat\Theme\Frontend\Default
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
return [
    'template' => '2columns_left',
    'css'      => [
        'css/styles.css'
    ],
    'blocks'   => [
        'head'     => [
            'class'    => 'CrazyCat\Base\Block\Wrapper',
            'children' => [
                'js-in-head' => ['class' => 'CrazyCat\Base\Block\Head']
            ]
        ],
        'header'   => [
            'class'    => 'CrazyCat\Base\Block\Wrapper',
            'children' => [
                'page-title' => [
                    'class' => 'CrazyCat\Base\Block\Template',
                    'data'  => ['template' => 'CrazyCat\Base::header']
                ]
            ]
        ],
        'left'     => [
            'class'    => 'CrazyCat\Base\Block\Wrapper',
            'children' => [
                'lang-switcher' => ['class' => 'CrazyCat\Base\Block\LanguageSwitcher'],
                'main-menu'     => [
                    'class' => 'CrazyCat\Base\Block\Backend\Menu',
                    'data'  => [
                        'cache' => true
                    ]
                ]
            ]
        ],
        'messages' => [
            'class' => 'CrazyCat\Base\Block\Message'
        ],
        'main'     => [
            'class'    => 'CrazyCat\Base\Block\Wrapper',
            'children' => [
                'main-content' => [
                    'class' => 'CrazyCat\Base\Block\Template',
                    'data'  => ['template' => 'CrazyCat\Base::main']
                ]
            ]
        ],
        'footer'   => [
            'class'    => 'CrazyCat\Base\Block\Wrapper',
            'children' => [
                'footer-content' => [
                    'class' => 'CrazyCat\Base\Block\Template',
                    'data'  => ['template' => 'CrazyCat\Base::footer']
                ]
            ]
        ]
    ]
];
