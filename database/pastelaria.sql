-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2019 às 01:53
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pastelaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `valor_atacado_produto` decimal(5,2) NOT NULL,
  `valor_varejo_produto` decimal(5,2) NOT NULL,
  `produto_id_produto` int(11) NOT NULL,
  `quantidade_estoque` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nome_menu` varchar(255) NOT NULL,
  `icone_menu` varchar(45) NOT NULL,
  `rota_menu` varchar(45) NOT NULL,
  `ativo_menu` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `nome_pedido` varchar(255) NOT NULL,
  `valor_total_pedido` decimal(5,2) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_produto`
--

CREATE TABLE `pedido_produto` (
  `id_pedido_produto` int(11) NOT NULL,
  `quantidade_pedido_produto` int(11) NOT NULL,
  `produto_id_produto` int(11) NOT NULL,
  `pedido_id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE `permissao` (
  `id_permissao` int(11) NOT NULL,
  `nome_permissao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` decimal(5,2) NOT NULL,
  `tipo_produto_id_tipo_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `submenu`
--

CREATE TABLE `submenu` (
  `id_submenu` int(11) NOT NULL,
  `nome_submenu` varchar(255) NOT NULL,
  `ativo_submenu` int(11) DEFAULT '1',
  `menu_id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `id_tipo_produto` int(11) NOT NULL,
  `descricao_tipo_produto` varchar(255) NOT NULL,
  `unidade_medida_id_unidade_medida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade_medida`
--

CREATE TABLE `unidade_medida` (
  `id_unidade_medida` int(11) NOT NULL,
  `descricao_unidade_medida` varchar(255) NOT NULL,
  `valor_unidade_medida` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `telefone_usuario` varchar(45) NOT NULL,
  `nascimento_usuario` datetime NOT NULL,
  `cep_usuario` int(11) NOT NULL,
  `rua_usuario` varchar(255) NOT NULL,
  `bairro_usuario` varchar(45) NOT NULL,
  `numero_usuario` varchar(45) NOT NULL,
  `referencia_usuario` varchar(45) NOT NULL,
  `complemento_usuario` varchar(45) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `data_de_criacao` datetime NOT NULL,
  `data_de_atualizacao` datetime NOT NULL,
  `ativo_usuario` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `telefone_usuario`, `nascimento_usuario`, `cep_usuario`, `rua_usuario`, `bairro_usuario`, `numero_usuario`, `referencia_usuario`, `complemento_usuario`, `email`, `password`, `token`, `remember_token`, `data_de_criacao`, `data_de_atualizacao`, `ativo_usuario`) VALUES
(1, 'Anderson Alves Bezerra', '(85) 98835-5751', '2000-02-03 00:00:00', 61944, 'Rua José Maria Almeida', 'Novo Maranguape', '163', 'Em frente ao G5', NULL, 'anderson.alvesprogrammer@gmail.com', '$2a$10$jjzLJXxKS/5qqylz5GHWjOvOabE/Ske6uFToaCCJtl8xEpAD5KRZ6', 'f9HdNLLqgMjxWdQVPihb2pTRvUJ5ybWjZYtgKrur', 'sMP2Naxg4HvkyXjxnU9IlhscbJeADICtyDhej6M7lj7p3ZBHRWmnoBmgYcu9', '2019-04-22 20:30:00', '2019-04-22 20:30:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_permissao_menu`
--

CREATE TABLE `usuario_permissao_menu` (
  `id_usuario_permissao_menu` int(11) NOT NULL,
  `permissao_id_permissao` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `menu_id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`),
  ADD KEY `fk_estoque_produto1_idx` (`produto_id_produto`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedido_usuario1_idx` (`usuario_id_usuario`);

--
-- Indexes for table `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD PRIMARY KEY (`id_pedido_produto`),
  ADD KEY `fk_pedido_produto_produto1_idx` (`produto_id_produto`),
  ADD KEY `fk_pedido_produto_pedido1_idx` (`pedido_id_pedido`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`id_permissao`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_produto_tipo_produto1_idx` (`tipo_produto_id_tipo_produto`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`),
  ADD KEY `fk_submenu_menu1_idx` (`menu_id_menu`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`id_tipo_produto`),
  ADD KEY `fk_tipo_produto_unidade_medida1_idx` (`unidade_medida_id_unidade_medida`);

--
-- Indexes for table `unidade_medida`
--
ALTER TABLE `unidade_medida`
  ADD PRIMARY KEY (`id_unidade_medida`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `usuario_permissao_menu`
--
ALTER TABLE `usuario_permissao_menu`
  ADD PRIMARY KEY (`id_usuario_permissao_menu`),
  ADD KEY `fk_usuario_permissao_menu_permissao1_idx` (`permissao_id_permissao`),
  ADD KEY `fk_usuario_permissao_menu_usuario1_idx` (`usuario_id_usuario`),
  ADD KEY `fk_usuario_permissao_menu_menu1_idx` (`menu_id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissao`
--
ALTER TABLE `permissao`
  MODIFY `id_permissao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `id_tipo_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unidade_medida`
--
ALTER TABLE `unidade_medida`
  MODIFY `id_unidade_medida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario_permissao_menu`
--
ALTER TABLE `usuario_permissao_menu`
  MODIFY `id_usuario_permissao_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `fk_estoque_produto1` FOREIGN KEY (`produto_id_produto`) REFERENCES `produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido_produto`
--
ALTER TABLE `pedido_produto`
  ADD CONSTRAINT `fk_pedido_produto_pedido1` FOREIGN KEY (`pedido_id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_produto_produto1` FOREIGN KEY (`produto_id_produto`) REFERENCES `produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_tipo_produto1` FOREIGN KEY (`tipo_produto_id_tipo_produto`) REFERENCES `tipo_produto` (`id_tipo_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `fk_submenu_menu1` FOREIGN KEY (`menu_id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD CONSTRAINT `fk_tipo_produto_unidade_medida1` FOREIGN KEY (`unidade_medida_id_unidade_medida`) REFERENCES `unidade_medida` (`id_unidade_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_permissao_menu`
--
ALTER TABLE `usuario_permissao_menu`
  ADD CONSTRAINT `fk_usuario_permissao_menu_menu1` FOREIGN KEY (`menu_id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_permissao_menu_permissao1` FOREIGN KEY (`permissao_id_permissao`) REFERENCES `permissao` (`id_permissao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_permissao_menu_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
