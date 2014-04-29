/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50615
Source Host           : localhost:3306
Source Database       : thjiegeng

Target Server Type    : MYSQL
Target Server Version : 50615
File Encoding         : 65001

Date: 2014-04-29 14:58:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) DEFAULT '',
  `admin_word` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'myadmin', '5eeab10287d949453b8e403c04675d8f');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_type_id` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `content` text,
  `add_time` varchar(255) DEFAULT '',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '2', '【每日团购，天天精选】金御诚负离子健康锗手链（女士）', '<p><img alt=\"\" src=\"http://test.com/images/20140428/139866710701502685.jpg\" style=\"height:500px; width:500px\" /><img alt=\"\" src=\"http://test.com/images/20140428/139866713303185119.jpg\" style=\"height:200px; width:200px\" /></p>\r\n', '1398667138');
INSERT INTO `article` VALUES ('2', '1', '【聚划算】御诚电磁辐射多功能防护卡，仅此一次！9.9元还包邮！！', '<p><img alt=\"\" src=\"http://test.com/images/20140428/139866717101991271.jpg\" style=\"height:483px; width:466px\" /></p>\r\n', '1398667178');
INSERT INTO `article` VALUES ('3', '1', '【聚划算】御诚电磁辐射多功能防护卡，仅此一次！9.9元还包邮！！!!', '', '1398741264');

-- ----------------------------
-- Table structure for article_type
-- ----------------------------
DROP TABLE IF EXISTS `article_type`;
CREATE TABLE `article_type` (
  `article_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT '',
  PRIMARY KEY (`article_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_type
-- ----------------------------
INSERT INTO `article_type` VALUES ('1', '服务项目');
INSERT INTO `article_type` VALUES ('2', '服务团队');
INSERT INTO `article_type` VALUES ('3', '服务活动');
INSERT INTO `article_type` VALUES ('4', '成功案例');
INSERT INTO `article_type` VALUES ('5', '行业资讯');

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
INSERT INTO `configs` VALUES ('1', 'default_template', 'new', null);
INSERT INTO `configs` VALUES ('2', 'xiaobianyu', '大家早安啊~~新的一天开始，米可前段时间心情很糟糕，但是每次购物之后心情就会轻松一下，购物果然是女人最有效的发泄方式哦~如果各位MM们心情不好的时候，那么就把自己的购物车清一清吧~~', null);
