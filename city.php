<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>نام شهر ها</title>
</head>
<body>
<?php
include("header-sl.php")
?>
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-success text-white">
            <h4>لیست شهر ها</h4>
          </div>
          <div class="card-body shadow-lg">
          <?php
$a=mysqli_connect("localhost","root","","sign");
$b=mysqli_query($a,"SELECT * FROM `city`");
mysqli_close($a);
?>
<?php
$row=mysqli_fetch_array($b);
while($row)
{
 ?>
 <div class="row">
 <div class="col">
 <button><a href="cityedit.php?id=<?php echo($row["IDcity"]); ?>">ویرایش</a></button>
<button><a href="citydelete.php?id=<?php echo($row["IDcity"]); ?>">حذف</a></button>
<span>
    <?php echo($row['nacity']); ?>
</span>
</div>
</div>
 <?php
 $row=mysqli_fetch_array($b);

}
?>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>