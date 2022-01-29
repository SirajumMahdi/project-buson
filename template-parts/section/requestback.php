<?php  global $buson_options; ?>
<div class="request-back-area section-padding30">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="request-content">
                    <h3><?php echo $buson_options['callback-title']; ?></h3>
                    <p><?php echo $buson_options['callback-text']; ?></p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <!-- Contact form Start -->
                <div class="form-wrapper">
                    <form id="contact-form" action="#" method="POST">
                        <?php echo do_shortcode('[contact-form-7 id="142" title="Untitled"]')?>
                    </form>
                </div>
            </div> <!-- Contact form End -->
        </div>
    </div>
</div>