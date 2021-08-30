<!DOCTYPE html>
<html lang="en">
    <?php require('lib/lib.php'); session_start(); ob_start() ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách học sinh</title>
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
            .padding0{
                padding: 1px !important;
            }
            .padding0 a{
                color: #fff;
                text-decoration: none;
            }
        </style>
</head>

<body>
    <div class="container">
                  <?php if (isset($_SESSION['taikhoan'])) {
                        echo '<h3 class="title_diem">Danh sách học sinh</h3> <span class="url"><a href="index.php">Home</a> >Danh sách học sinh</span> <span class="hi">'; if (isset($_SESSION['taikhoan'])) {echo 'Xin chào: '; $email = $_SESSION['taikhoan']; echo username($email);}; echo'</span>
                        <div class="bangdiem">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">STT</th>
                                    <th class="andi" scope="col">Mã HS</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Nơi ở</th>
                                    <th class="andi" scope="col">Điểm</th>
                                    <th class="andi" scope="col">Ghi chú</th>
                                    <th scope="col" id="hs-an">Chức năng</th>
                                  </tr>
                                </thead>
                                <tbody>';
                        danhsach($email);
                  }else{ header('location: login.php');} ?>
                  <?php if(isset($_GET['xoa'])){
                      $conn = connect_db();
                      $iduser = $_GET['xoa'];
                      $result = mysqli_query($conn, "UPDATE user SET lop = 1 WHERE id = $iduser");
                      header('location: danhsachhs.php');
                  } ?>
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