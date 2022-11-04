<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>QUẢN LÝ BÌNH LUẬN</h2>
    </div>

    <table cellspacing="5px" class="table__list--hang--hoa">
        <tr>
            <th>ID</th>
            <th>NỘI DUNG</th>
            <th>MÃ KHÁCH HÀNG</th>
            <th>MÃ SẢN PHẨM</th>
            <th>NGÀY BÌNH LUẬN</th>
            <th></th>
        </tr>

        <?php foreach ($binh_luan_all as $value) { ?>

            <tr>
                <td class="table__sum_comment"><?php echo $value['ma_bl'] ?></td>

                <td class="table__sum_comment table__sum_comment--center"><?php echo $value['noi_dung'] ?></td>

                <td class="table__sum_comment table__sum_comment--center"><?php echo $value['ma_kh'] ?></td>

                <td class="table__sum_comment table__sum_comment--center"><?php echo $value['ma_hh'] ?></td>

                <td class="table__sum_comment table__sum_comment--center"><?php echo $value['ngay_bl'] ?></td>

                <td class="table__sum_comment table__sum_comment--center btn_detail">
                    <button class="" ><a href="?ctl=admin_delete_binh_luan&ma_bl=<?php echo $value['ma_bl'] ?>" class="table__list--hang--hoa--a--edit" onclick=" return confirm('yes or no')">Xóa</a></button>
                </td>
            </tr>

        <?php
        } ?>

    </table>
</article>


<?php include_once "views/admin/layout/footer.php" ?>