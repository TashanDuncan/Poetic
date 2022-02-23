<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center flex-wrap">
        <?php if(has_post_thumbnail()):?>
        <a href="<?php the_permalink()?>"><img class="img-fluid mb-3 mr-4 img-thumbnail"
                src="<?php the_post_thumbnail_url("")?>" alt="<?php the_title();?>" width="300" height="200"></a>
        <?php endif;?>

        <div class="blog-content">
            <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <p class="post-meta">by <?php the_author_link();?></p>
            <?php the_excerpt();?>
            <a href="<?php the_permalink()?>" class="btn btn-primary text-uppercase">Read More</a>
        </div>
    </div>
</div>
<?php endwhile; else: endif;?>