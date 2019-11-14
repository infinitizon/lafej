<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thumbs extends CI_Model {
 
    public function __construct() {
        $this->load->library('image_lib');
    }
 
    public function doThumb($options) {
        // Checking if the file exists, otherwise we use a default image
        $img = './assets/images/uploads/'.$options['source_image'];
 
        // If the thumbnail already exists, we just read it
        // No need to use the GD library again

        if( !is_file('./assets/images/uploads/thumbs/'.$options['source_image']) ) {
            $config['source_image'] =  './assets/images/uploads/'.$options['source_image'];
            $config['new_image'] =  './assets/images/uploads/thumbs/'.$options['source_image'];
            $config['image_library']  = 'gd2';
            $config['width'] = $options['width'];
            $config['height'] = $options['height'];      
            $config['create_thumb']   = TRUE;
            $config['maintain_ratio'] = TRUE;
             
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }
    }
}