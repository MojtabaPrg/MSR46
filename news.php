<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>مدیریت</title>
    <style>
        .imgg {
            width: 20%;
            height: 20%;
        }

</style>
</head>
<body>
<?php
include("header-index.php");
?>
<div class="row text-center text-success" style="margin-top: 8rem;">
    <h4 class="col mb-5">
        <a href="news_add.php">+</a>
        لیست اخبار
</h4>
</div>
<?php 
$link=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($link,"SELECT * FROM `news`");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row card m-1">
    <img class="imgg" src="<?php echo($row["imageurl"]); ?>" alt="">
    <span class="col-12 m-2 h5"><?php echo($row["title"]); ?></span>
    <span class="col-12 m-2"><?php echo($row["text"]); ?></span>
    <div class="col">
        <a class="btn btn-success" href="news_edit.php?id=<?php echo($row["id"]); ?>">*</a>
        <a class="btn btn-danger" href="news_delete.php?id=<?php echo($row["id"]); ?>">-</a>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>

</body>
</html>