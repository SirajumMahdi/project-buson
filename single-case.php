<?php get_header(); ?>

<!-- Breadcrumb Area Start-->
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<!-- Breadcrumb Area End-->
<!-- Services Details Start -->
<div class="services-details section-padding2">
    <div class="container">
        <div class="row">
            <div class="offset-xl-12">
                <div class="s-detailsImg">
                    <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                </div>
            </div>
            <div class="offset-xl-12">
                <div class="s-details-caption">
                    <h2><?php the_title();?></h2>
                    <?php the_content();
                    $contact_button_url = get_field('contact_button_url'); 
                    $contact_button_text = get_field('contact_button_text'); 
                    ?>
                    <!-- btn -->
                    <a href="<?php echo $contact_button_url; ?>" class="btn red-btn"><?php echo $contact_button_text; ?>
                        <i class="ti-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Details End -->
<?php get_footer(); ?>