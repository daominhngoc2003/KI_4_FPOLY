<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/admin/List-khachang.css">
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
                <li><a class="active" href="khachhang.php">Khách hàng</a></li>
                <li><a href="../binhluan/binhluan.php">Bình luận</a></li>
            </ul>
        </nav>
        <section>
            <form action="">
                <table>
                    <tr class="border-b title">
                        <td class="a"></td>
                        <td class="b">MÃ KH</td>
                        <td class="c">HỌ VÀ TÊN</td>
                        <td class="d">ĐỊA CHỈ EMAIL</td>
                        <td class="e">HÌNH ẢNH</td>
                        <td class="f">VAI TRÒ</td>
                        <td class="g"></td>
                    </tr>
                    <tr class="border-b">
                        <td class="a1"><input type="checkbox"></td>
                        <td class="b1">PH2054</td>
                        <td class="c1">ĐÀO MINH NGỌC</td>
                        <td class="d1">ngoc@gmail.com</td>
                        <td class="e1">ngoc.jpg</td>
                        <td class="f1">Khách hàng</td>
                        <td class="g1">
                            <a href="">Sửa</a>
                            <a href="">Xóa</a>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="a1"><input type="checkbox"></td>
                        <td class="b1">PH20545</td>
                        <td class="c1">CHU TUẤN PHƯƠNG</td>
                        <td class="d1">phuong@gmail.com</td>
                        <td class="e1">phuong.jpg</td>
                        <td class="f1">Khách hàng</td>
                        <td class="g1">
                            <a href="">Sửa</a>
                            <a href="">Xóa</a>
                        </td>
                    </tr>

                </table>
                <div class="btn">
                    <a href="">Chọn tất cả</a>
                    <a href="">Bỏ chọn tất cả</a>
                    <a href="">Xóa các mục chọn</a>
                    <a href="">Nhập thêm</a>
                </div>
            </form>
        </section>