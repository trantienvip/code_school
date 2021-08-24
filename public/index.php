<!DOCTYPE html>
<html lang="en">
<?php require('lib/lib.php'); session_start(); ob_start() ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/themify-icons/themify-icons.css">
    <style>
        .not_login{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 23px;
            background: url(asset/img/bg-top.png);
            color: #fff;
            text-shadow: 1px 1px 1px #000;
        }
        .not_login p{
            background: #ae4e4e;
            padding: 20px;
            border-radius: 3px;
            box-shadow: 1px 1px 5px;
            max-width: 90%;
            text-align: center;
        }
        .not_login a{
            text-decoration: none;
            color: rgb(55, 133, 221);
        }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['taikhoan'])) {
        $email = $_SESSION['taikhoan'];
        isAdmin($email);
    }else{
        echo '<div class="not_login">
                <p> Vui lòng <a href="login.php">Đăng nhập</a>  để truy cập hệ thống</p>
              </div>
              
              ';
              header( "refresh:5;url=login.php" );
    }
    if (isset($_GET['logout'])) {
        unset($_SESSION['taikhoan']);
        header('location: ./');
    }
    ?>
    <script src="asset/js/app.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="/socket.io/socket.io.js"></script>

    <script src="client.js"></script>  
</body>
</html>