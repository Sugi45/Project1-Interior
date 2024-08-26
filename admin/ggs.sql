-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 07:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggs`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `id` int(255) NOT NULL,
  `gid` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`id`, `gid`, `image`, `date`) VALUES
(11, 0, 'fs1.png', '2022-12-07'),
(12, 0, 'p4.jpg', '2022-12-07'),
(17, 1, 'viratkohli-1540490303.jpg', '2022-12-10'),
(19, 1, 'FCfxZO0zKL.jpg', '2022-12-10'),
(25, 2, 'Paragraph-on-Annual-Day.jpg', '2022-12-10'),
(29, 4, 'indian-independence.jpg', '2022-12-10'),
(32, 1, 'Suresh-Raina-5.jpg', '2022-12-10'),
(48, 2, 'annual.jpg', '2022-12-15'),
(49, 2, '1-840x320.png', '2022-12-15'),
(51, 2, 'Paragraph-on-Annual-Day.jpg', '2022-12-15'),
(52, 4, 'Compress_Independence_Day.jpg', '2022-12-15'),
(53, 2, 'event.jpg', '2022-12-15'),
(79, 1, 'Narendar.jpg', '2022-12-16'),
(82, 1, '8c0125e36beb167d55879c31cc336149-arJY0b.jpg', '2022-12-16'),
(83, 4, '9-india-independence-day-wallpaper-jpg.jpg', '2022-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `desc`) VALUES
(2, 'Suresh Raina', 'Suresh-Raina-5.jpg', 'In 2000, Raina decided to play cricket and subsequently moved from his hometown Muradnagar, Ghaziabad district to Lucknow, to attend the Guru Gobind Singh Sports College, Lucknow.[16] He rose to become the captain of the Uttar Pradesh U-16s and came to prominence amongst Indian selectors in 2002 when he was selected at the age of 15 and a half years for the U-19 tour to England, where he made a pair of half-centuries in the U-19 Test matches.[18] He toured Sri Lanka later that year with the U-17 team. He made his Ranji Trophy debut for Uttar Pradesh against Assam in February 2003 at the age of 16 but did not play another match until the following season. He debuted in List A Cricket against Madhya Pradesh at Indore in 2005 and scored 16 runs.[19] He played for India green, UP under 16, India Blue, India Red, Rest of India, India under 19, Indian board\'s president\'s XI, Rajasthan Cricket association\'s president\'s XI, India seniors, Central zone.[20] In Ranji trophy 2005-06 season he scored 620 in 6 games.[21] In 2018 Akshdeep Nath replaced him as UP\'s Ranji trophy captain due to poor performance of scoring 105 runs in 9 innings '),
(5, 'Ajay Thakur', 'FCfxZO0zKL.jpg', 'Kabaddi is a contact team sport. Played between two teams of seven players, the objective of the game is for a single player on offence, referred to as a \"raider\", to run into the opposing team\'s half of the court, touch out as many of their players and return to their own half of the court, all without being tackled by the defenders in 30 seconds. Points are scored for each player tagged by the raider, while the opposing team earns a point for stopping the raider. Players are taken out of the game if they are touched or tackled, but are brought back in for each point scored by their team from a tag or a tackle.  It is popular in the Indian subcontinent and other surrounding Asian countries. Although accounts of kabaddi appear in the histories of ancient India, the game was popularised as a competitive sport in the 20th century. It is the national sport of Bangladesh.[2] It is the state game of the Indian states of Tamil Nadu, Andhra Pradesh, Bihar, Haryana, Karnataka, Kerala, Maharashtra, Odisha, Punjab, Telangana, and Uttar Pradesh.[3]  There are two major disciplines of kabaddi: \"Punjabi kabaddi\", also referred to as \"circle styles\", comprises traditional forms of the sport that are played on a circular field outdoors, while the \"standard style\", played on a rectangular court indoors, is the discipline played in major professional leagues and international competitions such as the Asian Games. '),
(7, 'Narendar', 'Narendar.jpg', 'Talking about his passion for Kabaddi, Narender said that he started playing the sport from a young age of 11 or 12. Since there was no other sport played by the kids of his village, he decided to join them.\n\nLittle did the young Narender Kandola knew that it would come a career defining decision.\n\nFurthermore, Narender also relayed the information that Pro Kabaddi player Vikash Kandola also hails from his village. And that they have played Kabaddi together as youngsters.\n\nNoticiably, Vikas Kandola is the second highest paid player in the history of PKL.\n\nTalking about his journey to Pro Kabaddi, Kandola narrated how his good performance in Khelo India saw him being picked up by the Sports Authority of India.'),
(8, 'Aug 15 Independence', 'indian-independence.jpg', 'Happy Independence Day 2022 Wishes: 15th August History, Greetings, Quotes, Images, WhatsApp & Facebook Status: Independence Day is one of the most important days in India, and this year we are celebrating 76th Independence Day on 15 August 2022. This day is celebrated to remember the struggle that the freedom fighters fought to achieve the independence of our country. Due to this long struggle by our ancestors, India became a sovereign and democratic nation. The Government of India aims to hoist more than twenty crore Indian flags across the country on this occasion.\r\n\r\n\r\nThe Indian independence movement resumed in the early 20th century and many freedom fighters lost their lives in this fight. People started becoming a part of India’s freedom struggle under the leadership of Mahatma Gandhi, Jawaharlal Nehru, Maulana Azad, Sardar Patel, Subhash Chandra Bose, BR Ambedkar and many others and we finally got our independence on 15 August 1947.'),
(9, 'Virat Kohli', 'viratkohli-1540490303.jpg', 'Virat Kohli first came into the limelight in 2008, when he led the Indian U-19 cricket team to victory in 2008 U-19 Cricket World Cup He soon made his debut for the Indian team in August 2008. during a ODI match against in Sri Lanka.[6] Virat also became one of the valuable Indian captain in Test cricket with 27 test wins, 12 overseas test wins and highest winning percentage as captain in both Tests and ODIs. Kohli was ranked eighth in ESPN\'s list of world\'s most famous sportspeople in 2016.[7] Virat is the only current player to have a stand named after him in Delhi Firoz Shah Kotla stadium to honour his immaculate contributions to Indian cricke'),
(10, 'Annual Day', 'event.jpg', 'The beginning of a year is an eventful time for schools and students. It is also the time when most schools organize the most important event of the year  the annual day. Celebrating the schools annual day provides the school with an opportunity to showcase its achievements. This function also gives students an opportunity to showcase their various talents and interact with their teachers in a more informal environment. From dance performances to plays and musical events to speeches the school annual day is one day that is eagerly anticipated by children and parents alike, every year. This is also a day when achievers are felicitated for their accomplishments in the academic year.'),
(11, 'Suresh Raina', 'Suresh-Raina-5.jpg', 'In 2000, Raina decided to play cricket and subsequently moved from his hometown Muradnagar, Ghaziabad district to Lucknow, to attend the Guru Gobind Singh Sports College, Lucknow.[16] He rose to become the captain of the Uttar Pradesh U-16s and came to prominence amongst Indian selectors in 2002 when he was selected at the age of 15 and a half years for the U-19 tour to England, where he made a pair of half-centuries in the U-19 Test matches.[18] He toured Sri Lanka later that year with the U-17 team.  He made his Ranji Trophy debut for Uttar Pradesh against Assam in February 2003 at the age of 16 but did not play another match until the following season. He debuted in List A Cricket against Madhya Pradesh at Indore in 2005 and scored 16 runs.[19] He played for India green, UP under 16, India Blue, India Red, Rest of India, India under 19, Indian board\'s president\'s XI, Rajasthan Cricket association\'s president\'s XI, India seniors, Central zone.[20] In Ranji trophy 2005-06 season he scored 620 in 6 games.[21] In 2018 Akshdeep Nath replaced him as UP\'s Ranji trophy captain due to poor performance of scoring 105 runs in 9 innings averaging 11.66.[22]  In late 2003, he toured Pakistan for the U-19 Asian ODI Championship before being selected for the 2004 U-19 World Cup, where he scored three half-centuries, including a 90 scored off only 38 balls. He was then awarded a Border-Gavaskar scholarship to train at the Australian Cricket Academy and in early 2005, he made his first-class limited overs debut, and scored 645 runs that season at an average of 53.75'),
(12, 'Ajay Thakur', 'FCfxZO0zKL.jpg', 'Kabaddi is a contact team sport. Played between two teams of seven players, the objective of the game is for a single player on offence, referred to as a \"raider\", to run into the opposing team\'s half of the court, touch out as many of their players and return to their own half of the court, all without being tackled by the defenders in 30 seconds. Points are scored for each player tagged by the raider, while the opposing team earns a point for stopping the raider. Players are taken out of the game if they are touched or tackled, but are brought back in for each point scored by their team from a tag or a tackle.  It is popular in the Indian subcontinent and other surrounding Asian countries. Although accounts of kabaddi appear in the histories of ancient India, the game was popularised as a competitive sport in the 20th century. It is the national sport of Bangladesh.[2] It is the state game of the Indian states of Tamil Nadu, Andhra Pradesh, Bihar, Haryana, Karnataka, Kerala, Maharashtra, Odisha, Punjab, Telangana, and Uttar Pradesh.[3]  There are two major disciplines of kabaddi: \"Punjabi kabaddi\", also referred to as \"circle styles\", comprises traditional forms of the sport that are played on a circular field outdoors, while the \"standard style\", played on a rectangular court indoors, is the discipline played in major professional leagues and international competitions such as the Asian Games. '),
(13, 'Narendar Kandola', 'Narendar.jpg', 'Talking about his passion for Kabaddi, Narender said that he started playing the sport from a young age of 11 or 12. Since there was no other sport played by the kids of his village, he decided to join them.  Little did the young Narender Kandola knew that it would come a career defining decision.  Furthermore, Narender also relayed the information that Pro Kabaddi player Vikash Kandola also hails from his village. And that they have played Kabaddi together as youngsters.  Noticiably, Vikas Kandola is the second highest paid player in the history of PKL.  Talking about his journey to Pro Kabaddi, Kandola narrated how his good performance in Khelo India saw him being picked up by the Sports Authority of India.'),
(14, 'Suresh Raina', 'Suresh-Raina-5.jpg', 'In 2000, Raina decided to play cricket and subsequently moved from his hometown Muradnagar, Ghaziabad district to Lucknow, to attend the Guru Gobind Singh Sports College, Lucknow.[16] He rose to become the captain of the Uttar Pradesh U-16s and came to prominence amongst Indian selectors in 2002 when he was selected at the age of 15 and a half years for the U-19 tour to England, where he made a pair of half-centuries in the U-19 Test matches.[18] He toured Sri Lanka later that year with the U-17 team. He made his Ranji Trophy debut for Uttar Pradesh against Assam in February 2003 at the age of 16 but did not play another match until the following season. He debuted in List A Cricket against Madhya Pradesh at Indore in 2005 and scored 16 runs.[19] He played for India green, UP under 16, India Blue, India Red, Rest of India, India under 19, Indian board\'s president\'s XI, Rajasthan Cricket association\'s president\'s XI, India seniors, Central zone.[20] In Ranji trophy 2005-06 season he scored 620 in 6 games.[21] In 2018 Akshdeep Nath replaced him as UP\'s Ranji trophy captain due to poor performance of scoring 105 runs in 9 innings '),
(15, 'Ajay Thakur', 'FCfxZO0zKL.jpg', 'In 2000, Raina decided to play cricket and subsequently moved from his hometown Muradnagar, Ghaziabad district to Lucknow, to attend the Guru Gobind Singh Sports College, Lucknow.[16] He rose to become the captain of the Uttar Pradesh U-16s and came to prominence amongst Indian selectors in 2002 when he was selected at the age of 15 and a half years for the U-19 tour to England, where he made a pair of half-centuries in the U-19 Test matches.[18] He toured Sri Lanka later that year with the U-17 team. He made his Ranji Trophy debut for Uttar Pradesh against Assam in February 2003 at the age of 16 but did not play another match until the following season. He debuted in List A Cricket against Madhya Pradesh at Indore in 2005 and scored 16 runs.[19] He played for India green, UP under 16, India Blue, India Red, Rest of India, India under 19, Indian board\'s president\'s XI, Rajasthan Cricket association\'s president\'s XI, India seniors, Central zone.[20] In Ranji trophy 2005-06 season he scored 620 in 6 games.[21] In 2018 Akshdeep Nath replaced him as UP\'s Ranji trophy captain due to poor performance of scoring 105 runs in 9 innings ');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `image`, `description`, `date`) VALUES
(7, 'Kabbadi', 'FCfxZO0zKL.jpg', 'Kabaddi is basically a combative sport, with seven players on each side; played for a period of 40 minutes with a 5 minutes break (20-5-20). The core idea of the game is to score points by raiding into the opponent\'s court and touching as many defense players as possible without getting caught on a single breath', '2022-12-09'),
(10, 'Virat Kohli', 'viratkohli-1540490303.jpg', 'Virat Kohli (Hindi: [ʋɪˈɾɑːʈ ˈkoːɦliː] (listen); born 5 November 1988) is an Indian international cricketer and former captain of the India national cricket team. Widely regarded as one of the greatest batsmen of all time, Kohli plays as a right-handed batsman for Royal Challengers Bangalore in the Indian Premier League and for Delhi in domestic Indian cricket. With 40 wins out of 68 tests, Kohli is India\'s most successful test captain, and one of the most successful test captains of all time, behind only Graeme Smith, Ricky Ponting and Steve Waugh. ', '2022-12-10'),
(11, 'Suresh Raina', 'Suresh-Raina-5.jpg', 'Arguably among India\'s finest T20 batsmen, Suresh Raina stormed into the international scene as a teenage prodigy during the Greg Chappell regime. Typical left-hander\'s elegance, power game and a fine temperament were the hallmark of Raina the batsman and he exhibited it beautifully during his ODI debut in 2005.', '2022-12-10'),
(15, 'MS Dhoni', 'o66r0bb8_ms-dhoni-ipl_625x300_20_November_21.webp', 'M.S. Dhoni, in full Mahendra Singh Dhoni, (born July 7, 1981, Ranchi, Bihar [now Jharkhand] state, India), Indian cricketer whose rise to prominence in the early 21st century culminated in his captaincy of the Indian national team that won the one-day Cricket World Cup in 2011', '2022-12-15'),
(16, 'Volleyball', 'volley.jpg', 'Disha Ghosh is a young Indian volleyball player. Born in 2002, this 18-year-old girl has made the country proud. She pays in the opposite position. She has achieved the Asian Championship U17 2018 women’s title. In this article, you will find the complete details of Disha Ghosh. You can get complete details about her. ', '2022-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `date`) VALUES
(1, 'Sports ', '2022-12-10'),
(2, 'Annual ', '2022-12-09'),
(4, 'Independence', '2022-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `head` varchar(255) NOT NULL,
  `news` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `head`, `news`, `date`) VALUES
(5, 'Virat Kohli Century', 'India vs Bangladesh: Virat Kohli slams 44th ODI century, first in over three years', '2022-12-12'),
(9, 'IND VS BAN Test', 'India Won First Match india Lead The Series', '2022-12-19'),
(14, 'Mitchel Nesar Catch', 'Mitchel Nesar Caught the Wonderful Catch in the World', '2023-01-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
