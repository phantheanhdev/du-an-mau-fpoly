<?php

function render_admin($path, $data = [])
{
    extract($data);

    $views_admin = "views/admin/" . $path . ".php";
    include_once $views_admin;
}
