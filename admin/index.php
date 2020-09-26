<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?PHP
include("connect/connect.php");

session_start();
if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) {
?>
<style>
    ul {
        text-align: center;
    }
ul li {
    display: inline-block;
    padding: 10px;
    margin: 0 10px;
    text-align: center;
}
ul li a {
    text-decoration: none;
    color: black;
    padding: 1vw;
}
img {
    width: 30px;
    height: 30px;
}
ul li:hover {
    background: #7bcbc4;
    border-radius: 3px;
    transition: 1s;
}
ul li a:hover {
    text-decoration: none;
    color: red;
}


</style>

    <body>
        <header>
            <h1 style="text-align: center;">Quản lý bán hàng </h1>
        </header>
        <nav>
            <ul id="navigation">
                <li><img src="../img/icon-type.png" alt=""><a href="?act=loai"> Quản lý loại</a> </li>
                <li><img src="../img/icon-product.png" alt=""><a href="?act=sp">Quản lý sản phẩm </a> </li>
                <li><img src="../img/icon-customer.jpg" alt=""><a href="?act=kh">Quản lý KH</a></li>
                <li><img src="../img/icon-bill.png" alt=""><a href="?act=hd">Quản lý Hoá Đơn</a></li>
                <li><img src="../img/icon-order.jpg" alt=""><a href="?act=dh">Quản lý Đạt hàng</a></li>
                <li><img src="../img/icon-web.jpg" alt=""><a href="?act=index">Đến trang user</a></li>
                <li><img src="../img/icon-logout.png" alt=""><a href="?act=logout">LOGOUT</a></li>
            </ul>
        </nav>


        <article>
            <?PHP

            if (isset($_GET['act'])) {

                $act = $_GET['act'];
            } else {
                $act = "";
            }
            switch ($act) {
                case 'loai':
                    include("../admin/loaisp/show_type.php");
                    break;
                case 'sp':
                    include("../admin/sanpham/show_sp.php");
                    break;
                case 'kh':
                    include("../admin/khachhang/show_kh.php");
                    break;
                case 'hd':
                    include("../admin/hoadon/show_hd.php");
                    break;
                case "dh":
                    include("../admin/chitiet/show_dh.php");
                    break;
                case 'index':
                    header("Location: ../index.php");
                    break;
                case 'logout':
                    session_destroy();
                    header('location: ../user/php/login.php');
                    break;
                default:
                    echo "đây là trang chủ của admin";
                    break;
            }


            ?>

        </article>
    </body>
<?PHP
} else {
    header('location: ../user/php/login.php');
}

?>

</html>