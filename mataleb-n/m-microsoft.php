<!doctype html>
<html lang="fa" dir="rtl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    body {
        text-align: justify;
    }
</style>

</head>

<body>

<?php
    include("../header-folder.php")
    ?>

    <main class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="https://cdn.soft98.ir/microsoft%20edge.jpg" class="img-fluid rounded-circle">
            </div>

            <div class="col-md-9">
                <h2 class="mt-5 mb-3 text-success">مرورگر Microsoft Edge</h2>
                <p>مایکروسافت پس از تلاش فراوان مرورگر اج را جایگزین اینترنت اکسپلورر کرد اما با وجود فایرفاکس و گوگل
                    کروم باز هم نتوانست جایی در بین کاربران اینترنت برای خود دست و پا کند. در نهایت مایکروسافت تصمیم
                    گرفت تا مرورگر Microsoft Edge را با هسته کرومیوم احیا کند که ظاهری شبیه به گوگل کروم دارد. سرعت بالا
                    از نقاط قوت مرورگر Edge می‌باشد و کمبودی که در نسخه قبل مشاهده می‌شد در این نسخه جبران شده و آن
                    پشتیبانی از افزونه‌های متنوع و پرکاربرد است.</p>
            </div>
        </div>

        <div class="row" style="margin-top: 10rem;">

            <div class="col-md-6">
                <h2 class="mb-5 text-success">لیست دانلود</h2>
                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <a href="https://dl2.soft98.ir/soft/m/Microsoft.Edge.131.0.2903.112.x86.zip?1736099334" class="text-decoration-none">دانلود نسخه 32 بیتی با حجم 155 مگابایت</a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://dl2.soft98.ir/soft/m/Microsoft.Edge.131.0.2903.112.x64.zip?1736099343" class="text-decoration-none">دانلود نسخه 64 بیتی با حجم 174 مگابایت</a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://dl2.soft98.ir/soft/m/Microsoft.Edge-129.0.2792.52.pkg?1736099363" class="text-decoration-none">دانلود نسخه Mac با حجم 378 مگابایت</a>
                    </li>
                </ul>
            </div>
            
            <div class="col-md-5 mt-5 mt-xxl-auto ms-md-5">
                <img src="../img/Screenshot 2024-12-23 224243.png" alt="" class="img-fluid rounded">
            </div>
        </div>

        <div class="row" style="margin-top: 10rem;">
            <div class="col-12">
                <h2 class="text-success">نظرات کاربران</h2>
                <!-- <ul class="list-group mt-3">
                    <li class="list-group-item">نظر شماره ۱: این صفحه بسیار مفید بود.</li>
                    <li class="list-group-item">نظر شماره ۲: طراحی بسیار زیبا و کارآمد است.</li>
                    <li class="list-group-item">نظر شماره ۳: لطفاً موارد بیشتری اضافه کنید.</li>
                </ul> -->
                <form class="mt-4">
                    <div class="mb-3">
                        <label for="userComment" class="form-label">نظر خود را بنویسید:</label>
                        <textarea class="form-control" id="userComment" rows="3"
                            placeholder="نظر خود را اینجا بنویسید..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success">ارسال نظر</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-success text-white text-center py-3">
        <p>&copy; سال ۱۴۰۳ کپی بخش یا کل هر کدام از مطالب MSR46 تنها با کسب مجوز مکتوب امکان پذیر است</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>