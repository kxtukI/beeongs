-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2022 às 02:29
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_ongs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ongs`
--

CREATE TABLE `ongs` (
  `ongsid` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `redirect` varchar(45) NOT NULL,
  `img-ref` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ongs`
--

INSERT INTO `ongs` (`ongsid`, `nome`, `categoria`, `redirect`, `img-ref`) VALUES
(1, 'Projeto Ica', 'Crianças e Adolescentes', 'projeto-ica', 'projeto-ica.png'),
(2, 'Casa de Repouso Emanuel', 'Idosos', 'casa-emanuel', 'casa-emanuel.jpg'),
(3, 'Lar Aninha', 'Crianças', 'lar-aninha', 'lar-aninha.png'),
(4, 'Assoc. Esp. Jesus e Caridade', 'Deficientes', 'espirita-jesus', 'assoc-jesus-caridade.png'),
(5, 'Equipotência', 'Crianças e Adolescentes', 'equipotencia', 'equipotencia.svg'),
(6, 'Educ. N. Sra. do Carmo', 'Crianças', 'edu-nossa-sra-carmo', 'edu-nsra-carmo.svg'),
(7, 'Inst. Coronel João Leite', 'Idosos', 'inst-coronel-leite', 'inst-coronel-leite.png'),
(8, 'Maguila', 'Crianças e Adolescentes', 'maguila', 'maguila.jpg'),
(9, 'Apdmm', 'Deficientes', 'apdmm', 'apdmm.svg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imgPost` varchar(255) DEFAULT NULL,
  `datapost` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`postid`, `userid`, `titulo`, `descricao`, `imgPost`, `datapost`) VALUES
(1, 6, 'Olá', 'Sou lindo', NULL, '2022-10-17 23:00:38'),
(2, 6, 'Olá', 'Sou lindo', NULL, '2022-10-17 23:00:38'),
(3, 6, 'asdasd', 'asdasdsa', NULL, '2022-10-17 23:06:02'),
(4, 6, 'asdasd', 'asdasdsa', NULL, '2022-10-17 23:06:02'),
(5, 6, 'fadsfasfasf', 'asfasfas', NULL, '2022-10-17 23:06:54'),
(6, 6, 'fadsfasfasf', 'asfasfas', NULL, '2022-10-17 23:06:54'),
(7, 6, 'sdasdasd', 'asdasdsa', NULL, '2022-10-17 23:07:21'),
(8, 6, 'sdasdasd', 'asdasdsa', NULL, '2022-10-17 23:07:21'),
(9, 6, 'ijasodiasjdoaj', 'doiajdsa\n', NULL, '2022-10-17 23:10:38'),
(10, 6, 'asdasdasd', 'doiajdsa\n', NULL, '2022-10-17 23:10:51'),
(11, 6, 'asdasdasd', 'asdasdsa', NULL, '2022-10-17 23:11:05'),
(12, 6, 'asdasdasd', 'asdasdsa', NULL, '2022-10-17 23:11:05'),
(13, 6, 'uefhiweuhi', 'uhfeiuf', NULL, '2022-10-28 15:05:42'),
(14, 6, 'wqdujnqwikj', 'nidqwjnidwe', '../img/post/367988foto-menina-balao.jpeg', '2022-10-28 15:06:12'),
(15, 6, 'rewfwerwerw', 'erwerwe', NULL, '2022-10-28 16:18:41'),
(16, 6, 'Ola', '12345', '../img/post/821471943664foto-carousel2.jpg', '2022-11-07 16:34:16'),
(17, 9, 'asdasdas', 'dasdas', NULL, '2022-11-07 18:37:54'),
(18, 5, 'dqw0idjqowiu', 'fjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofofjoweifjowifjeofo', NULL, '2022-11-13 02:23:03'),
(19, 10, 'oi', 'floresta', '../img/post/596676imagem_2022-11-19_165217736.png', '2022-11-19 16:52:25'),
(20, 10, 'aaaaaa', 'aaaaaaaaaaaaaaaaa', NULL, '2022-11-19 16:53:37'),
(21, 11, 'oi', 'gato', NULL, '2022-11-19 16:56:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `userid` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `imgUser` varchar(255) DEFAULT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `sobreMim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`userid`, `nome`, `email`, `cpf`, `senha`, `telefone`, `imgUser`, `dataCadastro`, `sobreMim`) VALUES
(3, 'felipe', 'fepiai@gmail.com', '24165848808', '12345', NULL, '../img/user/user-default.png', '2022-10-17 22:00:53', NULL),
(4, 'fwefwef', 'wefwefw@gmail.com', '27767783847', '12345', NULL, '../img/user/user-default.png', '2022-10-17 22:00:53', NULL),
(5, 'dasdasda', '', '25636435345', '12313', NULL, '../img/user/653639imagem_2022-11-16_211132325.png', '2022-10-17 22:10:05', NULL),
(6, 'Felipe Katuki', 'felipekatuki04@gmail.com', '45442065021', '12345', NULL, '../img/user/user-default.png', '2022-10-17 23:00:03', NULL),
(9, 'Mario Gomes', 'mariogomes@gmail.com', '75621120027', '12345', NULL, '../img/user/user-default.png', '2022-11-07 18:26:23', NULL),
(10, 'Felipe Katuki', 'felipe1@gmail.com', '12345678900', '123456', '19934573453', '../img/post/719905imagem_2022-11-24_222902780.png', '2022-11-17 17:53:39', 'aaaaaaaaaaaaaaaaaaaaaaaaaa'),
(11, 'karen', 'karen@gmail.com', '20319673049', '12345', NULL, '../img/post/338907imagem_2022-11-19_165629598.png', '2022-11-19 16:55:08', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ongs`
--
ALTER TABLE `ongs`
  ADD PRIMARY KEY (`ongsid`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`,`userid`),
  ADD KEY `userid` (`userid`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userid`,`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ongs`
--
ALTER TABLE `ongs`
  MODIFY `ongsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `usuarios` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
