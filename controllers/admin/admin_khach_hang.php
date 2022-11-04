<?php

function admin_add_khach_hang()
{
    render_admin("khach_hang/add");
}

function admin_list_khach_hang()
{
    render_admin("khach_hang/list");
}

function admin_update_khach_hang()
{
    $ma_kh = $_GET['ma_kh'];

    $khach_hang = khach_hang_one($ma_kh);
    // $image_hang_hoa = "<img src=public/images/hang_hoa/" . $hang_hoa['hinh'] . ">";

    render_admin("khach_hang/update", ["khach_hang" => $khach_hang]);
}
