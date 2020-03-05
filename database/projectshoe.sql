/*
Navicat MySQL Data Transfer

Source Server         : PH1908
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : projectshoe

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-10-22 11:48:39
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for brand
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for colors
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `colors_id` int(11) NOT NULL AUTO_INCREMENT,
  `colors_name` varchar(255) NOT NULL,
  PRIMARY KEY (`colors_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colors
-- ----------------------------

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
  `date_create` date DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of size
-- ----------------------------

-- ----------------------------
-- Table structure for style
-- ----------------------------
DROP TABLE IF EXISTS `style`;
CREATE TABLE `style` (
  `style_id` int(11) NOT NULL AUTO_INCREMENT,
  `style_name` varchar(255) NOT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of style
-- ----------------------------
