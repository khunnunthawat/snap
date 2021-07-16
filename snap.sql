-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2020 at 06:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`) VALUES
(1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `Photographers`
--

CREATE TABLE `Photographers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Starting_wage` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Highest_wage` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `work_hour` int(11) NOT NULL,
  `verify` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Photographers`
--

INSERT INTO `Photographers` (`id`, `user_id`, `username`, `province`, `Starting_wage`, `Highest_wage`, `work_hour`, `verify`) VALUES
(1, 1, 'IFALPHOTO', 'จังหวัดกรุงเทพมหานคร', '500', '20000', 6, 'verified'),
(9, 9, 'MOOHAM', 'จังหวัดกรุงเทพมหานคร', '500', '20000', 10, 'verified'),
(18, 18, 'Ae Ae Photo', 'select-with-status__dropdown-item', '500', '14000', 8, 'verified'),
(19, 19, 'Roungroat 25', 'จังหวัดกรุงเทพมหานคร', '1200', '18000', 8, 'verified'),
(20, 20, 'Kaokoon', 'จังหวัดกรุงเทพมหานคร', '1500', '9000', 6, 'verified'),
(21, 21, 'Our Story', 'จังหวัดกรุงเทพมหานคร', '500', '30000', 8, 'verified'),
(22, 22, 'Anochai', 'จังหวัดกรุงเทพมหานคร', '1000', '15000', 8, 'verified'),
(23, 23, 'Cityart_Pat', 'จังหวัดกรุงเทพมหานคร', '1000', '35000', 10, 'verified'),
(24, 30, 'Z Photo', 'จังหวัดกรุงเทพมหานคร', '1200', '15000', 8, 'verified'),
(25, 31, 'C Photo', 'จังหวัดกรุงเทพมหานคร', '600', '7000', 9, 'verified'),
(26, 32, 'Vee Photo', 'จังหวัดกรุงเทพมหานคร', '500', '8000', 8, 'verified'),
(27, 33, 'Snap Photo', 'จังหวัดกรุงเทพมหานคร', '1000', '10000', 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photographer_bank`
--

