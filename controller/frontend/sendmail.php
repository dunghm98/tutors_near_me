<?php
    //goi thu vien
    include('class.smtp.php');
    include "class.phpmailer.php"; 
    include "function.php"; 

    if(isset($_POST["submit"])){
            $hoten = $_POST['hoten'];
            $email = $_POST['email'];
            $topic = $_POST['topic'];
            $noidung = $_POST['noidung'];
            $content = '
                <h2>Thông tin Gia Sư</h2>
                <p>Họ tên:'.$hoten.' </p>
                <p>Email:'.$email.' </p>
                <p>Chủ đề dạy:'.$topic.' </p>
                <p>Nội dung:'.$noidung.' </p>
            ';
        };

    $title = 'Thông tin Gia Sư';
    $nTo = 'Olala';
    $mTo = 'dungmanh998@gmail.com';
    $diachicc = '';
    //test gui mail
    $mail = sendMail($title, $content, $nTo, $mTo,$diachicc);
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php if($mail==1): ?>
    <div class=" text-center  alert alert-success" role="alert">
      Đăng kí của bạn đã được gửi đi đang chờ xử lý,, hãy kiểm tra email để đợi thông báo của chúng tôi. Xin cảm ơn ^^ !
    </div>
    <?php endif ?>
    <?php if($mail==0): ?>
    <div class="text-center alert alert-danger">
        Opps. Thư của bạn chưa gửi được rồi, hãy quay lại sau ít phút nhé hic!
    </div>
    <?php endif ?>
    <button type="button" class="center-block btn btn-info"><a href="index.php">Quay về trang chủ</a></button>
</body>
</html>