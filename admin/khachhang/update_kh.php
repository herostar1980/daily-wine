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
$address = "";
$phone = "";
$email = "";
// lay du lieu + gan
if (isset($_GET["sua"])) {
    $id = $_GET["sua"];
    $sql1 = "SELECT * FROM khachhang where maKh=$id";
    $r1 = $db->query($sql1);
    $r1 = $r1->fetch();
    $name = $r1["tenKH"];
    $address = $r1['diaChi'];
    $phone = $r1['soDT'];
    $email = $r1['eMail'];
}
?>
<!-- Form html -->

<body>
    <form action="" method="post">
        <!-- <?PHP include('search.php'); ?> -->
        <legend>UPDATE THÔNG TIN</legend> <br>
        <table class="table">
            <thead class="thead-dark">
                <th scope="col">Mã Khách Hàng</th>
                <th scope="col">Tên KH</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
            </thead>
            <tbody>
                <td><?PHP echo $id ?> </td>
                <td><?PHP echo $name ?></td>
                <td><?PHP echo $address ?></td>
                <td><?PHP echo $phone ?></td>
                <td><?PHP echo $email ?></td>
                <td><select name="nrole" id="role" value="<?PHP echo $role; ?>">
                        <option value="0">0</option>
                        <option value="1">1</option>    
                    </select></td>
                <td><input type="submit" name="update" value="UPDATE"></td>
            </tbody>
        </table>
    </form>
</body>
<?PHP
// update db
if (isset($_POST['update']) && ($_POST['update'])) {

    $nrole = $_POST['nrole'];
    $sql = "UPDATE khachhang
     SET 
        role = '$nrole'
    WHERE maKH = $id";
    $r = $db->exec($sql);
    if ($r) {
        echo "Cập nhật thành công,";
    } else {
        echo "Vui lòng thử lại";
    }
}
?>

</html>