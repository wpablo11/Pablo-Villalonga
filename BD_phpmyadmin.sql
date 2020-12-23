-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2020 a las 16:43:39
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dailytrends`
--
CREATE DATABASE IF NOT EXISTS `dailytrends` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dailytrends`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `titulo_noticia` varchar(255) NOT NULL,
  `link_noticia` varchar(255) NOT NULL,
  `link_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`titulo_noticia`, `link_noticia`, `link_img`) VALUES
('Los mayores primero: estiman que con vacunar a las personas de mÃ¡s de 80 aÃ±os se reducirÃ¡ a la mitad la mortalidad de la Covid-19', 'https://www.xataka.com/medicina-y-salud/mayores-primero-estiman-que-vacunar-a-personas-80-anos-se-reducira-a-mitad-mortalidad-covid-19', 'https://i.blogs.es/b28ab2/vacuna/500_333.jpg'),
('OnePlus confirma estar trabajando en su propio smartwatch: llegarÃ¡ a principios de 2021', 'https://www.xataka.com/relojes-inteligentes/oneplus-confirma-estar-trabajando-su-propio-smartwatch-llegara-a-principios-2021', 'https://i.blogs.es/7e3cd4/oneplus/500_333.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
