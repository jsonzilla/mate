<?php
class Mate_About_Widget extends WP_Widget {
	function __construct() {
		// Instantiate the parent object
		parent::__construct(
				'Mate_About_Widget', // Base ID
				__('Mate About Widget', 'text_domain'), // Name
				array( 'description' => __( 'Widget About and Contact', 'text_domain' ), ) // Args
				);
		
		add_action ( 'widgets_init', function () {
			register_widget ( 'Mate_About_Widget' );
		} );
	}
	
	function widget( $args, $instance ) {
		echo $args['before_widget'];
		
		echo '<img src="' . $instance['url_logo']. '" /><br><br>';
		echo '<a href="' . $instance['url_facebook']. '"><img src="' .get_template_directory_uri() . '/images/facebook.png" /></a>';
		echo '<a href="' . $instance['url_linkedin']. '"><img src="' .get_template_directory_uri() . '/images/linkedin.png" /></a>';
		echo '<a href="' . $instance['url_twitter']. '"><img src="' .get_template_directory_uri() . '/images/twitter.png" /></a>';
		echo '<a href="' . $instance['url_youtube']. '"><img src="' .get_template_directory_uri() . '/images/youtube.png" /></a>';
		
		echo '<div class="textwidget">';
		echo esc_html__( $instance ['text'], 'text_domain' );
		echo '</div>';
		
		echo $args['after_widget'];
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['url_logo'] = strip_tags($new_instance['url_logo']);
		$instance['url_facebook'] = strip_tags($new_instance['url_facebook']);
		$instance['url_linkedin'] = strip_tags($new_instance['url_linkedin']);
		$instance['url_twitter'] = strip_tags($new_instance['url_twitter']);
		$instance['url_youtube'] = strip_tags($new_instance['url_youtube']);
		$instance['text'] = strip_tags($new_instance['text']);
		
		return $instance;
	}
	
	function form($instance) {
		$url_logo = 'http://../jpg';
		$url_facebook = 'http://facebook.com/';
		$url_linkedin = 'http://linkedin.com/';
		$url_twitter = 'http://twitter.com/';
		$url_youtube = 'http://youtube.com/';
		$text = 'digite o endereço';
		
		if( $instance) {
			$url_logo = esc_attr($instance['url_logo']);
			$url_facebook = esc_attr($instance['url_facebook']);
			$url_linkedin = esc_attr($instance['url_linkedin']);
			$url_twitter = esc_attr($instance['url_twitter']);
			$url_youtube = esc_attr($instance['url_youtube']);
			$text = esc_textarea($instance['text']);
		} ?>
        <p>
          <label for="<?php echo $this->get_field_id('url_logo'); ?>"><?php _e('Url Image Logo', 'wp_widget_plugin'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('url_logo'); ?>" name="<?php echo $this->get_field_name('url_logo'); ?>" type="text" value="<?php echo $url_logo; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('url_facebook'); ?>"><?php _e('Link Facebook Profile', 'wp_widget_plugin'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('url_facebook'); ?>" name="<?php echo $this->get_field_name('url_facebook'); ?>" type="text" value="<?php echo $url_facebook; ?>" />
        </p>  
        <p>
          <label for="<?php echo $this->get_field_id('url_linkedin'); ?>"><?php _e('Link Linkedin Profile', 'wp_widget_plugin'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('url_linkedin'); ?>" name="<?php echo $this->get_field_name('url_linkedin'); ?>" type="text" value="<?php echo $url_linkedin; ?>" />
        </p>  
        <p>
          <label for="<?php echo $this->get_field_id('url_twitter'); ?>"><?php _e('Link Twitter Profile', 'wp_widget_plugin'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('url_twitter'); ?>" name="<?php echo $this->get_field_name('url_twitter'); ?>" type="text" value="<?php echo $url_twitter; ?>" />
        </p>  
        <p>
          <label for="<?php echo $this->get_field_id('url_youtube'); ?>"><?php _e('Link Youtube Channel', 'wp_widget_plugin'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('url_youtube'); ?>" name="<?php echo $this->get_field_name('url_youtube'); ?>" type="text" value="<?php echo $url_youtube; ?>" />
        </p>          
        <p>
		  <textarea class="widefat"
		    id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
		    name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" 
		    type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>        
	<?php }
}
$mate_about_widget = new Mate_About_Widget();