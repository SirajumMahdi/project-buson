<?php

class buson_post_widget extends WP_Widget{
    public function __construct(){
        parent :: __construct(
            'csw-1',
            'Buson Recent Post Widget'
        );
        add_action('widgets_init', function(){
            register_widget('buson_post_widget');
        });
    }

    public $args = array(
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>',
        'before_widget' => '<aside class="single_sidebar_widget popular_post_widget">',
        'after_widget' => '</aside>'
    );
    public function widget($args,$instace){
        echo $args['before_widget'];

        echo $args['before_title'];
        echo $args['after_title'];
        $wdpost = array(
            'post_type' => 'post',
            'post_per_page' => 3
        );
        $query = new WP_Query($wdpost);
            while($query->have_posts()):
                $query->the_post();?>

<div class="media post_item">
    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="post">
    <div class="media-body">
        <a href="single-blog.html">
            <h3><?php the_title(); ?></h3>
        </a>
        <p><?php the_date();?></p>
    </div>
</div>

<?php endwhile;    
        echo $args['after_widget'];
    }
}

$ob = new buson_post_widget();


?>