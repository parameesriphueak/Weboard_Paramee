
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Paramee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
</head>
<body>
    <h1 style="text-align: center;">Webboard Paramee</h1><hr>
    <?php
    session_start();
    if(isset($_SESSION['id'])){
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