CREATE TABLE IF NOT EXISTS `advertisements` (
  `advid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `advtitle` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`advid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


INSERT INTO `advertisements` (`advid`, `userid`, `advtitle`) VALUES
(1, 4, 'dummytitle1'),
(2, 3, 'dummytitle2');



CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `users` (`userid`, `username`) VALUES
(1, 'dummyuser1'),
(2, 'dummyuser2'),
(3, 'dummyuser3'),
(4, 'dummyuser4'),
(5, 'dummyuser5');