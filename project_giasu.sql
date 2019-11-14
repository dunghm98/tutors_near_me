-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2018 lúc 11:22 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_giasu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_address`
--

CREATE TABLE `tbl_address` (
  `pk_address_id` int(11) NOT NULL,
  `c_city` varchar(200) NOT NULL,
  `c_desc_city` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_address`
--

INSERT INTO `tbl_address` (`pk_address_id`, `c_city`, `c_desc_city`) VALUES
(1, 'Hà Nội', 'SỐ 20 Ngõ 69 Trần DUy Hưng'),
(2, 'Hải Phòng', 'SỐ 20'),
(3, 'Đà Nẵng', ''),
(4, 'Huế', ''),
(5, 'TP HCM', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_class`
--

CREATE TABLE `tbl_class` (
  `pk_class_id` int(10) NOT NULL,
  `fk_subject_id` int(10) NOT NULL,
  `fk_user_id` int(10) NOT NULL,
  `fk_level_id` int(10) NOT NULL,
  `c_fee` int(200) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  `fk_address_id` int(10) NOT NULL,
  `c_schedule` varchar(200) NOT NULL,
  `c_desc` varchar(200) NOT NULL,
  `c_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_class`
--

INSERT INTO `tbl_class` (`pk_class_id`, `fk_subject_id`, `fk_user_id`, `fk_level_id`, `c_fee`, `c_phone`, `fk_address_id`, `c_schedule`, `c_desc`, `c_content`) VALUES
(1, 6, 1, 3, 150000, '901766120', 1, 'Thứ 7', 'Gia sư Hóa 11 Hải An, Hải Phòng', 'Cần giáo viên có kinh nghiệm sư phạm và về tâm lý hs dạy kèm hs nữ lớp 11, chủ yếu'),
(2, 2, 2, 2, 200000, '123456789', 2, '8', 'Cần tìm gia sư tiếng Pháp cho người đi làm tại quận Long Biên', 'VIP Tìm nữ gia sư Tiếng Anh cho hs lớp 2 ở Hà Đông\r\nLớp GS Vip (học thử 2 buổi, miễn phí nhận lớp) Tìm gia sư nữ cho bé trai học lớp 2. Bé đang học trường song ngữ. Thời gian từ 5h30-7h30. Học 2 buổi/tuần'),
(3, 10, 3, 2, 160000, '125896512', 1, 'Thứ 5', 'Tìm gia sư Tiếng Hàn cho học sinh lớp 6 quân Tây Hồ', 'Cần giáo viên có kinh nghiệm sư phạm và về tâm lý hs dạy kèm hs nữ lớp 4,địa điểm Tân mỹ, Tân phú, quận 7'),
(4, 1, 3, 4, 180000, '123456789', 2, 'thứ 4', 'Tìm gia sư dạy toán', 'Có nhiều tài liệu, bộ đề luyện thi đh và lên kế hoạch luyện thi cụ thể đoàng hoàng Biết cách bấm máy, những kinh nghiệm làm bài nhanh khi thi đh Sv nữ chuyên toán tại em hay tìm...'),
(24, 3, 1, 1, 160000, '125896512', 1, '', 'Tìm gia sư Văn', 'Cần giáo viên có kinh nghiệm sư phạm và về tâm lý hs dạy kèm hs nữ lớp 4, chủ yếu toán và tiếng việt, địa điểm Tân mỹ, Tân phú, quận 7																'),
(28, 2, 1, 3, 150000, '0123568974', 5, '', 'Gia sư tiếng anh luyện phát âm ', 'cần tìm gia sư tiếng anh luyện phát âm tại Thanh Khê, Đà nẵng								'),
(29, 16, 12, 4, 200000, '0987458352', 3, '', 'Tìm gia sư đẹp trai', 'hello');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_level`
--

CREATE TABLE `tbl_level` (
  `pk_level_id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_level`
--

INSERT INTO `tbl_level` (`pk_level_id`, `c_name`) VALUES
(1, 'Tiểu Học'),
(2, 'Trung Học Cơ Sở'),
(3, 'THPT'),
(4, 'Đại học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `pk_post_id` int(10) NOT NULL,
  `c_desc` varchar(200) NOT NULL,
  `c_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `pk_subject_id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `fk_topic_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_subject`
--

INSERT INTO `tbl_subject` (`pk_subject_id`, `c_name`, `fk_topic_id`) VALUES
(1, 'Toán', 1),
(2, 'Tiếng Anh', 4),
(3, 'Văn học', 7),
(4, 'Lập Trình C', 2),
(5, 'Lý', 1),
(6, 'Hóa', 1),
(7, 'Lịch Sử', 7),
(8, 'Địa Lý', 7),
(9, 'Tiếng Nhật', 4),
(10, 'Tiếng Hàn', 4),
(11, 'Thiết Kế Đồ Họa', 6),
(12, 'Nấu Ăn', 6),
(13, 'Thanh Nhạc', 5),
(14, 'Piano-Guitar', 5),
(15, 'Vẽ ', 3),
(16, 'Múa', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_topic`
--

CREATE TABLE `tbl_topic` (
  `pk_topic_id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_topic`
--

INSERT INTO `tbl_topic` (`pk_topic_id`, `c_name`) VALUES
(1, 'Khoa Học Tự Nhiên'),
(2, 'Khoa Học Máy Tính'),
(3, 'Nghệ Thuật'),
(4, 'Ngoại Ngữ'),
(5, 'Âm nhạc'),
(6, 'Kĩ năng'),
(7, 'Khoa Học Xã Hội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tutor`
--

CREATE TABLE `tbl_tutor` (
  `pk_tutor_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_schedule` text NOT NULL,
  `fk_subject_id` int(10) NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `c_intro` text NOT NULL,
  `c_fee` int(100) NOT NULL,
  `c_img` varchar(50) NOT NULL,
  `fk_post_id` int(10) NOT NULL,
  `fk_address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_tutor`
--

INSERT INTO `tbl_tutor` (`pk_tutor_id`, `c_name`, `c_schedule`, `fk_subject_id`, `c_type`, `c_intro`, `c_fee`, `c_img`, `fk_post_id`, `fk_address_id`) VALUES
(1, 'Hoàng Mạnh Dũng', 'Thứ 6', 1, 'Sinh viên', 'Sinh viên năm 3 ĐH CN', 200000, 'public/1.jpg', 0, 1),
(2, 'Nguyễn Thu Phương', 'Thứ 2', 3, 'Sinh viên', 'Sinh viên năm 2 đại học công nghiệp.', 150000, 'public/3.png', 0, 2),
(3, 'BÙi Bích Phương', '', 2, 'Giáo viên', 'Giảng viên múa tại đại học Thăng Long', 120000, 'public/3.jpg', 0, 1),
(4, 'Hà Trung Hiếu', '', 4, 'Giáo viên', 'Giáo viên âm nhạc tại sp nghệ thuật trung ương', 180000, 'public/2.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_email` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_fullname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_email`, `c_password`, `c_fullname`) VALUES
(1, 'admin@mail.com', '202cb962ac59075b964b07152d234b70', 'Mạnh Dũng'),
(2, 'admin1@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn B'),
(3, 'admin2@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn C'),
(4, 'admin3@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn D'),
(5, 'admin4@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn E@'),
(12, 'dungmanh998@gmail.com', '73bb89788c57b41390e1ee82f748e745', 'Hoàng Mạnh Dũng'),
(13, 'mad123@gmail.com', '202cb962ac59075b964b07152d234b70', 'ALOALO'),
(14, 'mad123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Lục Thần Ca'),
(18, 'phuongcute@gmail.com', '73bb89788c57b41390e1ee82f748e745', 'Nguyễn Thu Phương');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`pk_address_id`);

--
-- Chỉ mục cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`pk_class_id`),
  ADD KEY `fk_address_id` (`fk_address_id`),
  ADD KEY `fk_level_id` (`fk_level_id`),
  ADD KEY `fk_subject_id` (`fk_subject_id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Chỉ mục cho bảng `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`pk_level_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`pk_post_id`);

--
-- Chỉ mục cho bảng `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`pk_subject_id`),
  ADD KEY `fk_topic_id` (`fk_topic_id`);

--
-- Chỉ mục cho bảng `tbl_topic`
--
ALTER TABLE `tbl_topic`
  ADD PRIMARY KEY (`pk_topic_id`);

--
-- Chỉ mục cho bảng `tbl_tutor`
--
ALTER TABLE `tbl_tutor`
  ADD PRIMARY KEY (`pk_tutor_id`),
  ADD KEY `fk_subject_id` (`fk_subject_id`),
  ADD KEY `fk_post_id` (`fk_post_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `pk_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `pk_class_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `pk_level_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `pk_post_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `pk_subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_topic`
--
ALTER TABLE `tbl_topic`
  MODIFY `pk_topic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_tutor`
--
ALTER TABLE `tbl_tutor`
  MODIFY `pk_tutor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD CONSTRAINT `tbl_class_ibfk_1` FOREIGN KEY (`fk_address_id`) REFERENCES `tbl_address` (`pk_address_id`),
  ADD CONSTRAINT `tbl_class_ibfk_2` FOREIGN KEY (`fk_level_id`) REFERENCES `tbl_level` (`pk_level_id`),
  ADD CONSTRAINT `tbl_class_ibfk_3` FOREIGN KEY (`fk_subject_id`) REFERENCES `tbl_subject` (`pk_subject_id`),
  ADD CONSTRAINT `tbl_class_ibfk_4` FOREIGN KEY (`fk_user_id`) REFERENCES `tbl_user` (`pk_user_id`);

--
-- Các ràng buộc cho bảng `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD CONSTRAINT `tbl_subject_ibfk_1` FOREIGN KEY (`fk_topic_id`) REFERENCES `tbl_topic` (`pk_topic_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
