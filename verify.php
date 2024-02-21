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
    <title>Verify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>


        <br>
         <?php 
        $name = $_POST['username'];
        $pass = $_POST['password'];
            if($name == "admin"&&$pass == "ad1234"){
                $_SESSION["username"]="admin";
                $_SESSION["role"]="a";
                $_SESSION["id"]=session_id();
                header("location:index.php");
                die();
                // echo " ยินดีต้อนรับคุณ ADMIN ";
            }
            elseif($name == "member"&&$pass == "mem1234"){
                $_SESSION["username"]="member";
                $_SESSION["role"]="m";
                $_SESSION["id"]=session_id();
                header("location:index.php");
                die();
                // echo " ยินดีต้อนรับคุณ MEMBER ";
            }
            else
                $_SESSION['error']='error';
                header("location:login.php");
                die();
                // echo " ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง ";
            
        ?>        
        <!-- <p style="text-align: center;"> <a href="index.php">กลับไปยังหน้าหลัก</a></p> -->
        

</body>
</html>
        