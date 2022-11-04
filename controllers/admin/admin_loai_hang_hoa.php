<?php

function admin_add_loai_hang()
{
    $loai = loai_all();

    render_admin("loai_hang/insert", ["loai" => $loai]);
}

function admin_list_loai_hang()
{
    $loai = loai_all();

    render_admin("loai_hang/list", ["loai" => $loai]);
}

function admin_update_loai_hang()
{
    $ma_loai = $_GET['ma_loai'];

    $loai = loai_all();
    $loai_hang =  loai_one($ma_loai);

    render_admin("loai_hang/update", ["loai_hang" => $loai_hang, "loai" => $loai]);
}