CREATE TABLE `photographer_bank` (
  `id` int(11) NOT NULL,
  `bank_name` text NOT NULL,
  `bank_number` varchar(15) NOT NULL,
  `bank_file` text NOT NULL,
  `photographer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer_bank`
--

INSERT INTO `photographer_bank` (`id`, `bank_name`, `bank_number`, `bank_file`, `photographer_id`) VALUES
(1, 'ธนาคารกรุงไทย', '9849443030', 'Chart.jpeg', 1),
(4, 'ธนาคารกรุงเทพ', '9489552303', 'kbank.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `photographer_coin_transaction`
--

CREATE TABLE `photographer_coin_transaction` (
  `id` int(11) NOT NULL,
  `request_coin` int(11) NOT NULL,
  `photographer_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer_coin_transaction`
--

INSERT INTO `photographer_coin_transaction` (`id`, `request_coin`, `photographer_id`, `status`) VALUES
(1, 3500, 1, 'success'),
(2, 0, 16, 'request'),
(3, 13500, 1, 'success'),
(4, -17000, 1, 'success'),
(5, 3500, 1, 'success'),
(6, 14000, 1, 'request');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_image`
--

CREATE TABLE `photographer_image` (
  `id` int(11) NOT NULL,
  `img_name` text NOT NULL,
  `photographer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer_image`
--

INSERT INTO `photographer_image` (`id`, `img_name`, `photographer_id`) VALUES
(29, 'IFAL-0570.JPG', 1),
(30, 'IMG_3331.JPG', 1),
(31, 'IMG_3383.JPG', 1),
(32, 'IMG_3510.JPG', 1),
(33, 'IMG_3837.JPG', 1),
(34, 'IMG_7358.jpg', 1),
(35, 'IMG_7413.jpg', 1),
(36, 'IMG_7432.jpg', 1),
(37, 'IMG_7639.jpg', 1),
(38, 'HAM_7225.JPG', 1),
(39, 'IFAL-6543.JPG', 1),
(40, 'IFAL-5436.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photographer_package`
--

CREATE TABLE `photographer_package` (
  `id` int(11) NOT NULL,
  `photographer_id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `hour` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `detail_job` text NOT NULL,
  `detail` text NOT NULL,
  `img_package` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer_package`
--

INSERT INTO `photographer_package` (`id`, `photographer_id`, `package_name`, `price`, `hour`, `type_id`, `detail_job`, `detail`, `img_package`) VALUES
(1, 1, 'รับปริญญา นอกรอบ ครึ่งวัน', 3500, 4, 1, '- จองตัววันถ่าย มัดจำ 500 บาท - แต่งทุกรูป ครับ - ส่งรูปเดโมให้ หลังจากวันถ่าย 1 วัน ครับ - ส่งงานทั้งหมดเป็น drive cloud ภายใน 2  อาทิตย์', '-  มีการมัดจำช่างภาพ ขั้นต่ำ 500 บาท -  ทำการชำระเงินหลังปฏิบัติงานเสร็จ เต็มจำนวน -  กรณีลูกค้าขอเลท/เพิ่มเวลา ชั่วโมงละ 500 บาท -  ช่วงเช้า : เริ่ม 8:00 - 12.00 น. -  ช่วงบ่าย : เริ่ม 13:00 - 17.00 น. -  ต่างจังหวัด มีค่าเดินทางเพิ่ม', 'IFAL-0835.JPG'),
(2, 1, 'งานแต่ง พิธีงาน เช้าบ่าย', 14000, 6, 3, '- จองตัววันถ่าย มัดจำ 5000 บาท - แต่งทุกรูป ครับ - ส่งรูปเดโมให้ หลังจากวันถ่าย 1 วัน ครับ - ส่งงานทั้งหมดเป็น drive cloud ภายใน 3  อาทิตย์', '-  มีการมัดจำช่างภาพ ขั้นต่ำ 500 บาท -  ทำการชำระเงินหลังปฏิบัติงานเสร็จ เต็มจำนวน -  กรณีลูกค้าขอเลท/เพิ่มเวลา ชั่วโมงละ 1000 บาท -  ต่างจังหวัด มีค่าเดินทางเพิ่ม', 'IMG_1588.jpg'),
(3, 1, 'รับปริญญา วันจริง วันซ้อม ครึ่งวัน', 3500, 4, 1, '- จองตัววันถ่าย มัดจำ 500 บาท\r\n- แต่งทุกรูป ครับ\r\n- ส่งรูปเดโมให้ หลังจากวันถ่าย 1 วัน ครับ\r\n- ส่งงานทั้งหมดเป็น drive cloud ภายใน 2  อาทิตย์', '-  มีการมัดจำช่างภาพ ขั้นต่ำ 500 บาท\r\n-  ทำการชำระเงินหลังปฏิบัติงานเสร็จ เต็มจำนวน\r\n-  กรณีลูกค้าขอเลท/เพิ่มเวลา ชั่วโมงละ 500 บาท\r\n-  ช่วงเช้า : เริ่ม 8:00 - 12.00 น.\r\n-  ช่วงบ่าย : เริ่ม 13:00 - 17.00 น.\r\n-  ต่างจังหวัด มีค่าเดินทางเพิ่ม', 'IFAL-7467.jpg'),
(4, 1, 'ถ่าย โปรไฟล์', 1200, 4, 2, '- จองตัววันถ่าย มัดจำ 500 บาท\r\n- แต่งทุกรูป ครับ\r\n- ส่งรูปเดโมให้ หลังจากวันถ่าย 1 วัน ครับ\r\n- ส่งงานทั้งหมดเป็น drive cloud ภายใน 2  อาทิตย์', '-  มีการมัดจำช่างภาพ ขั้นต่ำ 500 บาท\r\n-  ทำการชำระเงินหลังปฏิบัติงานเสร็จ เต็มจำนวน\r\n-  กรณีลูกค้าขอเลท/เพิ่มเวลา ชั่วโมงละ 500 บาท\r\n-  ช่วงเช้า : เริ่ม 8:00 - 12.00 น.\r\n-  ช่วงบ่าย : เริ่ม 13:00 - 17.00 น.\r\n-  ต่างจังหวัด มีค่าเดินทางเพิ่ม', 'IFAL-6248.jpg'),
(15, 1, 'ถ่ายงานกลางคืน', 3500, 5, 5, '- จองตัววันถ่าย มัดจำ 500 บาท\r\n- แต่งทุกรูป ครับ\r\n- ส่งรูปเดโมให้ หลังจากวันถ่าย 1 วัน ครับ\r\n- ส่งงานทั้งหมดเป็น drive cloud ภายใน 2  อาทิตย์', '-  มีการมัดจำช่างภาพ ขั้นต่ำ 500 บาท\r\n-  ทำการชำระเงินหลังปฏิบัติงานเสร็จ เต็มจำนวน\r\n-  กรณีลูกค้าขอเลท/เพิ่มเวลา ชั่วโมงละ 500 บาท\r\n-  ต่างจังหวัด มีค่าเดินทางเพิ่ม', 'IMG_1487.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_type_job`
--

CREATE TABLE `photographer_type_job` (
  `id` int(11) NOT NULL,
  `id_photographer` int(11) NOT NULL,
  `id_type_job` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photographer_type_job`
--

INSERT INTO `photographer_type_job` (`id`, `id_photographer`, `id_type_job`) VALUES
(12, 11, 1),
(13, 11, 2),
(14, 11, 3),
(15, 11, 4),
(27, 12, 5),
(30, 13, 1),
(31, 13, 2),
(42, 15, 1),
(43, 15, 2),
(44, 14, 1),
(45, 16, 1),
(46, 16, 2),
(50, 18, 1),
(51, 18, 2),
(52, 18, 3),
(53, 9, 1),
(54, 9, 2),
(55, 9, 3),
(56, 9, 4),
(57, 9, 5),
(58, 19, 1),
(59, 19, 2),
(60, 19, 3),
(61, 19, 5),
(62, 20, 1),
(63, 20, 2),
(64, 20, 3),
(65, 21, 1),
(66, 21, 2),
(67, 21, 3),
(68, 22, 1),
(69, 22, 2),
(70, 22, 6),
(90, 23, 1),
(91, 23, 2),
(92, 23, 3),
(93, 23, 4),
(94, 23, 9),
(95, 24, 1),
(96, 24, 2),
(97, 24, 3),
(111, 25, 1),
(112, 25, 2),
(113, 25, 9),
(114, 26, 1),
(115, 26, 2),
(116, 26, 3),
(120, 27, 5),
(121, 27, 6),
(122, 27, 9),
(127, 1, 1),
(128, 1, 2),
(129, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_package`
--

CREATE TABLE `reserve_package` (
  `id` int(11) NOT NULL,
  `id_package` int(11) NOT NULL,
  `photographer_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `work_date` varchar(50) NOT NULL,
  `time_start` varchar(20) NOT NULL,
  `time_end` varchar(10) NOT NULL,
  `reserve_date` datetime NOT NULL,
  `time_reserve` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `scopeworks` text NOT NULL,
  `location` text DEFAULT NULL,
  `file_tax` varchar(200) DEFAULT NULL,
  `slip_payment` text DEFAULT NULL,
  `link_work` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve_package`
--

INSERT INTO `reserve_package` (`id`, `id_package`, `photographer_id`, `customer_id`, `work_date`, `time_start`, `time_end`, `reserve_date`, `time_reserve`, `status`, `scopeworks`, `location`, `file_tax`, `slip_payment`, `link_work`) VALUES
(12, 3, 1, 1, '2020-03-25 - 2020-03-25', '8.00', '12.00', '2020-03-25 17:35:21', 4, 'finish', 'ถ่ายวันจริง', 'มหาลัยเมืองทอง', NULL, '010060162225962358.jpeg', 'www.dropbox.com'),
(13, 15, 1, 1, '2020-03-25 - 2020-03-25', '21.00', '23.00', '2020-03-25 17:42:00', 5, 'confirm', 'ถ่ายคอนเสิต', 'มหาลัยศิลปากร เพชรบุรี', NULL, NULL, NULL),
(14, 2, 1, 1, '2020-03-25 - 2020-03-25', '6.00', '12.00', '2020-03-25 17:44:46', 6, 'finish', 'งานแต่งงาน พิธีเช้า บ่ายกินเลี้ยง', 'เรือนไทยพระราม 2', NULL, '010060162225962358.jpeg', NULL),
(15, 3, 1, 1, '2020-03-27 - 2020-03-27', '12.00', '16.00', '2020-03-27 23:32:06', 4, 'confirm', 'ถ่ายกับเพื่อนๆ ครึ่งวัน\r\nช่วยจัดท่าโพสให้ด้วยนะ', 'มหาวิทยาลัย นครปฐม วังท่าพระ', NULL, NULL, NULL),
(16, 4, 1, 1, '2020-03-28 - 2020-03-28', '14.00', '17.00', '2020-03-28 03:53:17', 4, 'cancel', 'เสื้อผ้า 5 ชุด\r\nแบบผู้หญิง\r\n', 'ถ่ายที่คอนโดละมุน ห้อง 919', NULL, NULL, NULL),
(17, 15, 1, 1, '2020-03-28 - 2020-03-28', '20.00', '24.00', '2020-03-28 03:55:46', 5, 'reserve', 'ถ่ายมินิคอนเสิต มหาลัย', 'มหาวิทยาลัยศิลปากร วิทยาเขตสารสนเทศเพชรบุรี', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_job`
--

CREATE TABLE `type_job` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_job`
--

INSERT INTO `type_job` (`id`, `name`) VALUES
(1, 'รับปริญญา'),
(2, 'ภาพบุคคล/แฟชั่น'),
(3, 'งานแต่งงาน'),
(4, 'พรีเวดดิ้ง'),
(5, 'งานอีเว้นท์'),
(6, 'สินค้า/อาหาร'),
(7, 'บ้าน/โรงแรม/สถาปัตยกรรม'),
(8, 'งานอุปสมบท'),
(9, 'อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_passport_number` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `star` float NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `avatar`, `name_surname`, `id_passport_number`, `birthday`, `phone`, `created_at`, `updated_at`, `star`, `status`) VALUES
(1, 'ifalphoto@hotmail.com', '123', 'profile_photographer.jpg', 'นันธวรรฒ รักญาติ ', '1234567890124', '1997-12-01', '0945835755', '2020-02-27 11:24:30', '2020-03-25 04:17:30', 0, 0),
(9, 'ham@hotmail.com', '123', 'Ham Sitthidech.jpg', 'Ham ham', '1234567890123', '1111-11-01', '0945835751', '2020-02-27 23:55:13', '2020-03-03 03:01:31', 0, 0),
(14, 'admin@mail.com', 'admin', NULL, 'Admin', NULL, NULL, NULL, '1000-01-01 00:00:00', '1000-01-01 00:00:00', 0, 1),
(18, 'ae@mail.com', '123', 'Ae Wanchai.jpg', 'เอ๋ เอ๋ไง', '1859900199999', '1994-01-01', '0842631954', '2020-03-25 05:01:41', '2020-03-25 05:08:16', 0, 0),
(19, 'rog@mail.com', '123', 'Roungroat Kunhirunkit .jpg', 'Roungroat Kunhirunkit', '1236548952136', '1994-11-11', '0842316032', '2020-03-25 05:10:06', '2020-03-25 05:12:35', 0, 0),
(20, 'kao@mail.com', '123', 'Kaokoon Dechapituck.jpg', 'Kaokoon Dechapituck', '1236548952136', '1990-02-01', '0846134629', '2020-03-25 05:13:28', '2020-03-25 05:14:03', 0, 0),
(21, 'nat@mail.com', '123', 'Natthapol Kongsuchart.jpg', 'Natthapol Kongsuchart', '1859900199999', '1989-12-01', '0845613346', '2020-03-25 06:09:55', '2020-03-25 06:10:37', 0, 0),
(22, 'an@mail.com', '123', 'Anochai Padungsong.jpg', 'Anochai Padungsong', '1857395039481', '1991-12-01', '0842631954', '2020-03-25 06:22:21', '2020-03-25 06:22:55', 0, 0),
(23, 'pat@mail.com', '123', 'Pat Rachhnu.jpg', 'Pat Rachhnu', '1857395039481', '1987-12-01', '0845613346', '2020-03-25 06:26:17', '2020-03-25 06:26:54', 0, 0),
(24, 'user@mail.com', '123', NULL, NULL, NULL, NULL, NULL, '2020-03-25 06:35:42', '2020-03-25 06:35:42', 0, 0),
(25, 'user@hotmail.com', '123', 'profile_customer.jpg', 'กชกร จรูญพิบูลพงศ์', '1859900199999', '1997-05-19', '0945835755', '2020-03-25 06:36:19', '2020-03-25 06:37:44', 0, 0),
(26, 'u@mail.com', '123', NULL, NULL, NULL, NULL, NULL, '2020-03-25 06:45:06', '2020-03-25 06:45:06', 0, 0),
(27, 'a@mail.com', '1234', 'Pichit Imaxfoto Kittha.jpg', 'เอ เอ', '1859900199821', '1992-01-01', '0817350596', '2020-03-25 06:46:25', '2020-03-25 06:47:04', 0, 0),
(29, 'q@mail.com', '123', NULL, NULL, NULL, NULL, NULL, '2020-03-25 06:53:54', '2020-03-25 06:53:54', 0, 0),
(30, 'z@mail.com', '123', 'ui.jpg', 'Z Z', '1234567890123', '1991-12-01', '0945835751', '2020-03-25 06:55:03', '2020-03-25 06:55:35', 0, 0),
(31, 'c@mail.com', '12345', 'C.png', 'C C', '1859900199997', '1998-12-01', '0945835751', '2020-03-25 16:05:38', '2020-03-25 16:20:02', 0, 0),
(32, 'v@mail.com', '456', 'Pichit Imaxfoto Kittha.jpg', 'V Vee', '1859900199821', '1211-12-01', '0945835751', '2020-03-25 17:13:31', '2020-03-25 17:15:15', 0, 0),
(33, 'snap@hotmail.com', '123', 'profile.jpg', 'Snap Snap', '1111111111111', '1111-01-01', '1111111111', '2020-03-27 21:56:54', '2020-03-28 19:53:33', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verify_upload`
--

CREATE TABLE `verify_upload` (
  `id` int(11) NOT NULL,
  `photo_card` text NOT NULL,
  `copy_card` text NOT NULL,
  `slip_snap` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verify_upload`
--

INSERT INTO `verify_upload` (`id`, `photo_card`, `copy_card`, `slip_snap`, `id_user`) VALUES
(5, '163365.jpg', '372479.jpg', '372482.jpg', 1),
(6, 'ui.jpg', 'ui1.jpg', 'ui3.jpg', 19),
(7, 'ui1.jpg', 'ui2.jpg', 'ui3.jpg', 30),
(8, 'ui21.jpg', 'ui20.jpg', 'ui19.jpg', 31),
(9, 'ui21.jpg', 'ui20.jpg', 'ui19.jpg', 31),
(10, 'ui3.jpg', 'ui2.jpg', 'ui4.jpg', 32),
(11, 'ui11.jpg', 'ui12.jpg', 'ui13.jpg', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Photographers`
--
ALTER TABLE `Photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer_bank`
--
ALTER TABLE `photographer_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer_coin_transaction`
--
ALTER TABLE `photographer_coin_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer_image`
--
ALTER TABLE `photographer_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer_package`
--
ALTER TABLE `photographer_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer_type_job`
--
ALTER TABLE `photographer_type_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve_package`
--
ALTER TABLE `reserve_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photographer_id` (`photographer_id`);

--
-- Indexes for table `type_job`
--
ALTER TABLE `type_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_upload`
--
ALTER TABLE `verify_upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Photographers`
--
ALTER TABLE `Photographers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `photographer_bank`
--
ALTER TABLE `photographer_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photographer_coin_transaction`
--
ALTER TABLE `photographer_coin_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photographer_image`
--
ALTER TABLE `photographer_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `photographer_package`
--
ALTER TABLE `photographer_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `photographer_type_job`
--
ALTER TABLE `photographer_type_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `reserve_package`
--
ALTER TABLE `reserve_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `type_job`
--
ALTER TABLE `type_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `verify_upload`
--
ALTER TABLE `verify_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Photographers`
--
ALTER TABLE `Photographers`
  ADD CONSTRAINT `photographers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
