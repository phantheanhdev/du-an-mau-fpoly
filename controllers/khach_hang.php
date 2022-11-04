<?php
function add_khach_hang()
{
    extract($_POST);

    $image = $_FILES['hinh'];
    $hinh = $image['name'];
    move_uploaded_file($image['tmp_name'], "public/images/khach_hang/" . $hinh);

    $data = [
        $ma_kh,
        $mat_khau,
        $ho_ten,
        $email,
        $hinh,
        $kich_hoat,
        $vai_tro
    ];
    khach_hang_insert($data);
    header("location: ?ctl=admin_list_khach_hang");
}

function admin_delete_khach_hang()
{
    $ma_khach = $_GET['ma_kh'];
    khach_hang_delete($ma_khach);
    header("location: ?ctl=admin_list_khach_hang");
}

function update_khach_hang($data = [])
{
    extract($_POST);
    $id_kh = $_GET['id_kh'];
    // upload anh
    $image = $_FILES['hinh'];

    $hinh = $image['name'];

    move_uploaded_file($image['tmp_name'], "public/images/khach_hang/" . $hinh);

    // tao mang data de insert du lieu
    $data = [
        $ma_kh,
        $mat_khau,
        $ho_ten,
        $email,
        $hinh,
        $kich_hoat,
        $vai_tro,
        $id_kh
    ];
    khach_hang_update($data);
    header("location: ?ctl=admin_list_khach_hang");
}
