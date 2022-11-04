<?php

function khach_hang_all()
{
    $conn = connection();
    $sql = "SELECT * FROM khach_hang";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function khach_hang_one($ma_kh)
{
    $conn = connection();
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_kh]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function khach_hang_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function khach_hang_delete($ma_kh)
{
    $conn = connection();
    $sql = "DELETE FROM khach_hang WHERE ma_kh = '{$ma_kh}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function khach_hang_update($data = [])
{
    $conn = connection();
    $sql = "UPDATE `khach_hang` SET `ma_kh` = ?, `mat_khau` = ?, `ho_ten` = ?, `email` = ?, `hinh` = ? , `kich_hoat` = ?, `vai_tro` = ? WHERE `khach_hang`.`ma_kh` = ?;
    ";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
