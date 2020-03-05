/*
Navicat MySQL Data Transfer

Source Server         : PH1908
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shoe

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-10-26 13:49:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('1', 'admin', '$2y$10$yfHde3F88xq4/gAtnZKd8OebQM54my6G/4vE79/hVTbHGNNvJgN42', '0336378689', 'duykhanh98bell@gmail.com', '', '2019-10-25 16:45:10');

-- ----------------------------
-- Table structure for brand
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES ('1', 'Nike');
INSERT INTO `brand` VALUES ('2', 'Adidas');
INSERT INTO `brand` VALUES ('3', 'Jordan');
INSERT INTO `brand` VALUES ('4', 'Converse');
INSERT INTO `brand` VALUES ('5', 'Reebok');
INSERT INTO `brand` VALUES ('6', 'Vans');
INSERT INTO `brand` VALUES ('7', 'Under Armour');
INSERT INTO `brand` VALUES ('8', 'Puma');
INSERT INTO `brand` VALUES ('9', 'DC');
INSERT INTO `brand` VALUES ('10', 'New Balance');
INSERT INTO `brand` VALUES ('11', 'Bata');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'giay nam', '1', '2019-10-25 21:43:34');
INSERT INTO `category` VALUES ('2', 'giay nu', '1', '2019-10-25 21:43:46');
INSERT INTO `category` VALUES ('3', 'giay the thao', '1', '2019-10-25 21:44:04');

-- ----------------------------
-- Table structure for colors
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `colors_id` int(11) NOT NULL AUTO_INCREMENT,
  `colors_name` varchar(255) NOT NULL,
  PRIMARY KEY (`colors_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colors
-- ----------------------------
INSERT INTO `colors` VALUES ('1', 'Black');
INSERT INTO `colors` VALUES ('2', 'White');
INSERT INTO `colors` VALUES ('3', 'Blue');
INSERT INTO `colors` VALUES ('4', 'Red');
INSERT INTO `colors` VALUES ('5', 'Green');
INSERT INTO `colors` VALUES ('6', 'Orange');
INSERT INTO `colors` VALUES ('7', 'Cream');
INSERT INTO `colors` VALUES ('8', 'Brown');
INSERT INTO `colors` VALUES ('9', 'Yellow');
INSERT INTO `colors` VALUES ('10', 'Pink');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `style_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `colors_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `sale_off` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desciption` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for size
-- ----------------------------
DROP TABLE IF EXISTS `size`;
CREATE TABLE `size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_numbers` int(11) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of size
-- ----------------------------
INSERT INTO `size` VALUES ('1', '30');
INSERT INTO `size` VALUES ('2', '31');
INSERT INTO `size` VALUES ('3', '32');
INSERT INTO `size` VALUES ('4', '33');
INSERT INTO `size` VALUES ('5', '34');
INSERT INTO `size` VALUES ('6', '35');
INSERT INTO `size` VALUES ('7', '36');
INSERT INTO `size` VALUES ('8', '37');
INSERT INTO `size` VALUES ('9', '38');
INSERT INTO `size` VALUES ('10', '39');
INSERT INTO `size` VALUES ('11', '40');
INSERT INTO `size` VALUES ('12', '41');
INSERT INTO `size` VALUES ('13', '42');
INSERT INTO `size` VALUES ('14', '43');
INSERT INTO `size` VALUES ('15', '44');

-- ----------------------------
-- Table structure for style
-- ----------------------------
DROP TABLE IF EXISTS `style`;
CREATE TABLE `style` (
  `style_id` int(11) NOT NULL AUTO_INCREMENT,
  `style_name` varchar(255) NOT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of style
-- ----------------------------
INSERT INTO `style` VALUES ('1', 'Oxford');
INSERT INTO `style` VALUES ('2', 'Derby');
INSERT INTO `style` VALUES ('3', 'Monk Strap');
INSERT INTO `style` VALUES ('4', 'Loafer');
INSERT INTO `style` VALUES ('5', 'Boot');
INSERT INTO `style` VALUES ('6', 'Chelsea Boot');
