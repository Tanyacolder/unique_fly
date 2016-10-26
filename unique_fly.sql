-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 11:41 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unique_fly`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_views`
--

CREATE TABLE `client_views` (
  `client_name` varchar(39) NOT NULL,
  `client_email` varchar(20) NOT NULL,
  `client_msg` text NOT NULL,
  `client_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_views`
--

INSERT INTO `client_views` (`client_name`, `client_email`, `client_msg`, `client_contact`) VALUES
('anesu', 'anesu@gmail.com', 'jhtjrhljvnjnbgjkbnjrkvnjdfk.kjbnjgkbngjnbkj', '0777169697'),
('tanyaradzwa', 'tanyacolder@gmail.co', 'ghvhbfhvkjbgyugvhjbncb nzcb  hdfbbvfh', '0777169697');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` int(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `cont_firstname` varchar(30) NOT NULL,
  `cont_surname` varchar(30) NOT NULL,
  `cont_phone` int(30) NOT NULL,
  `cont_email` varchar(30) NOT NULL,
  `child_firstname` varchar(30) NOT NULL,
  `child_surname` varchar(30) NOT NULL,
  `child_sex` varchar(30) NOT NULL,
  `child_passport_no` varchar(30) NOT NULL,
  `child_nationality` varchar(30) NOT NULL,
  `child_date_of_birth` int(10) NOT NULL,
  `departure_date` int(10) NOT NULL,
  `departure_time` varchar(10) NOT NULL,
  `return_date` varchar(10) NOT NULL,
  `return_time` varchar(19) NOT NULL,
  `departing_from_city` varchar(30) NOT NULL,
  `departing_from_country` varchar(30) NOT NULL,
  `destination_city` varchar(30) NOT NULL,
  `destination_country` varchar(30) NOT NULL,
  `payment_option` varchar(30) NOT NULL,
  `air_line` varchar(20) NOT NULL,
  `am_pm_1` varchar(5) NOT NULL,
  `am_pm_2` varchar(5) NOT NULL,
  `fare` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `flight_option` varchar(20) NOT NULL,
  `pass_expiry` varchar(15) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_msg` text NOT NULL,
  `client_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_details`
--

INSERT INTO `passenger_details` (`firstname`, `surname`, `email`, `phone`, `sex`, `date_of_birth`, `nationality`, `cont_firstname`, `cont_surname`, `cont_phone`, `cont_email`, `child_firstname`, `child_surname`, `child_sex`, `child_passport_no`, `child_nationality`, `child_date_of_birth`, `departure_date`, `departure_time`, `return_date`, `return_time`, `departing_from_city`, `departing_from_country`, `destination_city`, `destination_country`, `payment_option`, `air_line`, `am_pm_1`, `am_pm_2`, `fare`, `class`, `passport_no`, `flight_option`, `pass_expiry`, `client_name`, `client_email`, `client_msg`, `client_phone`) VALUES
('tanya', 'mukondiwa', 'mukondiwa@gmail.com', 777169697, 'male', 12, 'zimbabwean', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '3333', '', '', '', '', '', ''),
('Anesu', 'mukondiwa', 'anesu@gmail.com', 777169697, 'male', 0, 'zimbabwean', 'tanyaradzwa', 'mukondiwa', 7771, 'mukondiwa@gmail', 'thabani', 'mukondiwa', 'male', '88888888888', 'south_african', 12121212, 24, '9:00', '23/02/2016', '1300', 'Harare', 'Zimbabwe', 'Miami', 'America', 'master_card', 'AB 790', 'am', 'pm', '$2 000', 'economy_class', '4444444444', '', '', '', '', '', ''),
('Harvey', 'Spector', 'spector@harvey.com', 232323232, 'male', 54545454, 'russian', 'mike', 'ross', 909090, 'mike@ross.com', 'louis', 'litt', 'male', '7373737', 'algerian', 2020202, 22, '1700', '23/02/2016', '700', 'Durban', 'South Africa', 'london', 'UK', 'eco_cash', '555hhh', 'pm', 'am', '50000', 'business_class', '6161616161', '', '', '', '', '', ''),
('Harvey', 'Spector', 'spector@harvey.com', 232323232, 'male', 54545454, 'russian', 'mike', 'ross', 909090, 'mike@ross.com', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '6161616161', '', '', '', '', '', ''),
('tanya', 'Spector', '', 0, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '', '', '', '', '', '', ''),
('tanya', 'mukondiwa', 'tanya@gmail.com', 0, 'male', 0, 'brazilian', 'ANESU', 'MUCCONTIOUR', 0, 'tanyaanesu@gmail.com', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '', '', '', '', '', '', ''),
('tanya', 'mukondiwa', 'anesu@gmail.com', 777169697, 'male', 12, 'french', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '6677hjxhjx', '', '', '', '', '', ''),
('tanya', 'anesu', 'tanya@gmail.com', 777169697, 'male', 2147483647, 'brazilian', 'hjdshjdj', 'hghghghgh', 0, 'juiuuuuuuugyu@gmail.com', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '77777777777', '', '', '', '', '', ''),
('mrdfffff', 'mrs', 'mr@mrs.com', 55555, 'male', 66, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '00000000', '', '', '', '', '', ''),
('Harvey', 'Spector', 'spector@harvey.com', 2147483647, 'male', 777566757, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '76767676767', '', '', '', '', '', ''),
('hhdhhdh', 'ywydgwq', 'ywdgwdh', 55555, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', 'wdyuugwh', '', '', '', '', '', ''),
('Thabani', 'Tafadzwa', 'thabani@tafadzwa.com', 2147483647, 'male', 12, 'brazilian', 'colder', 'anesu', 2147483647, 'anesu@colder.com', 'acfefscevec', 'rebgregrvrgrf', 'female', 'rfgrgtrgrbrb', 'french', 0, 32454325, '4543254353', '34543543', '345434334', 'tbytntntn', 'fnfnthndf', 'nytngfntn', 'hgnnnyuu', 'visa', 'hnnnfnhnn', 'pm', 'pm', '6000000000', 'business_class', '8888888888', 'oneway', '', '', '', '', ''),
('tafadzwa', 'mufudzi', 'mufudzi@gmail.com', 55555, 'male', 313131331, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '77777777777', 'round', '', '', '', '', ''),
('tanya', 'mrs', 'mr@mrs.com', 2147483647, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '898888888', 'round', '', '', '', '', ''),
('tanya', 'muccountiour', 'muko@gmail.com', 0, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '77777777777', 'round', '', '', '', '', ''),
('bbbbb', 'hhhhhhh', 'muko@gmail.com', 2147483647, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'female', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '3333333', 'round', '', '', '', '', ''),
('ghghghkjjjkj', 'nbbnbknj', 'erhefht@gmail.com', 2147483647, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'female', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', 'hetheth', 'round', '', '', '', '', ''),
('cossy', 'tawanda', 'hggkjjhjkk@gmail.com', 2147483647, 'male', 67676767, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'master_card', '', 'am', 'am', '', 'business_class', '55654455', 'round', '', '', '', '', ''),
('martha', 'mukondiwa', 'martha@gmail.com', 2147483647, 'male', 2121212, 'zimbabwean', 'tafa', 'vhdghhdhd', 0, 'jdhfiufhu@gmail.com', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '66666666', 'oneway', '', '', '', '', ''),
('tanya', 'mukondiwa', 'tanya@gmail.com', 0, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '5445646534534', 'round', '', '', '', '', ''),
('tanya', 'mukondiwa', 'tanya@gmail.com', 0, 'male', 0, 'brazilian', '', '', 0, '', 'harvey', 'pector', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '5445646534534', 'round', '', '', '', '', ''),
('tanya', 'mukondiwa', 'tanya@gmail.com', 0, 'male', 0, 'brazilian', '', '', 0, '', '', '', 'female', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '5445646534534', 'round', '', '', '', '', ''),
('mike', 'ross', 'ross@mike.com', 0, 'male', 1333421, 'brazilian', '', '', 0, '', '', '', 'female', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '311111111313', 'oneway', '221331341434341', '', '', '', ''),
('tanya', 'mukondiwa', 'tanya@gmail.com', 0, 'male', 2147483647, 'brazilian', '', '', 0, '', '', '', 'female', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '566756756567', 'round', '5557678678', '', '', '', ''),
('tanya', 'mukondiwa', '', 0, 'male', 2147483647, 'brazilian', '', '', 0, '', '', '', 'female', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '566756756567', 'round', '5557678678', '', '', '', ''),
('tanya', 'muccountiour', '', 0, 'male', 5453535, 'brazilian', '', '', 0, '', '', '', 'male', '', 'brazilian', 0, 0, '', '', '', '', '', '', '', 'eco_cash', '', 'am', 'am', '', 'business_class', '67565765', 'oneway', '675675867656', '', '', '', ''),
('tafadzwa', 'muccountiour', 'mukondiwa@gmail.com', 0, 'male', 12, 'brazilian', 'tanyaradzwa', 'mucco', 777169697, 'mukondiwa@gmail', 'mike', 'ross', 'male', '65656756567t878bbh', 'brazilian', 12, 12, '3:00', '12/12/2009', '300', 'bulawayo', 'Zimbabwe', 'london', 'usa', 'pay_pay', '78877', 'am', 'am', '2000', 'business_class', '5454564654556gfg', 'oneway', '12/12/1995', '', '', '', ''),
('', '', '', 0, '', 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', 0, '', 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('tanya', 'muccountiour', 'tanya@gmail.com', 0, 'male', 12, 'namibian', 'ANESU', 'tanya', 777169697, 'tanyaanesu@gmail.com', 'mukondiwa', 'tafadzwa', 'male', '676786897676jhj', 'brazilian', 12, 12, '12:02', '12/12/2009', '23:09', 'Harare', 'zimbabwe', 'manchester', 'uk', 'pay_pay', 'unique565', 'pm', 'am', '$2000', 'business_class', '565646475564564vc', 'round', '12/12/1995', '', '', '', ''),
('mike', 'ross', 'ross@mike.com', 0, 'male', 12, 'brazilian', 'harvey', 'spector', 777169697, 'spector@harvey.com', 'louis', 'litt', 'male', '567567567567HG', 'scotish', 12, 12, '9:00', '12/12/2009', '8:00', 'toronto', 'Canada', 'lusaka', 'zambia', 'master_card', 'unique565', 'am', 'pm', '90000', 'business_class', '72747287328938', 'oneway', '12/12/1995', '', '', '', ''),
('Anesu', 'mukondiwa', 'mukondiwa@gmail.com', 0, 'male', 12, 'french', 'cferferfrwe', 'dsfrfregfrwg', 777169697, 'tanyaanesu@gmail.com', 'hwhtwhtg', 'tyygytyugy', 'male', '76675675467586hgh', 'spanish', 12, 12, '2:00', '12/12/2009', '15:00', 'cairo', 'egypt', 'bulawayo', 'zimbabwe', 'eco_cash', 'unique565', 'am', 'am', '$2000', 'business_class', '65673526t52636bgv', 'oneway', '12/12/1995', '', '', '', ''),
('Anesu', 'mukondiwa', 'mukondiwa@gmail.com', 0, 'male', 12, 'french', 'cferferfrwe', 'dsfrfregfrwg', 777169697, 'tanyaanesu@gmail.com', 'hwjgcyugyegcvyu', 'mukondiwa', 'male', '567567567567HG', 'french', 12, 12, '3:00', '12/12/2009', '1300', 'Harare', 'zimbabwe', 'london', 'uk', 'eco_cash', 'unique8978', 'am', 'am', '$1500', 'business_class', '65673526t52636bgv', 'oneway', '12/12/1995', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `name` varchar(50) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `prize` varchar(20) NOT NULL,
  `stops` varchar(20) NOT NULL,
  `trip` varchar(20) NOT NULL,
  `ratings` varchar(40) NOT NULL,
  `children` varchar(40) NOT NULL,
  `infants` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`name`, `destination`, `time`, `prize`, `stops`, `trip`, `ratings`, `children`, `infants`) VALUES
('AA 708', ' Harare to London', '6:00am', '$1 500', '2 Stops', 'One-Way', 'Excellent flight ', '', ''),
('BB 809', 'Harare to Paris', '9:15am', '$1 400', 'Nonstop', 'Round', 'Satisfactory flight', '', ''),
('AA 503', 'Beijing to Bulawayo', '15:00', '$700', '1 stop 4hrs 45mins K', 'Round', 'Very good flight (7.5 out of 10) ', '', ''),
('Unique 904', 'Vic fall to Durban', '4:15am', '$200', 'Nonstop', 'One-Way', 'Fair flight (5.1 out of 10)', '', ''),
('__Unique 503__', '__ Harare to Lusaka__', '__16:00__', '__$150__', '__Nonstop__', '__Round trip__', '__Very good (7.5 out of 10)__', '', ''),
('__Unique 109__', '__Harare to Cape Town__', '__3:20__', '__$200__', '__Nonstop__', '__Round trip__', '__Satisfactory 8.9 out of 10__', '', ''),
('Flight Name Unique 007', 'Harare to Bulawayo', 'Time 12:00pm', 'Adults $60', 'Nonstop', 'One way', 'Good flight (7.1 out of 10)', 'Children 2-12 yrs $30', 'Infants 0-2yrs $10'),
('Flight Name Unique 080', 'Harare to London', 'Time 16:00', 'Adults $1 500', '1 stop 4hrs Egypt', 'Round  Trip', 'Excellent flight (9 out of 10)', 'Children 2-12yrs $700', 'Infants 0-2yrs $350'),
('Flight Name Unique 010', 'Harare to Port Elizabeth', 'Time 12:15pm', 'Prize $180', 'Nonstop', 'Round Trip', 'Fair flight (6.1 out of 10)', 'Children 2-12yrs $90', 'Infants 0-2yrs $50'),
('Flight Name Unique 180', 'Harare to Dubai', 'Time 19:00', 'Prize $800', '1 stop 4hrs Kenya', 'One-Way Trip', 'Very good flight (9.5 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $200'),
('Flight Name Unique 871', 'Harare to Cairo', 'Time 12:00pm', ' Price $950', 'Nonstop', 'Round Trip', 'Good flight (7.4 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $330'),
('Flight Name Unique 089', 'Harare to Maputo', 'Time 16:15', 'Prize $80', 'Nonstop', 'One-Way Trip', 'Fair flight (5.1 out of 10)', 'Children 2-12yrs $40', 'Infants 0-2yrs $25'),
('Flight Name Unique 077', 'Bulawayo to Harare', 'Time 15:00', '$70', 'Nonstop', 'Round Trip', 'Good flight (7.3 out of 10)', 'Children 2-12yrs $35', 'Infants 0-2yrs $15'),
('Flight Name Unique 100', 'Bulawayo to London', 'Time 19:00', 'Prize $1000', '1 stop 4hrs Egypt', 'Round  Trip', 'Very good flight (9.5 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $200'),
('Unique 607 ', 'Sao Paulo to Shangai', 'Time 12:00pm', 'Adults $2 000', '1 stop 5hrs ', 'One way', 'Excellent flight (9.9 out of 10)', 'Children 2-12yrs $1 200', 'Infants 0-2yrs $500'),
('Unique 809', 'Sydney to Harare', 'Time 19:00', 'Adults $1 300', '1 stop 4hrs Kenya', 'Round  Trip', 'Very good flight (9.5 out of 10)', 'Children 2-12yrs $700', 'Infants 0-2yrs $334'),
('Unique 608', 'Johannesburg to London', 'Time 14:18', '$1 500', '2 stops Hre & Lond', 'Round Trip', 'Very good flight (7.5 out of 10) ', 'Children 2-12yrs $800', 'Infants 0-2yrs $500'),
('Unique 101', 'Munich to Harare', 'Time 16:00', 'Adults $1 500', '1 stop 4hrs Angola', 'Round  Trip', 'Fair flight (5.1 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $200'),
('Unique 309', 'Athens to Barcelona', 'Time 23:16', 'Adults $600', 'Nonstop', 'Round Trip', 'Good flight (7.8 out of 10)', 'Children 2-12yrs $300', 'Infants 0-2yrs $130'),
('Unique 105', 'Amsterdam to Harare', 'Time 16:00', 'Adults $1 500', 'Nonstop', 'One-Way Trip', 'Very good flight (7.5 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $200'),
('Unique 004', 'Madrid to Harare', 'Time 12:00pm', 'Adults $1400', '1 stop Niger 5hrs', 'Round Trip', 'Satisfactory (8,5 out of 10)', 'Children 2-12yrs $700', 'Infants 0-2yrs $400'),
('Unique 999', 'Harare to Singapore', 'Time 16:00', 'Adults $900', 'Nonstop', 'One-Way Trip', 'Good flight (7.5 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $200'),
('Unique 409', 'Melbourne to Bulawayo', 'Time 12:15pm', 'Prize $1 600', '1 stop 5hrs', 'Round Trip', 'Excellent flight (9,3 out of 10)', 'Children 2-12yrs $700', 'Infants 0-2yrs $300'),
('Unique 401', 'Rio de Janeiro to Brussels', 'Time 16:09', 'Adults $1 589', '1 stop Portugal 8hrs', 'One-Way Trip', 'Satisfactory flight (8.8 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $206'),
('Unique 711', 'Geneva to Harare', 'Time 12:15pm', 'Adults $1800', '1 stop', 'Round Trip', 'Good flight (7.1 out of 10)', 'Children 2-12yrs $900', 'Infants 0-2yrs $500'),
('Unique 601', 'Harare to Newcastle', 'Time 16:50', 'Adults $1 500', '2 stops Kenya & Egyp', 'Round  Trip', 'Very good flight (9.5 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs 300'),
('Unique 809', 'London to Vienna', 'Time 12:15pm', 'Adults $500', 'Nonstop', 'Round Trip', 'Excellent flight (9,8 out of 10)', 'Children 2-12yrs $200', 'Infants 0-2yrs $50'),
('Unique 007', 'Harare to Rome', 'Time 16:16', 'Adults $1 500', '1 stop 4hrs Libya', 'Round  Trip', 'No Reviews', 'Children 2-12yrs $400', 'Infants 0-2yrs $100'),
('Unique 408', 'Mumbai to Maputo', 'Time 12:09pm', 'Adults $300', 'Nonstop', 'Round Trip', 'Fair flight (6.1 out of 10)', 'Children 2-12yrs $90', 'Infants 0-2yrs $50'),
('Unique 404', 'Newyork to Bulawayo', 'Time 14:00', 'Adults $1 500', '1 stop 4hrs Mexico', 'One-Way Trip', 'Very good flight (9.5 out of 10)', 'Children 2-12yrs $390', 'Infants 0-2yrs $220'),
('Unique 703', 'Harare to Toronto', 'Time 12:30pm', 'Adults $600', '1 stop Los Miami', 'One way', 'Satisfactory (8,3 out of 10)', 'Children 2-12yrs $250', 'Infants 0-2yrs $180'),
('Unique 109', 'Harare to Kuwait', 'Time 13:00', 'Adults $500', 'Nonstop', 'Round  Trip', 'Fair flight (5.1 out of 10)', 'Children 2-12yrs $300', 'Infants 0-2yrs $150'),
('Unique 508', 'Bulawayo to Harare', 'Time 12:30pm', 'Adults $80', 'Nonstop', 'Round Trip', 'Good flight (7.1 out of 10)', 'Children 2-12yrs $30', 'Infants 0-2yrs $15'),
('Unique 880', 'Bulawayo to Vic falls', 'Time 19:00', 'Adults $1 50', 'Nonstop', 'Round  Trip', 'Good flight (7.5 out of 10)', 'Children 2-12yrs $40', 'Infants 0-2yrs $20'),
('Unique 407', 'Bulawayo to Cape Town', 'Time 15:00pm', 'Adults $180', 'Nonstop', 'Round Trip', 'Satisfactory (8,5 out of 10)', 'Children 2-12yrs $90', 'Infants 0-2yrs $30'),
('Unique 034', 'Bulawayo to Chicago', 'Time 16:56', 'Prize $1200', '1 stop 4hrs Egypt', 'Round  Trip', 'Satisfactory flight(7,4 out of 10)', 'Children 2-12yrs $600', 'Infants 0-2yrs $200'),
('Unique', 'Vic falls to Harare', 'Time 18:00', 'Adults $60', 'Nonstop', 'One way', 'Good flight (6.1 out of 10)', 'Children 2-12yrs $40', 'Infants 0-2yrs $10'),
('Unique 102', 'Vic fall to Las Vegas', 'Time 16:00', 'Adults $1 500', '1 stop  Venezuela', 'One-Way Trip', 'Very good flight (9.5 out of 10)', 'Children 2-12yrs $700', 'Infants 0-2yrs $250'),
('Unique 788', 'Kampala to Harare', 'Time 23:00', 'Adults $359', 'Nonstop', 'One way', 'Very good flight (7.5 out of 10) ', 'Children 2-12yrs $189', 'Infants 0-2yrs $50'),
('Unique 007', 'Dar es Salaam to Dallas', 'Time 3:00am', 'Adults $1 300', '1 stop 4hrs ', 'Round  Trip', 'Satisfactory (7 out of 10)', 'Children 2-12yrs $400', 'Infants 0-2yrs $170');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
