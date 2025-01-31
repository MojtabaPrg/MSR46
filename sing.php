<?php
$User=$_POST["user"];
$Email=$_POST["Email"];
$Password=$_POST["pass"];
$s=mysqli_connect("localhost" , "root" , "" , "sign");
mysqli_query($s,"INSERT INTO `signup`(`User Name`, `Email`, `Password`) VALUES ('$User','$Email','$Password')");
mysqli_close($s);
?>
