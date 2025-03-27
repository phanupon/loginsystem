<?php include('dbconn.php'); ?>

<?php 
if(isset($_POST['login'])){
    $txtUsername = $_POST['username'];
    $txtPassword = $_POST['password'];

}

$username = mysqli_real_escape_string($connnect,$txtUsername);
$password = mysqli_real_escape_string($connnect,$txtPassword);
$password = md5($txtPassword);
//$query = "select * from 'user' where 'username' = '$username' and 'password' = '$password'";
$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password';";
//$result = mysqli_query($connnect, $query);
$result = mysqli_query($connnect,$sql);
$objResult = mysqli_fetch_array($result);
print_r($objResult);
if(!$objResult)
{
 echo "Username and Password Incorrect!";
 header("location:index.php?msg=Username and Password Incorrect!");

}
else
{	
    session_start(); //ในห้องเรียนผมลืมใส่ เลยไม่ ได้เริ่มใช้ เซคชั่น

    $_SESSION["id"] = $objResult["id"];
    $_SESSION["status"] = $objResult["status"];
    $_SESSION["name"] = $objResult["name"];
 //ตรวจสอบ status       
        if($objResult["status"] == "ADMIN")
        {
            header("location:admin_page.php");
        }
        else
        {
            header("location:user_page.php");
        }
}
mysqli_close($connnect);

?>