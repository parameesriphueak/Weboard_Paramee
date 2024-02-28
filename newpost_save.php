<?php 
session_start();
$cat_id=$_POST['category'];
$top=$_POST['topic'];
$com=$_POST['comment'];
$user_id=$_SESSION['user_id'];
$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="SELECT * FROM post ";
$result=$conn->query($sql);
    $sql1="INSERT INTO post (title, content	, post_date, cat_id, user_id)
    VALUES ('$top','$com',NOW(),'$cat_id','$user_id')";
    $conn->exec($sql1);
    $conn=null;
    header("location:index.php");
    die();
?>