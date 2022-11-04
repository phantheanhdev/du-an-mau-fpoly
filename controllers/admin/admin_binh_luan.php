<?php

function admin_binh_luan()
{
    $loai = loai_all();
    $hang_hoa_all = hang_hoa_all();
    $binh_luan_all = binh_luan_all();

    render_admin("binh_luan/binh_luan", [
        "loai" => $loai,
        "hang_hoa_all" => $hang_hoa_all,
        "binh_luan_all" => $binh_luan_all
    ]);
}

function admin_delete_binh_luan()
{
    $ma_bl = $_GET['ma_bl'];
    binh_luan_delete($ma_bl);
    header("location: ?ctl=admin_binh_luan");
}
