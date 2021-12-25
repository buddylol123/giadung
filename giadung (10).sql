-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2021 lúc 07:44 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giadung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `diachi` int(11) NOT NULL,
  `ngaysinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `hinh`, `phone`, `diachi`, `ngaysinh`) VALUES
(5, 'thành Lọi', 'a@gmail.com', '$2y$10$SSjuAITX.OgltzEKeTeFcO7fdquJgGQ4qDEJUKJ54n5PcMGE5EAdu', '', 12345, 123, '2021-11-25'),
(6, 'thành lợi', 'thanhloi123@gmail.com', '$2y$10$hDvDWCk0V1bEIcWZ9o1tVu0V6owda8LUvqRYxtt7Z56Tb/U04NfIe', 'jpg13.jpg', 1287445875, 13, '2021-06-26'),
(8, 'thành lợi', 'b@gmail.com', '$2y$10$hDvDWCk0V1bEIcWZ9o1tVu0V6owda8LUvqRYxtt7Z56Tb/U04NfIe', '', 127798, 13, '2021-11-19'),
(9, 'thành lợi', 'c@gmail.com', '$2y$10$/jz/M/sisgIDFUEFk2DNGeSoQqZrVFIE.1S8OfkVU3yW7ri1ZQmsO', '', 123, 123, '2021-11-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `id` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `masp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `mausac` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdh`
--

INSERT INTO `chitietdh` (`id`, `madh`, `masp`, `soluong`, `gia`, `mausac`) VALUES
(118, 158, 'sp22', 2, 500000, 'Đen'),
(119, 159, 'sp22', 1, 500000, 'trắng'),
(120, 160, 'sp22', 11, 500000, 'Đen'),
(121, 161, 'sp09', 1, 1500000, 'Đen'),
(122, 161, 'sp06', 1, 380000, 'Đen'),
(123, 162, 'sp22', 1, 400000, 'Đen'),
(124, 163, 'sp22', 1, 400000, 'Đen'),
(125, 164, 'sp22', 1, 400000, 'Đen'),
(126, 165, 'sp22', 1, 400000, 'trắng'),
(127, 165, 'sp22', 1, 400000, 'Đen'),
(128, 166, 'sp22', 1, 400000, 'Đen'),
(129, 166, 'sp09', 1, 1500000, 'Đen'),
(130, 167, 'sp22', 1, 400000, 'Đen'),
(131, 167, 'sp22', 1, 400000, 'trắng'),
(132, 168, 'sp09', 1, 1500000, 'Đen'),
(133, 168, 'sp22', 1, 400000, 'Đen'),
(134, 169, 'sp22', 1, 400000, 'Đen'),
(135, 169, 'sp09', 1, 1500000, 'Đen'),
(136, 170, 'sp22', 1, 400000, 'trắng'),
(137, 171, 'sp22', 1, 400000, 'trắng'),
(138, 172, 'sp22', 1, 400000, 'trắng'),
(139, 173, 'sp22', 1, 400000, 'Đen'),
(140, 173, 'sp22', 1, 400000, 'trắng'),
(141, 174, 'sp09', 1, 1500000, 'Đen'),
(142, 174, 'sp20', 1, 100000, 'Đen'),
(143, 175, 'sp09', 1, 1500000, 'Đen'),
(144, 175, 'sp20', 1, 100000, 'Đen'),
(145, 176, 'sp09', 1, 1500000, 'Đen'),
(146, 176, 'sp20', 1, 100000, 'Đen'),
(147, 177, 'sp09', 1, 1500000, 'Đen'),
(148, 177, 'sp20', 1, 100000, 'Đen'),
(149, 178, 'sp20', 1, 100000, 'Đen'),
(150, 178, 'sp22', 1, 400000, 'Đen'),
(151, 179, 'sp20', 1, 100000, 'Đen'),
(152, 179, 'sp22', 1, 400000, 'trắng'),
(153, 180, 'sp20', 1, 100000, 'Đen'),
(154, 180, 'sp04', 1, 140000, 'Đen'),
(155, 181, 'sp20', 2, 100000, 'Đen'),
(156, 181, 'sp22', 1, 400000, 'trắng'),
(157, 182, 'sp20', 1, 70000, 'Đen'),
(158, 183, 'sp07', 1, 280000, 'Anh kim'),
(159, 184, 'sp07', 1, 280000, 'Anh kim');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkm`
--

