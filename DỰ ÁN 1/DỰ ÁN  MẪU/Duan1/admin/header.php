<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protend - Project Management Admin Dashboard HTML Template</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href='../../../unpkg.com/boxicons%402.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="sidebar-expand">
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
                <img src="images/logo.png" alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>

        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li>
                    <a href="index.php">
                        <i class='bx bxs-home'></i>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=adddm">
                        <i class='bx bxs-bolt'></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=addsp">
                        <i class='bx bxs-user'></i>
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="taikhoan.html">
                        <i class='bx bxs-dashboard'></i>
                        <span>Tài khoản</span>
                    </a>
                </li>
                <li>
                    <a href="binhluan.html">
                        <i class='bx bx-calendar'></i>
                        <span>Bình luận</span>
                    </a>
                </li>
                <li>
                    <a href="giohang.html">
                        <i class='bx bxs-message-rounded-detail'></i>
                        <span>Giỏ hành</span>
                    </a>
                </li>
                <li>
                    <a href="thongke.html">
                        <i class='bx bxs-component'></i>
                        <span>Thống kê</span>
                    </a>
                </li>
                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>darkmode</span>
                        </div>
                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>