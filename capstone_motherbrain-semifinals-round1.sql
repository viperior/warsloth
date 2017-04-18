/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50172
Source Host           : localhost:3306
Source Database       : capstone_cobra

Target Server Type    : MYSQL
Target Server Version : 50172
File Encoding         : 65001

Date: 2017-04-10 20:21:55
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
INSERT INTO `review` VALUES ('6', 'One Word to Describe Mother Brain', '<marquee behavior=\"alternate\" loop=\"infinite\"><h1>EXCELLENT</h1></marquee>', null);

-- ----------------------------
-- Table structure for `staff`
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `staffBio` varchar(255) DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`staffID`),
  KEY `staffID` (`staffID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of staff
-- ----------------------------
INSERT INTO `staff` VALUES ('1', 'Mother', 'Brain', 'Founder and CEO of Mother Brain.', '2017-04-10 20:18:50', '2017-04-10 20:18:51');
INSERT INTO `staff` VALUES ('2', 'Dark', 'Samus', 'Chief of Financial Services, Mrs. Samus is responsible for all financial affairs.', '2017-04-10 20:18:52', '2017-04-10 20:18:53');
INSERT INTO `staff` VALUES ('3', 'Emperor', 'Ing', 'Mr. Ing is a mutated massive beast in charge of several confidential projects.', '2017-04-10 20:18:53', '2017-04-10 20:18:55');
INSERT INTO `staff` VALUES ('4', 'Phazon', 'Prime', 'Martial arts expert and master ninja, Mr. Phazon is head of combat training internationally.', '2017-04-10 20:18:55', '2017-04-10 20:18:57');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pin` int(4) DEFAULT NULL,
  `hashed_pin` int(5) DEFAULT NULL,
  `trophyCode` varchar(255) DEFAULT NULL,
  `pin_crack_trophy` varchar(255) DEFAULT NULL,
  `password_crack_trophy` varchar(255) DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userID` (`userID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'ceo',      'mom',           '3345', '26460', 'y5eyS106', 'TKgH4cfW', 'I8YPk8gp', '2017-02-04 13:59:52', '2017-02-19 16:04:18');
INSERT INTO `user` VALUES ('2', 'admin',    'Matriarc',      '9648', '47628', 'kBGSq3Hd', 'TKgH4cfW', 'I8YPk8gp', '2017-02-04 13:59:54', '2017-02-19 16:04:11');
INSERT INTO `user` VALUES ('3', 'test',     'password',      '1730', '19404', '2CmQkM5t', 'TKgH4cfW', 'I8YPk8gp', '2017-02-19 16:04:26', '2017-02-19 16:04:36');
INSERT INTO `user` VALUES ('4', 'dsamus',   'incorrect',     '8643', '37044', 'IG2KEd2h', 'TKgH4cfW', 'I8YPk8gp', '2017-02-19 16:04:26', '2017-04-10 20:21:29');
INSERT INTO `user` VALUES ('5', 'eing',     '6272Hsh45&E#',  '8645', '40572', 'vNItWHa2', 'TKgH4cfW', 'I8YPk8gp', '2017-04-10 20:21:33', '2017-04-10 20:21:35');
INSERT INTO `user` VALUES ('6', 'pprime',   'guns',          '8888', '56448', '9bmd2jze', 'TKgH4cfW', 'I8YPk8gp', '2017-04-10 20:21:33', '2017-04-10 20:21:35');

-- ----------------------------
-- Table structure for `launch_codes`
-- ----------------------------
DROP TABLE IF EXISTS `launch_codes`;
CREATE TABLE `launch_codes` (
  `silo_id` int(11) NOT NULL AUTO_INCREMENT,
  `launch_code` varchar(255) DEFAULT NULL,
  `trophy_code` varchar(255) DEFAULT NULL,
  `weapon_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`silo_id`),
  UNIQUE KEY `silo_id` (`silo_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of launch_codes
-- ----------------------------
INSERT INTO `launch_codes` VALUES ('1', '2839974524', 'OhNzofSd', 'BGM-109 Tomahawk');
