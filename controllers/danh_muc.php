<?php


function hien_thi_hang_hoa_theo_danh_muc()
{
    $danh_muc_top_10 = so_luot_yeu_thich();

    $get_ma_loai = $_GET['ma_loai'];

    // var_dump($get_ma_loai);
    render("show_hang_theo_danh_muc", ['danh_muc_top_10' => $danh_muc_top_10, 'get_ma_loai' => $get_ma_loai]);
}
