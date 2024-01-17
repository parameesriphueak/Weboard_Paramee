<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
</head>
<body>

    <h1 style="text-align: center;">Webboard Paramee</h1><hr><br>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td colspan="2" style="background-color: #6CD2FE;">เข้าสู่ระบบ </td></tr>
        <form action="verify.php" method="post">
            <tr><td>Login</td><td><input type="text" name="username" size="30"required></td></tr>
            <tr><td>Password</td><td><input type="password" name="password" size="30" required></td></tr>
            <tr><th colspan="2"><input type="submit" value="login" ></th></tr>
        </form>
    </table>

    <p style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p>

</body>
</html>
