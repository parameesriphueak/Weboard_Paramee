<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Paramee</title>
</head>
<body>

    <h1 style="text-align: center;">Webboard Paramee</h1><hr>
   <form action="">
        หมวดหมู่ :
        <select>
            <option value="all">--ทั้งหมด--</option>
            <option value="general">--เรื่องทั่วไป--</option>
            <option value="study">--เรื่องเรียน--</option>
        </select>
        <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
   </form> 
   <?php
        for($i = 1;$i <= 10;$i++){
            echo "<li><a href=post.php?id=$i>กระทู้ที่ $i </a></li>";
        }

    ?>
</body>
</html>