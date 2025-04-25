<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>افزودن اخبار</title>
</head>
<body>
    <?php
include("header-index.php");
?>
<div class="container" style="margin-top: 7rem;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-success text-white">
            <h4>افزودن اخبار</h4>
          </div>
          <div class="card-body shadow-lg">
            <form action="news_add_action.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label">تصویر</label>
                <input type="file" name="image" class="form-control text-start">
              </div>
              <div class="mb-3">
                <label class="form-label">عنوان</label>
                <input type="text" name="title" class="form-control" placeholder="عنوان مورد نظر">
              </div>
              <div class="mb-3">
                <label class="form-label">متن خبر</label>
                <input type="text" name="text" class="form-control" placeholder="متن مقاله را وارد کنید">
              </div>
              <button type="submit" class="btn btn-success w-100">‌ذخیره</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>