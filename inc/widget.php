<?php
class mamurjorit_Sidebars{
    public function __construct() {
        add_action('widgets_init', array($this, 'register'));
    }   

    public function register() {


        register_sidebar( array(
            'name'          => esc_html__('Google Map Section','mamurjorit'),
            'id'            => 'map-sidebar',
            'description'   => esc_html__('Add widgets here for google Map','mamurjorit'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   =>'',
        ));
        register_sidebar( array(
            'name'          => esc_html__('Contact info Section','mamurjorit'),
            'id'            => 'contactinfo',
            'description'   => esc_html__('Add widgets here for Contact info','mamurjorit'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   =>'</p>',
        ));
        register_sidebar( array(
            'name'          => esc_html__('Social Follow Section','mamurjorit'),
            'id'            => 'follow',
            'description'   => esc_html__('Add widgets here for Social Follow','mamurjorit'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4>',
            'after_title'   =>'</h4>',
        ));
        register_sidebar( array(
            'name'          => esc_html__('Footer Copy right Section','mamurjorit'),
            'id'            => 'copyright',
            'description'   => esc_html__('Add widgets here for Footer Copy right','mamurjorit'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   =>'',
        ));



    }
}
class author_widget extends WP_Widget{
    function __construct(){
        parent::__construct(
            'Google_map',
            esc_html__('google Map','mamurjorit'),
            array(
                'description'  => esc_html__('this is my author developed widget','mamurjorit')
            )
        );
    }
    public function widget( $args, $instance ) {
        echo esc_html($args['before_widget']);
        if(!empty($instance['title'])){
            echo esc_html($args['before_title']).apply_filters('widget_title',$instance['title']).$args['after_title'];
        }; ?>

        <div class="ct maps_area">                  <!-- Author Box -->
           <iframe width="<?php echo esc_html($instance['width']); ?>" height="<?php echo esc_html($instance['height']); ?>" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo esc_html($instance['location']); ?>&t=&z=<?php echo esc_html($instance['zoom']); ?>&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

           </iframe>
       </div>

       <?php 
       echo esc_html($args['after_widget']);
   }
   public function form($instance){
    $title = !empty($instance['title'])? $instance['title']: esc_html__('','mamurjorit');
    $width = !empty($instance['width'])? $instance['width']: esc_html__('800','mamurjorit');
    $height = !empty($instance['height'])? $instance['height']: esc_html__('500','mamurjorit');
    $location = !empty($instance['location'])? $instance['location']: esc_html__('Dhaka','mamurjorit');
    $zoom = !empty($instance['zoom'])? $instance['zoom']: esc_html__('12','mamurjorit');?>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
            <?php esc_attr_e('Title','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('title')); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>"
        type="text"
        value="<?php echo esc_attr($title); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('width')); ?>">
            <?php esc_attr_e('width','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('width')); ?>"
        name="<?php echo esc_attr($this->get_field_name('width')); ?>"
        type="text"
        value="<?php echo esc_attr($width); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('height')); ?>">
            <?php esc_attr_e('height','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('height')); ?>"
        name="<?php echo esc_attr($this->get_field_name('height')); ?>"
        type="text"
        value="<?php echo esc_attr($height); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('location')); ?>">
            <?php esc_attr_e('location','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('location')); ?>"
        name="<?php echo esc_attr($this->get_field_name('location')); ?>"
        type="text"
        value="<?php echo esc_attr($location); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('zoom')); ?>">
            <?php esc_attr_e('zoom','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('zoom')); ?>"
        name="<?php echo esc_attr($this->get_field_name('zoom')); ?>"
        type="text"
        value="<?php echo esc_attr($zoom); ?>">
    </p>

<?php }
public function update($new_instance, $old_instance){
    $instance = array();
    $instance['title'] = (!empty($new_instance['title']))? strip_tags($new_instance['title']):'';
    $instance['width'] = (!empty($new_instance['width']))? strip_tags($new_instance['width']):'';
    $instance['height'] = (!empty($new_instance['height']))? strip_tags($new_instance['height']):'';
    $instance['location'] = (!empty($new_instance['location']))? strip_tags($new_instance['location']):'';
    $instance['zoom'] = (!empty($new_instance['zoom']))? strip_tags($new_instance['zoom']):'';

    return $instance;
}
}
class contact_widget extends WP_Widget{
    function __construct(){
        parent::__construct(
            'contact',
            esc_html__('Contact Info','mamurjorit'),
            array(
                'description'  => esc_html__('this is my contact developed widget','mamurjorit')
            )
        );
    }
    public function widget( $args, $instance ) {
        echo esc_html($args['before_widget']);
        if(!empty($instance['title'])){
            echo esc_html($args['before_title']).apply_filters('widget_title',$instance['title']).$args['after_title'];
        }; ?>

   
        
        <div class="single_ct">
            <a href="tel:+8801746686868"><?php echo esc_html($instance['number']); ?></a> 
            <p>(<?php echo esc_html($instance['name1']); ?>)</p>
        </div>
        <div class="single_ct">
          <a href="tel:+8801703355355"><?php echo esc_html($instance['number2']); ?></a> 
          <p>(<?php echo esc_html($instance['name2']); ?>)</p>
      </div>
      <div class="single_ct">
          <a href="tel:+8801791411311"><?php echo esc_html($instance['number3']); ?></a> 
          <p>(<?php echo esc_html($instance['name3']); ?>)</p>
      </div>
  

      <?php 
      echo esc_html($args['after_widget']);
  }
  public function form($instance){
    $title = !empty($instance['title'])? $instance['title']: esc_html__('','mamurjorit');
    $number = !empty($instance['number'])? $instance['number']: esc_html__('','mamurjorit');
    $name1 = !empty($instance['name1'])? $instance['name1']: esc_html__('','mamurjorit');
    $number2 = !empty($instance['number2'])? $instance['number2']: esc_html__('','mamurjorit');
    $name2 = !empty($instance['name2'])? $instance['name2']: esc_html__('','mamurjorit');
    $number3 = !empty($instance['number3'])? $instance['number3']: esc_html__('','mamurjorit');
    $name3 = !empty($instance['name3'])? $instance['name3']: esc_html__('','mamurjorit');?>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
            <?php esc_attr_e('Title','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('title')); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>"
        type="text"
        value="<?php echo esc_attr($title); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('number')); ?>">
            <?php esc_attr_e('number','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('number')); ?>"
        name="<?php echo esc_attr($this->get_field_name('number')); ?>"
        type="text"
        value="<?php echo esc_attr($number); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('name1')); ?>">
            <?php esc_attr_e('name1','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('name1')); ?>"
        name="<?php echo esc_attr($this->get_field_name('name1')); ?>"
        type="text"
        value="<?php echo esc_attr($name1); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('number2')); ?>">
            <?php esc_attr_e('number2','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('number2')); ?>"
        name="<?php echo esc_attr($this->get_field_name('number2')); ?>"
        type="text"
        value="<?php echo esc_attr($number2); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('name2')); ?>">
            <?php esc_attr_e('name2','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('name2')); ?>"
        name="<?php echo esc_attr($this->get_field_name('name2')); ?>"
        type="text"
        value="<?php echo esc_attr($name2); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('number3')); ?>">
            <?php esc_attr_e('number3','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('number3')); ?>"
        name="<?php echo esc_attr($this->get_field_name('number3')); ?>"
        type="text"
        value="<?php echo esc_attr($number3); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('name3')); ?>">
            <?php esc_attr_e('name3','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('name3')); ?>"
        name="<?php echo esc_attr($this->get_field_name('name3')); ?>"
        type="text"
        value="<?php echo esc_attr($name3); ?>">
    </p>

<?php }
public function update($new_instance, $old_instance){
    $instance = array();
    $instance['title'] = (!empty($new_instance['title']))? strip_tags($new_instance['title']):'';
    $instance['number'] = (!empty($new_instance['number']))? strip_tags($new_instance['number']):'';
    $instance['name1'] = (!empty($new_instance['name1']))? strip_tags($new_instance['name1']):'';
    $instance['number2'] = (!empty($new_instance['number2']))? strip_tags($new_instance['number2']):'';
    $instance['name2'] = (!empty($new_instance['name2']))? strip_tags($new_instance['name2']):'';
    $instance['number3'] = (!empty($new_instance['number3']))? strip_tags($new_instance['number3']):'';
    $instance['name3'] = (!empty($new_instance['name3']))? strip_tags($new_instance['name3']):'';

    return $instance;
}
}


class follow_us_widget extends WP_Widget{
    function __construct(){
        parent::__construct(
            'socialfollow',
            esc_html__('Social Follow Us','mamurjorit'),
            array(
                'description'  => esc_html__('this widget is us for Social Follow','mamurjorit')
            )
        );
    }
    public function widget( $args, $instance ) {
        echo esc_html($args['before_widget']);
        if(!empty($instance['title'])){
            echo esc_html($args['before_title']).apply_filters('widget_title',$instance['title']).$args['after_title'];
        }; ?>
    <ul class="ct_links"> 
        <li><a href="<?php echo esc_url($instance['fblink']) ?>" target="_blank"><?php echo esc_html($instance['facebook']) ?></a></li>
        <li><a href="<?php echo esc_url($instance['twlink']) ?>" target="_blank"><?php echo esc_html($instance['twitter']) ?></a></li>
        <li><a href="<?php echo esc_url($instance['ytlibk']) ?>" target="_blank"><?php echo esc_html($instance['youtube']) ?></a></li>
    </ul> 
  

      <?php 
      echo esc_html($args['after_widget']);
  }
  public function form($instance){
    $title = !empty($instance['title'])? $instance['title']: esc_html__('','mamurjorit');
    $facebook = !empty($instance['facebook'])? $instance['facebook']: esc_html__('','mamurjorit');
    $fblink = !empty($instance['fblink'])? $instance['fblink']: esc_html__('','mamurjorit');
    $twitter = !empty($instance['twitter'])? $instance['twitter']: esc_html__('','mamurjorit');
    $twlink = !empty($instance['twlink'])? $instance['twlink']: esc_html__('','mamurjorit');
    $youtube = !empty($instance['youtube'])? $instance['youtube']: esc_html__('','mamurjorit');
    $ytlibk = !empty($instance['ytlibk'])? $instance['ytlibk']: esc_html__('','mamurjorit');?>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
            <?php esc_attr_e('Title','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('title')); ?>"
        name="<?php echo esc_attr($this->get_field_name('title')); ?>"
        type="text"
        value="<?php echo esc_attr($title); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>">
            <?php esc_attr_e('facebook','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('facebook')); ?>"
        name="<?php echo esc_attr($this->get_field_name('facebook')); ?>"
        type="text"
        value="<?php echo esc_attr($facebook); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('fblink')); ?>">
            <?php esc_attr_e('fblink','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('fblink')); ?>"
        name="<?php echo esc_attr($this->get_field_name('fblink')); ?>"
        type="text"
        value="<?php echo esc_attr($fblink); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>">
            <?php esc_attr_e('twitter','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('twitter')); ?>"
        name="<?php echo esc_attr($this->get_field_name('twitter')); ?>"
        type="text"
        value="<?php echo esc_attr($twitter); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('twlink')); ?>">
            <?php esc_attr_e('twlink','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('twlink')); ?>"
        name="<?php echo esc_attr($this->get_field_name('twlink')); ?>"
        type="text"
        value="<?php echo esc_attr($twlink); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>">
            <?php esc_attr_e('youtube','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('youtube')); ?>"
        name="<?php echo esc_attr($this->get_field_name('youtube')); ?>"
        type="text"
        value="<?php echo esc_attr($youtube); ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('ytlibk')); ?>">
            <?php esc_attr_e('ytlibk','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('ytlibk')); ?>"
        name="<?php echo esc_attr($this->get_field_name('ytlibk')); ?>"
        type="text"
        value="<?php echo esc_attr($ytlibk); ?>">
    </p>

<?php }
public function update($new_instance, $old_instance){
    $instance = array();
    $instance['title'] = (!empty($new_instance['title']))? strip_tags($new_instance['title']):'';
    $instance['facebook'] = (!empty($new_instance['facebook']))? strip_tags($new_instance['facebook']):'';
    $instance['fblink'] = (!empty($new_instance['fblink']))? strip_tags($new_instance['fblink']):'';
    $instance['twitter'] = (!empty($new_instance['twitter']))? strip_tags($new_instance['twitter']):'';
    $instance['twlink'] = (!empty($new_instance['twlink']))? strip_tags($new_instance['twlink']):'';
    $instance['youtube'] = (!empty($new_instance['youtube']))? strip_tags($new_instance['youtube']):'';
    $instance['ytlibk'] = (!empty($new_instance['ytlibk']))? strip_tags($new_instance['ytlibk']):'';

    return $instance;
}
}


class footer_copyright_widget extends WP_Widget{
    function __construct(){
        parent::__construct(
            'copyrigh',
            esc_html__('Copyright widget','mamurjorit'),
            array(
                'description'  => esc_html__('this widget is us for Copy right section','mamurjorit')
            )
        );
    }
    public function widget( $args, $instance ) {
?>
    <div class="c_right">
        <p><?php echo esc_html($instance['copyright']); ?></p>
    </div>

      <?php 
  }
  public function form($instance){
    $copyright = !empty($instance['copyright'])? $instance['copyright']: esc_html__('','mamurjorit');
?>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id('copyright')); ?>">
            <?php esc_attr_e('copyright','mamurjorit');?>
        </label>
        <input 
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('copyright')); ?>"
        name="<?php echo esc_attr($this->get_field_name('copyright')); ?>"
        type="text"
        value="<?php echo esc_attr($copyright); ?>">
    </p>


<?php }
public function update($new_instance, $old_instance){
    $instance = array();
    $instance['copyright'] = (!empty($new_instance['copyright']))? strip_tags($new_instance['copyright']):'';
   

    return $instance;
}
}

function mamurjorit_custom_widget(){


}

add_action('widgets_init','mamurjorit_custom_widget');

new mamurjorit_Sidebars;

