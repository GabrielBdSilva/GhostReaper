-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2022 às 21:53
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ghostreaper`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dogtag`
--

CREATE TABLE `dogtag` (
  `idDgt` int(10) NOT NULL,
  `topDgt` int(10) NOT NULL,
  `statusDgt` varchar(100) NOT NULL,
  `nickDgt` varchar(100) NOT NULL,
  `maxDia` int(10) NOT NULL,
  `totalDgt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dogtag`
--

INSERT INTO `dogtag` (`idDgt`, `topDgt`, `statusDgt`, `nickDgt`, `maxDia`, `totalDgt`) VALUES
(1, 1, 'ativo', 'ᴳᴿﾠGABRIELﾠ☂', 0, 0),
(2, 2, 'ativo', 'ᴳᴿﾠCleber', 0, 0),
(3, 3, 'ativo', 'ᴳᴿﾠD7', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro`
--

CREATE TABLE `membro` (
  `idMembro` int(10) NOT NULL,
  `nickMembro` varchar(100) NOT NULL,
  `statusMembro` varchar(100) NOT NULL,
  `cargoMembro` varchar(100) NOT NULL,
  `fotoMembro` varchar(100) NOT NULL,
  `pttMembro` varchar(100) NOT NULL,
  `mvp` int(10) NOT NULL,
  `rdx1` int(10) NOT NULL,
  `dogtag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `membro`
--

INSERT INTO `membro` (`idMembro`, `nickMembro`, `statusMembro`, `cargoMembro`, `fotoMembro`, `pttMembro`, `mvp`, `rdx1`, `dogtag`) VALUES
(1, 'ᴳᴿﾠGABRIELﾠ☂', 'ativo', 'Lider', 'img/player1.png', 'img/patente1.png', 1, 1, 1),
(2, 'ᴳᴿﾠCleber', 'ativo', 'Lider-Interino', 'img/player5.png', 'img/patente2.png', 2, 2, 2),
(3, 'ᴳᴿﾠD7', 'ativo', 'Vice-Lider', 'img/player8.png', 'img/patente3.png', 3, 3, 3),
(4, 'ᴳᴿﾠGuh', 'ativo', 'Vice-Lider', 'img/player4.png', 'img/patente4.png', 4, 4, 4),
(5, 'ᴳᴿﾠGzin', 'ativo', 'Membro', 'img/player2.png', 'img/patente4.png', 5, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mvp`
--

CREATE TABLE `mvp` (
  `idMvp` int(10) NOT NULL,
  `topMvp` int(10) NOT NULL,
  `statusMvp` varchar(100) NOT NULL,
  `nickMvp` varchar(100) NOT NULL,
  `MVP` int(11) NOT NULL,
  `SVP` int(11) NOT NULL,
  `abateMvp` int(11) NOT NULL,
  `partidaMvp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mvp`
--

INSERT INTO `mvp` (`idMvp`, `topMvp`, `statusMvp`, `nickMvp`, `MVP`, `SVP`, `abateMvp`, `partidaMvp`) VALUES
(1, 1, 'ativo', 'ᴳᴿﾠGABRIELﾠ☂', 0, 0, 0, 0),
(2, 2, 'ativo', 'ᴳᴿﾠCleber', 0, 0, 0, 0),
(3, 3, 'ativo', 'ᴳᴿﾠD7', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rdx1`
--

CREATE TABLE `rdx1` (
  `idRdx1` int(10) NOT NULL,
  `topRdx1` int(10) NOT NULL,
  `statusRdx1` text NOT NULL,
  `pontuacaoRdx1` int(10) NOT NULL,
  `nickRdx1` varchar(15) NOT NULL,
  `vitoriaRdx1` int(4) NOT NULL,
  `derrotaRdx1` int(4) NOT NULL,
  `partidaRdx1` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rdx1`
--

INSERT INTO `rdx1` (`idRdx1`, `topRdx1`, `statusRdx1`, `pontuacaoRdx1`, `nickRdx1`, `vitoriaRdx1`, `derrotaRdx1`, `partidaRdx1`) VALUES
(1, 1, 'ativo', 210, 'ᴳᴿ  Gabriel', 3, 0, 3),
(2, 2, 'ativo', 140, 'ᴳᴿ  Cleber', 2, 0, 2),
(3, 3, 'ativo', 70, 'ᴳᴿﾠD7', 1, 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dogtag`
--
ALTER TABLE `dogtag`
  ADD PRIMARY KEY (`idDgt`);

--
-- Índices para tabela `membro`
--
ALTER TABLE `membro`
  ADD PRIMARY KEY (`idMembro`);

--
-- Índices para tabela `mvp`
--
ALTER TABLE `mvp`
  ADD PRIMARY KEY (`idMvp`);

--
-- Índices para tabela `rdx1`
--
ALTER TABLE `rdx1`
  ADD PRIMARY KEY (`idRdx1`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dogtag`
--
ALTER TABLE `dogtag`
  MODIFY `idDgt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `membro`
--
ALTER TABLE `membro`
  MODIFY `idMembro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `mvp`
--
ALTER TABLE `mvp`
  MODIFY `idMvp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `rdx1`
--
ALTER TABLE `rdx1`
  MODIFY `idRdx1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
