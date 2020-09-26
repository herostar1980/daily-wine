<?PHP
include("../connect/connect.php");
if(isset($_POST['login']) && ($_POST['login'])) {
    $user = $_POST['name'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM khachhang WHERE user='".$user."' and pass='".$pass."'";
    $r = $db->query($sql);
    while ($row = $r->fetch()) {
        $_SESSION['sid'] = $row['maKH'];
        $_SESSION['sName'] = $row['tenKH'];
        $_SESSION['sAddress'] = $row['diaChi'];
        $_SESSION['sPhone'] = $row['soDT'];
        $_SESSION['sEmail'] = $row['eMail'];
        $_SESSION['sRole'] = $row['role'];
        if(count($row) > 0) {
            if($row['role']==1) 
                header('location: ../../admin/');
            
            else header('location: ../../index.php');
    }
    else   return 0;
    }
}
?>