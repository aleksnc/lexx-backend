<?php

class Page
{
    public $text;

    public function get_all() {
        
        $result = \Database::get_all_db(HOST,USER,PASS,DB);
        return $result;
    }

    public function get_one($MainPage, $file, $link){
        ob_start();
        include 'pages/'.$file.'.php';
        return ob_get_clean();
    }

    public function get_body($MainPage, $file){
        ob_start();
        include 'pages/'.$file.'.php';
        return ob_get_clean();
    }
}