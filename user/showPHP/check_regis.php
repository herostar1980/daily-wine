
<?PHP
include("../connect/connect.php");
if (isset($_POST['regis']) && ($_POST['regis'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "INSERT INTO khachhang VALUES(null,'$name','$address','$phone','$email','$user','$pass','')";
    $r = $db->exec($sql);
    if ($r) {
        echo 'Thêm thành công,';
    } else {
        echo 'Vui lòng thử lại';
    }
}
?>
</html>