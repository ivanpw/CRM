-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 05:40 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminproyectos`
--

-- --------------------------------------------------------

--
-- Table structure for table `encargados`
--

CREATE TABLE `encargados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `encargados`
--

INSERT INTO `encargados` (`id`, `nombre`, `correo`, `created_at`, `updated_at`) VALUES
(1, 'Gil', 'asd', '2017-07-10 05:23:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `promrecurs`
--

CREATE TABLE `promrecurs` (
  `Sexo` smallint(6) NOT NULL,
  `Uso` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `sexo` smallint(6) NOT NULL,
  `encargado_id` int(11) NOT NULL,
  `uso` smallint(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proyectos`
--

INSERT INTO `proyectos` (`id`, `descripcion`, `fecha_inicio`, `fecha_entrega`, `sexo`, `encargado_id`, `uso`, `created_at`, `updated_at`) VALUES
(45, '5 por 2', '2017-07-01', '2017-07-26', 0, 1, 0, '2017-07-20 15:14:26', '2017-07-20 21:14:26'),
(47, 'ungachaca', '2017-07-25', '2017-07-29', 1, 1, 0, '2017-07-20 18:14:27', '2017-07-20 18:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `proyectos_recursos`
--

CREATE TABLE `proyectos_recursos` (
  `id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `correo` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `puestos`
--

CREATE TABLE `puestos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT 'si',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `puestos`
--

INSERT INTO `puestos` (`id`, `descripcion`, `created_at`, `update_at`) VALUES
(1, 'si', '2017-07-13 13:00:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE `recursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` smallint(6) NOT NULL,
  `pais` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `uso` varchar(200) NOT NULL,
  `puesto_id` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recursos`
--

INSERT INTO `recursos` (`id`, `nombre`, `correo`, `edad`, `sexo`, `pais`, `estado`, `uso`, `puesto_id`, `created_at`, `updated_at`) VALUES
(70, 'johny', 'slenderoach@gmail.com', 123, 0, 'asd', 'asd', '0', 1, '2017-07-18 21:25:17', '2017-07-19 12:10:03'),
(71, 'unga', 'roucher133@gmail.com', 13, 1, 'asd', 'asd', '1', 1, '2017-07-19 12:08:27', '2017-07-20 18:44:30'),
(74, 'star', 'titanvago43@gmail.com', 13, 1, 'asd', 'asd', '0', 1, '2017-07-19 12:35:26', '2017-07-19 12:48:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encargados`
--
ALTER TABLE `encargados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `encargado_id` (`encargado_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `proyectos_recursos`
--
ALTER TABLE `proyectos_recursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descripcion` (`descripcion`),
  ADD KEY `recurso_id` (`recurso_id`,`proyecto_id`),
  ADD KEY `proyecto_id` (`proyecto_id`);

--
-- Indexes for table `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `puesto_id` (`puesto_id`),
  ADD KEY `id` (`id`),
  ADD KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encargados`
--
ALTER TABLE `encargados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `proyectos_recursos`
--
ALTER TABLE `proyectos_recursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`encargado_id`) REFERENCES `encargados` (`id`);

--
-- Constraints for table `proyectos_recursos`
--
ALTER TABLE `proyectos_recursos`
  ADD CONSTRAINT `proyectos_recursos_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`);

--
-- Constraints for table `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`puesto_id`) REFERENCES `puestos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
