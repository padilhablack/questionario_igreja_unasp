-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 16/07/2014 às 02:40
-- Versão do servidor: 5.6.12-log
-- Versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `questionario`
--
CREATE DATABASE IF NOT EXISTS `questionario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `questionario`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `questao3`
--

CREATE TABLE IF NOT EXISTS `questao3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adjetivo` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `questao3`
--

INSERT INTO `questao3` (`id`, `adjetivo`) VALUES
(1, '9'),
(2, '10'),
(3, '3'),
(4, '11'),
(5, '4'),
(6, '12'),
(7, '5'),
(8, '6'),
(9, '4');

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `1` varchar(2) DEFAULT NULL,
  `2` varchar(2) DEFAULT NULL,
  `3` varchar(2) DEFAULT NULL,
  `4` varchar(2) DEFAULT NULL,
  `5` varchar(2) DEFAULT NULL,
  `6` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `respostas`
--

INSERT INTO `respostas` (`id`, `1`, `2`, `3`, `4`, `5`, `6`) VALUES
(1, '1', '1', '2', '1', '2', '2'),
(2, '1', '1', '2', '1', '2', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
