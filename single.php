<?php get_header();?>
<?php get_header('pages');?>

<section class="container text-center p-4 px-lg-5">

<h1><?php the_title();?></h1>
<div>
    <?php get_template_part('includes/section', 'blogcontent');?>
</div>
</section>
<?php get_footer();?>