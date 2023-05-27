-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2022 lúc 08:39 AM
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
-- Cơ sở dữ liệu: `duan1-fashion`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(15) NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán trực tiếp\r\n2.Thanh toán chuyển khoản.\r\n3.Thanh toán online',
  `ngaydathang` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tongdonhang` int(10) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới \r\n1.Đang xử lý.\r\n2.Đang giao hàng.\r\n3.Đã giao hàng',
  `username_nhan` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email_nhan` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_nhan` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `full_name`, `username`, `address`, `phone`, `email`, `pttt`, `ngaydathang`, `tongdonhang`, `status`, `username_nhan`, `email_nhan`, `phone_nhan`) VALUES
(160, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0510:pm:pm 05/12/2022', 800000, 0, '', '', ''),
(161, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0522:pm:pm 05/12/2022', 400000, 0, '', '', ''),
(162, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '1035:pm:pm 05/12/2022', 400000, 0, '', '', ''),
(163, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '1131:pm:pm 05/12/2022', 800000, 0, '', '', ''),
(164, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0204:pm:pm 06/12/2022', 800000, 0, '', '', ''),
(165, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0252:pm:pm 06/12/2022', 800000, 0, '', '', ''),
(166, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0353:pm:pm 07/12/2022', 1200000, 0, '', '', ''),
(168, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0355:pm:pm 07/12/2022', 400000, 0, '', '', ''),
(170, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0509:pm:pm 07/12/2022', 1200000, 0, '', '', ''),
(171, 11, 'Đào Minh Ngọc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0528:pm:pm 07/12/2022', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `full_name` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `iduser` int(12) NOT NULL,
  `idsp` int(12) NOT NULL,
  `ngaybinhluan` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(15) NOT NULL,
  `idsp` int(15) NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `namesp` varchar(250) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` float NOT NULL,
  `soluong` int(10) NOT NULL,
  `thanhtien` float NOT NULL,
  `size_product` tinyint(4) NOT NULL,
  `color_product` tinyint(4) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idsp`, `image`, `namesp`, `price`, `soluong`, `thanhtien`, `size_product`, `color_product`, `idbill`) VALUES
(70, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 160),
(71, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 160),
(72, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 4, 3, 161),
(73, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 162),
(74, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 163),
(75, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 163),
(76, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 164),
(77, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 164),
(78, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 165),
(79, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 165),
(80, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 166),
(81, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 166),
(82, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 166),
(83, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 168),
(84, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 2, 1, 170),
(85, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 170),
(86, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 0, 0, 170),
(87, 11, 6, 'aonam1.jpg', 'Áo sơ mi dạ flannel caro vàng', 0, 1, 0, 0, 1, 171),
(88, 11, 6, 'aonam1.jpg', 'Áo sơ mi dạ flannel caro vàng', 0, 1, 0, 0, 1, 171);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `color_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id_color`, `color_name`) VALUES
(1, 'Màu tím'),
(2, 'Màu xanh'),
(3, 'Màu đỏ');

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
  `id_size` int(10) NOT NULL,
  `id_color` int(10) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `image`, `discount`, `price`, `mota_ngan`, `mota_dai`, `date`, `view`, `id_size`, `id_color`, `iddm`) VALUES
(6, 'Áo sơ mi dạ flannel caro vàng', 'aonam1.jpg', 10, 150000, 'Bạn cần 1 chiếc áo sơ mi dạ flannel nhẹ nhàng mặc khoác ngoài chống nắng cho mùa hè này? Áo sơ mi dạ flannel caro vàng AXH-188 sẽ là lựa chọn tuyệt vời. Áo thiết kế trẻ trung hiện đại với form áo rộng, vai áo trễ, ống tay và thân áo dài phù hợp mặc c', '0', '2018-02-22', 0, 1, 1, 17),
(10, 'Áo sơ mi du lịch nam caro cao cấp', 'aonam4.jpg', 0, 400000, 'Áo sơ mi du lịch nam caro cao cấp AXH-146 là mẫu áo sơ mi nam dành cho du lịch, đi chơi mới nhất năm nay. Áo được thiết kế form rộng vô cùng trẻ trung năng động. Sản phẩm được làm từ vải flanel cách nhiệt tốt có khả năng chống nắng dùng để khoác ngoà', '0', '2019-08-18', 0, 1, 1, 17),
(11, 'Áo thun polo đen thể thao 2020', 'aonam8.jpg', 0, 300000, 'Áo thun polo đen thể thao 2020 AXH-169 là mẫu áo thun nam dành cho công sở mới nhất cho mùa hè này. Áo thiết kế kiểu dáng polo thể thao, hơi ôm người gọn gàng với màu đen trơn thanh lịch, rất phù hợp với môi trường công sở. Áo làm từ vải 95% cotton c', '0', '2019-08-22', 0, 1, 1, 17),
(13, 'Áo thun 100% cotton đen 2020', 'aonam6.jpg', 0, 200000, 'Sale -15% \"Áo thun 100% cotton đen 2020\" mã AXH-175. Áo thiết kế vô cùng trẻ trung năng động với màu trắng sáng nổi bật mới nhất cho hè 2020. Áo làm từ vải 100% cotton cao cấp - thoáng mát và bền đẹp.', '0', '2020-02-20', 0, 1, 1, 17),
(14, 'Áo thun nữ cotton hàng hiệu ', 'ao-thun-nam-cotton-hang-hieu-3.jpg', 0, 300000, 'Bạn cần 1 chiếc áo thun nam cao cấp mặc mát mẻ, trẻ trung hiện đại? Áo thun nam cotton hàng hiệu AXH-189 là lựa chọn tuyệt vời cho bạn. Áo thiết kế vô cùng trẻ trung với cổ tròn, vãi trễ và ống tay lỡ hiện đại. Áo có 4 màu xanh, vàng, trắng, đen nổi ', '0', '2020-02-22', 0, 1, 1, 18),
(15, 'Áo thun nữ cotton hàng hiệu', 'ao-thun-nam-cotton-hang-hieu-0.jpg', 0, 250000, 'Bạn cần 1 chiếc áo thun nam nữ cao cấp mặc mát mẻ, trẻ trung hiện đại? Áo thun nam nữ cotton hàng hiệu AXH-189 là lựa chọn tuyệt vời cho bạn. Áo thiết kế vô cùng trẻ trung với cổ tròn, vãi trễ và ống tay lỡ hiện đại. Áo có 4 màu xanh, vàng, trắng, đe', '0', '2023-02-20', 0, 1, 1, 18),
(16, 'Áo nữ có cổ sơ mi dài tay', '7808-ao-nu-co-so-mi-tay-dai-hinh-trai-bo-1.jpg', 0, 300000, 'Áo phong cách thời trang ', '0', '2022-03-22', 0, 1, 1, 18),
(17, 'Áo thun nữ dài tay form rộng', 'AothundaitayParallformrongulzzang-845x738.jpg', 0, 200000, 'Áo thời trang nữ', '0', '2020-05-22', 0, 1, 1, 18),
(18, 'Áo khoác nam nữ', 'aonam2.jpg', 0, 300000, '', '0', '2033-05-22', 0, 1, 1, 19),
(20, 'Áo khoác nam mùa', 'ao-khoac-phao-mua-dong.jpg', 23, 300000, '', '0', '2022-01-22', 0, 0, 0, 19),
(21, 'Áo khoác dạ nữ', '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 10, 400000, 'Mô tả ngắn', 'Mô tả dài', '2022-02-22', 0, 1, 1, 23),
(29, 'áo phong cách mới', '0b8123ce7bd97dbc36dcf181891514b3.jpg', 0, 230000, '', '', '', 0, 0, 0, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `size_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `size_name`) VALUES
(1, 'M'),
(2, 'L'),
(3, 'XL'),
(4, 'XXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `image_user` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `full_name`, `username`, `password`, `email`, `address`, `phone`, `role`, `image_user`) VALUES
(2, 'thắng', 'thang', '1234567', 'vanthang@gmail.com', '', '3984342343', 1, ''),
(11, 'Đào Minh Ngọc', 'ngoc', '1', 'ngoc@gmail.com', 'Hà Nội', '0869827432', 1, '1.jpg'),
(13, 'ngọc', 'ngoc1', '1', 'ngoc@gmail.com', 'Phú thọ', '086928', 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

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
  ADD KEY `idbill` (`idbill`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
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
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
