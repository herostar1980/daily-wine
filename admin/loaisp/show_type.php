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

 
    if (isset($_GET['xoa'])) {
        $id = $_GET['xoa'];
        $sql = "DELETE FROM loaisp where maloai=$id ";
        $r = $db->exec($sql);
    }
    if (isset($_GET['sua']) && ($_GET['sua'])) {
        include('update.php');
    }
    if (isset($_GET['them']) && $_GET['them']) 
    {
        include('insert.php');
    }
    

    $sql = "select * from loaisp";
    $r = $db->query($sql);


    ?>
    <form action="" method="post" style="text-align:center; ">
        <table class="table" > 
            <BR></BR>
            <legend>DANH SÁCH LOẠI SẢN PHẨM</legend>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Tên Loại</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?PHP
            while ($row = $r->fetch())   //lấy từng dòng giữ liệu
            {

            ?>
                <tbody>
                    <tr>
                        <td> <?PHP echo $row[0]; ?></td>
                        <td> <?PHP echo $row[1]; ?></td>
                        <td>
                            <?PHP
                            echo "<a href='?act=loai&xoa= $row[0]'> Xoá </a>";
                            ?>
                        </td>
                        <td>
                            <?PHP
                            echo "<a href='?act=loai&sua= $row[0]'>Sửa</a>"
                            ?>
                        </td>
                    </tr>
                </tbody>

            <?PHP  } ?>
            <tbody>
                <tr>
                    <td><a href="?act=loai&them=add">Thêm</a></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>


</html>