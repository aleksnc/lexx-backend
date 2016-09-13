<?php

    $app->get('/admin(/:link)', function($link=null){
        if($link==null){
            $page= new \Page();
            $MainPage=$page->get_all();
            echo $page->get_body($MainPage,'admin');
        } else{
            $page= new \Page();
            $MainPage=$page->get_all();
            echo $page->get_one($MainPage,'admin',$link);
        }
    });

//    $app->get('/(:link+)', function($link=null){
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