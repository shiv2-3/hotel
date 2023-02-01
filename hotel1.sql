-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 04:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `items` varchar(250) NOT NULL,
  `amount` text NOT NULL,
  `unit` varchar(250) NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `items`, `amount`, `unit`, `recipe_id`) VALUES
(1, 'rice', '500', 'gm', 1),
(2, 'ghee', '100', 'gm', 1),
(3, 'cashew', '5-6', 'piece', 1);

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `step` text NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `step`, `recipe_id`) VALUES
(1, 'Pulao or pulav or pilaf, is comfort food at its best and I make it when I want to cook something quick, easy and satisfying. This one-pot dish made with fragrant rice and colorful healthy vegetables has added spices and herbs, giving it a mild fragrant flavor. This special veg pulao recipe is my mom’s and is my go-to recipe when making vegetable pulao. The dish is also vegetarian and is great on its own or paired with raita (an Indian yogurt dish), pickle and roasted papad (a crisp thin Indian snack).\r\nMy recipe uses whole spices, rather than adding any pulao or biryani masala. Thus the fragrance of the spices is distinctly felt in the dish.\r\n\r\nI usually like the texture of the rice to be a little soft in pulao, rather than being al dente, which is the way it is typically served in restaurants. So if you are like me, you will love this recipe. Read on below for tips on making the perfect rice for your pulao.\r\n\r\nI usually add vegetables like carrots, green peas, french beans and cauliflower. But a pulao can be made with various other vegetables. Broccoli, beets, capsicum, spinach, cabbage, baby corn are some veggies that you can consider.\r\n\r\nUsually pulao is made with the finest fragrant basmati rice. I mostly use aged basmati rice to make vegetable pulao. Other fragrant varieties of rice which are non-sticky also work well.\r\n\r\nPulao can be made in a pan on the stovetop, a pressure cooker or the Instant Pot. I like the rice grains to be fluffy and separate. So I cook the pulao in a pan on the stovetop.\r\n\r\n\r\nIf short of time you can consider making veg pulao in a stovetop pressure cooker or the Instant pot.\r\n\r\nDo read on below in the tips section my helpful ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `desc` text NOT NULL,
  `image_url` varchar(600) NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `desc`, `image_url`, `creator_id`) VALUES
(1, 'Puloa', 'Pulao is a one pot rice dish made by cooking fragrant basmati rice with aromatic whole spices, herbs & sometimes stock.', 'images/pulao.jpeg', 1),
(3, 'Pasta', 'Pasta is a type of food made from a mixture of flour, eggs, and water that is formed into different shapes and then boiled.', 'images/pasta.jpeg', 1),
(4, 'Paratha', 'Parathas are a flaky, buttery, and layered style of flatbread that can be served alongside curries, rolled up and dipped into hot chai, or made into a meal by themselves with a side of raita for dunking', 'images/xhdpi.jpg', 1),
(5, 'nudles', 'noodle, a cooked egg-and-flour paste prominent in European and Asian cuisine, generally distinguished from pasta by its elongated ribbonlike form', 'images/nudles.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_id`, `password`) VALUES
(1, 'Mr.A', 'mra', '123'),
(2, 'Mrs.B', 'mrsb', 'xyz'),
(3, 'Ms.C', 'msc', 'a@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
