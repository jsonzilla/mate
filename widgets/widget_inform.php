<?php
/*class Mate_Inform_Widget extends WP_Widget {
 function __construct() {
 parent::__construct(
 'Mate_Informt_Widget', // Base ID
 __('Mate Inform Widget', 'text_domain'), // Name
 array( 'description' => __( 'Widget Inform', 'text_domain' ), ) // Args
 );
 
 add_action ( 'widgets_init', function () {
 register_widget ( 'Mate_Inform_Widget' );
 } );
 }
 
 public function widget( $args, $instance ) {
 echo $args['before_widget'];
 $limit = 3;
 for ($counter = 1; $counter <= $limit; $counter+=1) {
 echo '<img src="' . $instance["url{$counter}"] . '" />';
 echo '<h3>'. $instance["title{$counter}"] . '</h3>';
 echo '<div class="textwidget">';
 echo esc_html__( $instance["description{$counter}"], 'text_domain' );
 echo '</div>';
 }
 
 echo $args['after_widget'];
 }
 
 public function update($new_instance, $old_instance) {
 $instance = $old_instance;
 $limit = 3;
 for ($counter = 1; $counter <= $limit; $counter+=1) {
 $instance["url{$counter}"] = strip_tags($new_instance["url{$counter}"]);
 $instance["title{$counter}"] = strip_tags($new_instance["title{$counter}"]);
 $instance["description{$counter}"] = strip_tags($new_instance["description{$counter}"]);
 }
 
 return $instance;
 }
 
 public function form($instance) {
 $limit = 3;
 for ($counter = 1; $counter <= $limit; $counter+=1) {
 ${"url" . $counter} = 'http://../jpg';
 ${"url_field" . $counter} = "url{$counter}";
 ${"tittle" . $counter} = 'Titulo';
 ${"tittle_field" . $counter} = "title{$counter}";
 ${"description" . $counter} = 'pequena descrição';
 ${"description_field" . $counter} = "description{$counter}";
 if( $instance) {
 ${"url" . $counter} = esc_attr($instance["url{$counter}"]);
 ${"tittle" . $counter} = esc_attr($instance["title{$counter}"]);
 ${"description" . $counter} = esc_textarea($instance["description{$counter}"]);
 }
 admin_form(${"url" . $counter}, ${"url_field" . $counter}, ${"tittle" . $counter}, ${"tittle_field" . $counter}, ${"description" . $counter}, ${"description_field" . $counter});
 }
 }
 
 function admin_form($url, $url_field, $title, $title_field, $description, $description_field) {
 ?>
 <p>
 <label for="<?php echo $this->get_field_id($url_field); ?>"><?php _e('Url Ico', 'wp_widget_plugin'); ?></label>
 <input class="widefat" id="<?php echo $this->get_field_id($url_field); ?>" name="<?php echo $this->get_field_name($url_field); ?>" type="text" value="<?php echo $url; ?>" />
 </p>
 <p>
 <label for="<?php echo $this->get_field_id($title_field); ?>"><?php _e('Title', 'wp_widget_plugin'); ?></label>
 <input class="widefat" id="<?php echo $this->get_field_id($title_field); ?>" name="<?php echo $this->get_field_name($title_field); ?>" type="text" value="<?php echo $title; ?>" />
 </p>
 <p>
 <textarea class="widefat"
 id="<?php echo esc_attr( $this->get_field_id($description_field)); ?>"
 name="<?php echo esc_attr( $this->get_field_name($description_field)); ?>"
 type="text" cols="30" rows="10"><?php echo esc_attr($description); ?></textarea>
 </p>
 <?php
 }
 }
 $mate_inform_widget = new Mate_Inform_Widget();*/