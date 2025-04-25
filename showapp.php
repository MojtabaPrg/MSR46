<?php
$id = $_GET['id'];
$link=mysqli_connect("localhost","root","","sign");
$result=mysqli_query($link, "SELECT `logo`, `imgur`, `txtapp`, `linkdl`, `title` FROM `app` WHERE id = $id");
$row=mysqli_fetch_array($result);
    ?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title><?php echo($row['title']);?></title>
    <style>

    </style>
</head>
<body>

<?php
    include("header-sl.php")
    ?>
    <main class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="<?php echo $row['logo']; ?>" class="img-fluid rounded-circle">
            </div>

            <div class="col-md-9">
                <h2 class="mt-5 mb-3 text-success"><?php echo $row['title']; ?></h2>
                <p><?php echo $row['txtapp']; ?></p>
            </div>
        </div>

        <div class="row" style="margin-top: 10rem;">

            <div class="col-md-6">
                <h2 class="mb-5 text-success">لیست دانلود</h2>
                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <a href="<?php echo $row['linkdl']; ?>" class="text-decoration-none">دانلود نسخه 64 بیتی</a>
                    </li>
                </ul>
            </div>
            
            <div class="col-md-5 mt-5 mt-xxl-auto ms-md-5">
                <img src="<?php echo $row['imgur']; ?>" alt="" class="img-fluid rounded">
            </div>
        </div>
        <?php mysqli_close($link); ?>


        <div class="row" style="margin-top: 10rem;">
            <div class="col-12">
                <h2 class="text-success">نظرات کاربران</h2>
                <!-- <ul class="list-group mt-3">
                    <li class="list-group-item">نظر شماره ۱: این صفحه بسیار مفید بود.</li>
                    <li class="list-group-item">نظر شماره ۲: طراحی بسیار زیبا و کارآمد است.</li>
                    <li class="list-group-item">نظر شماره ۳: لطفاً موارد بیشتری اضافه کنید.</li>
                </ul> -->
                <form class="mt-4" method="post" action="sabtcomment1.php?id=<?php echo($id); ?>">
          <div class="mb-3">
          <textarea class="form-control" name="poid" id="userComment" hidden>8</textarea>
            <label for="userComment" class="form-label">نظر خود را بنویسید:</label>
            <textarea class="form-control" name="textcom" id="userComment" rows="3"
              placeholder="نظر خود را اینجا بنویسید..."></textarea>
          </div>
          <button type="submit" class="btn btn-outline-success">ارسال نظر</button>
        </form>
            </div>
            <?php
            $link=mysqli_connect("localhost","root","","sign");
            $result=mysqli_query($link, "SELECT `txtcom`, `time`, `sabt` FROM `comment` WHERE postid = $id AND sabt = 1;");
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
                    </div>
                    <?php
             $row=mysqli_fetch_array($result);
             }
            
             ?>
                     <?php mysqli_close($link); ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-success text-white text-center py-3">
        <p>&copy; سال ۱۴۰۳ کپی بخش یا کل هر کدام از مطالب MSR46 تنها با کسب مجوز مکتوب امکان پذیر است</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
