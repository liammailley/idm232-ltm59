-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 10:40 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liammail_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `recipe_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `file_id`, `recipe_name`, `category`, `intro`, `ingredients`, `description`, `filename`) VALUES
(48, 0, 'Ancho-Orange Chicken with Kale Rice & Roasted Carrots', 'breakfast', 'Weʼre amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze.', '<ul>\r\n    <li>4 Boneless, Skinless Chicken Breasts</li>\r\n    <li>1 Tbsp Ancho Chile Paste</li>\r\n    <li>2 Tbsps Cr&egrave;me Fra&icirc;che</li>\r\n    <li>3 Tbsps Golden Raisins </li>\r\n</ul>', '<p><strong>1.) Prepare the rice</strong></p>\r\n<p>Place an oven rack in the center of the oven, then preheat to 450&deg;F. In a<br>medium pot, combine the rice, a big pinch of salt, and 1 1/2 cups of<br>water. Heat to boiling on high. Once boiling, cover and reduce the heat to<br>low. Cook 12 to 14 minutes, or until the water has been absorbed and the rice<br>is tender. Turn off the heat and fluff with a fork. Cover to keep warm.</p>\r\n<p><strong><span>2.) Prepare the ingredients &amp; make the glaze</span></strong></p>\r\n<p><span>While the rice cooks, wash and dry the fresh produce. Peel the carrots;<br id=\"isPasted\">quarter lengthwise, then halve crosswise. Peel and roughly chop the garlic.<br>Remove and discard the stems of the kale; finely chop the leaves. Using a<br>peeler, remove the lime rind, avoiding the white pith; mince to get 2<br>teaspoons of zest (or use a zester). Halve the lime crosswise. Halve the<br>orange; squeeze the juice into a bowl, straining out any seeds. Whisk in the<br>chile paste and 2 tablespoons of water until smooth.</span></p>\r\n<p><span><strong id=\"isPasted\">3.) Roast Carrots<br></strong></span></p>\r\n<p>Place the sliced carrots on a sheet pan. Drizzle with olive oil and season<br id=\"isPasted\">with salt and pepper; toss to coat. Arrange in an even layer. Roast 15 to 17<br>minutes, or until tender when pierced with a fork. Remove from the oven.</p>\r\n<p><strong>4.) Cook garlic and season rice</strong></p>\r\n<p>While the carrots roast, in a large pan (nonstick, if you have one), heat 2<br id=\"isPasted\">teaspoons of olive oil on medium-high until hot. Add the chopped garlic<br>and cook, stirring constantly, 30 seconds to 1 minute, or until fragrant. Add<br>the chopped kale; season with salt and pepper. Cook, stirring occasionally,<br>3 to 4 minutes, or until slightly wilted. Add 1/3 cup of water; season with<br>salt and pepper. Cook, stirring occasionally, 3 to 4 minutes, or until the kale<br>has wilted and the water has cooked off. Transfer to the pot of cooked rice.<br>Stir to combine; season with salt and pepper to taste. Cover to keep warm.<br>Wipe out the pan.</p>\r\n<p><strong>5.) Cook &amp; glaze the chicken</strong></p>\r\n<p>While the carrots continue to roast, pat the chicken dry with paper towels;<br id=\"isPasted\">season with salt and pepper on both sides. In the same pan, heat 2 teaspoons<br>of olive oil on medium-high until hot. Add the seasoned chicken and cook 4 to<br>6 minutes on the first side, or until browned. Flip and cook 2 to 3 minutes, or<br>until lightly browned. Add the glaze and cook, frequently spooning the glaze<br>over the chicken, 2 to 3 minutes, or until the chicken is coated and cooked<br>through. Turn off the heat; stir the butter and the juice of 1 lime half into<br>the glaze until the butter has melted. Season with salt and pepper to taste.</p>\r\n<p><strong>6.) Finish the rice and serve your dish</strong></p>\r\n<p>To the pot of cooked rice and kale, add the lime zest, cr&egrave;me fra&icirc;che,<br id=\"isPasted\">raisins, and the juice of the remaining lime half. Stir to combine;<br>season with salt and pepper to taste. Serve the glazed chicken with the<br>finished rice and roasted carrots. Top the chicken with the remaining glaze<br>from the pan. Enjoy!</p>', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fileid_relationship` (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
