-- 
-- Structure for table `users`
-- 

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `loginattempts_log` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- 
-- Data for table `users`
-- 

INSERT INTO `users` (`uid`, `email`, `password`, `loginattempts_log`) VALUES
  ('1', 'user1@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '4'),
  ('2', 'user2@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '7'),
  ('3', 'user3@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '2'),

-- 
-- Structure for logins 
-- 
