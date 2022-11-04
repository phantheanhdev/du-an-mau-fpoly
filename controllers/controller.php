<?php

//ham render de lay views
//$path: duong dan den folder views 

function render($path, $data = [])
{
    extract($data);         //extract: nhập các biến từ 1 mảng vào trong bảng biểu tượng

    $views = "views/" . $path . "/" . $path . ".php";
    include_once "views/layout/layout.php";
}
