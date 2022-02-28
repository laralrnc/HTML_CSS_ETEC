-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2017 às 14:47
-- Versão do servidor: 5.1.51-community
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_animal`
--

CREATE TABLE IF NOT EXISTS `cad_animal` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) NOT NULL,
  `raca` varchar(55) NOT NULL,
  `idade` varchar(55) NOT NULL,
  `porte` varchar(55) NOT NULL,
  `nomep` varchar(55) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cad_animal`
--

INSERT INTO `cad_animal` (`codigo`, `nome`, `raca`, `idade`, `porte`, `nomep`) VALUES
(1, 'yuyt', 'uyytu', 'tyutyu', 'tyutyu', 'tyuty');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_prop`
--

CREATE TABLE IF NOT EXISTS `cad_prop` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) NOT NULL,
  `endereco` varchar(55) NOT NULL,
  `bairro` varchar(55) NOT NULL,
  `cidade` varchar(55) NOT NULL,
  `estado` varchar(55) NOT NULL,
  `tel_resi` varchar(55) NOT NULL,
  `celular` varchar(55) NOT NULL,
  `cpf` varchar(55) NOT NULL,
  `animal` varchar(55) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cad_prop`
--

INSERT INTO `cad_prop` (`codigo`, `nome`, `endereco`, `bairro`, `cidade`, `estado`, `tel_resi`, `celular`, `cpf`, `animal`) VALUES
(1, 'ftgjhtfg', 'jgtfjhfg', 'jggjg', 'jhgjg', 'jgjg', 'gjg', 'gjgj', 'gjg', 'gjgh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
