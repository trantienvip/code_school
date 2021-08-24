<!DOCTYPE html>
<html lang="en">
    <?php require('lib/lib.php'); session_start() ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm chi tiết</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            .title_diem{
                text-align: center;
                margin: 30px 0;
                text-transform: uppercase;
            }
            table{
                text-align: center;
            }
            .hi{
                float: right;
                margin-bottom: 5px;
            }
            .url{
                float: left;
            }
            .url a{
                text-decoration: none;
            }
        </style>
</head>

<body>
    <div class="container">
        <h3 class="title_diem">Bảng điểm của <?php if (isset($_GET['id'])) { $id_hs = $_GET['id']; ten($id_hs); }  ?> </h3> <span class="url"><a href="index.php">Home</a>> <a href="danhsachhs.php">Danh sách học sinh</a>>Bảng điểm của <?php if (isset($_GET['id'])) { $id_hs = $_GET['id']; ten($id_hs); }  ?></span> <span class="hi"> <?php if (isset($_SESSION['taikhoan'])) {$email = $_SESSION['taikhoan']; echo 'Xin chào: '; echo username($email);}; ?></span>
        <div class="bangdiem">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Bài kiểm tra</th>
                    <th scope="col">Điểm</th>
                    <th scope="col">Góp ý</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (isset($_SESSION['taikhoan'])) {
                        isAdmin2($email);
                  }else{ echo '<tr><td colspan="4"><a href="login.php" class="tk"><span style="color: #007bff;">Đăng nhập</a> để xem điểm</tr></td>';} ?>
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>