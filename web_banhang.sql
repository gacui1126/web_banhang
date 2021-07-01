-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 01, 2021 lúc 12:03 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin-son', '25d55ad283aa400af464c76d713c07ad', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(24, 11, '1258', 1),
(25, 11, '9293', 1),
(26, 15, '9203', 1),
(27, 17, '1534', 1),
(28, 17, '6069', 1),
(29, 17, '9922', 1),
(30, 17, '6135', 1),
(31, 17, '7314', 1),
(32, 28, '2646', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, '360', 32, 1),
(2, '360', 29, 2),
(3, '360', 30, 0),
(4, '4607', 32, 1),
(5, '4607', 29, 2),
(6, '4607', 30, 1),
(7, '6778', 32, 1),
(8, '6778', 29, 2),
(9, '6778', 30, 1),
(10, '2437', 29, 1),
(11, '2753', 30, 1),
(12, '2753', 29, 1),
(13, '9000', 29, 2),
(14, '637', 29, 4),
(15, '7694', 39, 8),
(16, '7694', 29, 1),
(17, '2155', 39, 1),
(18, '8105', 30, 1),
(19, '1258', 30, 1),
(20, '9293', 37, 3),
(21, '9293', 39, 1),
(22, '9203', 29, 3),
(23, '9203', 30, 1),
(24, '1534', 30, 1),
(25, '1534', 29, 1),
(26, '9922', 30, 4),
(27, '9922', 36, 2),
(28, '6135', 30, 11),
(29, '2646', 29, 1),
(30, '2646', 36, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `password`, `dienthoai`) VALUES
(28, 'Phạm Thị Hoàng Vi', 'vitc@gmail.com', '0338513531', '4297f44b13955235245b2497399d7a93', '0338513531');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(43, 'Apple', 1),
(44, 'Xiaomi', 2),
(45, 'Nokia', 3),
(46, 'Samsung', 4),
(47, 'LG', 5),
(48, 'Oppo', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensp`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(29, 'iphone 13 pro max 512gb', '011', '50000000', 10, '1619587163_iphone-12-pro-family-hero.jpeg', 'iphone 13 pro max', 'iphone 13 pro max', 1, 43),
(30, 'iphone 12 pro max 512gb', '012', '50000000', 10, '1619588231_iphone-12-pro-family-hero.jpeg', 'iphone 13 pro max', 'iphone 13 pro max', 1, 43),
(32, 'xiaomi mi 11 pro', '012', '20000000', 100, '1619589322_xiaomi-mi-11-pro.jpeg', 'ádasd', 'ádasd', 1, 44),
(33, 'nokia', 'nk8', '3500000', 40, '1619602301_nokia 8.3.jpeg', 'zcsc', 'csdc', 1, 45),
(34, 'iphone 13 pro max 256gb', 'a', '40000000', 11, '1619603802_iphone-12-pro-family-hero.jpeg', 'ád', 'ád', 1, 43),
(35, 'Oppo A93 2020', 'OA2020', '4000000', 20, '1619611561_oppo a93 2020.jpeg', 'Oppo A93 2020', 'Oppo A93 2020', 1, 48),
(36, 'Samsung a50', 'ssa50', '1000000', 30, '1619611682_samsunga50.jpeg', 'samsung a50', 'samsung a50', 1, 46),
(37, 'iphone 7 plus', 'ip7p', '6000000', 40, '1619862885_iphone7plus.jpeg', 'iphone 7 plus 32gb', 'iphone 7 plus 32gb', 1, 43),
(38, 'iphone 8 plus 64gb', 'ip8p', '7000000', 40, '1619862994_iphone 8 plus.jpeg', 'iphone 8 plus 64gb', 'iphone 8 plus 64gb', 1, 43),
(39, 'Oppo f7 256 gb', 'of7', '8000000', 40, '1619960578_oppof7.jpeg', 'Oppo f7', 'Oppo f7', 1, 48);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
