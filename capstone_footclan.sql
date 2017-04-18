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
INSERT INTO `review` VALUES ('6', 'One Word to Describe Foot Clan', '<marquee behavior=\"alternate\" loop=\"infinite\"><h1>EXCELLENT</h1></marquee>', null);

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
INSERT INTO `staff` VALUES ('1', 'The', 'Shredder', 'Founder and CEO of Foot Clan.', '2017-04-10 20:18:50', '2017-04-10 20:18:51');
INSERT INTO `staff` VALUES ('2', 'Elaina', 'Powers', 'Chief of Financial Services, Mrs. Powers is responsible for all financial affairs.', '2017-04-10 20:18:52', '2017-04-10 20:18:53');
INSERT INTO `staff` VALUES ('3', 'Savannah', 'Johnson', 'Ms. Johnson is a special agent overseer in charge of several confidential projects.', '2017-04-10 20:18:53', '2017-04-10 20:18:55');
INSERT INTO `staff` VALUES ('4', 'Baz', 'Newell', 'Martial arts expert and master ninja, Mr. Newell is head of combat training internationally.', '2017-04-10 20:18:55', '2017-04-10 20:18:57');

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
INSERT INTO `user` VALUES ('1', 'ceo',        'shoe',             '6678', '47628', 'stS9jeDy', 'znHCdodD', 'LaoVIiGA', '2017-02-04 13:59:52', '2017-02-19 16:04:18');
INSERT INTO `user` VALUES ('2', 'admin',      'Sneakers',         '3972', '37044', 'mnluUAT5', 'znHCdodD', 'LaoVIiGA', '2017-02-04 13:59:54', '2017-02-19 16:04:11');
INSERT INTO `user` VALUES ('3', 'test',       'password',         '4163', '24696', 'cZSm6Z19', 'znHCdodD', 'LaoVIiGA', '2017-02-19 16:04:26', '2017-02-19 16:04:36');
INSERT INTO `user` VALUES ('4', 'epowers',    'incorrect',        '2976', '42336', 'eZ0lVOct', 'znHCdodD', 'LaoVIiGA', '2017-02-19 16:04:26', '2017-04-10 20:21:29');
INSERT INTO `user` VALUES ('5', 'sjohnson',   'agD#75F!d13',      '2978', '45864', 'THm9XDw4', 'znHCdodD', 'LaoVIiGA', '2017-04-10 20:21:33', '2017-04-10 20:21:35');
INSERT INTO `user` VALUES ('6', 'bnewell',    'bats',             '5555', '35280', '9RtvZ9j6', 'znHCdodD', 'LaoVIiGA', '2017-04-10 20:21:33', '2017-04-10 20:21:35');

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
INSERT INTO `launch_codes` VALUES ('1', '8738732131', '4yIz9v5s', 'BGM-109 Tomahawk');
