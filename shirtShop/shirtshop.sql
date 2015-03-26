-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mar 2015 la 10:51
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shirtshop`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `sku` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `paypal` varchar(32) NOT NULL,
  PRIMARY KEY (`sku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `products`
--

INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES
(101, 'Logo Shirt, Red', 'img/shirts/shirt-101.jpg', '18.00', 'DLTEE4Y7PFZN2'),
(102, 'Mike the Frog Shirt, Black', 'img/shirts/shirt-102.jpg', '20.00', 'XUDKHPW4FY44U'),
(103, 'Mike the Frog Shirt, Blue', 'img/shirts/shirt-103.jpg', '20.00', 'TEKWCM89K5EZ6'),
(104, 'Logo Shirt, Green', 'img/shirts/shirt-104.jpg', '18.00', 'K3SLW44S6FBE2'),
(105, 'Mike the Frog Shirt, Yellow', 'img/shirts/shirt-105.jpg', '25.00', 'WHFAHGMBW6QNU'),
(106, 'Logo Shirt, Gray', 'img/shirts/shirt-106.jpg', '20.00', 'ZUA7XNDC9L2HS'),
(107, 'Logo Shirt, Turquoise', 'img/shirts/shirt-107.jpg', '20.00', 'NWD6H78TYBGQ2'),
(108, 'Logo Shirt, Orange', 'img/shirts/shirt-108.jpg', '25.00', '6B39FGX2A7LBW'),
(109, 'Get Coding Shirt, Gray', 'img/shirts/shirt-109.jpg', '20.00', 'B5DAJHWHDA4RC'),
(110, 'HTML5 Shirt, Orange', 'img/shirts/shirt-110.jpg', '22.00', '6T2LVA8EDZR8L'),
(111, 'CSS3 Shirt, Gray', 'img/shirts/shirt-111.jpg', '22.00', 'MA2WQGE2KCWDS'),
(112, 'HTML5 Shirt, Blue', 'img/shirts/shirt-112.jpg', '22.00', 'FWR955VF5PALA'),
(113, 'CSS3 Shirt, Black', 'img/shirts/shirt-113.jpg', '22.00', '4ELH2M2FW7272');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `product_sizes`
--

CREATE TABLE IF NOT EXISTS `product_sizes` (
  `product_sku` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `product_sizes`
--

INSERT INTO `product_sizes` (`product_sku`, `size_id`) VALUES
(101, 1),
(101, 2),
(101, 3),
(101, 4),
(102, 1),
(102, 2),
(102, 3),
(102, 4),
(103, 0),
(103, 0),
(103, 0),
(103, 0),
(103, 0),
(104, 1),
(104, 2),
(104, 3),
(104, 4);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(32) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Salvarea datelor din tabel `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `order`) VALUES
(1, 'Small', 10),
(2, 'Medium', 20),
(3, 'Large', 30),
(4, 'X-Large', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
