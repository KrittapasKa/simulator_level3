<?php
include("db.php");
$id = $_GET["id"];
$sql = "DELETE FROM products WHERE ProductID = $id";
if($connect->query($sql)){
    echo "<script>alert('ลบสำเร็จ');</script>";
    echo "<script>window.location.href='http://localhost/dr/';</script>";
}else{
    echo "<script>alert('เกิดข้อผิดพลาดในการลบ')</script>";
    echo "<script>window.location.href='http://localhost/dr/';</script>";
}
$connect->close();
?>