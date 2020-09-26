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
    // include('connect/connect.php');
    // delete
    if (isset($_GET['xoa']) && ($_GET['xoa'])) {
        $id = $_GET['xoa'];
        $sql = "DELETE FROM khachhang where maKH = $id";
        $r = $db->exec($sql);
    }
    if (isset($_GET['sua']) && ($_GET['sua'])) {
        include('update_kh.php');
    }
    if (isset($_GET['them']) && ($_GET['them'])) {
        include('insert_kh.php');
    }
    $sql = "select * from khachhang";
    $r = $db->query($sql);
    // form 


    ?>
    <form action="" method="post" style=" text-align:center; ">
        <legend>DANH SÁCH KHÁCH HÀNG</legend>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã khách hàng</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">user</th>
                    <th scope="col">pass</th>   
                    <th scope="col">role</th>                
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
                        <td><?PHP echo $row[5] ?></td>
                        <td><?PHP echo md5($row[6]) ?></td>
                        <td><?PHP echo $row[7] ?></td>
                        <td>
                            <?PHP
                            echo "<a href='?act=kh&xoa= $row[0]'> Xoá </a>";
                            echo '&emsp;';
                            echo "<a href='?act=kh&sua= $row[0]'> Sửa</a>";
                            ?>
                        </td>
                    </tr>
                <?PHP } ?>
                <tr>
                    <td> <br><br><a href='?act=kh&them=kh' style='padding: 5px 10px; border: 1px solid black; background-color:darkgray; color: #3f3f3f;'>+</a></td>
                </tr>
            </tbody>

        </table>
    </form>

</body>
<?PHP



?>

</html>