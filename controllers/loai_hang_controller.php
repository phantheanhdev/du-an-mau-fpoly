<?php

function add_loai()
{
    extract($_POST);

    $data = [$ten_loai];
    loai_hang_insert($data);
    header("location: ?ctl=admin_list_loai_hang");
}

function admin_delete_loai_hang()
{
    $ma_loai = $_GET['ma_loai'];
    loai_hang_delete($ma_loai);
    header("location: ?ctl=admin_list_loai_hang");
}

function update_loai()
{
    extract($_POST);

    $data = [$ten_loai, $ma_loai];

    loai_hang_update($data);
    header("location: ?ctl=admin_list_loai_hang");
}
