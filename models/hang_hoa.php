<?php
//lấy toàn bộ dữ liệu hàng hóa 

function hang_hoa_all()
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function hang_hoa_one($ma_hh)
{
    $conn = connection();
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_hh]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


//function insert hang hoa
function hang_hoa_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, mo_ta) Values(?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

// Fuction lấy toàn dữ liệu hàng hóa trong khoảng 10 -> 20
function so_luot_xem()
{
    $conect = connection();
    $sql =  "SELECT * FROM  hang_hoa where so_luot_xem >= 10 and so_luot_xem <= 20";
    $stmt = $conect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return  $result;
}

// Fuction lấy toàn dữ liệu hàng hóa trong bảng yêu thích
function so_luot_yeu_thich()
{
    $conect = connection();
    $sql =  "SELECT * FROM  hang_hoa where 1 order by so_luot_xem desc limit 0,10";
    $stmt = $conect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return  $result;
}

function dem_so_truy_cap($data = [])
{
    $conn = connection();
    $sql = "UPDATE `hang_hoa` SET `so_luot_xem` = ?+1 WHERE `hang_hoa`.`ma_hh` = ?
    ";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}


// function delete hàng hóa
function hang_hoa_delete($ma_hh)
{
    $conn = connection();
    $sql = "DELETE FROM hang_hoa WHERE ma_hh = {$ma_hh}";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function hang_hoa_update($data = [])
{
    $conn = connection();
    $sql = "UPDATE `hang_hoa` SET `ten_hh` = ?, `don_gia` = ?, `giam_gia` = ?, `hinh` = ?, `ma_loai` = ?, `mo_ta` = ? WHERE `hang_hoa`.`ma_hh` =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
