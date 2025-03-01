<?php
session_start();
$email=$_POST["Email"];
$password=$_POST["pass"];
$c=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($c,"SELECT * FROM `signup` WHERE `email`='$email'and`password`='$password'");
$row=mysqli_fetch_array($result);
if($row){

    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];
    ?>
    <script>
        alert("ورود موفقیت آمیز");
    location.replace("index.php");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("...دقت کنید");
        location.replace("login.php");
    </script>
    
    <?php
}
mysqli_close($c);
?>
