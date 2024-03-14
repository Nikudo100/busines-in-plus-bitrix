<?php

define("DEF_TEMP_PATH","/local/templates/.default");

function debug($d){
    echo '<pre>' . print_r($d, 1) . '</pre>';
}
function dd($d){
    echo '<pre>' . print_r($d, 1) . '</pre>';
    die();
}
