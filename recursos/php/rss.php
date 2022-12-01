<?php
    function extraerSRC($cadena,$Preg) {
        if ($Preg == 0) {
            preg_match('@target="_blank"><img src="([^"]+)"@', $cadena, $array);
        } else {
            preg_match('@src="([^"]+)"@', $cadena, $array);
        }
        $src = array_pop($array);
        return $src;
    }

    function feed($feedURL, $IMG, $num, $utf8de, $error){
        $context  = stream_context_create(array('http' => array('header' => 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36')));
        $url = $feedURL; 
        $i = 0; 
        $rss = "";

        if ($error == true) {
            $rss = file_get_contents($url, false, $context);
            $rss = simplexml_load_string($rss);
        } else {
            $rss = simplexml_load_file($url);
        }
        
        $id2 = 0;
        foreach($rss->channel->item as $item) { 
            $link = $item->link;  //extrae el link
            $title = $item->title;  //extrae el titulo
            if ($utf8de == 1) {
                $title = utf8_decode($title);
            }
            
            //$date = $item->pubDate; //extrae la fecha
            $date = date("d-m-Y h:i:s",strtotime($item->pubDate));
            $id = date(strtotime($item->pubDate));

            $description = strip_tags($item->description);  //extrae la descripcion
            if (strlen($description) > 100) { //limita la descripcion a 200 caracteres
                $stringCut = substr($description, 0, 100);                   
                $description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            
            if($IMG == 0){          //extrae el link de la imagen
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

            
            if ($i > 0) {
                if ($i < $num) { // extrae solo 30 items
                    echo "
                        <div id='" . $id . "' class='col' style='order:" . $id . "'>
                            <div class='card text-white bg-dark h-100'>
                                <img src='" . $url_imagen . "' class='card-img-top' alt='...'  width='304' height='200'>
                                <div class='card-body d-flex flex-column'>
                                    <h5 class='card-title'>" . $title . "</h5>
                                    <p class='card-text'>" .  $description . "</p>
                                    <a href='" . $link . "' class='mt-auto btn btn-secondary' style='margin-right: 150px;'>Leer mas...</a>
                                </div>
                                <div class='card-footer'>
                                    <small class='text-muted'>" . $date . "</small>
                                </div>
                            </div>
                        </div>
                    ";
                    $id2 = $id;
                ;} else {
                    return $id2;
                }
            }
            $i++;
        }
        return $id2;
    }
