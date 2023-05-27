-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2022 lúc 09:16 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shirt_fs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_tell` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bill_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bill_ptttt` tinyint(1) NOT NULL DEFAULT 1,
  `total` double(100,3) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0,
  `receive_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receive_tell` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydathang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iduser` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double(100,3) NOT NULL DEFAULT 0.000,
  `soluong` int(10) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(17, 'áo nam'),
(18, 'áo nữ'),
(19, 'Áo mùa đông'),
(20, 'Áo mùa hè'),
(23, 'Áo trẻ con');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `role`) VALUES
(0, 'quản trị'),
(1, 'người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `discount` float NOT NULL,
  `price` float NOT NULL,
  `mota_ngan` varchar(250) NOT NULL,
  `mota_dai` varchar(255) NOT NULL,
  `date` varchar(250) NOT NULL,
  `view` int(10) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `image`, `discount`, `price`, `mota_ngan`, `mota_dai`, `date`, `view`, `iddm`) VALUES
(6, 'Áo sơ mi dạ flannel caro vàng', 'aonam1.jpg', 0, 0, 'Bạn cần 1 chiếc áo sơ mi dạ flannel nhẹ nhàng mặc khoác ngoài chống nắng cho mùa hè này? Áo sơ mi dạ flannel caro vàng AXH-188 sẽ là lựa chọn tuyệt vời. Áo thiết kế trẻ trung hiện đại với form áo rộng, vai áo trễ, ống tay và thân áo dài phù hợp mặc c', '0', '2018-02-22', 0, 17),
(10, 'Áo sơ mi du lịch nam caro cao cấp', 'aonam4.jpg', 0, 0, 'Áo sơ mi du lịch nam caro cao cấp AXH-146 là mẫu áo sơ mi nam dành cho du lịch, đi chơi mới nhất năm nay. Áo được thiết kế form rộng vô cùng trẻ trung năng động. Sản phẩm được làm từ vải flanel cách nhiệt tốt có khả năng chống nắng dùng để khoác ngoà', '0', '2019-08-18', 0, 17),
(11, 'Áo thun polo đen thể thao 2020', 'aonam8.jpg', 0, 0, 'Áo thun polo đen thể thao 2020 AXH-169 là mẫu áo thun nam dành cho công sở mới nhất cho mùa hè này. Áo thiết kế kiểu dáng polo thể thao, hơi ôm người gọn gàng với màu đen trơn thanh lịch, rất phù hợp với môi trường công sở. Áo làm từ vải 95% cotton c', '0', '2019-08-22', 0, 17),
(13, 'Áo thun 100% cotton đen 2020', 'aonam6.jpg', 0, 0, 'Sale -15% \"Áo thun 100% cotton đen 2020\" mã AXH-175. Áo thiết kế vô cùng trẻ trung năng động với màu trắng sáng nổi bật mới nhất cho hè 2020. Áo làm từ vải 100% cotton cao cấp - thoáng mát và bền đẹp.', '0', '2020-02-20', 0, 17),
(14, 'Áo thun nữ cotton hàng hiệu ', 'ao-thun-nam-cotton-hang-hieu-3.jpg', 0, 0, 'Bạn cần 1 chiếc áo thun nam cao cấp mặc mát mẻ, trẻ trung hiện đại? Áo thun nam cotton hàng hiệu AXH-189 là lựa chọn tuyệt vời cho bạn. Áo thiết kế vô cùng trẻ trung với cổ tròn, vãi trễ và ống tay lỡ hiện đại. Áo có 4 màu xanh, vàng, trắng, đen nổi ', '0', '2020-02-22', 0, 18),
(15, 'Áo thun nữ cotton hàng hiệu', 'ao-thun-nam-cotton-hang-hieu-0.jpg', 0, 0, 'Bạn cần 1 chiếc áo thun nam nữ cao cấp mặc mát mẻ, trẻ trung hiện đại? Áo thun nam nữ cotton hàng hiệu AXH-189 là lựa chọn tuyệt vời cho bạn. Áo thiết kế vô cùng trẻ trung với cổ tròn, vãi trễ và ống tay lỡ hiện đại. Áo có 4 màu xanh, vàng, trắng, đe', '0', '2023-02-20', 0, 18),
(16, 'Áo nữ có cổ sơ mi dài tay', '7808-ao-nu-co-so-mi-tay-dai-hinh-trai-bo-1.jpg', 0, 0, 'Áo phong cách thời trang ', '0', '2022-03-22', 0, 18),
(17, 'Áo thun nữ dài tay form rộng', 'AothundaitayParallformrongulzzang-845x738.jpg', 0, 0, 'Áo thời trang nữ', '0', '2020-05-22', 0, 18),
(18, 'Áo khoác nam nữ', 'aonam2.jpg', 0, 0, '', '0', '2033-05-22', 0, 19),
(20, 'Áo khoác nam mùa', 'ao-khoac-phao-mua-dong.jpg', 23, 300000, '', '0', '2022-01-22', 0, 19),
(21, 'Áo khoác dạ nữ', '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 20, 400000, 'Mô tả ngắn', 'Mô tả dài', '2022-02-22', 0, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `username`, `password`, `email`, `phone`, `role`) VALUES
(1, 'Văn Thắng', 'admin', 'Thangtm9', 'thangnvph20126@fpt.edu.vn', '0326146202', 1),
(2, 'thắng', 'thang', '1234567', 'vanthang@gmail.com', '3984342343', 1),
(3, 'ewrwer', 'admin3', '12345t', 'asdweoihsdn@gmail.com', '93243434', 0),
(4, 'ngọc', 'admin3', '1234t', 'vanthang@gmail.com', '3243534432', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart_taikhoan` (`iduser`),
  ADD KEY `lk_cart_sanpham` (`idpro`),
  ADD KEY `lk_cart_bill` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_3` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `size`
--
ALTER TABLE `size`
  ADD CONSTRAINT `size_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`role`) REFERENCES `phanquyen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
