<div id="right-column">
<div id="content-wrapper">
<div id="post-content">
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
?>
<h1><?php the_title(); ?></h1>
<?php $pdf = get_post_meta($post->ID, 'pdf', true);
if($pdf) : ?>
<p class="pdf"><a href="<?php echo get('pdf'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/pdf-icon.png" /> <?php echo get('pdf_title'); ?></a></p>
<?php endif; ?>
<div id="article">
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>

</div>
</div>
</div>
