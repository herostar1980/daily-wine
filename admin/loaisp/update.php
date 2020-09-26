<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<?PHP
// include("connect.php");
$id ="";
$ten = "";
if (isset($_GET["sua"])) {
    $id = $_GET["sua"];
    $sql = "SELECT * FROM loaisp where maloai=$id";
    $r = $db->query($sql);
    $r= $r->fetch();
    $ten = $r["tenLoai"];
}

$sql = "select * from loaisp";
$r = $db->query($sql);
?>

<body>
    <form action="" method="post" style="text-align:center; ">
        <!-- <?PHP include('search.php'); ?> -->
        <legend >UPDATE THÔNG TIN</legend> <br>
         <table class="table">
             <thead class="thead-dark">
                 <th scope="col">Mã loại</th>
                 <th scope="col">Tên loại</th>
                 <th scope="col">Tác vụ</th>
             </thead>
             <tbody>
                 <td><input type="text" value="<?PHP echo $id; ?>" name="id"></td>
                 <td><input type="text" value="<?PHP echo $ten ?>" name="newvalue"></td>
                 <td><input type="submit" value="OK" name="ok"></td>
             </tbody>
         </table>
    </form>
</body>
<?PHP 
if (isset($_POST['ok']) && ($_POST['ok'])) {
    $id = $_POST['id'];
    $newvalue = $_POST['newvalue'];
    $sql = " UPDATE loaisp
     SET tenloai = '$newvalue'
    WHERE maloai = $id";
    $r = $db->exec($sql);
    if($r) {
        echo 'Update thành công';
    }
}
?>
</html>