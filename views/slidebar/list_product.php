            <!-- category -->
            <div class="list-group mt-5">
                <a href="#" class="list-group-item list-group-item-action disabled bg-secondary text-white" aria-current="true">
                    <div class="header">
                        <h3>DANH MỤC</h3>
                    </div>
                </a>
                <?php
                foreach (loai_all() as $key => $value) { ?>
                    <a href="?ctl=hien_thi_hang_hoa_theo_danh_muc&ma_loai=<?php echo $value['ma_loai'] ?>" class="list-group-item list-group-item-action">
                        <?php echo $value["ten_loai"]; ?></a>
                <?php } ?>

                <div class="list-group-item list-group-item-action">
                    <input type="search" class="container" placeholder="Tìm kiếm từ khóa">
                </div>
            </div>
            <!-- end category -->