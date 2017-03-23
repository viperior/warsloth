/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50172
Source Host           : localhost:3306
Source Database       : capstone_webops

Target Server Type    : MYSQL
Target Server Version : 50172
File Encoding         : 65001

Date: 2017-03-22 19:53:44
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
INSERT INTO `review` VALUES ('1', 'My Revew', 'Test 1', '2017-03-22 16:46:02');
INSERT INTO `review` VALUES ('2', 'test 2', 'test 2', null);
INSERT INTO `review` VALUES ('6', 'HTML Review', '<h1>BIG TEXT</h1>', null);

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
INSERT INTO `staff` VALUES ('1', 'Luke', 'Adair', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas massa quis lectus ornare dapibus. Ut porta est sed lectus blandit iaculis. Pellentesque quis magna id nisi mattis fringilla. Etiam bibendum egestas nisi sit amet fringilla. Maecena', null, '2017-03-22 18:08:37');
INSERT INTO `staff` VALUES ('2', 'Johnathon', 'Stone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas massa quis lectus ornare dapibus. Ut porta est sed lectus blandit iaculis. Pellentesque quis magna id nisi mattis fringilla. Etiam bibendum egestas nisi sit amet fringilla. Maecena', null, '2017-03-22 18:08:38');
INSERT INTO `staff` VALUES ('3', 'Jay', 'Gossett', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas massa quis lectus ornare dapibus. Ut porta est sed lectus blandit iaculis. Pellentesque quis magna id nisi mattis fringilla. Etiam bibendum egestas nisi sit amet fringilla. Maecena', null, '2017-03-22 18:08:38');
INSERT INTO `staff` VALUES ('4', 'Erik', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas massa quis lectus ornare dapibus. Ut porta est sed lectus blandit iaculis. Pellentesque quis magna id nisi mattis fringilla. Etiam bibendum egestas nisi sit amet fringilla. Maecena', null, '2017-03-22 18:08:39');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `trophyCode` varchar(255) DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateModified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userID` (`userID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'ceo', 'mysecretpassword', 'c66604a0-9acf-4129-aa8c-6b0df8958f8d', '2017-02-04 13:59:52', '2017-02-19 16:04:18');
INSERT INTO `user` VALUES ('2', 'admin', 'supersecurepassword', '23601841-6e29-45c6-b094-cd6bf4f22143', '2017-02-04 13:59:54', '2017-02-19 16:04:11');
INSERT INTO `user` VALUES ('3', 'test', 'password', '8740a775-77bc-4ac4-a14d-2f4b69c43231', '2017-02-19 16:04:26', '2017-02-19 16:04:36');
