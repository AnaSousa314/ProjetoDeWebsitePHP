-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2020 às 00:56
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_developer_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(5) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sobrenome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `endereco` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `sobrenome`, `cpf`, `endereco`, `telefone`, `email`) VALUES
(1, 'marcio', 'silva', '999.777.586-23', 'rua 14', '(94)99778-5656', 'marcio@email.com'),
(2, 'Adelson', 'Gonçalves', '659.325.189-55', 'Rua Trancoso', '(95)2225-7896', 'aldelson@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `desktops`
--

CREATE TABLE `desktops` (
  `id_desktop` int(5) NOT NULL,
  `Nome` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `fabricante` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `processador` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `mem_ram` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `hd` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `qtd_estoque` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `desktops`
--

INSERT INTO `desktops` (`id_desktop`, `Nome`, `fabricante`, `processador`, `mem_ram`, `hd`, `preco`, `qtd_estoque`) VALUES
(1, 'Lenovo V530s', 'Lenovo', 'Intel Core i5-8400', '4GB', '1TB', '3578.00', 3),
(2, 'iMac Apple', 'Apple', 'Intel Core i5-8400', '8GB', '1TB', '9999.99', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(5) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sobrenome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `cargo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `login` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(8) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `sobrenome`, `cargo`, `email`, `login`, `senha`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@email.com', 'admin', 'admin'),
(2, 'Leonardo', 'Parreira', 'vendedor', 'leo@email.com', 'leo@nardo', '123456'),
(3, 'Welington', 'Faria', 'Gerente', 'welignton@email.com', 'Welingtonn', '12564');

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressoras`
--

CREATE TABLE `impressoras` (
  `id_impressora` int(5) NOT NULL,
  `nome` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `fabricante` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tecn_impressao` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `multifuncional` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `qtd_estoque` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `impressoras`
--

INSERT INTO `impressoras` (`id_impressora`, `nome`, `fabricante`, `tecn_impressao`, `multifuncional`, `preco`, `qtd_estoque`) VALUES
(1, 'HP Ink Tank 416 -  Z4B55A', 'Hp', 'Jato de Tinta', 'Sim', '1034.00', 5),
(2, 'Epson EcoTank L3150', 'Epson', 'Jato de Tinta', 'Sim', '1219.90', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `laptops`
--

CREATE TABLE `laptops` (
  `id_laptop` int(5) NOT NULL,
  `nome` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `fabricante` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `processador` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `mem_ram` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `hd` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tam_tela` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `qtd_estoque` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `laptops`
--

INSERT INTO `laptops` (`id_laptop`, `nome`, `fabricante`, `processador`, `mem_ram`, `hd`, `tam_tela`, `preco`, `qtd_estoque`) VALUES
(1, 'Acer Aspire 3 A315-54K-31E8', 'Acer', 'Intel Core I3 – 6006U', '4GB', '1TB', '15,16\'', '3249.00', 3),
(2, 'Positivo Motion Q464B', 'Positivo', 'Intel core Intel Atom Quad cor', '4GB', '64GB SSD', '14\"', '1699.99', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(5) NOT NULL,
  `cliente` int(5) NOT NULL,
  `funcionario` int(5) NOT NULL,
  `desktop` int(5) NOT NULL,
  `laptop` int(5) NOT NULL,
  `impressora` int(5) NOT NULL,
  `data_venda` date NOT NULL,
  `preco` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `cliente`, `funcionario`, `desktop`, `laptop`, `impressora`, `data_venda`, `preco`) VALUES
(1, 6, 2, 0, 2, 0, '2020-10-15', '1034.00'),
(2, 8, 1, 14, 0, 0, '2020-10-18', '9999.99');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `desktops`
--
ALTER TABLE `desktops`
  ADD PRIMARY KEY (`id_desktop`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `impressoras`
--
ALTER TABLE `impressoras`
  ADD PRIMARY KEY (`id_impressora`);

--
-- Índices para tabela `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `desktops`
--
ALTER TABLE `desktops`
  MODIFY `id_desktop` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `impressoras`
--
ALTER TABLE `impressoras`
  MODIFY `id_impressora` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id_laptop` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
