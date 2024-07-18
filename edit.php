<?php
include ("db.php");
if (isset($_POST["ProductName"])) {
    $id = $_POST["id"];
    $ProductName = $_POST["ProductName"];
    $Picture = $_POST["Picture"];
    $Category = $_POST["Category"];
    $ProductDescription = $_POST["ProductDescription"];
    $Price = $_POST["Price"];
    $QuantityStock = $_POST["QuantityStock"];
    // $test =  "UPDATE products SET name='$name', price='$price', stock='$stock' WHERE id='$id'";
    $sql = "UPDATE products SET ProductName = '$ProductName', Picture = '$Picture', Category = '$Category', ProductDescription = '$ProductDescription', Price = $Price, QuantityStock = $QuantityStock WHERE ProductID = $id";
    echo $sql;  
    if ($connect->query($sql)) {
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ');</script>";
    }
    $connect->close();
    echo "<script>window.location.href='http://localhost/dr/';</script>";

} else {
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE $id";
    $result = $connect->query($sql);
    $result = $result->fetch_assoc();
    $connect->close();
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
    <form action="edit.php" method="post">
        <input type="text" name="id" id="id" value="<?php echo $id ?>" hidden>
        <input type="text" name="ProductName" id="ProductName" value="<?php echo $result['ProductName']; ?>">
        <input type="text" name="Picture" id="Picture" value="<?php echo $result['Picture']; ?>">
        <input type="text" name="Category" id="Category" value="<?php echo $result['Category']; ?>">
        <input type="text" name="ProductDescription" id="ProductDescription"
            value="<?php echo $result['ProductDescription']; ?>">
        <input type="text" name="Price" id="Price" value="<?php echo $result['Price']; ?>">
        <input type="text" name="QuantityStock" id="Quanti  tyStock" value="<?php echo $result['QuantityStock']; ?>">
        <input type="submit" value="บันทึก">
    </form>
</body>

</html>