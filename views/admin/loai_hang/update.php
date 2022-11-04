<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>CẬP NHẬT LOẠI HÀNG</h2>
    </div>
    <form action="?ctl=update_loai" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã loại</label>
                    <input class="form-control" type="text" name="ma_loai" readonly placeholder="auto number" disabled value="<?php echo $loai_hang['ma_loai'] ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên loại</label>
                    <input class="form-control" type="text" name="ten_loai" placeholder="tên hàng" value="<?php echo $loai_hang['ten_loai'] ?>" required>
                </div>
            </div>

        </div>

        <div class="form__input--btn--loai--hang">
            <input type="hidden" value="<?php echo $loai_hang['ma_loai'] ?>" name="ma_loai">
            <input type="submit" value="Cập nhật" class="btn" name="cap_nhat">
            <input type="reset" value="Nhập lại" class="btn" name="nhap_lai">
            <!-- <input type="button" value="Danh sách" class="btn" name="danh_sach"> -->
            <button type="button" class="btn" name="danh_sach"><a href="?ctl=admin_list_loai_hang">Danh sach</a></button>
        </div>
    </form>
</article>

<?php include_once "views/admin/layout/footer.php" ?>