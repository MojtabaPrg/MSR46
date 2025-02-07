
<?php
include("header.html");
$id=$_POST["id"];
$name=$_POST["name"];
$a=mysqli_connect("localhost","root","","sign");
$b=mysqli_query($a,"UPDATE `city` SET `nacity`='$name' WHERE `IDcity`=$id;
");
mysqli_close($a);
?>
<?php
 if($b===true)
 {
    
 ?>
 
    <script>
    location.replace("city.php");
 </script>   
  
 <?php

}else
echo("خطا");
?>