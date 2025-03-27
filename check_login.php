<?php include('dbconn.php'); ?>

<?php 
if(isset($_POST['login'])){
    $txtUsername = $_POST['username'];
    $txtPassword = $_POST['password'];

}

$username = mysqli_real_escape_string($connnect,$txtUsername);
$password = mysqli_real_escape_string($connnect,$txtPassword);
//$query = "select * from 'user' where 'username' = '$username' and 'password' = '$password'";
$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password';";
//$result = mysqli_query($connnect, $query);
$result = mysqli_query($connnect,$sql);
$objResult = mysqli_fetch_array($result);
if(!$objResult)
{
        echo "Username and Password Incorrect!";
}
else
{	
    $_SESSION["id"] = $objResult["id"];
        $_SESSION["status"] = $objResult["status"];

        session_write_close();
        
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