<?php 
$conn1 = connect_db();


?>
<script type="text/JavaScript">
  function get_value() {
    var x = document.getElementById("chonlop").value;
    return x;
  }

    function getBoxCD(e){
        var divID = e;
        jQuery('#id').hide();
    }
    function AddInputs() {
            var total = 0;
            var coll = document.getElementsByClassName("sum")
            for (var i = 0; i < coll.length; i++) {
                var ele = coll[i];
                total += parseInt(ele.value);
            }
            $("#number_ch").val(total);
        }
    function showcd(cd){
            jQuery('.chuong').hide();
            var chuongcon = document.querySelectorAll('.chuong.'.concat(cd));
            chuongcon.forEach(e => {
                e.style.display = 'flex';
            });
        };

        function clearall(){
            var elements = document.getElementsByClassName("form-control sum");
            for (var ii=0; ii < elements.length; ii++) {
                if (elements[ii].type == "number") {
                elements[ii].value = 0;
                }
            }
        };

  </script>
<?php
    function connect_db(){
        $connect = new mysqli('localhost', 'root', '', 'data_school');
        if ($connect->connect_error) {
            die('Kết nối đến database không thành công => '.$connect->connect_error);
        }else{
            return $connect;
        }
    }

    function login($email,$password){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' and password = '$password'");
        if ($result->num_rows>0) {
            echo 'Đăng nhập thành công';
            $_SESSION['taikhoan'] = $email;
            header('location: ./');
        }else{
            echo '<script>document.querySelector(".noti").classList.add("active");</script>';

        }
    }

    function calc_hs(){
        $conn = connect_db();
        $result = mysqli_query($conn, "SELECT COUNT(id) FROM user WHERE isAdmin = 0");
        while($row = $result->fetch_assoc()){
            echo $row['COUNT(id)'];
        }
    }

    function username($email){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
        while($row = $result->fetch_assoc()){
            echo $row['username'];
        }
    }
    function isAdmin($email){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
        $result2 = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' AND isAdmin = 1");
        if ($result->num_rows>0) {
            if ($result2->num_rows>0) {
                echo '<div class="container">
                <i class="ti-menu menubar"></i>
                <i class="ti-cup cup"></i>
                <div class="nav-bar">
                    <h3 class="tenlop btn">Lớp 12A <i class="ti-close dongnav"></i></h3>
                    <div class="avatar"><img width="100%" src="https://i.ibb.co/SKPC0Hk/image.png" alt="avatar"></div>
                    <p class="btn">'; $email = $_SESSION['taikhoan']; username($email); echo' <a id="thoat" href="./?logout">Đăng xuất</a></p>
                    <p class="btn">Chọn người hỗ trợ</p>
                    <p class="btn">Tạo nhóm Zalo</p>
                    <p class="btn">Share link admin</p>
                    <a href="danhsachhs.php" class="btn none_a">Danh sách học sinh</a>
                    <div class="tonghs">
                        <p>Tổng học sinh: </p>
                        <p>'; calc_hs(); echo'</p>
                    </div>
                    <p class="btn">Lịch học</p>
                    <a href="kiemtra/giaovien.php" class="btn none_a">Giao bài tập</a>
                    <div class="tonghs">
                        <p>Học sinh nộp bài</p>
                        <p>5</p>
                    </div>
                    <p class="btn">Trả bài, điểm cho học sinh</p>
                </div>
                <div class="contentAll">
                    <div class="top-content">
                        <div class="top-content-right reward">
                            <select name="" id="">
                                <option value="">Phần thưởng học sinh xuất sắc</option>
                                <option value="">Phần thưởng</option>
                            </select>
                            <select name="" id="">
                                <option value="">Phần thưởng</option>
                                <option value="">Phần thưởng học sinh xuất sắc</option>
                            </select>
                        </div>
                        <button class="btnblue">Chọn</button>
                        <i class="ti-angle-up daylen"></i>
                    </div>
                    <div class="bottom-content">
                        <h3 class="title">Phòng chat chung</h3>
                        <div class="chat">
                            <div class="chatchit" id="chatchit">
                                <div class="chatcn"><img src="https://i.ibb.co/SKPC0Hk/image.png" alt=""><p> Đang ăn cơm bạn ơi!</p></div>
                            </div>
                        </div>
                        <form class="chat-op">
                            <i class="ti-upload uploadfile-btn"></i>
                            <i class="ti-comment ms-btn"></i>
                            <input type="text" id="message" class="inputchat" placeholder="Nhập tin nhắn...">
                            <div class="chatupload">
                                <input type="file" width="100%" class="chatuploadx" name="" id="">
                                <button id="upl">Chọn tệp</button>
                            </div>
                            <button type="submit" class="button-g">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>';
            }else{
                echo '<div class="container">
                <i class="ti-menu menubar"></i>
                <i class="ti-cup cup"></i>
                <div class="nav-bar">
                    <h3 class="tenlop btn">Lớp 12A <i class="ti-close dongnav"></i></h3>
                    <div class="avatar"><img width="100%" src="https://i.ibb.co/SKPC0Hk/image.png" alt="avatar"></div>
                    <p class="btn">'; $email = $_SESSION['taikhoan']; username($email); echo' <a id="thoat" href="./?logout">Đăng xuất</a></p>
                    <p class="btn">'; $id_hs_email = $_SESSION['taikhoan']; tengiaovien($id_hs_email); echo '</p>
                    <p class="btn">Nhóm Zalo</p>
                    <p class="btn">Link gửi bạn bè</p>
                    <a href="danhsachhs.php" class="btn none_a">Danh sách học sinh</a>
                    <div class="tonghs">
                        <p>Tổng học sinh: </p>
                        <p>'; calc_hs(); echo'</p>
                    </div>
                    <a href="lichhoc.php" class="btn none_a">Lịch học</a>
                    <p class="btn">Nhận bài tập</p>
                    <p class="btn">Nộp bài tập</p>
                    <a href="bangdiem.php" class="btn none_a">Bảng điểm</a>
                </div>
                <div class="contentAll">
                    <div class="top-content">
                        <div class="top-content-right reward">
                            <select name="" id="">
                                <option value="">Phần thưởng học sinh xuất sắc</option>
                                <option value="">Phần thưởng</option>
                            </select>
                            <select name="" id="">
                                <option value="">Phần thưởng</option>
                                <option value="">Phần thưởng học sinh xuất sắc</option>
                            </select>
                        </div>
                        <button class="btnblue">Chọn</button>
                        <i class="ti-angle-up daylen"></i>
                    </div>
                    <div class="bottom-content">
                        <h3 class="title">Phòng chat chung</h3>
                        <div class="chat">
                            <div class="chatchit" id="chatchit">
                                <div class="chatcn"><img src="https://i.ibb.co/SKPC0Hk/image.png" alt=""><p> Đang ăn cơm bạn ơi!</p></div>
                            </div>
                        </div>
                        <form class="chat-op">
                            <i class="ti-upload uploadfile-btn"></i>
                            <i class="ti-comment ms-btn"></i>
                            <input type="text" id="message" class="inputchat" placeholder="Nhập tin nhắn...">
                            <div class="chatupload">
                                <input type="file" width="100%" class="chatuploadx" name="" id="">
                                <button id="upl">Chọn tệp</button>
                            </div>
                            <button type="submit" class="button-g">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>';
            }
        }else{
            echo 'bạn không có quyền truy cập trang này';
        }
    }

    function isAdmin2($email){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' and isAdmin = 1");
        if ($result->num_rows>0) {
            $id_hs = $_GET['id']; baikiemtraad($id_hs);
        }else{
            echo 'bạn không có quyền truy cập trang này';
        }
    }

    function ten($id_hs){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM user WHERE id = '$id_hs'");
        while($row = $result->fetch_assoc()){
            echo $row['hoten'];
        }
    }

    function signup($username,$password,$email,$sdt){
        $conn = connect_db();
        $result = mysqli_query($conn,"INSERT INTO user VALUES(null, '$username', '$password', '$email', '$sdt', 0)");
        if ($result) {
            echo 'Đăng ký thành công';
            echo '<script>
            document.querySelector("#thongbaotag").innerHTML = "Đăng ký thành công";
            document.querySelector(".noti").style.background = "#84f0b4cc";
            document.querySelector(".noti").style.border = "none";
            document.querySelector(".noti").style.boxShadow = "none";
            document.querySelector(".ti-na").classList.add("ti-check");
            document.querySelector(".ti-check").style.color = "#fff";
            document.querySelector(".noti").classList.add("active");</script>';
            
        }else{
            echo '<script>document.querySelector(".noti").classList.add("active");</script>';

        }
    }

    //bangdiem
    function baikiemtra($email){
        $conn = connect_db();
        $result = mysqli_query($conn, "SELECT * FROM baikiemtra b INNER JOIN user u ON u.id = b.id_hs WHERE u.email like '$email' ORDER BY id_baikiem DESC");
        $result2 = mysqli_query($conn, "SELECT AVG(diem) as sdiem FROM baikiemtra b INNER JOIN user u ON u.id = b.id_hs WHERE u.email like '$email' ORDER BY id_baikiem DESC");
        if ($result->num_rows>0) {
            $stt = 1;
            while($row = $result->fetch_assoc()){
                echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['tenbai_kt'].'</td>
                    <td>'.$row['diem'].'</td>
                    <td>'.$row['gopy'].'</td>
                </tr>';
            }
            while($row = $result2->fetch_assoc()){
                echo '<tr>  
                <td colspan="2"><b>Điểm trung bình</b></td><td colspan="2">'.round($row['sdiem'], 1).'</td></tr>';
            }
        }else{
            echo '<tr><td colspan="4"> Bạn chưa có điểm!</tr></td> ';
        }
    }

    function baikiemtraad($id_hs){
        $conn = connect_db();
        $result = mysqli_query($conn, "SELECT * FROM baikiemtra b INNER JOIN user u ON u.id = b.id_hs WHERE u.id like '$id_hs' ORDER BY id_baikiem DESC");
        $result2 = mysqli_query($conn, "SELECT AVG(diem) as sdiem FROM baikiemtra b INNER JOIN user u ON u.id = b.id_hs WHERE u.id like '$id_hs' ORDER BY id_baikiem DESC");
        if ($result->num_rows>0) {
            $stt = 1;
            while($row = $result->fetch_assoc()){
                echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['tenbai_kt'].'</td>
                    <td>'.$row['diem'].'</td>
                    <td>'.$row['gopy'].'</td>
                </tr>';
            }
            while($row = $result2->fetch_assoc()){
                echo '<tr>  
                <td colspan="2"><b>Điểm trung bình</b></td><td colspan="2">'.round($row['sdiem'], 1).'</td></tr>';
            }
        }else{
            echo '<tr><td colspan="4"> Học sinh chưa có điểm!</tr></td> ';
        }
    }

    function danhsach($email){
        $conn = connect_db();
        $result = mysqli_query($conn, "SELECT * FROM user u INNER JOIN gioitinh g ON g.id_gt = u.gioitinh AND u.isAdmin != 1 AND lop  = 13 ORDER BY id ASC");
        $result2 = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' and isAdmin = 1");
        $result3 = mysqli_query($conn, "SELECT * FROM user u INNER JOIN bangdiem b INNER JOIN gioitinh g ON u.id = b.idhs AND g.id_gt = u.gioitinh");
        if ($result2->num_rows>0) {
            $stt = 1;
            while($row = $result->fetch_assoc()){
                echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>PH'.$row['id'].'</td>
                    <td>'.$row['hoten'].'</td>
                    <td>'.$row['ngaysinh'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['noisinh'].'</td>
                    <td><button class="btn btn-success padding0"> <a href="bangdiem_ad.php?id='.$row['id'].'"> Xem  </a></button></td>';
                    // if ($row['sdiem'] == 0) {
                    //     echo '<td colspan="4"> Chưa có điểm</td> ';
                    // }else{
                    //     echo '<td>'.round(($row['sdiem']), 1).'</td>';
                    // }

                    echo '<td>'.$row['ghichu'].'</td>
                    <td><a style="color: red;" href="danhsachhs.php?xoa='.$row['id'].'">Xóa</a></td>
                    ';
                    // <td><button class="btn btn-success">Sửa </button></td>
                echo'</tr>';
            }
        }else{
            $stt = 1;
            while($row = $result->fetch_assoc()){
                echo '<script>var andi = document.querySelectorAll(".andi");
                    andi.forEach(e => {
                        e.style.display = "none";
                    });
                    document.querySelector("#hs-an").style.display="none";
                    </script>';
                echo '<tr>
                    <td>'.$stt++.'</td>
                    <td>'.$row['hoten'].'</td>
                    <td>'.$row['ngaysinh'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['noisinh'].'</td>';
                echo'</tr>';
            }
        }
    }
    
    //lịch học
    function lichhoc($email){
        $conn = connect_db();
        $result = mysqli_query($conn, "SELECT *, ds.tenlop as tl FROM lichhoc l INNER JOIN user u INNER JOIN dslop ds ON l.giangvien = ds.idlop AND ds.admin_lop = u.id ORDER BY l.id ASC");
        if ($result->num_rows>0) {
            $stt = 1;
            while($row = $result->fetch_assoc()){
                echo '<tr><td scope="col">'.$stt++.'</td>
                <td scope="col">'.$row['ngay'].'</td>
                <td scope="col">'.$row['tl'].'</td>
                <td scope="col">'.$row['hoten'].'</td>
                <td scope="col">'.$row['batdau'].' - '.$row['ketthuc'].'</td>
                <td scope="col">'.$row['link'].'</td></tr>';
            }
        }else{
            echo '<tr><td colspan="6"> Chưa có lịch học!</tr></td> ';
        }
    }
    

    // kiem tra
    function chuyende($class){
        $conn = connect_db();
        if(isset($_POST["chonlop"])){
            $class=$_POST["chonlop"];
        }
        $result = mysqli_query($conn,"SELECT * FROM chuyende WHERE class = $class");
        while($row = $result->fetch_assoc()){
            echo' <button class="btn btn-link btn-block text-left collapsed btn-cd" onclick =showcd("'.$row['machuyende'].'") id="'.$row['machuyende'].'" type="button">
            '.$row['name'].'

            </button>';
        }
    }

    function chuong(){
        $conn = connect_db();
        if(isset($_POST["chonlop"])){
            $class=$_POST["chonlop"];
        }
        $result = mysqli_query($conn,"SELECT * FROM chuyende WHERE class=$class");
        while($row = $result->fetch_assoc()){
            echo '<li><a class="none_a" href="#">'.$row['name'].'</a></li>';
        }
    }
    function isAdmin_kiemtra($email){
        $conn = connect_db();
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
        $result2 = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' AND isAdmin = 1");
        if ($result->num_rows>0) {
            if ($result2->num_rows>0) {
                echo '<div class="container">
                <i class="ti-menu menubar"></i>
                <i class="ti-cup cup"></i>
                <div class="nav-bar">
                    <h3 class="tenlop btn">Lớp 12A <i class="ti-close dongnav"></i></h3>
                    <div class="avatar"><img width="100%" src="https://i.ibb.co/SKPC0Hk/image.png" alt="avatar"></div>
                    <p class="btn">'; $email = $_SESSION['taikhoan']; username($email); echo' <a id="thoat" href="./?logout">Đăng xuất</a></p>
                    <p class="btn">Chọn người hỗ trợ</p>
                    <p class="btn">Tạo nhóm Zalo</p>
                    <p class="btn">Share link admin</p>
                    <a href="../danhsachhs.php" class="btn none_a">Danh sách học sinh</a>
                    <div class="tonghs">
                        <p>Tổng học sinh: </p>
                        <p>'; calc_hs(); echo'</p>
                    </div>
                    <p class="btn">Lịch học</p>
                    <p class="btn">Giao bài tập</p>
                    <div class="tonghs">
                        <p>Học sinh nộp bài</p>
                        <p>5</p>
                    </div>
                    <p class="btn">Trả bài, điểm cho học sinh</p>
                </div>
                <div class="contentAll-c">
                    <div class="top-c">
                    <form method="POST" action="">
                        <select name="chonlop" id="chonlop" onchange= "this.form.submit()">
                            <option disabled selected value="">Chọn lớp</option>
                            ';for($i = 12;$i >= 1;$i--){
                                echo'<option value="'.$i.'">Lớp '.$i.' </option>';  
                            }
                            echo'
                        </select>
                    </form>
                        <h4>Vào để tạo lớp quản lý học sinh <br> Tạo đề kiểm tra cho lớp</h4>
                    </div>
                    <div class="main-c">
                        <div class="chon-cac-de p1">
                            <h4>Chọn các chuyên đề cho đề thi</h4>
                            <ul id="chuyende">';
                            $class=12;
                            if(isset($_POST["chonlop"])){
                                $class=$_POST["chonlop"];
                                chuyende($class);
                            }else{
                                chuyende($class);   
                            }
                            echo '<script>var x = document.getElementById("chonlop").value='.$class.';</script> </ul> 
                        </div>

                        <div class="chon-cac-de p2">
                            <h4>Chọn mức độ khó trong đề</h4>
                            <nav class="tieudenav">
                                <li>Tên chương</li>
                                <li>Giỏi</li>
                                <li>Khá</li>
                                <li>TB</li>
                            </nav>';
                            $conn = connect_db();
                            $chuong = mysqli_query($conn, "SELECT * FROM chuong");
                            while($row = $chuong->fetch_assoc()){
                                echo '<ul class="chuong '.$row['id_chuyende'].'">
                                <li>'.$row['name'].'</li>
                                <li><input onclick="this.select()" name="';echo $row['id_chuyende'] . '-' . $row['thumuc'] . '-GIOI-" class="form-control sum" type="number" min="0" max="1000" value="0" placeholder="Nhập số lượng câu hỏi"/></li>
                                <li><input onclick="this.select()" name="';echo $row['id_chuyende'] . '-' . $row['thumuc'] . '-KHA-" class="form-control sum" type="number" min="0" max="1000" value="0" placeholder="Nhập số lượng câu hỏi"/></li>
                                <li><input onclick="this.select()" name="';echo $row['id_chuyende'] . '-' . $row['thumuc'] . '-TB-" class="form-control sum" type="number" min="0" max="1000" value="0" placeholder="Nhập số lượng câu hỏi"/></li>

                            </ul>';
                            }
                            echo'
                            <div class="thongtintrungtam">
                                <img id="logo_tt" src="https://upload.wikimedia.org/wikipedia/vi/archive/d/dc/20200125140746%21Vinfast-logo.png" alt="">
                                <h3>Trung tâm đào tạo ABC</h3>
                                <h4>Liên hệ: 0333.344.588</h4>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-c">
                            <div class="ui_bt">
                                <div class="col-md-6">
                                <div class="checkbox">
                                    <label> <input name="ans" type="checkbox"> Có lời giải </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span id="Display"></span>
                                <div class="checkbox">
                                    <label> <input id="number_ch" disabled="" value="0" name="number" type="text">
                                        Tổng số câu trong đề thi </label>
                                </div>
                            </div>
                            </div>'; if (intval($class) <12) {
                                echo '<div class="ui_bt chon-tyle">
                                <label>
                                Chọn tỷ lệ câu trắc nghiệm và tự luận trong đề thi </label>
                                <div class="chon-ty-le"><div class="checkbox"><label><input class="max100" name="tn" id="tn" value="100" onchange="changeNumber1(this.value)"> % </label> <p>Trắc nghiệm</b></div>
                                <div class="checkbox"><label><input class="max100" name="tn" id="tn" value="0" onchange="changeNumber1(this.value)"> % </label><p>Tự luận</b></div></div>
                                </div>';
                            }
                            echo '
                            <div class="ui_bt taodethi_taixuong">
                            <label> <input id="number_ch" value="0" name="number" type="text">
                            Chọn số đề thi khác nhau </label>
                            <label for=""><button id="btn-chonlop" class="taodethi">Tạo đề thi</button>
                            <button id="btn-chonlop" class="btn-success">Tải xuống</button></label>
                            </div>
                            <div class="ui_bt">
                            <span id="chuy">Chú ý: Các phần không có TN thì <br>
                            các câu trắc nghiệm tự động đổi thành TL</span>
                            <label> 
                                <button id="btn-chonlop" onclick="clearall()" class="btn-danger">Xóa lựa chọn</button>
                                <button class="btn-hd"><a href="https://docs.google.com/document/d/1TZFlGegjwd9q1fq959rVzlCSo6L4GHJWtUarDuhIeZ4/edit?usp=sharing" target="_blank">Hướng dẫn sử dụng</a></button>
                            </div>
                    </div>
                </div>
            </div>';
            }else{
                echo '<div class="container">
                <i class="ti-menu menubar"></i>
                <i class="ti-cup cup"></i>
                <div class="nav-bar">
                    <h3 class="tenlop btn">Lớp 12A <i class="ti-close dongnav"></i></h3>
                    <div class="avatar"><img width="100%" src="https://i.ibb.co/SKPC0Hk/image.png" alt="avatar"></div>
                    <p class="btn">'; $email = $_SESSION['taikhoan']; username($email); echo' <a id="thoat" href="./?logout">Đăng xuất</a></p>
                    <p class="btn">Giáo viên</p>
                    <p class="btn">Nhóm Zalo</p>
                    <p class="btn">Link gửi bạn bè</p>
                    <a href="../danhsachhs.php" class="btn none_a">Danh sách học sinh</a>
                    <div class="tonghs">
                        <p>Tổng học sinh: </p>
                        <p>'; calc_hs(); echo'</p>
                    </div>
                    <a href="lichhoc.php" class="btn none_a">Lịch học</a>
                    <p class="btn">Nhận bài tập</p>
                    <p class="btn">Nộp bài tập</p>
                    <a href="../bangdiem.php" class="btn none_a">Bảng điểm</a>
                </div>
                <div class="contentAll">
                    <div class="top-content">
                        <div class="top-content-right reward">
                            <select name="" id="">
                                <option value="">Phần thưởng học sinh xuất sắc</option>
                                <option value="">Phần thưởng</option>
                            </select>
                            <select name="" id="">
                                <option value="">Phần thưởng</option>
                                <option value="">Phần thưởng học sinh xuất sắc</option>
                            </select>
                        </div>
                        <button class="btnblue">Chọn</button>
                        <i class="ti-angle-up daylen"></i>
                    </div>
                    <div class="bottom-content">
                        <h3 class="title">Phòng chat chung</h3>
                        <div class="chat">
                            <div class="chatchit" id="chatchit">
                                <div class="chatcn"><img src="https://i.ibb.co/SKPC0Hk/image.png" alt=""><p> Đang ăn cơm bạn ơi!</p></div>
                            </div>
                        </div>
                        <form class="chat-op">
                            <i class="ti-upload uploadfile-btn"></i>
                            <i class="ti-comment ms-btn"></i>
                            <input type="text" id="message" class="inputchat" placeholder="Nhập tin nhắn...">
                            <div class="chatupload">
                                <input type="file" width="100%" class="chatuploadx" name="" id="">
                                <button id="upl">Chọn tệp</button>
                            </div>
                            <button type="submit" class="button-g">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>';
            }
        }else{
            echo 'bạn không có quyền truy cập trang này';
        }
    }

    function tengiaovien($id_hs_email){
        $conn = connect_db();
        $result = mysqli_query($conn, "SELECT * FROM user u INNER JOIN dslop ds ON u.lop = ds.idlop AND ds.admin_lop = 28");
        while($row = $result->fetch_assoc()){
            echo $row['hoten'];
        }
    }

?>