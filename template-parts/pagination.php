<ul class="pagination">
    <?php 
        global $wp_query;
        
        $big = 999999999; // need an unlikely integer
        
        $pages = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'prev_text'          => __( '<' ),
                'next_text'          => __( '>' ),
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'type'  => 'array',
            ) );
            if( is_array( $pages ) ):
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');   
                    
                foreach ( $pages as $page ) :    
    ?>
    <li class="page-item">
        <?php echo $page ?>
    </li>
    <?php endforeach;?>
    <?php endif; ?>
</ul>