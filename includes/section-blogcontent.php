<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <?php echo get_the_date();?>
    <p>Post by <?php the_author();?> </p>

    <div class="">
    <?php if(has_post_thumbnail()):?>

        <img class="img-fluid mb-3 img-thumbnail" src="<?php the_post_thumbnail_url('blog-small')?>" alt="<?php the_title();?>">
    <?php endif;?>
    </div>
    <?php the_content();?>
    

<?php
$tags = get_the_tags();
foreach($tags as $tag):?>

    <a href="<?php echo get_tag_link( $tag->term_id );?>" class="badge badge-success">
        <?php echo $tag->name;?>
    </a>

<?php endforeach;?>
<div>
<?php
        $categories = get_the_category();
        foreach($categories as $cat):?>
                
                <a class="mx-1" href="<?php echo get_category_link($cat);?>">
                <?php echo $cat->name;?>
                </a>
 <?php endforeach;?>
</div>


<?php comments_template();?>

<?php endwhile; else: endif;?>