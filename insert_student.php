<?php
session_start();
require_once("connect.php")
extract($_POST);
var_export($_POST);
try
{
    $sql = insert into student values (?,?,?);
    $statement=$db->prepare($sql);
    $statement->bindParam(1,$name);
    $statement->bindParam(2,$age);
    $statement->bindParam(3,$course);
    $statement->execute();
    echo "Data inserted successfully";
}
catch (PDOException $error)
{
  LogError($error);
}
?>