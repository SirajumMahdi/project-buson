<?php 
/*

Template Name: Services Page
*/
get_header(); ?>
<main>

    <!-- Breadcrumb Area Start-->
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    <!-- Breadcrumb Area End-->

    <!-- services Area Start-->
    <?php get_template_part( 'template-parts/services' ); ?>
    <!-- services Area End-->


    <!-- Recent Area Start -->
    <?php get_template_part( 'template-parts/content', 'post' ); ?>
    <!-- Recent Area End-->

</main>

<?php get_footer();?>