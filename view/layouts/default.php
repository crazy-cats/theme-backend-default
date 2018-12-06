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
                [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::head' ] ]
        ],
        'header' => [
                [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::header' ] ]
        ],
        'left' => [
                [ 'class' => 'CrazyCat\Admin\Block\Menu' ]
        ],
        'messages' => [
                [ 'class' => 'CrazyCat\Index\Block\Message' ]
        ],
        'main' => [
                [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::main' ] ]
        ],
        'footer' => [
                [ 'class' => 'CrazyCat\Index\Block\Template', 'data' => [ 'template' => 'CrazyCat\Index::footer' ] ]
        ]
    ]
];
