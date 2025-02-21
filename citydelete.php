<?php
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","sign");
$b=mysqli_query($a,"DELETE FROM `city` WHERE `IDcity`=$id");
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

}
?>