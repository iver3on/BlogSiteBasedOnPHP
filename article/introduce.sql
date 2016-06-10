/*
Navicat MySQL Data Transfer

Source Server         : zwb
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : article

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-03-10 15:00:55
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `introduce`
-- ----------------------------
DROP TABLE IF EXISTS `introduce`;
CREATE TABLE `introduce` (
  `id` int(11) NOT NULL auto_increment,
  `about` varchar(100) default NULL,
  `contact` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of introduce
-- ----------------------------
INSERT INTO introduce VALUES ('1', '<d1><dt>iver3on php demo</dt></d1>', '<pre>http://www.zhangwenbo.net</pre>');
