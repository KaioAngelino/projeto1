-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Set-2019 às 18:05
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landing_page`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usu_usuario`
--

DROP TABLE IF EXISTS `usu_usuario`;
CREATE TABLE IF NOT EXISTS `usu_usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(70) NOT NULL,
  `usu_email` varchar(200) NOT NULL,
  `usu_whatsapp` varchar(15) NOT NULL,
  `usu_token` text NOT NULL,
  `usu_status` char(1) NOT NULL DEFAULT 'I',
  `usu_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_data_atlz` timestamp NOT NULL,
  PRIMARY KEY (`usu_id`),
  UNIQUE KEY `usu_email` (`usu_email`),
  UNIQUE KEY `usu_whatsapp` (`usu_whatsapp`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usu_usuario`
--

INSERT INTO `usu_usuario` (`usu_id`, `usu_nome`, `usu_email`, `usu_whatsapp`, `usu_token`, `usu_status`, `usu_data`, `usu_data_atlz`) VALUES
(4, 'Kaio Botelho', 'kawan.angelino@gmail.com', '858888888', '$2y$14$yLVBsNTJgc9GfvbaJ3vy.O6uBoEvtKKL9MzhraGyDdn52g2snyF8S', 'I', '2019-09-05 17:25:49', '2019-09-05 17:25:49'),
(3, 'KAIO ANGELINO BOTELHO', 'rebeca.roabre@gmail.com', '11971046371', '$2y$14$N1rMW1Xs1L8P9A8/1UvBkuVqk09kT8VhgMrTbSk.9KdqmuzUu6gOu', 'I', '2019-09-05 17:24:33', '2019-09-05 17:24:33'),
(9, 'Rebeca', 'rebeca.roabre@hotmail.com', '87875418751', '$2y$14$YmvxjUR1K7S/ZKWJ/vh8ROf6l/d1iFzOuxwFLSVP7h.hoR8snTBry', 'I', '2019-09-05 17:47:37', '2019-09-05 17:47:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
