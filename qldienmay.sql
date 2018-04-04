-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 11:56 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qldienmay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(15) NOT NULL,
  `name` varchar(55) NOT NULL,
  `username` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fb` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `image`, `fb`, `email`, `password`) VALUES
(1, 'Trường Nguyễn', 'admin', 'admin.jpg', 'https://www.facebook.com/nxtruong03', 'nxt3395@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`id` int(15) NOT NULL,
  `name` varchar(55) NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`) VALUES
(1, 'Samsung', 'Điện tử Samsung'),
(4, 'Toshiba', 'Điện tử Toshiba'),
(5, 'Lenovo', 'Máy tính Lenovo'),
(6, 'Sony', 'Hãng Sony'),
(7, 'Apple', 'Apple'),
(8, 'LG', 'LG'),
(9, 'Panasonic', 'Panasonic');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(5, 'Tivi', 'Tivi'),
(6, 'Điện thoại', 'Điện thoại'),
(7, 'Laptop', 'Laptop'),
(8, 'Điều hòa', 'Điều hòa');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `order_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `quantity` int(15) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `product_id`, `quantity`, `total`) VALUES
(1, 14, 5, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `date` date NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `cus_add` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date`, `cus_name`, `cus_add`) VALUES
(1, 1, '2018-03-03', 'Alien', 'Sao Hỏa');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cate_id` int(15) NOT NULL,
  `brand_id` int(15) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(15) NOT NULL,
  `discount` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `count_buy` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cate_id`, `brand_id`, `price`, `quantity`, `discount`, `image`, `description`, `count_buy`) VALUES
