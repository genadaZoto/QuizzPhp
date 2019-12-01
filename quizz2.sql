-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 04:32 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz2`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `TextQuestion` text COLLATE utf8_bin NOT NULL,
  `IdSujet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ID`, `TextQuestion`, `IdSujet`) VALUES
(3, 'Quelles sont les types de données JavaScript pour ES6 ?', 1),
(4, 'Comment changer le style/classes d’un élément ?', 1),
(5, 'Quelle est le nom de variable la plus souvent utlisé ?', 1),
(6, 'Quel est le code correct en Javascript pour changer le contenu HTML ? ', 1),
(7, 'window.JSON.stringify({panier.\"toto\"}); sers a....', 1),
(8, 'Quelle fonction retire un élément de la fin d\'un tableau ?', 2),
(9, 'Considerez cet array : \r\n\r\n$pays = array (\'Belgique\' => \'Bruxelles\', \'Italie\' => \'Milan\', \'Portugal\' => \'Lisbonne\');\r\n\r\nComment on peut rajouter un pays et sa capitale ?', 2),
(10, 'Considerez cet code : \r\n\r\n$i = 0\r\nwhile ($i > 15){\r\n    echo \"Salut à tous !\".$i;\r\n  }\r\n\r\nCe code posera des problèmes. Pourquoi ? ', 2),
(11, 'Qui est le père de PHP ?', 2),
(12, 'Quels sont les types de données en PHP ?', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quizzquestion`
--

CREATE TABLE `quizzquestion` (
  `ID` int(11) NOT NULL,
  `IdQuestion` int(11) NOT NULL,
  `IdQuizzUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `quizzutilisateur`
--

CREATE TABLE `quizzutilisateur` (
  `ID` int(11) NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  `Score` int(11) NOT NULL,
  `IdSujet` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

CREATE TABLE `reponse` (
  `ID` int(11) NOT NULL,
  `TextReponse` text COLLATE utf8_bin NOT NULL,
  `Vrai` varchar(50) COLLATE utf8_bin NOT NULL,
  `IdQuestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`ID`, `TextReponse`, `Vrai`, `IdQuestion`) VALUES
(1, 'Number, string, boolean, object, undefined, symbol, NaN.', 'Vrai', 3),
(2, 'String, negative, text, integer, defined', 'Faux', 3),
(3, 'Symbol, varchar, datetime, function, object.\r\n', 'Faux', 3),
(4, 'document.getElementById(\"myText\").className = \"anyclass\";', 'Vrai', 4),
(5, 'document.write \"I m a \"good\" boy\"\r\n', 'Faux', 4),
(6, 'var I = new object();\r\n', 'Faux', 4),
(7, 'let toto;', 'Vrai', 5),
(8, 'let titi; ', 'Faux', 5),
(9, 'let tata;', 'Faux', 5),
(10, 'document.getElementbyId(\"input1\").innerHTML = \"Hello World\";', 'Faux', 6),
(11, 'document.getElement(\"input\").innerHTML = \"Hello World\";', 'Vrai', 6),
(12, 'document.getElementbyName(\"input1).innerHTML = \"Hello World\";', 'Faux', 6),
(13, 'faire de requete Ajax', 'Faux', 7),
(14, 'lire et transformer en code ', 'Faux', 7),
(15, 'lire et transformer en chaîne', 'Vrai', 7),
(16, 'array_splice()', 'Faux', 8),
(17, 'array_pop()', 'Vrai', 8),
(18, 'array_pad()', 'Faux', 8),
(19, '$pays[\'Albanie\'] = \'Tirana\';', 'Vrai', 9),
(20, '$pays = [\'Albanie\' => \'Tirana\'];', 'Faux', 9),
(21, 'array.[\'Albanie\'] = \'Tirana\';', 'Faux', 9),
(22, 'Une boucle infinie ', 'Vrai ', 10),
(23, '$i n\'est pas défini', 'Faux', 10),
(24, 'Aucun problème', 'Faux', 10),
(25, 'Francisco Leal', 'Faux', 11),
(26, 'Rasmus Lerdorf', 'Vrai', 11),
(27, 'Brendan Eich\r\n', 'Faux', 11),
(28, 'Scalar, compound, special', 'Vrai', 12),
(29, 'Booleans, alphanumeric strings, float', 'Faux', 12),
(30, 'Characters, integer, booleans', 'Faux', 12);

-- --------------------------------------------------------

--
-- Table structure for table `sujet`
--

CREATE TABLE `sujet` (
  `ID` int(11) NOT NULL,
  `Nom` tinytext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sujet`
--

INSERT INTO `sujet` (`ID`, `Nom`) VALUES
(1, 'Javascript'),
(2, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(150) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(150) COLLATE utf8_bin NOT NULL,
  `Email` varchar(150) COLLATE utf8_bin NOT NULL,
  `Password` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `Nom`, `Prenom`, `Email`, `Password`) VALUES
(1, 'ezfezf', 'zefezfzef', 'root@zertzet.ert', 'genada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IdSujet` (`IdSujet`);

--
-- Indexes for table `quizzquestion`
--
ALTER TABLE `quizzquestion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IdQuestion` (`IdQuestion`),
  ADD KEY `IdQuizzUtilisateur` (`IdQuizzUtilisateur`);

--
-- Indexes for table `quizzutilisateur`
--
ALTER TABLE `quizzutilisateur`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IdSujet` (`IdSujet`),
  ADD KEY `IdUtilisateur` (`IdUtilisateur`);

--
-- Indexes for table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IdQuestion` (`IdQuestion`);

--
-- Indexes for table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `quizzquestion`
--
ALTER TABLE `quizzquestion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzutilisateur`
--
ALTER TABLE `quizzutilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`IdSujet`) REFERENCES `sujet` (`ID`);

--
-- Constraints for table `quizzquestion`
--
ALTER TABLE `quizzquestion`
  ADD CONSTRAINT `quizzquestion_ibfk_1` FOREIGN KEY (`IdQuestion`) REFERENCES `question` (`ID`),
  ADD CONSTRAINT `quizzquestion_ibfk_2` FOREIGN KEY (`IdQuizzUtilisateur`) REFERENCES `quizzutilisateur` (`ID`);

--
-- Constraints for table `quizzutilisateur`
--
ALTER TABLE `quizzutilisateur`
  ADD CONSTRAINT `quizzutilisateur_ibfk_1` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`ID`),
  ADD CONSTRAINT `quizzutilisateur_ibfk_2` FOREIGN KEY (`IdSujet`) REFERENCES `sujet` (`ID`);

--
-- Constraints for table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`IdQuestion`) REFERENCES `question` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
