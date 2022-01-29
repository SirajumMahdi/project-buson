<div class="blog_right_sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { 
     dynamic_sidebar('sidebar-1');
        }?>

    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Category</h4>
        <?php foreach (get_categories() as $cat) : ?>
        <ul class="list cat-list">
            <li>
                <a href="<?php echo get_category_link($cat->term_id); ?>" class="d-flex">
                    <p><?php echo $cat->cat_name; ?></p>
                    <p>(<?php echo $cat->count; ?>)</p>
                </a>
            </li>
        </ul>
        <?php endforeach; ?>
    </aside>
    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Recent Post</h3>
        <?php 
        $args = array(
            'post_type' => 'post',
            'post_per_page' => 3
        );
        $query = new WP_Query($args);
            while($query->have_posts()):
                $query->the_post();?>
        <div class="media post_item">
            <?php the_post_thumbnail('custom-size');?>
            <div class="media-body">
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
                <p><?php the_date('M d, Y'); ?></p>
            </div>
        </div>
        <?php 
        endwhile;
        wp_reset_postdata(  );
        ?>

    </aside>
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title">Tag Clouds</h4>
        <ul class="list">
            <?php 
        $tags = get_tags(array(
        'hide_empty' => false
        ));
        ;
        foreach ($tags as $tag) {?>
            <li>
                <a href="<?php echo 
                get_term_link($tag) ?>"><?php echo $tag->name;?></a>
            </li>

            <?php }
?>
        </ul>
    </aside>


    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_5.png"
                        alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_6.png"
                        alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_7.png"
                        alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_8.png"
                        alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_9.png"
                        alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/post/post_10.png"
                        alt="">
                </a>
            </li>
        </ul>
    </aside>


    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Newsletter</h4>

        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit">Subscribe</button>
        </form>
    </aside>
</div>