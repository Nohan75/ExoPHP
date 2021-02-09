<?php

    function my_strlen($string){
        $char = 0;
        while(isset($string[$char])){
            $char++;
        }
        return $char;
    }

?>