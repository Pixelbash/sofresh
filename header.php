<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> <?php wp_title(' - '); ?></title>
    <meta name="viewport" content="initial-scale=0.7"> 

    <?php /* make theme options available to javascript */ ?>
    <script type="text/javascript">/* <![CDATA[ */var js_opts = <?php echo getOptions() ?>;/* ]]> */</script>
    
    <?php /* clean header */ ?>
    <link rel="stylesheet/less"  href='<?php bloginfo('template_url') ?>/less/style.less?ver=1.0a' type='text/css' media='all' />
    <script src="<?php bloginfo('template_url') ?>/js/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
