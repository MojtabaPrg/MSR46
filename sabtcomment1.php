<?php
$tcom=$_POST["textcom"];
$pid=$_GET['id'];
$s=mysqli_connect("localhost" , "root" , "" , "sign");
mysqli_query($s,"INSERT INTO `comment`(`txtcom`,`postid` ) VALUES ('$tcom','$pid')");

if($tcom == ""){
    ?>
    <script>
          alert("لطفاً دیدگاه خود را ثبت کنید");
    </script>
    <?php }else{
        ?>
<script>
    location.replace("showapp.php?id=<?php echo($pid);?>");
</script>
<?php }
mysqli_close($s);
?>