<?php

    class Home_slider_model extends MY_Model{

        protected static $table = "home_slider";
        protected static $tableId = "id";
        protected static $imagesDimensions = array(
            's' => array('width' => '170', 'height' => 93),
            'l' => array('width' => 800, 'height' => 370),
        );

        public function __construct(){
            parent::__construct();
        }

    }
