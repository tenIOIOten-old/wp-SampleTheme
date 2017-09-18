<!--
Copyright (C)2017 Shiratori Tenta
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version3 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program. If not, see <http: //www.gnu.org/licenses/>.
-->
<!DOCTYPE html>
<html>

<head>

<!-- setting initial -->
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"content="ie=edge">
<title>
<?php  wp_title( '|', true, 'right' ); ?>
<?php  bloginfo( 'name' ); ?>
</title>
<meta name="description"　content="ディスクリプション">

<!-- setting favicon -->
<link rel="apple-touch-icon"sizes="180x180"href="<?php bloginfo( 'stylesheet_directory') ?>/ favicons/apple-touch-icon.png">
<link rel="icon"type="image/png"sizes="32x32"href="<?php bloginfo( 'stylesheet_directory') ?>/favicons/favicon-32x32.png">
<link rel="icon"type="image/png"sizes="16x16"href="<?php bloginfo( 'stylesheet_directory') ?>/favicons/favicon-16x16.png">
<link rel="manifest"href="<?php bloginfo( 'stylesheet_directory') ?>/favicons/manifest.json">
<link rel="mask-icon"href="<?php bloginfo( 'stylesheet_directory') ?>/favicons/safari-pinned-tab.svg"color="#5bbad5">
<meta name="theme-color"content="#ffffff">
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- setting mine -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?> 
</head>
<body>
    <header class="l-header">
        <h1 class="header-title"><?php bloginfo( 'name' ); ?></h1>
        <?php if ( is_active_sidebar( 'header-nav-widget' ) ) : ?>
        <div class="header-widget">
            <?php dynamic_sidebar( 'header-nav-widget' ); ?>
        </div>
        <?php endif; ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="l-main col-9">
