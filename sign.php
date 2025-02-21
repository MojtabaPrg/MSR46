<?php
session_start();
$User=$_POST["user"];
$Email=$_POST["Email"];
$Password=$_POST["pass"];
$s=mysqli_connect("localhost" , "root" , "" , "sign");
mysqli_query($s,"INSERT INTO `signup`(`User Name`, `Email`, `Password`) VALUES ('$User','$Email','$Password')");

if($User == "" || $Email == "" || $Password == ""){
    ?>
    <script>
          alert("لطفاً تمام فیلدها را پر کنید");
    </script>
    <?php }else{
            $_SESSION["login"]=true;
        ?>
<script>
    alert("ثبت نام موفقیت آمیز");
    location.replace("index.php");
</script>
<?php }
mysqli_close($s);
?>
