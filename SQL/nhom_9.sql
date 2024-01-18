-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 18, 2024 lúc 09:14 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom_9`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address_delivery`
--

CREATE TABLE `address_delivery` (
  `id_address_delivery` int(11) NOT NULL,
  `address_delivery` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `total_name_product` varchar(500) NOT NULL,
  `name_receiver` varchar(255) DEFAULT NULL,
  `address_delivery` varchar(255) DEFAULT NULL,
  `phone_numnber` varchar(255) DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `method` varchar(225) NOT NULL,
  `total_price` float NOT NULL,
  `sub_total` float NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 0,
  `state` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_user`, `total_name_product`, `name_receiver`, `address_delivery`, `phone_numnber`, `email`, `method`, `total_price`, `sub_total`, `date_created`, `status`, `state`) VALUES
(206, 28, 'Pizza Ý (3)(Trà Tắc Nha Đam), Khoai Tây Chiên (3)(Coca-Cola)', 'Cao Đình Kiên', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'caokien2004@gmail.com', 'Tiền mặt', 114400, 104400, '2023-12-11 16:44:55', 1, 1),
(207, 28, 'Khoai Tây Chiên (3)(Trà Tắc Nha Đam)', 'Cao Đình Kiên', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'caokien2004@gmail.com', 'Tiền mặt', 58000, 48000, '2023-12-11 16:48:56', 1, 1),
(208, 28, 'Humberger (3)(Không)', 'Cao Đình Kiên', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'caokien2004@gmail.com', 'Tiền mặt', 55900, 45900, '2023-12-11 16:31:27', 1, 1),
(209, 22, 'Pizza Ý (4)(Trà Tắc Nha Đam), Humberger (3)(Coca-Cola), Bánh Quy Danis (2)(Pepsi)', 'Phạm Văn Hòa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamhoa1902@gmail.com', 'Tiền mặt', 178300, 168300, '2023-12-09 16:26:59', 0, 0),
(210, 22, 'Humberger (3)(Trà Tắc Nha Đam)', 'Phạm Văn Hòa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamhoa1902@gmail.com', 'Tiền mặt', 76000, 66000, '2023-12-09 16:27:38', 0, 0),
(211, 22, 'Bánh Quy Danis (1)(Pepsi)', 'Phạm Văn Hòa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamhoa1902@gmail.com', 'Tiền mặt', 31000, 21000, '2023-12-09 16:28:08', 0, 0),
(212, 22, 'Cháo Cua (4)(Trà Tắc Nha Đam)', 'Phạm Văn Hòa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamhoa1902@gmail.com', 'Tiền mặt', 73900, 63900, '2023-12-09 16:28:47', 0, 0),
(213, 23, 'Phomai Tím (10)(Trà Tắc Nha Đam), Nui Xào (6)(Coca-Cola), Humberger (6)(Trà Tắc Nha Đam)', 'Vũ Thế Bình', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'vuthebinh2004@gmail.com', 'Tiền mặt', 408000, 398000, '2023-12-09 16:30:07', 0, 0),
(214, 24, 'Khoai Tây Chiên (2)(Pepsi), Humberger (3)(Không)', 'Lưu Bá Quỳnh', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'quynhlb2004@gmail.com', 'Tiền mặt', 92000, 82000, '2023-12-09 16:31:10', 0, 0),
(215, 24, 'Cháo Cua (3)(Trà Tắc Nha Đam), Nui Xào (4)(Pepsi)', 'Lưu Bá Quỳnh', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'quynhlb2004@gmail.com', 'Tiền mặt', 134200, 124200, '2023-12-09 16:31:49', 0, 0),
(216, 24, 'Humberger (4)(Trà Tắc Nha Đam), Bánh Quy Danis (2)(Pepsi), Pizza Ý (1)(Không)', 'Lưu Bá Quỳnh', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'quynhlb2004@gmail.com', 'Tiền mặt', 132400, 122400, '2023-12-09 16:32:32', 0, 0),
(217, 26, 'Pizza Ý (1)(Không), Khoai Tây Chiên (1)(Không), Humberger (1)(Không)', 'Ngô Đức Vỹ', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'ngoducvy192002@gmail.com', 'Tiền mặt', 58000, 48000, '2023-12-11 16:51:56', 1, 1),
(218, 26, 'Cháo Cua (1)(Không)', 'Ngô Đức Vỹ', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'ngoducvy192002@gmail.com', 'Tiền mặt', 24000, 14000, '2023-12-09 16:34:13', 0, 0),
(219, 26, 'Nui Xào (1)(Pepsi)', 'Ngô Đức Vỹ', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'ngoducvy192002@gmail.com', 'Tiền mặt', 37000, 27000, '2023-12-11 16:54:27', 1, 1),
(220, 26, 'Phomai Tím (1)(Không)', 'Ngô Đức Vỹ', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'ngoducvy192002@gmail.com', 'Tiền mặt', 25000, 15000, '2023-12-11 16:54:32', 1, 1),
(221, 27, 'Nui Xào (5)(Trà Tắc Nha Đam), Khoai Tây Chiên (4)(Pepsi)', 'Trần Văn Quốc', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'tranquoc2004@gmail.com', 'Tiền mặt', 152200, 142200, '2023-12-09 16:36:28', 0, 0),
(222, 27, 'Humberger (2)(Coca-Cola)', 'Trần Văn Quốc', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'tranquoc2004@gmail.com', 'Tiền mặt', 52000, 42000, '2023-12-12 11:59:47', 1, 0),
(223, 27, 'Khoai Tây Chiên (4)(Trà Tắc Nha Đam), Pizza Ý (3)(Coca-Cola), Bánh Quy Danis (2)(Coca-Cola)', 'Trần Văn Quốc', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'tranquoc2004@gmail.com', 'Tiền mặt', 169000, 159000, '2023-12-11 16:55:10', 1, 1),
(224, 28, 'Cháo Cua (3)(Trà Tắc Nha Đam)', 'Cao Đình Kiên', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'caokien2004@gmail.com', 'Tiền mặt', 61300, 51300, '2023-12-11 17:11:02', 0, 0),
(225, 21, 'Khoai Tây Chiên (4)(Trà Tắc Nha Đam)', 'Phạm Văn Nghĩa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 69000, 59000, '2023-12-12 11:50:07', 1, 1),
(226, 21, 'Bánh Quy Danis (4)(Trà Tắc Nha Đam), Khoai Tây Chiên (4)(Trà Tắc Nha Đam)', 'Phạm Văn Nghĩa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 132000, 122000, '2023-12-12 12:00:39', 1, 1),
(227, 21, 'Pizza Ý (5)(Trà Tắc Nha Đam)', 'Phạm Văn Nghĩa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 113500, 103500, '2023-12-12 12:18:14', 1, 1),
(228, 21, 'Pizza Ý (4)(Trà Tắc Nha Đam)', 'Phạm Văn Nghĩa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 95500, 85500, '2023-12-12 15:43:57', 0, 0),
(229, 36, 'Bánh Quy Danis (2)(Không), Pizza Ý (4)(Pepsi)', 'Phạm Văn Nghĩa', 'Phạm Văn Nghĩa', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 111700, 101700, '2023-12-13 00:37:48', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name_categories` varchar(225) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`, `date_created`) VALUES
(0, 'All', '2023-12-05 11:57:24'),
(1, 'Burger', '2023-11-15 01:54:04'),
(27, 'Pizza', '2023-11-16 02:19:11'),
(28, 'Pasta', '2023-11-16 09:26:58'),
(29, 'Fries', '2023-11-16 13:34:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorites_list`
--

CREATE TABLE `favorites_list` (
  `id_list` int(11) NOT NULL,
  `id_products` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `id_categories` int(11) DEFAULT NULL,
  `name_products` varchar(225) DEFAULT NULL,
  `images` varchar(225) DEFAULT NULL,
  `original_price` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_products`, `id_categories`, `name_products`, `images`, `original_price`, `date_created`, `description`) VALUES
(13, 29, 'Bánh Quy Danis', 'f1.png', 12000, '2023-12-05 11:46:33', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(14, 27, 'Pizza Ý', 'f6.png', 20000, '2023-12-05 11:46:46', 'Với sự sáng tạo trong từng chi tiết, chúng tôi tự hào là điểm đến lý tưởng cho những người yêu thưởng thức pizza tại thành phố'),
(15, 28, 'Phomai Tím', 'f3.png', 15000, '2023-12-05 11:47:10', 'Khám phá một thế giới của hương vị, từ lớp vỏ mỏng giòn đến nhân phô mai béo ngậy, tạo nên một bữa ăn ngon miệng và đầy đặn.'),
(16, 29, 'Nui Xào', 'f4.png', 18000, '2023-12-05 11:47:26', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(17, 1, 'Cháo Cua', 'f9.png', 14000, '2023-12-05 11:47:44', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(18, 29, 'Khoai Tây Chiên', 'f5.png', 11000, '2023-12-05 11:48:00', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(19, 1, 'Humberger', 'f2.png', 17000, '2023-12-05 11:48:15', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id_review`, `id_products`, `id_user`, `comment`, `rating`, `Created_at`) VALUES
(37, 13, 22, 'Sản phẩm ngon nên thử !!!', 4, '2023-12-09 15:44:36'),
(38, 18, 22, 'Sản phẩm rất ngon, chất lượng, giao hàng nhanh <3', 5, '2023-12-09 15:45:05'),
(39, 19, 22, 'Tôi đã ở Ý đc 2 năm và đã từng thử rất nhiều loại hamberger, và tôi rất thích vị này !! Tuyệt', 5, '2023-12-09 15:46:03'),
(40, 16, 22, 'Tôi đã thử món này rất nhiều nơi, nhưng chỗ này là tuyệt nhất ❤', 5, '2023-12-09 15:46:56'),
(43, 14, 22, 'Vị hơi mặn &#128512;', 3, '2023-12-09 15:49:57'),
(44, 17, 23, 'Cháo ngon thật sự, nên thử &#128151;', 5, '2023-12-09 15:52:19'),
(45, 13, 23, 'Bánh hơi khô, nhưng vị khá ngon !!!', 4, '2023-12-09 15:52:49'),
(46, 19, 23, 'Tôi thích phần thịt bò nó khá mềm, nói chung rất ngon &#128513;', 5, '2023-12-09 15:54:31'),
(48, 18, 23, 'Rất ngon nên thử !!!!', 5, '2023-12-09 15:57:00'),
(49, 15, 23, 'Nó khá khó ăn, không hợp với tôi &#128517;', 3, '2023-12-09 15:57:42'),
(50, 17, 24, 'Rất ngon, nó giúp tôi nhớ đến mẹ &#128151;', 5, '2023-12-09 15:58:44'),
(51, 19, 24, 'Bánh rất ngon, nhưng giao hàng hơi chậm &#128535;', 4, '2023-12-09 16:00:27'),
(52, 16, 24, 'Nó khá mềm, vị ngọt ,ăn rất tuyệt, nên thử &#128077;', 5, '2023-12-09 16:02:03'),
(53, 14, 24, 'Một từ thôi \"tuyệt\"  &#128525;', 5, '2023-12-09 16:03:00'),
(54, 18, 25, 'Ngon nhưng hơi nhiều dầu :(((', 4, '2023-12-09 16:03:45'),
(55, 13, 25, 'Bánh rất ngon nên thử &#128536;', 5, '2023-12-09 16:04:35'),
(56, 17, 25, 'Cháo hơi nhạt, không phù hợp với tôi :((', 3, '2023-12-09 16:05:09'),
(57, 19, 25, 'Ngon tuyệt !!!', 5, '2023-12-09 16:05:34'),
(58, 15, 25, 'Vị khá ngon, tôi rất thích &#129321;', 5, '2023-12-09 16:06:25'),
(60, 18, 26, 'Rất ngon, tôi rất thích &#129505;', 5, '2023-12-09 16:09:00'),
(61, 15, 26, 'Vị hơi lạ nhưng tôi rất thích !!!', 5, '2023-12-09 16:10:11'),
(62, 14, 26, 'Pizza ngon nên thử ', 5, '2023-12-09 16:10:42'),
(63, 13, 26, 'Tôi sẽ dùng bánh này để làm quà cho bạn bè &#127873;', 5, '2023-12-09 16:11:52'),
(64, 19, 26, 'Tuyệt vời!!!', 5, '2023-12-09 16:12:23'),
(65, 16, 27, 'Rất tuyệt, nên thử <3', 5, '2023-12-09 16:13:06'),
(66, 18, 27, 'Nó là món ăn ưa thích của tui &#128523;', 5, '2023-12-09 16:13:49'),
(67, 17, 27, 'Yeah! Tôi đã có 1 món ăn yê thích mới &#129325;', 5, '2023-12-09 16:14:47'),
(68, 19, 27, 'Quá ưng luôn, shop còn tặng kèm pepsi nữa &#129392;', 5, '2023-12-09 16:15:38'),
(69, 14, 27, 'Ngon hết nước chấm!!!', 5, '2023-12-09 16:16:02'),
(70, 15, 28, 'Không ngon, tôi không thích :((', 3, '2023-12-09 16:17:06'),
(71, 13, 28, 'Bánh khá ngon !!!!', 5, '2023-12-09 16:17:20'),
(72, 17, 28, 'Cháo ngon, nhưng hơi nhạt!!!', 4, '2023-12-09 16:17:41'),
(78, 14, 21, 'Tuyeejt vowfi', 4, '2023-12-13 00:46:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id_cart` int(11) NOT NULL,
  `id_products` int(11) DEFAULT NULL,
  `name_products` varchar(225) NOT NULL,
  `images` varchar(225) NOT NULL,
  `price_products` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` int(11) DEFAULT NULL,
  `name_topping` varchar(225) NOT NULL,
  `price_topping` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `shopping_cart`
--

INSERT INTO `shopping_cart` (`id_cart`, `id_products`, `name_products`, `images`, `price_products`, `date_created`, `quantity`, `name_topping`, `price_topping`, `id_user`, `total`) VALUES
(114, 18, 'Khoai Tây Chiên', 'f5.png', 11000, '2023-12-07 03:07:29', 5, 'Không', 0, 11, 55000),
(115, 15, 'Phomai Tím', 'f3.png', 15000, '2023-12-07 03:08:09', 5, 'Coca-Cola', 8000, 11, 83000),
(116, 16, 'Nui Xào', 'f4.png', 18000, '2023-12-07 03:09:50', 6, 'Trà Tắc Nha Đam', 15000, 11, 123000),
(117, 14, 'Pizza Ý', 'f6.png', 20000, '2023-12-11 17:16:59', 6, 'Không', 8000, 11, 120000),
(169, 14, 'Pizza Ý', 'f6.png', 20000, '2023-12-11 17:18:48', 5, 'Trà Tắc Nha Đam', 15000, 28, 115000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `id_statistical` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `revenue` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `statistical`
--

INSERT INTO `statistical` (`id_statistical`, `date_created`, `revenue`) VALUES
(74, '2023-10-01', 150000),
(75, '2023-10-01', 165621),
(76, '2023-10-02', 162258),
(77, '2023-10-03', 164426),
(78, '2023-10-04', 185356),
(79, '2023-10-05', 183504),
(80, '2023-10-06', 161448),
(81, '2023-10-07', 156732),
(82, '2023-10-08', 199316),
(83, '2023-10-09', 176382),
(84, '2023-10-10', 183961),
(85, '2023-10-11', 190660),
(86, '2023-10-12', 151417),
(87, '2023-10-13', 185108),
(88, '2023-10-14', 171285),
(89, '2023-10-15', 151104),
(90, '2023-10-16', 191668),
(91, '2023-10-17', 155022),
(92, '2023-10-18', 150108),
(93, '2023-10-19', 185475),
(94, '2023-10-20', 177050),
(95, '2023-10-21', 178824),
(96, '2023-10-22', 162969),
(97, '2023-10-23', 178376),
(98, '2023-10-24', 152972),
(99, '2023-10-25', 179734),
(100, '2023-10-26', 189751),
(101, '2023-10-27', 159553),
(102, '2023-10-28', 178514),
(103, '2023-10-29', 163909),
(104, '2023-10-30', 184007),
(105, '2023-10-31', 178303),
(106, '2023-11-01', 211984),
(107, '2023-11-02', 195696),
(108, '2023-11-03', 242526),
(109, '2023-11-04', 225540),
(110, '2023-11-05', 225122),
(111, '2023-11-06', 198992),
(112, '2023-11-07', 219593),
(113, '2023-11-08', 175988),
(114, '2023-11-09', 196165),
(115, '2023-11-10', 202859),
(116, '2023-11-11', 175800),
(117, '2023-11-12', 245428),
(118, '2023-11-13', 224733),
(119, '2023-11-14', 212381),
(120, '2023-11-15', 212708),
(121, '2023-11-16', 176397),
(122, '2023-11-17', 218861),
(123, '2023-11-18', 240114),
(124, '2023-11-19', 175000),
(125, '2023-11-20', 250000),
(126, '2023-11-21', 180000),
(127, '2023-11-22', 181000),
(128, '2023-11-23', 180000),
(129, '2023-11-24', 186000),
(130, '2023-11-25', 187000),
(131, '2023-11-26', 190000),
(132, '2023-11-27', 185000),
(133, '2023-11-28', 187000),
(134, '2023-11-29', 203935),
(135, '2023-11-30', 204548),
(199, '2023-12-01', 200000),
(200, '2023-12-02', 222685),
(201, '2023-12-03', 187748),
(202, '2023-12-04', 190689),
(203, '2023-12-05', 210199),
(204, '2023-12-06', 198926),
(205, '2023-12-07', 184034),
(206, '2023-12-08', 193395),
(207, '2023-12-09', 184870),
(208, '2023-12-10', 214167),
(209, '2023-12-11', 186224),
(210, '2023-12-12', 549622),
(211, '2023-12-13', 316137),
(212, '2023-12-14', 194000),
(213, '2023-12-15', 186000),
(214, '2023-12-16', 189000),
(215, '2023-12-17', 195000),
(216, '2023-12-18', 195000),
(217, '2023-12-19', 195000),
(218, '2023-12-20', 199000),
(219, '2023-12-21', 200000),
(220, '2023-12-22', 245000),
(221, '2023-12-23', 245000),
(222, '2023-12-24', 300000),
(223, '2023-12-25', 290000),
(224, '2023-12-26', 270000),
(225, '2023-12-27', 240000),
(226, '2023-12-28', 286000),
(227, '2023-12-29', 280000),
(228, '2023-12-30', 290000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topping`
--

CREATE TABLE `topping` (
  `id_topping` int(11) NOT NULL,
  `name_topping` varchar(225) DEFAULT NULL,
  `price_topping` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `topping`
--

INSERT INTO `topping` (`id_topping`, `name_topping`, `price_topping`) VALUES
(1, 'Coca-Cola', 8000),
(2, 'Pepsi', 9000),
(3, 'Trà Tắc Nha Đam', 15000),
(10, 'Không', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `full_name` varchar(225) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `full_name`, `date_created`, `role`) VALUES
(21, 'phamnghia19022002@gmail.com', 'nghiapham123', 'Phạm Văn Nghĩa', '2023-12-09 15:13:53', 1),
(22, 'phamhoa1902@gmail.com', 'nghiapham123', 'Phạm Hòa', '2023-12-12 11:55:10', 1),
(23, 'vuthebinh2004@gmail.com', 'nghiapham123', 'Vũ Thế Bình', '2023-12-09 15:38:51', 0),
(24, 'quynhlb2004@gmail.com', 'nghiapham123', 'Lưu Bá Quỳnh', '2023-12-09 15:42:52', 0),
(25, 'phamdangluu2004@gmail.com', 'nghiapham123', 'Phạm Đăng Lưu', '2023-12-09 15:42:52', 0),
(26, 'ngoducvy192002@gmail.com', 'nghiapham123', 'Ngô Đức Vỹ', '2023-12-09 15:42:52', 0),
(27, 'trangquoc2004@gmail.com', 'nghiapham123', 'Trần Văn Quốc', '2023-12-09 15:42:52', 0),
(28, 'caokien2003@gmail.com', 'nghiapham123', 'Cao Kiên', '2023-12-09 15:42:52', 0),
(29, 'hungtran2301@gmail.com', 'nghiapham123', 'Nguyễn Văn Hùng', '2023-12-09 15:42:52', 0),
(36, 'nghia@gmail.com', 'nghiapham123', 'Dũng', '2023-12-13 00:29:31', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address_delivery`
--
ALTER TABLE `address_delivery`
  ADD PRIMARY KEY (`id_address_delivery`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Chỉ mục cho bảng `favorites_list`
--
ALTER TABLE `favorites_list`
  ADD PRIMARY KEY (`id_list`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`),
  ADD KEY `products_ibfk_1` (`id_categories`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- Chỉ mục cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `statistical`
--
ALTER TABLE `statistical`
  ADD PRIMARY KEY (`id_statistical`);

--
-- Chỉ mục cho bảng `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`id_topping`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address_delivery`
--
ALTER TABLE `address_delivery`
  MODIFY `id_address_delivery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `favorites_list`
--
ALTER TABLE `favorites_list`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT cho bảng `statistical`
--
ALTER TABLE `statistical`
  MODIFY `id_statistical` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300002;

--
-- AUTO_INCREMENT cho bảng `topping`
--
ALTER TABLE `topping`
  MODIFY `id_topping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
