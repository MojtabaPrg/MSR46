<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>ویرایش اخبار</title>
</head>
<body>
    
<?php
include("header-index.php");
$title="";
$text="";
$imageurl="";
if(isset( $_GET["id"])){

    $id=$_GET["id"];
    $link=mysqli_connect("localhost","root","","sign");
    $result=mysqli_query($link,"SELECT * FROM `news` WHERE `id`=$id");
    mysqli_close($link);
    $row=mysqli_fetch_array($result);
    if($row){
        $title=$row["title"];
        $text=$row["content"];
        $imageurl=$row["imageurl"];
    }
}
?>

<div class="container" style="margin-top: 7rem;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-success text-white">
            <h4>ویرایش خبر</h4>
          </div>
          <div class="card-body shadow-lg">
            <form action="news_edit_action.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label">تصویر</label>
                <input class="form-control text-start" type="file" name="image" placeholder="تصویر" value="<?php echo($imageurl); ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">عنوان</label>
                <input class="form-control" type="text" name="title" placeholder="عنوان مورد نظر" value="<?php echo($title); ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">متن خبر</label>
                <input class="form-control" type="text" name="text" placeholder="متن مقاله را وارد کنید" value="<?php echo($text); ?>">
              </div>
              <input class="col-12 col-md m-2" type="text" name="id" hidden placeholder="id" value="<?php echo($id); ?>">
              <button type="submit" class="btn btn-success w-100">زخیره</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
