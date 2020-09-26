<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP 
        // include("connect.php");
        $sql = "select * from loaisp";
        $r = $db->query($sql);
    ?>
    <form action="" method="post">
    <select name="name" id="">
    <?PHP 
        
        while ($row = $r->fetch())   //lấy từng dòng giữ liệu
        {

            echo "<option value=".$row[1].">$row[1]</option> ";

        ?>

        <?PHP  } ?>
        
    </select>
    <input type="submit" name="submit" value="Xoá">
           
    </form>
    <?PHP 
    if(isset($_POST['submit']) && ($_POST['submit'])){
        $value = $_POST['name'];
        $sql1 = "DELETE FROM loaisp where tenloai like '$value' ";
        $r = $db->exec($sql1);
    }
    ?>
</body>
</html>