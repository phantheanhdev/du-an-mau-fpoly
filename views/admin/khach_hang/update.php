<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>CẬP NHẬT KHÁCH HÀNG</h2>
    </div>
    <form action="?ctl=update_khach_hang&id_kh=<?php echo $khach_hang['ma_kh'] ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã khách hàng</label>
                    <input class="form-control" type="text" name="ma_kh" placeholder="Mã khách hàng" value="<?php echo $khach_hang['ma_kh'] ?>" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input class="form-control" type="text" name="ho_ten" placeholder="Họ và tên" value="<?php echo $khach_hang['ho_ten'] ?>" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input class="form-control" type="password" name="mat_khau" placeholder="Mật khẩu" value="<?php echo $khach_hang['mat_khau'] ?>" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Xác nhận mật khẩu</label>
                    <input class="form-control" type="password" name="xac_nhan_mat_khau" placeholder="Xác nhận mật khẩu" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Địa chỉ email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $khach_hang['email'] ?>" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="hinh" placeholder="" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Kích hoạt ?</label>

                    <div class="kich_hoat_display">
                        <input class="" id="chua_kick_hoat" type="radio" name="kich_hoat" value="0" required>
                        <label for="chua_kick_hoat">Chưa kích hoạt</label>

                        <input class="" id="kich_hoat" type="radio" name="kich_hoat" value="1" required checked>
                        <label for="kich_hoat">Kích hoạt</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Vai trò ?</label>

                    <div class="vai_tro_display">
                        <input class="" id="khach_hang" type="radio" name="vai_tro" value="0" required checked>
                        <label for="khach_hang">Khách hàng</label>

                        <input class="" id="nhan_vien" type="radio" name="vai_tro" value="1" required>
                        <label for="nhan_vien">Nhân viên</label>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn" type="submit" name="btn_update">Cập nhật</button>
        <button class="btn" type="reset" name="btn_reset">Nhập lại</button>
        <button type="button" class="btn"><a href="?ctl=admin_list_khach_hang">Danh sách</a></button>
    </form>
</article>


<?php include_once "views/admin/layout/footer.php" ?>