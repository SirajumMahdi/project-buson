<div class="recent-area section-paddingt">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Our Recent News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );
                $query = new WP_Query($args);
                while($query->have_posts()) {
                    $query->the_post();

            ?>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30">
                    <div class="recent-img">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </div>
                    <div class="recent-cap">
                        <?php
                            foreach (get_the_category() as $category){
                                    $category_name = $category -> cat_name;
                                }
                                ?>
                        <span><?php echo $category_name; ?></span>
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <p><?php the_date('M j, Y');?></p>
                    </div>
                </div>
            </div>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>