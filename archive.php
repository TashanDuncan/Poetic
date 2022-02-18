<?php get_header();?>
<?php get_header('pages');?>

<div class="container text-center p-4 px-lg-5">
    <h1 class="my-5"><?php echo single_cat_title();?></h1>
    <?php get_template_part('includes/section', 'archive');?>
    <?php next_posts_link();?>
    <?php previous_posts_link();?>
</div>
<?php get_footer();?>