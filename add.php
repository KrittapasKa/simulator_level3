<?php 
if(isset($_POST["ProductName"])){
    $ProductName =  $_POST["ProductName"];
    $Picture = $_POST["Picture"];
    $Category = $_POST["Category"];
    $ProductDescription = $_POST["ProductDescription"];
    $Price = $_POST["Price"];
    $QuantityStock = $_POST["QuantityStock"];
    include("db.php");
    $sql = "INSERT INTO `products` (`ProductName`, `Picture`, `Category`, `ProductDescription`, `Price`, `QuantityStock`) VALUES ('$ProductName', '$Picture', '$Category', '$ProductDescription', '$Price', '$QuantityStock')";
    $connect->query($sql);
    $connect->close();
    echo "<script>window.location.href='http://localhost/dr/';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">หน้าหลัก</a>
    <form action="add.php" method="post">
        <input type="text" name="ProductName" id="ProductName" placeholder="ชื่อสินค้า">
        <input type="text" name="Picture" id="Picture" placeholder="ภาพสินค้า">
        <input type="text" name="Category" id="Category" placeholder="ประเภทสินค้า">
        <input type="text" name="ProductDescription" id="ProductDescription" placeholder="รายละเอียดสินค้า">
        <input type="text" name="Price" id="Price" placeholder="ราคาสินค้า">
        <input type="text" name="QuantityStock" id="Quanti  tyStock" placeholder="จำนวนสต๊อก">
        <input type="submit" value="เพิ่ม">
    </form>
</body>

</html>