<?php

/*
Template Name: Contact Page
*/
?>
<?php get_header();?>
<?php get_header('pages');?>

<section id="contact">

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