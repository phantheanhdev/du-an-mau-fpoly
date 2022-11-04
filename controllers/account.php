<?php
function login()
{
    if (isset($_POST['btn_login'])) {
        extract($_POST);

        $check_user =  check_account_khach_hang($username, $password);

        if (is_array($check_user)) {
            $_SESSION['username'] = $check_user['email'];

            if ($check_user['vai_tro'] == 1 && $check_user['kich_hoat'] == 1) {
                $_SESSION['username'] = $check_user['email'];
                $_SESSION['avt'] = $check_user['hinh'];
                $_SESSION['admin'] = true;
                header("location: ?ctl=admin_add_loai_hang");
            } else if ($check_user['vai_tro'] == 0 && $check_user['kich_hoat'] == 1) {
                $_SESSION['username'] = $check_user['email'];
                $_SESSION['avt'] = $check_user['hinh'];

                header("location: ?ctl=home");
            } else {
                $_SESSION['username'] = "Tài khoản chưa kích hoạt";
                header("location: ?ctl=sign_up");
            }
        } else {
            header('location: ?ctl=sign_up');
        }
    }
}

function logout()
{
    if (isset($_POST['btn_logout'])) {
        session_destroy();
        header("location: ?ctl=home");
    }
}

function sign_up()
{
    include_once "./views/layout/header.php";

    include_once "./views/sign_up/sign_up.php";

    include_once "./views/layout/footer.php";
}

function save_sign_up()
{
    $khach_hang = khach_hang_all();

    if (isset($_POST['submit_sign_up'])) {
        $error = array();

        // email
        // if ($_POST['email'] == $khach_hang['email']) {
        //     $error['email'] = "Hãy nhập email khác";
        // } else {
        //     $email = $_POST['email'];
        // }
        $email = $_POST['email'];

        // ma khach hang  = ten tai khoan
        // if ($_POST['ma_kh'] == $khach_hang['ma_kh']) {
        //     $error['ma_kh'] = "Tên tài khoản đã tồn tại";
        // } else {
        //     $ma_kh = $_POST['ma_kh'];
        // }
        $ma_kh = $_POST['ma_kh'];

        // mat khau
        $mat_khau = $_POST['mat_khau'];

        // xac nhan mat khau
        if ($_POST['xac_nhan_mat_khau'] != $_POST['mat_khau']) {
            $error['xac_nhan_mat_khau'] = "Mật khẩu không khớp";
        } else {
            $xac_nhan_mat_khau = $_POST['xac_nhan_mat_khau'];
        }

        // ho va ten
        $ho_ten = $_POST['ho_ten'];

        $image = $_FILES['hinh'];
        $hinh = $image['name'];

        // if (empty($error)) {
        move_uploaded_file($image['tmp_name'], "public/images/khach_hang/" . $hinh);

        $data = [
            $ma_kh,
            $mat_khau,
            $ho_ten,
            $email,
            $hinh,
            1,
            0
        ];

        khach_hang_insert($data);
        header("location: ?ctl=home");
        // }
    }
}

function show_updae_account()
{
    $danh_muc_top_10 = so_luot_yeu_thich();

    render("update_acc", ['danh_muc_top_10' => $danh_muc_top_10]);
}
