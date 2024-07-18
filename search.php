<?php
include ("db.php");
$search = $_GET["search"];
$sql = "SELECT * FROM products WHERE ProductName LIKE '%$search%' OR category LIKE '%$search%'";
$results = $connect->query($sql);

$connect->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>หน้าหลัก</h2>
    <form action="search.php" method="get">
        <input type="text" name="search" id="search">
        <input type="submit" value="ค้นหา">
    </form>
    <a href="add.php">เพิ่มรายการสินค้า</a>
    <table style="width: 100%; border: 1px solid black; text-align: center;">
        <tr>
            <th>ไอดี</th>
            <th>ชื่อ</th>
            <th>รูปภาพ</th>
            <th>ประเภท</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
            <th>สต๊อก</th>
            <th>แอคชั่น</th>
        </tr>
<?php while($row = $results->fetch_assoc()):?>
            <tr>
                <td><?php echo $row["ProductID"] ?></td>
                <td><?php echo $row["ProductName"]; ?></td>
                <td><img src="images/<?php echo $row['Picture'];?>" alt="" width="50px"></td>
                <td><?php echo $row["Category"]; ?></td>
                <td><?php echo $row["ProductDescription"]; ?></td>
                <td><?php echo $row["Price"]; ?></td>
                <td><?php echo $row["QuantityStock"]; ?></td>
                <td><a href="edit.php?id=<?php echo $row['ProductID'];?>">แก้ไข</a> <a href="delete.php?id=<?php echo $row['ProductID'];?>" onclick="confirm('คุณแน่ใจว่าจลบรายการนี้?')">ลบรายการ</a></td>
            </tr>
            <?php endwhile;?>
    </table>
</body>

</html>