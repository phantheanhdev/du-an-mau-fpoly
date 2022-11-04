<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>UPDATE HÀNG HÓA</h2>
    </div>
    <form action="?ctl=update_hang_hoa" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã hàng hóa</label>
                    <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number" disabled value="<?php echo $hang_hoa['ma_hh'] ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên hàng hóa</label>
                    <input class="form-control" type="text" name="ten_hh" placeholder="Tên hàng" value="<?php echo $hang_hoa['ten_hh'] ?>" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input class="form-control" type="number" name="don_gia" min="0" value="<?php echo $hang_hoa['don_gia'] ?>" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Loại hàng</label>
                    <select class="form-control" name="ma_loai" id="">
                        <option value="<?php echo $hang_hoa['ma_loai'] ?>">
                            <?php
                            foreach ($loai as $key => $value) {
                                if ($value['ma_loai'] == $hang_hoa['ma_loai']) {
                                    echo $value['ten_loai'];
                                }
                            }
                            ?></option>
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
                    <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm" value="<?php echo $hang_hoa['giam_gia'] ?>" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Hình</label>
                    <input type="file" name="hinh" placeholder="" value="<?php echo $hang_hoa['hinh'] ?>" required>
                </div>
            </div>

            <div class="full">
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="mo_ta"><?php echo $hang_hoa['mo_ta'] ?></textarea>
                </div>
            </div>

        </div>
        <input type="hidden" value="<?php echo $hang_hoa['ma_hh'] ?>" name="ma_hh">

        <button class="btn" type="submit" name="btn_insert">Cập nhật</button>
        <button class="btn" type="reset" name="btn_insert">Nhập lại</button>
        <button type="button" class="btn"><a href="?ctl=admin_list_hang_hoa">Danh sách</a></button>
    </form>
</article>

<?php include_once "views/admin/layout/footer.php" ?>