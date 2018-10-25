<?php /* Template Name: Page Template */ 
  get_header ();
  while ( have_posts() ) :
    the_post();
?>
<div id="root" data-template="page" class="content-container"></div>
<?php
  endwhile; // End of the loop.
  get_footer();
?>
