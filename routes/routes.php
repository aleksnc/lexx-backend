<?php

    $app->get('/admin', function(){
        echo 'admin';
    });

    $app->get('/(:link)', function($link=null){

        if($link==null){
            $page= new \Page();
            $MainPage=$page->get_all();
            echo $page->get_body($MainPage,'main');
        } else{
            $page= new \Page();
            $MainPage=$page->get_all();
             echo $page->get_one($MainPage,'other',$link);
        }
    });


   

























?>