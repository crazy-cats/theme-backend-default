<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

use CrazyCat\Framework\App\Setup\Component;

/**
 * @category CrazyCat
 * @package CrazyCat\Developer
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
Component::getInstance()->register( 'crazycat_theme_backend_default', Component::TYPE_THEME, __DIR__ );
