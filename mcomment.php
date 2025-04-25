<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>مدیریت دیدگاه ها</title>
    <style>
        .imgg {
            width: 20%;
            height: 20%;
        }

</style>
</head>
<body>
<?php
include("header-sl.php");
?>
<div class="row text-center text-success" style="margin-top: 8rem;">
    <h4 class="col mb-5">دیدگاه ها</h4>
</div>
<?php
            $link=mysqli_connect("localhost","root","","sign");
            $result=mysqli_query($link, "SELECT `txtcom`, `time`, `id` FROM `comment` WHERE `sabt`<1");
            $row=mysqli_fetch_array($result);
            ?>
            <div class="container mt-5">
                <div class="row">
                    <?php
                while($row){
                    ?>
                    <div class="card col-12 mb-2">
                        <p class="fs-5"><?php echo($row['txtcom']) ?></p>
                        <p class="card-text"><small class="text-body-secondary">تاریخ ثبت: <?php echo $row['time']; ?></small></p>
                        <a class="btn btn-success" href="comment_accept.php?id=<?php echo($row["id"]); ?>">✅</a>
                        <a class="btn btn-danger mb-2" href="comment_delete.php?id=<?php echo($row["id"]); ?>">✖️</a>
                    </div>
                    <?php
             $row=mysqli_fetch_array($result);
             }
             ?>
                     <?php mysqli_close($link); ?>
                </div>
            </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>

</body>
</html>