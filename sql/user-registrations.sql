-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 07:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagegallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`,`first_name`, `last_name`, `email`, `password`) VALUES
(1, 'userOne','Bruce', 'Elgort', 'bruce.elgort@gmail.com', ''),
(2, 'userTwo','Gayle', 'Elgort', 'gayle.elgort@gmail.com', ''),
(7, 'userSeven','Bruce', 'sdfsdf', 'bruce@b.com', ''),
(9, 'userNine','ga', 'afdsdf', 'ga@ga.com', ''),
(10, 'userTen','sdfaf', 'asfsaff', 'sdfsadfsadf@b.com', ''),
(11, 'userEleven','asdfljadf;j', 'sdfsladfsadfsadfsa', 'sdfsdfasf@dkdkd.com', ''),
(12, 'userTwelve','sdfsdfsadf', 'sdfasdfasdf', 'ddddd@ddd.com', ''),
(13, 'userThirteen','sdfsadfasdfsdaf', 'sadfsadfsadfsdfas', 'bee@dddd.com', 'd81965400b6b1129f9afdd53e546a22e156a55a00ef2589839480e6d96a3580c3cf9db8c4b659637e8dbfd1cffbbe047e41b49a99e7fac83a7a6a89adeeb0aa2'),
(14, 'userFourteen','sdfsadfafgggg', 'sdfsdfasdfsadfsadf', 'sfddfsdaffdsfda@dsfsadfd.com', 'a49a4fb5f9e359fe546ffa48351bb94dd9207d3c888d8089a588a87f91fe1076c8bed98ab022fc63895d14281cc1125cb43e6f644bd4d148dd04f495713af594'),
(15, 'userFifteen','sdfsafff', 'sdfsdfsdfasdfsdafsa', 'bddkdkd@kdkdd.com', 'd716a4188569b68ab1b6dfac178e570114cdf0ea3a1cc0e31486c3e41241bc6a76424e8c37ab26f096fc85ef9886c8cb634187f4fddff645fb099f1ff54c6b8c'),
(16, 'userSixteen','Bruce', 'belgort', 'belgort@clark.edu', '9ac3e514215a1578592aba965a866560f331c51ba54677d7a41fb553e621bbb527c1f1ff9bd24953049ccd3b031259d1b5d74e55493b33fe7e88f9cb399c8394'),
(17, 'userSeventeen','Chris', 'Martin', 'chris@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(19, 'userNineteen','Gayle', 'Elgorte', 'gayle.elgort@elguji.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(20, 'userTwenty','Bob', 'Hughes', 'bob@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(21, 'userTwentyOne', 'Chris', 'Martin', 'c@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(23, 'userTwentyThree','Tim', 'Cook', 'tcook@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(24, 'userTwentyFour','Erin', 'Varner', 'erin@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(29, 'UserTwentyNine','Tucker', 'Elgort', 'tucker@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(30, 'userThirty','Robert', 'Hughes', 'bobh@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(31, 'userThirtyOne','Tucker', 'Elgort', 'tucker@dog.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(32, 'userThirtyTwo','Dave', 'Clark', 'dave@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(33, 'userThirtyThree','Brucie', 'Elgort', 'bruce@bruceelgort.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa'),
(35, 'userThirtyFive','Erin', 'Good', 'erin@erin.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa');

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;