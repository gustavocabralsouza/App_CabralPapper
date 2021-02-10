-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2019 às 01:02
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_empresa`
--
CREATE DATABASE IF NOT EXISTS `bd_empresa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_empresa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `senha` int(50) NOT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`senha`, `login`) VALUES
(20122003, 'melhorprofessora'),
(12345, 'gustavocabraldesouzazl211');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `Cod_Fornecedor` int(11) NOT NULL,
  `Razao_Social` varchar(70) NOT NULL,
  `Nome_Fantasia` varchar(70) NOT NULL,
  `CNPJ` varchar(18) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Num` varchar(7) NOT NULL,
  `Bairro` varchar(25) NOT NULL,
  `Cidade` varchar(25) NOT NULL,
  `Fone` varchar(13) NOT NULL,
  `Nome_Contato` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Site` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`Cod_Fornecedor`, `Razao_Social`, `Nome_Fantasia`, `CNPJ`, `Endereco`, `Num`, `Bairro`, `Cidade`, `Fone`, `Nome_Contato`, `Email`, `Site`) VALUES
(1, 'Comércio de Papéis Yuki Ltda.', 'Yuki Papéis ', '03.847.655/0001-98', 'Rua das Amexeiras', '21', 'Penha ', 'São Paulo ', '(11) 2695-6398', 'Sr.Pedro ', 'yuki@provedor.com.br', 'www.yukinegocios.com.br'),
(2, 'Comércios de Papéis ABC Ltda.', 'Papelaria ABC', '14.218.835/0001-27', 'Av.Iguapé ', '1698', 'Tatuapé ', 'São Paulo', '(11)2369-9685', 'Sra.Bete', 'p_ABC@provedor.com.br', 'www.provedornegocios.com.br'),
(3, 'Distribuidora Kalunga S.A', 'Kalunga ', '23.222.835/0001-07', 'Av.Rio das Pedras ', '1752', 'Itaquera', 'São Paulo', '(11) 2596-9586', 'Sr.Marcos', 'kalunga@provedor.com.br', 'www.kalunganegocios.com.br'),
(4, 'Indústria e Comércio Nobel S.A', 'Nobel', '07.256.898/0001-10', 'Rua das Bolhas', '900', 'Itaquera ', 'São Paulo', '(11) 2475-6598', 'Sr.Paulo ', 'nobel@provedor.com.br', 'www.nobelnegocios.com.br'),
(5, 'Papelaria Americanas Ltda.', 'Americanas', '01.659.427/0001-04', 'Rua das Ovelhas ', '21', 'Pari', 'São Paulo', '(11) 2456-9874', 'Sr.Antonio', 'americanas@provedor.com.br', 'www.americanasnegocios.com.br'),
(6, 'Distribuidora Brasileira S.A', 'Brasileiras ', '01.326.255/0001-04', 'Av.Brasil', '12', 'Brás', 'São Paulo ', '(11) 6598-6958', 'Sra.Paula', 'brasileiras@provedor.com.br', 'www.brasileirasnegocios.com.br'),
(7, 'Ind e Comércio de Papéis OI', 'Papéis OI', '01.362.126/0001-04', 'Av. dos Trilhos', '1362', 'Pari', 'São Paulo', '(11) 2365-2154', 'Sra.Ana', 'oi@provedor.com.br', 'www.oinegocios.com.br'),
(8, 'Armarinhos Fernando Ltda.', 'Fernando', '01.956.236/0001-04', 'Alameda Santos ', '362', 'Centro', 'São Paulo', '(11) 2362-3659', 'Sr.Matheus', 'fernando@provedor.com.br', 'www.fernandonegocios.com.br'),
(9, 'Armarinhos Alegria S.A', ' Alegria', '14.632.326/0001-14', 'Rua das Fagulhas', '12', 'Cambuci', 'São Paulo ', '(11) 2362-5487', 'Sra.Alegrete', 'alegria@provedor.com.br', 'www.alegrianegocios.com.br'),
(10, 'Comércio de Papéis Tchau Ltda.', 'Tchau', '11.659.652/0001-04', 'Alameda dos Anhambiguaras', '326', 'Morumbi', 'São Paulo', '(11) 3265-6958', 'Sra.Bento', 'tchau@provedor.com.br', 'www.tchaunegocios.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Cod_Produto` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Unidade` varchar(2) NOT NULL,
  `Qtde_Estoque` double NOT NULL,
  `Caracteristicas` varchar(50) NOT NULL,
  `Cod_Fornecedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Cod_Produto`, `Descricao`, `Unidade`, `Qtde_Estoque`, `Caracteristicas`, `Cod_Fornecedor`) VALUES
(1, 'Caneta', 'un', 100, 'cor azul', 2),
(2, 'Caneta', 'un', 85, 'cor vemelha', 2),
(3, 'Caneta', 'un', 60, 'cor preta', 2),
(4, 'Lápis', 'un', 150, 'sem borracha', 3),
(5, 'Lápis', 'un', 100, 'com borracha', 4),
(6, 'Lápis de cor', 'cx', 25, '12 cores', 4),
(7, 'Lápis de cor', 'cx', 50, '24 cores', 4),
(8, 'Lápis de cor', 'cx', 35, '36 cores', 5),
(9, 'Borracha', 'dz', 35, 'Azul/Vermelha', 6),
(10, 'Borracha', 'dz', 25, 'Branca', 7),
(11, 'Papel Sulfite', 'pc', 100, 'Colorido', 8),
(12, 'Caderno Universitário', 'pc', 25, '1 matéria', 9),
(13, 'Caderno Universitário', 'pc', 150, '10 matérias', 9),
(14, 'Régua', 'un', 250, 'Acrílica-30 cm', 10),
(15, 'Lapiseira', 'pc', 86, 'Grafite 0.5', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`Cod_Fornecedor`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Cod_Produto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
