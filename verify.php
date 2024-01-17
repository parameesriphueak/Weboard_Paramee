<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>

    <h1 style="text-align: center;">Webboard Paramee</h1><hr><br>
    <div style="text-align: center;">
        <br>
         <?php 
        $name = $_POST['username'];
        $pass = $_POST['password'];
            if($name == "admin"&&$pass == "ad1234"){
                $_SESSION["username"]="admin";
                $_SESSION["role"]="a";
                $_SESSION["id"]=session_id();
                echo " ยินดีต้อนรับคุณ ADMIN ";
            }
            elseif($name == "member"&&$pass == "mem1234"){
                $_SESSION["username"]="member";
                $_SESSION["role"]="m";
                $_SESSION["id"]=session_id();
                echo " ยินดีต้อนรับคุณ MEMBER ";
            }
            else
                echo " ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง ";
            
        ?>        
        <p style="text-align: center;"> <a href="index.php">กลับไปยังหน้าหลัก</a></p>
        
      
    </div>

</body>
</html>
        