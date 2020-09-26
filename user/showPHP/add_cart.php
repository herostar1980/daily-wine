<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?PHP
include('../connect/connect.php');
if(isset($_GET['action'])) { 
    $_SESSION['action'] = $_GET['action'];
}
if(!empty($_SESSION['action'])) {
    switch ($_SESSION['action']) {
        case "add":
            $sql = ("SELECT * FROM sanpham WHERE maSP='" .$_SESSION["id"]. "'");
            $r = $db->query($sql);
            $productById = $r->fetch();
            $itemArray = array($productById["maSP"] => array('tenSP' => $productById['tenSP'], 'id' => $productById['maSP'], 'quantity' => $_SESSION["quantity"], 'giaSP' => $productById['giaMoi'], 'Hinh' => $productById['hinhSP']));
            if (!empty($_SESSION["cart_item"])) {
                if (in_array($productById["maSP"], array_keys($_SESSION["cart_item"]))) {
                    foreach ($_SESSION["cart_item"] as $k => $v) {
                        if ($productById["maSP"] == $k) {
                            if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                $_SESSION["cart_item"][$k]["quantity"] = 0;
                            }
                            $_SESSION["cart_item"][$k]["quantity"] += $_SESSION['quantity'];
                            $_SESSION['quantity'] =0;
                        }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {                  
                    if ($_GET['id'] == $_SESSION["cart_item"][$k]['id']) {
                        unset($_SESSION["cart_item"][$k]);
                    }
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            unset($_SESSION["action"]);
            break;
    }
}
?>
<body>
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bottom_button">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text float-right">
                                        <a class="btn_1" href="?action=empty">Empty cart</a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            if (isset($_SESSION["cart_item"])) {
                                $total_quantity = 0;
                                $total_price = 0;
                            ?>
                                <?PHP
                                foreach ($_SESSION["cart_item"] as $item) {
                                    $item_price = $item["quantity"] * $item["giaSP"];
                                ?>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="../../img/<?PHP echo $item['Hinh']; ?>" alt="" />
                                                </div>
                                                <div class="media-body">
                                                    <p><?PHP echo $item['tenSP']; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5><?PHP echo $item['giaSP']; ?></h5>
                                        </td>
                                        <td>
                                            <div class="product_count">                                              
                                                <p><?php echo $item["quantity"]; ?></p>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>
                                                <?PHP
                                                echo $item_price; ?>
                                            </h5>
                                        </td>
                                        <td style="text-align:center;"><a href="?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="../../img/icon-delete.png" alt="Remove Item" /></a></td>
                                    <?php
                                    $total_quantity += $item["quantity"];
                                    $total_price += ($item["giaSP"] * $item["quantity"]);
                                    $_SESSION['total_price'] = $total_price;
                                }
                                    ?>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>
                                            <h5>Subtotal</h5>
                                        </td>
                                        <td><?php echo $total_quantity; ?></td>
                                        <td>
                                            <h5><?php echo "$ " . number_format($total_price, 2); ?></h5>
                                        </td>
                                    </tr>
                                <?php
                            } else {
                                ?>
                                    <div class="no-records">Your Cart is Empty</div>
                                <?php
                            }
                                ?>
                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="shop.php">Continue Shopping</a>
                        <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
                    </div>
                </div>
            </div>
    </section>
</body>
<?PHP 
?>
</html>