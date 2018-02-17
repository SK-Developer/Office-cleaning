<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Meta files -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;">

    <!-- External min.css files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Internal min.css files -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body id="body" onload="adapt()" <?php body_class(); ?>>


<div style="margin-bottom:400px"></div>

<div class="container" style="min-height: 300px">

<?php
