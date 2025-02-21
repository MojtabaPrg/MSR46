<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>فراموشی رمز عبور</title>
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
                <form>
                  <div class="mb-3">
                    <label for="email" class="form-label">ایمیل خود را وارد کنید:</label>
                    <input type="email" class="form-control text-start" id="email" placeholder="ایمیل خود را وارد کنید">
                  </div>
                  <button onclick="sing()" type="submit" class="btn btn-success w-100">ارسال لینک بازیابی</button>
                  </div>

                </form>
            </div>
            <div class="mt-3 text-center">
                <a href="login.html" class="text-decoration-none">بازگشت به صفحه ورود</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function sing(){
        a=document.getElementById("email").value;
  
        if(a == ""){
          alert("لطفاً تمام فیلدها را پر کنید");
        }else{
          alert("لینک با موفقیت ارسال شد");
        }
  }
  </script>
</body>
</html>
