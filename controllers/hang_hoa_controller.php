<?php

function list_hang_hoa()
{
    $hang_hoa = hang_hoa_all();
    render("list_hang_hoa", ['hang_hoa' => $hang_hoa]);
}

//action save hang hoa 
function add_hang_hoa()
{
    extract($_POST);
    //upload anh
    $image = $_FILES['hinh'];

    $hinh = $image['name'];

    move_uploaded_file($image['tmp_name'], "public/images/hang_hoa/" . $hinh);

    //tao mang data de insert du lieu
    $data = [
        $ten_hh,
        $don_gia,
        $giam_gia,
        $hinh,
        $ma_loai,
        $mo_ta
    ];
    hang_hoa_insert($data);
    header("location: ?ctl=admin_list_hang_hoa");
}

function admin_delete_hang_hoa()
{
    $ma_hh = $_GET['ma_hh'];
    hang_hoa_delete($ma_hh);
    header("location: ?ctl=admin_list_hang_hoa");
}

function update_hang_hoa($data = [])
{
    extract($_POST);

    // upload anh
    $image = $_FILES['hinh'];

    $hinh = $image['name'];

    move_uploaded_file($image['tmp_name'], "public/images/hang_hoa/" . $hinh);

    // tao mang data de insert du lieu
    $data = [
        $ten_hh,
        $don_gia,
        $giam_gia,
        $hinh,
        $ma_loai,
        $mo_ta,
        $ma_hh
    ];
    hang_hoa_update($data);
    header("location: ?ctl=admin_list_hang_hoa");
}
