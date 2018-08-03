<?php
/**
 * The common parts of <head> tag.
 *
 * This includes several <meta> tags and executes wp_head() function.
 *
 * @todo Make [content] of meta[name=theme-color] to be configable in wordpress theme panel.
 * @todo Make favicon.ico and put it in static directory.
 *
 * @package Lighthalzen
 * @subpackage Rekenber
 *
 * @link https://github.com/yuoa/lighthalzen#readme
 * @author Jio Gim (CiTE 5th)
 * @copyright Yuoa (Jio Gim)
 *
**/

    $template_url = get_bloginfo('template_url');

?>
<meta charset="<?php bloginfo('charset') ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="theme-color" content="#000737">
<script src="<?php echo $template_url; ?>/script/float-bar.js"></script>
<script src="<?php echo $template_url; ?>/script/onload.js"></script>
<link href="<?php echo $template_url; ?>/style.css" rel="stylesheet">
<link href="<?php echo $template_url; ?>/image/favicon.ico" rel="shortcut icon">
<?php

    /*
    NOTE What wp_head() includes
     - meta[name=robots]
     - link[rel=dns-prefetch]
     - link[rel=https://api.w.org/]
     - link[rel=EditURI]
     - link[rel=wlwmanifest]
     - And other basic Javascripts and Stylesheets
    */

    // Wordpress necessary tags
    wp_head();

?>
