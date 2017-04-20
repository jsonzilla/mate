<?php
class Mate_Song_Widget extends WP_Widget {
	function __construct() {
		// Instantiate the parent object
		parent::__construct(
				'Mate_Song_Widget', // Base ID
				__('Mate Song Widget', 'text_domain'), // Name
				array( 'description' => __( 'Widget for playable song', 'text_domain' ), ) // Args
				);
		
		add_action ( 'widgets_init', function () {
			register_widget ( 'Mate_Song_Widget' );
		} );
	}
	
	function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<h2>Now Listening:</h2>';
		echo $instance['songinfo'];
		echo
		'<p>
			<audio controls>
				<source src="' . $instance['link'] . '" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
			<a href="' . $instance['link'] . '">Download it</a>
		</p>';
		echo $args['after_widget'];
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['link'] = strip_tags($new_instance['link']);
		$instance['songinfo'] = strip_tags($new_instance['songinfo']);
		
		return $instance;
	}
	
	function form($instance) {
		$link = '';
		$songinfo = '';
		
		if( $instance) {
			$link = esc_attr($instance['link']);
			$songinfo = esc_textarea($instance['songinfo']);
		} ?>
		<p>
			<label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Link', 'wp_widget_plugin'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo $link; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('songinfo'); ?>"><?php _e('Song Info:', 'wp_widget_plugin'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('songinfo'); ?>" name="<?php echo $this->get_field_name('songinfo'); ?>" type="text" value="<?php echo $songinfo; ?>" />
		</p>
		
	<?php }
}
$mate_audio_widget = new Mate_Song_Widget();