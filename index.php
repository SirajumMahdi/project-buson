<?php 

get_header(); ?>
<!-- Breadcrumb Area Start-->
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<!-- Breadcrumb Area End-->
<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                    <?php
                        endwhile;
                    endif;
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