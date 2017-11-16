/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-16 21:38:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yr_blog`
-- ----------------------------
DROP TABLE IF EXISTS `yr_blog`;
CREATE TABLE `yr_blog` (
  `blog_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '博文Id自增主键',
  `blog_title` varchar(32) NOT NULL COMMENT '博文标题',
  `pic_url` varchar(255) NOT NULL COMMENT '博文图片URL',
  `category_id` int(16) NOT NULL COMMENT '博文所属分类Id',
  `keyword` varchar(255) NOT NULL COMMENT '博文关键字',
  `is_up` tinyint(3) NOT NULL COMMENT '是否置顶',
  `type_id` int(9) NOT NULL COMMENT '栏目Id',
  `content` mediumtext NOT NULL COMMENT '博文内容',
  `is_support` tinyint(3) NOT NULL COMMENT '是否为推荐文章',
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_blog
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_category`
-- ----------------------------
DROP TABLE IF EXISTS `yr_category`;
CREATE TABLE `yr_category` (
  `category_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '分类Id自增主键',
  `parent_id` int(16) NOT NULL COMMENT '父级分类Id',
  `sort_id` tinyint(3) NOT NULL COMMENT '排序Id',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '分类状态；启用：1，禁用：0，默认0',
  `is_show` tinyint(3) NOT NULL COMMENT '是否前台展示',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_category
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_category_description`
-- ----------------------------
DROP TABLE IF EXISTS `yr_category_description`;
CREATE TABLE `yr_category_description` (
  `category_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '分类Id自增主键',
  `name` varchar(32) NOT NULL COMMENT '分类名称',
  `description` text NOT NULL COMMENT '详细描述',
  `meta_title` varchar(32) NOT NULL COMMENT 'meta标题',
  `meta_keyword` varchar(32) NOT NULL COMMENT 'meta关键字',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_category_description
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_email`
-- ----------------------------
DROP TABLE IF EXISTS `yr_email`;
CREATE TABLE `yr_email` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `protocol` varchar(64) NOT NULL COMMENT '邮件协议',
  `host` varchar(128) NOT NULL COMMENT 'SMTP服务器主机',
  `user` varchar(128) NOT NULL COMMENT 'SMTP用户',
  `port` varchar(32) NOT NULL COMMENT 'SMTP端口号',
  `account` varchar(128) NOT NULL COMMENT '邮箱账号',
  `pwd` varchar(128) NOT NULL COMMENT '邮箱密码',
  `modified_time` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_email
-- ----------------------------
INSERT INTO `yr_email` VALUES ('1', '123', '123', '123', '123', '123', '123', '2017-11-13 00:02:11');

-- ----------------------------
-- Table structure for `yr_feedback`
-- ----------------------------
DROP TABLE IF EXISTS `yr_feedback`;
CREATE TABLE `yr_feedback` (
  `fb_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '评论feedback自增主键',
  `user_id` int(16) NOT NULL COMMENT '会员Id',
  `session_id` int(64) NOT NULL COMMENT '访问session',
  `content` text NOT NULL COMMENT '评论内容',
  `add_time` datetime NOT NULL COMMENT '评论时间',
  `modified_time` datetime NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`fb_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_feedback
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_member`
-- ----------------------------
DROP TABLE IF EXISTS `yr_member`;
CREATE TABLE `yr_member` (
  `id` int(16) NOT NULL AUTO_INCREMENT COMMENT '会员Id自增主键',
  `uname` varchar(32) NOT NULL COMMENT '会员昵称',
  `email` varchar(64) NOT NULL COMMENT '登录邮箱/联系邮箱',
  `phone` int(16) NOT NULL COMMENT '会员电话/登录电话',
  `sex` tinyint(3) NOT NULL COMMENT '会员性别；0：女；1：男',
  `ip` varchar(255) NOT NULL COMMENT '最后一次访问IP',
  `add_time` datetime NOT NULL COMMENT '注册时间',
  `last_time` datetime NOT NULL COMMENT '最后访问时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_member
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_system`
-- ----------------------------
DROP TABLE IF EXISTS `yr_system`;
CREATE TABLE `yr_system` (
  `sid` int(16) NOT NULL AUTO_INCREMENT COMMENT 'systemId自增主键',
  `title` varchar(32) NOT NULL COMMENT '站点名称',
  `keywords` varchar(64) NOT NULL COMMENT '系统关键词',
  `description` varchar(128) NOT NULL COMMENT '系统描述',
  `copyright` varchar(128) NOT NULL COMMENT '底部版权信息',
  `icp` varchar(128) NOT NULL COMMENT 'ICP备案信息',
  `modified_time` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_system
-- ----------------------------
INSERT INTO `yr_system` VALUES ('1', 'wyecho', 'wyecho', 'wyecho', 'wyecho', 'wyecho', '2017-11-12 22:36:37');

-- ----------------------------
-- Table structure for `yr_visit`
-- ----------------------------
DROP TABLE IF EXISTS `yr_visit`;
CREATE TABLE `yr_visit` (
  `v_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '访客表自增主键Id',
  `v_time` datetime NOT NULL COMMENT '访问时间',
  `v_ip` varchar(255) NOT NULL COMMENT '访问IP',
  `type_id` tinyint(3) NOT NULL COMMENT '访问板块',
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_visit
-- ----------------------------
