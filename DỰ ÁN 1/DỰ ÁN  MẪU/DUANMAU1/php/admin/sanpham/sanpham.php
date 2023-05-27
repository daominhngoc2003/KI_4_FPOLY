<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/admin/Sanpham.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100;200;300;500&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
        
</head>
<body>
    <div id="container">

        <header>
            <div class="title">
                <h1>QUẢN Lý HÀNG HÓA</h1>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="../danhmuc/danhmuc.php">Danh mục</a></li>
                <li><a class="active" href="sanpham.php">Sản phẩm</a></li>
                <li><a href="../khachhang/khachhang.php">Khách hàng</a></li>
                <li><a href="../binhluan/binhluan.php">Bình luận</a></li>
            </ul>
        </nav>
        <section>
            <form action="">
                <div class="row">
                    <div>
                        <label for="">Mã hàng hóa</label>
                        <input type="text" placeholder="auto number">
                    </div>
                    <div>
                        <label for="">Tên hàng hóa</label>
                        <input type="text">
                    </div>
                    <div>
                        <label for="">Đơn giá</label>
                        <input type="text" >
                    </div>
                    <div>
                        <label for="">Giảm giá</label>
                        <input type="text" >
                    </div>
                    <div>
                        <label for="">Hình ảnh</label>
                        <input type="file">
                    </div>
                    <div>
                        <label for="">Loại hàng</label> <br>
                        <select name="" id="" class="select">
                            <option value="">Quần nam</option>
                            <option value="">Quần nữ</option>
                        </select>
                    </div>
                    <div class="radio">
                        <label for="">hàng đặc biệt?</label> 
                        <div class="con-radio">
                            <div><input type="radio" name="radio" checked></div> <p> Đặc biệt </p>
                            <div><input type="radio" name="radio" checked></div> <p>Bình thường</p>
                        </div>
                    </div>
                    <div>
                        <label for="">Ngày nhập</label>
                        <input type="date">
                    </div>
                    <div>
                        <label for="">số lượt xem</label>
                        <input type="text" placeholder="0">
                    </div>
                    <div class="mota" aria-colspan="2">
                        <label for="">Mô tả</label> <br>
                        <textarea name="" id="" cols="161" rows="10"></textarea>
                    </div>
                    <div class="btn">
                    <a href="">THÊM MỚI</a>
                    <a href="">NHẬP LẠI</a>
                    <a href="list.php">DANH SÁCH</a>
                </div>
                </div>
            </form>
        </section>
        