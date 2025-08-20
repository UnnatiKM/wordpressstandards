<?php
function theme_name_link_fillter($link = null, $target = null)
    {
        $href_link = null;
        // For external link condition
        if(!empty($link) && $link != null){
            if($link == '#' ){
                $href_link = $link;
                $target = '';
            } else {
                $url =  trim($link);
                if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                    $href_link= "http://" . $url;
                } else {
                    $href_link = trim($link);
                }
            }
        }
        // For target condition
        if ($target == true){
            return 'href="'.$href_link.'" target="_blank"';
        }else{
            return 'href="'.$href_link.'"';
        }
}
