-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 02:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_alphonsus_primary_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `Class_ID` int(11) NOT NULL,
  `Class_name` varchar(150) DEFAULT NULL,
  `Class_capacity` int(11) DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`Class_ID`, `Class_name`, `Class_capacity`, `Teacher_ID`) VALUES
(100, 'Reception Year', 15, 1),
(101, 'Year One', 15, 2),
(102, 'Year Two', 15, 3),
(103, 'Year Three', 15, 4),
(104, 'Year Four', 15, 5),
(105, 'Year Five', 15, 6),
(106, 'Year Six', 15, 7);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `Library_ID` int(11) NOT NULL,
  `Book_title` varchar(255) DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `Publication_year` int(11) DEFAULT NULL,
  `Availability` varchar(3) DEFAULT NULL,
  `Pupil_ID` int(11) DEFAULT NULL,
  `Teacher_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`Library_ID`, `Book_title`, `Author`, `Publication_year`, `Availability`, `Pupil_ID`, `Teacher_ID`) VALUES
(7878, 'Introduction to Math', 'John Cobeni', 2020, 'No', 1004, 4),
(7979, 'History of Science', 'Jane Smith', 2015, 'Yes', NULL, NULL),
(8080, 'Literature Essentials', 'Mark Johnson', 2018, 'No', 1033, NULL),
(8181, 'Geography Atlas', 'Emily White', 2019, 'Yes', NULL, NULL),
(8282, 'Programming Basics', 'Alex Brown', 2021, 'No', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `Parent_ID` int(11) NOT NULL,
  `Parent_name` varchar(250) DEFAULT NULL,
  `Parent_address` varchar(250) DEFAULT NULL,
  `Parent_email` varchar(250) DEFAULT NULL,
  `Parent_phone_number` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`Parent_ID`, `Parent_name`, `Parent_address`, `Parent_email`, `Parent_phone_number`) VALUES
(2121, 'Amanda Johnson', '654 Marshall Street, Manchester, UK', 'ajohnson@gmail.com', '+441234567890'),
(2122, 'Daniel Smith', '821 Willow Lane, Manchester, UK', 'dsmith@gmail.com', '+441234567891'),
(2123, 'Jennifer Davis', '432 Elmwood Drive, Manchester, UK', 'jdavis@gmail.com', '+441234567892'),
(2124, 'Michael Wilson', '567 Oak Ridge Road, Manchester, UK', 'mwilson@gmail.com', '+441234567893'),
(2125, 'Emily Brown', '745 Cedar Avenue, Manchester, UK', 'ebrown@gmail.com', '+441234567894'),
(2126, 'Brian Miller', '123 Maple Street, Manchester, UK', 'bmiller@gmail.com', '+441234567895'),
(2127, 'Sophia Clark', '987 Willow Lane, Manchester, UK', 'sclark@gmail.com', '+441234567896'),
(2128, 'Ethan Turner', '456 Elmwood Drive, Manchester, UK', 'eturner@gmail.com', '+441234567897'),
(2129, 'Emma Evans', '654 Oak Ridge Road, Manchester, UK', 'eevans@gmail.com', '+441234567898'),
(2130, 'Liam Hall', '789 Cedar Avenue, Manchester, UK', 'lhall@gmail.com', '+441234567899'),
(2131, 'Olivia Young', '345 Maple Street, Manchester, UK', 'oyoung@gmail.com', '+441234567890'),
(2132, 'Jackson Baker', '876 Willow Lane, Manchester, UK', 'jbaker@gmail.com', '+441234567891'),
(2133, 'Ava Fisher', '234 Elmwood Drive, Manchester, UK', 'afisher@gmail.com', '+441234567892'),
(2134, 'Noah Allen', '543 Oak Ridge Road, Manchester, UK', 'nallen@gmail.com', '+441234567893'),
(2135, 'Mia Walker', '876 Cedar Avenue, Manchester, UK', 'mwalker@gmail.com', '+441234567894'),
(2136, 'Lucas Mitchell', '234 Maple Street, Manchester, UK', 'lmitchell@gmail.com', '+441234567895'),
(2137, 'Sophia Adams', '987 Willow Lane, Manchester, UK', 'sadams@gmail.com', '+441234567896'),
(2138, 'Aiden Wright', '456 Elmwood Drive, Manchester, UK', 'awright@gmail.com', '+441234567897'),
(2139, 'Emma Turner', '654 Oak Ridge Road, Manchester, UK', 'eturner@gmail.com', '+441234567898'),
(2140, 'Liam Evans', '789 Cedar Avenue, Manchester, UK', 'levans@gmail.com', '+441234567899'),
(2141, 'Olivia Hall', '345 Maple Street, Manchester, UK', 'ohall@gmail.com', '+441234567890'),
(2142, 'Jackson Young', '876 Willow Lane, Manchester, UK', 'jyoung@gmail.com', '+441234567891'),
(2143, 'Ava Baker', '234 Elmwood Drive, Manchester, UK', 'abaker@gmail.com', '+441234567892'),
(2144, 'Noah Fisher', '543 Oak Ridge Road, Manchester, UK', 'nfisher@gmail.com', '+441234567893'),
(2145, 'Mia Allen', '876 Cedar Avenue, Manchester, UK', 'mallen@gmail.com', '+441234567894'),
(2146, 'Lucas Walker', '234 Maple Street, Manchester, UK', 'lwalker@gmail.com', '+441234567895'),
(2147, 'Sophia Mitchell', '987 Willow Lane, Manchester, UK', 'smitchell@gmail.com', '+441234567896'),
(2148, 'Aiden Adams', '456 Elmwood Drive, Manchester, UK', 'aadams@gmail.com', '+441234567897'),
(2149, 'Emma Wright', '654 Oak Ridge Road, Manchester, UK', 'ewright@gmail.com', '+441234567898'),
(2150, 'Liam Turner', '789 Cedar Avenue, Manchester, UK', 'lturner@gmail.com', '+441234567899'),
(2151, 'Olivia Evans', '345 Maple Street, Manchester, UK', 'oevans@gmail.com', '+441234567890'),
(2152, 'Jackson Hall', '876 Willow Lane, Manchester, UK', 'jhall@gmail.com', '+441234567891'),
(2153, 'Ava Young', '234 Elmwood Drive, Manchester, UK', 'ayoung@gmail.com', '+441234567892'),
(2154, 'Noah Baker', '543 Oak Ridge Road, Manchester, UK', 'nbaker@gmail.com', '+441234567893'),
(2155, 'Lia Farmer', '876 Cedar Avenue, Manchester, UK', 'mfisher@gmail.com', '+441234567894'),
(2156, 'Mia Fisher', '876 Cedar Avenue, Manchester, UK', 'mfisher@gmail.com', '+441234567894'),
(2157, 'Emma Turner', '789 Elmwood Drive, Manchester, UK', 'eturner@gmail.com', '+441234567894'),
(2158, 'Liam Walker', '321 Willow Lane, Manchester, UK', 'lwalker@gmail.com', '+441234567895'),
(2159, 'Olivia Martinez', '456 Cedar Avenue, Manchester, UK', 'omartinez@gmail.com', '+441234567896');

-- --------------------------------------------------------

--
-- Table structure for table `pupils`
--

CREATE TABLE `pupils` (
  `Pupil_ID` int(11) NOT NULL,
  `Pupil_name` varchar(150) DEFAULT NULL,
  `Pupil_address` varchar(250) DEFAULT NULL,
  `Pupil_medical_information` text DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pupils`
