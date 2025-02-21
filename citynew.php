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

<?php
include("header-sl.php")
?>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-success text-white">
            <h4>اضافه کردن شهر</h4>
          </div>
          <form class="m-4 d-flex gap-2" dir="rtl" action="citynew2.php" method="POST">
          <input type="text" name="name">
          <input type="submit" id="ddd" value="اضافه کردن" class="card">
        </form>
        </div>
      </div>
    </div>
</body>

