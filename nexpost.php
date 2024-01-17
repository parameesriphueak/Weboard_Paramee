
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Paramee</title>
</head>
</head>
<body>
    <h1 style="text-align: center;">Webboard Paramee</h1><hr>
    <?php
    session_start();
    if(isset($_SESSION['id'])&& $_SESSION['role'] == 'a'||$_SESSION['role'] == 'm'){
        echo"ผู้ใช้ : $_SESSION[username]";
    }else{
        header("location:index.php");
        die();
    }
?>
    <table>
    <tr><td>หมวดหมู่ :</td>
        <td>   
            <select>
                <option value="general">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option>
            </select>     
        </td></tr>
    <tr><td>หัวข้อ :</td><td><input type="text"> </td></tr>
    <tr><td>เนื้อเรื่อง :</td><td><textarea name="" id="" cols="30" rows="3"></textarea></td></tr>
    <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
</body>
</html>