<div class="container">
    <!-- box chi tiết hàng hóa -->
    <div class="box_hang_hoa border border-2 p-4 rounded-1">
        <div class="img_hang_hoa">
            <img src="./public/images/hang_hoa/<?php echo $hang_hoa['hinh'] ?>" alt="">
        </div>

        <div class="list_thong_tin_hang_hoa">
            <ul>
                <li>MÃ HÀNG HÓA: <?php echo $hang_hoa['ma_hh'] ?></li>
                <li>TÊN HÀNG HÓA: <?php echo $hang_hoa['ten_hh'] ?></li>
                <li>ĐƠN GIÁ: <?php echo $hang_hoa['don_gia'] ?> VND</li>
                <li>GIẢM GIÁ: <?php echo $hang_hoa['giam_gia'] ?> %</li>
            </ul>
        </div>

        <div class="mota_hang_hoa">
            <p><?php echo $hang_hoa['mo_ta'] ?></p>
        </div>
    </div>
    <!-- end box chi tiết hàng hóa-->

    <!-- box bình luận -->
    <div class="box_binh_luan border border-2 p-4 rounded-1 my-4">
        <div class="header">
            <h3>BÌNH LUẬN</h3>
            <hr>
        </div>

        <div class="binh_luan">
            <ul>
                <?php
                foreach ($binh_luan_all as $value) {
                    if ($value['ma_hh'] == $hang_hoa['ma_hh']) { ?>
                        <li><?php echo $value['noi_dung'] ?></li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>

        <div class="gui_binh_luan">
            <form action="" method="post">
                <input type="text">
                <input type="submit" value="Gửi">
            </form>
        </div>
    </div>
    <!-- end box bình luận -->

    <!-- box hàng cùng loại -->
    <div class="box_hang_cung_loai border border-2 p-4 rounded-1 my-4">
        <div class="header">
            <h3>HÀNG CÙNG LOẠI</h3>
            <hr>
        </div>

        <div class="list_hang_cung_loai">
            <ul>
                <?php
                foreach ($hang_hoa_all as $value) {
                    if ($value['ma_loai'] == $hang_hoa['ma_loai']) { ?>
                        <li><a href="?ctl=hang_hoa_detail&ma_hh=<?php echo $value['ma_hh'] ?>"><?php echo $value['ten_hh'] ?></a></li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- end box hàng cùng loại -->

</div>