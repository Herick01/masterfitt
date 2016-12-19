-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Dez-2016 às 22:42
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterfitt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `sobrenome`, `idade`, `genero`, `cpf`, `telefone`, `email`, `senha`, `endereco`, `bairro`, `estado`, `cidade`, `cep`, `nivel`) VALUES
(13, 'Herick', 'Mengue', 20, 'm', '03708464001', '5136671187', 'evandro.mengue@gmail.com', '219dcd759664a3681c938d753972093d', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Torres', '95580000', 3),
(14, 'Evandro', 'Raupp', 43, 'm', '00100100101', '5136671187', 'evandro.mengue@gmail.com', '219dcd759664a3681c938d753972093d', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Torres', '95580000', 3),
(18, 'Nicolas', 'Mengue', 12, 'm', '00000000000', '5136671187', 'nicolas.mengue@gmail.com', '786f46c4f7b5ba85332766e40fdc0901', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Três Cachoeiras', '95580000', 3),
(1, 'Paulo', 'Cardoso', 20, 'm', '2147483647', '5136671187', 'paulo.mengue@gmail.com', '219dcd759664a3681c938d753972093d', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Torres', '95580000', 3),
(19, 'Carla', 'Matos', 19, 'f', '23232323232', '5187878989', 'evandro.mengue@gmail.com', 'fca154b0bc25efaded2a5d8fd7616bb5', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Três Cachoeiras', '95580000', 3),
(20, 'Leonardo', 'Mengue', 21, 'm', '00000000000', '5136671187', 'evandro.mengue@gmail.com', '1c29410084685dc88359bce815f78809', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Três Cachoeiras', '95580000', 3),
(21, 'maycon', 'cardoso', 22, 'm', '2312345687', '51955000', 'maycon.cardoso@gmail.com', 'f9240e831e3b81c710b46a786571c271', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Três Cachoeiras', '95580000', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tonteirasDesmaio` tinyint(1) NOT NULL,
  `suplemento` tinyint(1) NOT NULL,
  `peso` float NOT NULL,
  `medicamento` tinyint(1) NOT NULL,
  `lesao` tinyint(1) NOT NULL,
  `imc` float NOT NULL,
  `hipertensao` tinyint(1) NOT NULL,
  `dorNoPeito` tinyint(1) NOT NULL,
  `doenca` varchar(45) NOT NULL,
  `coracao` varchar(45) NOT NULL,
  `fuma` tinyint(1) NOT NULL,
  `altura` float NOT NULL,
  `idAluno` int(11) NOT NULL,
  `data` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `tonteirasDesmaio`, `suplemento`, `peso`, `medicamento`, `lesao`, `imc`, `hipertensao`, `dorNoPeito`, `doenca`, `coracao`, `fuma`, `altura`, `idAluno`, `data`, `idUsuario`) VALUES
(26, 0, 0, 50, 0, 0, 15.4321, 0, 0, 'não', 'não ', 0, 1.8, 10, '2016-10-05', 1),
(22, 0, 0, 70, 0, 0, 21.6049, 0, 0, 'não', 'não ', 0, 1.8, 10, '2016-10-05', 2),
(21, 0, 0, 55, 0, 0, 16.9753, 0, 0, 'não', 'não ', 0, 1.8, 10, '2016-10-05', 1),
(27, 1, 1, 0.8, 1, 1, 8.88889, 1, 1, 'asd', 'asd', 1, 0.3, 13, '2016-10-14', 1),
(28, 1, 1, 95, 1, 1, 32.872, 1, 1, 'não', 'não', 1, 1.7, 14, '2016-10-14', 1),
(29, 1, 1, 64, 1, 1, 19.7531, 1, 1, 'asd', 'asd', 1, 1.8, 13, '2016-10-14', 1),
(30, 1, 1, 95, 1, 1, 29.321, 1, 1, 'não', 'não', 1, 1.8, 14, '2016-10-14', 3),
(31, 1, 1, 100, 1, 1, 30.8642, 1, 1, 'asd', 'asd', 1, 1.8, 13, '2016-10-14', 1),
(32, 0, 1, 50, 1, 1, 15.4321, 1, 1, 'asd', 'asd', 1, 1.8, 13, '2016-10-14', 1),
(33, 0, 0, 45, 0, 0, 15.5709, 0, 0, 'não', 'não', 0, 1.7, 18, '2016-10-14', 1),
(34, 0, 0, 55, 0, 0, 21.4844, 0, 0, 'não', 'não', 0, 1.6, 18, '2016-10-14', 1),
(35, 0, 0, 70, 0, 0, 27.3438, 0, 0, 'não', 'não', 0, 1.6, 18, '2016-10-14', 6),
(36, 0, 0, 80, 0, 0, 24.6914, 0, 0, 'não', 'não', 0, 1.8, 18, '2016-10-14', 1),
(40, 1, 1, 95, 1, 1, 29.321, 1, 1, 'não', 'não', 1, 1.8, 14, '2016-11-04', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicios`
--

DROP TABLE IF EXISTS `exercicios`;
CREATE TABLE IF NOT EXISTS `exercicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `idGrupoMuscular` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `exercicios`
--

INSERT INTO `exercicios` (`id`, `nome`, `idGrupoMuscular`) VALUES
(10, 'voador', 4),
(2, 'Rosca Martelo', 2),
(5, 'kickback', 1),
(9, 'pulia', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `gruposmusculares`
--

DROP TABLE IF EXISTS `gruposmusculares`;
CREATE TABLE IF NOT EXISTS `gruposmusculares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gruposmusculares`
--

INSERT INTO `gruposmusculares` (`id`, `nome`) VALUES
(1, 'Glúteo'),
(2, 'Biceps'),
(3, 'Triceps'),
(4, 'Peitoral'),
(5, 'Costas'),
(6, 'Deltoides'),
(7, 'Quadríceps'),
(8, 'Isquiotibiais'),
(9, 'Panturrilhas'),
(10, 'Abdominais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinadores`
--

DROP TABLE IF EXISTS `treinadores`;
CREATE TABLE IF NOT EXISTS `treinadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cref` varchar(20) DEFAULT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `treinadores`
--

INSERT INTO `treinadores` (`id`, `nome`, `sobrenome`, `idade`, `cpf`, `cref`, `telefone`, `email`, `senha`, `endereco`, `bairro`, `estado`, `cidade`, `cep`, `nivel`) VALUES
(1, 'Pedro', 'Cardoso', 20, '03708464001', '0303030303', '5136671187', 'evandro.mengue@gmail.com', '219dcd759664a3681c938d753972093d', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Torres', '95580000', 2),
(20, 'Marcos', 'Maggi', 43, '00100100101', '0202020202', '5136671187', 'evandro.mengue@gmail.com', '219dcd759664a3681c938d753972093d', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Torres', '95580000', 2),
(21, 'Camila', 'Teixeira', 18, '00000000000', '0101010101', '5136671187', 'nicolas.mengue@gmail.com', 'deb97a759ee7b8ba42e02dddf2b412fe', 'Alfredo Pedro Mengue, 882', 'Centro', 'RS', 'Três Cachoeiras', '95580000', 2),
(22, 'Ciro', 'Marconi', 35, '22222222222', '0404040404', '5136667366', 'ciro.marconi@gmail.com', '1b78938350ebb03daba6f27ace72c203', 'Rua Batinga, 132', 'Jardim do Bosque', 'RS', 'Cachoeirinha', '95586000', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `treinos`
--

DROP TABLE IF EXISTS `treinos`;
CREATE TABLE IF NOT EXISTS `treinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idExercicio` int(11) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `diaDaSemana` int(11) NOT NULL,
  `series` int(11) NOT NULL,
  `repeticoes` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `treinos`
--

INSERT INTO `treinos` (`id`, `idExercicio`, `idAluno`, `diaDaSemana`, `series`, `repeticoes`, `quantidade`) VALUES
(21, 5, 13, 2, 3, 12, 15),
(4, 2, 18, 4, 3, 5, 5),
(18, 2, 20, 3, 3, 12, 5),
(8, 2, 13, 1, 5, 1, 20),
(22, 5, 13, 1, 3, 15, 20),
(17, 5, 13, 3, 5, 10, 20),
(16, 5, 13, 1, 3, 12, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `nivel`) VALUES
(7, 'Herick', 'Mengue', 'herick.mengue@gmail.com', '219dcd759664a3681c938d753972093d', 1),
(8, 'Administrador', 'ADM', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'Evandro', '0', 'evandro.mengue@gmail.com', '616f07a2b2b38adebf717666fd5a2647', 1),
(4, 'Evandro', '0', 'evandro.mengue@gmail.com', '616f07a2b2b38adebf717666fd5a2647', 1),
(6, 'carlos', '0', 'carlos@gmail.com', 'dc599a9972fde3045dab59dbd1ae170b', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
