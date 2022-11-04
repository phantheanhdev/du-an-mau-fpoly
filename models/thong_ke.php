<?php

function thong_ke_theo_loai()
{
    $conn = connection();
    $sql = "SELECT loai.ma_loai, loai.ten_loai AS 'tenloai', COUNT(*) AS 'soluong', MAX(hang_hoa.don_gia) AS 'giacaonhat', MIN(hang_hoa.don_gia) AS 'giathapnhat', ROUND(AVG(hang_hoa.don_gia),0) AS 'giatrungbinh' FROM loai JOIN hang_hoa ON loai.ma_loai = hang_hoa.ma_loai GROUP BY loai.ma_loai, loai.ten_loai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
