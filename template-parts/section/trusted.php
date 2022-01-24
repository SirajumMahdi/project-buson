<?php 
        $trusted_caption = get_field('trusted-caption');
        $trusted_text = get_field('trusted_text');
        $trusted_button_url = get_field('trusted_button_url');
        $trusted_button_text = get_field('trusted_button_text');
    ?>
<div class="we-trusted-area trusted-padding">
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-xl-7 col-lg-7">
                <div class="trusted-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/team/wetrusted.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="trusted-caption">
                    <h2><?php echo $trusted_caption; ?></h2>
                    <p><?php echo $trusted_text; ?></p>
                    <a href="<?php echo $trusted_button_url; ?>"
                        class="btn trusted-btn"><?php echo $trusted_button_text; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>