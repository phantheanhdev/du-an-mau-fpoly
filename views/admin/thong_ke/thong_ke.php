<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h2>
    </div>

    <table cellspacing="5px" class="table__list--hang--hoa">
        <tr>
            <th>LOẠI HÀNG</th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ CAO NHẤT</th>
            <th>GIÁ THẤP NHẤT</th>
            <th>GIÁ TRUNG BÌNH</th>
        </tr>

        <?php foreach ($thong_ke_theo_loai as $value) {
            extract($value);
            echo '<tr>
            <td class="table__sum_comment">' . $tenloai . '</td>

            <td class="table__sum_comment table__sum_comment--center">' . $soluong . '</td>

            <td class="table__sum_comment table__sum_comment--center">' . $giacaonhat . '</td>

            <td class="table__sum_comment table__sum_comment--center">' . $giathapnhat . '</td>

            <td class="table__sum_comment table__sum_comment--center">' . $giatrungbinh . '</td>

        </tr>
';
        }
        ?>

    </table>
    <button class="btn"><a href="?ctl=admin_bieu_do_thong_ke">Xem biểu đồ</a></button>
</article>


<?php include_once "views/admin/layout/footer.php" ?>