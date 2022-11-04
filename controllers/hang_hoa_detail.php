<?php

function show_hang_hoa_detail($data = [])
{
    $danh_muc_top_10 = so_luot_yeu_thich();
    $binh_luan_all = binh_luan_all();

    $ma_hh = $_GET['ma_hh'];

    $hang_hoa_all = hang_hoa_all();
    $hang_hoa = hang_hoa_one($ma_hh);
    $data = [$hang_hoa['so_luot_xem'], $ma_hh];
    dem_so_truy_cap($data);

    render("hang_hoa_detail", [
        "danh_muc_top_10" => $danh_muc_top_10,
        "hang_hoa" => $hang_hoa,
        "hang_hoa_all" => $hang_hoa_all,
        "binh_luan_all" => $binh_luan_all
    ]);
}
