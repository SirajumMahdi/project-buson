<?php 

/*

Template Name: Home Page
*/


get_header(); 


?>

<main>

    <!-- slider Area Start-->
    <?php get_template_part( 'template-parts/slider' ); ?>
    <!-- slider Area End-->

    <!-- We Trusted Start-->
    <?php get_template_part( 'template-parts/section/trusted' ); ?>
    <!-- We Trusted End-->

    <!-- services Area Start-->
    <?php get_template_part( 'template-parts/services' ); ?>
    <!-- services Area End-->

    <!-- Request Back Start -->
    <?php get_template_part( 'template-parts/section/requestback' ); ?>
    <!-- Request Back End -->

    <!-- Completed Cases Start -->
    <?php get_template_part( 'template-parts/content', 'case' ); ?>
    <!-- Completed Cases end -->

    <!-- Team-profile Start -->
    <?php get_template_part( 'template-parts/team' ); ?>
    <!-- Team-profile End-->

    <!-- Testimonial Start -->
    <?php get_template_part( 'template-parts/testimonial' ); ?>
    <!-- Testimonial End -->

    <!-- Recent Area Start -->
    <?php get_template_part( 'template-parts/content', 'post' ); ?>
    <!-- Recent Area End-->



</main>

<?php get_footer();?>