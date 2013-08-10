<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/*
Template Name: All posts
*/

get_header(); ?>

<div id="content-archive" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<ul>
<?php
$posts = get_posts(array(
	'posts_per_page'  => -1,
	'offset'          => 0,
	'category'        => '',
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'include'         => '',
	'exclude'         => '',
	'meta_key'        => '',
	'meta_value'      => '',
	'post_type'       => 'post',
	'post_mime_type'  => '',
	'post_parent'     => '',
	'post_status'     => 'publish',
	'suppress_filters' => true ));
foreach($posts as $post) :
?>
<li><?php the_time(get_option('date_format')) ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php endforeach; ?>
</ul>

<?php endwhile; ?>
<?php endif; ?>

</div><!-- end of #content-archive -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
