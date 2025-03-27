<?php session_start(); // ต้องมาก่อนใช้ session ใดๆ ?>
<?php include('header.php'); ?>

<h1>admin page </h1>
<div class="container">
<?php
if($_SESSION['id'] == "")
{
echo "Please Login!";
header('Location: index.php');
exit();
}

if($_SESSION['status'] != "ADMIN")
{
    echo "This page for Admin only!";
    exit();
}	
//ตัวอย่างการนำเอา เซกชั่น id ไป ขอดูข้อมูล เฉพาะ สมาชิก
include ('dbconn.php');
$strSQL = "SELECT * FROM user WHERE id = '".$_SESSION['id']."' ";
$objQuery = mysqli_query($connnect,$strSQL);
$objResult = mysqli_fetch_array($objQuery);

echo "<h4>Hello " . $objResult["name"] . "</h4>"; //พิมพ์ชื่อจากการ คิวรี่ ฐานข้อมูล
echo "Your e-mail is " .$objResult["email"]."<br>"; //พิมพ์ email จากการคิวรี่ ฐานข้อมูล
echo "login-status is " .$_SESSION['status'];//พิพม์ ststus จาก เซคชั่น
?>
<div>
<a href="logout_process.php" class="btn btn-danger">Logout</a>
</div>
<?php include('footer.php'); ?>