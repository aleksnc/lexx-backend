<?php
$parent = '0';
foreach ($MainPage as $item){
    if($item['parent']==$parent){
            echo $item['title'].' ==> '.$item['link'].' ==> '.$item['parent'].'<br>';
            $explorer= new \Explorer();

            $child = $explorer->sort_link($item);
        
            foreach ($MainPage as $item){
                if($item['parent']==$child){
                    echo $item['title'].' ==> '.$item['link'].' ==> '.$item['parent'].'<br>';
                }
            }
        }
    }

    $parent


?>