<?php
//lay toan bo loai hang hoa

function loai_all()
{
    $conn = connection();
    $sql = "SELECT * FROM loai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function loai_one($ma_loai)
{
    $conn = connection();
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_loai]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function loai_hang_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO loai(ten_loai) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function loai_hang_delete($ma_loai)
{
    $conn = connection();
    $sql = "DELETE FROM loai WHERE ma_loai={$ma_loai}";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function loai_hang_update($data = [])
{
    $conn = connection();
    $sql = "UPDATE `loai` SET `ten_loai` = ? WHERE `loai`.`ma_loai` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
