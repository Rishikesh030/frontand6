<?php
session_start();
require_once("connection.php");
extract($_POST);
// var_dump($_POST);    
try
{
    $sql = "insert into teacher (name,email,address,city,district,state,pincode,trust,gst,email1,phone1,phone2,mobile1,mobile2,mobile3,mobile4,mobile5,mobile6,gender,principal_name,principal_phone,principal_email,gko_name,email5,phone3,eo_name,email6,phone4,so_name,email7) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$statement=$db->prepare($sql);
$statement->bindparam(1,$name);
$statement->bindparam(2,$email);
$statement->bindparam(3,$address);
$statement->bindparam(4,$city);
$statement->bindparam(5,$district); 
$statement->bindparam(6,$state);
$statement->bindparam(7,$pincode);
$statement->bindparam(8,$trust);
$statement->bindparam(9,$gst);
$statement->bindparam(10,$email1);
$statement->bindparam(11,$phone1);
$statement->bindparam(12,$phone2);
$statement->bindparam(13,$mobile1);
$statement->bindparam(14,$mobile2);
$statement->bindparam(15,$mobile3);
$statement->bindparam(16,$mobile4);
$statement->bindparam(17,$mobile5);
$statement->bindparam(18,$mobile6);
$statement->bindparam(19,$gender);
$statement->bindparam(20,$principal_name);
$statement->bindParam(21,$principal_phone);
$statement->bindParam(22,$principal_email);
$statement->bindParam(23,$gko_name);
$statement->bindParam(24,$email5);
$statement->bindParam(25,$phone3);
$statement->bindParam(26,$eo_name);
$statement->bindParam(27,$email6);
$statement->bindParam(28,$phone4);
$statement->bindParam(29,$so_name);
$statement->bindParam(30,$email7);
$statement->execute();
echo "Data inserted successfully";
}
catch (PDOException $error)
{
        LogError($error);
}
?>