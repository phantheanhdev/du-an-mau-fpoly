<div class="header__sign-up">
    <h1>ĐĂNG KÝ</h1>
</div>

<form action="?ctl=save_sign_up" method="POST" enctype="multipart/form-data" class="sign_up_account">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email đăng nhập</label>
        <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
        <p><?php if (!empty($error['email'])) {
                echo $error['email'];
            } ?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên tài khoản</label>
        <input type="text" class="form-control" id="exampleInputEmail1" required name="ma_kh">
        <p><?php if (!empty($error['ma_kh'])) {
                echo $error['ma_kh'];
            } ?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required name="mat_khau">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required name="xac_nhan_mat_khau">
        <p><?php if (!empty($error['xac_nhan_mat_khau'])) {
                echo $error['xac_nhan_mat_khau'];
            } ?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="exampleInputPassword1" required name="ho_ten">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hình</label>
        <input type="file" class="form-control" id="exampleInputPassword1" required name="hinh">
    </div>
    <input type="submit" class="btn btn-primary sign_up_acc" name="submit_sign_up" value="Đăng ký">
</form>