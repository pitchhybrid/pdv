-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2018 às 05:23
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";


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

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `usuarios`(nome,senha) VALUES ("admin","admin");

INSERT INTO `produtos`(nome,preco) VALUES ("arroz","2.50");
INSERT INTO `produtos`(nome,preco) VALUES ("feijão","8.00");
INSERT INTO `produtos`(nome,preco) VALUES ("macarrão","3.00");
INSERT INTO `produtos`(nome,preco) VALUES ("açucar","4.00");
INSERT INTO `produtos`(nome,preco) VALUES ("sal","1.50");
INSERT INTO `produtos`(nome,preco) VALUES ("sabão","4.00");
INSERT INTO `produtos`(nome,preco) VALUES ("Leite","3.00");
INSERT INTO `produtos`(nome,preco) VALUES ("Farinha","3.00");
INSERT INTO `produtos`(nome,preco) VALUES ("Café","5.00");
INSERT INTO `produtos`(nome,preco) VALUES ("Oleo","4.00");
INSERT INTO `produtos`(nome,preco) VALUES ("Manteiga","3.00");

INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Alan Jeison Vieira Vilar","201808322355","jeisonvilar@gmail.com","85985031509");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("ALBERTO AMORIM BRAGA","201808252942","albertoamorim@hotmail.com","85987145655");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Alysson Vieira Bezerra","201602413746","alysonvra@gmail.com","88991660672");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("ANTÔNIO EMÍLIO PAIVA VASCONCELOS","201808333667","antonioerniliopv@gmail.com","35399308507");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Arievlis Pessoa Da Silveira Junior","201808362624","arievlisjunior@gmail.com","85997818900");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Arturo Gonzalo Aguilar Villalobos","201808322061","gonzaloaguilarv@gmail.com","85986822857");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Bruno Ribeiro Rocha","201809052475","brunoadm89@gmail.com","85998356779");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Diego Freitas de Araújo","201808377583","personaldiego.f@gmail.com","85997667264");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Felipe Fritz Pessoa","201802047042","fritzlumen@gmail.com","85997495870");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Francisco Rafael de Melo Lima","201808377419","rafael.frml@gmail.com","85986657061");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("FRANCISCO RANIEL FERREIRA AMORIM","201808072715","ranielamorim@gmail.com","85985984460");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Frederico allysson pires correia","201808238427","fredyallysson_007@yahoo.com.br","85998240625");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Gabriel Oliveira","201808101952","gasalomaoo@icloud.com","85996732808");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Helio Matheus Gonçalves Figueira David","201803183977","heliomatheus.david@gmail.com","85987496967");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("JESSE SAMPAIO DE OLIVEIRA RODRIGUES","201202104631","jessesampaio.ti@gmail.com","85999055097");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Joao Paulo Faustino dos Santos","201808322291","mastegames25@gmail.com","85991838416");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("JOSE WLADIMIR PESSOA NOBRE","201603185721","josewladimir@gmail.com","85997851240");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Leonardo da Silva Mota Silveira","200307131515","Ieonardomota14@hotmail.com","85999610835");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Lucas Saraiva de Aguiar","201701161958","dellucarti@gmail.com","85996218375");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Manoel messias de assis junior","201703123387","messiasJunior@outlook.com","85985142809");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Mariana Coimbra","201309112702","marianacoimbrah@gmail.com","85997700779");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Mateus da Silva Oliveira","201808101979","mateusoliveiran@gmail.com","85986609651");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Mateus Neves","201809096375","mateus153lol@gmail.com","85998248960");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Mikael de Menezes Ferreira","201808253541","mikael.ferreirafor@gmail.com","85991075360");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Rodrigo do Nascimento Machado","201808012194","rodrigo.machado182@icloud.com","85996395560");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Thiago Moura Varela","200901032983","thiagovarela.ti@gmail.com","85997665238");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("ANA LUISA R. RODRIGUES","200801520137","lu_rrolim@hotmail.com","88996631450");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Tiago Ferreira Alves","201403132804","tiagoferreira159@gmail.com","85986926416");
INSERT INTO `clientes`(nome,CPF,email,telefone) VALUES ("Bruno L. R. De Carvalho","200601373350","brunnocarvalho1983@gmail.com","85991395783");

COMMIT;