(1, 'Tivi Samsung 40 inch', 5, 1, 3990000, 100, 0.2, 'ssid1.jpg', '<ul>\r\n	<li>Loại tivi:Smart Tivi, 43 inch</li>\r\n	<li>Độ phân giải:Ultra HD 4K</li>\r\n	<li>Hệ điều hành:Tizen OS</li>\r\n	<li>Ứng dụng sẵn có:Trình duyệt web, YouTube, Netflix, Flix TV, FPT Play, Film+</li>\r\n	<li>Ứng dụng có thể tải thêm:Zing TV, Nhạc của tui, Facebook, HD Viet,Karaoke, Amazon Video</li>\r\n	<li>Remote thông minh:Remote đa nhiệm - One Remote</li>\r\n	<li>Điều khiển TV bằng điện thoại:Bằng ứng dụng Samsung Smart View</li>\r\n	<li>Kết nối internet:Cổng LAN, Wifi</li>\r\n	<li>Cổng HDMI:3 cổng</li>\r\n	<li>Cổng USB:2 cổng</li>\r\n	<li>Năm ra mắt:2017</li>\r\n</ul>\r\n', 5),
(14, 'Tivi SamSung 4k 50" ', 5, 1, 5999999, 100, 0, 'product3.jpg', '<ul>\r\n	<li>Loại tivi:Smart Tivi, 50 inch</li>\r\n	<li>Độ phân giải:Ultra HD 4K</li>\r\n	<li>Hệ điều hành:Tizen OS</li>\r\n	<li>Ứng dụng sẵn có:Trình duyệt web, YouTube, Netflix, Flix TV, FPT Play, Film+</li>\r\n	<li>Ứng dụng có thể tải thêm:Zing TV, Clip.vn, Nhạc của tui, HDViet</li>\r\n	<li>Remote thông minh:Remote đa nhiệm - One Remote</li>\r\n	<li>Điều khiển TV bằng điện thoại:Bằng ứng dụng Samsung Smart View</li>\r\n	<li>Kết nối internet:Cổng LAN, Wifi</li>\r\n	<li>Cổng HDMI:3 cổng</li>\r\n	<li>Cổng USB:2 cổng</li>\r\n	<li>Năm ra mắt:2017</li>\r\n</ul>\r\n', 0),
(16, 'Laptop Lenovo ABC v1.2', 7, 5, 120000000, 100, 0.25, 'laptoplenovo1.jpg', 'Laptop lenovo', 0),
(23, 'Smart Tivi Samsung 43 inch ', 5, 1, 9000000, 230, 0.15, 'sstv2.png', '<ul>\r\n	<li>Loại tivi:Smart Tivi, 43 inch</li>\r\n	<li>Độ phân giải:Ultra HD 4K</li>\r\n	<li>Hệ điều hành:Tizen OS</li>\r\n	<li>Ứng dụng sẵn có:Trình duyệt web, YouTube, Netflix, Flix TV, FPT Play, Film+</li>\r\n	<li>Ứng dụng có thể tải thêm:Zing TV, Nhạc của tui, Facebook, HD Viet,Karaoke, Amazon Video</li>\r\n	<li>Remote thông minh:Remote đa nhiệm - One Remote</li>\r\n	<li>Điều khiển TV bằng điện thoại:Bằng ứng dụng Samsung Smart View</li>\r\n	<li>Kết nối internet:Cổng LAN, Wifi</li>\r\n	<li>Cổng HDMI:3 cổng</li>\r\n	<li>Cổng USB:2 cổng</li>\r\n	<li>Năm ra mắt:2017</li>\r\n</ul>\r\n', 0),
(24, 'Laptop LENOVO YOGA 310-11IAP', 7, 5, 12000000, 120, 0, 'laptoplenovo2.jpg', 'Laptop Lenovo Yoga 310-11IAP được thiết kế với kiểu dáng hiện đại, màu sắc sang trọng, tinh tế. Bản lề giúp xoay màn hình 360 độ hoàn toàn mới đầy ấn tượng.', 2),
(25, 'Panasonic Inverter 8700 BTU', 8, 9, 11590000, 100, 0.5, 'may-lanh-panasonic-cu-cs-u9tkh-8-550x160.png', '<ul>\r\n	<li>1 HP</li>\r\n	<li>ĐIỀU HOÀ 1 CHIỀU (CHỈ LÀM LẠNH)</li>\r\n	<li>MÁY LẠNH INVERTER</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Làm lạnh mạnh mẽ &amp; tức thời với công nghệ tăng cường nhiệt P-TECh.</li>\r\n	<li>Tiết kiệm điện năng hao phí nhờ công nghệ Inverter.</li>\r\n	<li>Bảo vệ sức khỏe với bộ lọc Nanoe-G.</li>\r\n</ul>\r\n', 0),
(26, 'Toshiba 9000 BTU RAS-H10QKSG-V', 8, 4, 7690000, 20, 0, 'may-lanh-toshiba-ras-h10qksg-v-550x160.png', '<ul>\r\n	<li>1 HP</li>\r\n	<li>ĐIỀU HO&Agrave; 1 CHIỀU (CHỈ L&Agrave;M LẠNH)</li>\r\n	<li>M&Aacute;Y LẠNH KH&Ocirc;NG INVERTER</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Lớp phủ đặc biệt Magic Coil gi&uacute;p kh&aacute;ng khuẩn, khử m&ugrave;i.</li>\r\n	<li>C&ocirc;ng nghệ tinh lọc kh&ocirc;ng kh&iacute; IAQ gi&uacute;p ngăn ngừa virus, vi khuẩn cực tốt.</li>\r\n	<li>L&agrave;m lạnh nhanh ch&oacute;ng nhờ trang bị hệ thống trao đổi nhiệt mới.</li>\r\n	<li>M&ocirc;i chất l&agrave;m lạnh thế hệ mới R32 th&acirc;n thiện với m&ocirc;i trường, tiết kiệm điện năng.</li>\r\n</ul>\r\n', 0),
(27, 'LG Inverter 12000 BTU V13ENR', 8, 8, 8200000, 30, 0.2, 'may-lanh-lg-v13enr-2-org.jpg', '<ul>\r\n	<li>ĐIỀU HOÀ 1 CHIỀU (CHỈ LÀM LẠNH)</li>\r\n	<li>MÁY LẠNH INVERTER</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Máy nén Smart Inverter giúp tiết kiệm điện năng, bảo hành 10 năm.</li>\r\n	<li>Chế độ kiểm soát năng lượng chủ động giúp tiết kiệm chi phí.</li>\r\n	<li>Tấm lọc kép kháng khuẩn giúp bảo vệ sức khỏe.</li>\r\n</ul>\r\n', 0),
(28, 'Điện thoại iPhone X 256GB', 6, 7, 34790000, 10, 0, 'iphone-x-256gb-h1-2-300x300.jpg', '<ul>\r\n	<li>M&agrave;n h&igrave;nh:OLED, 5.8&quot;, Super Retina</li>\r\n	<li>Hệ điều h&agrave;nh:iOS 11</li>\r\n	<li>Camera sau:2 camera 12 MP</li>\r\n	<li>Camera trước:7 MP</li>\r\n	<li>CPU:Apple A11 Bionic 6 nh&acirc;n</li>\r\n	<li>RAM:3 GB</li>\r\n	<li>Bộ nhớ trong:256 GB</li>\r\n	<li>Thẻ SIM:1 Nano SIM, hỗ trợ 4G</li>\r\n	<li>Dung lượng pin:2716 mAh, c&oacute; sạc nhanh</li>\r\n</ul>\r\n', 0),
(29, 'Điện thoại Samsung Galaxy Note 8', 6, 1, 22490000, 50, 0.1, 'samsung-galaxy-note8-1-300x300.jpg', '<ul>\r\n	<li>M&agrave;n h&igrave;nh:Super AMOLED, 6.3&quot;, Quad HD+ (2K+)</li>\r\n	<li>Hệ điều h&agrave;nh:Android 7.1</li>\r\n	<li>Camera sau:2 camera 12 MP</li>\r\n	<li>Camera trước:8 MP</li>\r\n	<li>CPU:Exynos 8895 8 nh&acirc;n 64-bit</li>\r\n	<li>RAM:6 GB</li>\r\n	<li>Bộ nhớ trong:64 GB</li>\r\n	<li>Thẻ nhớ:MicroSD, hỗ trợ tối đa 256 GB</li>\r\n	<li>Thẻ SIM:2 Nano SIM, hỗ trợ 4G</li>\r\n	<li>Dung lượng pin:3300 mAh, c&oacute; sạc nhanh</li>\r\n</ul>\r\n', 0),
(30, 'Sony Xperia XZ1', 6, 6, 15999000, 100, 0, 'sony-xperia-xz1-1-1-300x300.jpg', '<h2>Th&ocirc;ng số kỹ thuật</h2>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh:IPS HDR LCD, 5.2&quot;, Full HD</li>\r\n	<li>Hệ điều h&agrave;nh:Android 8.0</li>\r\n	<li>Camera sau:19 MP</li>\r\n	<li>Camera trước:13 MP</li>\r\n	<li>CPU:Qualcomm Snapdragon 835 8 nh&acirc;n 64-bit</li>\r\n	<li>RAM:4 GB</li>\r\n	<li>Bộ nhớ trong:64 GB</li>\r\n	<li>Thẻ nhớ:MicroSD, hỗ trợ tối đa 256 GB</li>\r\n	<li>Thẻ SIM:2 Nano SIM, hỗ trợ 4G</li>\r\n	<li>Dung lượng pin:2700 mAh, c&oacute; sạc nhanh</li>\r\n</ul>\r\n', 0),
(31, 'Lenovo IdeaPad 110 15IBR', 7, 5, 6990000, 100, 0, 'lenovo-ideapad-110-15ibr-80t700bkvn-den-h-450x300-450x300.jpg', '<ul>\r\n	<li>CPU:Intel Pentium, N3710, 1.60 GHz</li>\r\n	<li>RAM:4 GB, DDR3L (1 khe RAM), 1600 MHz</li>\r\n	<li>Ổ cứng:HDD: 500 GB</li>\r\n	<li>M&agrave;n h&igrave;nh:15.6 inch, HD (1366 x 768)</li>\r\n	<li>Card m&agrave;n h&igrave;nh:Card đồ họa t&iacute;ch hợp, Intel&reg; HD Graphics 405</li>\r\n	<li>Cổng kết nối:HDMI, LAN (RJ45), USB 2.0, USB 3.0</li>\r\n	<li>Hệ điều h&agrave;nh:Windows 10</li>\r\n	<li>Thiết kế:Vỏ nhựa, PIN liền</li>\r\n	<li>K&iacute;ch thước:D&agrave;y 22.9 mm, 2.2 Kg</li>\r\n</ul>\r\n', 0),
(32, 'Apple Macbook Air MQD42SA/A i5', 7, 7, 28990000, 100, 0, 'apple-macbook-air-mqd42sa-a-i5-5350u-8gb-256gb-bac-450x300-450x300.jpg', '<ul>\r\n	<li>CPU:Intel Core i5 Broadwell, , 1.80 GHz</li>\r\n	<li>RAM:8 GB, DDR3L(On board), 1600 MHz</li>\r\n	<li>Ổ cứng:SSD: 256 GB</li>\r\n	<li>M&agrave;n h&igrave;nh:13.3 inch, WXGA+(1440 x 900)</li>\r\n	<li>Card m&agrave;n h&igrave;nh:Card đồ họa t&iacute;ch hợp, Intel HD Graphics 6000</li>\r\n	<li>Cổng kết nối:MagSafe 2, 2 x USB 3.0, Thunderbolt 2</li>\r\n	<li>Đặc biệt:C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</li>\r\n	<li>Hệ điều h&agrave;nh:Mac OS</li>\r\n	<li>Thiết kế:Vỏ kim loại nguy&ecirc;n khối, PIN liền</li>\r\n	<li>K&iacute;ch thước:D&agrave;y 17 mm, 1.35 Kg</li>\r\n</ul>\r\n', 0),
(33, 'LG Gram 14Z970-G.AH52A5', 7, 8, 28900000, 100, 0.3, 'lg-14z970-gah52a5-450x300-450x300.jpg', '<ul>\r\n	<li>CPU:Intel Core i5 Kabylake, 7200U, 2.50 GHz</li>\r\n	<li>RAM:8 GB, DDR4 (On board), 2133 MHz</li>\r\n	<li>Ổ cứng:SSD: 256 GB, M2</li>\r\n	<li>M&agrave;n h&igrave;nh:14 inch, Full HD (1920 x 1080)</li>\r\n	<li>Card m&agrave;n h&igrave;nh:Card đồ họa t&iacute;ch hợp, Intel&reg; HD Graphics 620</li>\r\n	<li>Cổng kết nối:2 x USB 3.0, HDMI, USB Type-C</li>\r\n	<li>Đặc biệt:C&oacute; đ&egrave;n b&agrave;n ph&iacute;m</li>\r\n	<li>Hệ điều h&agrave;nh:Windows 10</li>\r\n	<li>Thiết kế:Vỏ bằng sợi carbon, PIN liền</li>\r\n	<li>K&iacute;ch thước:D&agrave;y 16.7 mm, 970 g</li>\r\n</ul>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `pwd`) VALUES
(1, 'Trường Nguyễn', 'tn@gmail.com', '0978926487', 'Đông Anh', '1'),
(5, 'Phạm Quý Đôn', 'pqd@gmail.com', '0978926487', 'Yên Bái', '1'),
(6, 'Nguyễn Trọng Đức', 'ntd@gmail.com', '0978888598', 'Hà Nội', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
 ADD KEY `order_id` (`order_id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `cate_id` (`cate_id`), ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
