-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2017 at 04:42 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tienda_V`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `nombre`) VALUES
(1, 'Gali');

-- --------------------------------------------------------

--
-- Table structure for table `Producto`
--

CREATE TABLE `Producto` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Precio` float NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Existencia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Producto`
--

INSERT INTO `Producto` (`id`, `Nombre`, `Precio`, `Descripcion`, `Existencia`) VALUES
(1, 'Baraja_Inglesa', 108, 'Baraja inglesa Bycycle', 10),
(2, 'Baraja_Español', 60, 'Baraja Española de cartulina', 20),
(3, 'Fichas_De_Juego', 100, 'Fichas de diferentes colores, ideal para jugar con Cartas', 20),
(4, 'Billetes_Juego', 20, 'Billetes Didácticos, ideales para jugar', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellido_P` varchar(30) NOT NULL,
  `Apellido_M` varchar(30) NOT NULL,
  `Edad` int(3) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `Nombres`, `Apellido_P`, `Apellido_M`, `Edad`, `usuario`, `password`, `id_personal`, `id_tipo`) VALUES
(2, 'Galileo ', 'Garibaldi', 'Cabrera', 0, 'Gali', '1234', 1, 1),
(3, 'Galileo', 'Cabrera', 'Garibaldi', 12, 'kl', '123', 0, 0),
(4, '', '', '', 0, '', '', 0, 0),
(5, 'Hola', 'Como ', 'estas', 12, 'Lenin', '123', 0, 0),
(6, 'John', 'Lennon', 'L', 40, 'John', '123', 2, 2),
(7, 'hjaa', 'aA', 'sas', 0, 'nuevo', '123', 0, 0),
(8, 'gfdfd', 'fds', 'fds', 78, 'Gali2', '123', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
