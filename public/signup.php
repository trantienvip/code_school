<!DOCTYPE html>
<html lang="en">
<?php require('lib/lib.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
    <link rel="stylesheet" href="asset/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="asset/css/login.css">
    <style>
      .noti{
        position: fixed;
        display: flex;
        background: rgba(255, 255, 255, 0.8);
        padding: 8px;
        border-radius: 3px;
        align-items: center;
        color: #333;
        font-size: 16px;
        top: 10px;
        right: 0;
        transition: .5s all ease-in-out;
        transform: translate(180%);
        opacity: 0;
        box-shadow: 1px 1px 5px #f76b6b;
        border: 1px solid #ff1a1a;
      }
      .noti-login{
        color: rgb(194, 64, 64);
        font-weight: bold;
        margin-right: 5px;
      }
      .noti.active{
        transform: translate(0%);
        opacity: 1;
        animation: noti 2s 3s both;
      }
      @keyframes noti {
        from{
          opacity: 1;
        }
        to{
          opacity: 0;
          pointer-events: none;
        }
      }
    </style>
</head>

<body>
    <div class="container fullscreen">
        <form method="POST" class="login-form" autocomplete="off" action="#">
            <h2>Đăng ký</h2>
            <input type="email" name="email" placeholder="Email" required />
            <input type="tel" name="sdt" placeholder="Số điện thoại Zalo" required />
            <input type="text" name="username" placeholder="Username" required />
            <div class="input-icon">
                <input type="password" name="password" placeholder="Mật khẩu" required />
                <i class="fa fa-eye show-password"></i>
            </div>
            <div class="input-icon">
              <input type="password" name="password" placeholder="Nhập lại mật khẩu" required />
              <i class="fa fa-eye show-password"></i>
          </div>
            <button type="submit" name="btnSignup">Đăng ký</button>
            <hr>
            <a href="login.php" class="tk"><span style="color: #000;">Đã có tài khoản?</span> đăng nhập</a>
        </form>
        <div class="noti">
          <i class="ti-na noti-login"></i> <span id="thongbaotag">Đăng ký thất bại</span>
        </div>
    </div>
    <script>
        window.addEventListener("load", function () {
          const loginForm = document.querySelector(".login-form");
          const showPasswordIcon =
            loginForm && loginForm.querySelector(".show-password");
          const inputPassword =
            loginForm && loginForm.querySelector('input[type="password"');
          showPasswordIcon.addEventListener("click", function () {
            const inputPasswordType = inputPassword.getAttribute("type");
            inputPasswordType === "password"
              ? inputPassword.setAttribute("type", "text")
              : inputPassword.setAttribute("type", "password");
          });
        });
    </script>
    <?php 
    if (isset($_POST['btnSignup'])) {
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $sdt = $_POST['sdt'];
      signup($username,$password,$email,$sdt);
    }
    
    ?>
</body>

</html>