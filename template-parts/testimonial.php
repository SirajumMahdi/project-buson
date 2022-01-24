<div class="testimonial-area fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="h1-testimonial-active">
                    <!-- Single Testimonial -->
                    <?php
                        $args = array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => 3
                        );
                        $query = new WP_Query($args);
                        while($query->have_posts()) {
                            $query->the_post();

                        $authors_title = get_field('authors_title');
                        $rating = get_field('rating');
                    ?>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial pt-65">
                        <!-- Testimonial tittle -->
                        <div class="testimonial-icon mb-45">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>"
                                class="ani-btn">
                        </div>
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption text-center">
                            <?php the_excerpt();?>
                            <!-- Rattion -->
                            <div class="testimonial-ratting">
                                <?php 
                                        if($rating==="1"): ?>
                                <i class="fas fa-star"></i>
                                <?php endif; ?>
                                <?php 
                                        if($rating==="2"): ?>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <?php endif; ?>
                                <?php 
                                        if($rating==="3"): ?>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <?php endif; ?>
                                <?php 
                                        if($rating==="4"): ?>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <?php endif; ?>
                                <?php 
                                        if($rating==="5"): ?>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <?php endif; ?>
                            </div>
                            <div class="rattiong-caption">
                                <span><?php the_title();?><span> - <?php echo $authors_title; ?></span> </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <?php
                        }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>