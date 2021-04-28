-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 02:20 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imagepath` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `type`, `product_id`, `product_name`, `description`, `imagepath`, `price`, `quantity`, `action`) VALUES
(1, 1, 'Earrings', 5, 'Blue Earrings', 'Elegant blue jhumkas, suitable for ethnic wear. Made with silk threads and kundan beads. ', './images/bluejhumkas.jpg', 150, 1, 'ordered'),
(2, 1, 'Jewelleryset', 6, 'Black Jewellery Set', '', './images/blackjewelleryset.jpg', 850, 1, 'cart'),
(3, 1, 'Earrings', 5, 'Blue Earrings', '', './images/bluejhumkas.jpg', 150, 1, 'cart'),
(4, 1, 'Bangles', 9, 'Blue Bangles', 'Blue bangles: Bangles - An imperative adornment for the frivolity of ladies in Indian culture. The bangles moulded by â€˜Handmade with loveâ€™ are the mind-blowing combination of value and esteem. A perfect match for your every attire. Superior quality of silk threads and beads used for this lively piece of jewellery.', './images/bluebangles.jpg', 500, 1, 'cart'),
(5, 1, 'Earrings', 32, 'Pink Earrings', 'Pink earrings: These pink jhumkas are decent and suitable with most of the ethnic outfits. White pearls are used in the making of this piece. Handmade with love and best quality silk threads to ensure you get the best always!\r\n', './images/pinkearrings.jpg', 100, 1, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `RoomNo` varchar(50) NOT NULL,
  `Appartment` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `PaymentMethod` varchar(30) DEFAULT NULL,
  `Razorid` varchar(255) NOT NULL,
  `OrderAmount` bigint(50) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `imgpath` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `OrderTimeAndDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `RoomNo`, `Appartment`, `city`, `pincode`, `PaymentMethod`, `Razorid`, `OrderAmount`, `quantity`, `imgpath`, `price`, `pname`, `OrderTimeAndDate`) VALUES
