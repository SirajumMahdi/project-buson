<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
        <a href="#" class="blog_item_date">
            <h3><?php echo get_the_date('d') ?></h3>
            <p><?php echo get_the_date('M') ?></p>
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="<?php the_permalink();?>">
            <h2><?php the_title();?></h2>
        </a>
        <?php the_excerpt();?>
        <ul class="blog-info-link">

            <li>
                <?php
                    $categories = get_the_category();
                    $separator = ', ';
                    $result = '';
                    if ($categories) {
                        foreach ($categories as $category) {
                            $result .= '<a href="' . get_category_link($category->term_id) . '"><i class="fa fa-user"></i>' . $category -> cat_name . '</a>' . $separator ;
                        }
                        echo trim($result, $separator);     
                    }
                ?>
            </li>
            <li><a href="#"><i class="fa fa-comments"></i> <?php comments_number(); ?></a>
            </li>
        </ul>
    </div>
</article>