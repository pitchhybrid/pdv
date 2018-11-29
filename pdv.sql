-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2018 às 04:21
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `CPF` bigint(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefone` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `CPF`, `email`, `telefone`) VALUES
(1, 'Alan Jeison Vieira Vilar', 201808322355, 'jeisonvilar@gmail.com', 85985031509),
(2, 'ALBERTO AMORIM BRAGA', 201808252942, 'albertoamorim@hotmail.com', 85987145655),
(3, 'Alysson Vieira Bezerra', 201602413746, 'alysonvra@gmail.com', 88991660672),
(4, 'ANTÔNIO EMÍLIO PAIVA VASCONCELOS', 201808333667, 'antonioerniliopv@gmail.com', 35399308507),
(5, 'Arievlis Pessoa Da Silveira Junior', 201808362624, 'arievlisjunior@gmail.com', 85997818900),
(6, 'Arturo Gonzalo Aguilar Villalobos', 201808322061, 'gonzaloaguilarv@gmail.com', 85986822857),
(7, 'Bruno Ribeiro Rocha', 201809052475, 'brunoadm89@gmail.com', 85998356779),
(8, 'Diego Freitas de Araújo', 201808377583, 'personaldiego.f@gmail.com', 85997667264),
(9, 'Felipe Fritz Pessoa', 201802047042, 'fritzlumen@gmail.com', 85997495870),
(10, 'Francisco Rafael de Melo Lima', 201808377419, 'rafael.frml@gmail.com', 85986657061),
(11, 'FRANCISCO RANIEL FERREIRA AMORIM', 201808072715, 'ranielamorim@gmail.com', 85985984460),
(12, 'Frederico allysson pires correia', 201808238427, 'fredyallysson_007@yahoo.com.br', 85998240625),
(13, 'Gabriel Oliveira', 201808101952, 'gasalomaoo@icloud.com', 85996732808),
(14, 'Helio Matheus Gonçalves Figueira David', 201803183977, 'heliomatheus.david@gmail.com', 85987496967),
(15, 'JESSE SAMPAIO DE OLIVEIRA RODRIGUES', 201202104631, 'jessesampaio.ti@gmail.com', 85999055097),
(16, 'Joao Paulo Faustino dos Santos', 201808322291, 'mastegames25@gmail.com', 85991838416),
(17, 'JOSE WLADIMIR PESSOA NOBRE', 201603185721, 'josewladimir@gmail.com', 85997851240),
(18, 'Leonardo da Silva Mota Silveira', 200307131515, 'Ieonardomota14@hotmail.com', 85999610835),
(19, 'Lucas Saraiva de Aguiar', 201701161958, 'dellucarti@gmail.com', 85996218375),
(20, 'Manoel messias de assis junior', 201703123387, 'messiasJunior@outlook.com', 85985142809),
(21, 'Mariana Coimbra', 201309112702, 'marianacoimbrah@gmail.com', 85997700779),
(22, 'Mateus da Silva Oliveira', 201808101979, 'mateusoliveiran@gmail.com', 85986609651),
(23, 'Mateus Neves', 201809096375, 'mateus153lol@gmail.com', 85998248960),
(24, 'Mikael de Menezes Ferreira', 201808253541, 'mikael.ferreirafor@gmail.com', 85991075360),
(25, 'Rodrigo do Nascimento Machado', 201808012194, 'rodrigo.machado182@icloud.com', 85996395560),
(26, 'Thiago Moura Varela', 200901032983, 'thiagovarela.ti@gmail.com', 85997665238),
(27, 'ANA LUISA R. RODRIGUES', 200801520137, 'lu_rrolim@hotmail.com', 88996631450),
(28, 'Tiago Ferreira Alves', 201403132804, 'tiagoferreira159@gmail.com', 85986926416),
(29, 'Bruno L. R. De Carvalho', 200601373350, 'brunnocarvalho1983@gmail.com', 85991395783),
(30, 'manoel messias', 12345678900, 'email@email.com', 85985142809);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `Ordem_id` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` datetime NOT NULL,
  `cpf` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'arroz', 2.5),
(2, 'feijão', 8),
(3, 'macarrão', 3),
(4, 'açucar', 4),
(5, 'sal', 1.5),
(6, 'sabão', 4),
(7, 'Leite', 3),
(8, 'Farinha', 3),
(9, 'Café', 5),
(10, 'Oleo', 4),
(11, 'Manteiga', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`Ordem_id`),
  ADD KEY `FK_ordem` (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `FK_ordem` FOREIGN KEY (`id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
