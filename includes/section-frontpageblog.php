<?php 
   // the query
   $query = new WP_Query( array(
     'category_name' => 'blog',
      'posts_per_page' => 3,
   )); 
?>

<?php if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();?>


<div class="post-preview row align-items-center">
    <?php if(has_post_thumbnail()):?>
        <div class="post-img col-sm">
        <a href="<?php the_permalink()?>"><img  src="<?php the_post_thumbnail_url("")?>" alt="<?php the_title()?>"></a>
    </div>
    <?php endif;?>
    <div class="post-text col-sm ">
        <a href="<?php the_permalink();?>">
            <h3 class="post-title"><?php the_title();?></h3>
        </a>
        <?php the_excerpt();?>
        <p class="post-meta">
            Posted by
            <?php the_author_link();?>
            on <?php echo get_the_date();?>
        </p>
        <div class=""><a class="btn btn-primary text-uppercase" href="<?php the_permalink();?>">Read More</a></div>
    </div>
</div>
<hr class="my-4">
<?php endwhile; else: endif;?>