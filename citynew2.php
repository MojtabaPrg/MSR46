<?php
$name=$_POST["name"];
$a=mysqli_connect("localhost","root","","sign");
$b=mysqli_query($a,"INSERT INTO `city`(`nacity`) VALUES ('$name');");
mysqli_close($a);
?>
<?php
if($b)
{
 ?>
 <script>
    location.replace("signup.php");
 </script>   
 <?php
}else
echo("خطا");
?>
