-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 02:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripsquad`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`, `subtotal`, `product_id`, `client_id`, `status`) VALUES
(14, 'Sacoche de Tente Rangement Sac d\'Auvent Transportation Camping', 120, 'images/30.png', 3, 360, 2, 25, 'order'),
(15, 'Carbon Baton De Marche multicouleur', 150, 'images/19.png', 2, 300, 4, 25, 'order'),
(33, 'Tente conseillée avec matelas', 1500, 'images/tente.png', 1, 1500, 1, 24, 'order'),
(38, 'Sacoche de Tente Rangement Sac d\'Auvent Transportation Camping', 120, 'images/30.png', 1, 120, 2, 24, 'order'),
(40, 'Sac à dos camping imperméable treking randonnée', 250, 'images/43.png', 1, 250, 5, 24, 'order'),
(41, 'Tente conseillée avec matelas', 1500, 'images/tente.png', 1, 1500, 1, 24, 'order'),
(43, 'Sacoche de Tente Rangement Sac d\'Auvent Transportation Camping', 120, 'images/30.png', 1, 120, 2, 24, 'order'),
(44, 'Tente conseillée avec matelas', 1500, 'images/tente.png', 1, 1500, 1, 24, 'order'),
(47, 'Sac à dos camping imperméable treking randonnée', 250, 'images/43.png', 1, 250, 5, 24, 'order'),
(48, 'Sacoche de Tente Rangement Sac d\'Auvent Transportation Camping', 120, 'images/30.png', 1, 120, 2, 24, 'order'),
(51, 'Sac à dos camping imperméable treking randonnée', 250, 'images/43.png', 1, 250, 5, 24, 'order'),
(52, 'Sacoche de Tente Rangement Sac d\'Auvent Transportation Camping', 120, 'images/30.png', 1, 120, 2, 24, 'cart'),
(53, '1500LM Lampe de Poche Torche Camping Voyage', 80, 'images/31.png', 2, 160, 3, 24, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `numéro_de_télé` varchar(255) NOT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `confirmation` varchar(255) NOT NULL,
  `confirme_date` date DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `prenom`, `nom`, `numéro_de_télé`, `ville`, `adresse`, `code_postal`, `email`, `mot_de_passe`, `sexe`, `confirmation`, `confirme_date`, `role`) VALUES
(24, 'client', '', '', NULL, '', '', 'admin@admin.ma', '8cb2237d0679ca88db6464eac60da96345513964', '', 'OUI', '2021-05-13', 'client'),
(25, 'Hicham', 'Mokaddem', '0600000000', 'el jadida', 'jadgjgdfjkdhjkhdl', '42424', 'hichammokaddem2001@gmail.com', '2f6df1792a129dacbd8c7ba030d8d457e48458e6', 'male', 'OUI', '2021-05-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Tente conseillée avec matelas', 'images/tente.png', 1500),
(2, 'Sacoche de Tente Rangement Sac d\'Auvent Transportation Camping', 'images/30.png', 120),
(3, '1500LM Lampe de Poche Torche Camping Voyage', 'images/31.png', 80),
(4, 'Carbon Baton De Marche multicouleur', 'images/19.png', 150),
(5, 'Sac à dos camping imperméable treking randonnée', 'images/43.png', 250);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numéro_tele` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre_Personne` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trip_en_famille` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `equipements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assistant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date_debut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date_fin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `is_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `prenom`, `nom`, `email`, `numéro_tele`, `ville`, `Nombre_Personne`, `trip_en_famille`, `equipements`, `assistant`, `destination`, `Date_debut`, `Date_fin`, `id_client`, `is_client`) VALUES
(1, 'test', 'tests', 'aserty@gmail.com', '55', 'el jadida', '1', 'non', 'Sans', 'non', 'Cascade', '15/3/2021', '2020-06-24', NULL, 'NON'),
(2, 'Test', 'account', 'testaccount@gmail.com', '1640262468', 'azilal', '4', 'oui', 'Sans', 'non', 'Cascade', '15/3/2021', '2020-06-25', 1, 'OUI'),
(8, 'ikram', 'merk', 'ikram@gmail.com', '05246825825', 'marrakech', '4', 'oui', 'Avec', 'non', 'Cascade', '15/3/2021', '2020-06-10', NULL, 'NON'),
(7, 'said', 'mechkuri', 'said@gmail.com', '0621548975', 'marrakech', '6', 'oui', 'Avec', 'non', 'Vallée', '6/6/2021', '2020-06-30', 13, 'OUI'),
(9, 'Test', 'account', 'testaccount@gmail.com', '1640262468', 'marrakech', '1', 'oui', 'Sans', 'oui', 'Montagne', '6/6/2021', '2020-06-25', 1, 'OUI'),
(10, 'said', 'ksks', 'saidkfk@gmail.com', '+212 647383284', 'béni mallal', '2', 'oui', 'Avec', 'oui', 'Montagne', '15/3/2021', '02/06/2021', NULL, 'NON'),
(11, 'ujghuj', 'nbjn', 'ftfthftf@hfghf.com', '+212 657890564', 'kénitra', '5', 'oui', 'Avec', 'non', 'Montagne', '1/1/2021', '03/09/2021', NULL, 'NON'),
(12, 'kamal', 'mohamed', 'jakshkd@hdhdk.com', '+212 123456789', 'tanger', '1', 'oui', 'Avec', 'oui', 'Plage', '15/3/2021', '20/03/2021', NULL, 'NON'),
(13, 'saidkk', 'mkjm', 'kjkjddf@gmail.com', '+212 123456789', 'safi', '1', 'oui', 'Avec', 'oui', 'Cascade', '1/1/2021', '02/06/2000', NULL, 'NON'),
(14, 'kjjkjj', 'dtgfvg', 'ghguyghuhu@gmail.com', '+212 123456789', 'khémisset', '5', 'oui', 'Avec', 'oui', 'Plage', '1/1/2021', '02/06/2021', NULL, 'NON'),
(15, 'KJKJOJ', 'JJHIHJ', 'UGIUHUH@HGH.VCB', '+212 123456789', 'khémisset', '1', 'non', 'Sans', 'non', 'Plage', '6/6/2021', '05/08/2021', NULL, 'NON');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
