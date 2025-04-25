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
            <h4>ثبت نام</h4>
          </div>
          <div class="card-body shadow-lg">
            <form method="post" action="sign.php">
              <div class="mb-3">
                <label for="username" class="form-label">نام کاربری</label>
                <input type="text" class="form-control" name="user" id="username" placeholder="وارد کنید نام کاربری خود را">
              </div>

              <?php
              $a=mysqli_connect("localhost","root","","sign");
              $b=mysqli_query($a,"SELECT * FROM `city`");
              mysqli_close($a);
              ?> 
              <a href="citynew.php"><button type="button">+</button></a>
              <select class="mb-3" name="" id="">
              <?php
              $row=mysqli_fetch_array($b);
              while($row)
              {
              ?>
              <option value="">
              <?php echo($row["nacity"]);?>

              </option>
                <?php
                $row=mysqli_fetch_array($b);
                }
                ?>
              </select>
              <a href="city.php">نام شهر ها</a>
              <div class="mb-3">
                <label for="email" class="form-label">آدرس ایمیل</label>
                <input type="email" class="form-control text-start" name="Email" id="email" placeholder="وارد کنید ایمیل خود را">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" name="pass" id="password" placeholder="وارد کنید پسوردتان را">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms">
                <label class="form-check-label" for="terms">من با <a href="" data-bs-toggle="modal"
                    data-bs-target="#termsModal" class="text-primary">شرایط و ضوابط</a> موافقم</a></label>
              </div>
              <button onclick="sign()" type="submit" class="btn btn-success w-100">ثبت نام</button>
            </form>
          </div>
        </div>
        <div class="text-center mt-3">
          <p>از قبل حساب کاربری دارید؟ <a href="login.php">وارد شوید</a></p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="termsModalLabel">شرایط و ضوابط</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
        </div>
        <div class="modal-body text-start">
          <p>
            به وب‌سایت MSR46 خوش آمدید. لطفاً شرایط و ضوابط استفاده از این سایت را به دقت مطالعه کنید. استفاده از این
            سایت به منزله پذیرش کامل این شرایط است.
          </p>
          
    <h1>شرایط و ضوابط استفاده از سایت MSR46</h1>

    <h2>1. پذیرش شرایط و ضوابط</h2>
    <p>با دسترسی به سایت یا استفاده از آن، شما تایید می‌کنید که با این شرایط و ضوابط موافق هستید. اگر با این شرایط موافق نیستید، لطفاً از سایت استفاده نکنید.</p>

    <h2>2. محتوای سایت</h2>
    <p>محتوای این سایت به منظور اطلاع‌رسانی و بهبود تجربه کاربران ارایه می‌شود. ما هر تلاشی می‌کنیم که محتوا دقیق و بهروز باشد، اما مسولیت در قبال اشتباهات و کمبودی‌ها را می‌پذیریم.</p>

    <h2>3. حقوق ملکیت فکری</h2>
    <p>همه حقوق ملکیت فکری محتوای این سایت متعلق به MSR46 است. نسخه‌برداری، توزیع، انتشار و استفاده از محتوای سایت بدون اجازه کتبی ممنوع می‌باشد.</p>

    <h2>4. لینک‌های شخص سوم</h2>
    <p>این سایت ممکن است حاوی لینک‌هایی به سایت‌ها یا منابع شخص سوم باشد. ما مسولیتی در قبال محتوا یا خدمات این سایت‌ها نداریم.</p>

    <h2>5. مسولیت کاربران</h2>
    <p>شما موافق هستید که مسولیت کامل هرگونه فعالیت یا استفاده از محتوای سایت را می‌پذیرید.</p>

    <h2>6. تغییرات و به‌روزرسانی</h2>
    <p>MSR46 حق دارد این شرایط و ضوابط را در هر زمان به‌روزرسانی کند. اطلاعات به‌روزشده در همین صفحه منعکس خواهد شد.</p>

    <h2>7. تماس با ما</h2>
    <p>اگر سوالی در مورد این شرایط و ضوابط دارید، لطفا از طریق قسمت تماس با ما با ما در ارتباط باشید.</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
  </script>
</body>

</html>