<div class="header__sign-up">
    <h1>CẬP NHẬT TÀI KHOẢN</h1>
</div>

<form action="?ctl=save_update_account" method="POST" enctype="multipart/form-data" class="sign_up_account">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="exampleInputEmail1" required name="ho_ten">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" required name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hình</label>
        <input type="file" class="form-control" id="exampleInputPassword1" required name="hinh">
    </div>
    <input type="submit" class="btn btn-primary sign_up_acc" name="submit_sign_up" value="CẬP NHẬT">
</form>