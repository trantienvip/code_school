<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Làm bài online</title>
    <link rel="stylesheet" href="../asset/css/style-lambai.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="top">
                <img src="https://khaosat.me/assets/images/logo.svg" alt="" class="logo">
                <span>Đăng nhập</span>
                <span>Đăng ký</span>
                <button>Liên hệ</button>
            </div>
            <div class="bottom">
                <div class="bottom-c">
                    <h2 class="t1">Kiểm tra online</h2>
                    <span class="t2">Bài online 30 phút</span>
                    <span class="t3">Không gian lận khi làm bài</span>
                    <button id="lambai">Làm bài</button>
                </div>
                <div class="bottom-c">
                    <img width="100%" height="100%" src="https://khaosat.me/assets/images/home_01.svg" alt="">
                </div>
            </div>
        </header>
        <main class="main">
            <div class="title-big">
                <div class="title">Bắt đầu làm bài online</div>
                <div class="line"></div>
            </div>
            <div class="bai">
                <!-- <div class="check-tl">
                    <div class="form-check-tn">
                        <input class="form-check-input" type="text" name="checktn" placeholder="Nhập vào đáp án của bạn">
                        <input class="form-check-input" type="file" name="checktn" id="flexRadioDefault2">
                    </div>
                </div> -->
                <?php
                    $path = "DE/MA001/CAUHOI/TL/";
                    $files = array_diff(scandir ($path), array ('.', '..')); 
                    foreach ($files as $value) {
                        echo '<img width="100%" height="100%" src="DE/MA001/CAUHOI/TL/'.$value.'" disable>';
                        echo '<div class="check-tl">
                        <input class="form-check-input" type="text" name="checktn" id="flexRadioDefault1">
                        <button id="upfile">Upfile</button>
                    </div>';
                    }
                ?>
                <?php
                    $path = "DE/MA001/CAUHOI/TN/";
                    $files = array_diff(scandir ($path), array ('.', '..')); 
                    $sttr = 1;
                    foreach ($files as $value) {
                        $sttr += 1;
                        echo '<img width="100%" height="100%" src="DE/MA001/CAUHOI/TN/'.$value.'">';
                        echo '<div class="check-tn">
                        <div class="form-check-tn">
                            <input class="form-check-input" type="radio" checked name="checktn'.$sttr.'" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                A
                            </label>
                            </div>
                        <div class="form-check-tn">
                            <input class="form-check-input" type="radio" disabled name="checktn'.$sttr.'" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                B
                            </label>
                        </div>
                        <div class="form-check-tn">
                            <input class="form-check-input" type="radio" name="checktn'.$sttr.'" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                C
                            </label>
                            </div>
                        <div class="form-check-tn">
                            <input class="form-check-input" type="radio" name="checktn'.$sttr.'" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                D
                            </label>
                        </div>
                    </div>';
                    }
                ?>
                <br>
                    <button id="lambai">Nộp bài</button>
                    <br>
            </div>
        </main>
        <div class="footer">
            <p>Copyright 2021 - Trần Tiến</p>
        </div>
    </div>
    <script type="text/javascript">
        function nocontext(e) {
        var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;
        if (clickedTag == "IMG")
        return false;
        }
        document.oncontextmenu = nocontext;
        </script>
        <style>
        img {
        -webkit-user-drag: none;
        user-drag: none;
        -webkit-touch-callout: none;
        }
        </style>
</body>
</html>