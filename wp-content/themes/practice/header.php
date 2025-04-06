<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no, email=no, address=no">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/favi.png">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/favi.png">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/favi.png">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/ogp.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header -->
    <header class="l-header p-header" id="header"></header>
    <!-- /header -->