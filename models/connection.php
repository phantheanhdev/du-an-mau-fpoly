<?php

function connection()  //hàm kết nối cơ sở dữ liệu
{
    $hostname = 'localhost';
    $db_name = 'xshop';
    $username = 'root';
    $password = "";

    try {
        $conn = new PDO("mysql:host=$hostname; dbname=$db_name; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


function pdo_execute($sql)  //hàm thực thi cơ sở dữ liệu
{
    $sql_args = array_slice(func_get_args(), 1);
    // array_slice : cắt mảng
    // func_get_args - Trả về các đối số của hàm dưới dạng một mảng

    try {
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_query($sql)    // hàm truy vấn nhiều csdl
{
    $sql_args = array_slice(func_get_args(), 1);

    try {
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetchAll();

        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}


function pdo_query_one($sql)    //hàm truy vấn 1 csdl
{
    $sql_args = array_slice(func_get_args(), 1);

    try {
        $conn = connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // PDO::FETCH_ASSOC: Trả về dữ liệu dạng mảng với key là tên của column (column của các table trong database)

        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
