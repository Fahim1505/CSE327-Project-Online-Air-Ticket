
--
-- Database: `online air ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pass`) VALUES
('admin1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `username` varchar(50) NOT NULL,
  `flightno` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flightno` varchar(50) NOT NULL,
  `deperture` text NOT NULL,
  `destination` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flightno`, `deperture`, `destination`, `date`, `time`) VALUES
('555', 'Dhaka', 'sylhet', '2024-11-11', '21:42:00');
INSERT INTO `flight` (`flightno`, `deperture`, `destination`, `date`, `time`) VALUES
('556', 'Chittagong', 'Dhaka', '2024-11-10', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `flightno` varchar(50) NOT NULL,
  `eco_seat` int(11) NOT NULL,
  `eco_price` int(11) NOT NULL,
  `preeco_seat` int(11) NOT NULL,
  `preeco_price` int(11) NOT NULL,
  `first_seat` int(11) NOT NULL,
  `first_price` int(11) NOT NULL,
  `bus_seat` int(11) NOT NULL,
  `bus_price` int(11) NOT NULL,
  `cur_eco` int(11) NOT NULL,
  `cur_preco` int(11) NOT NULL,
  `cur_first` int(11) NOT NULL,
  `cur_bus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`flightno`, `eco_seat`, `eco_price`, `preeco_seat`, `preeco_price`, `first_seat`, `first_price`, `bus_seat`, `bus_price`, `cur_eco`, `cur_preco`, `cur_first`, `cur_bus`) VALUES
('555', 150, 10000, 150, 10000, 150, 10000, 150, 10000, 150, 150, 150, 150);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `passno` varchar(50) NOT NULL,
  `pno` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `dob`, `email`, `passno`, `pno`, `sex`, `username`, `password`) VALUES
('fahim', 'muntasir', '2024-11-20', 'fahimsoumyo1505@gmail.com', '123456', 0130000000, 'M', 'fahim07', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`username`,`flightno`,`class`),
  ADD KEY `flightno` (`flightno`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flightno`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`flightno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`flightno`) REFERENCES `flight` (`flightno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`flightno`) REFERENCES `flight` (`flightno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
