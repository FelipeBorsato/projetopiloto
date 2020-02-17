-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Fev-2020 às 15:17
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `kart`
--

CREATE TABLE `kart` (
  `id_kart` int(4) NOT NULL,
  `hora` varchar(12) NOT NULL,
  `codigo_piloto` varchar(3) NOT NULL,
  `piloto` varchar(30) NOT NULL,
  `numerovolta` varchar(4) NOT NULL,
  `tempovolta` varchar(8) NOT NULL,
  `velocidademediadavolta` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `kart`
--

INSERT INTO `kart` (`id_kart`, `hora`, `codigo_piloto`, `piloto`, `numerovolta`, `tempovolta`, `velocidademediadavolta`) VALUES
(1, '23:49:08.277', '038', 'F.MASSA ', '1 ', '1:02.852', '44,275'),
(2, '23:49:10.858', '033', 'R.BARRICHELLO', '1', '1:04.352', '43,243'),
(3, '23:49:11.075', '002', 'K.RAIKKONEN ', '1 ', '1:04.108', '43,408'),
(4, '23:49:12.667', '023', 'M.WEBBER ', '1 ', '1:04.414', '43,202'),
(5, '23:49:30.976', '015', 'F.ALONSO', '1', '1:18.456', '35,47'),
(6, '23:50:11.447', '038', 'F.MASSA', '2', '1:03.170', '44,053'),
(7, '23:50:14.860', '033', 'R.BARRICHELLO ', '2 ', '1:04.002', '43,48'),
(8, '23:50:15.057', '002', 'K.RAIKKONEN ', '2 ', '1:03.982', '43,493'),
(9, '23:50:17.472', '023', 'M.WEBBER ', '2 ', '1:04.805', '42,941'),
(10, '23:50:37.987', '015', 'F.ALONSO ', '2 ', '1:07.011', '41,528'),
(11, '23:51:14.216', '038', 'F.MASSA', '3', '1:02.769', '44,334'),
(12, '23:51:18.576', '033', 'R.BARRICHELLO', '3', '1:03.716', '43,675'),
(13, '23:51:19.044', '002', 'K.RAIKKONEN', '3', '1:03.987', '43,49'),
(14, '23:51:21.759', '023', 'M.WEBBER', '3', '1:04.287', '43,287'),
(15, '23:51:46.691', '015', 'F.ALONSO', '3', '1:08.704', '40,504'),
(16, '23:52:01.796', '011', 'S.VETTEL', '1', '3:31.315', '13,169'),
(17, '23:52:17.003', '038', 'F.MASS', '4', '1:02.787', '44,321'),
(18, '23:52:22.586', '033', 'R.BARRICHELLO', '4', '1:04.010', '43,474'),
(19, '23:52:22.120', '002', 'K.RAIKKONEN', '4', '1:03.076', '44,118'),
(20, '23:52:25.975', '023', 'M.WEBBER', '4', '1:04.216', '43,335'),
(21, '23:53:06.741', '015', 'F.ALONSO', '4', '1:20.050', '34,763'),
(22, '23:53:39.660', '011', 'S.VETTEL', '2', '1:37.864', '28,435'),
(23, '23:54:57.757', '011', 'S.VETTEL', '3', '1:18.097', '35,633'),
(62626, '131335131', '131', 'f,dovmzvmdzov', '1313', '6355351', '316511');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `kart`
--
ALTER TABLE `kart`
  ADD PRIMARY KEY (`id_kart`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `kart`
--
ALTER TABLE `kart`
  MODIFY `id_kart` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62627;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