(485594, 1, 'D-4,3/3', 'Varuna,sector-6', 'Vadodara', 400777, 'RazorPay', '', 150, 1, './images/bluejhumkas.jpg', 150, 'Blue Earrings', '2019-10-13 07:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(20) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_amount` int(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `imagepath` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_amount`, `type`, `imagepath`, `description`) VALUES
(2, 'Bangles', 500, 'Bangles', './images/bangles.jpg', 'A bangle set made of silk threads. We are offering our customers a wide range of Silk Thread bangle Jewelry, which are available in various sizes and specifications.'),
(5, 'Blue Earrings', 150, 'Earrings', './images/bluejhumkas.jpg', 'Blue jhumkas : Jhumkas are the first love of any women. They go with every outfit flawlessly. These blue jhumkas brought to you by ‘Handmade with love’ are made with best quality silk threads and the beads and pearls embellished are skin-friendly. Wear it with your ethnic dresses, western dresses, party wear outfits and you’ll definitely turn some heads!\r\n'),
(6, 'Black Jewellery Set', 850, 'Jewelleryset', './images/blackjewelleryset.jpg', 'Black jewellery set: This black jewellery set is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a neck piece, a pair of earrings and a bangle (kada). Wear them with any of your traditional and scintillating outfits for the festivals, weddings and parties.\r\n'),
(7, 'Black-Pink Necklace', 600, 'Necklace', './images/blackpinknecklace.jpg', 'Black pink necklace: This piece is handmade with love and great quality silk threads. This exquisite & elegant necklace set gives a modern fancy look to you or your ensembles pair. One of the unique feature of this necklace is that it is embellished with pearls for a classy look.\r\n'),
(8, 'Black-While Necklace', 500, 'Necklace', './images/blackwhitenecklace.jpeg', 'Black white necklace: Handmade with love and best quality silk threads. The black and white combination of the necklace is what makes it unique and eye-catchy. Suitable for females of every age. Goes best with traditional attires.\r\n'),
(9, 'Blue Bangles', 500, 'Bangles', './images/bluebangles.jpg', 'Blue bangles: Bangles - An imperative adornment for the frivolity of ladies in Indian culture. The bangles moulded by â€˜Handmade with loveâ€™ are the mind-blowing combination of value and esteem. A perfect match for your every attire. Superior quality of silk threads and beads used for this lively piece of jewellery.'),
(10, 'Blue Earrings', 300, 'Earrings', './images/blueearrings.jpg', 'Blue earrings: These blue thread jhumkas â€˜Handmade with loveâ€™ are made using best quality silk threads and are 100% skin-friendly. Embellished with beads, pearls and diamonds, this piece can go effortlessly with ethnic wear.\r\n'),
(11, 'Blue-Gold Bangles', 400, 'Bangles', './images/bluegoldenbangles.jpeg', 'Blue golden bangles: Thread bangle set brought to you by â€˜Handmade with loveâ€™ is made using superior quality silk threads and metal bangles which are non-allergic and suitable for any skin types. The golden beads on these bangles gives them a shiny look. Can be used for daily wear.\r\n'),
(12, 'Blue Jewellery Set', 530, 'Jewelleryset', './images/bluejewelleryset.jpg', 'Blue jewellery set: This jewellery set is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a neck piece and a pair of earrings. Wear them with any of your traditional and scintillating outfits for the festivals, weddings and parties. \r\n'),
(13, 'Blue-White Jewellery Set', 700, 'Jewelleryset', './images/bluewhitejewelleryset.jpg', 'Blue white jewellery set: This statement jewellery set brought to you by â€˜Handmade with loveâ€™ contains a neck piece, a pair of earrings and 2 bangles which gives a complete look to your outfit. Goes best with sarees. It is made using great quality silk threads and all the beads used are non-allergic.\r\n'),
(14, 'Blue-Yellow Bangles', 300, 'Bangles', './images/blueyellowbangles.jpg', 'Blue yellow bangles: The set of bangles comes with a pair of earrings to spice up your outfits. Handmade with love, this piece is made using best quality silk threads and embroidered embellishments. Can be used with any outfits including ethnic, traditional and western.'),
(15, 'Brown Bangles', 200, 'Bangles', './images/brownbangles.jpg', 'Brown bangles: Thread bangle set brought to you by â€˜Handmade with loveâ€™ is made using superior quality silk threads and metal bangles which are non-allergic and suitable for any skin types. The pearls and golden beads on these bangles gives them a shiny look that looks good with almost every outfit. Can be used for daily wear.\r\n'),
(16, 'Golden Earrings', 300, 'Earrings', './images/goldenearrings.jpg', 'Golden earrings: Chandbalis give a traditional look to your ethnic outfits. These golden Chandbalis embellished with high quality beads and pearls are brought to you by â€˜Handmade with loveâ€™. Can be wore along with traditional outfits.\r\n'),
(17, 'Golden Jewellery Set', 450, 'Jewelleryset', './images/goldenjewelleryset.jpg', 'Golden jewellery set: This jewellery set is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a neck piece, a pair of earrings and a bangle (kada). Wear them with any of your traditional and scintillating outfits for the festivals, weddings and parties. The golden colour gives an added advantage that it will go with most of your traditional outfits.\r\n'),
(18, 'Green Earrings', 80, 'Earrings', './images/greenearrings.jpg', 'Green earrings: These cute tiny earrings can be used by females of any age. These are very light-weight and easy to carry. Handmade with love, these are made using high quality silk threads.\r\n'),
(19, 'Green-Golden Bangles', 680, 'Bangles', './images/greengoldenbangles.jpg', 'Green golden bangles: The set of bangles with a golden hue makes them unique. Handmade with love, this piece is made using best quality silk threads and beads. Can be used with any outfits including ethnic, traditional and western. Can be used to wear daily.\r\n'),
(20, 'Green Jewellery Set', 900, 'Jewelleryset', './images/greenjewelleryset.jpg', 'Green jewellery set: This jewellery set is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a neck piece, a pair of earrings and a bangle set to give a complete look. Wear them with any of your traditional or ethnic outfits for special occasions.\r\n'),
(21, 'Green Necklace', 350, 'Necklace', './images/greennecklace.jpg', 'Green necklace: Handmade with love and best quality silk threads. The green and golden combination of the necklace is what makes it unique and eye-catchy. Golden pearls are used for making this fabulous piece. Goes best with traditional attires.'),
(22, 'Grey Bangles', 250, 'Bangles', './images/greybangles.jpg', 'Grey bangles: Bangles - An imperative adornment for the frivolity of ladies in Indian culture. The grey bangles moulded by â€˜Handmade with loveâ€™ are the mind-blowing combination of value and esteem. A perfect match for your every attire. Superior quality of silk threads and beads used for this lively piece of jewellery. Comes with a pair of beautiful earrings.\r\n'),
(23, 'Grey Earrings', 150, 'Earrings', './images/greyearrings.jpg', 'Grey earring: Jhumkas are the first love of any women. They go with every outfit flawlessly. These grey jhumkas brought to you by â€˜Handmade with loveâ€™ are made with best quality silk threads and the pearls embellished are skin-friendly. Wear it with your ethnic dresses, western dresses, party wear outfits and youâ€™ll definitely turn some heads! Can be used to wear daily.\r\n'),
(24, 'Green Jewellery Set', 450, 'Jewelleryset', './images/lightgreenjewelleryset.jpg', 'Light green jewellery set: This jewellery set is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a statement neck piece, a pair of earrings and a bangle set to give a complete look. Wear them with any of your traditional or ethnic outfits for special occasions.\r\n'),
(25, 'Multicolour Necklace', 200, 'Necklace', './images/multicolournecklace.jpg', 'Multicolour necklace: This piece is handmade with love and great quality silk threads. This exquisite & elegant necklace set gives a modern fancy look to you or your ensembles pair. One of the unique feature of this necklace is that it is multicoloured so it can be used on different number of outfits!\r\n'),
(26, 'Green Jewellery Set', 300, 'Jewelleryset', './images/neongreenjewelleryset.jpg', 'Neon green jewellery set: This decent piece is brought to you by â€˜Handmade with loveâ€™ and is made using best quality silk threads. The earrings included with this are chandbalis. Chandbalis give a traditional look to your ethnic outfits.\r\n'),
(27, 'Orange Jhumkas', 200, 'Earrings', './images/orangeearrings.jpg', 'Orange earrings: Jhumkas are the first love of any women. They go with every outfit flawlessly. These orange jhumkas brought to you by â€˜Handmade with loveâ€™ are made with best quality silk threads and the beads and pearls embellished are skin-friendly. Wear it with your ethnic dresses, western dresses, party wear outfits and youâ€™ll definitely turn some heads!\r\n'),
(28, 'Orange Jewellery Set', 350, 'Jewelleryset', './images/orangejewelleryset.jpeg', 'Orange jewellery set: This orange jewellery set is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a neck piece, a pair of earrings and a pair of bangles. Wear them with any of your traditional outfits for the festivals, weddings and parties or any special occasions to make sure you stand out!\r\n'),
(29, 'Lotus Earrings', 200, 'Earrings', './images/orangelotusearrings.jpg', 'Orange lotus earrings: Lotus earrings are the new trend. These orange jhumkas are handmade with love and best quality silk threads to ensure you get the best always! Goes best with ethnic outfits.\r\n'),
(30, 'Orange Necklace', 350, 'Necklace', './images/orangenecklace.jpg', 'Orange necklace: Handmade with love and best quality silk threads. The orange and golden combination of the necklace is what makes it unique and eye-catchy. Golden pearls are used for making this fabulous piece. The earrings that comes with this necklace are jhumkas. Goes best with traditional attires.\r\n'),
(31, 'Pink Bangles', 150, 'Bangles', './images/pinkbangles.jpg', 'Pink bangles: Bangles - An imperative adornment for the frivolity of ladies in Indian culture. The bangles moulded by â€˜Handmade with loveâ€™ are the mind-blowing combination of value and esteem. A perfect match for your every attire. Comes with a pair of earrings to give a complete look to your outfits. Superior quality of silk threads and beads used for this lively piece of jewellery.\r\n'),
(32, 'Pink Earrings', 100, 'Earrings', './images/pinkearrings.jpg', 'Pink earrings: These pink jhumkas are decent and suitable with most of the ethnic outfits. White pearls are used in the making of this piece. Handmade with love and best quality silk threads to ensure you get the best always!\r\n'),
(33, 'Pink-Green Bangles', 250, 'Bangles', './images/pinkgreenbangles.jpg', 'Pink green bangles: Bangles - An imperative adornment for the frivolity of ladies in Indian culture. The bangles moulded by â€˜Handmade with loveâ€™ are the mind-blowing combination of value and esteem. A perfect match for your every attire. Superior quality of silk threads and beads used for this lively piece of jewellery.\r\n'),
(34, 'Pink Jewellery Set', 200, 'Jewelleryset', './images/pinkjewelleryset2.jpg', 'Pink jewellery set: This jewellery set is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a statement neck piece, a pair of earrings and a set of bangles to give a complete look. Wear them with any of your traditional or ethnic outfits for special occasions.'),
(35, 'Pink Necklace', 230, 'Necklace', './images/pinknecklace.jpg', 'Pink necklace: Handmade with love and best quality silk threads. The pink and golden combination of the necklace is what makes it unique and eye-catchy. Golden pearls are used for making this fabulous piece. Goes best with traditional attires.\r\n'),
(36, 'Pink Jhumkas', 250, 'Earrings', './images/pinkpearlearrings.jpeg', 'Pink pearl earrings: Pink and pearl go together! This beautiful pair of earrings is handmade with love and best quality silk threads. Pearls and beads used are 100% non-allergic. Goes best with ethnic and traditional outfits.\r\n'),
(37, 'Pink Necklace', 280, 'Jewelleryset', './images/pinkpearlnecklace.jpg', 'Pink pearl necklace: Pink and pearl go together! This piece is handmade with love and great quality silk threads. This exquisite & elegant necklace gives a modern fancy look to you or your ensembles pair. \r\n'),
(38, 'Pink-White Necklace', 200, 'Necklace', './images/pinkwhitenecklace.jpg', 'Pink white necklace: This is a statement piece of necklace brought to you by â€˜Handmade with loveâ€™ is designed using best quality silk threads and embellishments. Looks fabulous with sarees.\r\n'),
(39, 'Purple Jhumkas', 280, 'Earrings', './images/purpleearrings.jpg', 'Purple earrings: Purple is such an evergreen colour. This beautiful pair of earrings is handmade with love and best quality silk threads. Pearls and beads used are 100% non-allergic. Goes best with ethnic and traditional outfits.\r\n'),
(40, 'Red Bangles', 650, 'Bangles', './images/redbangles.jpg', 'Red bangles: Bangles - An imperative adornment for the frivolity of ladies in Indian culture. Red colour is considered to be a colour of energy. The bangles moulded by â€˜Handmade with loveâ€™ are the mind-blowing combination of value and esteem. A perfect match for your every attire. Superior quality of silk threads and beads used for this lively piece of jewellery.\r\n'),
(41, 'Red Jhumkas', 150, 'Earrings', './images/redearrings.jpg', 'Red earrings: Red colour is considered to be a colour of energy. This beautiful pair of earrings is handmade with love and best quality silk threads. Pearls and beads used are 100% non-allergic. Goes best with ethnic and traditional outfits.\r\n'),
(42, 'Red Necklace', 250, 'Necklace', './images/rednecklace.jpg', 'Red necklace: This beautiful pair of earrings is handmade with love and best quality silk threads. Pearls and beads used are 100% non-allergic. Goes best with ethnic and traditional outfits. The red colour of the necklace is the main feature of this piece.\r\n'),
(43, 'Red-Yellow Bangles', 400, 'Bangles', './images/redyellowbangles.jpeg', 'Red yellow bangles: Bangles - An imperative adornment for the frivolity of ladies in Indian culture. The red and yellow combination looks great. The bangles moulded by â€˜Handmade with loveâ€™ are the mind-blowing combination of value and esteem. A perfect match for your every attire. Superior quality of silk threads and beads used for this lively piece of jewellery.\r\n'),
(44, 'Blue Jewellery Set', 400, 'Jewelleryset', './images/royalbluejewelleryset.jpg', 'Royal blue jewellery set: This royal blue beauty is  handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a neck piece, a pair of earrings and a bangle (kada). Wear them with any of your traditional and scintillating outfits for the festivals, weddings and parties.\r\n'),
(45, 'Skyblue Jewellery Set', 350, 'Jewelleryset', './images/skybluejewelleryset.jpg', 'Sky blue jewellery set: This decent sky blue jewellery set is handmade with love and is embellished with superior quality silk thread and beads that are 100% skin-friendly. Set includes a neck piece and a pair of earrings. Wear them with any of your traditional and scintillating outfits for the festivals, weddings and parties.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `mobile`, `gender`, `username`, `password`) VALUES
(1, 'Nithya Kannan', 'nithyakanna99@gmail.com', '9768304455', 'Female', 'nithya', '123456'),
(2, 'Rahul', 'rahulganeshrg22@gmail.com', '8879199311', 'Male', 'rahulrg', 'rahul'),
(3, 'Gayathri', 'gayatrikannan02@gmail.com', '0976830447', 'Female', 'gayu', 'gayu'),
(13, 'Kannan', 'kannant68@gmail.com', '9630258741', 'Male', 'tkannan', 'tkannan'),
(14, 'Punitha', 'puma@yahoo.in', '9632587410', 'Female', 'puma', 'puma123'),
(15, 'abc', 'abc@gmail.com', '8523697412', 'Others', 'abcxyz', '987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
