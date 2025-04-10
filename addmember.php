<?php
include "header.php";
$email = $_GET["email"];
$psw = $_GET["psw"];
$loginname = $_GET["loginname"];
$name = $_GET["name"];
$pass =md5($psw); //md5 hash function password
include "dbconn.php";
//$selectid = "select id FROM user ORDER by id DESC Limit 0,1";
//$result = mysqli_query($connnect,$selectid);
//$resultid = mysqli_fetch_array($result);
//$userid = $resultid[0]+1;
$status = "USER";
$sql = "INSERT INTO user (id, username, password, name, email, status) VALUES ('$userid','$loginname', '$pass', '$name', '$email', '$status')";
$insert = mysqli_query($connnect, $sql);
mysqli_close($connnect);

// INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `email`, `Status`) VALUES (NULL, 'admin', 'admin1234', 'admin', 'admin@gmail.com', 'USER');
echo "<br>email ".$email."<br>";
echo "loginname ".$loginname."<br>";
echo "name " . $name . "<br>";
echo "$pass";
//echo "ID" . $resultID ."<br>";
header("location:register.php");

?>