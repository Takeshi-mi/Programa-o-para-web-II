-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2024 at 12:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tkfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_comidas`
--

CREATE TABLE `tb_comidas` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `url` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `estoque` int NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `ingredientes` text NOT NULL,
  `idRestaurante` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_comidas`
--

INSERT INTO `tb_comidas` (`id`, `nome`, `descricao`, `url`, `preco`, `estoque`, `categoria`, `ingredientes`, `idRestaurante`) VALUES
(2, 'Yakisoba TK Wagyu Imperial', ' Macarrão de trigo frito envolto em um molho secreto de inspiração japonesa, com fatias marmorizadas de carne Wagyu, brotos de bambu tenros e cogumelos Matsutake frescos. Um deleite para os paladares mais exigentes.', 'img/comidas/wagyu yakisoba.jpeg', '130.00', 20, 'Prato Quente', 'Macarrão yakisoba artesanal, carne Wagyu A5, brotos de bambu frescos, cogumelos Matsutake, molho yakisoba especial.', 0),
(3, 'Gyoza de Wagyu', 'Pequenos tesouros de massa delicadamente crocante, recheados com uma mistura luxuosa de carne Wagyu marmorizada e foie gras decadente. Servidos com um molho ponzu infundido com yuzu para um toque cítrico e refinado. (Porção com 6 unidades)', 'img/comidas/design-delicately-crispy-gyoza-filled-with-a-decadent-blend-of-marbled-wagyu-beef-and-foie-gras-acc-863433047.jpeg', '50.00', 50, 'Entrada', 'Massa de gyoza artesanal, carne Wagyu A5, foie gras, molho ponzu com yuzu.', 0),
(4, 'Sushi Misto Supremo', 'Uma sublime e cuidadosa seleção de sushis finamente trabalhados, incluindo nigiri de toro delicadamente marmorizado, sashimi de vieiras frescas e rolls decorativos de inspiração sazonal. Uma experiência sensorial que captura a essência da culinária japonesa em cada mordida.', 'img/comidas/sushi-supremo-combo.jpeg', '120.00', 30, 'Combo', 'Arroz de sushi premium, toro (atum gordo), vieiras frescas, nori de qualidade superior, wasabi fresco, gengibre em conserva.', 0),
(5, 'Temaki de Ouriço do Mar', 'Um cone de alga crocante cuidadosamente preenchido com ouriço do mar fresco, um dos tesouros mais preciosos dos mares, emparelhado com a suavidade do abacate e a vivacidade do caviar de tobiko. Uma explosão de luxo e sabor.', 'img/comidas/temaki-ourico.jpeg', '85.00', 40, 'Temaki', 'Alga nori premium, ouriço do mar fresco, abacate cremoso, caviar de tobiko, arroz de sushi artesanal.', 0),
(6, 'Tempura de Sorvete de Matchá com Diamantes de Chocolate', ' Uma obra-prima culinária que combina a suavidade do sorvete de matchá com a crocância da massa de tempurá, finalizado com pedaços de diamantes de chocolate negro Valrhona. Uma indulgência para os sentidos, digna dos paladares mais requintados.', 'img/comidas/matcha ice cream.jpeg', '45.00', 20, 'Sobremesa', 'Sorvete de matchá premium, massa de tempurá crocante, diamantes de chocolate Valrhona, açúcar de confeiteiro.', 0),
(7, 'Oniguiri', 'Cada oniguiri é cuidadosamente preparado com arroz premium envolvido em uma folha de nori crocante temperado com uma pitada de sal marinho do Himalaia e uma leve nota de wasabi artesanal. ', 'img/comidas/traditional-japanese-onigiri-gourmet-twist-nestled-on-a-fine-silk-mat-elevated-with-a-drizzle-of-.jpeg', '30.00', 30, 'Prato quente', 'Arroz, gergelim, nori, hondashi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_restaurantes`
--

CREATE TABLE `tb_restaurantes` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `localizacao` varchar(255) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_restaurantes`
--

INSERT INTO `tb_restaurantes` (`id`, `nome`, `descricao`, `localizacao`, `cidade`, `telefone`, `url`) VALUES
(1, 'TKFood Brasília', '   Comida oriental de qualidade    ', 'Asa Norte, S611', 'Brasília', '61998883132', 'img/restaurantes/nagano-restaurante-japones.jpg'),
(2, 'TKFood Formosa', '  O melhor restaurante oriental em Formosa e região\r\n  ', 'Centro, Rua 3', 'Formosa', '61995823154', 'img/restaurantes/japanese-restaurant-elegant (1).jpeg'),
(3, 'TKFood Cyberpunk', 'Restaurante Futurista', 'Rua future, nº2044', 'São Paulo', '31998786542', 'img/restaurantes/ciberpunk-japanese-restaurant.jpeg'),
(4, 'TKFood Santa Catarina', '    Um restaurante agradável e tradicional.   ', 'Rua 2, Nº14, centro', 'Santa Catarina', '5298776589', 'img/restaurantes/japanese-restaurant-elegant.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'takeshi', '123', 'e.takeshi.miura@gmail.com'),
(2, 'afranio', '123', 'afranio.neto@ifg.edu.br'),
(3, 'Marlus', '123', 'marlusGamer@hotmail.com'),
(4, 'usuario', 'senha', 'fasfas@afaf.vom'),
(5, 'sara', '123', 'saragatinha@yahoo.com'),
(6, 'usuario2', 'senha', 'senha@ga.com'),
(7, 'Hendrew', '123', 'hendrew@aaaa.com'),
(8, 'naoki', '321', 'naoki@gmail.com'),
(9, 'everton', '123', 'everton.cebolinha@fut.com'),
(10, 'wesley', 'safadao', 'wesley.safadao@show.com'),
(11, 'messi', 'gooool', 'messi@gol.com'),
(12, 'luis errado', 'developer', 'luisDeveloper@dev.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comidas`
--
ALTER TABLE `tb_comidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRestaurante` (`idRestaurante`);

--
-- Indexes for table `tb_restaurantes`
--
ALTER TABLE `tb_restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comidas`
--
ALTER TABLE `tb_comidas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_restaurantes`
--
ALTER TABLE `tb_restaurantes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
