<?php 
    $request_content_title = get_field('request_content_title');
    $request_content_text = get_field('request_content_text');
    $request_content_button_url = get_field('request_content_button_url');
    $request_content_button_text = get_field('request_content_button_text');
    ?>
<div class="request-back-area section-padding30">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-8 mx-auto text-center">
                <div class="request-content">
                    <h3><?php echo $request_content_title; ?></h3>
                    <p><?php echo $request_content_text; ?></p>
                    <a href="<?php echo $request_content_button_url; ?>"
                        class="btn trusted-btn"><?php echo $request_content_button_text; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>