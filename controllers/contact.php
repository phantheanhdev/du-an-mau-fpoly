<?php
//dieu khien trang home

function show_contact()
{
    // $danh_muc_top_10 = so_luot_yeu_thich();

    // render("contact", ['danh_muc_top_10' => $danh_muc_top_10]);

    include_once "./views/layout/header.php";

    include_once "./views/contact/contact.php";

    include_once "./views/layout/footer.php";
}
