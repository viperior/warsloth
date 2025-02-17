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
INSERT INTO `review` VALUES ('6', 'One Word to Describe Red Falcon', '<marquee behavior=\"alternate\" loop=\"infinite\"><h1>EXCELLENT</h1></marquee>', null);

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
INSERT INTO `staff` VALUES ('1', 'Emperor', 'Java', 'Full name: Emperor Demon Java or Emperor Demon Evil Heart Gomera Mosking. Founder and CEO of Red Falcon.', '2017-04-10 20:18:50', '2017-04-10 20:18:51');
INSERT INTO `staff` VALUES ('2', 'Elliott', 'Ryers', 'Chief of Financial Services, Mr. Ryers is responsible for all financial affairs.', '2017-04-10 20:18:52', '2017-04-10 20:18:53');
INSERT INTO `staff` VALUES ('3', 'Osbert', 'Mayes', 'Ms. Mayes is a special agent overseer in charge of several confidential projects.', '2017-04-10 20:18:53', '2017-04-10 20:18:55');
INSERT INTO `staff` VALUES ('4', 'Christi', 'Scarlett', 'Martial arts expert and master ninja, Mrs. Scarlett is head of combat training internationally.', '2017-04-10 20:18:55', '2017-04-10 20:18:57');

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
INSERT INTO `user` VALUES ('1', 'ceo',        'bird',          '4456', '33516', 'gY6fGOWA', 'ZQG5m6Nr', 'T7qZWcBs', '2017-02-04 13:59:52', '2017-02-19 16:04:18');
INSERT INTO `user` VALUES ('2', 'admin',      'Avian',         '1759', '38808', 'Ddn1s0cG', 'ZQG5m6Nr', 'T7qZWcBs', '2017-02-04 13:59:54', '2017-02-19 16:04:11');
INSERT INTO `user` VALUES ('3', 'test',       'password',      '2841', '26460', 'R5felgWN', 'ZQG5m6Nr', 'T7qZWcBs', '2017-02-19 16:04:26', '2017-02-19 16:04:36');
INSERT INTO `user` VALUES ('4', 'eryers',     'incorrect',     '9754', '44100', '0zud8j6D', 'ZQG5m6Nr', 'T7qZWcBs', '2017-02-19 16:04:26', '2017-04-10 20:21:29');
INSERT INTO `user` VALUES ('5', 'omayes',     'eh50cd41$C3f',  '9756', '47628', 'yYn8dw0R', 'ZQG5m6Nr', 'T7qZWcBs', '2017-04-10 20:21:33', '2017-04-10 20:21:35');
INSERT INTO `user` VALUES ('6', 'cscarlett',  'cars',          '9999', '63504', 'YW5c0JgF', 'ZQG5m6Nr', 'T7qZWcBs', '2017-04-10 20:21:33', '2017-04-10 20:21:35');

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
INSERT INTO `launch_codes` VALUES ('1', '3365031045', '5fqiPahu', 'BGM-109 Tomahawk');
