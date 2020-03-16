-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2020 às 18:43
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mastermind`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `Id_jogador` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `pontuacao` int(255) NOT NULL,
  `partidas` int(255) NOT NULL,
  `ult_partida` int(255) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`Id_jogador`, `nome`, `pontuacao`, `partidas`, `ult_partida`, `telefone`, `senha`, `usuario`) VALUES
(1, 'luiz', 1, 1, 1, '(99) 99999-9999', 'adm', 'adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`Id_jogador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogador`
--
ALTER TABLE `jogador`
  MODIFY `Id_jogador` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
