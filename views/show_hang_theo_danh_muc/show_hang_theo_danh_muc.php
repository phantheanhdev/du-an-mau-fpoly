<!-- slide show -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="public/images/dien-thoai/FcpqWbioduDdVXJCPTa3T7.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>iphone 13</h5>
                <p>2000$</p> -->
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="public/images/dong-ho/dongho1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/laptop/lap1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p> -->
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- show sản phẩm -->
<?php
$hang_hoa = hang_hoa_all();
?>

<div class="row" id="list_product">

    <?php foreach ($hang_hoa as $key => $value) {
        if ($value['ma_loai'] == $get_ma_loai) {
    ?>

            <div class="col border border-1 mx-2 my-3 p-3 rounded-2" id="product">
                <a href="?ctl=hang_hoa_detail&ma_hh=<?php echo $value['ma_hh'] ?>">
                    <img src="./public/images/hang_hoa/<?php echo $value['hinh'] ?>" alt="" id="img_product">
                </a>
                <a href="?ctl=hang_hoa_detail&ma_hh=<?php echo $value['ma_hh'] ?>">
                    <h3 id="price_product"><?php echo $value['don_gia'] ?> VND</h3>
                </a>
                <a href="?ctl=hang_hoa_detail&ma_hh=<?php echo $value['ma_hh'] ?>">
                    <h4 id="name_procduct"><?php echo $value['ten_hh'] ?></h4>
                </a>
            </div>

    <?php }
    } ?>
</div>