<!doctype html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    .footer .icon {
      font-size: 1.5rem;
    }
  </style>

</head>

<body>

  <?php
  include("header-index.php")
    ?>



  <!-- مطالب نرم افزار -->
  <section>
    <div class="container-fluid">
      <div class="row mt-5 align-items-center">
      <?php 
           $link=mysqli_connect("localhost","root","","sign");
           $result=mysqli_query($link,"SELECT * FROM `app`");
           mysqli_close($link);
           $row=mysqli_fetch_array($result);
           ?>
        <div class="col-md-7 border-2 ms-md-5 p-2">
          <h5 class="pb-3 m-2 text-success" id="mapp">مطالب نرم افزار</h5>
          <?php
          while($row){
            ?>
          <div class="ms-5 mt-4">
            <p>▪️<a href="showapp.php?id=<?php echo($row['id'])?>"
                class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><?php echo($row["showtitle"]);?></a></p>
          </div>
          <?php
             $row=mysqli_fetch_array($result);
             }
             ?>
        </div>

        <div class="col-4 d-none d-md-flex fade show">
          <img class="img-fluid" src="./img/ui-design-45.png">
        </div>

      </div>

    </div>
  </section>

  <!-- اخبار -->
  <section>
    <!-- اخبار بخش اول -->
     <?php
    $link=mysqli_connect("localhost","root","","sign");
           $result=mysqli_query($link,"SELECT * FROM `news` WHERE id IN (7, 8);");
           mysqli_close($link);
           $row=mysqli_fetch_array($result);
           ?>
    <div class="container">

      <h4 class="text-center text-success mt-5" id="mnews">آخرین اخبار ها</h4>

      <div class="row mt-5">
        <?php  while($row){ ?>
        <div class="col col-md-6">
          <div class="card shadow">
            <a href="shownews.php?id=<?php echo($row['id'])?>"><img src="<?php echo($row["imageurl"]);?>" class="card-img-top"></a>
            <div class="card-body">
              <h5 class="card-title"><?php echo($row["title"]);?></h5>
              <p class="card-text"><?php echo(substr($row["content"],0,120));?>..</p>
                <p class="card-text"><small class="text-body-secondary">آخرین آپدیت <?php echo $row['created_at']; ?></small></p>
                </div>
          </div>
        </div>
      <?php
      $row=mysqli_fetch_array($result);
             }
             ?>
    </div>
    </div>
  </section>

    <!-- اخبار بخش دوم -->
    <div class="container-fluid mt-4">
    <div class="row">
    <?php 
           $link=mysqli_connect("localhost","root","","sign");
           $result=mysqli_query($link,"SELECT * FROM `news`");
           mysqli_close($link);
           $row=mysqli_fetch_array($result);
           while($row){
           ?>
           <div class="col-6 col-md-4">
              <div class="card mb-3 shadow" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-xxl-4">
                    <a href="shownews.php?id=<?php echo($row['id'])?>"><img
                        src="<?php echo($row["imageurl"]);?>"
                        class="img-fluid rounded-start w-100 h-100"></a>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo($row["title"]);?></h5>
                      <p class="card-text">
                      <?php echo(substr($row["content"],0,120));?>..
                      </p>
                      <p class="card-text"><small class="text-body-secondary">آخرین آپدیت <?php echo $row['created_at']; ?></small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
             $row=mysqli_fetch_array($result);
             }
             ?>
             </div>
             </div>
<!-- تبلیغات -->

<div class="row m-4">
  <div class="col-5 col-md-2 m-2">
  <a href="https://www.saadatrent.com/emirates" target="_blank">
        <img class="img-fluid mt-md-2" src="./tab/g1.gif" alt="">
      </a>
  </div>
  <div class="col-5 col-md-2 m-2">
  <a href="https://proop.co/" target="_blank">
        <img class="img-fluid mt-md-2" src="./tab/g6.gif" alt="">
      </a>
  </div>
  <div class="col-5 col-md-2 m-2">
  <a href="https://daric.gold/?utm_source=zoomit_blog&utm_medium=banner&utm_campaign=zoomit10_11_12" target="_blank">
        <img class="img-fluid mt-md-2" src="./tab/g3.gif" alt="">
      </a>
  </div>
  <div class="col-5 col-md-2 m-2">
  <a href="https://www.shatel.ir/internet-services/towers-special-services/?utm_source=zoomit&utm_medium=display&utm_campaign=towers-special-services" target="_blank">
        <img class="img-fluid mt-md-2" src="./tab/g7.gif" alt="">
      </a>
  </div>
  <div class="col-5 col-md-2 m-2">
  <a href="https://www.shatel.ir/internet-services/towers-special-services/?utm_source=zoomit&utm_medium=display&utm_campaign=towers-special-services" target="_blank">
        <img class="img-fluid mt-md-2" src="./tab/g3.gif" alt="">
      </a>
  </div>
</div>

  <footer id="foot" class="footer bg-success p-3 mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
          <i class="icon bi bi-geo-alt-fill"></i>
          <p class="text-white">آدرس: اصفهان، خیابان آزادی، پلاک 444</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="icon bi bi-envelope-fill"></i>
          <p class="text-white">ایمیل: pcmojtaba19@gmail.com</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="icon bi bi-telephone-fill"></i>
          <p class="text-white">تلفن:‌ +98 992 358 1432</p>
        </div>
      </div>
      <div>
        <p class="text-center text-white pt-3">© سال ۱۴۰۳ کپی بخش یا کل هر کدام از مطالب MSR46 تنها با کسب مجوز مکتوب
          امکان پذیر است</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>