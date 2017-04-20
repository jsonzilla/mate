<?php
class Mate_Button_Parallax_Widget extends WP_Widget {
	function __construct() {
		// Base ID, name
		parent::__construct ( 'mate-button-parallax', 'Mate Button Parallax' );
		
		add_action ( 'widgets_init', function () {
			register_widget ( 'Mate_Button_Parallax_Widget' );
		} );
	}
	public $args = array (
			'before_widget' => '<div class="widget-wrap">',
			'after_widget' => '</div></div>' 
	);
	public function widget($args, $instance) {
		echo $args ['before_widget'];
		?>
<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br> <br>
      <h1 class="header center teal-text text-lighten-2">
        <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
      </h1>
      <div class="row center">
        <h5 class="header col s12 light"><?php bloginfo('description'); ?></h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html"
          id="download-button"
          class="btn-large waves-effect waves-light teal lighten-1">Get
          Started</a>
      </div>
      <br>
      <br>
      <p><?php echo $instance ['text'] ?></p>
    </div>
  </div>
  <div class="parallax">
    <img src="<img  src="<?php echo $instance ['background_img'] ?>"
      alt="Unsplashed background img 1">
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
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'background_img' ) ); ?>"><?php esc_attr_e( 'background_img:', 'text_domain' ); ?></label>
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
$mate_parallax_widget = new Mate_Button_Parallax_Widget ();