CREATE TABLE `chitietkm` (
  `id` int(11) NOT NULL,
  `masp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `makm` int(11) NOT NULL,
  `giagiam` int(11) NOT NULL,
  `giachuagiam` int(11) NOT NULL,
  `phantramkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietkm`
--

INSERT INTO `chitietkm` (`id`, `masp`, `makm`, `giagiam`, `giachuagiam`, `phantramkm`) VALUES
(41, 'sp02', 14, 472000, 590000, 0),
(57, 'sp22', 19, 400000, 500000, 0),
(59, 'sp10', 13, 245000, 490000, 50),
(60, 'sp02', 13, 472000, 590000, 20),
(61, 'sp23', 15, 100000, 200000, 50),
(62, 'sp01', 12, 1045000, 1900000, 45),
(63, 'sp01', 23, 950000, 1900000, 50),
(64, 'sp20', 23, 70000, 100000, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `mactsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `khoiluong` varchar(200) CHARACTER SET utf8 NOT NULL,
  `kichthuoc` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mausac` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`mactsp`, `masp`, `khoiluong`, `kichthuoc`, `mota`, `mausac`, `soluongsp`) VALUES
('1', 'sp01', '220kg', '10inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 100),
('10', 'sp06', '1', '1', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 20),
('11', 'sp08', '2', '2', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'xanh', 1),
('12', 'sp09', '3', '3', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 0),
('13', 'sp10', '4', '4', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'hồng', 0),
('14', 'sp11', '5', '5', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 0),
('15', 'sp12', '3kg', '5inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'đỏ', 0),
('16', 'sp23', 'ád', 'ád', 'ád', 'de', 0),
('17', 'sp20', '22kg', '10inch', 'San pham nhap khau', 'Đen', 10),
('18', 'sp22', '20kg', '10cm', 'Sản phẩm cao cấp', 'Cam', 50),
('2', 'sp22', '10kg', '20kg', 'sản phẩm 2.0', 'Đen', 26),
('4', 'sp22', '20kg', '6inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'trắng', 0),
('5', 'sp07', '20kg', '5inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Anh kim', 99),
('6', 'sp02', '300kg', '7inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 0),
('7', 'sp03', '500kg', '9inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 100),
('8', 'sp04', '170kg', '9inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 99),
('9', 'sp05', '190kg', '11inch', 'Công nghệ Rapid Air giảm đến 80% lượng chất béo\r\nLòng nồi hợp kim nhôm chống dính siêu bền, dễ vệ sinh\r\nĐiều khiển dễ dàng bằng núm xoay cơ đơn giản\r\nTự ngắt khi quá nhiệt đảm bảo an toàn tối đa người dùng\r\nChất liệu vỏ nồi nhựa PP cao cấp cách nhiệt tốt\r\nThiết kế nhỏ gọn, không chiếm nhiều diện tích', 'Đen', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `mabinhluan` int(255) NOT NULL,
  `mactdh` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `ngaydanhgia` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `idnv` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`mabinhluan`, `mactdh`, `ten`, `noidung`, `ngaydanhgia`, `trangthai`, `parent_id`, `idnv`) VALUES
(63, 142, 'thành lợi', 'Hàng đẹp', '2021-12-25 14:22:49', 'Hiện', 0, NULL),
(64, 142, 'thành lợi', 'Cảm ơn đã ủng hộ', '2021-12-25 14:03:10', 'Hiện', 63, 9),
(65, 142, 'thành lợi', 'ok', '2021-12-25 14:25:18', 'Hiện', 0, NULL),
(66, 158, 'thành lợi', 'ok', '2021-12-25 14:27:46', 'Hiện', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sodienthoai` varchar(10) NOT NULL,
  `ghichu` varchar(255) DEFAULT NULL,
  `trangthai` varchar(250) NOT NULL,
  `tongtien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `makh`, `tenkh`, `diachi`, `ngaydathang`, `sodienthoai`, `ghichu`, `trangthai`, `tongtien`) VALUES
(158, 13, 'thành lợi', '123/123 p3', '2021-12-22 06:38:11', '917239144', NULL, 'Đã giao', '1,000,000.00'),
(159, 13, 'thành lợi', '123/123 p3', '2021-12-22 06:49:40', '917239144', NULL, 'Đã giao', '500,000.00'),
(160, 13, 'thành lợi', '123/123 p3', '2021-12-24 07:30:01', '917239144', 'ok', 'Đã giao', '5,500,000.00'),
(161, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:20:47', '917239144', 'giao nhanh', 'Hủy đơn', '1,880,000.00'),
(162, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:21:54', '917239144', 'asad', 'Hủy đơn', '400,000.00'),
(163, 13, 'thành lợi', '123/123 p3', '2021-12-23 07:42:54', '917239144', NULL, 'Đang Vận Chuyển', '400,000.00'),
(164, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:37:09', '917239144', 'as', 'Hủy đơn', '400,000.00'),
(165, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:36:54', '917239144', 'ok', 'Hủy đơn', '800,000.00'),
(166, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:47:33', '917239144', NULL, 'Hủy đơn', '1,900,000.00'),
(167, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:49:11', '917239144', NULL, 'Hủy đơn', '800,000.00'),
(168, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:50:09', '917239144', NULL, 'Hủy đơn', '1,900,000.00'),
(169, 13, 'thành lợi', '123/123 p3', '2021-12-23 06:51:54', '917239144', NULL, 'Hủy đơn', '1,900,000.00'),
(170, 13, 'thành lợi', '123/123 p3', '2021-12-23 10:58:01', '917239144', NULL, 'Đã giao', '400,000.00'),
(171, 13, 'thành lợi', '123/123 p3', '2021-12-23 10:50:06', '917239144', NULL, 'Đã giao', '400,000.00'),
(172, 13, 'thành lợi', '123/123 p3', '2021-12-23 07:19:53', '917239144', NULL, 'Đã giao', '400,000.00'),
(173, 13, 'thành lợi', '123/123 p3', '2021-12-23 07:07:01', '917239144', 'ok', 'Hủy đơn', '800,000.00'),
(174, 13, 'thành lợi', '123/123 p3', '2021-12-24 07:04:52', '917239144', 'ok', 'Đã giao', '1,600,000.00'),
(175, 13, 'thành lợi', '123/123 p3', '2021-12-24 07:07:30', '917239144', NULL, 'Đã giao', '1,600,000.00'),
(176, 13, 'thành lợi', '123/123 p3', '2021-12-24 07:11:13', '917239144', NULL, 'Đã giao', '1,600,000.00'),
(177, 13, 'thành lợi', '123/123 p3', '2021-12-24 07:16:11', '917239144', NULL, 'Đã giao', '1,600,000.00'),
(178, 13, 'thành lợi', '123/123 p3', '2021-12-24 07:21:20', '917239144', NULL, 'Đã giao', '500,000.00'),
(179, 14, 'Ngọc Nhung', '132 q5', '2021-12-24 07:35:17', '0917249241', NULL, 'Đã giao', '500,000.00'),
(180, 15, 'Nguyễn Thái Thanh', '123/13', '2021-12-24 07:37:55', '0917239144', 'Giao lúc 10h', 'Đã giao', '240,000.00'),
(181, 15, 'Nguyễn Thái Thanh', '123/13', '2021-12-24 07:42:12', '0917239144', 'giao lúc 7h', 'Đã giao', '600,000.00'),
(182, 13, 'thành lợi', '123/123 p3', '2021-12-25 14:10:55', '917239144', 'giao nhanh', 'Đang chờ xử lý', '70,000.00'),
(183, 13, 'thành lợi', '123/123 p3', '2021-12-25 14:27:44', '917239144', 'ok', 'Đã giao', '280,000.00'),
(184, 13, 'thành lợi', '123/123 p3', '2021-12-25 16:26:27', '0917239144', 'kjghi', 'Hủy đơn', '280,000.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `mahinh` int(11) NOT NULL,
  `tenhinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mactsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`mahinh`, `tenhinh`, `hinh`, `mactsp`, `status`) VALUES
