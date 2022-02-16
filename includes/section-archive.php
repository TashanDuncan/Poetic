<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="card mb-3">
    <div class="card-body">
        <h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <p class="post-meta">by <?php the_author_link();?></p>
        <?php the_excerpt();?>
        <a href="<?php the_permalink()?>" class="btn btn-primary text-uppercase" >Read More</a>
    </div>
</div>
<?php endwhile; else: endif;?>