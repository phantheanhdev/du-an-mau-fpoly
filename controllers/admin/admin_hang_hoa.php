<?php

function admin_add_hang_hoa()
{
    $loai = loai_all();

    render_admin("hang_hoa/add", ["loai" => $loai]);
}

function admin_list_hang_hoa()
{
    $loai = loai_all();

    render_admin("hang_hoa/list", ["loai" => $loai]);
}

function admin_update_hang_hoa()
{
    $ma_hh = $_GET['ma_hh'];

    $loai = loai_all();
    $hang_hoa = hang_hoa_one($ma_hh);
    // $image_hang_hoa = "<img src=public/images/hang_hoa/" . $hang_hoa['hinh'] . ">";

    render_admin("hang_hoa/update", ["loai" => $loai, "hang_hoa" => $hang_hoa]);
}
