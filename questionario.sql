-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `questionario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao3`
--

CREATE TABLE IF NOT EXISTS `questao3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adjetivo` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `questao3`
--

INSERT INTO `questao3` (`id`, `adjetivo`) VALUES
(1, '3'),
(2, '11'),
(3, '12'),
(4, '5'),
(5, '6'),
(6, '7'),
(7, '8'),
(8, '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
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
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `1`, `2`, `3`, `4`, `5`, `6`) VALUES
(1, '1', '1', '2', '1', '2', '1'),
(2, '1', '2', '2', '2', '3', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
