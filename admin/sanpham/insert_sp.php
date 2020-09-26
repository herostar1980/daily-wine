<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?PHP
    // include('../connect.php');
    // Insert
    $sql = "select * from loaisp";
    $r = $db->query($sql);
    ?>
    <form action="" method="post" style=" text-align:center; ">
        <legend>DANH SÁCH SẢN PHẨM</legend>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá Cũ</th>
                    <th scope="col">Giá mới</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col" rowspan="1">Tác vụ</th>
                </tr>
            </thead>
            <tbody class="tbody-dark">
                <tr>
                    <td><input type="text" name='name'></td>
                    <td><input type="text" name='old_price'></td>
                    <td><input type="text" name='new_price'></td>
                    <td><input type="file" name='image'> </td>
                    <td>
                        <select name="type" id="type">
                            <?PHP 
                             while ($row = $r->fetch()) 
                             {
                                echo "<option value='$row[0]'>$row[0]</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td><input type="text" name='describe'></td>
                    <td><input type="submit" value="Thêm" name="add"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
<?PHP
if (isset($_POST['add']) && ($_POST['add'])) {
    $name = $_POST['name'];
    $old_price = $_POST['old_price'];
    $new_price = $_POST['new_price'];
    $image = $_POST['image'];
    $type = $_POST['type'];
    $describe = $_POST['describe'];
    $sql = "INSERT INTO sanpham VALUES(null,'$name','$old_price','$new_price','$image','$type','$describe')";
    $r = $db->exec($sql);
    if ($r) {
        echo 'Thêm thành công,';
    } else {
        echo 'Vui lòng thử lại';
    }
}
?>

</html>