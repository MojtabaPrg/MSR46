<?php
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","sign");
$b=mysqli_query($a,"DELETE FROM `news` WHERE `id`=$id");
mysqli_close($a);
?>
<?php

if($b===true)
{
    
 ?>
 
    <script>
    location.replace("news.php");
 </script>   
  
 <?php

}
?>