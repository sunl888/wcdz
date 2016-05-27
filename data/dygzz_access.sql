/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : dygzz

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-05-27 11:45:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dygzz_access`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_access`;
CREATE TABLE `dygzz_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `app` varchar(20) NOT NULL COMMENT '模块',
  `controller` varchar(20) NOT NULL COMMENT '控制器',
  `action` varchar(20) NOT NULL COMMENT '方法',
  `status` tinyint(4) DEFAULT '0' COMMENT '是否有效',
  `menu_id` smallint(6) NOT NULL,
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- ----------------------------
-- Records of dygzz_access
-- ----------------------------
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'Role', 'accredit', '1', '32');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'Role', 'access', '1', '31');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'Role', 'del', '1', '30');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'Role', 'edit', '1', '29');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'Role', 'add', '1', '28');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'Role', 'index', '1', '27');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'User', 'check', '1', '26');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'User', 'del', '1', '25');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'User', 'edit', '1', '24');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'User', 'add', '1', '23');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'User', 'index', '1', '22');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'None', 'none', '1', '21');
INSERT INTO `dygzz_access` VALUES ('18', 'Admin', 'Index', 'index', '1', '2');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'renew', '1', '62');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'remove', '1', '61');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'cancelcheck', '1', '60');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'sort', '1', '59');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'checkout', '1', '58');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'check', '1', '57');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'edit', '1', '55');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'del', '1', '54');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'add', '1', '53');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'index', '1', '56');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '39');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '38');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Index', 'index', '1', '3');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Operationlog', 'del', '1', '43');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Operationlog', 'index', '1', '42');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Log', 'del', '1', '41');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Log', 'index', '1', '40');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '33');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Role', 'accredit', '1', '32');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Role', 'access', '1', '31');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Role', 'del', '1', '30');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Role', 'edit', '1', '29');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Role', 'add', '1', '28');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Role', 'index', '1', '27');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'User', 'check', '1', '26');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'User', 'del', '1', '25');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'User', 'edit', '1', '24');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'User', 'add', '1', '23');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '21');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Config', 'extend_del', '1', '20');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Config', 'extend_edit', '1', '19');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Config', 'extend', '1', '17');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Config', 'master', '1', '16');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Config', 'file', '1', '15');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Config', 'email', '1', '14');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Index', 'index', '1', '2');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Usually', 'index', '1', '11');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Index', 'index', '1', '1');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'Index', 'index', '1', '2');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'None', 'none', '1', '21');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'User', 'index', '1', '22');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'User', 'add', '1', '23');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'User', 'edit', '1', '24');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'User', 'del', '1', '25');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'User', 'check', '1', '26');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'Role', 'index', '1', '27');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'Role', 'add', '1', '28');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'Role', 'edit', '1', '29');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'Role', 'del', '1', '30');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'Role', 'access', '1', '31');
INSERT INTO `dygzz_access` VALUES ('17', 'Admin', 'Role', 'accredit', '1', '32');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'test', '1', '63');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Content', 'restore', '1', '64');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Class', 'index', '1', '65');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Class', 'sort', '1', '66');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Class', 'add', '1', '67');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Class', 'edit', '1', '69');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Class', 'del', '1', '70');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Class', 'addlink', '1', '71');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Class', 'editlink', '1', '72');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Picture', 'index', '1', '73');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Index', 'getclass', '1', '74');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Teacher', 'index', '1', '75');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Keyan', 'index', '1', '76');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Zhuanti', 'index', '1', '77');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '44');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'index', '1', '45');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'add', '1', '46');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'edit', '1', '47');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'del', '1', '48');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'term', '1', '49');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'termedit', '1', '50');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'termdel', '1', '51');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Link', 'termadd', '1', '52');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Person', 'index', '1', '34');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Person', 'info', '1', '35');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Person', 'pwd', '1', '36');
INSERT INTO `dygzz_access` VALUES ('11', 'Admin', 'Person', 'checkpwd', '1', '37');

-- ----------------------------
-- Table structure for `dygzz_admin_menu`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_admin_menu`;
CREATE TABLE `dygzz_admin_menu` (
  `mid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `url` char(255) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_admin_menu
-- ----------------------------

-- ----------------------------
-- Table structure for `dygzz_advance`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_advance`;
CREATE TABLE `dygzz_advance` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `stuid` varchar(50) DEFAULT NULL,
  `status` int(4) DEFAULT '2' COMMENT '政治面貌(0-正式党员，1-预备党员，2-共青团员)',
  `telephone` varchar(50) DEFAULT NULL,
  `domitory` varchar(50) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL COMMENT '籍贯',
  `photo` varchar(255) DEFAULT NULL,
  `prize` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_advance
-- ----------------------------
INSERT INTO `dygzz_advance` VALUES ('1', '王蕾', '1', '1308020133', '0', '18130157271', '10A515', '党员工作站副站长', '山东滨州', 'image/2016-04-25/571e0ec2140bb.jpg', '手抄报比赛三等奖');

-- ----------------------------
-- Table structure for `dygzz_class`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_class`;
CREATE TABLE `dygzz_class` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目Id',
  `type` tinyint(1) DEFAULT '0' COMMENT '栏目类型（0：频道栏目，1：列\r\n\r\n表栏目，2：外部链接）',
  `modelid` int(11) DEFAULT NULL COMMENT '模型ID',
  `parentid` int(11) DEFAULT NULL COMMENT '父级栏目',
  `allparentid` varchar(255) DEFAULT NULL COMMENT '所有父ID',
  `child` tinyint(1) DEFAULT '0' COMMENT '是否存在子栏目，1存在',
  `arrchildid` mediumtext COMMENT '全部子栏目ID',
  `classname` varchar(255) DEFAULT NULL COMMENT '栏目名称',
  `image` varchar(255) DEFAULT NULL COMMENT '栏目缩略图',
  `introduce` mediumtext COMMENT '栏目简介',
  `url` varchar(255) DEFAULT NULL COMMENT '外部链接',
  `hits` int(11) DEFAULT '0' COMMENT '栏目点击次数',
  `sort` int(5) DEFAULT '0' COMMENT '排序',
  `isshow` tinyint(1) DEFAULT '1' COMMENT '是否启用（1：启用）',
  `isnav` tinyint(1) DEFAULT '1' COMMENT '是否设置为导航：1：是',
  `content_template` int(11) DEFAULT NULL COMMENT '栏目内容模板',
  `index_template` int(11) DEFAULT NULL COMMENT '栏目封面模板',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'SEO标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT '栏目关键字',
  `description` varchar(255) DEFAULT NULL COMMENT '栏目描述',
  `content` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_class
-- ----------------------------
INSERT INTO `dygzz_class` VALUES ('1', '1', '1', '0', '0', '1', '2,3,4', '党站简介', null, '', null, '0', '0', '1', '1', '2', '1', '', '', '', '<p>cs CDX XC XC CXe8网络工作室</p>');
INSERT INTO `dygzz_class` VALUES ('2', '0', '1', '1', '0,1', '0', null, '工作站简介', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('3', '0', '1', '1', '0,1', '0', null, '现任站委会', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('4', '0', '1', '1', '0,1', '0', null, '历届站委会', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('5', '1', '1', '0', '0', '1', '25', '理论导航', null, '', null, '0', '0', '1', '1', '2', '3', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('6', '1', '1', '0', '0', '1', '7,8,9', '主题实践', null, '', null, '0', '0', '1', '1', '2', '3', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('7', '1', '1', '6', '0,6', '0', null, '两学一做', null, '', null, '0', '0', '1', '0', '2', '3', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('9', '1', '1', '6', '0,6', '0', null, '党课培训', null, '', null, '0', '0', '1', '0', '2', '3', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('11', '1', '1', '0', '0', '1', '12,13,14', '示范园地', null, '', null, '0', '0', '1', '1', '2', '10', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('12', '0', '1', '11', '0,11', '0', null, '优秀党员', null, '', null, '0', '0', '1', '0', '9', '10', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('13', '0', '1', '11', '0,11', '0', null, '先进人物', null, '', null, '0', '0', '1', '0', '2', '10', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('15', '1', '1', '0', '0', '1', '16,17,18', '党员信息', null, '', null, '0', '0', '1', '1', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('16', '0', '1', '15', '0,15', '0', null, '基层组织信息', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('17', '0', '1', '15', '0,15', '0', null, '党员基本信息', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('18', '0', '1', '15', '0,15', '0', null, '党员联系同学', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('19', '1', '1', '0', '0', '1', '23,24', '服务交流', null, '', null, '0', '0', '1', '1', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('23', '0', '1', '19', '0,19', '0', null, '值班安排', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('24', '0', '1', '19', '0,19', '0', null, '联系我们', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('26', '1', '1', '0', '0', '0', null, '公告', null, '在这里发布网站的公告', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('27', '1', '1', '0', '0', '0', null, '通知', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `dygzz_class` VALUES ('28', '1', '1', '0', '0', '0', null, '新闻', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');

-- ----------------------------
-- Table structure for `dygzz_classname`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_classname`;
CREATE TABLE `dygzz_classname` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_classname
-- ----------------------------
INSERT INTO `dygzz_classname` VALUES ('1', '13网工1班');
INSERT INTO `dygzz_classname` VALUES ('2', '13网工2班');
INSERT INTO `dygzz_classname` VALUES ('3', '13计科1班');
INSERT INTO `dygzz_classname` VALUES ('5', '13计科3班');
INSERT INTO `dygzz_classname` VALUES ('6', '13计科2班');
INSERT INTO `dygzz_classname` VALUES ('7', '14网工1班');
INSERT INTO `dygzz_classname` VALUES ('8', '11计科3班');

-- ----------------------------
-- Table structure for `dygzz_class_perm`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_class_perm`;
CREATE TABLE `dygzz_class_perm` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classid` int(11) DEFAULT NULL,
  `roleid` int(11) DEFAULT '0' COMMENT '角色或是组id',
  `action` varchar(255) DEFAULT NULL COMMENT '动作',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_class_perm
-- ----------------------------

-- ----------------------------
-- Table structure for `dygzz_comment`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_comment`;
CREATE TABLE `dygzz_comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL COMMENT '评论者姓名',
  `answer` varchar(255) DEFAULT NULL COMMENT '回复内容',
  `stutime` int(20) DEFAULT NULL COMMENT '留言时间',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '是否回复：1--已回复，0--未回复',
  `answertime` int(20) DEFAULT NULL COMMENT '回复时间',
  `comment` varchar(255) NOT NULL COMMENT '留言内容',
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_comment
-- ----------------------------
INSERT INTO `dygzz_comment` VALUES ('1', '0.0.0.0', '1121', 'root', '1463478559', '0', null, '24.45.', '11', null);
INSERT INTO `dygzz_comment` VALUES ('2', '0.0.0.0', 'hello', 'admin', '1464264453', '0', null, '这是一条测试数据,请不要回复,', '2013855675@qq.com', '15705547511');
INSERT INTO `dygzz_comment` VALUES ('3', '0.0.0.0', 'ads', 'admin', '1464265593', '0', null, 'dfasd', 'asdf', 'asdf');
INSERT INTO `dygzz_comment` VALUES ('4', '0.0.0.0', 'adsasdfasdf', 'alert', '1464265607', '0', null, 'dfasdsfd', 'asdffaswertvcv', 'asdfbfdgh');
INSERT INTO `dygzz_comment` VALUES ('5', '0.0.0.0', '1212', 'root', '1464265620', '0', null, 'sdefgasdfgasdfhdgf', '4352435', '456');
INSERT INTO `dygzz_comment` VALUES ('6', '0.0.0.0', '657', 'admin', '1464265632', '0', null, 'hjklklh', '879', '987yhj');
INSERT INTO `dygzz_comment` VALUES ('7', '0.0.0.0', '5678fh', 'admin', '1464265758', '0', null, 'hjklklh6754sdfgX', '879fghj', '987yhjhjf');
INSERT INTO `dygzz_comment` VALUES ('8', '0.0.0.0', '1234', '我回复了你  这是测试数据喔                      ', '1464268368', '1', '1464311154', '1234123', '2341@qq.com', null);
INSERT INTO `dygzz_comment` VALUES ('9', '0.0.0.0', '123', null, '1464319328', '0', null, 'hello world ', '2013855675@qq.com', null);
INSERT INTO `dygzz_comment` VALUES ('10', '0.0.0.0', 'hello', null, '1464320113', '0', null, 'hello php', 'ceshi@qq.com', null);

-- ----------------------------
-- Table structure for `dygzz_config`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_config`;
CREATE TABLE `dygzz_config` (
  `id` smallint(8) unsigned NOT NULL AUTO_INCREMENT,
  `varname` varchar(20) NOT NULL DEFAULT '',
  `info` varchar(100) NOT NULL DEFAULT '',
  `groupid` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `value` text NOT NULL,
  `type` char(16) NOT NULL DEFAULT 'string' COMMENT '类型',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COMMENT='网站配置表';

-- ----------------------------
-- Records of dygzz_config
-- ----------------------------
INSERT INTO `dygzz_config` VALUES ('1', 'sitename', '网站名称', '0', '计算机学院党员工作站', '');
INSERT INTO `dygzz_config` VALUES ('2', 'siteurl', '网站网址', '0', 'http://www.e8net.cn/mkszyllx', '');
INSERT INTO `dygzz_config` VALUES ('3', 'sitefileurl', '附件地址', '0', '', '');
INSERT INTO `dygzz_config` VALUES ('4', 'siteemail', '站点邮箱', '0', '', '');
INSERT INTO `dygzz_config` VALUES ('6', 'siteinfo', '网站介绍', '0', '淮南师范学院计算机学院', '');
INSERT INTO `dygzz_config` VALUES ('7', 'sitekeywords', '网站关键字', '0', '淮南师范学院计算机学院', '');
INSERT INTO `dygzz_config` VALUES ('8', 'uploadmaxsize', '允许上传附件大小', '0', '20240', '');
INSERT INTO `dygzz_config` VALUES ('9', 'uploadallowext', '允许上传附件类型', '0', '|jpeg|gif|bmp|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|rar|zip|swf', '');
INSERT INTO `dygzz_config` VALUES ('10', 'qtuploadmaxsize', '前台允许上传附件大小', '0', '200', '');
INSERT INTO `dygzz_config` VALUES ('11', 'qtuploadallowext', '前台允许上传附件类型', '0', 'jpg|jpeg|gif', '');
INSERT INTO `dygzz_config` VALUES ('12', 'watermarkenable', '是否开启图片水印', '0', '1', '');
INSERT INTO `dygzz_config` VALUES ('13', 'watermarkminwidth', '印-宽', '0', '300', '');
INSERT INTO `dygzz_config` VALUES ('14', 'watermarkminheight', '水印-高', '0', '100', '');
INSERT INTO `dygzz_config` VALUES ('15', 'watermarkimg', '水印图片', '0', '/statics/images/mark_bai.png', '');
INSERT INTO `dygzz_config` VALUES ('16', 'watermarkpct', '水印透明度', '0', '80', '');
INSERT INTO `dygzz_config` VALUES ('17', 'watermarkquality', 'JPEG 水印质量', '0', '85', '');
INSERT INTO `dygzz_config` VALUES ('18', 'watermarkpos', '水印位置', '0', '7', '');
INSERT INTO `dygzz_config` VALUES ('19', 'theme', '主题风格', '0', 'Default', '');
INSERT INTO `dygzz_config` VALUES ('20', 'ftpstatus', 'FTP上传', '0', '0', '');
INSERT INTO `dygzz_config` VALUES ('21', 'ftpuser', 'FTP用户名', '0', '', '');
INSERT INTO `dygzz_config` VALUES ('22', 'ftppassword', 'FTP密码', '0', '1', '');
INSERT INTO `dygzz_config` VALUES ('23', 'ftphost', 'FTP服务器地址', '0', '1', '');
INSERT INTO `dygzz_config` VALUES ('24', 'ftpport', 'FTP服务器端口', '0', '21', '');
INSERT INTO `dygzz_config` VALUES ('25', 'ftppasv', 'FTP是否开启被动模式', '0', '1', '');
INSERT INTO `dygzz_config` VALUES ('26', 'ftpssl', 'FTP是否使用SSL连接', '0', '0', '');
INSERT INTO `dygzz_config` VALUES ('27', 'ftptimeout', 'FTP超时时间', '0', '10', '');
INSERT INTO `dygzz_config` VALUES ('28', 'ftpuppat', 'FTP上传目录', '0', '/', '');
INSERT INTO `dygzz_config` VALUES ('29', 'mail_type', '邮件发送模式', '0', '1', '');
INSERT INTO `dygzz_config` VALUES ('30', 'mail_server', '邮件服务器', '0', 'smtp.126.com', '');
INSERT INTO `dygzz_config` VALUES ('31', 'mail_port', '邮件发送端口', '0', '25', '');
INSERT INTO `dygzz_config` VALUES ('32', 'mail_from', '发件人地址', '0', 'web_bc@126.com', '');
INSERT INTO `dygzz_config` VALUES ('33', 'mail_auth', '密码验证', '0', '', '');
INSERT INTO `dygzz_config` VALUES ('34', 'mail_user', '邮箱用户名', '0', 'E8网络工作室', '');
INSERT INTO `dygzz_config` VALUES ('35', 'mail_password', '邮箱密码', '0', 'baochao000', '');
INSERT INTO `dygzz_config` VALUES ('36', 'mail_fname', '发件人名称', '0', 'web_bc@126.com', '');
INSERT INTO `dygzz_config` VALUES ('37', 'domainaccess', '指定域名访问', '0', '0', '');
INSERT INTO `dygzz_config` VALUES ('38', 'generate', '是否生成首页', '0', '0', '');
INSERT INTO `dygzz_config` VALUES ('39', 'index_urlruleid', '首页URL规则', '0', '静态1:index_2.html', '');
INSERT INTO `dygzz_config` VALUES ('40', 'indextp', '首页模板', '0', 'index.php', '');
INSERT INTO `dygzz_config` VALUES ('41', 'tagurl', 'TagURL规则', '0', '8', '');
INSERT INTO `dygzz_config` VALUES ('61', 'adminurl', '后台url', '1', 'http://211.70.176.141/jxx/admin.php/', 'bool');
INSERT INTO `dygzz_config` VALUES ('66', 'sitevideo', '视频链接', '0', 'http://lxqncdn.miaopai.com/stream/xRtsRBKH8Tcp-muEidPwNg__.mp4', '');

-- ----------------------------
-- Table structure for `dygzz_content`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_content`;
CREATE TABLE `dygzz_content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL COMMENT '发布者',
  `classid` int(11) DEFAULT NULL COMMENT '栏目ID',
  `title` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `islink` tinyint(1) DEFAULT '0' COMMENT '是否启用文章链接 （1：启用）',
  `url` varchar(255) DEFAULT NULL,
  `sort` int(255) DEFAULT '0',
  `status` int(255) DEFAULT '0' COMMENT '状态 （0：未审核，1：已审核，2：回收站）',
  `addtime` int(11) DEFAULT NULL,
  `uptime` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `yesterdayviews` int(11) DEFAULT '0' COMMENT '昨日点击量',
  `dayviews` int(11) DEFAULT '0' COMMENT '今日点击量',
  `weekviews` int(11) DEFAULT '0' COMMENT '周点击量',
  `monthviews` int(11) DEFAULT '0' COMMENT '本月点击量',
  `viewsupdatetime` int(11) DEFAULT '0' COMMENT '点击数更新时间',
  `titlecolor` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL COMMENT '来源',
  `relateid` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_content
-- ----------------------------
INSERT INTO `dygzz_content` VALUES ('1', '1', '7', '手抄报比赛', null, '手抄党章', ' ', '0', '', '0', '1', '1461544486', '1461587871', '17', '0', '0', '0', '0', '0', '', '计算机学院', null, '许迟');
INSERT INTO `dygzz_content` VALUES ('5', '1', '5', '习近平系列讲话', null, '', ' ', '0', '', '0', '2', '1461631377', '1461674673', '7', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('7', '1', '16', '基层组织信息', null, '', '', '0', '', '0', '1', '1461632088', '1461675378', '45', '0', '0', '0', '0', '0', '', '计算机学院', null, '计算机学院');
INSERT INTO `dygzz_content` VALUES ('8', '1', '24', '计算机学院党站人员联系方式', null, '', '', '0', '', '0', '1', '1461712964', '1461756285', '12', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('9', '1', '5', '2016年两会十大热点前瞻', null, '', '    ', '0', '', '0', '1', '1461716294', '1461761715', '5', '0', '0', '0', '0', '0', '', 'https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp', null, '施华婷');
INSERT INTO `dygzz_content` VALUES ('10', '1', '5', '专家两会热点关键词解读:这五大关键字对中国的重要性', null, '', '   ', '0', '', '0', '1', '1461716522', '1461761591', '4', '0', '0', '0', '0', '0', '', 'http://www.zhicheng.com/n/20160314/56816.html', null, '施华婷');
INSERT INTO `dygzz_content` VALUES ('11', '1', '5', '推动全面从严治党向基层延伸的重大举措', null, '', ' ', '0', '', '0', '1', '1461716747', '1461761487', '2', '0', '0', '0', '0', '0', '', 'http://news.xinhuanet.com/politics/2016-02/29/c_128761102.html', null, '施华婷');
INSERT INTO `dygzz_content` VALUES ('12', '1', '5', '“两学一做”系列：习近平的“创新课”', null, '', '  ', '0', '', '0', '1', '1461716839', '1461761452', '5', '0', '0', '0', '0', '0', '', 'http://news.hainan.net/guonei/guoneiliebiao/2016/04/26/2948529.shtml', null, '施华婷');
INSERT INTO `dygzz_content` VALUES ('13', '1', '5', '“两学一做”，学什么？做什么？', null, '', '   ', '0', '', '0', '1', '1461717092', '1461767072', '6', '0', '0', '0', '0', '0', '', 'http://www.dangjian.cn/specials/djwwpt/wxgx/201603/t20160301_3180884.shtml', null, '施华婷');
INSERT INTO `dygzz_content` VALUES ('14', '1', '5', '三严三实”——永恒的从政准则', null, '', '     ', '0', '', '0', '1', '1461717167', '1461766721', '8', '0', '0', '0', '0', '0', '', '新华网', null, '');
INSERT INTO `dygzz_content` VALUES ('15', '1', '5', '在“三严三实”中实现人生价值', null, '', '    ', '0', '', '0', '1', '1461717319', '1461766327', '6', '0', '0', '0', '0', '0', '', '新华网', null, '施华婷');
INSERT INTO `dygzz_content` VALUES ('16', '1', '5', '中共中央组织部印发《推进“三严三实”教育的通知》', null, '', '  ', '0', '', '0', '1', '1461717448', '1461766269', '11', '0', '0', '0', '0', '0', '', '新华网', null, '');
INSERT INTO `dygzz_content` VALUES ('17', '1', '26', '党站人员联系方式', null, '', '       ', '0', '', '0', '1', '1461718700', '1461765337', '12', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('18', '1', '26', '这是一个标题', null, '', '', '0', '', '0', '1', '1463959231', '1464002446', '5', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('19', '1', '26', '这是一个公告1', null, '', '', '0', '', '0', '1', '1463964849', '1464008088', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('20', '1', '27', '这是一个通知1', null, '', '', '0', '', '0', '1', '1464031394', '1464074623', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('21', '1', '27', '这是一个通知2', null, '', '', '0', '', '0', '1', '1464031426', '1464074632', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('22', '1', '28', '这是一个新闻1', null, '', '', '0', '', '0', '1', '1464031450', '1464074662', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('23', '1', '28', '这是一个新闻2', null, '', '', '0', '', '0', '1', '1464031465', '1464074677', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('24', '1', '26', '中华人民共和国到了', null, '', '', '0', '', '0', '1', '1464050876', '1464094097', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('25', '1', '26', '我小时候有一个梦想', null, '', '', '0', '', '0', '1', '1464050901', '1464094118', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('26', '1', '26', '今天我吃了一个西瓜', null, '', '', '0', '', '0', '1', '1464050921', '1464094136', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('27', '1', '26', '很撑的一个晚上  我睡不着', null, '', '', '0', '', '0', '1', '1464050938', '1464094155', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('28', '1', '26', '今天晚上我想回去做', null, '', '', '0', '', '0', '1', '1464050958', '1464094167', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('29', '1', '26', '眼睛很酸啊', null, '', '', '0', '', '0', '1', '1464050969', '1464094175', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('30', '1', '26', '我想睡觉', null, '', '', '0', '', '0', '1', '1464050978', '1464094183', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('31', '1', '26', '内容我也不写了  我好懒', null, '', '', '0', '', '0', '1', '1464050986', '1464094197', '0', '0', '0', '0', '0', '0', '', '', null, '');
INSERT INTO `dygzz_content` VALUES ('32', '1', '26', '最后一个', null, '', '', '0', '', '0', '1', '1464051000', '1464094205', '1', '0', '0', '0', '0', '0', '', '', null, '');

-- ----------------------------
-- Table structure for `dygzz_content_data`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_content_data`;
CREATE TABLE `dygzz_content_data` (
  `id` int(11) unsigned NOT NULL,
  `content` mediumtext,
  `relateid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_content_data
-- ----------------------------
INSERT INTO `dygzz_content_data` VALUES ('1', '<p>手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛手抄报比赛<img alt=\"zt_1.jpg\" src=\"/mkszyllx/Public/data/upload/image/20160425/1461587788140227.jpg\" title=\"1461587788140227.jpg\"/></p><p style=\"line-height: 16px;\"><img style=\"vertical-align: middle; margin-right: 2px;\" src=\"http://localhost/dygzz/Public/e8admin/default/lib/ueditor/dialogs/attachment/fileTypeImages/icon_txt.gif\"/><a style=\"font-size:12px; color:#0066cc;\" href=\"/mkszyllx/Public/data/upload/file/20160425/1461587865132989.xlsx\" title=\"工作簿1.xlsx\">工作簿1.xlsx</a></p><p><br/></p>', null);
INSERT INTO `dygzz_content_data` VALUES ('5', '<p>习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话习近平系列讲话</p><p><br/></p>', null);
INSERT INTO `dygzz_content_data` VALUES ('7', '<p>计算机学院党员工作站分两个党支部。第一党支部与第二党支部。<br/></p>', null);
INSERT INTO `dygzz_content_data` VALUES ('8', '<p style=\"line-height: 16px;\"><img style=\"margin-right: 2px; vertical-align: middle;\" src=\"http://localhost/dygzz/Public/e8admin/default/lib/ueditor/dialogs/attachment/fileTypeImages/icon_txt.gif\"/><a title=\"计算机学院党站人员名单.docx.xlsx\" style=\"color: rgb(0, 102, 204); font-size: 12px;\" href=\"/mkszyllx/Public/data/upload/file/20160427/1461756277110991.xlsx\">计算机学院党站人员名单.docx.xlsx</a></p><p></p>', null);
INSERT INTO `dygzz_content_data` VALUES ('9', '<p style=\"background: rgb(255, 255, 255); text-align: justify; line-height: 25px; -ms-text-autospace: ideograph-numeric; -ms-text-justify: inter-ideograph;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">新华社北京<span style=\"font-family: Arial;\">3</span><span style=\"font-family: 宋体;\">月</span><span style=\"font-family: Arial;\">2</span><span style=\"font-family: 宋体;\">日电题</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">吹响决胜全面小康的号角</span><span style=\"font-family: Arial;\">——2016</span><span style=\"font-family: 宋体;\">年两会十大热点前瞻</span></span></p><p style=\"background: rgb(255, 255, 255); text-align: justify; line-height: 25px; -ms-text-autospace: ideograph-numeric; -ms-text-justify: inter-ideograph;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">新华社<span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">新华视点</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">记者</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">2016<span style=\"font-family: 宋体;\">年全国两会</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">是一个在重要历史节点召开的盛会。站在</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">十二五</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">收官、</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">十三五</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">开局的历史关口</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">如何按照中央</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">五位一体</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">总体布局和</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">四个全面</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">战略布局</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">抓住机遇、应对挑战</span><span style=\"font-family: Arial;\">?</span><span style=\"font-family: 宋体;\">如何深入贯彻五大发展理念</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">以供给侧结构性改革为主线</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">挖掘经济发展新动力</span><span style=\"font-family: Arial;\">?</span><span style=\"font-family: 宋体;\">会聚北京共商国是的代表委员们将展开讨论、建言献策</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">制定出行动纲领。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">1</span><span style=\"font-family: 宋体;\">】</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">十三五</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">规划</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">引领新常态开拓新境界</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">到<span style=\"font-family: Arial;\">2020</span><span style=\"font-family: 宋体;\">年全面建成小康社会</span><span style=\"font-family: Arial;\">,“</span><span style=\"font-family: 宋体;\">十三五</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">是冲刺的</span><span style=\"font-family: Arial;\">5</span><span style=\"font-family: 宋体;\">年。</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">四个全面</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">战略布局如何继续推进</span><span style=\"font-family: Arial;\">?</span><span style=\"font-family: 宋体;\">创新、协调、绿色、开放、共享的五大发展理念如何</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">落地</span><span style=\"font-family: Arial;\">”?</span><span style=\"font-family: 宋体;\">作为一份引领国家开创发展新境界的纲领性文件</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">两会审查、讨论的</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">十三五</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">规划草案</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">将回答国内外关注的诸多</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">中国之问</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">2</span><span style=\"font-family: 宋体;\">】供给侧改革</span><span style=\"font-family: Arial;\">:“</span><span style=\"font-family: 宋体;\">高频词</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">化为具体</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">路线图</span><span style=\"font-family: Arial;\">”</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">自去年底的中央经济工作会议后<span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">以去产能、去库存、去杠杆、降成本、补短板五大任务为重点的供给侧结构性改革正式启动。新常态下</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">供给侧改革正从</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">高频词</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">化为政府、企业明晰具体的改革</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">路线图</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">3</span><span style=\"font-family: 宋体;\">】扶贫攻坚战</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">吹响冲锋号立下</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">军令状</span><span style=\"font-family: Arial;\">”</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“</span><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">小康路上<span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">不让一个困难群众掉队。</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">到</span><span style=\"font-family: Arial;\">2020</span><span style=\"font-family: 宋体;\">年让</span><span style=\"font-family: Arial;\">7000</span><span style=\"font-family: 宋体;\">多万贫困人口全部脱贫</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">贫困县全部摘帽</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">是十八届五中全会既定目标</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">也是我国对全球减贫事业的庄严承诺。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">从层层立下<span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">军令状</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">到</span><span style=\"font-family: Arial;\">22</span><span style=\"font-family: 宋体;\">个中西部省区市考核扶贫成效</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">脱贫攻坚战的冲锋号已经吹响。精准扶贫还有哪些障碍</span><span style=\"font-family: Arial;\">?</span><span style=\"font-family: 宋体;\">哪些政策需要改进完善</span><span style=\"font-family: Arial;\">?</span><span style=\"font-family: 宋体;\">代表委员将带来大量一线情况与真知灼见。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">4</span><span style=\"font-family: 宋体;\">】慈善法审议</span><span style=\"font-family: Arial;\">:“</span><span style=\"font-family: 宋体;\">怀胎</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">十余年有望</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">呱呱落地</span><span style=\"font-family: Arial;\">”</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">慈善法草案将提交十二届全国人大四次会议审议。历经十余年努力<span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">我国关于慈善事业的首部立法将走上前台。草案经过两次审议</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">多处修改</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">此次提交审议后还将有哪些变化</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">将成为今年两会一大看点。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">5</span><span style=\"font-family: 宋体;\">】司法改革</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">为全面小康提供有力法律保障</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">在前两批共<span style=\"font-family: Arial;\">18</span><span style=\"font-family: 宋体;\">个省市司法改革试点基础上</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">今年司法体制改革试点将在全国各地推开</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">成为全面深化司法体制改革的攻坚之年。完善司法人员分类管理制度、完善司法责任制、健全司法人员职业保障制度等司法改革的基础性措施如何深入推进</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">引人关注。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">6</span><span style=\"font-family: 宋体;\">】民生改善</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">共享改革发展成果</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">党的十八届五中全会公报提出<span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">按照人人参与、人人尽力、人人享有的要求</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">坚守底线、突出重点、完善制度、引导预期</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">注重机会公平</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">保障基本民生</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">实现全体人民共同迈入全面小康社会。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">7</span><span style=\"font-family: 宋体;\">】创新驱动</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">社会经济发展新动能</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">创新正被摆在国家发展全局的核心位置。屠呦呦获得诺贝尔科学奖、<span style=\"font-family: Arial;\">C919</span><span style=\"font-family: 宋体;\">大型客机总装下线、</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">悟空</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">卫星升空探索暗物质粒子、科技成果转化法修订实施、新登记企业</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">井喷</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">、创新创业平台到处落地生根、创业投资迅速增长</span><span style=\"font-family: Arial;\">……</span><span style=\"font-family: 宋体;\">一系列创新标志性事件</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">透出中国经济社会发展正发生重大变革。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">8</span><span style=\"font-family: 宋体;\">】绿色环保</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">让执法监督</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">硬起来</span><span style=\"font-family: Arial;\">”</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">从中央提出绿色发展理念<span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">到大气污染治理写入</span><span style=\"font-family: Arial;\">31</span><span style=\"font-family: 宋体;\">个省区市政府工作报告</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">再到</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">十三五</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">规划建议中强调环保</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">社会各界对加快建设美丽中国充满期待。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">9</span><span style=\"font-family: 宋体;\">】拓展空间</span><span style=\"font-family: Arial;\">:“</span><span style=\"font-family: 宋体;\">中国方案</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">潜力巨大</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">“<span style=\"font-family: 宋体;\">一带一路</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">、京津冀协同发展、长江经济带建设三大战略深入推进</span><span style=\"font-family: Arial;\">;“</span><span style=\"font-family: 宋体;\">一带一路</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">战略为经济发展创造了良好的国际环境</span><span style=\"font-family: Arial;\">;</span><span style=\"font-family: 宋体;\">亚投行、金砖国家新开发银行等已经起航</span><span style=\"font-family: Arial;\">,G20</span><span style=\"font-family: 宋体;\">将吸引更多目光。中国推进更高层次的开放发展路线图</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">将在今年两会上更加明晰。此外</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">新一轮的东北振兴也令人期待。</span></span></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: bold;\">【热点<span style=\"font-family: Arial;\">10</span><span style=\"font-family: 宋体;\">】政府自身改革</span><span style=\"font-family: Arial;\">:</span><span style=\"font-family: 宋体;\">建设廉洁政府为改革发展添动力</span></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 25px; text-indent: 51px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">党的十八大以来<span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">打造法治政府、创新政府、廉洁政府和服务型政府成效显著。从一批批行政审批事项取消和下放</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">到推行</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">权力清单</span><span style=\"font-family: Arial;\">”“</span><span style=\"font-family: 宋体;\">责任清单</span><span style=\"font-family: Arial;\">”,</span><span style=\"font-family: 宋体;\">政府</span><span style=\"font-family: Arial;\">“</span><span style=\"font-family: 宋体;\">法无授权不可为</span><span style=\"font-family: Arial;\">”</span><span style=\"font-family: 宋体;\">的理念日益深入人心。同时反腐倡廉推动市场建立公平公正的秩序</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">提升了政府公信力</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">为改革发展增添动力。</span></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;\">南开大学周恩来政府管理学院教授徐行表示<span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">近年来的政府工作报告都对政府自身建设提出新要求。人们期待着进一步明确政府权力边界</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">继续加大简政放权力度</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">消除寻租腐败的空间</span><span style=\"font-family: Arial;\">,</span><span style=\"font-family: 宋体;\">建立政策落实的责任机制和督查问责机制。</span></span></p><p>&nbsp;</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('10', '<p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><span style=\"font-family: 微软雅黑; font-size: 14px;\">北京3月12日电 保持勇气、锐气和朝气对改革有何意义中等收入陷阱怎样迈过国际传播力为什么对中国发展越来越重要……今年</span><a href=\"http://www.zhicheng.com/lianghui/\"><span style=\"font-family: 微软雅黑; font-size: 14px; text-decoration: underline; text-underline: single;\">两会</span></a><span style=\"font-family: 微软雅黑; font-size: 14px;\">上，无论是习近平总书记的重要讲话还是政府工作报告、“十三五”规划纲要草案，很多提法、表述令人耳目一新，关系改革、影响发展。新华社记者请来国家高端智库首席专家为大家解读。</span></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"font-family: 微软雅黑; font-size: 14px; font-weight: bold;\"><br/></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"font-family: 微软雅黑; font-size: 14px; font-weight: bold;\">【关键词】勇气、锐气和朝气</span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"font-family: 微软雅黑; font-size: 14px; font-weight: bold;\"><br/></span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><span style=\"font-family: 微软雅黑; font-size: 14px;\"></span></p><p style=\"background: rgb(255, 255, 255); text-align: left; line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"font-family: 微软雅黑; font-size: 14px; font-weight: bold;\">【关键词】年均增长6.5%以上</span></strong></p><p style=\"background: rgb(255, 255, 255); text-align: left; line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><br/></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"font-family: 微软雅黑; font-size: 14px; font-weight: bold;\">【关键词】跨越“中等收入陷阱”</span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><br/></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"font-family: 微软雅黑; font-size: 14px; font-weight: bold;\">【关键词】加强国际传播</span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><br/></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"font-family: 微软雅黑; font-size: 14px; font-weight: bold;\">【关键词】系统集成</span></strong></p><p style=\"background: rgb(255, 255, 255); line-height: 23px; text-indent: 48px; -ms-text-autospace: ideograph-numeric;\"><span style=\"font-family: 微软雅黑; font-size: 14px;\"></span></p>', null);
INSERT INTO `dygzz_content_data` VALUES ('11', '<p style=\"margin: 1em 0px; text-indent: 28px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">近日，中央办公厅印发《关于在全体党员中开展“学党章党规、学系列讲话，做合格党员”学习教育方案》并发出通知，对“两学一做”学习教育作出安排。这是新形势下加强党的思想政治建设的一项重大部署。</span></p><p style=\"margin: 1em 0px; text-indent: 28px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span></p><p style=\"margin: 1em 0px; text-indent: 28px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">习近平总书记在中央纪委六次全会上明确指出，要推动全面从严治党向基层延伸。党员是党的肌体的细胞，党员合格，党的组织才坚强有力。在党的群众路线教育实践活动和“三严三实”专题教育取得明显成效基础上，今年在全体党员中开展“两学一做”学习教育，就是要推动党内教育从“关键少数”向广大党员拓展、从集中性教育向经常性教育延伸，把全面从严治党要求落实到每个支部、落实到每名党员。</span></p><p style=\"margin: 1em 0px; text-indent: 28px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span></p><p style=\"margin: 1em 0px; text-indent: 28px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">“两学一做”，基础在学。学习党章党规，重在明确基本标准、树立行为规范；学习习近平总书记系列重要讲话，重在加强理论武装、统一思想行动。对一名共产党员来说，自觉尊崇党章、遵守党规，学习领会党的创新理论，是最基本的要求。开展学习教育，须坚持正面教育为主，引导党员通读熟读党章党规，弄清楚该做什么、不该做什么，能做什么、不能做什么，把握共产党员为人做事的基准和底线；引导党员理解掌握习近平总书记系列重要讲话的丰富内涵和核心要义，用以武装头脑、指导实践、推动工作，为党在思想上政治上行动上的团结统一夯实基础。</span></p><p style=\"margin: 1em 0px; text-indent: 28px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">......</span></p>', null);
INSERT INTO `dygzz_content_data` VALUES ('12', '<p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\"><img title=\"1461760193121960.png\" alt=\"图片1.png\" src=\"http://localhost/mkszyllx/Public/data/upload/image/20160427/1461760193121960.png\"/></span></p><p style=\"margin: 0pt; text-indent: 21pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">2014<span style=\"font-family: 宋体;\">年</span><span style=\"font-family: Calibri;\">6</span><span style=\"font-family: 宋体;\">月</span><span style=\"font-family: Calibri;\">9</span><span style=\"font-family: 宋体;\">日，中国科学院第十七次院士大会、中国工程院第十二次院士大会在北京人民大会堂隆重开幕。中共中央总书记、国家主席、中央军委主席习近平出席会议并发表重要讲话。新华社记者李学仁摄</span></span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;“创新”，是习近平治国理政战略思想的重要关键词。党的十八大以来三年多的时间里，习近平总书记在很多场合的讲话中都讲到创新。今年全国两会期间，习近平“下团组”又多次提到创新，这也是他<span style=\"font-family: Calibri;\">2013</span><span style=\"font-family: 宋体;\">年以来连续四年在两会上谈创新问题。习近平为什么一再强调创新</span><span style=\"font-family: Calibri;\">?</span><span style=\"font-family: 宋体;\">对于创新，他有着怎样的判断和创见</span><span style=\"font-family: Calibri;\">?</span><span style=\"font-family: 宋体;\">又是如何阐述的</span><span style=\"font-family: Calibri;\">?</span><span style=\"font-family: 宋体;\">记者带你一同聆听习近平的“创新课”。</span></span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;妙语连珠说“创新”</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;习近平三年来的公开讲话中关于创新的论述分布于十八届五中全会、中央政治局集体学习、中央经济工作会议、全国两会、基层考察调研等很多场合，话语表达也颇具新意。</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;身体力行促“创新”</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;习近平关于创新的系列论述，言之切切，语重心长，为创新中国指明了方向。而从习近平近年的考察出访足迹，我们也可切实感到，习近平推动中国创新发展身体力行。</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">2013<span style=\"font-family: 宋体;\">年</span><span style=\"font-family: Calibri;\">6</span><span style=\"font-family: 宋体;\">月</span><span style=\"font-family: Calibri;\">11</span><span style=\"font-family: 宋体;\">日，神舟十号飞船成功发射、准确入轨，我国第五次载人航天飞行任务首战告捷。习近平在酒泉卫星发射中心接见天宫一号与神舟十号载人飞行任务参研参试单位代表，勉励航天战线工作者续写航天梦新篇章</span><span style=\"font-family: Calibri;\">;</span></span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;2013<span style=\"font-family: 宋体;\">年</span><span style=\"font-family: Calibri;\">7</span><span style=\"font-family: 宋体;\">月</span><span style=\"font-family: Calibri;\">17</span><span style=\"font-family: 宋体;\">日，习近平前往中国科学院，考察我国第一个大科学装置北京正负电子对撞机，了解科研平台建设、国防科技创新情况，勉励科研工作者弘扬“两弹一星”和“载人航天”精神，抢占未来科学技术制高点</span><span style=\"font-family: Calibri;\">;</span></span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;2014<span style=\"font-family: 宋体;\">年</span><span style=\"font-family: Calibri;\">5</span><span style=\"font-family: 宋体;\">月</span><span style=\"font-family: Calibri;\">23</span><span style=\"font-family: 宋体;\">日至</span><span style=\"font-family: Calibri;\">24</span><span style=\"font-family: 宋体;\">日，习近平深入上海自由贸易试验区考察调研，强调上海自由贸易试验区是块大试验田，希望试验区“大胆闯、大胆试、自主改”，切实把制度创新作为核心任务，以形成可复制、可推广的制度成果为着力点</span><span style=\"font-family: Calibri;\">;</span></span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">&nbsp;&nbsp;&nbsp;&nbsp;2015<span style=\"font-family: 宋体;\">年</span><span style=\"font-family: Calibri;\">9</span><span style=\"font-family: 宋体;\">月</span><span style=\"font-family: Calibri;\">23</span><span style=\"font-family: 宋体;\">日，习近平在访美期间，参观波音公司商用飞机制造厂与美国微软公司总部，了解未来飞机设计理念，观看</span><span style=\"font-family: Calibri;\">3D</span><span style=\"font-family: 宋体;\">“全息眼镜”设计摩托车造型和美国气象数据可视化系统展示，对加强双方合作提出希望。</span></span></p><p style=\"margin: 0pt;\"><span style=\"font-family: Calibri; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: 宋体;\">&nbsp;</span></p><p style=\"margin: 0pt; text-indent: 24pt;\"><span style=\"font-family: 宋体; font-size: 12pt; mso-spacerun: &quot;yes&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ascii-font-family: Calibri; mso-hansi-font-family: Calibri;\">从精到论述到深入考察调研，习近平不遗余力推动创新中国的建设。适应和引领经济发展新常态，以创新思维武装头脑，践行五大发展理念，为改革创新撑腰，为人才发展护航，勇立潮头，锐意开拓，大胆创新，做创新中国的给力推进者，理应成为每一位领导干部的自觉行动。</span></p><p>&nbsp;</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('13', '<p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">近日，中共中央办公厅印发了《关于在全体党员中开展<span style=\"font-family: Times New Roman;\">“</span><span style=\"font-family: 宋体;\">学党章党规、学系列讲话，做合格党员</span><span style=\"font-family: Times New Roman;\">”</span><span style=\"font-family: 宋体;\">学习教育方案》，并发出通知，要求各地区各部门认真贯彻执行。</span><span style=\"font-family: Times New Roman;\">&nbsp;</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">&nbsp;</span><span style=\"font-family:;\" new=\"\" times=\"\">1.<span style=\"font-family: 宋体;\">这是</span><span style=\"font-family: Times New Roman;\">“</span><span style=\"font-family: 宋体;\">一项重大政治任务</span><span style=\"font-family: Times New Roman;\">”</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">各地区各部门各单位党委（党组），要将其<span style=\"font-family: Times New Roman;\">“</span></span><strong><span style=\"font-family:;\" new=\"\" times=\"\">作为一项重大政治任务，</span></strong><span style=\"font-family:;\" new=\"\" times=\"\">尽好责、抓到位、见实效<span style=\"font-family: Times New Roman;\">”</span><span style=\"font-family: 宋体;\">。</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">2.<span style=\"font-family: 宋体;\">学习教育的范围</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">通知指出，是<span style=\"font-family: Times New Roman;\">“</span><span style=\"font-family: 宋体;\">面向全体党员深化党内教育的重要实践</span><span style=\"font-family: Times New Roman;\">”</span><span style=\"font-family: 宋体;\">。</span></span><strong><span style=\"font-family:;\" new=\"\" times=\"\">“<span style=\"font-family: 宋体;\">面向全体党员</span><span style=\"font-family: Times New Roman;\">”</span></span></strong><span style=\"font-family:;\" new=\"\" times=\"\">，不管是党员领导干部，还是普通党员。</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">&nbsp;</span><span style=\"font-family: 宋体; font-size: 16px;\">3.学习教育的目的是什么？</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">深入学习贯彻习近平总书记系列重要讲话精神，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">推动全面从严治党向基层延伸，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">巩固拓展党的群众路线教育实践活动和<span style=\"font-family: Times New Roman;\">“</span><span style=\"font-family: 宋体;\">三严三实</span><span style=\"font-family: Times New Roman;\">”</span><span style=\"font-family: 宋体;\">专题教育成果，</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">进一步解决党员队伍在思想、组织、作风、纪律等方面存在的问题，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">保持发展党的先进性和纯洁性。</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">4.<span style=\"font-family: 宋体;\">实现</span><span style=\"font-family: Times New Roman;\">4</span><span style=\"font-family: 宋体;\">个</span><span style=\"font-family: Times New Roman;\">“</span><span style=\"font-family: 宋体;\">进一步</span><span style=\"font-family: Times New Roman;\">”</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">教育引导党员自觉按照党员标准规范言行，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><strong><span style=\"font-family:;\" new=\"\" times=\"\">进一步</span></strong><span style=\"font-family:;\" new=\"\" times=\"\">坚定理想信念，提高党性觉悟；</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><strong><span style=\"font-family:;\" new=\"\" times=\"\">进一步</span></strong><span style=\"font-family:;\" new=\"\" times=\"\">增强政治意识、大局意识、核心意识、看齐意识，坚定正确政治方向；</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><strong><span style=\"font-family:;\" new=\"\" times=\"\">进一步</span></strong><span style=\"font-family:;\" new=\"\" times=\"\">树立清风正气，严守政治纪律政治规矩；</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><strong><span style=\"font-family:;\" new=\"\" times=\"\">进一步</span></strong><span style=\"font-family:;\" new=\"\" times=\"\">强化宗旨观念，勇于担当作为，在生产、工作、学习和社会生活中起先锋模范作用。</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\"><br/></span><span style=\"font-family:;\" new=\"\" times=\"\">5.<span style=\"font-family: 宋体;\">针对的现实问题是什么？</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">即，</span><strong><span style=\"font-family:;\" new=\"\" times=\"\">5<span style=\"font-family: 宋体;\">个着力解决</span></span></strong></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">着力解决一些党员理想信念模糊动摇的问题，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">着力解决一些党员党的意识淡化的问题，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">着力解决一些党员宗旨观念淡薄的问题</span><span style=\"font-family: 宋体; font-size: 16px;\">，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">着力解决一些党员精神不振的问题，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">着力解决一些党员道德行为不端的问题。</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">6</span><span style=\"font-family:;\" new=\"\" times=\"\">.<span style=\"font-family: 宋体;\">具体学什么？</span></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><strong><span style=\"font-family:;\" new=\"\" times=\"\">1<span style=\"font-family: 宋体;\">、学党章党规。</span></span></strong></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><strong><span style=\"font-family:;\" new=\"\" times=\"\">2、<span style=\"font-family: 宋体;\">学系列讲话。</span></span></strong><span style=\"font-family:;\" new=\"\" times=\"\">&nbsp;</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\"><strong>3、做合格党员。</strong></span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">即，</span><strong><span style=\"font-family:;\" new=\"\" times=\"\">“4<span style=\"font-family: 宋体;\">讲</span><span style=\"font-family: Times New Roman;\">4</span><span style=\"font-family: 宋体;\">有</span><span style=\"font-family: Times New Roman;\">”</span></span></strong></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">讲政治、有信念，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">讲规矩、有纪律，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">讲道德、有品行，</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; text-indent: 32px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\">讲奉献、有作为。</span></p><p style=\"margin: 1em 0px; padding: 0px; text-align: justify; line-height: 30px; text-indent: 32px; -ms-text-justify: inter-ideograph;\"><span style=\"font-family:;\" new=\"\" times=\"\"><br/></span></p><p>&nbsp;</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('14', '<p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“各级领导干部都要树立和发扬好的作风，既严以修身、严以用权、严以律己，又谋事要实、创业要实、做人要实。”习总书记的谆谆告诫，是对古今正心修身之道的凝炼和提升，是新时期党的作风建设的新坐标，体现了道德与法规制度的统一，体现了做人与做事的统一，体现了谋大事与干实事的统一。我们要坚持用习总书记系列重要讲话精神统一思想、凝聚共识，始终向中央基准看齐，按照中央和省委要求，把“三严三实”作为从政永远的准则。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><strong><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 19px; font-weight: bold;\">一、“三严三实”的现实意义</span></strong></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“三严三实”是领导干部从政的根本准则。“修身正己立德为人之大本”历来被视为做人处事为官理政的根本。做官先做人，做人先立德；德乃官之本，为官先修德。习总书记多次强调，“为官之本，在于为官一场、造福一方；为官之理，在于讲奉献；为官之德，在于清廉；为官之义，在于明法。”“三严三实”强调修心正身、律己求实，既融合了中华民族传统文化的政治智慧，又把握了思想道德修养的时代脉搏；既强化了领导干部的从政准则，又提升了领导干部的作风标准。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">二、“三严三实”的科学内涵</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“严以修身”，就是要加强党性修养，坚定理想信念，提升道德境界，追求高尚情操，自觉远离低级趣味，自觉抵制歪风邪气。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“严以用权”，就是要坚持用权为民，按规则、按制度行使权力，把权力关进制度的笼子里，任何时候都不搞特权、不以权谋私。权力是一把“双刃剑”。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“严以律己”，就是要心存敬畏、手握戒尺，慎独慎微、勤于自省，遵守党纪国法，做到为政清廉。“不能胜寸心，安能胜苍穹？”</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“谋事要实”，就是要从实际出发谋划事业和工作，使点子、政策、方案符合实际情况、符合客观规律、符合科学精神，不好高骛远，不脱离实际。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“创业要实”，就是要脚踏实地、真抓实干，敢于担当责任，勇于直面矛盾，善于解决问题，努力创造出经得起实践、人民、历史检验的实绩。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“做人要实”，就是要对党、对组织、对人民、对同志忠诚老实，做老实人、说老实话、干老实事，襟怀坦白，公道正派。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 25px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(0, 0, 0); font-family: 宋体; font-size: 14px;\">“三严”与“三实”相互联系、相辅相成、不可分割。“三严”是根本、是出发点，要守住严、防止松；“三实”是目标、是落脚点，要突出实、防止虚。我们要从严上要求，向实处着力，真正把“三严三实”内化于心、外化于行，使清风正气一点点积聚起来，使党员干部的精气神昂扬起来，以“三严三实”的过硬作风推动党的事业发展。</span></p><p>&nbsp;&nbsp;&nbsp;&nbsp; 链接地址：http://www.qstheory.cn/zywz/201404/t20140425_343824.htm</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('15', '<p style=\"margin: 1em 0px 0px; text-align: center; text-indent: 29px;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">&nbsp;&nbsp; <img title=\"1461760584423561.png\" alt=\"图片1.png\" src=\"/mkszyllx/Public/data/upload/image/20160427/1461760584423561.png\"/></span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">9<span style=\"font-family: 微软雅黑;\">月</span><span style=\"font-family: Tahoma;\">1</span><span style=\"font-family: 微软雅黑;\">日，中共中央政治局常委、中央党校校长刘云山在中央党校秋季学期开学典礼讲话中强调，党员干部要认真学习贯彻习近平总书记重要指示精神，深入领会“</span></span><span style=\"font-family: 微软雅黑; font-size: 15px;\">三严三实</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">”的深刻内涵和具体要求，切实做到严以修身、严以用权、严以律己，谋事要实、创业要实、做人要实，更好履行共产党人的崇高职责。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">习近平总书记提出的“三严三实”具有很强的针对性，是新时期共产党人加强自身修养的行动指南。每个人都在探寻人生的价值和生命的意义。对于广大党员干部来说，人生的价值就体现在运用人民赋予的权力全心全意为人民服务，而在工作生活中贯彻“三严三实”的要求，正是实现自我人生价值的重要保证和必由之路。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">贯彻“三严三实”的要求，首要的一条是做到“严”字当头。从历史上看，从新近的事例看，很多栽跟头的党员干部有一个共同点，那就是不能做到严以修身、严以用权、严以律己，公德不顾，帷薄不修，似乎头脑中只装满了各种私欲，手中的权力只是实现这各种私欲的工具，结果灵魂掉入黑暗的深渊，同时给党和国家造成重大损失。相反，那些为人民建功立业、做出突出贡献的人，没有一个不对自己要求严格，也没有一个会滥用职权。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">人生在世，无非是做人、做事，党员干部自然是在做人、做事中做官，做官也就是做事、做人。做人不实，无法做人；做事不实，难以成功；做官不实，祸己害民。前人说得好：“板凳要坐十年冷，文章不写一句空。”更何况党员干部的“学问”不是在书斋里做出来的，党员干部的“道德文章”不是写在纸上而是写在大地上、写在人心中，岂能不奉“实”字为金针，时时处处警醒激励自己谋事要实、创业要实、做人要实？练多了“虚”功，做多了“虚”事，则可能无往而不“虚”，心也一天比一天“虚”，又如何能收获实在的人生？</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">“</span><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">三严三实”是一个统一的整体：只有做到了“三严”，才能做到“三实”；同样，只有做到了“三实”，才能做到“三严”。自奉甚俭、自律甚严者鲜不“实”，追求生命有重量、有质感的人鲜不自“严”。如果有党员干部作风飘浮、好大喜功，却宣称自律甚严，我们可以不客气地指出这是一种虚伪；如果有党员干部沉迷于灯红酒绿、夸夸其谈，却宣称自己脚踏实地，我们同样可以不客气地指出这也是一种虚伪。每个党员干部都应当以“吾日三省吾身”的精神对照自己的言行，看看是不是走在“三严三实”的正确道路上；如果偏离了“三严三实”的轨道就要迅速加以纠正，如此才不至于使自己的人生迷失方向。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">对于各级党员领导干部来说，贯彻“三严三实”还有更高的要求。党员领导干部像普通党员干部那样做到“三严三实”，这是起码的要求，但不能也不应满足于此。如果队伍中存在背离“三严三实”的表现甚至消极腐败现象，党员领导干部不去旗帜鲜明地反对、不去积极采取措施加以消除，而是睁一只眼闭一只眼，那么就可以说，这样的党员领导干部离“三严三实”的要求还有不小的差距。因此，“三严三实”不仅是党员干部加强个人修养的行动指南，同时也是加强党的作风建设、队伍建设的根本要求，必须充分体现到党要管党、从严治党的全过程和各方面。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-text-autospace: ideograph-numeric;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 15px;\">链接地址：http://news.xinhuanet.com/comments/2014-09/03/c_1112335179.htm</span></p><p>&nbsp;</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('16', '<p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-layout-grid-mode: char; -ms-text-autospace: ideograph-numeric;\"><span style=\"font-family: 微软雅黑; font-size: 15px;\">近日，中共中央组织部印发通知，对认真学习贯彻习近平总书记重要指示精神、扎实推进“三严三实”专题教育提出要求。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-layout-grid-mode: char; -ms-text-autospace: ideograph-numeric;\"><span style=\"font-family: 微软雅黑; font-size: 15px;\">《通知》指出，习近平总书记在浙江和贵州考察、会见全国优秀县委书记、主持召开中央全面深化改革领导小组第十四次会议时，对开展“三严三实”专题教育、践行“三严三实”要求作出重要指示。习近平总书记强调，在县处级以上领导干部中开展“三严三实”专题教育，是今年党的建设的一项重要任务，要突出问题导向，贯彻从严要求，既巩固和扩大从严治党成果，又有效解决党的建设面临的新问题。习近平总书记的重要指示精神，对于高标准高质量开展专题教育、确保取得实效，具有十分重要的指导意义。各级党委（党组）要认真组织学习，领会精神实质，抓好贯彻落实。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-layout-grid-mode: char; -ms-text-autospace: ideograph-numeric;\"><span style=\"font-family: 微软雅黑; font-size: 15px;\">《通知》强调，认真学习深刻领会习近平总书记重要指示精神。要把学习贯彻习近平总书记重要指示精神作为专题学习研讨的重要内容。通过学习，使领导干部深刻领会习近平总书记关于领导干部要可信、做人干事都让组织放心的要求，努力成为党和人民信赖的好干部；深刻领会习近平总书记关于学习老一辈革命家崇高品德的要求，检身正己、见贤思齐；深刻领会习近平总书记关于把“三严三实”贯穿改革全过程的要求，既当改革的促进派，又当改革的实干家；深刻领会习近平总书记关于领导干部要带头搞好专题教育的要求，清清白白做人、干干净净做事、堂堂正正做官。各级领导干部要在领会核心要义上下功夫，在打牢思想根基上下功夫，在坚持知行合一上下功夫，以思想自觉引领行动自觉。</span></p><p style=\"margin: 1em 0px 0px; text-align: left; text-indent: 29px; -ms-layout-grid-mode: char; -ms-text-autospace: ideograph-numeric;\"><span style=\"font-family: 微软雅黑; font-size: 15px;\">链接地址：http://dangjian.people.com.cn/n/2015/0713/c117092-27297917.html</span></p><p>&nbsp;</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('17', '<p><!--StartFragment --></p><p>计算机学院党员工作站在计算机学院党总支的领导下，协助第一党支部、第二党支部面向公寓开展工作。计算机学院党员工作站指导老师为彭飞老师。&nbsp;为了更好地服务同学，计算机学院党员工作站除了安排党站全天候值班和先锋岗值班外，还可以联系党站内部成员。其内部组织结构包括：站长丁勇杰，副站长王蕾，站务委员七名分别为：丁勇杰，王蕾，邓卉子，汪正亮，刘佳乐，许迟，王巧珍。<br/>&nbsp;&nbsp;&nbsp;&nbsp;在工作中经过不断调整计算机学院党员工作站现设置如下七个部门：生活部&nbsp;、办公室&nbsp;、安全部&nbsp;、组织部&nbsp;、纪检部&nbsp;、宣传部、信息部。其中办公室成员有：韩贵芳、储小琴、闫闫。组织部成员有：王蕾、施华婷、陈浩宁、刘启来。纪检部成员有：王晶、何艳玲、兰天。宣传部成员有：邓卉子、许迟、张国磊、余宙。生活部成员有：王巧珍、陈晚露、靳青青、吴甜。安全部成员有：陶维强、王娟、张煜。信息部成员有：冯程程、谷峰、斯金阳。<br/></p><p>&nbsp;</p><p>&nbsp;</p><p>附件：&nbsp; <img style=\"margin-right: 2px; vertical-align: middle;\" src=\"http://localhost/dygzz/Public/e8admin/default/lib/ueditor/dialogs/attachment/fileTypeImages/icon_txt.gif\"/><a title=\"计算机学院党站人员名单.docx.xlsx\" style=\"color: rgb(0, 102, 204); font-size: 12px;\" href=\"/mkszyllx/Public/data/upload/file/20160427/1461764976707872.xlsx\">计算机学院党站人员名单.docx.xlsx</a></p><p>&nbsp;</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('18', '<p>这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题这是一个标题</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('19', '<p>公告这呢 &nbsp;这是内容<br/></p>', null);
INSERT INTO `dygzz_content_data` VALUES ('20', '<p>这是一个通知这是一个通知这是一个通知这是一个通知</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('21', '<p>2222222222222222222222222</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('22', '<p>这是一个新闻这是一个新闻</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('23', '<p>222222222222222222</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('24', '<p>阿斯顿发送到发送到发</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('25', '<p>梦想是什么？</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('26', '<p>西瓜很贵</p>', null);
INSERT INTO `dygzz_content_data` VALUES ('27', '', null);
INSERT INTO `dygzz_content_data` VALUES ('28', '', null);
INSERT INTO `dygzz_content_data` VALUES ('29', null, null);
INSERT INTO `dygzz_content_data` VALUES ('30', null, null);
INSERT INTO `dygzz_content_data` VALUES ('31', null, null);
INSERT INTO `dygzz_content_data` VALUES ('32', null, null);

-- ----------------------------
-- Table structure for `dygzz_domitory`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_domitory`;
CREATE TABLE `dygzz_domitory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `did` varchar(50) NOT NULL COMMENT '宿舍号',
  `leader` varchar(50) NOT NULL COMMENT '宿舍长',
  `image` varchar(255) DEFAULT NULL COMMENT '宿舍图片',
  `introduction` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT NULL COMMENT '点击量',
  `classname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_domitory
-- ----------------------------
INSERT INTO `dygzz_domitory` VALUES ('1', '10A514', 'zhen', 'image/2016-05-24/57444ecbbf1f6.png', '<p>aafd g<br/></p>', '16', '13网工班1');
INSERT INTO `dygzz_domitory` VALUES ('3', '10A515', '4et', 'image/2016-04-24/571ccc1a4c642.jpg', '<p>st</p>', '4', '13网工班1');
INSERT INTO `dygzz_domitory` VALUES ('4', '10A517', '禹', 'image/2016-04-24/571ccc38db9f6.jpg', '<p>sftt</p>', '3', '13网工班1');
INSERT INTO `dygzz_domitory` VALUES ('5', '9A410', '张宇', 'image/2016-05-24/57444ec03b9d3.png', '', null, '');
INSERT INTO `dygzz_domitory` VALUES ('6', '4563', '653', 'image/2016-05-24/57444ede5954d.png', null, null, '');
INSERT INTO `dygzz_domitory` VALUES ('7', '6+', '3456', 'image/2016-05-24/57444eefb2327.png', '', null, '');
INSERT INTO `dygzz_domitory` VALUES ('8', '89', '786', 'image/2016-05-24/57444efe221c7.png', null, null, '');
INSERT INTO `dygzz_domitory` VALUES ('9', '456', '456', 'image/2016-05-24/57444f0b0bd49.png', null, null, '');

-- ----------------------------
-- Table structure for `dygzz_flowimg`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_flowimg`;
CREATE TABLE `dygzz_flowimg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `open` int(1) unsigned DEFAULT '1' COMMENT '1 新页面打开    0 本页面打开',
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_flowimg
-- ----------------------------
INSERT INTO `dygzz_flowimg` VALUES ('1', '淮南师范学院E8工作室', 'image/2016-05-24/thumb_5744549527b09.jpg', 'http://t.tt', '1', '这是一个神奇的描述阿萨德');

-- ----------------------------
-- Table structure for `dygzz_link`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_link`;
CREATE TABLE `dygzz_link` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '链接id',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '链接名称',
  `image` varchar(255) NOT NULL DEFAULT '' COMMENT '链接图片',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '链接描述',
  `visible` tinyint(1) NOT NULL COMMENT '链接是否可见',
  `rating` int(11) NOT NULL DEFAULT '0' COMMENT '链接等级',
  `updated` int(11) NOT NULL COMMENT '链接最后更新时间',
  `notes` mediumtext NOT NULL COMMENT '链接详细介绍',
  `rss` varchar(255) NOT NULL DEFAULT '' COMMENT '链接RSS地址',
  `termsid` int(4) NOT NULL COMMENT '分类id',
  `target` enum('1','0') DEFAULT '0' COMMENT '0代表默认方式打开，1代表新窗口打开',
  PRIMARY KEY (`id`),
  KEY `visible` (`visible`),
  KEY `termsid` (`termsid`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COMMENT='友情链接';

-- ----------------------------
-- Records of dygzz_link
-- ----------------------------
INSERT INTO `dygzz_link` VALUES ('70', 'http://wgy.hnnu.edu.cn/', '外国语学院', '', '', '1', '0', '1461372340', '', '', '31', '0');
INSERT INTO `dygzz_link` VALUES ('45', 'http://211.70.176.141/jxx/', '计算机学院', '', '', '1', '0', '1461371632', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('46', 'http://swgc.hnnu.edu.cn/', '生物工程学院', '', '', '1', '0', '1461371676', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('47', 'http://211.70.176.138/jgxy/', '经济与管理学院', '', '', '1', '0', '1461371723', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('48', 'http://jr.hnnu.edu.cn/', '金融学院', '', '', '1', '0', '1461371783', '', '', '31', '0');
INSERT INTO `dygzz_link` VALUES ('49', 'http://211.70.176.161:8080/sxx/', '文传学院', '', '', '1', '0', '1461371829', '', '', '31', '0');
INSERT INTO `dygzz_link` VALUES ('50', 'http://jyw.hnnu.edu.cn/', '教育学院', '', '', '1', '0', '1461371860', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('51', 'http://tyxy.hnnu.edu.cn/', '体育学院', '', '', '1', '0', '1461371930', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('52', 'http://hxxy.hnnu.edu.cn/', '化学与材料工程学院', '', '', '1', '0', '1461372064', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('53', 'http://dzgc.hnnu.edu.cn/', '电子工程学院', '', '', '1', '0', '1461372197', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('54', 'http://msxy.hnnu.edu.cn/', '美术与设计学院', '', '', '1', '0', '1461372278', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('57', 'http://jx.hnnu.edu.cn/', '机械与电气学院', '', '', '1', '0', '1461372249', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('58', 'http://211.70.176.161:8080/maxism/', '马克思主义学院', '', '', '1', '0', '1415960098', '', '', '31', '1');
INSERT INTO `dygzz_link` VALUES ('59', 'http://opencourse.pku.edu.cn/course/opencourse2/', '北京大学公开课', '', '', '1', '0', '1460966243', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('60', 'http://open.163.com/', '网易公开课', '', '', '1', '0', '1460966257', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('61', 'http://open.sina.com.cn/', '新浪公开课', '', '', '1', '0', '1460966272', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('62', 'http://www.class.cn/index/open', '大学公开课', '', '', '1', '0', '1460966282', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('63', 'http://www.verycd.com/base/edu/', '电路公开课', '', '', '1', '0', '1460966296', '', '', '33', '0');
INSERT INTO `dygzz_link` VALUES ('64', 'http://acm.hdu.edu.cn/', '杭州电子科技大学网上评测系统', '', '', '1', '0', '1415960501', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('65', 'http://bbs.androidcn.com/', '安卓中文论坛', '', '', '1', '0', '1415960523', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('66', 'http://www.eehome.cn/forum.php', '单片机论坛', '', '', '1', '0', '1415960546', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('67', 'http://www.apkbus.com/', '移动开发者门户', '', '', '1', '0', '1415960573', '', '', '33', '1');
INSERT INTO `dygzz_link` VALUES ('68', 'http://211.70.176.141/jxx/index.php/Show/content/id/1081', '合财杯', 'image/2015-03-12/5501459308d49.jpg', '图片大小为250*200', '1', '0', '1460966332', '', '', '37', '1');

-- ----------------------------
-- Table structure for `dygzz_log`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_log`;
CREATE TABLE `dygzz_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '日志ID',
  `username` char(30) NOT NULL COMMENT '登录帐号',
  `logintime` int(10) NOT NULL COMMENT '登录时间戳',
  `loginip` char(20) NOT NULL COMMENT '登录IP',
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '状态,1为登录成功，2为登录失败',
  `password` char(30) NOT NULL DEFAULT '' COMMENT '尝试错误密码',
  `info` char(255) NOT NULL COMMENT '其他说明',
  `area` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=458 DEFAULT CHARSET=utf8 COMMENT='后台登陆日志表';

-- ----------------------------
-- Records of dygzz_log
-- ----------------------------
INSERT INTO `dygzz_log` VALUES ('284', 'admin', '1418729036', '192.168.7.12', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('285', 'admin', '1418732535', '223.104.18.125', '1', '密码保密', '用户名登陆', '中国移动');
INSERT INTO `dygzz_log` VALUES ('286', 'admin', '1418734092', '192.168.7.12', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('287', 'admin', '1418734117', '192.168.7.12', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('288', 'admin', '1418734160', '192.168.7.12', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('289', 'admin', '1418734881', '192.168.7.214', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('290', 'admin', '1418790855', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('291', 'admin', '1418791287', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('292', 'admin', '1418791658', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('293', 'admin', '1418885592', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('294', 'admin', '1418895089', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('295', 'admin', '1418895403', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('296', 'admin', '1418895773', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('297', 'admin', '1418895805', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('298', 'admin', '1418895846', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('299', 'admin', '1418900447', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('300', 'admin', '1418900669', '192.168.7.156', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('301', 'admin', '1418900677', '192.168.7.189', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('302', 'admin', '1418900724', '192.168.7.251', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('303', 'admin', '1418900813', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('304', 'admin', '1418901244', '192.168.7.201', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('305', 'admin', '1418901652', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('306', 'admin', '1418901671', '192.168.7.201', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('307', 'admin', '1418901793', '192.168.7.156', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('308', 'admin', '1418901886', '192.168.7.251', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('309', 'admin', '1418901942', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('310', 'admin', '1418902213', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('311', 'admin', '1418902269', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('312', 'admin', '1418902273', '192.168.7.56', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('313', 'admin', '1418902282', '192.168.7.156', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('314', 'admin', '1418902304', '192.168.7.251', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('315', 'admin', '1418902315', '192.168.7.251', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('316', 'admin', '1418902702', '192.168.7.156', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('317', 'admin', '1418902793', '192.168.7.156', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('318', 'admin', '1418902821', '192.168.7.156', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('319', 'admin', '1418902866', '192.168.7.201', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('320', 'admin', '1418903288', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('321', 'admin', '1418904582', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('322', 'admin', '1418904707', '192.168.7.251', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('323', 'admin', '1418905549', '192.168.7.56', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('324', 'admin', '1418905760', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('325', 'admin', '1418905778', '192.168.7.189', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('326', 'admin', '1418906804', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('327', 'admin', '1418910856', '183.166.60.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('328', 'admin', '1418910950', '183.166.60.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('329', 'admin', '1418912710', '120.210.100.188', '1', '密码保密', '用户名登陆', '安徽省移动');
INSERT INTO `dygzz_log` VALUES ('330', 'admin', '1418953818', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('331', 'admin', '1418953842', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('332', 'admin', '1418953860', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('333', 'hsjxx', '1418954120', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('334', 'admin', '1418954211', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('335', 'hsjxx', '1418954251', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('336', 'admin', '1418954376', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('337', 'admin', '1418954419', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('338', 'admin', '1418969840', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('339', 'admin', '1418992900', '192.168.7.14', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('340', 'admin', '1419167672', '192.168.7.212', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('341', 'admin', '1419235483', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('342', 'admin', '1419405081', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('343', 'admin', '1419409674', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('344', 'admin', '1419470793', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('345', 'admin', '1419816541', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('346', 'admin', '1419828239', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('347', 'admin', '1419828502', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('348', 'admin', '1419840858', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('349', 'admin', '1419992241', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('350', 'admin', '1420422485', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('351', 'admin', '1420530358', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('352', 'admin', '1420536317', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('353', 'admin', '1420731200', '117.69.22.30', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('354', 'admin', '1421023449', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('355', 'admin', '1421037295', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('356', 'admin', '1421108755', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('357', 'admin', '1421114257', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('358', 'admin', '1422957356', '120.210.183.253', '1', '密码保密', '用户名登陆', '安徽省移动');
INSERT INTO `dygzz_log` VALUES ('359', 'admin', '1425024278', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('360', 'admin', '1425190111', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('361', 'admin', '1425190145', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('362', 'admin', '1425282394', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('363', 'admin', '1425285971', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('364', 'admin', '1425364521', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('365', 'e8network', '1425439252', '192.168.7.202', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('366', 'e8network', '1425444372', '192.168.7.202', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('367', 'e8network', '1425444553', '192.168.7.202', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('368', 'admin', '1425456941', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('369', 'admin', '1426058089', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('370', 'admin', '1426062573', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('371', 'e8network', '1426119239', '192.168.7.249', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('372', 'e8network', '1426146425', '192.168.7.141', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('373', 'admin', '1426212091', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('374', 'admin', '1426212276', '192.168.53.30', '1', '密码保密', '用户名登陆', '局域网对方和您在同一内部网');
INSERT INTO `dygzz_log` VALUES ('375', 'e8network', '1432726849', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('376', 'e8network', '1432728311', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('377', 'e8network', '1432730296', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('378', 'e8network', '1432783248', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('379', 'e8network', '1432865729', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('380', 'e8network', '1432966538', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('381', 'e8network', '1433035340', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('382', 'e8network', '1433046636', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('383', 'e8network', '1433055559', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('384', 'e8network', '1433061256', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('385', 'e8network', '1433062748', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('386', 'e8network', '1433065277', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('387', 'e8network', '1433072417', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('388', 'e8network', '1433120586', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('389', 'e8network', '1433144149', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('390', 'e8network', '1433148699', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('391', 'e8network', '1433215640', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('392', 'e8network', '1433236339', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('393', 'e8network', '1433242756', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('394', 'e8network', '1433250760', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('395', 'e8network', '1433299054', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('396', 'e8network', '1433305373', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('397', 'e8network', '1433307321', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('398', 'e8network', '1433313875', '183.166.46.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('399', 'admin', '1433314667', '183.166.46.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('400', 'admin', '1433314867', '183.166.46.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('401', 'admin', '1433321755', '183.166.46.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('402', 'e8network', '1433327927', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('403', 'admin', '1433392419', '183.166.46.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('404', 'admin', '1433425397', '183.166.46.42', '1', '密码保密', '用户名登陆', '安徽省淮南市电信');
INSERT INTO `dygzz_log` VALUES ('405', 'e8network', '1433656406', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('406', 'e8network', '1434088419', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('407', 'admin', '1434105211', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('408', 'admin', '1438135271', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('409', 'admin', '1443056496', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('410', 'admin', '1443065782', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('411', 'admin', '1443081790', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('412', 'admin', '1443232814', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('413', 'admin', '1443322971', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('414', 'admin', '1443408299', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('415', 'admin', '1443415265', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('416', 'admin', '1460082534', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('417', 'admin', '1460185454', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('418', 'admin', '1460434286', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('419', 'admin', '1460511599', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('420', 'admin', '1460601183', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('421', 'admin', '1460793236', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('422', 'admin', '1460879030', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('423', 'admin', '1461065908', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('424', 'admin', '1461111212', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('425', 'admin', '1461161108', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('426', 'admin', '1461201915', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('427', 'admin', '1461246670', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('428', 'admin', '1461289342', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('429', 'admin', '1461289377', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('430', 'admin', '1461325107', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('431', 'admin', '1461370662', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('432', 'admin', '1461389637', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('433', 'admin', '1461407756', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('434', 'admin', '1461501281', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('435', 'admin', '1461509000', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('436', 'admin', '1461509064', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('437', 'admin', '1461510382', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('438', 'admin', '1461569731', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('439', 'admin', '1461590124', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('440', 'admin', '1461592511', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('441', 'admin', '1461648285', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('442', 'admin', '1461668770', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('443', 'admin', '1461672590', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('444', 'admin', '1461756053', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('445', 'admin', '1461760974', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('446', 'admin', '1461761876', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('447', 'admin', '1461766223', '127.0.0.1', '1', '密码保密', '用户名登陆', '本机地址');
INSERT INTO `dygzz_log` VALUES ('448', 'admin', '1463571049', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('449', 'admin', '1463572707', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('450', 'admin', '1463572956', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('451', 'admin', '1463625537', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('452', 'admin', '1463906954', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('453', 'admin', '1463910432', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('454', 'admin', '1463999992', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('455', 'admin', '1464074581', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('456', 'admin', '1464178874', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');
INSERT INTO `dygzz_log` VALUES ('457', 'admin', '1464256649', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');

-- ----------------------------
-- Table structure for `dygzz_menu`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_menu`;
CREATE TABLE `dygzz_menu` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '菜单名称',
  `parentid` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级菜单',
  `app` varchar(20) NOT NULL COMMENT '应用表示',
  `controller` varchar(20) NOT NULL COMMENT '控制器',
  `action` varchar(20) NOT NULL COMMENT '方法',
  `parameter` char(255) NOT NULL DEFAULT '' COMMENT '附加参数',
  `url` char(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL COMMENT '0',
  `status` tinyint(1) unsigned NOT NULL COMMENT '是否启用',
  `remark` varchar(255) NOT NULL COMMENT '栏目备注',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '栏目排序',
  `hidden` tinyint(1) DEFAULT '1' COMMENT '是否隐藏',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_menu
-- ----------------------------
INSERT INTO `dygzz_menu` VALUES ('1', '常用操作', '0', 'Admin', 'Index', 'index', 'menu/1', null, '1', '1', '常用操作', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('2', '网站设置', '0', 'Admin', 'Index', 'index', 'menu/2', null, '1', '1', '网站设置', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('3', '内容管理', '0', 'Admin', 'Index', 'index', 'menu/3', null, '1', '1', '内容管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('11', '常用操作', '1', 'Admin', 'Usually', 'index', '', 'Usually/index', '1', '1', '常用操作', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('12', '系统设置', '2', 'Admin', 'None', 'none', '', '#', '1', '1', '系统设置', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('13', '站点配置', '12', 'Admin', 'Config', 'index', '', 'Config/index', '1', '1', '站点配置', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('14', '邮箱配置', '13', 'Admin', 'Config', 'email', '', '', '1', '1', '邮箱配置', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('15', '附件管理', '13', 'Admin', 'Config', 'file', '', null, '1', '1', '附件管理', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('16', '高级配置', '13', 'Admin', 'Config', 'master', '', null, '1', '1', '高级配置', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('17', '扩展配置', '13', 'Admin', 'Config', 'extend', '', null, '1', '1', '扩展配置', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('19', '修改网站扩展配置', '13', 'Admin', 'Config', 'extend_edit', '', null, '1', '1', '修改网站扩展配置', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('20', '删除网站扩展配置', '13', 'Admin', 'Config', 'extend_del', '', null, '1', '1', '删除网站扩展配置', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('21', '管理员设置', '2', 'Admin', 'None', 'none', '', '#', '1', '1', '管理员设置', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('22', '管理员管理', '21', 'Admin', 'User', 'index', '', 'User/index', '1', '1', '管理员管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('23', '管理员添加', '21', 'Admin', 'User', 'add', '', null, '1', '1', '管理员添加', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('24', '管理员编辑', '21', 'Admin', 'User', 'edit', '', null, '1', '1', '管理员编辑', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('25', '管理员删除', '21', 'Admin', 'User', 'del', '', null, '1', '1', '管理员删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('26', '管理员Ajax验证', '21', 'Admin', 'User', 'check', '', null, '1', '1', '管理员Ajax验证', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('27', '角色管理', '21', 'Admin', 'Role', 'index', '', 'Role/index', '1', '1', '角色管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('28', '角色添加', '21', 'Admin', 'Role', 'add', '', null, '1', '1', '角色添加', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('29', '角色编辑', '21', 'Admin', 'Role', 'edit', '', null, '1', '1', '角色编辑', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('30', '角色删除', '21', 'Admin', 'Role', 'del', '', null, '1', '1', '角色删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('31', '角色权限查看', '21', 'Admin', 'Role', 'access', '', null, '1', '1', '角色权限查看', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('32', '角色授权', '21', 'Admin', 'Role', 'accredit', '', null, '1', '1', '角色授权', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('33', '日志管理', '2', 'Admin', 'None', 'none', '', '#', '1', '1', '日志管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('34', '个人中心', '0', 'Admin', 'Person', 'index', '', null, '1', '1', '个人中心', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('35', '修改个人信息', '34', 'Admin', 'Person', 'info', '', 'Person/info', '1', '1', '修改个人信息', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('36', '修改个人密码', '34', 'Admin', 'Person', 'pwd', '', 'Person/pwd', '1', '1', '修改个人密码', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('37', '密码Ajax验证', '34', 'Admin', 'Person', 'checkpwd', '', 'Person/checkpwd', '1', '1', '密码Ajax验证', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('38', '内容管理', '3', 'Admin', 'None', 'none', '', '#', '1', '1', '内容管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('39', '管理内容', '38', 'Admin', 'None', 'none', '', 'javascript:showTree();', '2', '1', '管理内容', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('40', '后台登陆日志管理', '33', 'Admin', 'Log', 'index', '', 'Log/index', '1', '1', '后台登陆日志管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('41', '后台登陆日志删除', '33', 'Admin', 'Log', 'del', '', null, '1', '1', '后台登陆日志删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('42', '后台操作日志管理', '33', 'Admin', 'Operationlog', 'index', '', 'Operationlog/index', '1', '1', '后台操作日志管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('43', '后台操作日志删除', '33', 'Admin', 'Operationlog', 'del', '', null, '1', '1', '后台操作日志删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('44', '友情链接管理', '3', 'Admin', 'None', 'none', '', '#', '1', '1', '友情链接管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('45', '友情链接', '44', 'Admin', 'Link', 'index', '', 'Link/index', '1', '1', '友情链接', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('46', '友情链接添加', '44', 'Admin', 'Link', 'add', '', null, '1', '1', '友情链接添加', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('47', '友情链接修改', '44', 'Admin', 'Link', 'edit', '', null, '1', '1', '友情链接修改', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('48', '友情链接删除', '44', 'Admin', 'Link', 'del', '', null, '1', '1', '友情链接删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('49', '友情链接分类管理', '44', 'Admin', 'Link', 'term', '', null, '1', '1', '友情链接分类管理', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('50', '友情链接分类修改', '44', 'Admin', 'Link', 'termedit', '', null, '1', '1', '友情链接分类修改', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('51', '友情链接分类删除', '44', 'Admin', 'Link', 'termdel', '', null, '1', '1', '友情链接分类删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('52', '友情链接分组添加', '44', 'Admin', 'Link', 'termadd', '', null, '1', '1', '友情链接分组添加', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('53', '内容添加', '56', 'Admin', 'Content', 'add', '', null, '1', '1', '内容添加', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('54', '内容删除', '56', 'Admin', 'Content', 'del', '', null, '1', '1', '内容删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('55', '内容修改', '56', 'Admin', 'Content', 'edit', '', null, '1', '1', '内容修改', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('56', '内容列表', '38', 'Admin', 'Content', 'index', '', null, '1', '1', '内容列表', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('57', '内容审核列表', '56', 'Admin', 'Content', 'check', '', null, '1', '1', '内容审核列表', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('58', '内容审核', '56', 'Admin', 'Content', 'checkout', '', null, '1', '1', '内容审核', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('59', '内容排序', '56', 'Admin', 'Content', 'sort', '', null, '1', '1', '内容排序', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('60', '取消审核', '56', 'Admin', 'Content', 'cancelcheck', '', null, '1', '1', '取消审核', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('61', '内容移至回收站', '56', 'Admin', 'Content', 'remove', '', null, '1', '1', '内容移至回收站', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('62', '内容还原', '56', 'Admin', 'Content', 'renew', '', null, '1', '1', '还原文章', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('63', '标题检测', '56', 'Admin', 'Content', 'test', '', null, '1', '1', '标题检测', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('64', '回收站内容列表', '56', 'Admin', 'Content', 'restore', '', null, '1', '1', '回收站内容列表', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('65', '栏目管理', '38', 'Admin', 'Class', 'index', '', 'Class/index', '1', '1', '栏目管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('66', '栏目排序', '65', 'Admin', 'Class', 'sort', '', null, '1', '1', '栏目排序', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('67', '栏目添加', '65', 'Admin', 'Class', 'add', '', null, '1', '1', '栏目添加', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('69', '栏目修改', '65', 'Admin', 'Class', 'edit', '', null, '1', '1', '栏目修改', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('70', '栏目删除', '65', 'Admin', 'Class', 'del', '', null, '1', '1', '栏目删除', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('71', '添加外部链接', '65', 'Admin', 'Class', 'addlink', '', null, '1', '1', '添加外部链接', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('72', '修改外部链接', '65', 'Admin', 'Class', 'editlink', '', null, '1', '1', '修改外部链接', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('73', '图片管理', '38', 'Admin', 'Picture', 'index', '', 'Picture/index', '1', '1', '图片管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('74', '获取栏目列表', '38', 'Admin', 'Index', 'getclass', '', null, '1', '1', '获取栏目列表', '0', '1');
INSERT INTO `dygzz_menu` VALUES ('76', '留言管理', '38', 'Admin', 'comment', 'index', '', 'Comment/index', '1', '1', '留言管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('78', '寝室管理', '38', 'Admin', 'Domitory', 'index', '', 'Domitory/index', '1', '1', '寝室管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('79', '党员管理', '38', 'Admin', 'Partymember', 'index', '', 'Partymember/index', '1', '1', '党员管理', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('80', '先进人物', '38', 'Admin', 'Advance', 'index', '', 'Advance/index', '1', '1', '先进人物', '0', '0');
INSERT INTO `dygzz_menu` VALUES ('81', '漂浮图片', '38', 'Admin', 'Flowimg', 'index', '', 'Flowimg/index', '1', '1', '漂浮图片', '0', '0');

-- ----------------------------
-- Table structure for `dygzz_model`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_model`;
CREATE TABLE `dygzz_model` (
  `modelid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tablename` varchar(255) DEFAULT NULL,
  `isopen` tinyint(1) DEFAULT '1' COMMENT '是否启用，1：启用',
  PRIMARY KEY (`modelid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_model
-- ----------------------------
INSERT INTO `dygzz_model` VALUES ('1', '文章模型', null, null, '1');

-- ----------------------------
-- Table structure for `dygzz_operationlog`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_operationlog`;
CREATE TABLE `dygzz_operationlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '日志ID',
  `uid` smallint(6) NOT NULL COMMENT '操作帐号ID',
  `time` int(10) NOT NULL COMMENT '操作时间',
  `ip` char(20) NOT NULL DEFAULT '' COMMENT 'IP',
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '状态,2错误提示，1为正确提示',
  `info` text NOT NULL COMMENT '其他说明',
  `get` varchar(255) NOT NULL COMMENT 'get数据',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `username` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=334 DEFAULT CHARSET=utf8 COMMENT='后台操作日志表';

-- ----------------------------
-- Records of dygzz_operationlog
-- ----------------------------
INSERT INTO `dygzz_operationlog` VALUES ('240', '1', '1418953970', '192.168.7.212', '1', '提示语：修改管理用户成功! <br />模块：Admin,控制器：User,方法：edit <br />请求方式：AJAX', '/jxx/admin.php/User/edit');
INSERT INTO `dygzz_operationlog` VALUES ('241', '1', '1418954020', '192.168.7.212', '1', '提示语：添加管理用户成功! <br />模块：Admin,控制器：User,方法：add <br />请求方式：AJAX', '/jxx/admin.php/User/add');
INSERT INTO `dygzz_operationlog` VALUES ('242', '1', '1418954034', '192.168.7.212', '1', '提示语：删除角色成功 <br />模块：Admin,控制器：Role,方法：del <br />请求方式：GET', '/jxx/admin.php/Role/del/id/17/mw/UGNfMg==');
INSERT INTO `dygzz_operationlog` VALUES ('243', '1', '1418954085', '192.168.7.212', '1', '提示语：授权成功 :) <br />模块：Admin,控制器：Role,方法：accredit <br />请求方式：AJAX', '/jxx/admin.php/Role/accredit/id/11/mw/VmVbMA==/data/1,11,2,14,15,16,17,19,20,21,23,24,25,26,27,28,29,30,31,32,33,40,41,42,43,3,38,39,56,53,54,55,57,58,59,60,61,62,63,64,65,66,67,69,70,71,72,73,74,75,76,77,44,45,46,47,48,49,50,51,52,34,35,36,37');
INSERT INTO `dygzz_operationlog` VALUES ('244', '1', '1418954100', '192.168.7.212', '1', '提示语：修改管理用户成功! <br />模块：Admin,控制器：User,方法：edit <br />请求方式：AJAX', '/jxx/admin.php/User/edit');
INSERT INTO `dygzz_operationlog` VALUES ('245', '1', '1418954231', '192.168.7.212', '1', '提示语：修改管理用户成功! <br />模块：Admin,控制器：User,方法：edit <br />请求方式：AJAX', '/jxx/admin.php/User/edit');
INSERT INTO `dygzz_operationlog` VALUES ('246', '1', '1418954398', '192.168.7.212', '1', '提示语：修改个人密码成功! <br />模块：Admin,控制器：Person,方法：pwd <br />请求方式：POST', '/jxx/admin.php/Person/pwd');
INSERT INTO `dygzz_operationlog` VALUES ('247', '1', '1418971214', '192.168.7.14', '1', '提示语：添加扩展配置成功! <br />模块：Admin,控制器：Config,方法：extend <br />请求方式：POST', '/jxx/admin.php/Config/extend');
INSERT INTO `dygzz_operationlog` VALUES ('248', '1', '1418971960', '192.168.7.14', '1', '提示语：修改扩展配置成功! <br />模块：Admin,控制器：Config,方法：extend_edit <br />请求方式：POST', '/jxx/admin.php/Config/extend_edit');
INSERT INTO `dygzz_operationlog` VALUES ('249', '1', '1418972037', '192.168.7.14', '1', '提示语：添加链接分类成功! <br />模块：Admin,控制器：Link,方法：termadd <br />请求方式：POST', '/jxx/admin.php/Link/termadd');
INSERT INTO `dygzz_operationlog` VALUES ('250', '1', '1418972168', '192.168.7.14', '1', '提示语：添加链接成功! <br />模块：Admin,控制器：Link,方法：add <br />请求方式：POST', '/jxx/admin.php/Link/add');
INSERT INTO `dygzz_operationlog` VALUES ('251', '1', '1418972601', '192.168.7.14', '1', '提示语：删除扩展配置成功! <br />模块：Admin,控制器：Config,方法：extend_del <br />请求方式：GET', '/jxx/admin.php/Config/extend_del/id/64');
INSERT INTO `dygzz_operationlog` VALUES ('252', '1', '1418972770', '192.168.7.14', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/jxx/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('253', '2', '1425439468', '192.168.7.202', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/jxx/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('254', '2', '1425446300', '192.168.7.202', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/jxx/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('255', '2', '1425446355', '192.168.7.202', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/jxx/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('256', '2', '1426119518', '192.168.7.249', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/jxx/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('257', '2', '1426119874', '192.168.7.249', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/jxx/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('258', '2', '1426146707', '192.168.7.141', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/jxx/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('259', '2', '1432966678', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Teacher,方法：Del <br />请求方式：GET', '/mks/admin.php/Teacher/Del/id/5,6,7');
INSERT INTO `dygzz_operationlog` VALUES ('260', '2', '1432966736', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teacher,方法：Del <br />请求方式：GET', '/mks/admin.php/Teacher/Del/id/1,3');
INSERT INTO `dygzz_operationlog` VALUES ('261', '2', '1433064875', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teacher,方法：Del <br />请求方式：GET', '/mks/admin.php/Teacher/Del/id/9,10,11,13');
INSERT INTO `dygzz_operationlog` VALUES ('262', '2', '1433238660', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teacher,方法：Del <br />请求方式：GET', '/mkszyllx/admin.php/Teacher/Del/id/4,8,12,14,15,16,17');
INSERT INTO `dygzz_operationlog` VALUES ('263', '2', '1433299080', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teacher,方法：Del <br />请求方式：GET', '/mkszyllx/admin.php/Teacher/Del/id/20,21,22,23,24');
INSERT INTO `dygzz_operationlog` VALUES ('264', '2', '1433305678', '127.0.0.1', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/mkszyllx/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('265', '2', '1433308035', '127.0.0.1', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/mkszyllx/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('266', '2', '1433308241', '127.0.0.1', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/mkszyllx/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('267', '2', '1433311388', '127.0.0.1', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/mkszyllx/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('268', '2', '1433311720', '127.0.0.1', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/mkszyllx/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('269', '2', '1433314037', '183.166.46.42', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/mkszyllx/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('270', '2', '1433656782', '127.0.0.1', '1', '提示语：修改邮箱配置成功! <br />模块：Admin,控制器：Config,方法：email <br />请求方式：POST', '/mkszyllx/admin.php/Config/email');
INSERT INTO `dygzz_operationlog` VALUES ('271', '1', '1443065798', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teacher,方法：Del <br />请求方式：GET', '/jxx/admin.php/Teacher/Del/id/29,33,34');
INSERT INTO `dygzz_operationlog` VALUES ('272', '1', '1460191030', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teacher,方法：del <br />请求方式：GET', '/jsjkxyjs/admin.php/Teacher/del/id/1');
INSERT INTO `dygzz_operationlog` VALUES ('273', '1', '1460207571', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teacher,方法：Del <br />请求方式：GET', '/jsjkxyjs/admin.php/Teacher/Del/id/15,16');
INSERT INTO `dygzz_operationlog` VALUES ('274', '1', '1460207713', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teach,方法：dels <br />请求方式：GET', '/jsjkxyjs/admin.php/Teach/dels/id/12');
INSERT INTO `dygzz_operationlog` VALUES ('275', '1', '1460207786', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Teach,方法：dels <br />请求方式：GET', '/jsjkxyjs/admin.php/Teach/dels/id/10');
INSERT INTO `dygzz_operationlog` VALUES ('276', '1', '1460789225', '127.0.0.1', '1', '提示语：删除寝室成功! <br />模块：Admin,控制器：Domitory,方法：del <br />请求方式：GET', '/dygzz/admin.php/Domitory/del/id/10');
INSERT INTO `dygzz_operationlog` VALUES ('277', '1', '1460789232', '127.0.0.1', '1', '提示语：删除寝室成功! <br />模块：Admin,控制器：Domitory,方法：Del <br />请求方式：GET', '/dygzz/admin.php/domitory/Del/id/8,9');
INSERT INTO `dygzz_operationlog` VALUES ('278', '1', '1460882516', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Partymember,方法：dels <br />请求方式：GET', '/dygzz/admin.php/Partymember/dels/id/11');
INSERT INTO `dygzz_operationlog` VALUES ('279', '1', '1460966093', '127.0.0.1', '1', '提示语：添加链接分类成功! <br />模块：Admin,控制器：Link,方法：termadd <br />请求方式：POST', '/dygzz/admin.php/Link/termadd');
INSERT INTO `dygzz_operationlog` VALUES ('280', '1', '1460966142', '127.0.0.1', '1', '提示语：添加链接分类成功! <br />模块：Admin,控制器：Link,方法：termadd <br />请求方式：POST', '/dygzz/admin.php/Link/termadd');
INSERT INTO `dygzz_operationlog` VALUES ('281', '1', '1460966154', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Link,方法：del <br />请求方式：GET', '/dygzz/admin.php/Link/del/id/21');
INSERT INTO `dygzz_operationlog` VALUES ('282', '1', '1460966168', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Link,方法：Del <br />请求方式：GET', '/dygzz/admin.php/Link/Del/id/30,31');
INSERT INTO `dygzz_operationlog` VALUES ('283', '1', '1460966200', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Link,方法：Del <br />请求方式：GET', '/dygzz/admin.php/Link/Del/id/22,23,24,25,26,27,28,29,32,33');
INSERT INTO `dygzz_operationlog` VALUES ('284', '1', '1460966207', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Link,方法：Del <br />请求方式：GET', '/dygzz/admin.php/Link/Del/id/34,35,36,37,38,39,40,41,42,43');
INSERT INTO `dygzz_operationlog` VALUES ('285', '1', '1460966219', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Link,方法：del <br />请求方式：GET', '/dygzz/admin.php/Link/del/id/44');
INSERT INTO `dygzz_operationlog` VALUES ('286', '1', '1460966243', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('287', '1', '1460966257', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('288', '1', '1460966272', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('289', '1', '1460966282', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('290', '1', '1460966296', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('291', '1', '1460966332', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('292', '1', '1460966349', '127.0.0.1', '1', '提示语：删除链接分类成功! <br />模块：Admin,控制器：Link,方法：termdel <br />请求方式：GET', '/dygzz/admin.php/Link/termdel/id/30');
INSERT INTO `dygzz_operationlog` VALUES ('293', '1', '1460966354', '127.0.0.1', '1', '提示语：删除链接分类成功! <br />模块：Admin,控制器：Link,方法：termdel <br />请求方式：GET', '/dygzz/admin.php/Link/termdel/id/35');
INSERT INTO `dygzz_operationlog` VALUES ('294', '1', '1460966371', '127.0.0.1', '1', '提示语：修改链接分类成功! <br />模块：Admin,控制器：Link,方法：termEdit <br />请求方式：POST', '/dygzz/admin.php/Link/termEdit');
INSERT INTO `dygzz_operationlog` VALUES ('295', '1', '1461122486', '127.0.0.1', '1', '提示语：删除链接分类成功! <br />模块：Admin,控制器：Link,方法：termdel <br />请求方式：GET', '/dygzz/admin.php/Link/termdel/id/38');
INSERT INTO `dygzz_operationlog` VALUES ('296', '1', '1461309713', '127.0.0.1', '1', '提示语：删除留言成功! <br />模块：Admin,控制器：Comment,方法：del <br />请求方式：GET', '/dygzz/admin.php/Comment/del/id/1');
INSERT INTO `dygzz_operationlog` VALUES ('297', '1', '1461309780', '127.0.0.1', '1', '提示语：删除留言成功! <br />模块：Admin,控制器：Comment,方法：del <br />请求方式：GET', '/dygzz/admin.php/Comment/del/id/1');
INSERT INTO `dygzz_operationlog` VALUES ('298', '1', '1461324878', '127.0.0.1', '1', '提示语：删除留言成功! <br />模块：Admin,控制器：Comment,方法：del <br />请求方式：GET', '/dygzz/admin.php/Comment/del/id/1');
INSERT INTO `dygzz_operationlog` VALUES ('299', '1', '1461325842', '127.0.0.1', '1', '提示语：删除留言成功! <br />模块：Admin,控制器：Comment,方法：del <br />请求方式：GET', '/dygzz/admin.php/Comment/del/id/3');
INSERT INTO `dygzz_operationlog` VALUES ('300', '1', '1461327164', '127.0.0.1', '1', '提示语：删除留言成功! <br />模块：Admin,控制器：Comment,方法：dels <br />请求方式：GET', '/dygzz/admin.php/Comment/dels/id/4,5');
INSERT INTO `dygzz_operationlog` VALUES ('301', '1', '1461371632', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('302', '1', '1461371676', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('303', '1', '1461371723', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('304', '1', '1461371783', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('305', '1', '1461371829', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('306', '1', '1461371860', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('307', '1', '1461371930', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('308', '1', '1461372064', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('309', '1', '1461372197', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('310', '1', '1461372249', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('311', '1', '1461372278', '127.0.0.1', '1', '提示语：修改链接成功! <br />模块：Admin,控制器：Link,方法：edit <br />请求方式：POST', '/dygzz/admin.php/Link/edit');
INSERT INTO `dygzz_operationlog` VALUES ('312', '1', '1461372340', '127.0.0.1', '1', '提示语：添加链接成功! <br />模块：Admin,控制器：Link,方法：add <br />请求方式：POST', '/dygzz/admin.php/Link/add');
INSERT INTO `dygzz_operationlog` VALUES ('313', '1', '1461372410', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Link,方法：del <br />请求方式：GET', '/dygzz/admin.php/Link/del/id/55');
INSERT INTO `dygzz_operationlog` VALUES ('314', '1', '1461372421', '127.0.0.1', '1', '提示语：删除链接成功! <br />模块：Admin,控制器：Link,方法：del <br />请求方式：GET', '/dygzz/admin.php/Link/del/id/56');
INSERT INTO `dygzz_operationlog` VALUES ('315', '1', '1461410397', '127.0.0.1', '1', '提示语：删除教师成功! <br />模块：Admin,控制器：Advance,方法：dels <br />请求方式：GET', '/dygzz/admin.php/Advance/dels/id/3,4');
INSERT INTO `dygzz_operationlog` VALUES ('316', '1', '1461426665', '127.0.0.1', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('317', '1', '1461427758', '127.0.0.1', '1', '提示语：删除留言成功! <br />模块：Admin,控制器：Comment,方法：del <br />请求方式：GET', '/dygzz/admin.php/Comment/del/id/35');
INSERT INTO `dygzz_operationlog` VALUES ('318', '1', '1461427829', '127.0.0.1', '1', '提示语：删除寝室成功! <br />模块：Admin,控制器：Domitory,方法：del <br />请求方式：GET', '/dygzz/admin.php/Domitory/del/id/2');
INSERT INTO `dygzz_operationlog` VALUES ('319', '1', '1461427835', '127.0.0.1', '1', '提示语：删除寝室成功! <br />模块：Admin,控制器：Domitory,方法：Del <br />请求方式：GET', '/dygzz/admin.php/domitory/Del/id/11,12');
INSERT INTO `dygzz_operationlog` VALUES ('320', '1', '1461427846', '127.0.0.1', '1', '提示语：删除寝室成功! <br />模块：Admin,控制器：Domitory,方法：Del <br />请求方式：GET', '/dygzz/admin.php/domitory/Del/id/7,13');
INSERT INTO `dygzz_operationlog` VALUES ('321', '1', '1461587974', '127.0.0.1', '1', '提示语：删除寝室成功! <br />模块：Admin,控制器：Domitory,方法：Del <br />请求方式：GET', '/dygzz/admin.php/domitory/Del/id/5,6');
INSERT INTO `dygzz_operationlog` VALUES ('322', '1', '1464083146', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('323', '1', '1464083257', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('324', '1', '1464083443', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('325', '1', '1464083496', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('326', '1', '1464083570', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('327', '1', '1464083584', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('328', '1', '1464091013', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('329', '1', '1464091374', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('330', '1', '1464091390', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('331', '1', '1464092420', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('332', '1', '1464092525', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');
INSERT INTO `dygzz_operationlog` VALUES ('333', '1', '1464093578', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/dygzz/admin.php/Config/index');

-- ----------------------------
-- Table structure for `dygzz_picture`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_picture`;
CREATE TABLE `dygzz_picture` (
  `id` smallint(8) unsigned NOT NULL AUTO_INCREMENT,
  `termid` smallint(8) NOT NULL,
  `name` char(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `open` tinyint(1) DEFAULT '0' COMMENT '0：点击显示大图，1：外部链接，2：图片介绍页面',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `remark` varchar(1024) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `content` longtext,
  `views` int(11) DEFAULT '0' COMMENT '浏览次数',
  `author` varchar(50) DEFAULT NULL COMMENT '作者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_picture
-- ----------------------------
INSERT INTO `dygzz_picture` VALUES ('10', '40', '男人讲话', 'image/2016-05-22/thumb_5741a7cfed2fa.gif', '1', '1', '', '1464002924', '', '0', '');
INSERT INTO `dygzz_picture` VALUES ('11', '40', '阿斯蒂芬', 'image/2016-05-22/thumb_5741a88eb30f1.jpg', '1', '1', '是大法官撒地方根深蒂固手大热是', '1463920782', '', '0', '阿斯顿法国');
INSERT INTO `dygzz_picture` VALUES ('16', '39', '联系我们', 'image/2016-05-23/thumb_5742eaeb094ed.jpg', '2', '0', '', '1464003345', '', '0', '');
INSERT INTO `dygzz_picture` VALUES ('17', '40', '3', 'image/2016-05-24/thumb_57444f8c7277c.jpg', '1', '1', '', '1464094604', '', '0', '');
INSERT INTO `dygzz_picture` VALUES ('18', '40', '4', 'image/2016-05-24/thumb_57444f97541a2.jpg', '1', '1', '', '1464094615', '', '0', '4');

-- ----------------------------
-- Table structure for `dygzz_role`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_role`;
CREATE TABLE `dygzz_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '角色名称',
  `parentid` smallint(6) NOT NULL COMMENT '父角色ID',
  `status` tinyint(1) unsigned NOT NULL COMMENT '状态',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `create_time` int(11) unsigned NOT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL COMMENT '更新时间',
  `listorder` int(3) NOT NULL DEFAULT '0' COMMENT '排序字段',
  PRIMARY KEY (`id`),
  KEY `parentId` (`parentid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='角色信息列表';

-- ----------------------------
-- Records of dygzz_role
-- ----------------------------
INSERT INTO `dygzz_role` VALUES ('1', '超级管理员', '0', '1', '拥有网站最高管理员权限！', '1329633709', '1329633709', '0');
INSERT INTO `dygzz_role` VALUES ('11', '文章发布员', '1', '1', '文章发布员', '1409668026', '0', '0');

-- ----------------------------
-- Table structure for `dygzz_send`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_send`;
CREATE TABLE `dygzz_send` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sendtime` int(11) DEFAULT NULL COMMENT '发送时间',
  `username` varchar(255) DEFAULT NULL COMMENT '账号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_send
-- ----------------------------

-- ----------------------------
-- Table structure for `dygzz_session`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_session`;
CREATE TABLE `dygzz_session` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `ip` char(64) NOT NULL,
  `name` char(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_session
-- ----------------------------
INSERT INTO `dygzz_session` VALUES ('2', '127.0.0.1', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('3', '183.166.46.42', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('4', '101.226.89.191', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('5', '120.210.172.26', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('6', '60.171.15.62', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('7', '120.210.172.91', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('8', '120.210.172.39', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('9', '183.166.60.185', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('10', '117.69.58.189', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('11', '211.70.176.10', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('12', '192.168.7.214', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('13', '192.168.7.16', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('14', '192.168.7.12', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('15', '223.104.18.125', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('16', '192.168.7.14', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('17', '192.168.7.249', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('18', '192.168.7.156', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('19', '192.168.7.189', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('20', '192.168.7.251', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('21', '192.168.7.201', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('22', '192.168.7.56', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('23', '183.166.60.42', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('24', '120.210.100.188', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('25', '192.168.7.212', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('26', '192.168.53.30', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('27', '117.69.22.30', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('28', '120.210.183.253', '3c9285983984122f3203cd57a43da02c');
INSERT INTO `dygzz_session` VALUES ('29', '192.168.7.202', '66aa2a4d09a3b203d18202319ff4c112');
INSERT INTO `dygzz_session` VALUES ('30', '192.168.7.141', '66aa2a4d09a3b203d18202319ff4c112');
INSERT INTO `dygzz_session` VALUES ('31', '0.0.0.0', '3c9285983984122f3203cd57a43da02c');

-- ----------------------------
-- Table structure for `dygzz_student`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_student`;
CREATE TABLE `dygzz_student` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL COMMENT '班级id',
  `name` varchar(255) DEFAULT NULL COMMENT '学生姓名',
  `stuid` varchar(255) DEFAULT NULL COMMENT '学号',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态（0：正式党员，1：预备党员，2：入党积极分子）',
  `photo` varchar(255) DEFAULT NULL COMMENT '照片',
  `telephone` varchar(255) DEFAULT NULL COMMENT '电话',
  `applytime` varchar(255) DEFAULT NULL COMMENT '入党时间',
  `introduction` longtext COMMENT '个人简介',
  `place` varchar(255) DEFAULT NULL COMMENT '籍贯',
  `action` varchar(255) DEFAULT NULL COMMENT '党站活动参与情况',
  `domitory` varchar(50) DEFAULT NULL COMMENT '宿舍',
  `formaltime` varchar(50) DEFAULT NULL COMMENT '转正时间',
  `isextro` int(1) DEFAULT '0' COMMENT '是不是否是优秀党员（1-是，0-）',
  `prize` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_student
-- ----------------------------
INSERT INTO `dygzz_student` VALUES ('1', '1', '王巧珍', '1308020134', '1', 'image/2016-04-25/571e0c55e22c3.jpg', '18130157271', '0', '2014-2015年度励志奖学金获得者', '安徽六安', null, '10A515', '0', '1', '计算机程序设计大赛二等奖');
INSERT INTO `dygzz_student` VALUES ('3', '1', '王蕾', '1308020133', '0', 'image/2016-04-25/571e0e26e602d.jpg', '15255460335', '0', '2014-2015年度励志奖学金获得者', '山东滨州', null, '10A515', '0', '1', '手抄报比赛三等奖');
INSERT INTO `dygzz_student` VALUES ('4', '1', '许迟', '1308020138', '1', null, '15375156923', '0', '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '安徽蚌埠', null, '10A515', '0', '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('5', '8', '段长春', '1108210105', '0', null, '18055417093', null, '2013-2014年度 参加无手机课堂', '安徽宿州', null, '10/11/14', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('6', '8', '黄玉林', '1108210113', '0', null, '13855405284', '0', '2013-2014年度 参加无手机课堂', '安徽宿州', null, '11B110', '0', '1', '');
INSERT INTO `dygzz_student` VALUES ('7', '8', '刘胜男', '1108210119', '0', null, '18023561458', null, '2013-2014年度 参加无手机课堂', '安徽宿州', null, '11B110', null, '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('8', '8', '潘红影', '1108210124', '0', null, '15023581456', null, '2013-2014年度 参加无手机课堂', '安徽亳州', null, '11B109', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('9', '8', '汪城', '1108210129', '0', null, '13195477062', null, '2013-2014年度 参加无手机课堂', '安徽安庆', null, '11B107', null, '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('10', '8', '周发武', '1108210147', '0', null, '18255417912', null, '2013-2014年度 参加无手机课堂', '安徽亳州', null, '9B335', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('11', '8', '朱梅', '1108210149', '0', null, '18255440399', null, '奖学金获得者', '安徽宿州', null, '11B110', null, '0', '2013-2014年度 参加无手机课堂');
INSERT INTO `dygzz_student` VALUES ('12', '8', '朱玉龙', '1108210150', '0', null, '18255418083', null, '2013-2014年度 参加无手机课堂', '安徽宿州', null, '9B334', null, '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('13', '9', '查刘霞', '1208010103', '0', null, '18119503713', '0', '2013-2014年度 参加无手机课堂', '安徽安庆', null, '11B122', '0', '0', '');
INSERT INTO `dygzz_student` VALUES ('14', '9', '邵亚洲', '1208010128', '0', null, '18365208005', null, '2013-2014年度 参加无手机课堂', '安徽宿州', null, '9B601', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('15', '9', '孙向来', '1208010129', '0', null, '15955486596', null, '2013-2014年度 参加无手机课堂 \r\n 组织委员', '安徽滁州', null, '9B603', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('16', '9', '叶玲玲', '1208010140', '0', null, '18119501293', null, '2014—2015年第二学期参加参加万人诵活动', '安徽安庆', null, '11B121', null, '0', '励志奖学金、国家奖学金获得者，参加过程序设计大\r\n\r\n赛');
INSERT INTO `dygzz_student` VALUES ('17', '10', '万方琪', '1208010230', '0', null, '13675543885', '0', '2014-2015年度第二学期   \r\n\r\n“八个一”活动', '宁夏', null, '11B125', '0', '0', '校三等奖学金');
INSERT INTO `dygzz_student` VALUES ('18', '10', '王睿', '1208010232', '0', null, '15395475563', null, '2014—2015第二学期  参加“八个一”活动', '安徽安庆', null, '11B125', null, '0', '校一等奖学金');
INSERT INTO `dygzz_student` VALUES ('19', '10', '王文谊', '1208010233', '0', null, '18098675217', null, '2013-2014年度 参加无手机课堂', '安徽铜陵', null, '11B124', null, '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('20', '10', '郭瑞', '1208010234', '0', null, '15595413546', null, '2014-2015年度 参加无手机课堂', '安徽亳州', null, '9B607', null, '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('21', '10', '张晓依', '1208010245', '0', null, '18098679052', null, '2013-2014年度 参加无手机课堂', '安徽宿州', null, '11B124', null, '1', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('22', '11', '姜倩倩', '1208020113', '0', null, '15265421248', '0', '2014-2015年度 参加无手机课堂\r\n团支部书记', '安徽阜阳', null, '11B332', '0', '1', '');
INSERT INTO `dygzz_student` VALUES ('23', '11', '胡政峰', '1208020114', '0', null, '18010111757', null, '2013-2014年度 参加无手机课堂', '安徽黄山', null, '9B626', null, '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('24', '13', '纪如', '1208020115', '0', null, '15190062774', '0', '2014-2015年度  参加万人诵活动', '山东滨州', null, '11B122', '0', '0', '励志奖学金获得者，参加过程序设计大赛');
INSERT INTO `dygzz_student` VALUES ('25', '13', '张雪晴', '1208020144', '0', null, '15665647219', null, '2013-2014年度 参加无手机课堂\r\n团支部书记、组织委员', '安徽六安', null, '11B333', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('26', '12', '曹卫光', '1208020202', '0', null, '13625545606', null, '2013-2014年度 参加无手机课堂\r\n班长', '安徽淮北', null, '9B630', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('27', '12', '廖慧', '1208020219', '0', null, '18365201402', null, '2014—2015年第二学期  参加万人诵读活动和“八个一”活动', '安徽六安', null, '11B304', null, '0', '励志奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('28', '12', '王双', '1208020232', '0', null, '15255419071', null, '2014—2015年第二学期参加万人诵读活动和“八个一”系列活动', '安徽安庆', null, '11B304', null, '0', '励志奖学金获得者，参加过程序设计大赛');
INSERT INTO `dygzz_student` VALUES ('29', '11', '吴静', '1208020236', '0', null, '15755428712', null, '2014—2015年第二学期参加“八个一”系列活动', '安徽黄山', null, '11B304', null, '0', '励志奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('30', '14', '方明霞', '1208210111', '0', null, '13695612520', '0', '2013-2014年度 参加无手机课堂\r\n生活委员', '安徽安庆', null, '11B334', '0', '0', '');
INSERT INTO `dygzz_student` VALUES ('31', '14', '马彩侠', '1208210124', '0', null, '13625625030', '0', '2013-2014年度 参加无手机课堂\r\n团支部书记', '安徽淮北', null, '11B336', '0', '0', '');
INSERT INTO `dygzz_student` VALUES ('32', '14', '唐玉玲', '1208210131', '0', null, '13695544258', null, '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '安徽阜阳', null, '11B303', null, '0', '参加过程序设计大赛，曾是计算机学院学生会副主席');
INSERT INTO `dygzz_student` VALUES ('33', '15', '黄婷婷', '1308010113', '0', null, '18355482860', null, '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '安徽六安', null, '10A511', null, '0', '励志奖学金获得者，参加华东赛区物联网竞赛');
INSERT INTO `dygzz_student` VALUES ('34', '17', '冯冰', '1308020208', '0', null, '18355406343', '0', '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '安徽安庆', null, '9B213', '0', '1', '');
INSERT INTO `dygzz_student` VALUES ('35', '16', '刘佳乐', '1308020216', '0', null, '18355407418', null, ' 党站表现：作为计算机学院党员工作站站委会成员之一，有较强的责任心，工作认真负责，脚踏实地，关心党站事务，严格用党员的标准要求自己，积极向党组织靠拢。13网络工程2班的学习委员', '安徽合肥', null, '9B302', null, '1', '');
INSERT INTO `dygzz_student` VALUES ('36', '18', '邓卉子', '1308210206', '0', null, '13516428878', '0', '2014-2015年度  参加无手机课堂', '安徽淮南', null, '10A530', '0', '1', '');
INSERT INTO `dygzz_student` VALUES ('37', '18', '郑元元', '1308210248', '0', null, '15856685270', '0', '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '安徽黄山', null, '10A535', '0', '0', '');
INSERT INTO `dygzz_student` VALUES ('38', '14', '杨爱红', '', '1', null, '', '0', '', '', null, '', '0', '0', '');
INSERT INTO `dygzz_student` VALUES ('39', '9', '卢丙国', '', '1', null, '', '0', '', '', null, '', '0', '0', '');
INSERT INTO `dygzz_student` VALUES ('40', '9', '刘威', '1208010120', '1', null, '18119503207', '0', '2014—2015年第二学期参加“八个一”系列活动\r\n优秀共青团员', '安徽阜阳', null, '9B604', '0', '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('41', '9', '俞宁燕', '1208010141', '1', null, '18158896643', null, '2014—2015年度第二学期 参加“八个一”活动\r\n奖学金获得者', '安徽合肥', null, '11B122', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('42', '10', '代晓宝', '1208010208', '1', null, '18054003671', null, '2014—2015年度第二学期 参加“八个一”系列活动', '安徽宿州', null, '9B608', null, '0', '励志奖学金获得者，二等奖学金获得者，三等奖学金获得者，连续两年优干获得者。');
INSERT INTO `dygzz_student` VALUES ('43', '13', '汪文娟', '1208020129', '1', null, '13516429004', null, '2014-2015年度第二学期   “八个一”活动和“无手机”课堂活动', '安徽安庆', null, '11B333', null, '0', '励志奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('44', '12', '徐小雪', '1208020238', '1', null, '13625543328', null, '2013-2014年度 参加无手机课堂', '安徽合肥', null, '11B332', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('45', '14', '刘以鹏', '1208210122', '1', null, '13625546801', null, '2013-2014年度 参加无手机课堂\r\n参加机器人团队，班长', '安徽宿州', null, '校外住宿', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('46', '15', '丁鑫', '1308010107', '1', null, '18255473284', null, '2014-2015年度  参加万人诵活动', '安徽亳州', null, '10A510', null, '0', '励志奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('47', '15', '王秋方', '1308010134', '1', null, '15856680898', null, '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '浙江绍兴', null, '10A512', null, '0', '奖学金获得者，参加过程序设计大赛');
INSERT INTO `dygzz_student` VALUES ('48', '15', '俞洁', '1308010145', '1', null, '15855441676', null, '2014-2015年度第二学期   参加“无手机”课堂  参加万人诵活动\r\n\r\n', '安徽芜湖', null, '10A511', null, '0', '2015年全国大学生物联网设计竞赛华东赛区二等奖，职业规划大赛创业组铜奖，校级立项奖，互联网加三等奖，励志奖学金获得者，2014新年元旦晚会演出二等奖，畅想杯英文歌曲比赛二等奖，标兵院干，优秀共青团员，运\r\n动会铅球组第八名\r\n');
INSERT INTO `dygzz_student` VALUES ('49', '16', '丁勇杰', '1308020107', '1', null, '18355440908', null, '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动  党站表现：作为计算机学院党员工作站的站长，也是站委会成员之一，尽职尽责，在他的领导下，党员工作站成员团结一心，真正做到服务同学。党站站长', '安徽合肥', null, '9B201', null, '0', '奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('50', '16', '祁莲娜', '1308020123', '1', null, '13345544761', null, '2014-2015年度第二学期   参加“无手机”课堂  参加万人诵活动\r\n宣传委员、学生处助理\r\n', '安徽宿州', null, '10A514', null, '0', '励志奖学金获得者');
INSERT INTO `dygzz_student` VALUES ('51', '17', '程烨', '1308020205', '1', null, '18098680410', null, '2014-2015年度第二学期   参加“无手机”课\r\n\r\n堂  参加万人诵活动', '安徽宣城', null, '10A516', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('52', '12', '汪琼', '1308020230', '1', null, '15055416990', null, '2014-2015年度第二学期   参加“无手机”课\r\n\r\n堂  参加万人诵活动', '安徽安庆', null, '10A517', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('53', '17', '赵瑶', '1308020244', '1', null, '18130149631', null, '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '安徽宿州', null, '10A517', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('54', '6', '鲍超', '1308210101', '1', null, '18855474036', null, '2014-2015年度第二学期   参加“无手机”课堂  参加万人诵活动', '安徽黄山', null, '9B423', null, '0', '励志奖学金获得者，中国计算机设计大赛一等奖，互联网+省铜奖等各种比赛并获奖');
INSERT INTO `dygzz_student` VALUES ('55', '6', '杨晨', '1308210140', '1', null, '15856685321', null, '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动', '安徽省宿州市泗县', null, '10A529', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('56', '18', '方琦', '1308210209', '1', null, '18355461072', null, '2014-2015年度第二学期  挑战杯大赛', '皖宣城', null, '10A534', null, '0', '校一等奖学金，三等奖学金获得者，获得各种证书，例如信息技术处理员等等');
INSERT INTO `dygzz_student` VALUES ('57', '18', '杨剀利', '1308210240', '1', null, '18355484596', null, '2014-2015年度  参观万人坑', '宿州市', null, '10A534', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('58', '19', '陈晚露', '1408010106', '1', null, '13645549534', '0', '2014-2015年度第二学期  “无手机”课堂和参加万人诵活动  2015-2016年度  10月份党站值班表现优异', '安徽芜湖', null, '10A232', '0', '0', '程序设计大赛');
INSERT INTO `dygzz_student` VALUES ('59', '19', '叶青青', '1408010139', '1', null, '15805548161', null, '2014-2015年度第二学期  参观万人坑活动，参加万人诵活动，参加党站“我心中的红太阳”演讲比赛   2015-2016年度  9月份党站值班表现优异', '浙江宁波', null, '10A213', null, '0', '程序设计大赛优秀奖');
INSERT INTO `dygzz_student` VALUES ('60', '21', '林育超', '1408020117', '1', null, '15805543850', '0', '2014-2015年度第二学期  参加“无手机”课堂活动 和万人诵活动', '安徽芜湖', null, '7A426', '0', '0', '二等奖学金获得者，三好学生');
INSERT INTO `dygzz_student` VALUES ('61', '21', '施华婷', '1408020125', '1', null, '18255452123', '0', '2014-2015年度 参加万人颂，参加元旦晚会，参加院系以及学校的挑战主持人大赛，在党站表现优异', '安徽六安', null, '10A101', '0', '0', '一等奖学金 ，参加多项活动获得奖项');
INSERT INTO `dygzz_student` VALUES ('62', '26', '崔永明', '1408040204', '1', null, '15755410686', null, '2014-2015年度  参加万人颂活动，在党站表现较差', '安徽滁州', null, '7A408', null, '0', '');
INSERT INTO `dygzz_student` VALUES ('63', '25', '王姗', '1408040129', '1', null, '15156622223', null, '2014-2015年度 参加万人诵活动         党站表现：优异   2015-2016年度  9月份党站值班表现优异', '安徽淮北', null, '10A201', null, '0', '班级二等奖学金，三好学生，优秀学生干部');
INSERT INTO `dygzz_student` VALUES ('64', '26', '冯程程', '1408040207', '1', null, '15955488609', null, '2014-2015年度  参加万人颂活动，社团文化艺术节，社团展演，讲座，广播操比赛', '安徽滁州', null, '10A203', null, '0', '二等奖学金获得者，团支书，社联学干');
INSERT INTO `dygzz_student` VALUES ('65', '23', '陶维强', '1408210130', '1', null, '15955490367', '0', '2014-2015年度  参加万人诵活动，在党站表现优异   2015-2016年度  9、11月份党站值班表现优异', '安徽省阜阳市', null, '9B336', '0', '0', '励志奖学金获得者，优秀团员，人是最美的风景校征文优秀奖，和平的醒狮校，学生资助诚信征文系二等奖，养成教育我的责任系一等奖，青春杯辩论赛二等奖，知识冲浪大赛系三等奖，优秀班干，大学生学业互动平台系统设计获校级科研立项，优秀共青团员\r\n');
INSERT INTO `dygzz_student` VALUES ('66', '23', '王晶', '1408210133', '1', null, '13645549092', null, '2014-2015年度 参加万人诵活动   2015-2016年度  9、10月份党站值班表现优异', '安徽省滁州市', null, '11A123', null, '0', '知识冲浪大赛系三等奖，大学生学业互动平台系统设计获校级科研立项');
INSERT INTO `dygzz_student` VALUES ('67', '24', '张妮', '1408210247', '1', null, '13085543182', null, '我叫张妮，爱笑，喜欢交朋友，待人真诚。不以物喜，不以己悲是我的座右铭。我会再接再厉，做更好的自己。\r\n2014-2015年度  参加万人诵活动', '安徽淮北', null, '11B133', null, '1', '');
INSERT INTO `dygzz_student` VALUES ('68', '3', '汪正亮', '1308010132', '0', null, '15357996915', null, '2014-2015年度第二学期   参加万人诵读活动，“八个一”活动 党站表现：作为计算机学院党员工作站站委会成员之一，有较强的责任心，工作认真负责，脚踏实地，关心党站事务，严格用党员的标准要求自己，有较高的思想觉悟。', '安徽安庆', null, '9A119', null, '1', '励志奖学金获得者，机器人团队，RobCup中国公开赛一等奖');

-- ----------------------------
-- Table structure for `dygzz_student_copy`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_student_copy`;
CREATE TABLE `dygzz_student_copy` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL COMMENT '班级id',
  `name` varchar(255) DEFAULT NULL COMMENT '学生姓名',
  `stuid` varchar(255) DEFAULT NULL COMMENT '学号',
  `sex` varchar(5) DEFAULT NULL COMMENT '性别',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态（0：正式党员，1：预备党员，2：入党积极分子）',
  `photo` varchar(255) DEFAULT NULL COMMENT '照片',
  `telephone` varchar(255) DEFAULT NULL COMMENT '电话',
  `applytime` varchar(255) DEFAULT NULL COMMENT '入党时间',
  `classtime` varchar(255) DEFAULT NULL COMMENT '上党课时间',
  `period` varchar(50) DEFAULT NULL COMMENT '党课培训期数',
  `parentid` varchar(255) DEFAULT NULL COMMENT '被联系人（党员）的id',
  `content` longtext COMMENT '个人简介',
  `place` varchar(255) DEFAULT NULL COMMENT '籍贯',
  `action` varchar(255) DEFAULT NULL COMMENT '党站活动参与情况',
  `domitory` varchar(50) DEFAULT NULL COMMENT '宿舍',
  `formaltime` varchar(50) DEFAULT NULL COMMENT '转正时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_student_copy
-- ----------------------------

-- ----------------------------
-- Table structure for `dygzz_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_teacher`;
CREATE TABLE `dygzz_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sex` int(2) DEFAULT '0' COMMENT '1---男  0-女',
  `position` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `introduction` mediumtext,
  `views` int(5) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_teacher
-- ----------------------------
INSERT INTO `dygzz_teacher` VALUES ('2', 'et', '0', 'er', 'image/2016-04-12/570ca3134d645.jpg', '<p>rt</p>', '0');

-- ----------------------------
-- Table structure for `dygzz_template`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_template`;
CREATE TABLE `dygzz_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0' COMMENT '0:封面模板，1：内容模板',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_template
-- ----------------------------
INSERT INTO `dygzz_template` VALUES ('1', '通用简介内容模板', 'index.php/List/content/class', '0');
INSERT INTO `dygzz_template` VALUES ('2', '通用文章内容模板', 'index.php/Show/content/id', '1');
INSERT INTO `dygzz_template` VALUES ('3', '通用文章列表模板', 'index.php/List/article/class', '0');
INSERT INTO `dygzz_template` VALUES ('8', '宿舍列表内容模板', 'index.php/List/domitory/class', '0');
INSERT INTO `dygzz_template` VALUES ('9', '教师详细信息模板', 'index.php/Show/teacher/id', '1');
INSERT INTO `dygzz_template` VALUES ('10', '教师列表内容模板', 'index.php/List/teacher/class', '0');

-- ----------------------------
-- Table structure for `dygzz_term`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_term`;
CREATE TABLE `dygzz_term` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `parentid` smallint(5) NOT NULL COMMENT '父ID',
  `name` varchar(200) NOT NULL DEFAULT '' COMMENT '分类名称',
  `module` varchar(200) NOT NULL DEFAULT '' COMMENT '所属模块',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `module` (`module`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of dygzz_term
-- ----------------------------
INSERT INTO `dygzz_term` VALUES ('40', '0', '轮播图', 'Picture');
INSERT INTO `dygzz_term` VALUES ('31', '0', '院系链接', 'Link');
INSERT INTO `dygzz_term` VALUES ('32', '0', '公共课链接', 'Link');
INSERT INTO `dygzz_term` VALUES ('33', '0', '学习链接', 'Link');
INSERT INTO `dygzz_term` VALUES ('37', '0', '比赛链接', 'Link');
INSERT INTO `dygzz_term` VALUES ('39', '0', '新闻', 'Picture');

-- ----------------------------
-- Table structure for `dygzz_user`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_user`;
CREATE TABLE `dygzz_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL COMMENT '用户名',
  `nickname` varchar(50) NOT NULL COMMENT '昵称/姓名',
  `password` char(32) NOT NULL COMMENT '密码',
  `bind_account` varchar(50) NOT NULL COMMENT '绑定帐户',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上次登录时间',
  `last_login_ip` varchar(40) NOT NULL COMMENT '上次登录IP',
  `verify` varchar(32) NOT NULL COMMENT '证验码',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `create_time` int(11) unsigned NOT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL COMMENT '更新时间',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `role_id` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '对应角色ID',
  `info` text NOT NULL COMMENT '信息',
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

-- ----------------------------
-- Records of dygzz_user
-- ----------------------------
INSERT INTO `dygzz_user` VALUES ('1', 'admin', '超级管理员', '81dc9bdb52d04dc20036dbd8313ed055', '', '1464256649', '0.0.0.0', 'BmFZ3p', 'admin@abc3210.com', '', '1408778905', '1418953970', '1', '1', '', 'photo/2014-12-16/54900d897dd25.jpg');
INSERT INTO `dygzz_user` VALUES ('2', 'e8network', '超级管理员', '81dc9bdb52d04dc20036dbd8313ed055', '', '1434088419', '127.0.0.1', '', '', '', '0', '0', '1', '1', '', 'photo/default.jpg');

-- ----------------------------
-- Table structure for `dygzz_visit`
-- ----------------------------
DROP TABLE IF EXISTS `dygzz_visit`;
CREATE TABLE `dygzz_visit` (
  `vid` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0' COMMENT '今日访问次数',
  `y` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=7237 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dygzz_visit
-- ----------------------------
INSERT INTO `dygzz_visit` VALUES ('7216', '127.0.0.1', '1460082422', '1', '16', '4', '8');
INSERT INTO `dygzz_visit` VALUES ('7217', '127.0.0.1', '1460184033', '1', '16', '4', '9');
INSERT INTO `dygzz_visit` VALUES ('7218', '127.0.0.1', '1460434346', '1', '16', '4', '12');
INSERT INTO `dygzz_visit` VALUES ('7219', '127.0.0.1', '1460791696', '2', '16', '4', '16');
INSERT INTO `dygzz_visit` VALUES ('7220', '127.0.0.1', '1461065847', '2', '16', '4', '19');
INSERT INTO `dygzz_visit` VALUES ('7221', '127.0.0.1', '1461111222', '5', '16', '4', '20');
INSERT INTO `dygzz_visit` VALUES ('7222', '127.0.0.1', '1461201926', '3', '16', '4', '21');
INSERT INTO `dygzz_visit` VALUES ('7223', '127.0.0.1', '1461289390', '2', '16', '4', '22');
INSERT INTO `dygzz_visit` VALUES ('7224', '127.0.0.1', '1461370634', '3', '16', '4', '23');
INSERT INTO `dygzz_visit` VALUES ('7225', '127.0.0.1', '1461501235', '2', '16', '4', '24');
INSERT INTO `dygzz_visit` VALUES ('7226', '127.0.0.1', '1461548321', '14', '16', '4', '25');
INSERT INTO `dygzz_visit` VALUES ('7227', '127.0.0.1', '1461648136', '5', '16', '4', '26');
INSERT INTO `dygzz_visit` VALUES ('7228', '127.0.0.1', '1461755273', '5', '16', '4', '27');
INSERT INTO `dygzz_visit` VALUES ('7229', '0.0.0.0', '1463478218', '1', '16', '5', '17');
INSERT INTO `dygzz_visit` VALUES ('7230', '0.0.0.0', '1463571013', '3', '16', '5', '18');
INSERT INTO `dygzz_visit` VALUES ('7231', '0.0.0.0', '1463625365', '1', '16', '5', '19');
INSERT INTO `dygzz_visit` VALUES ('7232', '0.0.0.0', '1463905205', '4', '16', '5', '22');
INSERT INTO `dygzz_visit` VALUES ('7233', '0.0.0.0', '1463999186', '1', '16', '5', '23');
INSERT INTO `dygzz_visit` VALUES ('7234', '0.0.0.0', '1464074429', '4', '16', '5', '24');
INSERT INTO `dygzz_visit` VALUES ('7235', '0.0.0.0', '1464141628', '3', '16', '5', '25');
INSERT INTO `dygzz_visit` VALUES ('7236', '0.0.0.0', '1464251569', '1', '16', '5', '26');
