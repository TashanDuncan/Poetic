<?php

/*
Template Name: Shop Page
*/
?>
<?php get_header();?>
<?php get_header('pages');?>


<div class="content py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php the_title();?></h1>
                        <?php get_template_part('includes/section', 'content');?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>