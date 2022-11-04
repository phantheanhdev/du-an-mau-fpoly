<?php
//dieu khien trang home

function show_404(){
    $danh_muc_top_10 = so_luot_yeu_thich();

    render("404", ['danh_muc_top_10' => $danh_muc_top_10]);
}
