<?php
/**
 * @package WordPress
 * @subpackage Apricot
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head profile="http://gmpg.org/xfn/11">

<title><?php wp_title(''); ?><?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>

<meta name="author" content="Ardamis.com | http://www.ardamis.com/" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie6.css" type="text/css" media="screen" />
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>
<body>

<!-- <?php wp_title(''); ?> -->

<div id="page">

  <div id="header">

    <h1 id="sitetitle"><a id="homelink" title='joycetipping.com Homepage' href="http://joycetipping.com">joycetipping</a></h1>
    <h1 id="blogtitle"><a id="bloglink" title='Blog Homepage' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    
<!--<p class="blogtitle"><a class="hidelink" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></p>
    <p class="description"><?php bloginfo('description'); ?></p>-->

  </div>
