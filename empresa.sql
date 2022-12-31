-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 00:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `stophelpcadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `IDEMPRESA` int(11) NOT NULL,
  `TOKEN` varchar(8) NOT NULL,
  `CNPJ` varchar(30) NOT NULL,
  `RAZAOSOCIAL` varchar(200) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `FONE` varchar(30) NOT NULL,
  `NOMEDECONTATO` varchar(100) NOT NULL,
  `SENHA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`IDEMPRESA`, `TOKEN`, `CNPJ`, `RAZAOSOCIAL`, `EMAIL`, `FONE`, `NOMEDECONTATO`, `SENHA`) VALUES
(23, '638bbb2b', '123456789', 'Kaue Ltda', 'kaue@gmail.com', '17-99679-7406', 'Kaue Souza Silva', '123456'),
(25, '638bc198', '12345678910', 'Kaue Interprise', 'kauesouza@gmail.com', '17-99679-7406', 'Kaue Souza', '123456'),
(26, '638e6e74', '12345678911', 'Rafa Ltda', 'rafa@gmail.com', '17 996797406', 'Rafael', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IDEMPRESA`),
  ADD UNIQUE KEY `RAZAOSOCIAL` (`RAZAOSOCIAL`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `TOKEN` (`TOKEN`),
  ADD UNIQUE KEY `CNPJ` (`CNPJ`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `IDEMPRESA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
