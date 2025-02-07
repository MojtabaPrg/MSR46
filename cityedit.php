<?php
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","sign");
$b=mysqli_query($a,"SELECT * FROM `city`WHERE `IDcity`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b)
?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>ثبت نام</title>
</head>
<body>

    <header class="shadow custom-shadow mb-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand text-success" href="index.html">MSR46</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <!-- <li class="nav-item ms-2">
                    <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#mapp">مطالب نرم افزار</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#mnews">اخبار تکنولوژی</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./index.html#foot">درباره ما</a>
                </li>

                  <li class="nav-item">
                    <a class="nav-link" href="signup.php">ثبت نام</a>
                  </li>

                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="جستجو..." aria-label="جستجو">
                  <button class="btn btn-outline-success p-auto" type="submit">جستجو</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-success text-white">
            <h4>ویرایش شهر</h4>
          </div>
          <form class="m-4 d-flex gap-2" action="cityedit_action.php" method="post">
    <input type="text" name="name" value="<?php echo($row["nacity"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["IDcity"]);?>">
    <input type="submit"  value="ثبت ویرایش" class="card">
    <a dir="ltr" href="city.php"><button>برگشت به لیست شهر ها</button></a>
    </form>
        </div>
      </div>
    </div>
</body>