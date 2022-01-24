<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <?php
            $args = array(
                'post_type' => 'slider',
                'posr_per_page' => 4
            );
            $query = new WP_Query($args);
            while($query->have_posts()){
                $query->the_post();
            
            $slider_subtitle = get_field('slider_subtitle');    
            $slider_button_url = get_field('slider_button_url');    
            $slider_button_text = get_field('slider_button_text');    
                
        ?>

        <div class="single-slider slider-height d-flex align-items-center"
            style="background-image:url('<?php echo get_the_post_thumbnail_url();?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="hero__caption">
                            <p><?php echo $slider_subtitle; ?></p>
                            <h1><?php the_title();?></h1>
                            <!-- Hero-btn -->
                            <div class="hero__btn">
                                <a href="<?php echo $slider_button_url; ?>"
                                    class="btn hero-btn"><?php echo $slider_button_text; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
                wp_reset_postdata();
        ?>
    </div>
</div>