-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2022 lúc 01:37 PM
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
(129, 11, 'ngoc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0856:am:am 02/12/2022', 400000, 0, '', '', ''),
(130, 11, 'ngoc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '0944:am:am 02/12/2022', 400000, 0, '', '', ''),
(131, 11, 'ngoc', 'ngoc', 'Hà Nội', '0869827432', 'ngoc@gmail.com', 3, '1018:am:am 02/12/2022', 800000, 0, '', '', '');

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

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `username`, `full_name`, `content`, `iduser`, `idsp`, `ngaybinhluan`) VALUES
(17, 'ngoc', 'Đào Minh Ngọc', 'nga', 11, 21, '09:21:34am 03/12/2022'),
(18, 'ngoc', 'Ngọc', 'kém', 11, 21, '11:27:49am 03/12/2022');

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
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idsp`, `image`, `namesp`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(40, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 129),
(41, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 130),
(42, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 131),
(43, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 131),
(44, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 132),
(45, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 132),
(46, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 133),
(47, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 134),
(48, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 136),
(49, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 137),
(50, 11, 41, 'Túi sách nữ đeo chéo giá rẻ', 'Túi sách nữ đeo chéo giá rẻ.jpg', 200000, 200000, 0, 138),
(51, 11, 17, 'AothundaitayParallformrongulzzang-845x738.jpg', 'Áo thun nữ dài tay form rộng', 0, 1, 0, 139),
(52, 11, 20, 'ao-khoac-phao-mua-dong.jpg', 'Áo khoác nam mùa', 300000, 1, 300000, 140),
(53, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 141),
(54, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 148),
(55, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 148),
(56, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 148),
(57, 11, 21, '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 'Áo khoác dạ nữ', 400000, 1, 400000, 148),
(58, 1, 17, 'AothundaitayParallformrongulzzang-845x738.jpg', 'Áo thun nữ dài tay form rộng', 0, 1, 0, 149);

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
  `size_sp` varchar(30) NOT NULL,
  `color_product` varchar(30) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `image`, `discount`, `price`, `mota_ngan`, `mota_dai`, `date`, `view`, `size_sp`, `color_product`, `iddm`) VALUES
(6, 'Áo sơ mi dạ flannel caro vàng', 'aonam1.jpg', 0, 0, 'Bạn cần 1 chiếc áo sơ mi dạ flannel nhẹ nhàng mặc khoác ngoài chống nắng cho mùa hè này? Áo sơ mi dạ flannel caro vàng AXH-188 sẽ là lựa chọn tuyệt vời. Áo thiết kế trẻ trung hiện đại với form áo rộng, vai áo trễ, ống tay và thân áo dài phù hợp mặc c', '0', '2018-02-22', 0, '', '', 17),
(10, 'Áo sơ mi du lịch nam caro cao cấp', 'aonam4.jpg', 0, 0, 'Áo sơ mi du lịch nam caro cao cấp AXH-146 là mẫu áo sơ mi nam dành cho du lịch, đi chơi mới nhất năm nay. Áo được thiết kế form rộng vô cùng trẻ trung năng động. Sản phẩm được làm từ vải flanel cách nhiệt tốt có khả năng chống nắng dùng để khoác ngoà', '0', '2019-08-18', 0, '', '', 17),
(11, 'Áo thun polo đen thể thao 2020', 'aonam8.jpg', 0, 0, 'Áo thun polo đen thể thao 2020 AXH-169 là mẫu áo thun nam dành cho công sở mới nhất cho mùa hè này. Áo thiết kế kiểu dáng polo thể thao, hơi ôm người gọn gàng với màu đen trơn thanh lịch, rất phù hợp với môi trường công sở. Áo làm từ vải 95% cotton c', '0', '2019-08-22', 0, '', '', 17),
(13, 'Áo thun 100% cotton đen 2020', 'aonam6.jpg', 0, 0, 'Sale -15% \"Áo thun 100% cotton đen 2020\" mã AXH-175. Áo thiết kế vô cùng trẻ trung năng động với màu trắng sáng nổi bật mới nhất cho hè 2020. Áo làm từ vải 100% cotton cao cấp - thoáng mát và bền đẹp.', '0', '2020-02-20', 0, '', '', 17),
(14, 'Áo thun nữ cotton hàng hiệu ', 'ao-thun-nam-cotton-hang-hieu-3.jpg', 0, 0, 'Bạn cần 1 chiếc áo thun nam cao cấp mặc mát mẻ, trẻ trung hiện đại? Áo thun nam cotton hàng hiệu AXH-189 là lựa chọn tuyệt vời cho bạn. Áo thiết kế vô cùng trẻ trung với cổ tròn, vãi trễ và ống tay lỡ hiện đại. Áo có 4 màu xanh, vàng, trắng, đen nổi ', '0', '2020-02-22', 0, '', '', 18),
(15, 'Áo thun nữ cotton hàng hiệu', 'ao-thun-nam-cotton-hang-hieu-0.jpg', 0, 0, 'Bạn cần 1 chiếc áo thun nam nữ cao cấp mặc mát mẻ, trẻ trung hiện đại? Áo thun nam nữ cotton hàng hiệu AXH-189 là lựa chọn tuyệt vời cho bạn. Áo thiết kế vô cùng trẻ trung với cổ tròn, vãi trễ và ống tay lỡ hiện đại. Áo có 4 màu xanh, vàng, trắng, đe', '0', '2023-02-20', 0, '', '', 18),
(16, 'Áo nữ có cổ sơ mi dài tay', '7808-ao-nu-co-so-mi-tay-dai-hinh-trai-bo-1.jpg', 0, 0, 'Áo phong cách thời trang ', '0', '2022-03-22', 0, '', '', 18),
(17, 'Áo thun nữ dài tay form rộng', 'AothundaitayParallformrongulzzang-845x738.jpg', 0, 0, 'Áo thời trang nữ', '0', '2020-05-22', 0, '', '', 18),
(18, 'Áo khoác nam nữ', 'aonam2.jpg', 0, 0, '', '0', '2033-05-22', 0, '', '', 19),
(20, 'Áo khoác nam mùa', 'ao-khoac-phao-mua-dong.jpg', 23, 300000, '', '0', '2022-01-22', 0, '', '', 19),
(21, 'Áo khoác dạ nữ', '48807-ao-khoac-da-nu-hinh-chu-gau-mua-dong-1.jpg', 20, 400000, 'Mô tả ngắn', 'Mô tả dài', '2022-02-22', 0, '', '', 23);

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
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