--

INSERT INTO `pupils` (`Pupil_ID`, `Pupil_name`, `Pupil_address`, `Pupil_medical_information`, `Class_ID`) VALUES
(1001, 'Emma Roberts', '22 Upper Marshal street, Manchester, UK', 'No allergies, BT: B-', 100),
(1002, 'Liam Smith', '11 Maple Street, Manchester, UK', 'Allergies: None', 100),
(1003, 'Olivia Davis', '8 Elmwood Drive, Manchester, UK', 'No medical information available', 100),
(1004, 'Noah Wilson', '17 Oak Ridge Road, Manchester, UK', 'Disabilities: None', 100),
(1005, 'Sophia Martinez', '35 Willow Lane, Manchester, UK', 'No allergies, BT: A+', 100),
(1006, 'Jackson Taylor', '14 Cedar Avenue, Manchester, UK', 'Allergies: Peanuts', 101),
(1007, 'Mia Anderson', '7 Maple Street, Manchester, UK', 'No known medical conditions', 101),
(1008, 'Lucas Garcia', '19 Elmwood Drive, Manchester, UK', 'Disabilities: None', 101),
(1009, 'Ava Rodriguez', '26 Oak Ridge Road, Manchester, UK', 'No allergies, BT: O-', 101),
(1010, 'Aiden Brown', '50 Willow Lane, Manchester, UK', 'No known medical conditions', 101),
(1011, 'Olivia Harris', '29 Cedar Avenue, Manchester, UK', 'Disabilities: None', 102),
(1012, 'Liam Jackson', '12 Maple Street, Manchester, UK', 'Allergies: Dairy', 102),
(1013, 'Emma White', '16 Elmwood Drive, Manchester, UK', 'No known medical conditions', 102),
(1014, 'Noah Moore', '23 Oak Ridge Road, Manchester, UK', 'Disabilities: None', 102),
(1015, 'Mia Thompson', '38 Willow Lane, Manchester, UK', 'No allergies, BT: B+', 102),
(1016, 'Jackson Hall', '18 Cedar Avenue, Manchester, UK', 'Allergies: Gluten', 103),
(1017, 'Sophia Lewis', '5 Maple Street, Manchester, UK', 'No known medical conditions', 103),
(1018, 'Lucas Scott', '21 Elmwood Drive, Manchester, UK', 'Disabilities: None', 103),
(1019, 'Ava King', '31 Oak Ridge Road, Manchester, UK', 'No allergies, BT: AB-', 103),
(1020, 'Aiden Turner', '48 Willow Lane, Manchester, UK', 'No known medical conditions', 103),
(1021, 'Olivia Ward', '27 Cedar Avenue, Manchester, UK', 'Disabilities: None', 104),
(1022, 'Liam Clark', '10 Maple Street, Manchester, UK', 'Allergies: Shellfish', 104),
(1023, 'Emma Baker', '15 Elmwood Drive, Manchester, UK', 'No known medical conditions', 104),
(1024, 'Noah Adams', '24 Oak Ridge Road, Manchester, UK', 'Disabilities: None', 104),
(1025, 'Mia Wright', '37 Willow Lane, Manchester, UK', 'No allergies, BT: A-', 104),
(1026, 'Jackson Moore', '15 Cedar Avenue, Manchester, UK', 'Allergies: Soy', 105),
(1027, 'Sophia Young', '9 Maple Street, Manchester, UK', 'No known medical conditions', 105),
(1028, 'Lucas Turner', '20 Elmwood Drive, Manchester, UK', 'Disabilities: None', 105),
(1029, 'Ava Walker', '30 Oak Ridge Road, Manchester, UK', 'No allergies, BT: O+', 105),
(1030, 'Aiden Fisher', '49 Willow Lane, Manchester, UK', 'No known medical conditions', 105),
(1031, 'Olivia Evans', '28 Cedar Avenue, Manchester, UK', 'Disabilities: None', 106),
(1032, 'Liam Hall', '13 Maple Street, Manchester, UK', 'Allergies: Eggs', 106),
(1033, 'Emma Mitchell', '17 Elmwood Drive, Manchester, UK', 'No known medical conditions', 106),
(1034, 'Noah Allen', '25 Oak Ridge Road, Manchester, UK', 'Disabilities: None', 106),
(1035, 'Kevin Douglas', '43 Willow lane, Manchester, UK', 'No allergies, no disabilities, BT: B+', 106);

