/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50615
Source Host           : localhost:3306
Source Database       : suixianggou

Target Server Type    : MYSQL
Target Server Version : 50615
File Encoding         : 65001

Date: 2014-04-27 12:42:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cf_name` varchar(200) DEFAULT '',
  `cf_value` varchar(3000) DEFAULT '',
  `cf_dis` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO `configs` VALUES ('1', 'default_template', 'default', null);
INSERT INTO `configs` VALUES ('2', 'xiaobianyu', '大家早安啊~~新的一天开始，米可前段时间心情很糟糕，但是每次购物之后心情就会轻松一下，购物果然是女人最有效的发泄方式哦~如果各位MM们心情不好的时候，那么就把自己的购物车清一清吧~~', null);
