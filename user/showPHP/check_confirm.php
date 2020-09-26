<?PHP 
include('../connect/connect.php');
if (isset($_POST['confirm']) && ($_POST['confirm'])) {
    $_SESSION['cName'] = $_POST['name'];
    $_SESSION['cPhone'] = $_POST['phone'];
    $_SESSION['cEmail'] = $_POST['email'];
    $_SESSION['cAddress'] = $_POST['address']; 
    $maKH = $_SESSION['sid'];
    $ngayMua = date("Y/m/d");
    $_SESSION['cDate'] = $ngayMua;
    $thanhTien = $_SESSION['total_price'];
    $sql = "INSERT INTO hoadon VALUES(null,'$maKH','$ngayMua','$thanhTien')";
    $r = $db->exec($sql);
    $sql1 = "SELECT soHD FROM hoadon WHERE maKH = '".$_SESSION['sid']."' ORDER BY soHD DESC" ;
    $r1 = $db->query($sql1);
    $row = $r1->fetch();
    $soHD = $row[0];
    $_SESSION['soHD'] = $soHD;
    foreach ($_SESSION["cart_item"] as $k => $v) {   
        $maSP =  $_SESSION["cart_item"][$k]['id'];
        $soLuong =  $_SESSION["cart_item"][$k]['quantity'];
        $giaSP =  $_SESSION["cart_item"][$k]['giaSP'];
        $giaBan = $soLuong*$giaSP;        
        $sql2 = "insert into chitietdathang values(null,'$soHD','$maSP','$soLuong','$giaBan')";
        $r2 = $db->exec($sql2);
    }  
   
  
}