(1, 'noi khong dau mau trang', 'noimautrangtruoc.jpg', '4', '1'),
(2, 'noi khong dau mau trang xoay ben trai', '10043022-noi-chien-khong-dau-philips-hd-9216-trai.jpg', '4', ''),
(3, 'noi khong dau xoay ben phai', '10043022-noi-chien-khong-dau-philips-hd-9216-phai.jpg', '4', ''),
(4, 'bep dien tu mat truoc', 'image-2.jpg', '6', '1'),
(5, 'bep dien tu mat duoi', 'matduoi-images.jpg', '6', ''),
(6, 'bep dien tu mat sau', 'xemdangsau-bep-dien-tu-kangaroo.jpg', '6', ''),
(7, 'bep gas sakura mat truoc', 'image-3.jpg', '7', '1'),
(8, 'bep gas sakura mat giua', 'matgiua-bep-gas-sakura-sa690nk-1.jpg', '7', ''),
(9, 'bep gas sakura mat duoi', 'matduoi-bep-gas-sakura-sa690nk-3.jpg', '7', ''),
(10, 'binh dun nuoc mat trai', 'image-4.jpg', '8', '1'),
(11, 'binh dun nuoc mat giua', 'matgiua-binh-dun-sieu-toc-sunhouse-1-5l-shd1057-2.jpg', '8', ''),
(12, 'binh dun nuoc mat sau', 'matsau-binh-dun-sieu-toc-sunhouse-1-5l-shd1057-4.jpg', '8', ''),
(13, 'noi com dien mat truoc', 'image-11.jpg', '9', '1'),
(14, 'noi com dien mat trai', 'mattrai-noi-com-dien-philips-0-7l-hd3060-2.jpg', '9', '1'),
(15, 'noi com dien bat nap', 'batnap-noi-com-dien-philips-0-7l-hd3060-3.jpg', '9', ''),
(16, 'bep gas sunhouse', 'image-22.jpg', '10', '1'),
(17, 'bep gas sunhouse mat trai', 'mattrai-bep-gas-don-sunhouse-shb212kg-2-org.jpg', '10', ''),
(18, 'bep gas sunhouse mat phai', 'matphai-bep-gas-don-sunhouse-shb212kg-3-org.jpg', '10', ''),
(19, 'am dun tra daewoo', 'image-44.jpg', '11', '1'),
(20, 'am dun tra daewoo mat truoc', '1.jpg', '11', ''),
(21, 'am dun tra daewoo mat sau', '2.jpg', '11', ''),
(22, 'noi com dien supor', 'image-111.jpg', '12', '1'),
(23, 'noi com dien supor mat giua', 'matgiua-noi-com-dien-supor-1-5l-cfxb40fc33vn-75-2.jpg', '12', ''),
(24, 'noi com dien supor mat phai', 'matphai-noi-com-dien-supor-1-5l-cfxb40fc33vn-75-3.jpg', '12', ''),
(25, 'bep gas sunhouse', 'image-222.jpg', '13', '1'),
(26, 'bep gas sunhouse quay trai', 'quaytrai-bep-gas-sunhouse-shb204mt-2.jpg', '13', ''),
(27, 'bep gas sunhouse quay sau', 'quaysau-bep-gas-sunhouse-shb204mt-3.jpg', '13', ''),
(28, 'bo 3 boi inox duxton', 'image-333.jpg', '14', '1'),
(29, 'bo 3 boi inox duxton quay phai', 'quayphai-bo-3-noi-inox-duxton-dg-03md-2_cn7o-ou.jpg', '14', ''),
(30, 'bo 3 boi inox duxton quay sau', 'quaysau-bo-3-noi-inox-duxton-dg-03md-3_1m6u-e0.jpg', '14', ''),
(31, 'binh dun nuoc passonic', 'image-444.jpg', '15', '1'),
(32, 'binh dun nuoc passonic mat giua', 'matgiua-binh-dun-nuoc-dien-panasonic-1-6l-nc-sk1rra-3.jpg', '15', ''),
(33, 'binh dun nuoc passonic mat phai', 'matphai-binh-dun-nuoc-dien-panasonic-1-6l-nc-sk1rra-2.jpg', '15', ''),
(34, 'coi com tosiba', 'image-1.jpg', '1', '1'),
(35, 'coi com tosiba mat trai', 'mattrai-noi-com-dien-1-8-lit-toshiba-rc-18nmfvn-wt-1_swn6-r0.jpg', '1', ''),
(36, 'coi com tosiba mat phai', 'matphai-noi-com-dien-1-8-lit-toshiba-rc-18nmfvn-wt-2_d8xe-8g.jpg', '1', ''),
(37, 'Bo 3 noi inox Fivestar', 'image-33.jpg', '5', '1'),
(38, 'Bo 3 noi inox Fivestar mat duoi', 'matduoi-image-33.jpg', '5', ''),
(39, 'Bo 3 noi inox Fivestar mat cat', 'matcat-image-33.jpg', '5', ''),
(40, 'Hình mặt 360', 'png48.png', '1', '1'),
(41, 'hình đen', 'png75.png', '2', '1'),
(45, 'bàn ủi', 'jpg28.jpg', '17', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `email`, `password`, `phone`, `diachi`, `token`) VALUES
(1, 'thành lợi', 'thanhloi123@gmail.com', '$2y$10$CNab1sJD3Ht3n4lOmBEV7.OJDcKAbrKWuhZYjH2mEdTDUaR/fL2P6', '123', '123/123 da nam', NULL),
(2, 'Trần Văn A', 'a_quick123@yahoo.com.vn', '$2y$10$1DqHsyQPyumesCkD1kW/DuQ4T7tiw/eqVcMDYxaCboMeBPSg0olqa', '917239146', '163/15 Dạ Nam', NULL),
(6, 'thành lợi', 'b@gmail.com', '$2y$10$80XJ5OMas8LhvtVgfk6a2.flQPHSEoE6iBT36EQLWvP7fpFdrHu0e', '0917239145', '119/32/23', NULL),
(8, 'thành lợi', 'c@gmail.com', '12345678910', '917239146', '123/123 p3', NULL),
(9, 'thành lợi', 'd@gmail.com', '12345678910', '1287445875', '123/123 p3', NULL),
(10, 'Than Sang', 'x@gmail.com', '1', '917239146', '123/123 p3', NULL),
(11, 'Nguyên', 'minhnguyen020699@gmail.com', '$2y$10$wZcxcefLE5yLXcB1v8T3tea64yZt1XDncKFsnbCGr4nSHb6GmRUpS', '917239143', '123/13 dạ nam', NULL),
(12, 'nguyên', 'tl@gmail.com', '12345678910', '917239143', '163/15 Dạ Nam', NULL),
(13, 'thành lợi', 'dh51705268@student.stu.edu.vn', '$2y$10$VYbJFMj8ebgymznKubfDE.1v4S8uDqyQnPriAmUjrlDC3t61cUmhm', '0917239144', '123/123 p3', 'qX6Yu3SwWnyIi8rgPKfG'),
(14, 'Ngọc Nhung', 'ngocnhung012015@gmail.com', '$2y$10$9037nHLU4sjGC6gsH0L48OPa9T.Ym2URL3JIVsN78ote6tL/9yZ9O', '0917249241', '132 q5', NULL),
(15, 'Nguyễn Thái Thanh', 'dh51704135@student.stu.edu.vn', '$2y$10$l0TZaEqQsMjvULfNYx0PnuggGNfvlNf7pR3sP1pv6tcRDBb9CTjkG', '0917239144', '123/13', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyemai`
--

CREATE TABLE `khuyemai` (
  `makm` int(11) NOT NULL,
  `tenkhuyenmai` varchar(100) NOT NULL,
  `ngaybd` datetime NOT NULL,
  `ngaykt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyemai`
--

INSERT INTO `khuyemai` (`makm`, `tenkhuyenmai`, `ngaybd`, `ngaykt`) VALUES
(12, '30-31', '2021-12-30 11:24:00', '2021-12-31 11:24:00'),
(13, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(14, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(15, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(16, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(17, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(18, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(19, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(20, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(21, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(22, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00'),
(23, '29-30', '2021-12-27 11:24:00', '2021-12-30 11:24:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` varchar(10) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `slug_loaisp` varchar(255) NOT NULL,
  `category_parent` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`, `slug_loaisp`, `category_parent`) VALUES
('bd', 'Bếp điện', 'bep-dien', 'gdnb'),
('bdn', 'Bình đun nước', 'binh-dun-nuoc', 'gdnb'),
('bg', 'Bếp gas', 'bep-gas', 'ggnb'),
('bu', 'Bàn ủi', 'ban-ui', 'tbgd'),
('ddgd', 'Đồ dùng gia đình', 'do-dung-gia-dinh', '0'),
('gdnb', 'Gia dụng nhà bếp', 'gia-dung-nha-bep', '0'),
('lal', 'Lock And Lock', 'lock-and-lock', 'gdnb'),
('ld', 'Làm đẹp', 'lam-dep', '0'),
('mst', 'Máy sấy tóc', 'may-say-toc', 'ld'),
('ncd', 'Nồi cơm điện', 'noi-com-dien', 'gdnb'),
('tbgd', 'Thiết bị gia đình', 'thiet-bi-gia-dinh', '0'),
('vm', 'Vợt muỗi', 'vot-muoi', 'ddgd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_11_105121_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\User', 5),
(2, 'App\\User', 9),
(3, 'App\\User', 6),
(4, 'App\\User', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasx`
--

CREATE TABLE `nhasx` (
  `mansx` varchar(5) NOT NULL,
  `tennsx` varchar(20) NOT NULL,
  `xuatxu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhasx`
--

INSERT INTO `nhasx` (`mansx`, `tennsx`, `xuatxu`) VALUES
('dt', 'Duxton', 'Japan'),
('psn', 'Panasonic', 'Japan'),
('sh', 'SunHouse', 'y'),
('skr', 'Sakura', 'Japan'),
('tsb', 'Toshiba', 'china');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'nhanvien', 'web', '2021-11-11 05:14:12', '2021-11-11 05:14:12'),
(3, 'quanly', 'web', '2021-11-11 05:15:14', '2021-11-11 05:15:14'),
(4, 'admin', 'web', '2021-11-11 05:15:43', '2021-11-11 05:15:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(50) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `maloai` varchar(10) NOT NULL,
  `mansx` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `hinh`, `maloai`, `mansx`) VALUES
('sp01', 'Nồi cơm điện Toshiba 1.8 Lít RC-18NMFVN(WT)', 1900000, 'image-1.jpg', 'ncd', 'tsb'),
('sp02', 'Bếp điện từ Kangaroo KG420I', 590000, 'image-2.jpg', 'bd', 'skr'),
('sp03', 'Bếp gas Sakura SA-690NK', 620000, 'image-3.jpg', 'bg', 'skr'),
('sp04', 'Bình đun siêu tốc Sunhouse 1.5 lít SHD1057', 140000, 'image-4.jpg', 'bdn', 'sh'),
('sp05', 'Nồi cơm điện Philips 0.7 lít HD3060', 1590000, 'image-11.jpg', 'ncd', 'skr'),
('sp06', 'BẾP GAS SUNHOUSE SHB212KG', 380000, 'image-22.jpg', 'bg', 'sh'),
('sp07', 'Bộ 3 nồi inox Fivestar FS06S12', 280000, 'jpg14.jpg', 'ncd', 'dt'),
('sp08', 'Ấm đun trà Daewoo 1.8 lít DEK-MA980', 750000, 'image-44.jpg', 'bdn', 'dt'),
('sp09', 'Nồi cơm điện Supor 1.5 lít CFXB40FC33VN-75', 1500000, 'image-111.jpg', 'ncd', 'dt'),
('sp10', 'Bếp gas Sunhouse SHB204MT', 490000, 'image-222.jpg', 'bg', 'sh'),
('sp11', 'Bộ 3 nồi inox Duxton DG-03MD', 300000, 'image-333.jpg', 'ncd', 'dt'),
('sp12', 'BÌNH ĐUN NƯỚC ĐIỆN PANASONIC NC-SK1RRA', 1290000, 'image-444.jpg', 'bdn', 'psn'),
('sp20', 'Ban ui', 100000, 'DATN_2021_NguyenThanhLoi_ThaiChauThanh (1).pdf', 'bu', 'dt'),
('sp22', 'nồi chiên không dầu', 500000, 'noimautrangtruoc.jpg', 'ncd', 'dt'),
('sp23', 'Sản phẩm a', 200000, 'loi.png', 'vm', 'dt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh` (`madh`),
  ADD KEY `fk_sp` (`masp`);

--
-- Chỉ mục cho bảng `chitietkm`
--
ALTER TABLE `chitietkm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ctkm_sp` (`masp`),
  ADD KEY `fk_km_sp` (`makm`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`mactsp`),
  ADD KEY `fk_sp_chitietsp` (`masp`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`mabinhluan`),
  ADD KEY `fk_danhgia_chitietdh` (`mactdh`),
  ADD KEY `fk_danhgia_nv` (`idnv`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `fk_dh_kh` (`makh`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`mahinh`),
  ADD KEY `fk_sp_hinh` (`mactsp`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyemai`
--
ALTER TABLE `khuyemai`
  ADD PRIMARY KEY (`makm`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `nhasx`
--
ALTER TABLE `nhasx`
  ADD PRIMARY KEY (`mansx`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_sp_nsx` (`mansx`),
  ADD KEY `fk_sp_loaisp` (`maloai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT cho bảng `chitietkm`
--
ALTER TABLE `chitietkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `mabinhluan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `mahinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khuyemai`
--
ALTER TABLE `khuyemai`
  MODIFY `makm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `fk_dh` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`),
  ADD CONSTRAINT `fk_sp` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `chitietkm`
--
ALTER TABLE `chitietkm`
  ADD CONSTRAINT `fk_ctkm_sp` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `fk_km_sp` FOREIGN KEY (`makm`) REFERENCES `khuyemai` (`makm`);

--
-- Các ràng buộc cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD CONSTRAINT `fk_sp_chitietsp` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `fk_danhgia_chitietdh` FOREIGN KEY (`mactdh`) REFERENCES `chitietdh` (`id`),
  ADD CONSTRAINT `fk_danhgia_nv` FOREIGN KEY (`idnv`) REFERENCES `admin` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_dh_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fk_ctsp_hinhanh` FOREIGN KEY (`mactsp`) REFERENCES `chitietsp` (`mactsp`);

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `model_id` FOREIGN KEY (`model_id`) REFERENCES `admin` (`id`);

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_loaisp` FOREIGN KEY (`maloai`) REFERENCES `loaisanpham` (`maloai`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sp_nsx` FOREIGN KEY (`mansx`) REFERENCES `nhasx` (`mansx`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
