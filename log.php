<?php
$email=$_POST["Email"];
$password=$_POST["pass"];
$c=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($c,"SELECT * FROM `signup` WHERE `email`='$email'and`password`='$password'");
$row=mysqli_fetch_array($result);
if($row){
    echo("وارد شدید");
}else{
    echo("...دقت کنید");
}
mysqli_close($c);
?>
