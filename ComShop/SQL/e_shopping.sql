-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 05:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `image`, `price`) VALUES
(1, 'Laptop', 'Acer s1', 'acer2Laptop.png', 42000.00),
(2, 'Laptop', 'Acer A 33', 'acerLaptop.png', 48000.00),
(3, 'Procesor', 'AMD Ryzen 5', 'amdprocesor1.png', 27000.00),
(4, 'Graficka kartica ', 'VEGA 8', 'amdVRAM.png', 25000.00),
(5, 'Monitor', 'AOC 1', 'aocMonitor.png', 20000.00),
(6, 'Laptop', 'ASUS x55k', 'asus2LapTop.png', 52000.00),
(7, 'Desktop Racunar', 'ASUS Force 5', 'asusDesktop.png', 42000.00),
(8, 'Maticna Ploca', 'Asusu kk3', 'asusGF.png', 16000.00),
(9, 'Laptop', 'ASUS 25xc', 'asusLaptop.png', 55000.00),
(10, 'MAticna Ploca', 'Rock X', 'asusMother.png', 16500.00),
(11, 'Graficka karta', 'Asus GForce 2gp', 'asusMother.png', 24000.00),
(12, 'Desktop Racunar', 'AVA DDx2', 'avaDesktop.png', 41000.00),
(15, 'Ram Memorija', 'Cross x2', 'crosair1Ram.png', 6800.00),
(16, 'Ram Memorija', 'Cross x4', 'crosairRam.png', 12500.00),
(17, 'Desktop Racunar', 'Dell Inspirion 2K', 'dellDesktop.png', 48000.00),
(18, 'Dell Laptop', 'Dell Inspirion 22SX', 'dellLapTop.png', 58000.00),
(19, 'Sony Joypad DualShock', 'Dual S4', 'dzojstik1.png', 12000.00),
(20, 'Pc Joypad Dual', 'PC D2', 'dzojstik2.png', 2400.00),
(21, 'JoyPad XBox ', 'JOY X1', 'dzojstik3.png', 14650.00),
(22, 'NVidia Graficka kartica', 'GeForce V6', 'GeForceVRAM.png', 28000.00),
(23, 'Gigabyte Maticna ploca', 'Gygabyte 12Kx', 'gigabyteMother.png', 26250.00),
(24, 'Monitor', 'Hanss 22', 'hanssMonitor.png', 19650.00),
(25, 'Hard Disk', 'Samsung 320 GB', 'hdd1.png', 9500.00),
(26, 'Hard Disk', 'Samsung 500 Gb', 'hdd2.png', 14000.00),
(27, 'Hard Disk', 'Western Digital 320 GB', 'hdd3.png', 8600.00),
(28, 'Desktop Racunar', 'HP 225V', 'hpDesktop.png', 42000.00),
(29, 'Laptop', 'HP Cloner 2K', 'hpLapTop.png', 55000.00),
(30, 'Procesor', 'Intel Core i3 3.2 GHZ', 'intelprocesor1.jpg', 25000.00),
(31, 'Procesor', 'Intel Core 2 Duo 2.2 GHZ', 'intelprocesor2.png', 12600.00),
(32, 'Procesor', 'Intel Core I7, 3.6 GHZ', 'intelprocesor3.png', 28000.00),
(33, 'Proceso', 'Intel Core I5. 3.4 GHZ', 'intelprocesor4.png', 22000.00),
(34, 'USB KABL', 'HAMA 1.5m', 'kabl1.png', 1200.00),
(35, 'Audio Kabl', '1.5 mm', 'kabl2.png', 450.00),
(36, 'SKART kabl', '2.0 m', 'kabl3.png', 950.00),
(39, 'HDMI Kabl', 'Skart 2.0 m', 'kabl4.png', 1200.00),
(40, 'Kuciste', 'PowerTower Light Thor', 'kuciste2.png', 12000.00),
(41, 'Kuciste', 'Dark Power Classic', 'kuciste3.png', 8600.00),
(42, 'Kuciste', 'Dark Neon-Atom', 'kuciste4.png', 22000.00),
(43, 'Mis', 'Pc proClassB', 'mis1.png', 2500.00),
(44, 'Mis', 'Pc proClassR', 'mis2.png', 2500.00),
(45, 'Mis', 'Games neon-atom', 'mis3.png', 5000.00),
(46, 'Mis', 'Green Snake', 'mis4.png', 4800.00),
(47, 'Monitor', 'Lg 24', 'monitor3.png', 24000.00),
(48, 'Monitor', 'AEC 22', 'monitor4.png', 16500.00),
(49, 'Monitor', 'Samsung Oled 22', 'monitor5.png', 28000.00),
(50, 'Desktop Racunar', 'MSI M-POWER', 'msiDesktop.png', 55000.00),
(51, 'Maticna Ploca', 'MSI Rock4', 'msiMother.png', 18000.00),
(52, 'Graficka Kartica', 'MSI GeForce 4', 'msiVRAM.png', 42000.00),
(53, 'Napajanje', 'HX1200i', 'napajanje1.png', 12600.00),
(54, 'Napajanje', 'CX750', 'napajanje2.png', 15600.00),
(55, 'Napajanje', 'VS550', 'napajanje3.png', 12600.00),
(56, 'Napajanje', 'Silincer MK3', 'napajanje4.png', 12000.00),
(57, 'Graficka kartica', 'NVIdia Gforce 8', 'nvidiaVRAM.png', 45000.00),
(58, 'WIFI RUTER', '801.01', 'ruter1.png', 5600.00),
(59, 'WIFI RUTER', 'TPLINK 881', 'ruter2.png', 12600.00),
(60, 'WIFI RUTER', 'D LINK 801', 'ruter3.png', 4500.00),
(61, 'Laptop', 'Samsung 55s', 'samsung2Laptop.png', 57000.00),
(62, 'Laptop', 'Samsun 24s', 'samsungLapTop.png', 44000.00),
(63, 'SSD', 'Sasmung 120 Gb', 'ssd1.png', 10000.00),
(64, 'SSD', 'San Disc 320 GB', 'ssd2.png', 18000.00),
(65, 'SSD', 'WD GREEN 320 GB', 'ssd3.png', 22000.00),
(66, 'Tastatura', 'Solid Classic', 'tast1.png', 4200.00),
(67, 'Tastatura', 'Logitech Yelow edition', 'tast2.png', 12500.00),
(68, 'Tastatura', 'game pro-Ligth', 'tast3.png', 12200.00),
(69, 'Tastatura', 'HyperX', 'tast4.png', 14500.00),
(70, 'Ram memorija', 'FURY X', 'xyperxRam.png', 8200.00),
(71, 'PC Zvucnici', 'Logitech', 'zvucnik1.png', 10200.00),
(72, 'PC Zvucnici', 'Genius', 'zvucnik2.png', 8500.00),
(73, 'Pc Zvucnici', 'Genius Small', 'zvucnik3.png', 4200.00),
(74, 'Pc Zvucnici', 'Xyper Bass', 'zvucnik4.png', 14500.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`sku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
