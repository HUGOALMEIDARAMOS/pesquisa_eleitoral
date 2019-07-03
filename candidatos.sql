-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/10/2018 às 19:17
-- Versão do servidor: 5.7.23-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eleicao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `cadidato` varchar(50) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `qtd_voto` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `candidatos`
--

INSERT INTO `candidatos` (`id`, `cadidato`, `imagem`, `qtd_voto`) VALUES
(14, 'Alvaro Dias - 19', 'alvaro.jpeg', 0),
(15, 'Daciolo - 51', 'daciolo.jpeg', 0),
(16, 'Ciro - 12', 'ciro.jpeg', 0),
(17, 'Eymael  - 27', 'eymael.jpeg', 0),
(18, 'Haddad - 13', 'haddad.jpeg', 0),
(19, 'Alckmin - 45', 'alkmin.jpeg', 0),
(21, 'Meirelles - 15', 'meireles.jpeg', 0),
(22, 'Bolsonaro - 17', 'bolsonaro.jpeg', 0),
(23, 'Amoedo - 30', 'amoedo.jpeg', 0),
(24, 'Filho - 54', 'goulard.jpeg', 0),
(25, 'Marina - 18', 'marina.jpeg', 0),
(26, 'Vera - 16', 'vera.jpeg', 0),
(27, 'Boulos - 50', 'boulos.jpeg', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `candidatos`
--

