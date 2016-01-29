<?php
	
	/***** Custom Posts Widget () *****/	

class flexy_custom_posts_widget extends WP_Widget {
    function flexy_custom_posts_widget() {
        $widget_ops = array('classname' => 'flexy_custom_posts', 'description' => __('Custom Posts Widget to display posts based on categories or tags.', 'flexy'));
        $this->WP_Widget('flexy_custom_posts', __('**Flexy  Custom Posts** ', 'flexy'), $widget_ops);
    }
    function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', empty( $instance['title']) ? '' : esc_attr($instance['title']), $instance, $this->id_base);
        $category = isset($instance['category']) ? esc_attr($instance['category']) : '';
        $tags = empty($instance['tags']) ? '' : esc_attr($instance['tags']);
        $postcount = empty($instance['postcount']) ? '5' : absint($instance['postcount']);
        $offset = empty($instance['offset']) ? '' : absint($instance['offset']);
        $sticky = isset($instance['sticky']) ? absint( $instance['sticky'] ): 0;
        
        if ($category) {
        	$cat_url = get_category_link($category);
	        $before_title = $before_title . '<a href="' . esc_url($cat_url) . '" class="widget-title-link">';
	        $after_title = '</a>' . $after_title;
        }
               
        echo $before_widget;       
        if (!empty( $title)) { echo $before_title . $title . $after_title; } ?>  
        <ul class="k-widget clearfix"> <?php
		$args = array('posts_per_page' => $postcount, 'offset' => $offset, 'cat' => $category, 'tag' => $tags, 'ignore_sticky_posts' => $sticky);
		$counter = 1;
		$widget_loop = new WP_Query($args);
		while ($widget_loop->have_posts()) : $widget_loop->the_post(); ?>
			<li class="k-wrap k-small clearfix">
			   
				<div class="k-thumb"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('k_small'); } else { echo '<img src="' . get_template_directory_uri() . '/images/noimage-k_small.png' . '" alt="No Image" />'; } ?></a></div>
				<div class="k-data">
					<p class="k-widget-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>	
					<p class="meta"><?php $post_date = get_the_date(); echo $post_date; echo ' // '; comments_number(__('0 Comments', 'flexy'), __('1 Comment', 'flexy'), __('% Comments', 'flexy')); ?></p>
				</div>

			</li>
	<?php
		endwhile; 
		wp_reset_postdata(); ?>
        </ul><?php     
        echo $after_widget;      
    }    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['category'] = $new_instance['category'];
        $instance['postcount'] = strip_tags($new_instance['postcount']);
        $instance['offset'] = strip_tags($new_instance['offset']);        
        $instance['tags'] = strip_tags($new_instance['tags']);
        $instance['sticky'] = $new_instance['sticky'];
        return $instance;     
    }   
    function form($instance) {
        $defaults = array('title' => '', 'category' => '', 'tags' => '', 'postcount' => '5', 'offset' => '0', 'sticky' => 0);
        $instance = wp_parse_args((array) $instance, $defaults); ?>
        
        <p>
        	<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e('Title:', 'flexy'); ?></label>
			<input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" />
        </p>
        <p>
			<label for="<?php echo esc_attr( $this->get_field_id('category') ); ?>"><?php _e('Select a Category:', 'flexy'); ?></label>
			<select id="<?php echo esc_attr( $this->get_field_id('category') ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name('category') ); ?>">
				<option value="0" <?php if (!$instance['category']) echo 'selected="selected"'; ?>><?php _e('All', 'flexy'); ?></option>
				<?php
				$categories = get_categories(array('type' => 'post'));
				foreach($categories as $cat) {
					echo '<option value="' . $cat->cat_ID . '"';
					if ($cat->cat_ID == $instance['category']) { echo ' selected="selected"'; }
					echo '>' . $cat->cat_name . ' (' . $cat->category_count . ')';
					echo '</option>';
				}
				?>
			</select>
		</p>
		<p>
        	<label for="<?php echo esc_attr( $this->get_field_id('tags') ); ?>"><?php _e('Filter Posts by Tags (e.g. lifestyle):', 'flexy'); ?></label>
			<input class="widefat" type="text" value="<?php echo esc_attr($instance['tags']); ?>" name="<?php echo esc_attr( $this->get_field_name('tags') ); ?>" id="<?php echo esc_attr( $this->get_field_id('tags') ); ?>" />
	    </p> 
        <p>
        	<label for="<?php echo esc_attr( $this->get_field_id('postcount') ); ?>"><?php _e('Show:', 'flexy'); ?></label>
			<input type="text" size="2" value="<?php echo esc_attr($instance['postcount']); ?>" name="<?php echo esc_attr( $this->get_field_name('postcount') ); ?>" id="<?php echo esc_attr( $this->get_field_id('postcount') ); ?>" /> <?php _e('Posts', 'flexy'); ?>
	    </p> 
	    <p>
        	<label for="<?php echo esc_attr( $this->get_field_id('offset') ); ?>"><?php _e('Skip:', 'flexy'); ?></label>
			<input type="text" size="2" value="<?php echo esc_attr($instance['offset']); ?>" name="<?php echo esc_attr( $this->get_field_name('offset') ); ?>" id="<?php echo esc_attr( $this->get_field_id('offset') ); ?>" /> <?php _e('Posts', 'flexy'); ?>
	    </p> 
        <p>
      		<input id="<?php echo esc_attr( $this->get_field_id('sticky') ); ?>" name="<?php echo esc_attr( $this->get_field_name('sticky') ); ?>" type="checkbox" value="1" <?php checked('1', $instance['sticky']); ?>/>
	  		<label for="<?php echo esc_attr( $this->get_field_id('sticky') ); ?>"><?php _e('Ignore Sticky Posts', 'flexy'); ?></label>
    	</p>
    	<?php    
    }
}
register_widget('flexy_custom_posts_widget');
 ?>