-- --------------------------------------------------------

--
-- Table structure for table `pupils_parents`
--

CREATE TABLE `pupils_parents` (
  `Pupil_Parent_ID` int(11) NOT NULL,
  `Pupil_ID` int(11) DEFAULT NULL,
  `Parent_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pupils_parents`
--

INSERT INTO `pupils_parents` (`Pupil_Parent_ID`, `Pupil_ID`, `Parent_ID`) VALUES
(3122, 1001, 2121),
(3124, 1002, 2122),
(3126, 1003, 2123),
(3128, 1004, 2124),
(3130, 1005, 2125),
(3132, 1006, 2126),
(3134, 1007, 2127),
(3136, 1008, 2128),
(3138, 1009, 2129),
(3140, 1010, 2130),
(3142, 1011, 2131),
(3143, 1011, 2132),
(3145, 1012, 2133),
(3146, 1012, 2134),
(3148, 1013, 2135),
(3149, 1013, 2136),
(3151, 1014, 2137),
(3152, 1014, 2138),
(3154, 1015, 2139),
(3155, 1015, 2140),
(3157, 1016, 2141),
(3158, 1016, 2142),
(3160, 1017, 2143),
(3161, 1017, 2144),
(3163, 1018, 2145),
(3164, 1018, 2146),
(3166, 1019, 2147),
(3167, 1019, 2148),
(3169, 1020, 2149),
(3170, 1020, 2150),
(3172, 1021, 2151),
(3173, 1021, 2152),
(3175, 1022, 2153),
(3176, 1023, 2153),
(3178, 1024, 2154),
(3179, 1025, 2154),
(3181, 1026, 2155),
(3182, 1027, 2155),
(3184, 1028, 2156),
(3185, 1035, 2159);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Teacher_ID` int(11) NOT NULL,
  `Teacher_name` varchar(150) DEFAULT NULL,
  `Teacher_address` varchar(250) DEFAULT NULL,
  `Teacher_email` varchar(150) DEFAULT NULL,
  `Teacher_phone_number` varchar(13) DEFAULT NULL,
  `Annual_salary_£` int(11) DEFAULT NULL,
  `Background_check` text DEFAULT NULL,
  `Class_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Teacher_ID`, `Teacher_name`, `Teacher_address`, `Teacher_email`, `Teacher_phone_number`, `Annual_salary_£`, `Background_check`, `Class_ID`) VALUES
(1, 'Maria Dovrova', '878 Mashall Upper St, Manchester, UK', 'ajones@gmail.com', '+441111111111', 32000, 'DBS: clear, experience 4 years, MMU - Bachelors', 100),
(2, 'Emma Thompson', '22 Cedar Avenue, Manchester, UK', 'ethompson@gmail.com', '+441111222333', 35000, 'DBS: clear, Experience: 5 years, Education: MMU - Masters', 101),
(3, 'Liam Wilson', '11 Maple Street, Manchester, UK', 'lwilson@gmail.com', '+441111444555', 38000, 'DBS: clear, Experience: 8 years, Education: UOB - Bachelors', 102),
(4, 'Olivia Davis', '8 Elmwood Drive, Manchester, UK', 'odavis@gmail.com', '+441111666777', 40000, 'DBS: clear, Experience: 6 years, Education: UCL - Masters', 103),
(5, 'Noah Moore', '17 Oak Ridge Road, Manchester, UK', 'nmoore@gmail.com', '+441111888999', 42000, 'DBS: clear, Experience: 10 years, Education: LSE - Doctorate', 104),
(6, 'Sophia Hall', '35 Willow Lane, Manchester, UK', 'shall@gmail.com', '+441111000111', 36000, 'DBS: clear, Experience: 4 years, Education: UOM - Bachelors', 105),
(7, 'Jackson Clark', '14 Avenue St, Manchester, UK', 'jclark@gmail.com', '+441111123456', 39000, 'DBS: clear, No experience, Masters in Lancaster', 106);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`Class_ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`Library_ID`),
  ADD KEY `Pupil_ID` (`Pupil_ID`),
  ADD KEY `Teacher_ID` (`Teacher_ID`) USING BTREE;

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`Parent_ID`);

