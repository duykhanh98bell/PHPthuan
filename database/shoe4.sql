/*
Navicat MySQL Data Transfer

Source Server         : PH1908
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shoe

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-10-28 00:59:09
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
INSERT INTO `category` VALUES ('1', 'Shoe man', '1', '2019-10-25 21:43:34');
INSERT INTO `category` VALUES ('2', 'Shoe woman', '1', '2019-10-25 21:43:46');
INSERT INTO `category` VALUES ('3', 'Shoe sport', '1', '2019-10-25 21:44:04');

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
  `price` int(11) DEFAULT NULL,
  `sale_off` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desciption` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'GiÃ y sinh viÃªn', '1', '5', '13', '2', '4', '50000', '30', 'uploads/con8.jpg', 'Tráº¯ng cao cá»•', '1', '2019-10-26 11:48:50');
INSERT INTO `product` VALUES ('2', 'Vans phá»• thÃ´ng', '1', '2', '11', '1', '6', '70000', '50', 'uploads/van1.jpg', 'Äen nÄƒng Ä‘á»™ng', '1', '2019-10-26 11:49:55');
INSERT INTO `product` VALUES ('3', 'Nike háº§m há»‘', '1', '1', '15', '2', '1', '80000', '11', 'uploads/nike13.jpg', 'Tráº¯ng, Ä‘áº¿ cao', '1', '2019-10-26 11:51:14');
INSERT INTO `product` VALUES ('4', 'Adidas 1', '1', '4', '7', '1', '2', '60000', '50000', 'uploads/ad9.jpg', 'Äen nguyÃªn tem nguyÃªn seal', '1', '2019-10-27 11:05:17');
INSERT INTO `product` VALUES ('5', 'Adidas 2', '1', '3', '8', '5', '2', '500000', '1212', 'uploads/ad12.jpg', 'Xanh rÃªu ', '1', '2019-10-27 11:06:33');
INSERT INTO `product` VALUES ('6', 'Adidas 3', '1', '1', '10', '2', '2', '5645664', '5646', 'uploads/ad3.jpg', 'NÄƒng Ä‘á»™ng', '1', '2019-10-27 11:07:21');
INSERT INTO `product` VALUES ('7', 'Adidas 4', '2', '5', '6', '1', '2', '65656', '545', 'uploads/ad8.jpg', 'CÃ¡ tÃ­nh', '1', '2019-10-27 11:08:05');
INSERT INTO `product` VALUES ('8', 'Adidas 5', '2', '2', '6', '10', '2', '898897', '5465', 'uploads/ad10.jpg', 'Äáº¿ cao nháº¹', '1', '2019-10-27 11:09:03');
INSERT INTO `product` VALUES ('9', 'Adidas 6', '3', '4', '4', '1', '2', '98499', '545', 'uploads/ad11.jpg', 'Äen nháº¹', '1', '2019-10-27 11:09:44');
INSERT INTO `product` VALUES ('10', 'Adidas 7', '3', '6', '4', '8', '2', '79778', '54', 'uploads/ad6.jpg', 'BÃ³ng báº©y', '1', '2019-10-27 11:10:21');
INSERT INTO `product` VALUES ('11', 'Adidas 8', '3', '2', '5', '2', '2', '8945646', '56456', 'uploads/ad13.jpg', 'Tráº» trÃ¢u', '1', '2019-10-27 11:11:14');
INSERT INTO `product` VALUES ('12', 'Bata 1', '1', '2', '9', '2', '11', '574565', '444', 'uploads/ba12.jpg', 'Tráº¯ng tinh khÃ´i', '1', '2019-10-27 11:12:12');
INSERT INTO `product` VALUES ('13', 'Bata 2', '2', '2', '6', '10', '11', '989898998', '56152', 'uploads/ba2.jpg', 'Ná»¯ tÃ­nh', '1', '2019-10-27 11:12:55');
INSERT INTO `product` VALUES ('14', 'Bata 3', '3', '2', '11', '3', '11', '98989545', '516465', 'uploads/ba1.jpg', 'Nam tÃ­nh ', '1', '2019-10-27 11:13:30');
INSERT INTO `product` VALUES ('15', 'Bata 4', '2', '2', '9', '2', '11', '48498889', '65656', 'uploads/ba4.jpg', 'Äá»™n 10cm', '1', '2019-10-27 11:14:26');
INSERT INTO `product` VALUES ('16', 'Bata 5', '1', '2', '8', '1', '11', '6545456', '564464', 'uploads/ba10.jpg', 'Äá»™c láº¡', '1', '2019-10-27 11:14:57');
INSERT INTO `product` VALUES ('17', 'Bata 6', '2', '2', '10', '5', '11', '9898898', '8787877', 'uploads/ba11.jpg', 'Láº¡', '1', '2019-10-27 11:15:28');
INSERT INTO `product` VALUES ('18', 'Converse', '2', '5', '6', '1', '4', '656656565', '66555', 'uploads/con10.jpg', 'Äen huyá»n bÃ­', '1', '2019-10-27 11:16:33');
INSERT INTO `product` VALUES ('19', 'Converse 2', '3', '5', '4', '2', '4', '565665565', '545', 'uploads/con8.jpg', 'Tráº¯ng muá»‘t', '1', '2019-10-27 11:17:16');
INSERT INTO `product` VALUES ('20', 'Converse3', '1', '5', '6', '9', '4', '33535', '554', 'uploads/con6.jpg', 'vÃ ng chÃ³e', '1', '2019-10-27 11:18:17');
INSERT INTO `product` VALUES ('21', 'Converse 4', '2', '5', '5', '4', '4', '656565565', '998', 'uploads/con4.jpg', 'Äá» quyáº¿n rÅ©', '1', '2019-10-27 11:19:00');
INSERT INTO `product` VALUES ('22', 'dc 1', '1', '2', '6', '1', '9', '989', '1', 'uploads/con12.jpg', 'Äen xÃ¬', '1', '2019-10-27 11:19:35');
INSERT INTO `product` VALUES ('23', 'dc 2', '2', '3', '7', '2', '9', '323', '66546', 'uploads/dc8.jpg', 'adsfd', '1', '2019-10-27 11:20:20');
INSERT INTO `product` VALUES ('24', 'dc 3', '3', '2', '7', '9', '9', '656565', '888', 'uploads/dc11.jpg', 'abc', '1', '2019-10-27 11:20:50');
INSERT INTO `product` VALUES ('25', 'jordan 1', '1', '1', '1', '1', '3', '565', '556', 'uploads/jd7.jpg', 'Ã¡df', '1', '2019-10-27 11:23:09');
INSERT INTO `product` VALUES ('26', 'jordan 2', '2', '4', '3', '2', '3', '54', '4', 'uploads/jd2.jpg', 'fsdfadaf', '1', '2019-10-27 11:23:36');
INSERT INTO `product` VALUES ('27', 'New Balance ', '1', '1', '2', '2', '10', '656', '44', 'uploads/nb6.jpg', 'adfasdf', '1', '2019-10-27 11:24:28');
INSERT INTO `product` VALUES ('28', 'Puma', '3', '4', '7', '1', '8', '65546546', '888', 'uploads/pm10.jpg', 'fasdfdfa', '1', '2019-10-27 11:25:08');
INSERT INTO `product` VALUES ('29', 'Reebok', '2', '3', '5', '5', '5', '666', '2', 'uploads/rb1.jpg', 'xxxxx', '1', '2019-10-27 11:25:44');
INSERT INTO `product` VALUES ('30', 'under a', '2', '2', '6', '1', '7', '666', '44', 'uploads/ua2.jpg', 'sdfa', '1', '2019-10-27 11:26:20');
INSERT INTO `product` VALUES ('31', 'under a', '3', '4', '11', '4', '7', '2147483647', '2147483647', 'uploads/ua3.jpg', 'fadffad', '1', '2019-10-27 11:26:59');
INSERT INTO `product` VALUES ('32', 'under 3', '3', '1', '15', '1', '7', '2147483647', '1', 'uploads/ua10.jpg', 'fasffad', '1', '2019-10-27 11:27:25');

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
