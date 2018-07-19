-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2017 às 01:01
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irineu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `titulo1` varchar(200) NOT NULL,
  `descricao1` varchar(200) NOT NULL,
  `titulo2` varchar(200) NOT NULL,
  `descricao2` varchar(200) NOT NULL,
  `input1` varchar(200) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `botao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `titulo1`, `descricao1`, `titulo2`, `descricao2`, `input1`, `input2`, `input3`, `input4`, `botao`) VALUES
(1, 'ONDE NOS ENCONTRAM?', 'descricao de onde encontrar.', 'DEIXE UMAMESSAGE', 'textoa', 'nome', 'email', 'telefone', 'mensagem', 'enviarrr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_icon`
--

CREATE TABLE `contato_icon` (
  `id` int(100) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `tit_icon` varchar(255) NOT NULL,
  `desc_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato_icon`
--

INSERT INTO `contato_icon` (`id`, `icon`, `tit_icon`, `desc_icon`) VALUES
(1, 'fa fa-home', 'fa fa-homea', 'fa fa-home'),
(2, 'fa fa-comment', 'fa fa-commenta', 'fa fa-comment'),
(3, 'fa fa-phone', 'nosso telefonea', '3333333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `titulo`, `arquivo`) VALUES
(3, 'da', '8852b0cc544c807bf947f4c946b99875.jpg'),
(4, 'saadad', '46b2d3e1cac126a61ddc7e13ac4035ca.jpg'),
(5, 'asds', '8878d5f336f7e0d8554e92acb7c6dbd6.jpg'),
(6, 'dasdas', 'ff98959a523447ec20436bb8699514bf.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `titulo2` varchar(255) NOT NULL,
  `descricao2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `titulo`, `descricao`, `titulo2`, `descricao2`) VALUES
(1, 'nossos serviços', 'conheça o que nós fazemos', 'como fazemos', 'conheça nosso método de trabalho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `icones`
--

CREATE TABLE `icones` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `tit_icon` varchar(255) NOT NULL,
  `desc_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `icones`
--

INSERT INTO `icones` (`id`, `icon`, `tit_icon`, `desc_icon`) VALUES
(1, 'fa fa-css3', 'web design', 'template de sites'),
(2, 'fa fa-pencil ', 'design gráfico', 'artes gráficas'),
(3, 'fa fa-keyboard-o ', 'programação', 'desenvolvimento'),
(5, 'fa fa-cog', 'robótica', 'robôs'),
(6, 'fa fa-flask', 'análise', 'analisamos'),
(7, 'fa fa-inbox ', 'preparo', 'preparamos'),
(8, 'fa fa-gavel', 'execução', 'executamos'),
(9, 'fa fa-flag-checkered', 'finalização', 'finalizamos'),
(10, 'fa fa-stethoscope', 'testes', 'testamos'),
(11, 'fa fa-truck', 'entrega', 'entregamos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(1, 'teste', 'teste', 'teste', 'teste'),
(2, 'teste', 'teste', 'teste', 'teste'),
(3, 'teste', 'teste', 'teste', 'teste'),
(4, 'testeasas', 'testeasasas', 'testeasas', 'testeas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `numeros`
--

CREATE TABLE `numeros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `vitorias` int(100) NOT NULL,
  `derrotas` int(100) NOT NULL,
  `empates` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `numeros`
--

INSERT INTO `numeros` (`id`, `titulo`, `descricao`, `vitorias`, `derrotas`, `empates`) VALUES
(1, 'Veja', 'VEja', 11, 11, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `portifolio`
--

CREATE TABLE `portifolio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `sub_titulo` varchar(200) NOT NULL,
  `sub_descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `portifolio`
--

INSERT INTO `portifolio` (`id`, `titulo`, `descricao`, `sub_titulo`, `sub_descricao`) VALUES
(1, 'o que fizemos até agora', 'conheça nosso trabalho', 'curtiu????', 'clique no botão abaixo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `ataque` int(11) NOT NULL,
  `defesa` int(11) NOT NULL,
  `agilidade` int(11) NOT NULL,
  `forca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `skills`
--

INSERT INTO `skills` (`id`, `titulo`, `descricao`, `ataque`, `defesa`, `agilidade`, `forca`) VALUES
(1, 'dasdad', 'asdasdsad', 20, 20, 20, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `descricao`, `url`) VALUES
(1, 'Conheça o robô Irineu', 'portifolio'),
(2, 'Conheça nossa nossa equipe', 'sobre'),
(3, 'Divirta-se com nosso jogo', 'entretenimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id`, `arquivo`, `nome`, `cargo`, `descricao`) VALUES
(1, '522457deaf4e1a2089514638f8c36b4d.jpg', 'William', 'Web', 'bom'),
(2, 'fc59877e7536a012a51d7802a6d9673f.jpg', 'Pedro', 'Programador', 'TOp'),
(3, '27f2d47d7b5e3f7f7b40d10dc34e70e8.jpg', 'Gabriel', 'Artista', 'Show');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato_icon`
--
ALTER TABLE `contato_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icones`
--
ALTER TABLE `icones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numeros`
--
ALTER TABLE `numeros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portifolio`
--
ALTER TABLE `portifolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contato_icon`
--
ALTER TABLE `contato_icon`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `icones`
--
ALTER TABLE `icones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `numeros`
--
ALTER TABLE `numeros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portifolio`
--
ALTER TABLE `portifolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
