-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 03, 2023 alle 09:08
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `leads`
--

CREATE TABLE `leads` (
  `id_utente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` int(65) NOT NULL,
  `messaggio` varchar(1005) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `leads`
--

INSERT INTO `leads` (`id_utente`, `nome`, `cognome`, `email`, `telefono`, `messaggio`) VALUES
(2, 'mark', 'andro', 'mark3andro@gmail.com', 2147483647, 'Ciao bel sito!'),
(3, 'Super', 'Mario', 'supermario@gmail.com', 1234567891, 'Mamma mia!'),
(5, 'Mark', 'guevarra', 'markandro@gmail.com', 329319371, 'someday'),
(6, 'Mark', 'Guevarra', 'mark@gmail.com', 123123, 'ciao prova'),
(7, 'Mark Andro', 'Guevarra', 'mark3and@gmail.com', 1234567891, 'Ciao!'),
(8, 'Camilla', 'Rossi', 'cami334@gmail.com', 1231414123, 'Buongiorno'),
(9, 'Mark', 'Guevarra', 'mark3andro@gmail.com', 1231233459, 'prova');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id_utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `leads`
--
ALTER TABLE `leads`
  MODIFY `id_utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
