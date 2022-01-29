<?php
get_header();
?>

<div class="slider-area">
    <div class="single-slider slider-height2 d-flex align-items-center"
        style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><?php _e( 'Search results for: ', 'twentynineteen' ); ?>
                            <span class="page-description"><?php echo get_search_query(); ?></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                    while(have_posts()):
                        the_post();
                        ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                    <?php
                        endwhile;
                        ?>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <?php get_template_part( 'template-parts/pagination' ); ?>
                    </nav>
                </div>
            </div>



            <div class="col-lg-4">
                <?php get_template_part( 'template-parts/custom-sidebar' ); ?>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->





<?php get_footer();?>