<?php
class Mate_Text_Parallax_Widget extends WP_Widget {
	function __construct() {
		// Base ID, name
		parent::__construct ( 'mate-text-parallax', 'Mate Text Parallax' );
		
		add_action ( 'widgets_init', function () {
			register_widget ( 'Mate_Text_Parallax_Widget' );
		} );
	}
	public $args = array (
			'before_widget' => '<div class="widget-wrap">',
			'after_widget' => '</div></div>'
	);
	public function widget($args, $instance) {
		echo $args ['before_widget'];
		  ?>
		  <div class="parallax-container">
		    <div class="parallax"><img src="<?php echo $instance ['background_img'] ?>">
		      <div class="row">
		        <div class="col s12 center">
		          <p class="left-align light"><?php echo esc_attr( $this->get_field_id( 'text' ) ); ?></p>
              </div>
		      </div>
		    </div>
        </div>
    <?php 
		  
		echo $args ['after_widget'];
	}
	public function form($instance) {
		$background_img = ! empty ( $instance ['background_img'] ) ? $instance ['background_img'] : esc_html__ ( '', 'text_domain' );
		$text = ! empty ( $instance ['text'] ) ? $instance ['text'] : esc_html__ ( '', 'text_domain' );
		?>
<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'background_img' ) ); ?>"><?php esc_attr_e( 'background_img:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'background_img' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'background_img' ) ); ?>"
    type="text" value="<?php echo esc_attr( $background_img ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
</p>
<?php
	}
	public function update($new_instance, $old_instance) {
		$instance = array ();
		$instance ['background_img'] = (! empty ( $new_instance ['background_img'] )) ? strip_tags ( $new_instance ['background_img'] ) : '';
		$instance ['text'] = (! empty ( $new_instance ['text'] )) ? $new_instance ['text'] : '';
		
		return $instance;
	}
}
$mate_text_parallax_widget = new Mate_Text_Parallax_Widget();
