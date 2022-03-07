-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2022 às 13:08
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
-- Banco de dados: `home`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `dataList` date DEFAULT NULL,
  `qtd` float DEFAULT NULL,
  `prod` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precoUni` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `list`
--

INSERT INTO `list` (`id`, `dataList`, `qtd`, `prod`, `precoUni`) VALUES
(1, '2022-03-07', 3, 'PARACHOQUE', 123.00),
(2, '2022-03-07', 6, 'OLEO', 23.90),
(3, '2022-03-07', 10, 'LIMPA VIDRO', 11.87),
(4, '2022-03-07', 2, 'LANTERNA', 56.74);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
