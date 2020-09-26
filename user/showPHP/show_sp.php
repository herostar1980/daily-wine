<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?PHP 
    include("../connect/connect.php");
    if(isset($_POST['submit']) && ($_POST['submit'])) { 
        $_SESSION['action'] = $_GET['action'];
        $_SESSION['id'] = $_GET['id'];
        $_SESSION['quantity'] = $_POST['quantity'];       
     }
 
    $sql = "SELECT * FROM sanpham";
    $r = $db ->query($sql);
?>
<body>
                            <?PHP while ($row = $r->fetch()) { ?>       
                               
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                <form method="post" action="?action=add&id=<?php echo $row[0]; ?>">
                                    <div class="popular-img">
                                        <img src="../../img/<?PHP echo $row[4]; ?>" alt="Ảnh">
                                        <div class="img-cap">
                                            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                                            <span><input type="submit" name="submit" value="Add to cart" class="btnAddAction" /></span>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href=""><?PHP echo $row[1];?></a></h3>
                                        <span>$<?PHP echo $row[3]; ?></span>
                                    </div>
                                </div>
                            </div>         
                                </form>                
                            <?PHP } ?>
</body>
</html>