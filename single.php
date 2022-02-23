<?php get_header();?>
<?php get_header('pages');?>

<section class="container  p-4 px-lg-5">

    <h1 class="text-center my-3"><?php the_title();?></h1>
    <div>
        <?php get_template_part('includes/section', 'blogcontent');?>
    </div>
</section>
<?php get_footer();?>