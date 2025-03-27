<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","loginsystem");

$connnect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if(!$connnect){
  die("Connection Fail");
} else {
  echo "Connect Sucess";

}
?>