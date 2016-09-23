<?php

class explorer
{
    public function sort_link($item) {
        echo $child = $item['link']; 	  
	          
		foreach ($MainPage as $item){
			if($item['parent']==$child){
				echo $item['title'].' ==> '.$item['link'].' ==> '.$item['parent'].'<br>';
			}
		}
    }
}