--
-- Indexes for table `pupils`
--
ALTER TABLE `pupils`
  ADD PRIMARY KEY (`Pupil_ID`),
  ADD KEY `Class_ID` (`Class_ID`);

--
-- Indexes for table `pupils_parents`
--
ALTER TABLE `pupils_parents`
  ADD PRIMARY KEY (`Pupil_Parent_ID`),
  ADD KEY `Pupil_ID` (`Pupil_ID`),
  ADD KEY `Parent_ID` (`Parent_ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Teacher_ID`),
  ADD KEY `Class_ID` (`Class_ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `Class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `Library_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8289;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `Parent_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2163;

--
-- AUTO_INCREMENT for table `pupils`
--
ALTER TABLE `pupils`
  MODIFY `Pupil_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1040;

--
-- AUTO_INCREMENT for table `pupils_parents`
--
ALTER TABLE `pupils_parents`
  MODIFY `Pupil_Parent_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3188;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `Teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`Teacher_ID`) REFERENCES `teachers` (`Teacher_ID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_Teacher` FOREIGN KEY (`Teacher_ID`) REFERENCES `teachers` (`Teacher_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `library_ibfk_1` FOREIGN KEY (`Pupil_ID`) REFERENCES `pupils` (`Pupil_ID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `library_ibfk_2` FOREIGN KEY (`Teacher_ID`) REFERENCES `teachers` (`Teacher_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pupils`
--
ALTER TABLE `pupils`
  ADD CONSTRAINT `pupils_ibfk_1` FOREIGN KEY (`Class_ID`) REFERENCES `classes` (`Class_ID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `pupils_parents`
--
ALTER TABLE `pupils_parents`
  ADD CONSTRAINT `pupils_parents_ibfk_1` FOREIGN KEY (`Pupil_ID`) REFERENCES `pupils` (`Pupil_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pupils_parents_ibfk_2` FOREIGN KEY (`Parent_ID`) REFERENCES `parents` (`Parent_ID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `fk_Class` FOREIGN KEY (`Class_ID`) REFERENCES `classes` (`Class_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
