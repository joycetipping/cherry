<?php
/**
 * @package WordPress
 * @subpackage Apricot
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" />

<?php wp_head(); ?>

</head>
<body>

<!-- <?php wp_title(''); ?> -->

<div id="page">

  <div id="header">

    <h1 id="site-title"><a id="homelink" title='JoyceTipping.com' href="http://joycetipping.com">joycetipping</a></h1>
    <h1 id="blog-title"><a id="bloglink" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

    <!--
		<h1 id='site-title'>      <a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?>       </a></h1>
		<h1 id="site-description"><a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>/"><?php bloginfo('description'); ?></a></h1>
    -->
    
  </div>
