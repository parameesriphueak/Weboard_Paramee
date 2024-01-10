<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
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
            <tr><th colspan="2"><input type="submit" value="ส่งข้อความ" ></th></tr>
        </form>
        
    </table>
    <p style="text-align: center;"> <a href="index.php">กลับไปหน้าหลัก</a></p>

    

</body>
</html>
