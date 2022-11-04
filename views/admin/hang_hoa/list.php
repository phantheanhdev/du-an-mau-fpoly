<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>QUẢN LÝ HÀNG HÓA</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Mã hàng</th>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Giảm giá</th>
                <th>Lượt xem</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (hang_hoa_all() as $key => $value) { ?>
                <tr>
                    <td><?php echo $value['ma_hh'] ?></td>
                    <td>
                        <img src="public/images/hang_hoa/<?php echo $value['hinh'] ?>" width="123" alt="Loading...">
                    </td>
                    <td><?php echo $value['ten_hh'] ?></td>
                    <td><?php echo $value['don_gia'] ?></td>
                    <td><?php echo $value['giam_gia'] ?></td>
                    <td><?php echo $value['so_luot_xem'] ?></td>
                    <td>
                        <button class="btn btn-default"><a href="?ctl=admin_update_hang_hoa&ma_hh=<?php echo $value['ma_hh'] ?>">Sửa</a></button>
                        <button class="btn btn-danger" onclick=" return confirm('yes or no')"><a href="?ctl=admin_delete_hang_hoa&ma_hh=<?php echo $value['ma_hh'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <button class="btn--add--hang--hoa"><a href="?ctl=admin_add_hang_hoa">Thêm</a></button>
</article>

<?php include_once "views/admin/layout/footer.php" ?>