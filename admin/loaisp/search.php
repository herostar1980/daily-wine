<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <form action="" method="POST">
        <legend class="form">UPDATE THEO ID / TÊN </legend>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Hoặc tên loại </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <input type="text" Value="" name="index"></td>
                    <td><input type="submit" value="Tìm kiếm" name="search"> </td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <legend>Danh sách tìm kiếm </legend>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Tên Loại</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?PHP
            // include("connect.php");
            if (isset($_POST['search']) && ($_POST['search'])) {
                $index = $_POST['index'];
                $sql = "SELECT maloai, tenloai from loaisp 
                where maloai like '$index' or tenloai like '$index'";
                if ($sql)
                    $r = $db->query($sql);
                while ($row = $r->fetch())   //lấy từng dòng giữ liệu
                {
                    echo "<tbody>
                <tr>
                    <td> $row[0]</td>
                    <td ><input type = " . "text" . " name=" . "oldVL" . " value=" . " $row[1] " . " </td>
                </tr>
            </tbody>";
                }
            }
            ?>
        </table>
    </form>
</body>

</html>