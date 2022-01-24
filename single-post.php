<?php get_header(); ?>

<!-- Breadcrumb Area Start-->
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<!-- Breadcrumb Area End-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </div>
                    <div class="blog_details">
                        <h2><?php the_title();?></h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li>
                                <?php
                                    $categories = get_the_category();
                                    $separator = ', ';
                                    $result = '';
                                    if ($categories) {
                                        foreach ($categories as $category) {
                                            $result .= '<a href="' . get_category_link($category->term_id) . '"><i class="fa fa-user"></i>' . $category -> cat_name . '</a>' . $separator ;
                                        }
                                        echo trim($result, $separator);     
                                    }
                                ?>
                            </li>
                            <li><a href="#"><i class="fa fa-comments"></i> <?php comments_number(); ?></a>
                            </li>
                        </ul>
                        <?php the_content();?>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <?php 
                                    $prev_post = get_previous_post();
                                    if(is_a($prev_post,'WP_Post')):
                                    ?>
                                <div class="thumb">
                                    <a href="<?php echo get_the_permalink($prev_post->ID);?>">
                                        <img class="img-fluid"
                                            src="<?php echo get_the_post_thumbnail_url( $prev_post->ID, array(60,60));?>"
                                            alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="<?php echo get_the_permalink($prev_post->ID);?>">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="<?php echo get_the_permalink($prev_post->ID);?>">
                                        <h4><?php echo get_the_title($prev_post->ID);?></h4>
                                    </a>
                                </div>
                                <?php 
                                    endif;
                                ?>
                            </div>

                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <?php 
                                    $next_post = get_next_post();
                                    if(is_a($next_post,'WP_Post')):
                                    ?>
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="<?php echo get_the_permalink($next_post->ID);?>">
                                        <h4><?php echo get_the_title($next_post->ID);?></h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="<?php echo get_the_permalink($next_post->ID);?>">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="<?php echo get_the_permalink($next_post->ID);?>">
                                        <img class="img-fluid"
                                            src="<?php echo get_the_post_thumbnail_url( $next_post->ID, array(60,60));?>"
                                            alt="">
                                    </a>
                                </div>
                                <?php 
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <?php 
                            $author_id=$post->post_author; 
                            if($avatar = get_avatar($author_id)): 
                                echo $avatar; 
                            endif; 
                        ?>
                        <div class="media-body">
                            <a href="#">
                                <h4><?php the_author_meta( 'display_name', $author_id ) ?></h4>
                            </a>
                            <p><?php the_author_meta( 'description', $author_id ) ?></p>
                        </div>
                    </div>
                </div>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()):
                        comments_template();              
                    endif;
                ?>
            </div>
            <div class="col-lg-4">
                <?php get_template_part( 'template-parts/custom-sidebar' ); ?>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->





<?php get_footer(); ?>