<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align: center;">Webboard Paramee</h1><hr><br>
    <div style="text-align: center;">
        ต้องการดูกระทู้หมายเลข  <?php echo $_GET['id']; ?><br>
        <?php 
        $id = $_GET['id'];
            if($id % 2 == 0){
                echo "เป็นกระทู้หมายเลขคู่";
            }
            else
                echo "เป็นกระทู้หมายเลขคี่";
        ?>
    </div>
    <br>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น </td></tr>
        <form>
            <tr><th colspan="2"><textarea rows="4" cols="70"></textarea></th></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ" ></td></tr>
        </form>
        
    </table>
    <p style="text-align: center;"> <a href="index.php">กลับไปหน้าหลัก</a></p>

    

</body>
</html>
