<?php get_header();?>
<div class="container">
<div class="row">
<div class="text-center py-5 display-3 mx-auto"><?php the_title();?></div>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; endif;?>


</div>
</div>
<?php get_footer();?>