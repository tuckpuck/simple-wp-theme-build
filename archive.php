<?php get_header();?>
<div class="container">


<div class="text-center py-5 display-3 mx-auto"><?php single_cat_title();?></div>

<?php if (have_posts()) : while(have_posts()) : the_post();?>
<div class="row">
<?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
<?php endif;?>
</div>

<div class="row">
<h3><?php the_title();?></h3>  
<?php the_excerpt();?>
<a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
</div>

<?php endwhile; endif;?>


</div>
<?php get_footer();?>