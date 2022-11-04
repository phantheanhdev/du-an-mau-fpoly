<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>QUẢN LÝ HÀNG HÓA</h2>
    </div>
    <form action="?ctl=add_hang_hoa" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã hàng hóa</label>
                    <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên hàng hóa</label>
                    <input class="form-control" type="text" name="ten_hh" placeholder="Tên hàng" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input class="form-control" type="number" name="don_gia" min="0" value="0" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Loại hàng</label>
                    <select class="form-control" name="ma_loai" id="">
                        <option value="0">Loại hàng</option>
                        <?php
                        foreach ($loai as $key => $value) {
                        ?>

                            <option value="<?= $value['ma_loai'] ?>">
                                <?= $value['ten_loai'] ?>
                            </option>

                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Giảm giá</label>
                    <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Hình</label>
                    <input type="file" name="hinh" placeholder="" required>
                </div>
            </div>

            <div class="full">
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="mo_ta"></textarea>
                </div>
            </div>

        </div>
        <button class="btn" type="submit" name="btn_insert">Thêm</button>
        <button class="btn" type="reset" name="">Nhập lại</button>
        <button type="button" class="btn"><a href="?ctl=admin_list_hang_hoa">Danh sách</a></button>
    </form>
</article>

<?php include_once "views/admin/layout/footer.php" ?>