<?php
class Mate_Inform_Images_Six_Widget extends WP_Widget {
  function __construct() {
    // Base ID, name
    parent::__construct ( 'mate-inform_images_six_widget', 'Mate Inform Images Six Widget' );
    
    add_action ( 'widgets_init', function () {
      register_widget ( 'Mate_Inform_Images_Six_Widget' );
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
          <h4><?php echo $instance['title']; ?></h4>
          <p class="left-align light center"><?php echo $instance['text']; ?></p></div>
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
    
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text">
            <img src="<?php echo $instance['logo4']; ?>" />
          </h2>
          <h5 class="center"><?php echo $instance['title4']; ?></h5>
          <p class="light"><?php echo $instance['text4']; ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text">
            <img src="<?php echo $instance['logo5']; ?>" />
          </h2>
          <h5 class="center"><?php echo $instance['title5']; ?></h5>
          <p class="light"><?php echo $instance['text5']; ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text">
            <img src="<?php echo $instance['logo6']; ?>" />
          </h2>
          <h5 class="center"><?php echo $instance['title6']; ?></h5>
          <p class="light"><?php echo $instance['text6']; ?></p>
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
    
    $logo4 = ! empty ( $instance ['logo4'] ) ? $instance ['logo4'] : esc_html__ ( '', 'text_domain' );
    $title4 = ! empty ( $instance ['title4'] ) ? $instance ['title4'] : esc_html__ ( '', 'text_domain' );
    $text4 = ! empty ( $instance ['text4'] ) ? $instance ['text4'] : esc_html__ ( '', 'text_domain' );
    
    $logo5 = ! empty ( $instance ['logo5'] ) ? $instance ['logo5'] : esc_html__ ( '', 'text_domain' );
    $title5 = ! empty ( $instance ['title5'] ) ? $instance ['title5'] : esc_html__ ( '', 'text_domain' );
    $text5 = ! empty ( $instance ['text5'] ) ? $instance ['text5'] : esc_html__ ( '', 'text_domain' );
    
    $logo6 = ! empty ( $instance ['logo6'] ) ? $instance ['logo6'] : esc_html__ ( '', 'text_domain' );
    $title6 = ! empty ( $instance ['title6'] ) ? $instance ['title6'] : esc_html__ ( '', 'text_domain' );
    $text6 = ! empty ( $instance ['text6'] ) ? $instance ['text6'] : esc_html__ ( '', 'text_domain' );
    
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
    type="text" value="<?php echo esc_attr( $title2 ); ?>">
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

<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'logo4' ) ); ?>"><?php esc_attr_e( 'Imagem url:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'logo4' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'logo4' ) ); ?>"
    type="text" value="<?php echo esc_attr( $logo4 ); ?>">
</p>
<p>
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'title4' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title4' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title4' ) ); ?>"
    type="text" value="<?php echo esc_attr( $title4 ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text4' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text4' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text4 ); ?></textarea>
</p>

<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'logo5' ) ); ?>"><?php esc_attr_e( 'Imagem url:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'logo5' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'logo5' ) ); ?>"
    type="text" value="<?php echo esc_attr( $logo5 ); ?>">
</p>
<p>
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'title5' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title5' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title5' ) ); ?>"
    type="text" value="<?php echo esc_attr( $title3 ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text5' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text5' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text5 ); ?></textarea>
</p>

<p>
  <label for="<?php echo esc_attr( $this->get_field_id( 'logo6' ) ); ?>"><?php esc_attr_e( 'Imagem url:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'logo6' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'logo6' ) ); ?>"
    type="text" value="<?php echo esc_attr( $logo6 ); ?>">
</p>
<p>
  <label
    for="<?php echo esc_attr( $this->get_field_id( 'title6' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
  <input class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title6' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title6' ) ); ?>"
    type="text" value="<?php echo esc_attr( $title6 ); ?>">
</p>
<p>
  <textarea class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'text6' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'text6' ) ); ?>"
    type="text" cols="30" rows="10"><?php echo esc_attr( $text6 ); ?></textarea>
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
    
    $instance ['logo4'] = (! empty ( $new_instance ['logo4'] )) ? strip_tags ( $new_instance ['logo4'] ) : '';
    $instance ['title4'] = (! empty ( $new_instance ['title4'] )) ? strip_tags ( $new_instance ['title4'] ) : '';
    $instance ['text4'] = (! empty ( $new_instance ['text4'] )) ? $new_instance ['text4'] : '';
    
    $instance ['logo5'] = (! empty ( $new_instance ['logo5'] )) ? strip_tags ( $new_instance ['logo5'] ) : '';
    $instance ['title5'] = (! empty ( $new_instance ['title5'] )) ? strip_tags ( $new_instance ['title5'] ) : '';
    $instance ['text5'] = (! empty ( $new_instance ['text5'] )) ? $new_instance ['text5'] : '';
    
    $instance ['logo6'] = (! empty ( $new_instance ['logo6'] )) ? strip_tags ( $new_instance ['logo6'] ) : '';
    $instance ['title6'] = (! empty ( $new_instance ['title6'] )) ? strip_tags ( $new_instance ['title6'] ) : '';
    $instance ['text6'] = (! empty ( $new_instance ['text6'] )) ? $new_instance ['text6'] : '';
    
    return $instance;
  }
}
$mate_inform_images_six_widget = new Mate_Inform_Images_Six_Widget();