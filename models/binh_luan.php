<?php

function binh_luan_all()
{
    $conn = connection();
    $sql = "SELECT * FROM binh_luan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function binh_luan_one($ma_bl)
{
    $conn = connection();
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ma_bl]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function binh_luan_delete($ma_bl)
{
    $conn = connection();
    $sql = "DELETE FROM binh_luan WHERE ma_bl={$ma_bl}";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
