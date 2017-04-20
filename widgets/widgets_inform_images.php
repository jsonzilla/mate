<?php
class Mate_Inform_Images_Widget extends WP_Widget {
	function __construct() {
		// Base ID, name
		parent::__construct ( 'mate-inform_images_widget', 'Mate Inform Images Widget' );
		
		add_action ( 'widgets_init', function () {
			register_widget ( 'Mate_Inform_Images_Widget' );
		} );
	}
	public $args = array (
			'before_widget' => '',
			'after_widget' => ''
	);
	public function widget($args, $instance) {
		echo $args ['before_widget'];
		?>
<div class="container">
  <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4><?php echo $instance['title1']; ?></h4>
          <p class="left-align light center"><?php echo $instance['text1']; ?></p></div>
     </div>
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text">
            <img src="<?php echo $instance['logo1']; ?>" />
          </h2>
          <h5 class="center"><?php echo $instance['title1']; ?></h5>
          <p class="light"><?php echo $instance['text1']; ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text">
            <img src="<?php echo $instance['logo2']; ?>" />
          </h2>
          <h5 class="center"><?php echo $instance['title2']; ?></h5>
          <p class="light"><?php echo $instance['text2']; ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text">
            <img src="<?php echo $instance['logo3']; ?>" />
          </h2>
          <h5 class="center"><?php echo $instance['title3']; ?></h5>
          <p class="light"><?php echo $instance['text3']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
		echo $args ['after_widget'];
	}
	public function form($instance) {
		$title = ! empty ( $instance ['title'] ) ? $instance ['title'] : esc_html__ ( '', 'text_domain' );
		$text = ! empty ( $instance ['text'] ) ? $instance ['text'] : esc_html__ ( '', 'text_domain' );
		
		$logo1 = ! empty ( $instance ['logo1'] ) ? $instance ['logo1'] : esc_html__ ( '', 'text_domain' );
		$title1 = ! empty ( $instance ['title1'] ) ? $instance ['title1'] : esc_html__ ( '', 'text_domain' );
		$text1 = ! empty ( $instance ['text1'] ) ? $instance ['text1'] : esc_html__ ( '', 'text_domain' );
		
		$logo2 = ! empty ( $instance ['logo2'] ) ? $instance ['logo2'] : esc_html__ ( '', 'text_domain' );
		$title2 = ! empty ( $instance ['title2'] ) ? $instance ['title2'] : esc_html__ ( '', 'text_domain' );
		$text2 = ! empty ( $instance ['text2'] ) ? $instance ['text2'] : esc_html__ ( '', 'text_domain' );
		
		$logo3 = ! empty ( $instance ['logo3'] ) ? $instance ['logo3'] : esc_html__ ( '', 'text_domain' );
		$title3 = ! empty ( $instance ['title3'] ) ? $instance ['title3'] : esc_html__ ( '', 'text_domain' );
		$text3 = ! empty ( $instance ['text3'] ) ? $instance ['text3'] : esc_html__ ( '', 'text_domain' );
		
		?>
<p>
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
    type="text" value="<?php echo esc_attr( $title ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
</p>
<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'logo1' ) ); ?>"><?php esc_attr_e( 'Imagem url:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'logo1' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'logo1' ) ); ?>"
    type="text" value="<?php echo esc_attr( $logo1 ); ?>">
</p>
<p>
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title1' ) ); ?>"
    type="text" value="<?php echo esc_attr( $title1 ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text1' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text1' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text1 ); ?></textarea>
</p>
<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'logo2' ) ); ?>"><?php esc_attr_e( 'Imagem url:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'logo2' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'logo2' ) ); ?>"
    type="text" value="<?php echo esc_attr( $logo2 ); ?>">
</p>
<p>
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title2' ) ); ?>"
    type="text" value="<?php echo esc_attr( $title1 ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text2' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text2' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text2 ); ?></textarea>
</p>

<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'logo3' ) ); ?>"><?php esc_attr_e( 'Imagem url:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'logo3' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'logo3' ) ); ?>"
    type="text" value="<?php echo esc_attr( $logo3 ); ?>">
</p>
<p>
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title3' ) ); ?>"
    type="text" value="<?php echo esc_attr( $title3 ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text3' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text3' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text3 ); ?></textarea>
</p>
<?php
	}
	public function update($new_instance, $old_instance) {
		$instance = array ();
		$instance ['title'] = (! empty ( $new_instance ['title'] )) ? strip_tags ( $new_instance ['title'] ) : '';
		$instance ['text'] = (! empty ( $new_instance ['text'] )) ? $new_instance ['text'] : '';
		
		$instance ['logo1'] = (! empty ( $new_instance ['logo1'] )) ? strip_tags ( $new_instance ['logo1'] ) : '';
		$instance ['title1'] = (! empty ( $new_instance ['title1'] )) ? strip_tags ( $new_instance ['title1'] ) : '';
		$instance ['text1'] = (! empty ( $new_instance ['text1'] )) ? $new_instance ['text1'] : '';
		
		$instance ['logo2'] = (! empty ( $new_instance ['logo2'] )) ? strip_tags ( $new_instance ['logo2'] ) : '';
		$instance ['title2'] = (! empty ( $new_instance ['title2'] )) ? strip_tags ( $new_instance ['title2'] ) : '';
		$instance ['text2'] = (! empty ( $new_instance ['text2'] )) ? $new_instance ['text2'] : '';
		
		$instance ['logo3'] = (! empty ( $new_instance ['logo3'] )) ? strip_tags ( $new_instance ['logo3'] ) : '';
		$instance ['title3'] = (! empty ( $new_instance ['title3'] )) ? strip_tags ( $new_instance ['title3'] ) : '';
		$instance ['text3'] = (! empty ( $new_instance ['text3'] )) ? $new_instance ['text3'] : '';
		
		return $instance;
	}
}
$mate_inform_images_widget = new Mate_Inform_Images_Widget ();