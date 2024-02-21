<?php 
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    
    <h1 style="text-align: center;">สมัครสมาชิก</h1><hr><br>

    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td colspan="2" style="background-color: #6CD2FE;">กรอกข้อมูล </td></tr>
        <form action="index.php" method="post" onsubmit="return validateForm()">
            <tr><td>ชื่อบัญชี : </td><td><input type="text" name="username" size="30" required></td></tr>
            <tr><td>รหัสผ่าน : </td><td><input type="password" name="password" size="30" required></td></tr>
            <tr><td>ชื่อ-นามสกุล : </td><td><input type="text" name="Fullname" size="30" required></td></tr>

            <tr><td><label for="gender">เพศ:</label><br></td>
                <td><input type="radio" value="ชาย">ชาย<br>
                <input type="radio" value="หญิง">หญิง<br>
                <input type="radio" value="อื่น ๆ">อื่น ๆ<br></td></tr>
            <tr><td>อีเมล : </td><td><input type="text" name="email" size="30" required></td></tr>   
            <tr><th colspan="2"><input type="submit" value="สมัครสมาชิก"  ></th></tr>
        </form>
    </table>
    <p style="text-align: center;"><a href="index.php">กลับหน้าหลัก</a></p>


</body>
</html>
