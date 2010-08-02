<?php
/**
 * @package WordPress
 * @subpackage Apricot
 */
?>

<div id="footer">

<!--
<?php /* If this is a single post page or page */ if ( is_single() || is_page() ) { ?>
  <p class="inline">Location : <?php wp_title(''); ?><?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></p>
<?php } else { ?>
  <p class="inline">Location : </p>
  <h1><?php wp_title(''); ?><?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></h1>
<?php } ?>
-->

  <p>
    <a href='http://joycetipping.com/'>joycetipping.com</a> is provided under the <a href='http://creativecommons.org/licenses/by-sa/3.0/'>Creative Commons Attribution-ShareAlike</a> license.
    <a href="http://validator.w3.org/check?uri=referer" title="Validate the XHTML of this page.">XHTML</a>, 
    <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Validate the CSS of this page.">CSS</a>.
  </p>

  <p>
    Powered by <a href="http://wordpress.org/">WordPress</a> <?php bloginfo('version'); ?> |
    <a href='http://github.com/joycetipping/cherry'>Cherry</a> is my version of <a href="http://www.ardamis.com/2007/06/03/apricot/">Apricot</a>, an excellent theme by <a href="http://www.ardamis.com/">Ardamis.com</a>.
  </p>
  
  <p><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.</p>
    <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
  
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
