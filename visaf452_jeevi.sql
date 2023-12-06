-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2023 at 11:05 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visaf452_jeevi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `description`, `image`) VALUES
(5, 'JEEVI’s Mission Is', 'Wellbeing, resilience and inner strength among school children, corporates, ageing, aged, disabled people and many others.\r\n\r\n<li> To help them reach their goals.</li>\r\n\r\n                            <li> To empower, enhance and promote the physical, psychological, mental, spiritual, and emotional health to maximise their life satisfaction.</li>\r\n                       ', 'img/about-mg.webp');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner`) VALUES
(4, 'img/banner-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE `benefit` (
  `id` int(10) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `subheading` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`id`, `heading`, `subheading`, `description`, `image`) VALUES
(1, 'People of Different Ages', 'PEOPLE OF DIFFERENT AGES', 'May increase emotional strength, resilience, promote mindfulness, self-regulation skills, improve memory, boosts immunity, increase self-awareness and self-esteem, improve balance, flexibility and strength of the body, support stress management, increase mental and physical energy and many more.\r\n\r\n', 'img/benefits-img-1.jpg'),
(2, 'For Seniors', 'For Seniors', 'May assist with supports, stress management, mental health, mindfulness, healthy eating, better self-care, improve strength, balance and flexibility, improved mental wellbeing, increased mental and physical energy, reduce chance of injury, positive impact on relationship (Numerous study show yoga’s benefits also in arthritis, osteopenia, balance issues, oncology, women’s health, chronic pain, and other specialities)\r\n\r\n', 'img/benefits-img-2.png'),
(3, 'For children', 'For children', 'May assist with self regulation, behavior getting more respectful, encourage empathy, self regulation skills, improve strength, body balance and flexibility, increase mindfulness, help recover from any eating disorder, Increased energy levels, Increased physical fitness, Encourages healthy eating, help with self control, increased confidence, awareness and self-esteem, encourages relaxation techniques, reduce chance of injury, positive impact on relationship, improved concentration, goal focus and academic performance, body awareness, improved breathing.\r\n\r\n', 'img/benefits-img-3.png'),
(4, 'For hospital patients', 'For hospital patients', 'May assist with assists recovery from mental fatigue, assists ability to cope, enhances positive outlook of life, assists with recovery from stress, illness and injury, improves productivity, improves and restores concentration. We can also help people recover from Trauma, and many other psychological challenges that affects the body as well.\r\n\r\n', 'img/benefits-img-4.png'),
(7, 'ml,', 'ml', 'nmhnjhyj', 'img/Screenshot (44).png'),
(8, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `choose`
--

CREATE TABLE `choose` (
  `id` int(10) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choose`
--

INSERT INTO `choose` (`id`, `heading`, `description`, `image`) VALUES
(3, 'Qualified & Certified', 'JEEVI is a team of skilled and certified Life coaches, Yoga Practitioners, Dietitians and other professionals working with private & corporate sectors, schools, nursing homes, aged care and disability facilities and communities in Sydney and across Australia.', 'img/feature-icon-1.png'),
(4, 'Client-Focused', 'We strive helping you achieve a positive and holistic  wellbeing. Our strategies are evidence based and scientifically proven and the use of those strategies have helped many in the past and we integrate all those strategies for the holistic results, customised as per your goals and Inner Strength Development.', 'img/feature-icon-2.png'),
(5, 'Wide Range of Services', 'We work with clients across different ages, gender, backgrounds and cultures. We’re proud to support Australian businesses, Schools and many other sectors  with Inner Strength Development Program (ISDP),   Employee Holistic Wellbeing Program, Workshops and different other services.', 'img/feature-icon-3.png'),
(6, 'Highly Experienced', 'JEEVI is the sum of a highly experienced team using a wide range of evidence-based practices, plus tested and proven processes tailored to the individual and groups’ needs of our clients.', 'img/feature-icon-4.png'),
(7, 'We Genuinely Care', 'At JEEVI, we genuinely care with the motto of ‘Prevention is Better than Cure’, we help clients either in their struggle or build their strength to prevent any physical and/or emotional challenge and maximise their life satisfaction.', 'img/feature-icon-5.png'),
(8, 'Fully Registered Life Coaches, Yoga Practitioners and Dietitians in Australia', 'Our life coaches, advisors/mentors, Yoga Practitioners and Dietitians are fully registered, licensed, and qualified. Each member of our team meets high standards in education, training, supervised practice, ethical and professional standards, and ongoing professional development.', 'img/feature-icon-6.png');

