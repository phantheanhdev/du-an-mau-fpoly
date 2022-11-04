            <!-- form account -->
            <?php
            if (isset($_SESSION['username'])) {
            ?>
                <form class="form--account border border-3 p-3 rounded-2" action="?ctl=log-out" method="POST">
                    <div class="header ">
                        <h3>Xin chào</h3>
                        <?php echo $_SESSION['username'] ?>
                        <div class="mb-3">
                            <img src="public/images/khach_hang/<?php echo $_SESSION['avt'] ?>" alt="loading..." width="250px" height="200px">
                        </div>

                        <hr>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn_logout"> Đăng xuất </button>

                    <div class="account--password--register py-4">
                        <ul>
                            <?php
                            if (isset($_SESSION['admin'])) {
                                echo '<li><a href="?ctl=admin_add_loai_hang">Vào trang admin</a></li>';
                            }
                            ?>
                            <li><a href="#">Quên mật khẩu</a></li>
                            <li><a href="?ctl=update_account">Cập nhật tài khoản</a></li>
                        </ul>
                    </div>

                </form>

            <?php
            } else {
            ?>
                <form class="form--account border border-3 p-3 rounded-2" action="?ctl=log-in" method="POST">
                    <div class="header ">
                        <h3>TÀI KHOẢN</h3>
                        <hr>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email đăng nhập</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    </div>
                    <div class="mb-3 form-check rounded-2">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="nho_tai_khoan">
                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn_login"> Đăng nhập </button>

                    <div class="account--password--register py-4">
                        <ul>
                            <li><a href="#">Quên mật khẩu</a></li>
                            <li><a href="?ctl=sign_up">Đăng ký thành viên</a></li>
                        </ul>
                    </div>

                </form>
            <?php } ?>
            <!-- end form account -->