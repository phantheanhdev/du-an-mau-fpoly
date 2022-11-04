            <!-- Top 10 favorites -->
            <div class="aside-list">
                <div class="aside-list-name">
                    <h3>TOP 10 YÊU THÍCH</h3>
                </div>
                <div class="aside-list-favorite">
                    <ul><?php foreach ($danh_muc_top_10 as $famous) : ?>
                            <a href="?ctl=hang_hoa_detail&ma_hh=<?php echo $famous['ma_hh'] ?>" class="aside-favorite">
                                <div class="aside-favorite-img">
                                    <img src="./public/images/hang_hoa/<?= $famous['hinh'] ?>" alt="">
                                </div>
                                <li>
                                    <?= $famous['ten_hh'] ?>
                                </li>
                            </a>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div> <!-- end Top 10 favorites -->