-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Abr-2022 às 19:59
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sis-computer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `citys`
--

CREATE TABLE `citys` (
  `pk_city` int(11) NOT NULL,
  `nameCity` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numberCity` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `citys`
--

INSERT INTO `citys` (`pk_city`, `nameCity`, `numberCity`) VALUES
(1, 'Morrinhos', '00'),
(3, 'água Limpa', '01'),
(4, 'Pontalina', '02'),
(5, 'Caldas Novas', '03'),
(6, 'Buriti Alegre', '04'),
(7, 'Corumbaíba', '05'),
(8, 'Edealina', '06'),
(9, 'Marzagão', '07'),
(10, 'Rio Quente', '08'),
(11, 'Ouvidor', '09'),
(12, 'Pa Digital', '97'),
(13, 'Uad - Unidade Administrativa', '99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `computers`
--

CREATE TABLE `computers` (
  `pk_computer` int(11) NOT NULL,
  `brand` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `serialNumber` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `timeUsed` date NOT NULL,
  `fk_city` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `computers`
--

INSERT INTO `computers` (`pk_computer`, `brand`, `model`, `serialNumber`, `timeUsed`, `fk_city`) VALUES
(20, 'HP', 'HP 402 G1 Small Form Factor PC', 'BRJ527TV5W', '2010-04-22', 7),
(21, 'HP', 'HP Compaq 8200 Elite', 'BRG219FMGV', '2022-04-20', 7),
(22, 'HP', 'HP Compaq 8100 Elite', 'BRG115FWX4', '2000-05-10', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`pk_city`),
  ADD UNIQUE KEY `numberCity` (`numberCity`);

--
-- Índices para tabela `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`pk_computer`),
  ADD KEY `fk_city` (`fk_city`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `citys`
--
ALTER TABLE `citys`
  MODIFY `pk_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `computers`
--
ALTER TABLE `computers`
  MODIFY `pk_computer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `computers`
--
ALTER TABLE `computers`
  ADD CONSTRAINT `computers_ibfk_1` FOREIGN KEY (`fk_city`) REFERENCES `citys` (`pk_city`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
