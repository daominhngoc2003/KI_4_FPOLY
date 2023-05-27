<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/admin/khachhang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100;200;300;500&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
        
</head>
<body>
    <div id="container">

        <header>
            <div class="title">
                <h1>QUẢN LÝ KHÁCH HÀNG</h1>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="../danhmuc/danhmuc.php">Danh mục</a></li>
                <li><a href="../sanpham/sanpham.php">Sản phẩm</a></li>
                <li><a  class="active" href="khachhang.php">Khách hàng</a></li>
                <li><a href="../binhluan/binhluan.php">Bình luận</a></li>
            </ul>
        </nav>
        <section>
            <form action="">
                <div class="row">
                    <div>
                        <label for="">Mã khách hàng</label>
                        <input type="text" placeholder="auto number">
                    </div>
                    <div>
                        <label for="">Họ và tên</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Mật khẩu</label>
                        <input type="text" >
                    </div>
                    <div>
                        <label for="">xác nhận mật khẩu</label>
                        <input type="text" >
                    </div>
                    <div>
                        <label for="">Hình ảnh</label>
                        <input type="file">
                    </div>
                    <div>
                        <label for="">địa chỉ Email</label>
                        <input type="text">
                    </div>
                    
                    <div class="radio">
                        <label for="">Kích hoạt</label> 
                        <div class="con-radio">
                            <div><input type="radio" name="radio" checked></div> <p> Chưa kích hoạt </p>
                            <div><input type="radio" name="radio" checked></div> <p>Kích hoạt</p>
                        </div>
                    </div>
                    <div class="radio1">
                        <label for="">vai trò</label> 
                        <div class="con-radio">
                            <div><input type="radio" name="radio1" checked></div> <p> Khách hàng </p>
                            <div><input type="radio" name="radio1" checked></div> <p>Nhân viên</p>
                        </div>
                    </div>
                    <div class="btn">
                    <a href="">THÊM MỚI</a>
                    <a href="">NHẬP LẠI</a>
                    <a href="">DANH SÁCH</a>
                </div>
                </div>
            </form>
        </section>