-- --------------------------------------------------------

--
-- Table structure for table `client_intake_form`
--

CREATE TABLE `client_intake_form` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `suburb` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `method_communication` varchar(255) DEFAULT NULL,
  `learn_about` varchar(255) DEFAULT NULL,
  `specify` varchar(255) DEFAULT NULL,
  `begin_program` varchar(255) DEFAULT NULL,
  `coaching_sessions` varchar(255) DEFAULT NULL,
  `participating_coaching` varchar(255) DEFAULT NULL,
  `coaching_interested` varchar(255) DEFAULT NULL,
  `marketing_communications` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_intake_form`
--

INSERT INTO `client_intake_form` (`id`, `title`, `full_name`, `address`, `suburb`, `state`, `country`, `age`, `email`, `mobile`, `occupation`, `gender`, `method_communication`, `learn_about`, `specify`, `begin_program`, `coaching_sessions`, `participating_coaching`, `coaching_interested`, `marketing_communications`, `created_at`, `updated_at`) VALUES
(31, 'mrs', 'ddd', 'dddddd', 'dddddddd', 'NSW', 'Asustralia', '23', 'onlydestination@gmail.com', '0432649513', 'Teacher', 'female', 'origin1', 'Insta', '', '25/02/24', 'twice a week', 'ffff', 'Holistic', 1, '2023-11-02 05:09:40', '2023-11-02 05:09:40'),
(30, 'mrs', 'ashish sharma', 'ghaziabad', 'ghaziabad', 'uttar pradesh', 'India', '155', 'ashishsharma2472000@gmail.com', '9105212161', 'dhbbv', 'Male', 'option2', 'Facebook', 'ddcdc', 'dcdcdc', 'cdcd', 'dcdcc', 'Dietetic', 1, '2023-10-19 08:38:18', '2023-10-19 08:38:18'),
(29, '', 'Usha', 'Corrimal', 'Corrimal', 'NSW', 'Australia', '50', 'onlydestination@gmail.com', '', 'JJJ', '', '', '', '', '', '', '', 'Holistic', 1, '2023-10-17 06:38:30', '2023-10-17 06:38:30'),
(26, '', 'Usha', 'Corrimal', 'Corrimal ', 'Nsw', 'Australia ', '50', 'onlydestination@gmail.com', '', 'Founder', '', '', '', '', '', '', '', '', 0, '2023-10-10 19:45:59', '2023-10-10 19:45:59'),
(27, 'mr', 'Test', 'SEf', 'Ahmedabad', 'Tennessee', 'United States', '18', 'het@gmail.com', '1234567890', 'seg', 'Male', 'origin1', 'Word of mouth', '', 'tomorrow', 'everyday', 'yes', 'Holistic, Yoga', 0, '2023-10-12 06:01:09', '2023-10-12 06:01:09'),
(28, 'mr', 'Test', 'SEf', 'Ahmedabad', 'Tennessee', 'United States', '18', 'het@gmail.com', '1234567890', 'seg', 'Male', 'origin1', 'Word of mouth', '', 'tomorrow', 'everyday', 'yes', 'Holistic, Yoga', 0, '2023-10-12 06:03:52', '2023-10-12 06:03:52'),
(23, '', 'Usha', 'Corrimal', 'Corrimal', 'NSW', 'Australia', '50', 'onlydestination@gmail.com', '', 'JJJ', '', '', '', '', '', '', '', '', 0, '2023-09-29 12:27:33', '2023-09-29 12:27:33'),
(22, 'mr', 'test', 'ujjain', 'test123', 'Madhya Pradesh', 'India', '22', 'test@gmail.com', '1234567890', 'Student', 'Male', 'origin1', 'Insta', '', '', '', '', 'Holistic, Dietetic, Yoga', 1, '2023-06-15 08:49:35', '2023-06-15 08:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(10) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(1100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `email`, `mobilenumber`) VALUES
(6, 'Suit 714, 368 Sussex Street, C/O Visafast Immigration Consultancy, Sydney, NSW, Australia, New South Wales', 'support@jeevi.com.au', '13000 JEEVI / 13000 53384');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `heading`, `description`, `image`) VALUES
(2, 'Usha Sagar', 'FOUNDER, DIRECTOR AND LIFE COACH', 'img/Screenshot (51).png'),
(3, 'Sam Dereck', 'EVENT ORGANIZER', 'img/Screenshot (53).png'),
(4, 'Mary Read', 'COMUNITY MANAGER', 'img/Screenshot (26).png'),
(5, 'Jenny Fish', 'EVENT DIRECTOR', 'img/Screenshot (28).png');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `description1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `description`, `description1`) VALUES
(2, 'In case of EMERGENCY, dial 000 for ambulance & immediate assistance. For the Mental Health Emergency Response Line, call on 1300 555 788 or 1800 676 822. In an EMERGENCY Dial 000 for an ambulance for immediate assistance in the event of an attempted suicide.\r\n\r\nIf a person is highly distressed and feeling unsafe or thinks they are a risk to themselves – go to a public emergency department where there are doctors, nurses and social workers 24 hours a day.', 'If you or someone you know is in crisis and needs help now, call triple zero (000). You can also call Lifeline on 13 11 14 — 24 hours a day, 7 days a week.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

CREATE TABLE `hello` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hello`
--

INSERT INTO `hello` (`id`, `heading`, `description`, `image`) VALUES
(1, 'Build A Strong Country', 'dfsrthc', 'img/Screenshot (26).png');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(10) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `subtitle` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `heading`, `subtitle`, `image`, `description`) VALUES
(6, 'Usha Sagar', 'FOUNDER, DIRECTOR AND LIFE COACH', 'img/team-1.webp', ''),
(8, 'Angeline Aguilar', 'BUSINESS DEVELOPMENT MANAGER\r\n', 'img/team-2.webp', ''),
(9, 'Simonetta Togliani', 'YOGA PRACTITONER\r\n', 'img/team/Simonetta Togliani.png', ''),
(10, 'Aimee Casahuilca', 'YOGA PRACTITONER\r\n', 'img/Aimee Casahuilca_01.jpg', ''),
(11, 'Aoife O_Neill', 'DIETITIAN', 'img/team/Aoife O_Neill.png', ''),
(12, 'Bini Thampi', 'LIFE COACH', 'img/team/Bini Thampi.png', ''),
(13, 'Georgina Goldstein', 'LIFE COACH', 'img/team/Georgina Goldstein.png', ''),
(14, 'Ros Bongiorno', 'DIETITIAN', 'img/team/Ros Bongiorno.png', ''),
(15, 'Sascha Jones', 'LIFE COACH', 'img/team/Sascha Jones.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `statistics` varchar(1000) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `statistics`, `heading`, `description`) VALUES
(5, 'img/country.png', 'According to the Australian Bureau of Statistics, in the 2020-2021, the Key statistics suggested the following details', 'Over two in five Australians aged 16-85 years (43.7% or 8.6 million people) had experienced a mental disorder at some time in their life\r\nOne in five (21.4% or 4.2 million people) had a 12-month mental disorder\r\nAnxiety was the most common group of 12-month mental disorders (16.8% or 3.3 million people)\r\nAlmost two in five people (39.6%) aged 16-24 years had a 12-month mental disorder');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `heading`, `description`, `image`) VALUES
(2, 'Our Vision', 'Meeting the diverse needs of individuals and communities in a comprehensive and integrated manner. It means providing individualized services, offering a wide range of services, integrating services, promoting wellness, and empowering individuals to take control of their lives and thrive.\r\n', 'img/vision-img.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose`
--
ALTER TABLE `choose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_intake_form`
--
ALTER TABLE `client_intake_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hello`
--
ALTER TABLE `hello`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `benefit`
--
ALTER TABLE `benefit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `choose`
--
ALTER TABLE `choose`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_intake_form`
--
ALTER TABLE `client_intake_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hello`
--
ALTER TABLE `hello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
