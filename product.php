<?php
require ('connect.php');
$sql = "SELECT * FROM products INNER JOIN categories ON products.id_cate = categories.id";
$query = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>id</th>
        <th>name Category</th>
        <th>name</th>
        <th>create Time</th>
        <th>update Time</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($query as $key => $value) {
        echo "<tr>";
        echo "<td>".$value['id']."</td>";
        echo "<td>".$value['name_cate']."</td>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['create_at']."</td>";
        echo "<td>".$value['update_at']."</td>";
        echo "<td><a href=''>sửa</a>&nbsp<a href=''>xóa</a></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>
