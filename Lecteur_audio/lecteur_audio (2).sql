-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 21, 2021 at 08:38 AM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecteur_audio`
--

-- --------------------------------------------------------

--
-- Table structure for table `ALBUM`
--

CREATE TABLE `ALBUM` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `album_artist` varchar(60) NOT NULL,
  `album_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ARTIST`
--

CREATE TABLE `ARTIST` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `artist_album` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MUSIC`
--

CREATE TABLE `MUSIC` (
  `music_id` int(11) NOT NULL,
  `music_name` varchar(255) NOT NULL,
  `music_artist` varchar(60) NOT NULL,
  `music_album` varchar(60) NOT NULL,
  `music_type` varchar(40) NOT NULL,
  `music` varchar(255) NOT NULL,
  `music_photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MUSIC`
--

INSERT INTO `MUSIC` (`music_id`, `music_name`, `music_artist`, `music_album`, `music_type`, `music`, `music_photo`) VALUES
(25, 'YESSIR', 'Rarin', 'album2', 'HIP HOP', 'music/rarin-yessir.mp3', 'image/rarin.jpg'),
(29, 'Lemonade', 'Don Toliver, Gunna & Nav', 'album1', 'HIP HOP', 'music/internet-money-lemonade-lyrics-ft-don-toliver-gunna-nav.mp3', 'image/lemonade.jpeg'),
(30, 'moonlight', 'xxxtentacion', 'xxxtentacion album', 'HIP HOP', 'music/xxxtentacion-moonlight.mp3', 'image/moonlight.jpeg'),
(31, 'The-police-roxanne', 'The-police', 'Album_The-police', 'ROCK', 'music/the-police-roxanne.mp3', 'image/ThePolice_Roxanne.jpg'),
(32, 'IT\'S MY LIFE', 'Bon Jovi', 'Bon Jovi alnum', 'ROCK', 'music/bon-jovi-its-my-life-w-lyrics.mp3', 'image/bonjovi_itsmylife.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'Romain', 'romain.fr', '123'),
(2, 'maxime', 'maxime.fr', '123'),
(3, 'papa', 'papa.fr', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ALBUM`
--
ALTER TABLE `ALBUM`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `ARTIST`
--
ALTER TABLE `ARTIST`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `MUSIC`
--
ALTER TABLE `MUSIC`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ALBUM`
--
ALTER TABLE `ALBUM`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ARTIST`
--
ALTER TABLE `ARTIST`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `MUSIC`
--
ALTER TABLE `MUSIC`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
