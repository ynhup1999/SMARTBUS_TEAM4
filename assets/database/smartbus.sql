-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2019 lúc 04:47 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `smartbus`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `iddiem` int(11) NOT NULL,
  `tendiem` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sotuyen` int(11) DEFAULT NULL,
  `thutu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`iddiem`, `tendiem`, `sotuyen`, `thutu`) VALUES
(1, '1-First', 1, 0),
(2, '1-Last', 1, 1),
(3, '1-Mid', 1, 2),
(4, '2-First', 2, 0),
(5, '2-Last', 2, 1),
(6, '2-Mid', 2, 2),
(7, '3-First', 3, 0),
(8, '3-Last', 3, 1),
(9, '3-Mid', 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `soxe` int(11) DEFAULT NULL,
  `diem_batdau` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `diem_ketthuc` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sotien` int(11) DEFAULT NULL,
  `ngaydat` date DEFAULT NULL,
  `tinhtrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `iduser`, `soxe`, `diem_batdau`, `diem_ketthuc`, `sotien`, `ngaydat`, `tinhtrang`) VALUES
(1, 1, 1, '1-First', '1-Last', 1, '2019-12-15', 1),
(2, 1, 1, '1-First', '1-Last', 1, '2019-12-15', 1),
(3, 1, 2, '2-First', '2-Last', 1, '2019-12-15', 1),
(4, 1, 2, '2-First', '2-Last', 1, '2019-12-15', 1),
(5, 1, 2, '2-First', '2-Last', 1, '2019-12-15', 1),
(6, 3, 3, '3-First', '3-Last', 1, '2019-12-15', 1),
(7, 1, 1, '1-First', '1-Mid', 1, '2019-12-15', 1),
(8, 1, 1, '1-First', '1-Last', 1, '2019-12-15', 1),
(9, 1, 1, '1-First', '1-Last', 1, '2019-12-15', 1),
(10, 1, 1, '1-First', '1-Last', 1, '2019-12-15', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `moneycard`
--

CREATE TABLE `moneycard` (
  `iduser` int(11) DEFAULT NULL,
  `idcard` int(10) NOT NULL,
  `dateuse` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `moneycard`
--

INSERT INTO `moneycard` (`iduser`, `idcard`, `dateuse`, `price`) VALUES
(-1, 2147483647, '2019-12-15', 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `iduser` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password` varchar(25) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`iduser`, `username`, `password`, `stt`) VALUES
(1, 'user1', '1', 0),
(2, 'user2', '2', 0),
(3, 'user3', '3', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `iduser` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sotien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`iduser`, `name`, `sotien`) VALUES
(1, 'Naruto', 991000),
(2, 'Sasuke', 30000),
(3, 'Ricardo', 27000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyen`
--

CREATE TABLE `tuyen` (
  `sotuyen` int(11) NOT NULL,
  `soxe` int(11) DEFAULT NULL,
  `giatien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyen`
--

INSERT INTO `tuyen` (`sotuyen`, `soxe`, `giatien`) VALUES
(1, 1, 2000),
(2, 2, 2000),
(3, 3, 3000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `soxe` int(11) NOT NULL,
  `tentaixe` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `soghe` int(11) DEFAULT NULL,
  `tinhtrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`soxe`, `tentaixe`, `soghe`, `tinhtrang`) VALUES
(1, 'Garena', 10, -1),
(2, 'VTC', 10, 0),
(3, 'VNG', 10, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`iddiem`),
  ADD KEY `sotuyen` (`sotuyen`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `soxe` (`soxe`);

--
-- Chỉ mục cho bảng `moneycard`
--
ALTER TABLE `moneycard`
  ADD PRIMARY KEY (`idcard`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`iduser`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`iduser`);

--
-- Chỉ mục cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  ADD PRIMARY KEY (`sotuyen`),
  ADD KEY `soxe` (`soxe`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`soxe`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`sotuyen`) REFERENCES `tuyen` (`sotuyen`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`iduser`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`soxe`) REFERENCES `xe` (`soxe`);

--
-- Các ràng buộc cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD CONSTRAINT `thongtin_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`iduser`);

--
-- Các ràng buộc cho bảng `tuyen`
--
ALTER TABLE `tuyen`
  ADD CONSTRAINT `tuyen_ibfk_1` FOREIGN KEY (`soxe`) REFERENCES `xe` (`soxe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
