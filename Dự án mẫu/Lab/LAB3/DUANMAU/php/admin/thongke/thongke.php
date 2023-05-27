<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/admin/Thongke.css">
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
                <li><a href="../khachhang/khachhang.php">Khách hàng</a></li>
                <li><a href="../binhluan/binhluan.php">Bình luận</a></li>
                <li><a  class="active" href="thongke.php">Thống kê</a></li>
            </ul>
        </nav>
        <section>
            <form action="../index.php?act=addsp">
                <table>
                    <tr class="border-b title">
                        <td class="a">LOẠI HÀNG</td>
                        <td class="b">SỐ LƯỢNG</td>
                        <td class="c">GIÁ CAO NHẤT</td>
                        <td class="d">GIÁ THẤP NHẤT</td>
                        <td class="e">GIÁ TRUNG BÌNH</td>
                    </tr>
                    <tr class="border-b">
                        <td class="a1">Quần</td>
                        <td class="b1">13</td>
                        <td class="c1">$4.50</td>
                        <td class="d1">$4.40</td>
                        <td class="e1">$4.45</td>
                    </tr>
                    <tr class="border-b">
                        <td class="a1">PH20545</td>
                        <td class="b1">CHU TUẤN PHƯƠNG</td>
                        <td class="c1">phuong@gmail.com</td>
                        <td class="d1">phuong.jpg</td>
                        <td class="e1">Khách hàng</td>
                    </tr>
                    
                
                </table>
                <div class="btn">
                    <a href="">Xem biểu đồ</a>
                </div>
            </form>
        </section>