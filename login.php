<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>ورود</title>
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
            <h4>ورود</h4>
          </div>
          <div class="card-body shadow-lg">
            <form action="log.php" method="post">
              <div class="mb-3">
                <label for="email" class="form-label">ایمیل</label>
                <input type="email" class="form-control text-start" name="Email" id="email" placeholder="ایمیل خود را وارد کنید">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" name="pass" id="password" placeholder="رمز عبور خود را وارد کنید">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">مرا به خاطر بسپار</label>
              </div>
              <button onclick="sing()" type="submit" class="btn btn-success w-100">ورود</button>
            </form>
          </div>
        </div>
        <div class="text-center mt-3">
          <p>حساب کاربری ندارید؟ <a href="signup.php">ثبت‌ نام</a></p>
          <p><a href="password.php">رمز عبور خود را فراموش کرده‌اید؟</a></p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function sing(){
      a=document.getElementById("email").value;
      b=document.getElementById("password").value;

      if(a == "" || b == ""){
        alert("لطفاً تمام فیلدها را پر کنید");
      }
}
</script>
</body>
</html>
