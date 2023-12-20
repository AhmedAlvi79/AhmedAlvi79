/*
Navicat MySQL Data Transfer

Source Server         : deep
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : email

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-12-18 01:19:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `info_email`
-- ----------------------------
DROP TABLE IF EXISTS `info_email`;
CREATE TABLE `info_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_email
-- ----------------------------
INSERT INTO `info_email` VALUES ('3', 'Haris', 'ahmedalvi229@gmail.com', 'Responsive website', 'give me this one.');
INSERT INTO `info_email` VALUES ('4', 'Bilal', 'ahmedalvi29.gamil.com@gmail.com', 'Portfolio', 'mmll');
INSERT INTO `info_email` VALUES ('5', 'Ahmed Alvi', 'ahmedalvi229@gmail.com', 'Portfolio', 'give me this.');
