<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>QUẢN LÝ KHÁCH HÀNG</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Mã KH</th>
                <th>Họ và tên</th>
                <th>Địa chỉ email</th>
                <th>Hình ảnh</th>
                <th>Vai trò</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (khach_hang_all() as $key => $value) { ?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><?php echo $value['ma_kh'] ?></td>
                    <td><?php echo $value['ho_ten'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['hinh'] ?></td>
                    <td><?php if ($value['vai_tro'] == 1) {
                            echo "Quản trị";
                        } else {
                            echo "Khách hàng";
                        }
                        ?></td>
                    <td>
                        <button class="btn btn-default"><a href="?ctl=admin_update_khach_hang&ma_kh=<?php echo $value['ma_kh'] ?>">Sửa</a></button>
                        <button class="btn btn-danger" onclick=" return confirm('yes or no')"><a href="?ctl=admin_delete_khach_hang&ma_kh=<?php echo $value['ma_kh'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="footer__chuc-nang">
        <button type="button"><a href="">Chọn tất cả</a></button>
        <button type="button"><a href="">Bỏ chọn tất cả</a></button>
        <button type="button"><a href="">Xóa các mục đã chọn</a></button>
        <button type="button"><a href="?ctl=admin_add_khach_hang">Nhập thêm</a></button>
    </div>

</article>

<?php include_once "views/admin/layout/footer.php" ?>