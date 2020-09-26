<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?PHP
// Connect
// include("../connect.php");

$id = "";
$name = "";
$old_price = "";
$new_price = "";
$image = "";
$type = "";
$describe ="";
// lay du lieu + gan
if (isset($_GET["sua"])) {
    $id = $_GET["sua"];
    $sql1 = "SELECT * FROM sanpham where maSP=$id";
    $r1 = $db->query($sql1);
    $r1 = $r1->fetch();
    $name = $r1["tenSP"];
    $old_price = $r1['giaCu'];
    $new_price = $r1['giaMoi'];
    $image = $r1['hinhSP'];
    $type = $r1['maLoai'];
    $describe = $r1['moTa'];
}
$sql = "select * from loaisp";
$r = $db->query($sql);
?>
<!-- Form html -->
<body>
    <form action="" method="post">
        <!-- <?PHP include('search.php'); ?> -->
        <legend>UPDATE THÔNG TIN</legend> <br>
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
            <tbody>
                <td><input type="text" name="id" value="<?PHP echo $id ?>"> </td>
                <td><input type="text" name="nname" value="<?PHP echo $name ?>"></td>
                <td><input type="text" name="nold_price" value="<?PHP echo $old_price ?>"></td>
                <td><input type="text" name="nnew_price" value="<?PHP echo $new_price ?>"></td>
                <td><input type="text" name="nimage" value="<?PHP echo $image ?>"></td>
                <td>
                <select name="ntype" id="type">
                    <option value="<?PHP echo $type;?>" selected><?PHP echo $type; ?></option>
                            <?PHP 
                             while ($row = $r->fetch()) 
                             {
                                echo "<option value='$row[0]'>$row[0]</option>";
                            }
                            ?>
                        </select>
                </td>
                <td><input type="text" name="ndescribe" value="<?PHP echo $describe ?>"></td>
                <td><input type="submit" name="update" value="UPDATE"></td>
            </tbody>
        </table>
    </form>
</body>
<?PHP
// update db
if (isset($_POST['update']) && ($_POST['update'])) {
    $id = $_POST['id'];
    $nname = $_POST['nname'];
    $nold_price = $_POST['nold_price'];
    $nnew_price = $_POST['nnew_price'];
    $nimage = $_POST['nimage'];
    $ntype = $_POST['ntype'];
    $ndescribe = $_POST['ndescribe'];
    $sql = "UPDATE sanpham
     SET tenSP = '$nname',
        giaCu = '$nold_price',
        giaMoi = '$nnew_price',
        hinhSP = '$nimage',
        maLoai = '$ntype',
        moTa = '$ndescribe'
    WHERE maSP = $id";
    $r = $db->exec($sql);
    if ($r) {
        echo "Cập nhật thành công,";
    } else {
        echo "Vui lòng thử lại";
    }
}
?>

</html>