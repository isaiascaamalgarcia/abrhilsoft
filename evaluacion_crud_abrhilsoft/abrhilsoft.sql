/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : abrhilsoft

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-09-22 21:00:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for movies
-- ----------------------------
DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(4) DEFAULT NULL,
  `actors` varchar(200) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movies
-- ----------------------------
INSERT INTO `movies` VALUES ('2', 'Resident Evil', 'Ciencia Ficción', '2002', 'Mia Jovovich', 'USA');
INSERT INTO `movies` VALUES ('3', 'El aro', 'Terror', '2002', 'Naomi Watts', 'USA');
INSERT INTO `movies` VALUES ('4', 'Piratas del Caribe', 'Aventura', '2003', 'Johnny Depp', 'USA');
