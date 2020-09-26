<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?PHP 
    include("../connect/connect.php");
$sql = "SELECT * FROM chitietdathang";
$r = $db ->query($sql);
?>
<body>
                            <?PHP while ($row = $r->fetch()) { ?>       
                                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="../../img/<?PHP echo $row[4];?>" alt="" />
                      </div>
                      <div class="media-body">
                        <p><?PHP echo $row[3]; ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5><?PHP echo $row[6]; ?></h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment"> <i class="ti-plus"></i></span>
                    </div>
                  </td>
                  <td>
                    <h5><?PHP echo $sum; ?> </h5>
                  </td>
                </tr>
                            <?PHP } ?>
</body>
</html>