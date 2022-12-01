<?php
    function carusel($feedURL, $IMG, $utf8de,$error){
        $context  = stream_context_create(array('http' => array('header' => 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36')));
        $url = $feedURL;
        $rss = "";
        
        if ($error == true) {
            $rss = file_get_contents($url, false, $context);
            $rss = simplexml_load_string($rss);
        } else {
            $rss = simplexml_load_file($url);
        }
        
        $item = $rss->channel->item;
        $link = $item->link;
        $title = $item->title;
        
        if ($utf8de == 1) {
            $title = utf8_decode($title);
        }

        if($IMG == 0){ //extrae el link de la imagen
            $url_imagen = $item->guid;  
        }
        
        if($IMG == 1){
            if(is_array(($item->xpath('media:thumbnail')))){
                $mediaArray = $item->xpath('media:thumbnail');                                
                $media = end($mediaArray);                                              
                $url_imagen = $media->attributes()->url;
            }
        }

        if ($IMG == 2) {
            $url_imagen = $item->description;
            $url_imagen = extraerSRC($url_imagen,0);
        }

        if ($IMG == 3) {
            $url_imagen = $item->enclosure->attributes()->url;
        }

        if ($IMG == 4) {
            $url_imagen = $item->description;
            $url_imagen = extraerSRC($url_imagen,1);
        }

        if($IMG == 5){
            if(is_array(($item->xpath('media:content')))){
                $mediaArray = $item->xpath('media:content');                                
                $media = end($mediaArray);                                              
                $url_imagen = $media->attributes()->url;
            }
        }

        echo "
            <img src='" . $url_imagen . "' class='d-block w-100' alt='...'>
            <div class='carousel-caption d-none d-md-block text-light bg-dark'>
            <h5><a href='" . $link . "'>" . $title . "</a></h5>
            </div>
        ";
    }
?>