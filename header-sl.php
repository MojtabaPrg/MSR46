<?php
session_start();
?>
<header class="shadow custom-shadow mb-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
      <div class="container">
        <a class="navbar-brand text-success" href="index.php">MSR46</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item ms-2">
                    <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
                  </li> -->
            <li class="nav-item">
              <a class="nav-link" href="index.php#mapp">مطالب نرم افزار</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#mnews">اخبار تکنولوژی</a>
            </li>

            <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
              <li class="nav-item">
              <a class="nav-link" href="news.php">مدیریت</a>
            </li>
            <?php }else{ }?>

            <?php if(isset($_SESSION["scomm"]) && $_SESSION["scomm"]==true){ ?>
              <li class="nav-item">
              <a class="nav-link" href="mcomment.php">مدیریت نظرات</a>
            </li>
            <?php }else{ }?>

            <li class="nav-item">
              <a class="nav-link" href="index.php#foot">درباره ما</a>
          </li>

            <?php if(isset($_SESSION["login"])){ ?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">خروج</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">ثبت نام</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">ورود</a>
            </li>
            <?php } ?>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="جستجو..." aria-label="جستجو">
            <button class="btn btn-outline-success p-auto" type="submit">جستجو</button>
          </form>
        </div>
      </div>
    </nav>
  </header>