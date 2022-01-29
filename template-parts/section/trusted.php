<?php  global $buson_options; ?>
<div class="we-trusted-area trusted-padding">
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-xl-7 col-lg-7">
                <div class="trusted-img">
                    <img src="<?php echo $buson_options['trusted-img']['url']; ?>" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="trusted-caption">
                    <h2><?php echo $buson_options['trusted-title']; ?></h2>
                    <p><?php echo $buson_options['trusted-text']; ?></p>
                    <a href="<?php echo $buson_options['trusted-btn-url']; ?>"
                        class="btn trusted-btn"><?php echo $buson_options['trusted-btn-text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>