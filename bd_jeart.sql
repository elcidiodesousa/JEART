-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2023 at 04:04 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_jeart`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`email`, `senha`, `nome`) VALUES
('elcidio@gmail.com', 'sousa', 'Elcidio De Sousa Paulo Quive');

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_clientes`
--

DROP TABLE IF EXISTS `cadastro_clientes`;
CREATE TABLE IF NOT EXISTS `cadastro_clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `senha_cliente` varchar(45) NOT NULL,
  `sexo_cliente` char(1) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela para cadastro de clientes';

--
-- Dumping data for table `cadastro_clientes`
--

INSERT INTO `cadastro_clientes` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`, `sexo_cliente`) VALUES
(1, 'Amiel ', '', '', ''),
(2, '', 'amiel@gmail.com', '1233', 'M'),
(3, 'Ivone Chongo', 'ivone@gmail.com', '12345678', 'F'),
(4, 'Jaime Guambe', 'jaimito@gmail.com', 'jaimee', 'O'),
(5, 'Jaime Guambe', 'jaimito@gmail.com', 'jaimee', 'O'),
(6, 'Ecineta Ismael Mate', 'ecinetamate@gmail.com', 'ecineta888', 'F'),
(7, 'Ecineta Ismael Mate', 'ecinetamate@gmail.com', 'ecineta888', 'F'),
(8, 'Orlando Aderito', 'orlandinho@gmail.com', 'nanando', 'M'),
(9, 'Paulo Quive', 'paulo@gmail.com', '12345', 'M'),
(10, 'Atanasio Naimito', 'atanasio@gmail.com', '111111', 'M'),
(11, 'Luis', 'luisinho@gmail.com', '12345', 'M'),
(12, 'Luisa', 'luisinha@gmail.com', '123451', 'F'),
(13, 'Luisa', 'luisinha@gmail.com', '123451', 'F'),
(14, 'Fofucha', 'fofucha@gmail.com', '2005', 'F'),
(15, 'Elcidio De Sousa Paulo Quive', 'elcidio@gmail.com', 'elcidio', 'M'),
(16, 'Elcidio De Sousa Paulo Quive', 'elcidio@gmail.com', 'elcidio', 'M'),
(17, 'Dalmo Duarte', 'dalmo@gmail.com', '1111', 'M'),
(18, 'Adolfo', 'add@gmail.com', '1234567890', 'M'),
(19, '4t32r', 'aded@gmail.com', '111', ''),
(20, 'Fred Jossias', 'fred@gmail.com', '12345', 'M'),
(21, 'Elcidio De Sousa', 'elcidio@gmail.com', '123', 'M'),
(22, 'Milva', 'milice@gmail.com', '12', 'F'),
(23, 'Zidane', 'aa@gmail.com', '23', 'M'),
(24, 'Jacinto Alexandre', 'jacinto@gmail.com', '12345', 'M'),
(25, 'Elcidio De Sousa', 'e@gmail.com', '1234', 'M'),
(26, 'Elcidio De Sousa', 'e@gmail.com', '12345', 'M'),
(27, 'Mario', 'e@gmail.com', '1', 'M'),
(28, 'Amiel Guepson', 'ami@gmail.com', '12345', 'M'),
(29, 'Jose', 'j@gmail.com', '12345', 'M'),
(30, 'Elcidio De Sousa', 's@gmail.com', 'sousa', 'M'),
(31, 'Elcidio De Sousa', 's@gmail.com', 'sousa', 'M'),
(32, 'Elcidio De Sousa', 'm@gmail.com', '123', 'M'),
(33, 'Ana', 'ana@gmail.com', '123', 'M'),
(34, 'effw', 'sdfeg@gmail.com', '', 'M'),
(35, 'Elcidio De Sousa', 'q@gmail.com', '12345678', 'M'),
(36, 'wfefwdw', 'eh@gmail.com', 'fweff', 'M'),
(37, 'Jacinto Alexandre', 'jj@gmail.com', '12345', 'M'),
(38, 'Jaime Tomas', 'jaime@gamil.com', '12345', 'M'),
(39, 'Jorge', 'jorge@gmail.com', '123', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `tabela_confirmacao`
--

DROP TABLE IF EXISTS `tabela_confirmacao`;
CREATE TABLE IF NOT EXISTS `tabela_confirmacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `totalSelecionados` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabela_confirmacao`
--

INSERT INTO `tabela_confirmacao` (`id`, `numero`, `nome`, `endereco`, `data`, `hora`, `totalSelecionados`) VALUES
(1, '828712643', 'Jaime Tomas Guambe', 'Albazine', '2023-06-16', '16:30:00', '4'),
(2, '857711342', 'Neide Carlos', 'Zimpeto', '2023-06-23', '11:00:00', '2'),
(3, '86432111', 'Milva Milice', 'Matola', '2023-06-14', '16:00:00', '5'),
(4, '876253433', 'Jorge Marcos', 'Cidade Da Matola', '2023-06-23', '17:40:00', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
