-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2021 às 23:34
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos_tb`
--

CREATE TABLE `jogos_tb` (
  `id_jogo` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `jogos_tb`
--

INSERT INTO `jogos_tb` (`id_jogo`, `nome`, `genero`, `ano`) VALUES
(4, 'LOL', 'MOBA', '2009');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_tb`
--

CREATE TABLE `usuario_tb` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario_tb`
--

INSERT INTO `usuario_tb` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin@sistema');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  ADD PRIMARY KEY (`id_jogo`);

--
-- Índices para tabela `usuario_tb`
--
ALTER TABLE `usuario_tb`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario_tb`
--
ALTER TABLE `usuario_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
