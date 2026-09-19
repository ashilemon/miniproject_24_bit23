-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2026 at 05:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject_24_bit23`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_size` varchar(255) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `p_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_size`, `p_price`, `p_image`) VALUES
(1, 'Silk Evening Gown', 'M', 3500.00, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAFwAXAMBIgACEQEDEQH/xAAcAAEBAAIDAQEAAAAAAAAAAAAABwQGAwUIAQL/xABBEAABAwIBBggLBgcBAAAAAAABAAIDBBEFBgcSITFREyJBcYGRscEUMlJhYnKSoaLR4TNjc8LD8CY1QkSCg/Ek/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAIDAf/EABoRAQADAQEBAAAAAAAAAAAAAAABAjERQSH/2gAMAwEAAhEDEQA/AKwiIgIiIMDHcTjwbCp8RmZpxwaJeL24pcASPOAb25dizY3tkY2SNwcxwDmuGwg7CtPztTtiyPfC51vCqmKIc4Jk/TXXZtMpYmYY3C8TnZFwDXOp5JHWHBtGk5t/RFz6oPkrnfqufOt0xfFIMKhhfLxpJ5WwxMBtpOJ7ANZ/4s9SLF8bdlHiJrIS5tOOJStcLERj+ojkLjxuho5FWoJRPBHMNkjA/rF+9ci3ZdtXkQ/aIipAiIgIiICIiDTM7dF4XkbLKCdKjnjnFuXaz9QnoUWkmkq6bgWt0mOIJYTbWN3WVdc5NZTUmRuICrfo+ENEMTbXL3k6gOgE8wKgVOCyYOjLmkhx4ptsa4jZ5wps0pjtcHNbHWBri4ulHBstrvdejY4xDG2JvisAaOYalAcIrBBiUHhDgYop2Oe5zdbQHXvq5ty9AXDtYIIOsEcq5UuIiK2YiIgIiICIiCTZ7a/Sq8Nw9ruLDG6oe3zuOi09Aa/2lM43WdFt1ue3r01t2dipFRllWMBBEMbIubiNPa8rTh4lM7fM79+9RLWMdtE7RxCTdtcN4u4d6uuRFUavJbD3OdpPjj4J3+JsPcAoMH6WLzs9EAdDx9VY81cpfk/OzkbUk9bWpXS+NzREVshERAREQERfRtHOg835az+E5X4vJf8AvHN6naP5QunItS0h++PcufF38JjeJPJvpVkhv/seVxyD/wAFIfvQobQ5tK2POG91viJVgzRy3w/EIfIljd1tPyUbB/iB/wCIFV8z0hNXjcfIBAR7J+aRrlsUtERWyEREBERAXxzgxpcdjRdfViYxLwOEV0t7aFNI6+6zSg8wveZJDI7xnuuecglc8wthtF6471wSapHDc78v1WVVDRw2iG53eVnLaGNK7Rx2R26UKp5on6OP4rH5cDXDo0ApRWOti8/mk7lTc1Mlsr528j6Rw59bD3Fd9cnJV9ERWyEREBERAXTZaScFkljDr2vSSN9oW713K1fObK6LIfEnMNieCb0GVgPuKS7GvPz/ALST1T2NWZX6qOkHpjtKw3j7b98g+SzcU1UdLzjtKiW0Otq/5xP+J3BUTNvLwWWdBumhez4XnuCnVbqxWb1lvOQzi3KnBHDbwhHw/UrqfF2RDtRUyEREH//Z'),
(2, 'Tailored Wool Blazer', 'L', 2800.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4KpNGMjeAiv6QkgIC5a6zSD0t5EVwkjwB74iBUzrVMg&s=10'),
(3, 'Leather Ankle Boots', 'M', 1950.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0VuI_ZolV7LWixsHxs7Zt0dog9ALKeq5C1L-LJoV37A&s=10');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`s_id`, `s_name`, `s_image`) VALUES
(1, 'Pose1', 'https://media.istockphoto.com/id/1307568521/photo/its-the-denim-that-does-it-for-me.jpg?s=612x612&w=0&k=20&c=0RQfpn8VJxXl6sO4aUehTsPvyYKGPwVwz1EdJRBU_Nw='),
(2, 'Pose2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQA_nNVtIxHo6J5VEssiSVicOMcu2tud9dJx7mszDpEfw&s=10'),
(3, 'Pose3', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJ0Ud4uJSXMgPWyEjNXuplGsuKPDxVRS_8IOrh-gJJ0Wi_j6-Hf9Nnn28&s=10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'admin', '1234', 'user', 'name'),
(2, 'user', '4321', 'user', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
