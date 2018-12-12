
--
-- Database: `test`
--

--
-- Table structure for table `tb_bank`
--

CREATE TABLE IF NOT EXISTS `tb_bank` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bankName` varchar(20) NOT NULL,
  `debit` double(11,2) NOT NULL,
  `credit` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `trans_date` datetime DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1


-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1


--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(15, 'admin', 'admin', 'test', 'ting'),
