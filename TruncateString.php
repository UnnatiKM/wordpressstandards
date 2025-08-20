<?php
function truncate_str($str, $maxlen) {
        if (strlen($str) <= $maxlen) {
           return $str;
        }  
        $newstr = substr($str, 0, $maxlen);
        if ( substr($newstr,-1,1) != ' ' )
            $newstr = substr($newstr, 0, strrpos($newstr, " "));
        return $newstr."...";
}
