<?php
    $pageLink = 'https://'.$_SERVER['HTTP_HOST'];
    $actual_link = $_SERVER['REQUEST_URI'];
    $subUrl = explode('/', $_SERVER['REQUEST_URI']);
    $subUrl = $subUrl[1];
?>