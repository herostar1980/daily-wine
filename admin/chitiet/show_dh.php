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
    if (isset($_GET['xoa']) && ($_GET['xoa'])) {
        $id = $_GET['xoa'];
        $sql = "DELETE FROM chitietdathang where STT = $id";
        $r = $db->exec($sql);
     }
    $sql = "select * from chitietdathang";
    $r = $db->query($sql);


    ?>
    <form action="" method="post" style=" text-align:center; ">
        <legend>DANH SÁCH HOÁ ĐƠN</legend>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Số hoá đơn</th>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col" rowspan="1">Tác vụ</th>
                </tr>
            </thead>

            <tbody>
                <?PHP while ($row = $r->fetch()) {            ?>
                    <tr>
                        <td><?PHP echo $row[0] ?></td>
                        <td><?PHP echo $row[1] ?></td>
                        <td><?PHP echo $row[2] ?></td>
                        <td><?PHP echo $row[3] ?></td>
                        <td><?PHP echo $row[4] ?></td>
                        <td>
                            <?PHP
                            echo "<a href='?act=dh&xoa=$row[0]'> Xoá </a>";
                            ?>
                        </td>
                    </tr>
                <?PHP } ?>
            </tbody>

        </table>
    </form>

</body>
<?PHP



?>

</html>