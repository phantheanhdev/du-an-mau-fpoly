<?php
//dieu khien trang home

function show_introduce()
{
    $danh_muc_top_10 = so_luot_yeu_thich();

    render("introduce", ['danh_muc_top_10' => $danh_muc_top_10]);
}
