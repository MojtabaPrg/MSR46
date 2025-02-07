<?php
$email=$_POST["Email"];
$password=$_POST["pass"];
$c=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($c,"SELECT * FROM `signup` WHERE `email`='$email'and`password`='$password'");
$row=mysqli_fetch_array($result);
if($row){
    ?>
    <script>
        alert("ورود موفقیت آمیز");
    location.replace("index.html");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("...دقت کنید");
        location.replace("login.html");
    </script>
    
    <?php
}
mysqli_close($c);
?>
