<?php
    // $pageLink = 'https://'.$_SERVER['HTTP_HOST'];
    $pageLink = 'http://'.$_SERVER['HTTP_HOST'] . '/zerplus/webpage/';
    $actual_link = $_SERVER['REQUEST_URI'];
    $subUrl = explode('/', $_SERVER['REQUEST_URI']);
    $subUrl = $subUrl[1];
?>