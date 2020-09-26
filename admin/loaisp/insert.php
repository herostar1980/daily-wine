<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
</head>

<body>
    <?PHP
    $typename = "";
    ?>
    <form action="" method="post" style="text-align:center; ">
        <table class="table">
            <legend> THÊM LOẠI SẢN PHẨM </legend>
            <thead class="thead-dark">
                <th scope="col"> Tên loại </th>
                <th scope="col"> Tác vụ </th>
            </thead>
            <tbody>
                <td><input type="text" name="typename" value="<?PHP $typename ?>"></td>
                <td>  <input type="submit" name="submit" value="Thêm"></td>

            </tbody>
        </table>  
    </form>
    <?PHP
    // include("connect.php");
    if (isset($_POST['submit'])) {
        $typename = $_POST['typename'];
        $sql = "INSERT INTO loaisp(maloai,tenloai) VALUES(null,'$typename')";
        $r = $db->exec($sql);
    }
    ?>

    <?PHP
    ?>
</body>

</html>