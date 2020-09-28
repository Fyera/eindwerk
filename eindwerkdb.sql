-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 05:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eindwerkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(15, 'michaelvllogin@gmail.com', '9146acfeb2113ed1', '$2y$10$ueDjC9zTP7dHJ7aH9d09ne1zjjsidFsdQosXpPnJ7JsBJybLNswDa', '1601022542');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `user_id`, `name`, `class`, `description`, `image`, `link`) VALUES
(1, 9, 'Ithrenil', 'Death Knight', '<p>Ithrenil stands at an average height for a male elf, having the kind of physical build that speaks more of speed than physical strength. His form is willowy and thin, with pale, unmarred skin stretched across narrow shoulders and hips. His thick, crimson hair cascades down his back like a sheet of smooth silk, ending just past his rear. Despite its length, it appears to be tangle-free and healthy, as the elven youth clearly spends a great deal of time caring for his hair. Delicate strands frame his face with a falsely carefree ease, the stark contrast in color like drops of blood in milk. Regardless, his face is elegant and fine-boned, with high cheekbones, a pointed chin, and a straight nose that gives him an infuriating air of nobility that is only emphasized by the mocking smile that normally twists the lovely cupid\'s bow of his lips.</p>\r\n<br>\r\n<p>While his movements possess the agile grace of a tiger on the prowl and his sultry, hooded eyes beckon customers in with a practiced ease, the lack of marks along his tight skin and his arrogant nature reveal his relative youth and upper-class upbringing.</p>\r\n<br>\r\n<p>Personality-wise, Ithrenil is fairly uppity with a tendency to feel as though he\'s somehow better than everyone else. While he has a quick wit, some may argue <p>that he lacks restraint due to a fairly short temper and a tendency to bite off more than he can chew (though he\'s rather good at running away). Despite this, the boy is fairly polite, his voice more of a taunting purr than a haughty sneer.</p>\r\n<br>\r\n<p>Most often, he is found wearing a well-fitted robe that flatters his lithe form not only through the superb tailoring, but also by how the neckline drapes all the way down to his waist, held in place by a tight leather belt, presumably to prevent indecent exposure.</p>', 'user_1.jpg', 'mZhH5YUoWz'),
(2, 9, 'Sindra', 'Warlock', 'Dark edgy stuff', 'user_6.jpg', 'prX65PBAg3'),
(11, 9, 'testiemcface', 'Warrior', '<p>Wargh and stuff! Plunder and loot!</p>', 'warrior_01.jpg', 'prX65PBAd8'),
(18, 9, 'iBurnStuff', 'Mage', '<p>Supernova, yeah, supernova</p>\r\n<p>Supernova goes pop</p>\r\n<p>Supernova, you think it\'s over, but</p>\r\n<p>The supernova don\'t stop</p>', 'mage_11.jpg', 'rO9O4Q17fq');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(8, 'Werner_J', '$2y$10$oRgG.foKOhvLC/IVkshDx.nneC9XNkHuYzMMH26flDEQgul/Serd2', 'Werner', 'Jacobs', 'fatezabaniya@gmail.com'),
(9, 'Michael_VL', '$2y$10$TQlEyak0EeZNkDZdfU6dkuf2TPLOe629v0LEPVe/t2FbOFshw4t.S', 'Michael', 'Van Laer', 'michaelvllogin@gmail.com'),
(11, 'michael_van_laer', '$2y$10$TQgp4RHgJ6EMTjKg75ZBU.CVT5r1UX5gr8J9k3tJn/aHX8XoWQSb.', 'michael', 'van laer', 'michaelvanlaer@gmail.com'),
(12, 'Michaelvl', '$2y$10$D.MjBC/R9JA9K26OvA49GO.hhOS4TKpCAv9UwnziXfvx5kr4QKC7O', '1', '2', 'kazehanwinter@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
