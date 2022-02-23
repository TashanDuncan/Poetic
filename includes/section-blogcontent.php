<?php if( have_posts() ): while( have_posts() ): the_post();?>
<div class="text-center">
    <?php echo get_the_date();?>
    <p>Post by <?php the_author();?> </p>
</div>
<div class="row my-5">
    <?php if(has_post_thumbnail()):?>
    <div class="col-sm">
        <img class="img-fluid mb-3 img-thumbnail" src="<?php the_post_thumbnail_url("")?>" alt="<?php the_title();?>">
    </div>
    <?php endif;?>
    <div class="col-sm align-self-center text-center">
        <?php the_content();?>
        <?php
$tags = get_the_tags();
foreach($tags as $tag):?>

        <a href="<?php echo get_tag_link( $tag->term_id );?>" class="badge badge-success">
            <?php echo $tag->name;?>
        </a>

        <?php endforeach;?>
        <div class="my-2">
            <?php
        $categories = get_the_category();
        foreach($categories as $cat):?>

            <a class="mx-1" href="<?php echo get_category_link($cat);?>">
                <?php echo $cat->name;?>
            </a>
            <?php endforeach;?>
        </div>
    </div>
</div>






<?php comments_template();?>

<?php endwhile; else: endif;?>