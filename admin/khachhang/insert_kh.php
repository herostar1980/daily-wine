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
    // include('../connect.php');
    // Insert

    ?>
    <form action="" method="post">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">user</th>
                    <th scope="col">pass</th>
                    <th scope="col">role</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="tbody-dark">
                <tr>
                    <td><input type="text" name='name'></td>
                    <td><input type="text" name='address'></td>
                    <td><input type="text" name='phone'></td>
                    <td><input type="text" name='email'></td>
                    <td><input type="text" name='user'></td>
                    <td><input type="text" name='pass'></td>
                    <td> <select name="role" id="role">
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select></td>
                    <td><input type="submit" value="Thêm" name="add"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
<?PHP
if (isset($_POST['add']) && ($_POST['add'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    $sql = "INSERT INTO khachhang VALUES(null,'$name','$address','$phone','$email','$user','$pass','$role')";
    $r = $db->exec($sql);
    if ($r) {
        echo 'Thêm thành công,';
    } else {
        echo 'Vui lòng thử lại';
    }
}
?>

</html>