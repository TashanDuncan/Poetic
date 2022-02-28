<?php get_header();?>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5" id="frontPageNav">
        <a class="navbar-brand" href="#page-top">PoeticFlowerX </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <div class="d-flex mx-4">
                <a class="btn btn-outline-dark nav-cart" href="./basket">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span
                        class="badge bg-dark text-white ms-1 rounded-pill cart-num"><?php echo $woocommerce->cart->cart_contents_count ?></span>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">@poeticflowerx</h1>
                <div class="my-4 d-flex justify-content-center">
                    <a href="https://www.instagram.com/poeticflowerx" target="_blank"><i
                            class="mx-3 fa-brands fa-instagram fa-2xl"></i></a>
                    <a href="https://www.tiktok.com/@pyt2x" target="_blank"><i
                            class="mx-3 fa-brands fa-tiktok fa-2xl"></i></a>
                </div>

                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">The only 1 creative. Flower. owner of <a
                        href="https://www.instagram.com/onecreativex/" target="_blank">@onecreativex</a> and <a
                        href="https://www.instagram.com/poeticflowerx/" target="_blank">@poeticflowerx</a>
                    ✨🌸. Poet
                </p>
                <div class="d-flex-justify-center flex-wrap">
                    <a class="btn btn-primary btn-xl m-3" href="#about">About Me</a>
                    <a class="btn btn-primary btn-xl m-3" href="#blog">My Blog</a>
                    <a class="btn btn-primary btn-xl m-3" href="#shop">My Prints</a>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <img class="about-img"
                    src="wp-content/themes/Poetic/images/273481140_505752304311033_3960426121381137167_n.jpg">
                <h2 class="text-white mt-2">About Me</h2>
                <hr class="divider divider-light" />
                <div class="text-white-75 mb-4">
                    <?php $query = new WP_Query( array( 'pagename' => 'about' ));?>

                    <?php if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();?>
                    <a class="text-white text-decoration-none" href="<?php the_permalink();?>"><?php the_excerpt();?>
                    </a>

                    <?php endwhile; else: endif;?>
                </div>
                <a class="btn btn-light btn-xl" href="#contact">Contact Me!</a>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section" id="blog">
    <div class="container text-center px-4 px-lg-5">
        <img class="blog-img mx-auto mb-4"
            src="wp-content/themes/Poetic/images/273429983_639680010577185_6237326259307283658_n.jpg">
        <h2 class="text-center mt-0">My Blog</h2>
        <hr class="divider" />
        <p>See the Latest Posts from my blog below!</p>
        <hr class="my-4">
        <div class="row gx-4 gx-lg-5">


            <?php get_template_part('includes/section', 'frontpageblog');?>




            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase"
                    href="category/blog/">Older
                    Posts →</a></div>
</section>
<!-- Call to action-->
<section class="page-section bg-dark text-white" id="shop">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Prints Available for Purchase!</h2>

    </div>
</section>
<section class="py-5">
    <div class="content py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo do_shortcode("[products limit='4' orderby='date']"); ?>
                </div>

            </div>
            <div class="container px-4 px-lg-5 text-center">
                <a class="btn btn-primary btn-xl" href="./shop">View All</a>
            </div>
        </div>
    </div>

</section>
<!-- Contact-->

<section class="page-section" id="contact">

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <hr class="my-4">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Send me a message and I will get back to you as soon as possible!<br>
                    Alternatively you can find my social media profiles <a href="https://linktr.ee/Poeticflowerx"
                        target="_blank">here!</a></p>

            </div>
        </div>
        <?php echo do_shortcode("[poetic-form]"); ?>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">

                <div class="my-4 d-flex justify-content-center">
                    <a href="https://www.instagram.com/poeticflowerx" target="_blank"><i
                            class="mx-3 fa-brands fa-instagram fa-2xl"></i></a>
                    <a href="https://www.tiktok.com/@pyt2x" target="_blank"><i
                            class="mx-3 fa-brands fa-tiktok fa-2xl"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>