-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 25, 2021 lúc 05:55 AM
-- Phiên bản máy phục vụ: 10.3.29-MariaDB-log-cll-lve
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `topdatmcgmcom_00`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `automomo`
--

CREATE TABLE `automomo` (
  `id` bigint(20) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `sotien` bigint(200) NOT NULL,
  `time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` bigint(20) NOT NULL,
  `baiviet` varchar(1000) NOT NULL,
  `nguoidang` varchar(1000) NOT NULL,
  `noidung` varchar(1000) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` bigint(20) NOT NULL,
  `ten` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`, `mota`, `thumbnail`) VALUES
(2, 'SHOP BÁN ACC FREE FIRE ', 'SHOP BÁN ACC FREE FIRE', 'https://i.upanh.org/2021/06/09/image63c74d0fef4aed39.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc1`
--

CREATE TABLE `danhmuc1` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachcode`
--

CREATE TABLE `danhsachcode` (
  `id` bigint(20) NOT NULL,
  `id_danhmuc` bigint(20) NOT NULL,
  `ten` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` bigint(20) NOT NULL,
  `demo` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachcode`
--

INSERT INTO `danhsachcode` (`id`, `id_danhmuc`, `ten`, `mota`, `thumbnail`, `gia`, `demo`) VALUES
(1, 2, 'SHOP BÁN ACC FREE FIRE 1', 'Tham Khảo Demo,Chỉ Được Đặt Với Đuôi .Tk', 'https://i.imgur.com/Ef3O026_d.webp?maxwidth=640&shape=thumb&fidelity=medium', 149000, 'shopducxathu.tk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachcode1`
--

CREATE TABLE `danhsachcode1` (
  `id` bigint(20) NOT NULL,
  `id_danhmuc` bigint(20) NOT NULL,
  `ten` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` bigint(20) NOT NULL,
  `demo` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `download` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giahan_web`
--

CREATE TABLE `giahan_web` (
  `id` bigint(20) NOT NULL,
  `domain` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `giahan` bigint(20) NOT NULL,
  `trangthai` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoatdong`
--

CREATE TABLE `hoatdong` (
  `id` bigint(20) NOT NULL,
  `taikhoan` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `hoatdong` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `time` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoatdong`
--

INSERT INTO `hoatdong` (`id`, `taikhoan`, `hoatdong`, `time`) VALUES
(1, 'AUTOFB15', 'Đăng Ký Thành Công!', '25/06/2021 - 17:17:49'),
(2, 'DatCoderCode', 'Tạo Web Thành Công: ', '25/06/2021 - 18:50:34'),
(3, 'nickgamevn', 'Đăng Ký Thành Công!', '25/06/2021 - 19:49:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsu_muasourcecode`
--

CREATE TABLE `lichsu_muasourcecode` (
  `id` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `id_code` bigint(20) NOT NULL,
  `time` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id` bigint(20) NOT NULL,
  `magiamgia` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `phantram_giamgia` bigint(20) NOT NULL,
  `loai` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `luotdung` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muamien`
--

CREATE TABLE `muamien` (
  `id` bigint(20) NOT NULL,
  `uid` varchar(10000) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `mien` varchar(100) NOT NULL,
  `hsd` varchar(1000) NOT NULL,
  `ns1` varchar(1000) NOT NULL,
  `ns2` varchar(1000) NOT NULL,
  `thanhtoan` varchar(1000) NOT NULL,
  `time` varchar(100) NOT NULL,
  `trangthai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `muamien`
--

INSERT INTO `muamien` (`id`, `uid`, `ten`, `mien`, `hsd`, `ns1`, `ns2`, `thanhtoan`, `time`, `trangthai`) VALUES
(1, '233', 'taoshopnhanh', '.net', '1624621834', 'sjnsnsns', 'fjnfiddndj', '1', '25/06/2021 - 18:50:34', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `napthe`
--

CREATE TABLE `napthe` (
  `id` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `loaithe` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `menhgia` bigint(20) NOT NULL,
  `serial` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `mathe` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` bigint(20) NOT NULL,
  `time` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `napthe`
--

INSERT INTO `napthe` (`id`, `uid`, `loaithe`, `menhgia`, `serial`, `mathe`, `trangthai`, `time`) VALUES
(1, 233, 'VIETTEL', 20000, '10005555555555', '555555555522222', 0, '25/06/2021 - 19:12:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ruttien`
--

CREATE TABLE `ruttien` (
  `id` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `thanhtoan` varchar(100) NOT NULL,
  `sotaikhoan` varchar(100) NOT NULL,
  `sotien` varchar(100) NOT NULL,
  `trangthai` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taoweb`
--

CREATE TABLE `taoweb` (
  `id` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `domain` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `id_code` bigint(20) NOT NULL,
  `gia` bigint(20) NOT NULL,
  `time1` bigint(20) NOT NULL,
  `time2` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `thanhtoan` bigint(20) NOT NULL,
  `taikhoanadmin` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhauadmin` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `id` bigint(20) NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `admin` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `banner` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `banner2` varchar(1000) NOT NULL,
  `facebook` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `zalo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` varchar(1000) NOT NULL,
  `logo` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `danhmuc1` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `danhmuc2` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `danhmuc3` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`id`, `title`, `noidung`, `admin`, `banner`, `banner2`, `facebook`, `zalo`, `sdt`, `logo`, `danhmuc1`, `danhmuc2`, `danhmuc3`) VALUES
(1, 'Dịch Vụ Thiết Kế Website Hàng Đầu VN', 'Chuyên thiết kế website Bán Acc Game, chuẩn SEO, chuyên nghiệp, tích hợp công nghệ CHỐNG CLICK TẶC ADWORD ✅. Đội ngũ hỗ trợ nhiệt tình nhất', 'Nguyễn Tấn Đạt', 'https://hoangvanlinh.vn//assets/img/slide2.jpg?v2', 'https://hoangvanlinh.vn/assets/img/slide1.jpg?v1', 'https://facebook.com/DatCoderCode', 'https://zalo.me/0779817989', '0918037752', 'https://i.upanh.org/2021/06/25/cooltext387429309553733fbdede762f445d5c.png', '/images/taotrangweb.png', '/images/thumbnail-sourcecode.f316729f.svg', 'https://i.upanh.org/2021/05/25/thumbnail-mien.d3285a9d.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsr`
--

CREATE TABLE `tsr` (
  `id` bigint(20) NOT NULL,
  `username` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `transid` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `amount` bigint(20) NOT NULL,
  `time` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `taikhoan` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `tien` bigint(20) NOT NULL,
  `chucvu` bigint(20) NOT NULL,
  `email` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `avatar` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `time` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `band` int(11) NOT NULL,
  `reset_pass_code` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `reset_pass_expire` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `taikhoan`, `matkhau`, `tien`, `chucvu`, `email`, `avatar`, `time`, `band`, `reset_pass_code`, `reset_pass_expire`) VALUES
(233, 'DatCoderCode', 'jhjjjj\r\n', 105000, 9, 'dattg28@gmail.com', '/public/images/avatar.png', '25/06/2021 - 14:41:14', 0, '', ''),
(234, 'AUTOFB15', 'AUTOFB15', 0, 1, 'atfb@gmail.com', '/public/images/avatar.png', '25/06/2021 - 17:17:49', 0, '', ''),
(235, 'nickgamevn', '0944596738', 0, 6, 'tranquocbao12349h@gmail.com', '/public/images/avatar.png', '25/06/2021 - 19:49:18', 0, '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `automomo`
--
ALTER TABLE `automomo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc1`
--
ALTER TABLE `danhmuc1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhsachcode`
--
ALTER TABLE `danhsachcode`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhsachcode1`
--
ALTER TABLE `danhsachcode1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giahan_web`
--
ALTER TABLE `giahan_web`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichsu_muasourcecode`
--
ALTER TABLE `lichsu_muasourcecode`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `muamien`
--
ALTER TABLE `muamien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `napthe`
--
ALTER TABLE `napthe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ruttien`
--
ALTER TABLE `ruttien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taoweb`
--
ALTER TABLE `taoweb`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsr`
--
ALTER TABLE `tsr`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `automomo`
--
ALTER TABLE `automomo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhmuc1`
--
ALTER TABLE `danhmuc1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhsachcode`
--
ALTER TABLE `danhsachcode`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhsachcode1`
--
ALTER TABLE `danhsachcode1`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giahan_web`
--
ALTER TABLE `giahan_web`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lichsu_muasourcecode`
--
ALTER TABLE `lichsu_muasourcecode`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `muamien`
--
ALTER TABLE `muamien`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `napthe`
--
ALTER TABLE `napthe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ruttien`
--
ALTER TABLE `ruttien`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taoweb`
--
ALTER TABLE `taoweb`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tsr`
--
ALTER TABLE `tsr`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
