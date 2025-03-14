-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Fev-2025 às 19:14
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mapeamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms`
--

CREATE TABLE `adms` (
  `id_adms` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passe` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adms`
--

INSERT INTO `adms` (`id_adms`, `nome`, `apelido`, `email`, `passe`) VALUES
(1, 'matheus', 'Lutumba', 'matheus@gmail.com', '1100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `id_contas` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passe` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`id_contas`, `nome`, `apelido`, `email`, `passe`) VALUES
(1, '', '', 'matheus@gmail.com', 'hkljhoç'),
(4, 'Rufino', 'Lutumba', 'rufino@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `id_escolas` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `ensino` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `horario` varchar(12) DEFAULT NULL,
  `contacto` int(12) DEFAULT NULL,
  `desc_matricula` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`id_escolas`, `nome`, `ensino`, `endereco`, `horario`, `contacto`, `desc_matricula`) VALUES
(1, 'Magistério Primário', 'primario', '57C2+3HG, Luanda', NULL, NULL, NULL),
(2, 'Colégio Atlático-Luanda', 'primario', 'Rua Comandante Nzaji nº 137, Luanda, Luanda', NULL, NULL, NULL),
(3, 'Escola de Formação de Professores \"António Jacinto\"', 'ensino médio', '575J+J34, Luanda', NULL, NULL, NULL),
(4, 'Escola Dom Bosco', 'Primário, Secundário', 'Rua Kima Kienda, Boavista, Luanda.', '', 0, ''),
(5, 'Escola Ngola Kiluange', 'Ensino primário', 'Escola Ngola Kiluanje, Luanda', '10:00 - 14:0', 95525555, 'ssdcsds'),
(6, 'Escola Pública 9037', 'Ensino primário e secundário', 'Edificio Futungo, Luanda', '10:00 - 14:0', 95525555, 'knjnm,lm,-mkjknjm mkm j m m \r\nk nblnjn '),
(7, 'Instituto Médio de Economia de Luanda -IMEL', 'ensino médio', '56CW+38V, Luanda', '08:00 - 17:5', 0, ''),
(8, 'Colégio Torre do Saber', 'primario', '56GQ+7M5 Caixa Social das FAA, Rua direita do Patriota junto a, Luanda', 'segunda à se', 922520040, ''),
(9, 'IMIL-Instituto Médio Induatrial de Luanda', 'ensino médio', 'Largo Sweto, Luanda', 'segunda à se', 222, ''),
(10, 'Colégio São Francisco de Assis', 'Educação pré-escolar, 1º, 2º e 3º ciclos do ensino básico e ensino secundário', 'Zona ZR3, Bairro Talatona, Luanda Sul, Angola', '08:00 - 17:5', 942848592, ''),
(11, 'Escola do Tchuna', 'Ensino primário e secundário', 'Bairro Honga, Talatona, Luanda, Angola', '08:00 - 17:5', 0, ''),
(12, 'Colégio Emirais (Externato Emirais)', ' Educação pré-escolar até à 6ª classe', 'Urbanização Lar do Patriota, Rua 62, Luanda, Angola', '08:00 - 15:5', 948, ''),
(13, 'Escola Primária 11 de Novembro', 'Primário', 'Município do Cazenga, Luanda.', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `universidades`
--

CREATE TABLE `universidades` (
  `id_universidadess` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `ensino` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `horario` varchar(12) DEFAULT NULL,
  `contacto` int(12) DEFAULT NULL,
  `desc_matricula` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `universidades`
--

INSERT INTO `universidades` (`id_universidadess`, `nome`, `ensino`, `endereco`, `horario`, `contacto`, `desc_matricula`) VALUES
(1, 'sdvbdhjdvsjjf', 'primario,I ciclo', 'viana, luanda', '', 0, ''),
(2, 'Campus Universitário Universidade Agostinho Neto', 'ensino Superior', 'Rua da Camama e Rua do Estádio 11 de Novembro, Distrito Urbano da Cidade Universitária, Luanda, Angola', 'segunda à se', 997, ''),
(3, 'Universidade Óscar Ribas', 'Ensino Superior', 'Avenida Samora Machel, Município de Talatona, Luanda, Angola', '08:00 - 17:5', 922, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adms`
--
ALTER TABLE `adms`
  ADD PRIMARY KEY (`id_adms`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`id_contas`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id_escolas`);

--
-- Índices para tabela `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`id_universidadess`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adms`
--
ALTER TABLE `adms`
  MODIFY `id_adms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contas`
--
ALTER TABLE `contas`
  MODIFY `id_contas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id_escolas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `universidades`
--
ALTER TABLE `universidades`
  MODIFY `id_universidadess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
