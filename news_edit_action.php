<?php
include("header-index.php");

$id=$_POST["id"];
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$link=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($link,"SELECT * FROM `news` WHERE `id`=$id");
$row=mysqli_fetch_array($result);
if($row){
    $fileurl=$row["imageurl"];
}
unlink($fileurl);
mysqli_close($link);

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($link,"UPDATE `news` SET `title`='$title',`content`='$text',`imageurl`='$imageurl' WHERE `id`=$id");
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

include("theme-footer.html");
?>
