-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 03:49 PM
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
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_user`, `total_name_product`, `name_receiver`, `address_delivery`, `phone_numnber`, `email`, `method`, `total_price`, `sub_total`, `date_created`, `status`) VALUES
(101, 15, 'Delicious Pizza (5)(Trà Tắc Nha Đam)', 'Phạm Văn Nghĩa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 100.9, 90.9, '2023-11-27 01:38:22', 0),
(102, 15, 'Delicious Pizza (5)(Trà Tắc Nha Đam)', 'Phạm Văn Nghĩa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 100.9, 90.9, '2023-11-27 01:39:04', 0),
(103, 12, 'Delicious Pizza (4)(Trà Tắc Nha Đam), Delicious Pizza (4)(Trà Tắc Nha Đam), French Fries (5)(Trà Tắc Nha Đam)', 'Phạm Văn Nghĩa', '4/134/22 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội', '0869293248', 'phamnghia19022002@gmail.com', 'Tiền mặt', 213.4, 203.4, '2023-11-28 14:43:36', 0);

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
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id_comments` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content_comment` varchar(225) DEFAULT NULL,
  `status_comment` tinyint(4) DEFAULT NULL,
  `date_feedback` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
(13, 27, 'Delicious Pizza', 'f1.png', 20, '2023-11-22 09:19:17', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(14, 27, 'Delicious Pizza', 'f6.png', 17, '2023-11-16 11:14:49', 'Với sự sáng tạo trong từng chi tiết, chúng tôi tự hào là điểm đến lý tưởng cho những người yêu thưởng thức pizza tại thành phố'),
(15, 1, 'Delicious Pizza', 'f3.png', 15, '2023-11-16 14:09:52', 'Khám phá một thế giới của hương vị, từ lớp vỏ mỏng giòn đến nhân phô mai béo ngậy, tạo nên một bữa ăn ngon miệng và đầy đặn.'),
(16, 1, 'Delicious Pizza', 'f4.png', 18, '2023-11-16 14:10:33', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(17, 1, 'Delicious Pizza', 'f9.png', 10, '2023-11-16 14:09:46', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(18, 29, 'French Fries', 'f5.png', 10, '2023-11-16 15:33:59', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.'),
(19, 1, 'Delicious Burger', 'f2.png', 15, '2023-11-16 14:09:12', 'Nơi kết hợp hương vị tinh tế với nguyên liệu chất lượng, mang đến trải nghiệm ẩm thực độc đáo và phong cách.');

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
  `id_user` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `shopping_cart`
--

INSERT INTO `shopping_cart` (`id_cart`, `id_products`, `name_products`, `images`, `price_products`, `date_created`, `quantity`, `name_topping`, `id_user`, `total`) VALUES
(89, 14, 'Delicious Pizza', 'f6.png', 17, '2023-11-27 00:30:05', 5, 'Không', 11, 85),
(90, 15, 'Delicious Pizza', 'f3.png', 15, '2023-11-26 17:30:35', 2, 'Pepsi', 11, 43),
(93, 14, 'Delicious Pizza', 'f6.png', 17, '2023-11-27 01:00:36', 4, 'Trà Tắc Nha Đam', 12, 84),
(94, 15, 'Delicious Pizza', 'f3.png', 15, '2023-11-27 01:00:44', 4, 'Trà Tắc Nha Đam', 12, 76),
(95, 18, 'French Fries', 'f5.png', 10, '2023-11-27 01:01:54', 5, 'Trà Tắc Nha Đam', 12, 66),
(96, 14, 'Delicious Pizza', 'f6.png', 17, '2023-11-27 01:38:00', 5, 'Trà Tắc Nha Đam', 15, 101),
(97, 15, 'Delicious Pizza', 'f3.png', 15, '2023-11-27 01:57:21', 4, 'Trà Tắc Nha Đam', 15, 76);

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
(1, 'Coca-Cola', 17),
(2, 'Pepsi', 13),
(3, 'Trà Tắc Nha Đam', 16),
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
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `full_name`, `role`) VALUES
(11, 'nghiapvph42857@fpt.edu.vn', 'nghiapham123', 'Nghĩa', 0),
(12, 'phamnghia19022002@gmail.com', 'nghiapham123$', 'Phạm Văn Nghĩa', 0),
(15, 'phamnghia123@gmail.com', 'nghiapham123', 'Phạm Văn Nghĩa', 0);

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
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_comments`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`),
  ADD KEY `products_ibfk_1` (`id_categories`);

--
-- Chỉ mục cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id_cart`);

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
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `favorites_list`
--
ALTER TABLE `favorites_list`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT cho bảng `topping`
--
ALTER TABLE `topping`
  MODIFY `id_topping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
