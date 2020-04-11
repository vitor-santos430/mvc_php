<?php
class Routes{
    function use($url){
        require_once $url[0].'/index.php';
    }
}