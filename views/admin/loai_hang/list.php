<?php include_once "views/admin/layout/header.php" ?>

<article>
    <div class="headline">
        <h2>QUẢN LÝ LOẠI HÀNG</h2>
    </div>

    <table cellspacing="5px" class="table__list--hang--hoa">
        <tr>
            <th></th>
            <th>Mã loại</th>
            <th>Tên Loại</th>
            <th></th>
        </tr>

        <?php
        foreach (loai_all() as $key => $value) { ?>

            <tr>
                <td class="table__list--hang--hoa--td--input-center"><input type="checkbox"></td>

                <td class="table__list--hang--hoa--td--input-center"><?php echo $value["ma_loai"]; ?></td>
                <!-- mã lọai -->

                <td><?php echo $value["ten_loai"]; ?></td>
                <!-- Tên lọai -->

                <td class="table__list--hang--hoa--td--input-center">
                    <!-- <input type="button"> -->
                    <button class="btn">
                        <a href="?ctl=admin_update_loai_hang&ma_loai=<?php echo $value['ma_loai'] ?>" class="table__list--hang--hoa--a--edit">Sửa</a>
                    </button>
                    <!-- |<input type="button"> -->
                    <button class="btn">
                        <a href="?ctl=admin_delete_loai_hang&ma_loai=<?php echo $value['ma_loai'] ?>" class="table__list--hang--hoa--a--edit" onclick=" return confirm('yes or no')">Xóa</a>
                    </button>

                </td>
            </tr>

        <?php } ?>

    </table>

    <button class="btn"><a href="">Chọn tất cả</a></button>
    <button class="btn"><a href="">Bỏ chọn tất cả</a></button>
    <button class="btn"><a href="">Xóa các mục đã chọn</a></button>
    <button class="btn"><a href="?ctl=admin_add_loai_hang">Nhập thêm</a></button>


</article>

<?php include_once "views/admin/layout/footer.php" ?>