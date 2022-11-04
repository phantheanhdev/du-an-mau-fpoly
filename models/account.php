<?php

function check_account_khach_hang($username, $password)
{
    $sql = "SELECT * FROM khach_hang WHERE email='" . $username . "'AND mat_khau='" . $password . "'";
    $result = pdo_query_one($sql);
    return $result;
}
