<?php
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($link,"INSERT INTO `news`(`title`, `content`, `imageurl`) VALUES ('$title','$text','$imageurl')");
mysqli_close($link);

if($result===true)
{
    ?>
    <script>
        location.replace("news.php");
    </script>
    <?php
}else
{
    echo("در عملیات ثبت نام مشکلی پیش آمده");
}
?>