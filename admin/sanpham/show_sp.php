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
    // delete
    if (isset($_GET['xoa']) && ($_GET['xoa'])) {
        $id = $_GET['xoa'];
        $sql = "DELETE FROM sanpham where maSP = $id";
        $r = $db->exec($sql);
        
    }
    if (isset($_GET['them']) && ($_GET['them'])) {
        include('insert_sp.php');
    }
    if (isset($_GET['sua']) && ($_GET['sua'])) {
        include('update_sp.php');
    }
    $sql = "select * from sanpham";
    $r = $db->query($sql);
    // form 


    ?>
    <form action="" method="post" style=" text-align:center; ">
        <legend>DANH SÁCH SẢN PHẨM</legend>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá Cũ</th>
                    <th scope="col">Giá mới</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col" rowspan="1">Tác vụ</th>
                </tr>
            </thead>
            <?PHP while ($row = $r->fetch()) {            ?>
                <tbody>
                    <tr>
                        <td><?PHP echo $row[0] ?></td>
                        <td><?PHP echo $row[1] ?></td>
                        <td><?PHP echo $row[2] ?></td>
                        <td><?PHP echo $row[3] ?></td>
                        <td><img style="width: 50px; heigh:auto;" src="../img/<?PHP echo$row[4];?> "></td>
                        <td><?PHP echo $row[5] ?></td>
                        <td><?PHP echo $row[6] ?></td>
                        <td><?PHP echo "<a href='?act=sp&xoa= $row[0]'> Xoá </a>";
                            echo '&emsp;';
                            echo "<a href='?act=sp&sua= $row[0]'> Sửa</a>"
                            ?></td>
                    </tr>

                <?PHP } ?>
                <tr>
                    <td> <br><br><a href='?act=sp&them=sp' style='padding: 5px 10px; border: 1px solid black; background-color:darkgray; color: #3f3f3f;'>+</a></td>
                </tr>
                </tbody>
        </table>
        <div class="cart">
        </div>
    </form>
</body>
<?PHP




?>

</html>