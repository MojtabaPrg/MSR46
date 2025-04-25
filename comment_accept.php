<?php
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","sign");
$b=mysqli_query($a,"UPDATE `comment` SET `sabt`='1' WHERE `id`=$id");
mysqli_close($a);
?>
<?php
if($b===true)
{
 ?>
    <script>
    location.replace("mcomment.php");
 </script>   
 <?php
}
?>