-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 01:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuoncayviet`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Cây Ăn Quả', 'cay-an-qua', 1, '2019-12-06 19:34:57', '2019-12-06 19:34:57'),
(13, 'Cây Cảnh', 'cay-canh', 1, '2019-12-06 19:38:24', '2019-12-06 19:38:24'),
(14, 'Cây Công Trình', 'cay-cong-trinh', 1, '2019-12-06 19:43:29', '2019-12-06 19:43:29'),
(15, 'Cây Công Nghiệp', 'cay-cong-nghiep', 1, '2019-12-06 19:43:38', '2019-12-06 19:43:38'),
(16, 'Vật Tư Nông Ngiệp', 'vat-tu-nong-ngiep', 1, '2019-12-06 19:43:46', '2019-12-06 19:43:46'),
(17, 'Dược Liệu', 'duoc-lieu', 1, '2019-12-06 19:44:00', '2019-12-06 19:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `idUser`, `email`, `address`, `phone`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'dongsongkiniem95@gmail.com', 'Thôn Trà đình 2 - quế phú - quế sơn - quảng nam', '0919918817', 0, NULL, NULL),
(3, 3, 'phamthanhtuoi0@gmail.com', 'Thôn Trà Đình 2, Quế Phú, Quế Sơn', '0975323376', 0, '2019-12-06 04:33:21', '2019-12-06 04:34:09'),
(4, 3, 'phamthanhtuoi0@gmail.com', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', '0919918817', 1, '2019-12-06 04:34:09', '2019-12-06 04:34:09'),
(5, 4, 'phamthanhtuoi0@gmail.com', 'Thôn Trà Đình 2, Quế Phú, Quế Sơn', '0975323376', 0, '2019-12-06 20:27:27', '2019-12-06 20:27:39'),
(6, 4, 'phamthanhtuoi0@gmail.com', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', '0919918817', 0, '2019-12-06 20:27:39', '2019-12-06 20:27:42'),
(7, 4, 'phamthanhtuoi0@gmail.com', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', '0919918817', 1, '2019-12-06 20:27:42', '2019-12-06 20:27:42'),
(8, 1, 'phamthanhtuoi0@gmail.com', 'Thôn Trà Đình 2, Quế Phú, Quế Sơn', '0975323376', 0, '2019-12-06 22:28:26', '2019-12-07 00:25:59'),
(9, 5, 'phamthanhtuoi0@gmail.com', 'Thôn Trà Đình 2, Quế Phú, Quế Sơn', '0975323376', 0, '2019-12-06 22:53:50', '2019-12-09 03:05:00'),
(10, 1, 'phamthanhtuoi0@gmail.com', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', '0919918817', 1, '2019-12-07 00:26:00', '2019-12-07 00:26:00'),
(11, 6, 'phamthanhtuoisn99@gmail.com', 'Đà Nẵng', '0975323376', 1, '2019-12-07 00:28:31', '2019-12-07 00:28:31'),
(12, 5, 'vuoncayviet2019.vn@gmail.com', 'Nam kì khởi nghĩa - Đà Nẵng', '0919918817', 1, '2019-12-09 03:05:00', '2019-12-09 03:05:00'),
(13, 8, 'mainhomiss30@gmail.com', 'Đà Nẵng', '0919918817', 1, '2019-12-09 05:28:11', '2019-12-09 05:28:11'),
(14, 1, 'vuoncayviet2019.vn@gmail.com', 'Quảng Nam', '0123456789', 0, '2019-12-11 08:01:51', '2019-12-11 08:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_02_012854_create_categories_table', 1),
(4, '2019_12_02_012936_create_product_types_table', 1),
(5, '2019_12_02_012952_create_products_table', 1),
(6, '2019_12_02_013013_create_orders_table', 1),
(7, '2019_12_02_013032_create_order_details_table', 1),
(8, '2019_12_02_013059_create_contacts_table', 1),
(9, '2019_12_02_013224_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_order` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monney` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `code_order`, `idUser`, `name`, `address`, `email`, `phone`, `monney`, `message`, `status`, `created_at`, `updated_at`) VALUES
(51, '#1544494118', 3, 'phạm thanh tươi', 'Thôn Trà Đình 2, Quế Phú, Quế Sơn', 'phamthanhtuoi0@gmail.com', '0975323376', '239300', NULL, 1, '2019-12-12 00:23:57', '2019-12-12 19:53:03'),
(52, '#1415211445', 3, 'phạm thanh tươi', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', 'phamthanhtuoi0@gmail.com', '0919918817', '38000', NULL, 0, '2019-12-12 00:25:46', '2019-12-12 00:25:46'),
(53, '#84492188', 1, 'Thanhtuoi Pham', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', 'phamthanhtuoi0@gmail.com', '0919918817', '38000', NULL, 0, '2019-12-12 00:28:09', '2019-12-12 00:28:09'),
(54, '#216258750', 1, 'Thanhtuoi Pham', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', 'phamthanhtuoi0@gmail.com', '0919918817', '38000', NULL, 0, '2019-12-12 00:33:36', '2019-12-12 00:33:36'),
(55, '#485429560', 1, 'Thanhtuoi Pham', 'Đường Nam Kì Khởi Nghĩa, Hòa Quý, Ngũ Hành Sơn', 'phamthanhtuoi0@gmail.com', '0919918817', '37460', NULL, 1, '2019-12-12 00:34:19', '2019-12-12 20:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `idOrder` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `idOrder`, `idProduct`, `name`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(47, 51, 28, 'Cây Ngọc Ngân', 3, 18000, '2019-12-12 00:23:58', '2019-12-12 00:23:58'),
(48, 51, 47, 'Cây Cà Phê', 1, 17460, '2019-12-12 00:23:58', '2019-12-12 00:23:58'),
(49, 51, 35, 'Cam Cara', 2, 73920, '2019-12-12 00:23:58', '2019-12-12 00:23:58'),
(50, 52, 28, 'Cây Ngọc Ngân', 1, 18000, '2019-12-12 00:25:46', '2019-12-12 00:25:46'),
(51, 53, 28, 'Cây Ngọc Ngân', 1, 18000, '2019-12-12 00:28:09', '2019-12-12 00:28:09'),
(52, 54, 28, 'Cây Ngọc Ngân', 1, 18000, '2019-12-12 00:33:36', '2019-12-12 00:33:36'),
(54, 56, 26, 'Trầu Bà Đế Vương', 1, 225000, '2019-12-12 07:04:55', '2019-12-12 07:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `promotional` float NOT NULL,
  `idCategory` int(11) NOT NULL,
  `idProductType` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `description`, `quantity`, `price`, `promotional`, `idCategory`, `idProductType`, `image`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(26, 'Trầu Bà Đế Vương', 'trau-ba-de-vuong', '<p>Đế vương xanh trồng trong nước rất sạch, tươi m&aacute;t. &nbsp;Hơi nước bốc ra từ b&igrave;nh c&acirc;y sẽ l&agrave;m m&aacute;t ng&agrave;y h&egrave; ngay cả trong m&ocirc;i trường m&aacute;y lạnh. Chỉ với một c&acirc;y Đế vương xanh tr&ecirc;n b&agrave;n l&agrave;m việc l&agrave; bạn đ&atilde; c&oacute; một m&aacute;y lọc kh&ocirc;ng kh&iacute; mini cho ch&iacute;nh bản th&acirc;n.</p>', 1, 250000, 10, 13, 27, 'cay-canh.png', 1, 0, '2019-12-08 05:44:21', '2019-12-08 05:44:21'),
(27, 'Tiểu Hồng Môn', 'tieu-hong-mon', '<p>Chậu c&acirc;y hồng m&ocirc;n để b&agrave;n l&agrave; c&acirc;y nội thất c&oacute; &yacute; nghĩa phong thủy tốt thường được sử dụng để trang tr&iacute; b&agrave;n học, b&agrave;n l&agrave;m việc, b&agrave;n ăn,&hellip; Ngo&agrave;i ra, chậu c&acirc;y tiểu hồng m&ocirc;n c&ograve;n l&agrave; qu&agrave; tặng đến bạn b&egrave; người th&acirc;n trong c&aacute;c dịp lễ tết v&ocirc; c&ugrave;ng &yacute; nghĩa&hellip;</p>', 0, 300000, 15, 13, 27, 'cay-canh1.jpg', 1, 0, '2019-12-08 05:46:50', '2019-12-08 05:46:50'),
(28, 'Cây Ngọc Ngân', 'cay-ngoc-ngan', '<p><em><strong>C&acirc;y Ngọc Ng&acirc;n</strong></em>&nbsp;l&agrave; một loại&nbsp;<em>c&acirc;y để b&agrave;n</em>&nbsp;rất phổ biến. Với vẻ đẹp h&agrave;i ho&agrave; sang trọng từ phiến l&aacute;, th&acirc;n v&agrave; rễ , Ngọc Ng&acirc;n l&agrave; c&acirc;y cảnh d&agrave;nh cho t&igrave;nh y&ecirc;u, l&agrave; m&oacute;n qu&agrave; đặc biết &yacute; nghĩa để bạn d&agrave;nh tặng người ấy trong những dịp đặc biệt.</p>', 10, 18000, 0, 13, 28, 'cay-canh2.jpg', 1, 0, '2019-12-08 05:49:14', '2019-12-08 05:49:14'),
(29, 'Cây Phú Quý', 'cay-phu-quy', '<p>C&acirc;y Ph&uacute; Qu&yacute;&nbsp;&nbsp;l&agrave; loại c&acirc;y rất được ưu chuộn trong giới văn ph&ograve;ng v&igrave; c&aacute;i t&ecirc;n nghe sang trọng v&agrave; vẻ đẹp đầy nhựa sống.</p>', 100, 250000, 3, 13, 28, 'cay-canh3.jpg', 1, 0, '2019-12-08 05:51:03', '2019-12-08 05:51:03'),
(30, 'Hoa Mười Giờ', 'hoa-muoi-gio', '<p>C&acirc;y h&ograve;a mười giờ&nbsp;thường được d&ugrave;ng trang tr&iacute; qu&aacute;n cafe, nh&agrave; h&agrave;ng, ban c&ocirc;ng, s&acirc;n thượng&hellip; T&ocirc; điểm th&ecirc;m cho kh&ocirc;ng gian tr&ecirc;n cao m&agrave;u sắc hoa l&aacute;, đặc biệt lo&agrave;i hoa mười giờ n&agrave;y sẽ cho hoa nở rộ v&agrave;o khoảng 9h đến 10h s&aacute;ng. Ngo&agrave;i ra,c&acirc;y mười&nbsp;giờ c&ograve;n được trồng th&agrave;nh thảm trang tr&iacute; khu&ocirc;n vi&ecirc;n&nbsp;s&acirc;n vườn, c&ocirc;ng vi&ecirc;n&hellip;</p>', 100, 35000, 0, 13, 29, 'cay-canh4.jpg', 1, 1, '2019-12-08 05:54:16', '2019-12-08 05:54:16'),
(31, 'Hoa Dã Yến Thảo', 'hoa-da-yen-thao', '<p>Hoa d&atilde; yến thảo chậu treo&nbsp;với nhiều kiểu d&aacute;ng v&agrave; m&agrave;u sắc hoa đẹp thường d&ugrave;ng trang tr&iacute; cho ban c&ocirc;ng, s&acirc;n thượng, cửa sổ, h&agrave;ng r&agrave;o, khu du lịch&hellip; C&acirc;y hoa d&atilde; y&ecirc;n thảo được nhiều người ưa chuộng v&agrave; ứng dụng trồng&nbsp;chậu treo&nbsp;l&agrave; phổ biến nhất.</p>', 100, 60000, 5, 13, 29, 'cay-canh5.jpg', 1, 0, '2019-12-08 05:57:19', '2019-12-08 05:57:19'),
(32, 'Cây Chuối Đỏ', 'cay-chuoi-do', '<p>Chuối đỏ c&ograve;n được gọi l&agrave; chuối Dacca c&oacute; xuất xứ từ Australia. Chuối đỏ trồng ở Việt Nam c&oacute; k&iacute;ch thước quả nhỏ hơn quả chuối th&ocirc;ng thường một ch&uacute;t. Chuối c&oacute; vỏ m&agrave;u đỏ đậm hoặc hơi t&iacute;m. Thịt chuối c&oacute; m&agrave;u trắng kem cho đến m&agrave;u hồng với hương vị chuối nhẹ nh&agrave;ng quyện lẫn vị của quả m&acirc;m x&ocirc;i đầy hấp dẫn. Chuối c&ograve;n cung cấp h&agrave;ng t&aacute; vitamin v&agrave; kho&aacute;ng chất cực tốt cho cơ thể.</p>', 100, 99000, 7, 12, 24, 'cay-an-qua5.jpg', 1, 0, '2019-12-08 06:04:20', '2019-12-08 06:04:20'),
(33, 'Chanh Tứ Quý', 'chanh-tu-quy', '<p>C&acirc;y chanh tứ thời c&ograve;n được gọi với t&ecirc;n kh&aacute;c l&agrave; chanh 4 m&ugrave;a,chanh tứ qu&iacute; l&agrave; c&acirc;y họ bưởi. C&oacute; nguồn gốc từ chanh Lim Ca ch&acirc;u mỹ. Chanh 4 m&ugrave;a được du nhập v&agrave;o Việt Nam từ những năm 1996 v&agrave; đ&atilde; được kiểm chứng l&agrave; th&iacute;ch nghi tốt với kh&iacute; hậu nước ta.</p>', 100, 15000, 10, 12, 23, 'cay-an-qua6.jpg', 1, 0, '2019-12-08 06:05:37', '2019-12-08 06:05:37'),
(34, 'Chuối Thái Lan', 'chuoi-thai-lan', '<p>Ăn chuối gi&uacute;p ngăn ngừa ung thư thận, bảo vệ mắt gi&uacute;p chống lại&nbsp;tho&aacute;i h&oacute;a điểm v&agrave;ng, x&acirc;y dựng khung xương chắc khỏe bằng c&aacute;ch tăng cường&nbsp;hấp thu canxi.</p>', 100, 35000, 5, 12, 24, 'cay-an-qua7.jpg', 1, 0, '2019-12-08 06:11:15', '2019-12-08 06:11:15'),
(35, 'Cam Cara', 'cam-cara', '<p>Cam Cara ruột đỏ kh&ocirc;ng hạt l&agrave; một giống c&acirc;y c&oacute; m&uacute;i nhập nội c&oacute; xuất xứ từ v&ugrave;ng Valencia -Venezuela, du nhập qua Mỹ, sau đ&oacute; đến &Uacute;c. Từ giống gốc cam Navel, bằng kỹ thuật đột biến c&aacute;c nh&agrave; chọn giống đ&atilde; chọn tạo được một số c&aacute; thể c&oacute; đặc t&iacute;nh ưu việt hơn nhưng vẫn giữ nguy&ecirc;n những đặc t&iacute;nh qu&yacute; của giống gốc trong đ&oacute; c&oacute; cam Cara Cara Navel hay c&ograve;n gọi l&agrave; cam Cara ruột đỏ kh&ocirc;ng hạt.</p>', 100, 84000, 12, 12, 23, 'cay-an-qua.jpg', 1, 1, '2019-12-08 06:14:51', '2019-12-08 06:14:51'),
(36, 'Sầu Riêng Ruột Đỏ', 'sau-rieng-ruot-do', '<p>Bạn l&agrave; một t&iacute;n đồ th&iacute;ch vị đặc biệt của Sầu Ri&ecirc;ng, hay l&agrave; một người đam m&ecirc; t&igrave;m t&ograve;i những giống c&acirc;y lạ th&igrave; đ&acirc;y l&agrave; một giống c&acirc;y bạn sẽ cực kỳ th&iacute;ch th&uacute;.&nbsp;<strong><a href=\"https://cungcaphatgiong.com/chi-tiet-san-pham/cay-giong-sau-rieng-ruot-do\">&nbsp;</a>g</strong>iống c&acirc;y đang thu h&uacute;t người ti&ecirc;u d&ugrave;ng bởi l&otilde;i m&agrave;u đỏ bắt mắt.</p>\r\n\r\n<p>Ruột quả sầu ri&ecirc;ng c&oacute; m&agrave;u đỏ đậm như ruột của tr&aacute;i gấc, hạt của n&oacute; giống như hạt m&iacute;t, phần m&uacute;i mỏng v&agrave; kh&ocirc; hơn giống sầu ri&ecirc;ng ruột v&agrave;ng</p>', 100, 75000, 0, 12, 26, 'cay-an-qua1.jpg', 1, 0, '2019-12-08 06:17:44', '2019-12-08 06:17:44'),
(37, 'Dâu Da Đất', 'dau-da-dat', '<p>C&acirc;y d&acirc;u da c&oacute; t&ecirc;n khoa học l&agrave; Baccaurea sapida, thuộc họ Thầu dầu hay họ Ba m&atilde;nh vỏ (Euphobiaceae), bộ Ba m&atilde;nh vỏ (Euphobiales). D&acirc;u da l&agrave; c&acirc;y ưa s&aacute;ng, gỗ nhỏ, c&acirc;y bản địa mọc trong rừng tự nhi&ecirc;n, c&oacute; gi&aacute; trị về gỗ, c&oacute; t&aacute;c dụng ph&ograve;ng hộ, che phủ đất. L&aacute; đơn, ch&ugrave;m quả ra ở ch&acirc;n c&agrave;nh to v&agrave; cả tr&ecirc;n th&acirc;n. Quả c&acirc;y d&acirc;u da d&ugrave;ng để ăn tươi, quả được b&aacute;n tr&ecirc;n thị trường như một loại tr&aacute;i c&acirc;y đặc sản v&ugrave;ng rừng n&uacute;i đang được mọi người ưa th&iacute;ch. Đặc biệt, quả c&acirc;y d&acirc;u da c&oacute; m&agrave;u đỏ tươi rất đẹp v&agrave; được nhiều hộ gia đ&igrave;nh trưng b&agrave;y tr&ecirc;n m&acirc;m quả để thờ c&uacute;ng.</p>', 100, 150000, 12, 12, 26, 'cay-an-qua2.jpg', 1, 0, '2019-12-08 06:19:20', '2019-12-08 06:19:20'),
(38, 'Mít Ruột Đỏ', 'mit-ruot-do', '<p>Trồng từ 4 đến 6 th&aacute;ng đ&atilde; c&oacute; quả</p>', 100, 45000, 5, 12, 25, 'cay-an-qua3.jpg', 1, 0, '2019-12-08 06:22:04', '2019-12-08 06:22:04'),
(39, 'Mít Tố Nữ', 'mit-to-nu', '\r\n\r\nMít Tố nữ là giống mít ngon, là đặc sản của miền Nam. Trong ngành công nghiệp, gỗ mít là nguyên liệu để sản xuất bàn, ghế, tủ, đồ mỹ nghệ', 100, 38000, 15, 2147483647, 25, 'cay-an-qua4.jpg', 1, 0, '2019-12-08 06:23:30', '2019-12-08 06:23:30'),
(41, 'Cây Me Tây', 'cay-me-tay', '<p>C&acirc;y Me T&acirc;y d&ugrave;ng l&agrave;m c&acirc;y b&oacute;ng m&aacute;t, c&acirc;y cảnh quan rất tốt. C&acirc;y thường được trồng ở c&ocirc;ng vi&ecirc;n, khu d&acirc;n cư đ&ocirc; thị, trồng đường phố, trong c&aacute;c c&ocirc;ng tr&igrave;nh c&ocirc;ng cộng như bệnh viện, khu&ocirc;n vi&ecirc;n trường học, k&iacute; t&uacute;c x&aacute; hoặc trồng tạo b&oacute;ng m&aacute;t trong s&acirc;n vườn biệt thự,&hellip;</p>', 0, 3000000, 2, 14, 32, 'cay-cong-trinh.jpg', 1, 0, '2019-12-08 06:26:50', '2019-12-08 06:26:50'),
(42, 'Cây Phi Lao', 'cay-phi-lao', '<p>Trồng tạo cảnh quan khu&ocirc;n vi&ecirc;n s&acirc;n vườn, cảnh quan c&ocirc;ng vi&ecirc;n, c&ocirc;ng ty, đ&ocirc; thị , đường phố, &nbsp;ngo&agrave;i ra c&ograve;n l&agrave; c&acirc;y trồng v&agrave;nh đai ph&ograve;ng hộ, chắn gi&oacute;, giữ c&aacute;t ven biển, bảo vệ m&ocirc;i trường sinh</p>', 10, 450000, 0, 14, 32, 'cay-cong-trinh1.jpg', 1, 1, '2019-12-08 06:28:43', '2019-12-08 06:28:43'),
(43, 'Cây Huyết Dụ', 'cay-huyet-du', '<p>C&acirc;y huyết dụ l&agrave;&nbsp;c&acirc;y l&aacute; m&agrave;u&nbsp;với m&agrave;u sắc l&aacute; sặc sỡ thường được trồng bồn c&acirc;y, tạo thảm hay trồng dọc lối đi trang tr&iacute; cho khu&ocirc;n vi&ecirc;n nh&agrave; ở, trường học, c&ocirc;ng vi&ecirc;n, đường phố, c&ocirc;ng ty&hellip; C&acirc;y huyết dụ c&oacute; thể chịu b&oacute;ng b&aacute;n phần n&ecirc;n cũng c&oacute; thể trồng chậu trang tr&iacute; nội thất nơi c&ocirc;ng sở, nh&agrave; ở.</p>', 100, 80000, 15, 14, 34, 'cay-cong-trinh2.jpg', 1, 0, '2019-12-08 06:30:09', '2019-12-08 06:30:09'),
(44, 'Cây Lá Trắng', 'cay-la-trang', '<p>C&acirc;y l&aacute; trắng hay c&ograve;n gọi l&agrave; c&acirc;y bạch trạng &ndash; một trong những&nbsp;c&acirc;y l&aacute; m&agrave;u&nbsp;khỏe, được sử dụng nhiều trong c&ocirc;ng tr&igrave;nh cảnh quan đ&ocirc; thị, chuy&ecirc;n trồng thảm, trồng nền, trồng bụi trong c&ocirc;ng vi&ecirc;n, vườn hoa, s&acirc;n vườn hoặc l&agrave; c&acirc;y trồng viền.</p>', 100, 15000, 20, 14, 34, 'cay-cong-trinh3.jpg', 1, 0, '2019-12-08 06:31:49', '2019-12-08 06:31:49'),
(45, 'Cây Ô Gô Gân Đỏ', 'cay-o-go-gan-do', '<p>C&acirc;y &ocirc; g&ocirc; g&acirc;n đỏ cũng giống như&nbsp;c&acirc;y &ocirc; g&ocirc; g&acirc;n v&agrave;ng&nbsp;thường được d&ugrave;ng l&agrave;m&nbsp;c&acirc;y trồng viền, tạo nền hay trồng dọc lối đi trang tr&iacute; cho khu&ocirc;n vi&ecirc;n, trường học, c&ocirc;ng vi&ecirc;n, đường phố&hellip; C&acirc;y &ocirc; g&ocirc; g&acirc;n đỏ trong cảnh quan c&ograve;n được trồng bụi hay kh&oacute;m c&acirc;y l&agrave;m điểm nhấn cho&nbsp;s&acirc;n vườn. C&acirc;y &ocirc; g&ocirc; g&acirc;n đỏ cũng c&oacute; thể trồng trong chậu đất đặt văn ph&ograve;ng, nh&agrave; ở cho kh&ocirc;ng gian th&ecirc;m ấm c&uacute;ng v&agrave; tươi m&aacute;t.</p>', 100, 17000, 3, 14, 33, 'cay-cong-trinh4.jpg', 1, 0, '2019-12-08 06:33:50', '2019-12-08 06:33:50'),
(46, 'Cây Cao Su', 'cay-cao-su', '<p>Ở nước ta, c&acirc;y cao su nhập v&agrave;o trồng đầu ti&ecirc;n ở Ph&uacute; Nhuận Gia Định 1897. Sau đ&oacute; được ph&aacute;t trIển nhiều ở Nam bộ rồi lan rộng ta Bắc Bộ. C&acirc;y cao su ở nước ta c&oacute; rất nhiều triển vọng mở rộng diện t&iacute;ch v&agrave; tăng sản lượng nhất l&agrave; ở v&ugrave;ng T&acirc;y Nguy&ecirc;n</p>', 100, 23000, 4, 15, 35, 'cay-cong-nghiep.jpg', 1, 1, '2019-12-08 06:37:09', '2019-12-08 06:37:09'),
(47, 'Cây Cà Phê', 'cay-ca-phe', '<p>C&agrave; ph&ecirc; được người Ph&aacute;p đưa v&agrave;o trồng ở Việt Nam ch&iacute;nh thức từ năm 1857, từ đảo Martinique v&agrave; v&ugrave;ng Guyane thuộc Ph&aacute;p ở ch&acirc;u Mỹ Latin v&igrave; c&oacute; kh&iacute; hậu v&agrave; thổ nhưỡng nhiệt đới tương tự Việt Nam</p>', 100, 18000, 3, 15, 35, 'cay-cong-nghiep1.jpg', 1, 0, '2019-12-08 06:38:17', '2019-12-08 06:38:17'),
(48, 'Cây Cát Sâm', 'cay-cat-sam', '<p>C&acirc;y ưa s&aacute;ng v&agrave; hơi chịu b&oacute;ng khi c&ograve;n nhỏ. Thường &nbsp;leo tr&ugrave;m l&ecirc;n những c&acirc;y bụi v&agrave; c&acirc;y gỗ nhỏ ở ven rừng, rừng thứ sinh, nhất l&agrave; rừng n&uacute;i đ&aacute; v&ocirc;i, độ cao dưới 1.000m. Sinh trưởng mạnh trong m&ugrave;a xu&acirc;n, h&egrave;. Ra hoa th&aacute;ng 4 &ndash; 5, quả gi&agrave; th&aacute;ng 9 &ndash; 10. T&aacute;i sinh tự nhi&ecirc;n chủ yếu bằng hạt v&agrave; t&aacute;i sinh chồi sau khi bị chặt.</p>', 100, 13000, 12, 17, 37, 'duoc-lieu.jpg', 1, 0, '2019-12-08 06:40:29', '2019-12-08 06:40:29'),
(49, 'Hà Thủ Ô Đỏ', 'ha-thu-o-do', '<p>H&agrave; thủ &ocirc; đỏ l&agrave; một loại th&acirc;n leo, sống nhiều năm. L&aacute; mọc so le c&oacute; cuống d&agrave;i, phiến l&aacute; h&igrave;nh tim hẹp, d&agrave;i 5 &ndash; 8 cm, rộng 2 &ndash; 5 cm, cả hai mặt đều nhẵn, th&acirc;n, c&agrave;nh, cuống l&aacute;&nbsp; m&agrave;u đỏ t&iacute;m. Hoa nhỏ, đường k&iacute;nh khoảng 2 mm, c&oacute; cuống ngắn tư 1 &ndash; 3 mm. Hoa mọc th&agrave;nh ch&ugrave;m nhiều nh&aacute;nh, c&aacute;nh hoa m&agrave;u trắng, nhị t&aacute;m với ba nhị hơi d&agrave;i hơn. Bầu h&igrave;nh ba cạnh, voi nhụy ngắn gồm ba c&aacute;i r&ograve;i nhau,n&uacute;m h&igrave;nh m&agrave;o g&agrave;, rủ xuống.</p>', 100, 3500, 2, 17, 37, 'duoc-lieu1.jpg', 1, 0, '2019-12-08 06:41:49', '2019-12-08 06:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCategory` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `idCategory`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(23, 12, 'Cây Có Múi', 'cay-co-mui', 1, '2019-12-06 19:36:38', '2019-12-06 19:36:38'),
(24, 12, 'Giống Cây Chuối', 'giong-cay-chuoi', 1, '2019-12-06 19:37:36', '2019-12-06 19:37:36'),
(25, 12, 'Giống Cây Mít', 'giong-cay-mit', 1, '2019-12-06 19:37:56', '2019-12-06 19:37:56'),
(26, 12, 'Giống Cây Khác', 'giong-cay-khac', 1, '2019-12-06 19:38:10', '2019-12-06 19:38:10'),
(27, 13, 'Cây Để Bàn', 'cay-de-ban', 1, '2019-12-06 19:38:49', '2019-12-06 19:38:49'),
(28, 13, 'Cây Trồng Trong Nước', 'cay-trong-trong-nuoc', 1, '2019-12-06 19:42:27', '2019-12-06 19:42:27'),
(29, 13, 'Cây Chậu Treo', 'cay-chau-treo', 1, '2019-12-06 19:43:11', '2019-12-06 19:43:11'),
(30, 16, 'Dụng Cụ Làm Vườn', 'dung-cu-lam-vuon', 1, '2019-12-06 19:44:33', '2019-12-06 19:44:33'),
(31, 16, 'Phân Bón', 'phan-bon', 1, '2019-12-06 19:44:46', '2019-12-06 19:44:46'),
(32, 14, 'Cây Xanh Đô Thị', 'cay-xanh-do-thi', 1, '2019-12-06 19:45:20', '2019-12-06 19:45:20'),
(33, 14, 'Trồng Viền - Trồng Nền', 'trong-vien-trong-nen', 1, '2019-12-06 19:45:32', '2019-12-06 19:45:32'),
(34, 14, 'Cây Lá Màu', 'cay-la-mau', 1, '2019-12-06 19:45:53', '2019-12-06 19:45:53'),
(35, 15, 'Cây Lâu Năm', 'cay-lau-nam', 1, '2019-12-06 19:46:06', '2019-12-06 19:46:06'),
(36, 15, 'Cây Ngắn Ngày', 'cay-ngan-ngay', 1, '2019-12-06 19:46:17', '2019-12-06 19:46:17'),
(37, 17, 'Dược Liệu', 'duoc-lieu', 1, '2019-12-06 19:46:26', '2019-12-06 19:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `social_id`, `avatar`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thanhtuoi Pham', 'dongsongkiniem95@gmail.com', '$2y$10$2gu.jgfXpSSkOaIVGcYAluXO0o1rTxGzMMiJydyRAjXp71aJrFaqK', '2508259572794728', 'https://graph.facebook.com/v3.3/2508259572794728/picture?type=normal', 3, 0, NULL, 'UpDamefd1xXKG4pw95Kz4TujI8cnK0pXQG3xMdmVOXwzpGaxU84vvDgSVMU6', '2019-12-05 01:59:21', '2019-12-05 02:30:51'),
(5, 'Admin', 'vuoncayviet2019.vn@gmail.com', '$2y$10$n2zZcrZCKCqK.npgHWtlkuwy89WOVOEA/rghpheLtkDnChD2RqEu2', NULL, 'img\\upload\\product\\image-logo\\logo.gif\r\n', 1, 0, NULL, 'gAvQsSBcVsxL9Ky56cekRjUEoyQiP9Dlf3ECVV0R1nfDM1ogNdLSFuC0hDut', '2019-12-06 04:30:49', '2019-12-12 05:28:17'),
(8, 'Mai Nhớ', 'mainhomiss30@gmail.com', '$2y$10$WlzrOnOqRw72jk96EflJ1uTxG.kONlN6MGzrS5N6qFzs6238POYUu', NULL, NULL, 0, 0, NULL, 'guz3jHCDTW4N8QoybfEhrxoN5A4kzs7bRtTI4ZGx05nY9dcbo8afP3fXLs5w', '2019-12-09 05:27:02', '2019-12-09 05:27:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
