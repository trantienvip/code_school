<!DOCTYPE html>
<html lang="en">
<?php require('../lib/lib.php'); session_start(); ob_start();
require ('../lib/get_post.php');
 ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="asset/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../asset/css/style-gv.css">
    <style>
        .container{
            height: 100%;
        }
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
        .chon-cac-de.p2 ul, .chuong{
            display: none;
        }
        .btn-cd {
            cursor: pointer;
            width: 100%;
            white-space: nowrap;
            overflow: hidden !important;
            text-overflow: ellipsis;
            border: #c3c3c3 0.5px solid;
        }
        .chon-cac-de.p2 {
            text-align: center;
            display: flex;
            height: 500px;
            overflow-y: scroll;
        }
        input.form-control.sum {
            width: 50px;
            text-align: center;
            height: 30px;
            border-radius: 3px;
            border: 0.5px #d1d1d1 solid;
        }
        .chon-cac-de.p2 ul li:first-child {
            width: 40%;
            text-align: left;
            font-size: 12px;
            font-weight: 400;
        }
        .tieudenav{
            list-style: none;
            display: flex;
            width: 100%;
            text-transform: uppercase;
            font-weight: 700;
            justify-content: space-around;
        }
        .tieudenav li:first-child{
            width: 33.9%;
            text-align: left;
        }
        .ui_bt{
            display: flex;
            align-items: center;
            height: 50px;
            justify-content: space-around;
            color: #333;
            
        }
        .ui_bt input{
            margin-right: 5px;
            width: 70px;
            border: 1px #dedede solid;
            font-size: 14px;
            padding: 5px 5px;
        }
        #chuy{
            color: red;
            font-size: 16px;
            font-style: italic;
            font-weight: bold;
        }
        button#btn-chonlop.btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
        button.btn-hd {
            width: 145px;
            height: 37px;
            background: #007AFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button.btn-hd a{
            color: #fff;
            text-decoration: none;
        }
        .chon-ty-le{
            display: flex;
        }
        .chon-ty-le p{
            margin-bottom: 0.5rem;
            font-size: 12px;
        }
        #chuy{
            font-size: 13px;
        }
        #btn-chonlop.btn-success{
            display: none;
            background: #28a745;
            width: 100%;
        }
        #btn-chonlop.taodethi{
            width: 100%;
        }
        .taodethi_taixuong{
            width: 100%;
        }
        .taodethi_taixuong label{
            width: 50%;
        }
        .taodethi_taixuong label:last-child{
            display: flex;
            grid-column-gap: 1rem;
            
        }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['taikhoan'])) {
        $email = $_SESSION['taikhoan'];
        isAdmin_kiemtra($email);
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