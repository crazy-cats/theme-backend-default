<?php
/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/* @var $this \CrazyCat\Framework\App\Theme\Page */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo getLangCode(); ?>" lang="<?php echo getLangCode(); ?>">
    <head>
        <title><?php echo htmlEscape( $this->getPageTitle() ); ?> - CrazyCat</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" value="<?php echo htmlEscape( $this->getMetaKeywords() ); ?>" />
        <meta name="description" value="<?php echo htmlEscape( $this->getMetaDescription() ); ?>" />
        <meta name="robots" value="<?php echo htmlEscape( $this->getMetaRobots() ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" href="<?php echo getStaticUrl( 'images/favicon.ico' ); ?>" type="image/x-icon" />
        <?php echo $this->getCssScripts(); ?>
        <?php echo $this->getSectionHtml( 'head' ); ?>
    </head>
    <body class="one-column <?php echo $this->getLayoutName( '-' ) ?>">
        <div class="bg">
            <img src="<?php echo getStaticUrl( 'images/bg.jpg' ); ?>" />
        </div>
        <div class="main-wrapper wrapper">
            <div class="main">
                <?php echo $this->getSectionHtml( 'messages' ); ?>
                <?php echo $this->getSectionHtml( 'main' ); ?>
            </div>
        </div>
        <div class="footer-wrapper wrapper">
            <div class="footer">
                <?php echo $this->getSectionHtml( 'footer' ); ?>
            </div>
        </div>
    </body>
</html>