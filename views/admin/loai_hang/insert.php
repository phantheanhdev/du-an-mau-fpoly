<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>QUẢN LÝ LOẠI HÀNG</h2>
    </div>
    <form action="?ctl=add_loai" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã loại</label>
                    <input class="form-control" type="text" name="ma_loai" readonly placeholder="auto number" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên loại</label>
                    <input class="form-control" type="text" name="ten_loai" placeholder="tên hàng" required>
                </div>
            </div>

        </div>

        <div class="form__input--btn--loai--hang">
            <input type="submit" value="Thêm mới" class="btn" name="them_moi">
            <input type="reset" value="Nhập lại" class="btn" name="nhap_lai">
            <!-- <input type="button" value="Danh sách" class="btn" name="danh_sach"> -->
            <button type="button" class="btn" name="danh_sach"><a href="?ctl=admin_list_loai_hang">Danh sach</a></button>
        </div>
    </form>
</article>

<?php include_once "views/admin/layout/footer.php" ?>