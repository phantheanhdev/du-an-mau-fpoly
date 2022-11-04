<?php
// bat dau session
session_start();

//models
require_once "models/connection.php";
require_once "models/hang_hoa.php";
require_once "models/loai.php";
require_once "models/khach_hang.php";
require_once "models/account.php";
require_once "models/binh_luan.php";
require_once "models/thong_ke.php";

//controllers
require_once "controllers/controller.php";
require_once "controllers/home.php";
require_once "controllers/contact.php";
require_once "controllers/about.php";
require_once "controllers/404.php";
require_once "controllers/introduce.php";
require_once "controllers/qa.php";
require_once "controllers/hang_hoa_controller.php";
require_once "controllers/loai_hang_controller.php";
require_once "controllers/account.php";
require_once "controllers/khach_hang.php";
require_once "controllers/hang_hoa_detail.php";
require_once "controllers/danh_muc.php";


// controllers admin
require_once "controllers/admin/controllers_admin.php";
require_once "controllers/admin/admin_loai_hang_hoa.php";
require_once "controllers/admin/admin_hang_hoa.php";
require_once "controllers/admin/admin_khach_hang.php";
require_once "controllers/admin/admin_binh_luan.php";
require_once "controllers/admin/admin_thong_ke.php";



$ctl = isset($_GET['ctl']) ? $_GET['ctl'] : "/";

switch ($ctl) {
    case '/':

        // home chính
    case 'home': {
            show_home();
            break;
        }
    case 'contact': {
            show_contact();
            break;
        }
    case 'about': {
            show_about();
            break;
        }
    case 'introduce': {
            show_introduce();
            break;
        }
    case 'qa': {
            show_qa();
            break;
        }

        // admin loai hang
    case 'admin_add_loai_hang': {
            admin_add_loai_hang();
            break;
        }
    case 'add_loai': {
            add_loai();
            break;
        }
    case 'admin_list_loai_hang': {
            admin_list_loai_hang();
            break;
        }
    case 'admin_delete_loai_hang': {
            admin_delete_loai_hang();
            break;
        }
    case 'admin_update_loai_hang': {
            admin_update_loai_hang();
            break;
        }
    case 'update_loai': {
            update_loai();
            break;
        }

        //admin hang hoa
    case 'admin_add_hang_hoa': {
            admin_add_hang_hoa();
            break;
        }
    case 'add_hang_hoa': {
            add_hang_hoa();
            break;
        }
    case 'admin_list_hang_hoa': {
            admin_list_hang_hoa();
            break;
        }
    case 'admin_delete_hang_hoa': {
            admin_delete_hang_hoa();
            break;
        }
    case 'admin_update_hang_hoa': {
            admin_update_hang_hoa();
            break;
        }
    case 'update_hang_hoa': {
            update_hang_hoa();
            break;
        }

        //admin khach hang
    case 'admin_add_khach_hang': {
            admin_add_khach_hang();
            break;
        }
    case 'admin_list_khach_hang': {
            admin_list_khach_hang();
            break;
        }
    case 'add_khach_hang': {
            add_khach_hang();
            break;
        }
    case 'admin_delete_khach_hang': {
            admin_delete_khach_hang();
            break;
        }
    case 'admin_update_khach_hang': {
            admin_update_khach_hang();
            break;
        }
    case 'update_khach_hang': {
            update_khach_hang();
            break;
        }

        // admin binh luan
    case 'admin_binh_luan': {
            admin_binh_luan();
            break;
        }
    case 'admin_delete_binh_luan': {
            admin_delete_binh_luan();
            break;
        }

        // admin thong ke
    case 'admin_thong_ke': {
            admin_thong_ke();
            break;
        }
    case 'admin_bieu_do_thong_ke': {
            admin_bieu_do_thong_ke();
            break;
        }

        //account log in
    case 'log-in': {
            login();
            break;
        }
    case 'log-out': {
            logout();
            break;
        }

        // sign up account
    case 'sign_up': {
            sign_up();
            break;
        }
    case 'save_sign_up': {
            save_sign_up();
            break;
        }

        // update account
    case 'update_account': {
            show_updae_account();
            break;
        }
    case 'update_account': {
            show_updae_account();
            break;
        }

        // chi tiết hàng hóa
    case 'hang_hoa_detail': {
            show_hang_hoa_detail();
            break;
        }

        // hien thi hang hoa theo danh muc
    case 'hien_thi_hang_hoa_theo_danh_muc': {
            hien_thi_hang_hoa_theo_danh_muc();
            break;
        }

        // default
    default: {
            show_404();
        }
}
