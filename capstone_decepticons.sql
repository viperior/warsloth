/*
MySQL Data Transfer
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `review`
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL AUTO_INCREMENT,
  `reviewTitle` varchar(255) DEFAULT NULL,
  `reviewText` varchar(255) DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  PRIMARY KEY (`reviewID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES ('1', 'Trustworthy and Discrete', 'Understands the importance of confidentiality, and can always be trusted not to reveal confidential or private information to unauthorized parties. Tries to copy, but with limited ability. Enjoys working without supervision.', '2017-03-22 16:46:02');
INSERT INTO `review` VALUES ('6', 'Two Words to Describe A Decepticon', '<marquee behavior=\"alternate\" loop=\"infinite\"><h1>SORE LOSER</h1></marquee>', null);

-- ----------------------------
-- Table structure for `staff`
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `staffBio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`staffID`),
  KEY `staffID` (`staffID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of staff
-- ----------------------------
INSERT INTO `staff` VALUES ('1', 'Megatron', 'The Fallen', 'Founder and CEO of the Decepticons.');
INSERT INTO `staff` VALUES ('2', 'Silvia', 'Holland', 'Chief of Financial Services, Ms. Holland is responsible for all financial affairs.');
INSERT INTO `staff` VALUES ('3', 'Rob', 'Foster', 'Mr. Foster is a special agent overseer in charge of several confidential projects.');
INSERT INTO `staff` VALUES ('4', 'Wilfrid', 'Jinks', 'Martial arts expert and master ninja, Mr. Jinks is head of combat training internationally.');