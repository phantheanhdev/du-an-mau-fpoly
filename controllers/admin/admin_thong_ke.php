<?php

function admin_thong_ke()
{
    $thong_ke_theo_loai = thong_ke_theo_loai();
    render_admin("thong_ke/thong_ke", ['thong_ke_theo_loai' => $thong_ke_theo_loai]);
}

function admin_bieu_do_thong_ke()
{
    $thong_ke_theo_loai = thong_ke_theo_loai();
    render_admin("thong_ke/bieu_do_thong_ke", ['thong_ke_theo_loai' => $thong_ke_theo_loai]);
}
