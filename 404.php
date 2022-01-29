<?php get_header( ) ?>

<!-- Breadcrumb Area Start-->
<?php get_template_part( 'template-parts/breadcrumb' ); ?>
<!-- Breadcrumb Area End-->

<div class="container my-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-not-found">

                <h1><strong>Sorry, Nothing found here!</strong></h1>
                <a href="<?php echo site_url();?>" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer( ) ?>