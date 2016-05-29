/*
Navicat MySQL Data Transfer

Source Server         : E8
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : wcdz

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-05-29 15:46:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wcdz_access
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_access`;
CREATE TABLE `wcdz_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `app` varchar(20) NOT NULL COMMENT '模块',
  `controller` varchar(20) NOT NULL COMMENT '控制器',
  `action` varchar(20) NOT NULL COMMENT '方法',
  `status` tinyint(4) DEFAULT '0' COMMENT '是否有效',
  `menu_id` smallint(6) NOT NULL,
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- ----------------------------
-- Records of wcdz_access
-- ----------------------------
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'Role', 'accredit', '1', '32');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'Role', 'access', '1', '31');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'Role', 'del', '1', '30');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'Role', 'edit', '1', '29');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'Role', 'add', '1', '28');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'Role', 'index', '1', '27');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'User', 'check', '1', '26');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'User', 'del', '1', '25');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'User', 'edit', '1', '24');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'User', 'add', '1', '23');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'User', 'index', '1', '22');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'None', 'none', '1', '21');
INSERT INTO `wcdz_access` VALUES ('18', 'Admin', 'Index', 'index', '1', '2');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'renew', '1', '62');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'remove', '1', '61');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'cancelcheck', '1', '60');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'sort', '1', '59');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'checkout', '1', '58');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'check', '1', '57');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'edit', '1', '55');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'del', '1', '54');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'add', '1', '53');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'index', '1', '56');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '39');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '38');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Index', 'index', '1', '3');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Operationlog', 'del', '1', '43');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Operationlog', 'index', '1', '42');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Log', 'del', '1', '41');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Log', 'index', '1', '40');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '33');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Role', 'accredit', '1', '32');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Role', 'access', '1', '31');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Role', 'del', '1', '30');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Role', 'edit', '1', '29');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Role', 'add', '1', '28');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Role', 'index', '1', '27');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'User', 'check', '1', '26');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'User', 'del', '1', '25');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'User', 'edit', '1', '24');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'User', 'add', '1', '23');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '21');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Config', 'extend_del', '1', '20');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Config', 'extend_edit', '1', '19');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Config', 'extend', '1', '17');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Config', 'master', '1', '16');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Config', 'file', '1', '15');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Config', 'email', '1', '14');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Index', 'index', '1', '2');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Usually', 'index', '1', '11');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Index', 'index', '1', '1');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'Index', 'index', '1', '2');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'None', 'none', '1', '21');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'User', 'index', '1', '22');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'User', 'add', '1', '23');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'User', 'edit', '1', '24');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'User', 'del', '1', '25');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'User', 'check', '1', '26');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'Role', 'index', '1', '27');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'Role', 'add', '1', '28');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'Role', 'edit', '1', '29');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'Role', 'del', '1', '30');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'Role', 'access', '1', '31');
INSERT INTO `wcdz_access` VALUES ('17', 'Admin', 'Role', 'accredit', '1', '32');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'test', '1', '63');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Content', 'restore', '1', '64');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Class', 'index', '1', '65');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Class', 'sort', '1', '66');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Class', 'add', '1', '67');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Class', 'edit', '1', '69');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Class', 'del', '1', '70');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Class', 'addlink', '1', '71');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Class', 'editlink', '1', '72');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Picture', 'index', '1', '73');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Index', 'getclass', '1', '74');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Teacher', 'index', '1', '75');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Keyan', 'index', '1', '76');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Zhuanti', 'index', '1', '77');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'None', 'none', '1', '44');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'index', '1', '45');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'add', '1', '46');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'edit', '1', '47');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'del', '1', '48');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'term', '1', '49');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'termedit', '1', '50');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'termdel', '1', '51');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Link', 'termadd', '1', '52');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Person', 'index', '1', '34');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Person', 'info', '1', '35');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Person', 'pwd', '1', '36');
INSERT INTO `wcdz_access` VALUES ('11', 'Admin', 'Person', 'checkpwd', '1', '37');

-- ----------------------------
-- Table structure for wcdz_admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_admin_menu`;
CREATE TABLE `wcdz_admin_menu` (
  `mid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) NOT NULL,
  `name` char(32) NOT NULL,
  `url` char(255) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_admin_menu
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_advance
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_advance`;
CREATE TABLE `wcdz_advance` (
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
-- Records of wcdz_advance
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_class
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_class`;
CREATE TABLE `wcdz_class` (
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
-- Records of wcdz_class
-- ----------------------------
INSERT INTO `wcdz_class` VALUES ('1', '1', '1', '0', '0', '1', '2,3,4', '党站简介', null, '', null, '0', '0', '1', '1', '2', '1', '', '', '', '<p>cs CDX XC XC CXe8网络工作室</p>');
INSERT INTO `wcdz_class` VALUES ('2', '0', '1', '1', '0,1', '0', null, '工作站简介', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('3', '0', '1', '1', '0,1', '0', null, '现任站委会', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('4', '0', '1', '1', '0,1', '0', null, '历届站委会', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('6', '1', '1', '0', '0', '1', '7,8,9', '主题实践', null, '', null, '0', '0', '1', '1', '2', '3', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('7', '1', '1', '6', '0,6', '0', null, '两学一做', null, '', null, '0', '0', '1', '0', '2', '3', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('9', '1', '1', '6', '0,6', '0', null, '党课培训', null, '', null, '0', '0', '1', '0', '2', '3', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('10', '1', '1', '0', '0', '0', null, '公寓风采', null, '', null, '0', '0', '1', '1', '9', '8', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('11', '1', '1', '0', '0', '1', '12,13,14', '示范园地', null, '', null, '0', '0', '1', '1', '2', '10', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('12', '0', '1', '11', '0,11', '0', null, '优秀党员', null, '', null, '0', '0', '1', '0', '9', '10', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('13', '0', '1', '11', '0,11', '0', null, '先进人物', null, '', null, '0', '0', '1', '0', '2', '10', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('15', '1', '1', '0', '0', '1', '16,17,18', '党员信息', null, '', null, '0', '0', '1', '1', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('16', '0', '1', '15', '0,15', '0', null, '基层组织信息', null, 'asd', null, '0', '0', '1', '0', '2', '1', '', '', '', 'we');
INSERT INTO `wcdz_class` VALUES ('17', '0', '1', '15', '0,15', '0', null, '党员基本信息', null, 'adsf', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('18', '0', '1', '15', '0,15', '0', null, '党员联系同学', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('19', '1', '1', '0', '0', '1', '23,24', '服务交流', null, '', null, '0', '0', '1', '1', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('23', '0', '1', '19', '0,19', '0', null, '值班安排', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('24', '0', '1', '19', '0,19', '0', null, '联系我们', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('27', '1', '1', '0', '0', '0', null, '通知', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');
INSERT INTO `wcdz_class` VALUES ('28', '1', '1', '0', '0', '0', null, '新闻', null, '', null, '0', '0', '1', '0', '2', '1', '', '', '', '');

-- ----------------------------
-- Table structure for wcdz_classname
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_classname`;
CREATE TABLE `wcdz_classname` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_classname
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_class_perm
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_class_perm`;
CREATE TABLE `wcdz_class_perm` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classid` int(11) DEFAULT NULL,
  `roleid` int(11) DEFAULT '0' COMMENT '角色或是组id',
  `action` varchar(255) DEFAULT NULL COMMENT '动作',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_class_perm
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_comment
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_comment`;
CREATE TABLE `wcdz_comment` (
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_comment
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_config
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_config`;
CREATE TABLE `wcdz_config` (
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
-- Records of wcdz_config
-- ----------------------------
INSERT INTO `wcdz_config` VALUES ('1', 'sitename', '网站名称', '0', '文化创意与传播学院党员工作站', '');
INSERT INTO `wcdz_config` VALUES ('2', 'siteurl', '网站网址', '0', 'http://www.e8net.cn/mkszyllx', '');
INSERT INTO `wcdz_config` VALUES ('3', 'sitefileurl', '附件地址', '0', '', '');
INSERT INTO `wcdz_config` VALUES ('4', 'siteemail', '站点邮箱', '0', '', '');
INSERT INTO `wcdz_config` VALUES ('6', 'siteinfo', '网站介绍', '0', '淮南师范学院文化创意与传播学院党员工作站', '');
INSERT INTO `wcdz_config` VALUES ('7', 'sitekeywords', '网站关键字', '0', '淮南师范学院文化创意与传播学院党员工作站', '');
INSERT INTO `wcdz_config` VALUES ('8', 'uploadmaxsize', '允许上传附件大小', '0', '20240', '');
INSERT INTO `wcdz_config` VALUES ('9', 'uploadallowext', '允许上传附件类型', '0', '|jpeg|gif|bmp|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|rar|zip|swf', '');
INSERT INTO `wcdz_config` VALUES ('10', 'qtuploadmaxsize', '前台允许上传附件大小', '0', '200', '');
INSERT INTO `wcdz_config` VALUES ('11', 'qtuploadallowext', '前台允许上传附件类型', '0', 'jpg|jpeg|gif', '');
INSERT INTO `wcdz_config` VALUES ('12', 'watermarkenable', '是否开启图片水印', '0', '1', '');
INSERT INTO `wcdz_config` VALUES ('13', 'watermarkminwidth', '印-宽', '0', '300', '');
INSERT INTO `wcdz_config` VALUES ('14', 'watermarkminheight', '水印-高', '0', '100', '');
INSERT INTO `wcdz_config` VALUES ('15', 'watermarkimg', '水印图片', '0', '/statics/images/mark_bai.png', '');
INSERT INTO `wcdz_config` VALUES ('16', 'watermarkpct', '水印透明度', '0', '80', '');
INSERT INTO `wcdz_config` VALUES ('17', 'watermarkquality', 'JPEG 水印质量', '0', '85', '');
INSERT INTO `wcdz_config` VALUES ('18', 'watermarkpos', '水印位置', '0', '7', '');
INSERT INTO `wcdz_config` VALUES ('19', 'theme', '主题风格', '0', 'Default', '');
INSERT INTO `wcdz_config` VALUES ('20', 'ftpstatus', 'FTP上传', '0', '0', '');
INSERT INTO `wcdz_config` VALUES ('21', 'ftpuser', 'FTP用户名', '0', '', '');
INSERT INTO `wcdz_config` VALUES ('22', 'ftppassword', 'FTP密码', '0', '1', '');
INSERT INTO `wcdz_config` VALUES ('23', 'ftphost', 'FTP服务器地址', '0', '1', '');
INSERT INTO `wcdz_config` VALUES ('24', 'ftpport', 'FTP服务器端口', '0', '21', '');
INSERT INTO `wcdz_config` VALUES ('25', 'ftppasv', 'FTP是否开启被动模式', '0', '1', '');
INSERT INTO `wcdz_config` VALUES ('26', 'ftpssl', 'FTP是否使用SSL连接', '0', '0', '');
INSERT INTO `wcdz_config` VALUES ('27', 'ftptimeout', 'FTP超时时间', '0', '10', '');
INSERT INTO `wcdz_config` VALUES ('28', 'ftpuppat', 'FTP上传目录', '0', '/', '');
INSERT INTO `wcdz_config` VALUES ('29', 'mail_type', '邮件发送模式', '0', '1', '');
INSERT INTO `wcdz_config` VALUES ('30', 'mail_server', '邮件服务器', '0', 'smtp.126.com', '');
INSERT INTO `wcdz_config` VALUES ('31', 'mail_port', '邮件发送端口', '0', '25', '');
INSERT INTO `wcdz_config` VALUES ('32', 'mail_from', '发件人地址', '0', 'web_bc@126.com', '');
INSERT INTO `wcdz_config` VALUES ('33', 'mail_auth', '密码验证', '0', '', '');
INSERT INTO `wcdz_config` VALUES ('34', 'mail_user', '邮箱用户名', '0', 'E8网络工作室', '');
INSERT INTO `wcdz_config` VALUES ('35', 'mail_password', '邮箱密码', '0', 'baochao000', '');
INSERT INTO `wcdz_config` VALUES ('36', 'mail_fname', '发件人名称', '0', 'web_bc@126.com', '');
INSERT INTO `wcdz_config` VALUES ('37', 'domainaccess', '指定域名访问', '0', '0', '');
INSERT INTO `wcdz_config` VALUES ('38', 'generate', '是否生成首页', '0', '0', '');
INSERT INTO `wcdz_config` VALUES ('39', 'index_urlruleid', '首页URL规则', '0', '静态1:index_2.html', '');
INSERT INTO `wcdz_config` VALUES ('40', 'indextp', '首页模板', '0', 'index.php', '');
INSERT INTO `wcdz_config` VALUES ('41', 'tagurl', 'TagURL规则', '0', '8', '');
INSERT INTO `wcdz_config` VALUES ('61', 'adminurl', '后台url', '1', 'http://211.70.176.141/jxx/admin.php/', 'bool');
INSERT INTO `wcdz_config` VALUES ('66', 'sitevideo', '视频链接', '0', '', '');

-- ----------------------------
-- Table structure for wcdz_content
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_content`;
CREATE TABLE `wcdz_content` (
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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_content
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_content_data
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_content_data`;
CREATE TABLE `wcdz_content_data` (
  `id` int(11) unsigned NOT NULL,
  `content` mediumtext,
  `relateid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_content_data
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_domitory
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_domitory`;
CREATE TABLE `wcdz_domitory` (
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
-- Records of wcdz_domitory
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_flowimg
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_flowimg`;
CREATE TABLE `wcdz_flowimg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `open` int(1) unsigned DEFAULT '1' COMMENT '1 新页面打开    0 本页面打开',
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_flowimg
-- ----------------------------
INSERT INTO `wcdz_flowimg` VALUES ('1', '', '', '', '1', '');

-- ----------------------------
-- Table structure for wcdz_link
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_link`;
CREATE TABLE `wcdz_link` (
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
-- Records of wcdz_link
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_log
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_log`;
CREATE TABLE `wcdz_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '日志ID',
  `username` char(30) NOT NULL COMMENT '登录帐号',
  `logintime` int(10) NOT NULL COMMENT '登录时间戳',
  `loginip` char(20) NOT NULL COMMENT '登录IP',
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '状态,1为登录成功，2为登录失败',
  `password` char(30) NOT NULL DEFAULT '' COMMENT '尝试错误密码',
  `info` char(255) NOT NULL COMMENT '其他说明',
  `area` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=461 DEFAULT CHARSET=utf8 COMMENT='后台登陆日志表';

-- ----------------------------
-- Records of wcdz_log
-- ----------------------------
INSERT INTO `wcdz_log` VALUES ('460', 'admin', '1464507723', '0.0.0.0', '1', '密码保密', '用户名登陆', 'IANA保留地址');

-- ----------------------------
-- Table structure for wcdz_menu
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_menu`;
CREATE TABLE `wcdz_menu` (
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
-- Records of wcdz_menu
-- ----------------------------
INSERT INTO `wcdz_menu` VALUES ('1', '常用操作', '0', 'Admin', 'Index', 'index', 'menu/1', null, '1', '1', '常用操作', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('2', '网站设置', '0', 'Admin', 'Index', 'index', 'menu/2', null, '1', '1', '网站设置', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('3', '内容管理', '0', 'Admin', 'Index', 'index', 'menu/3', null, '1', '1', '内容管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('11', '常用操作', '1', 'Admin', 'Usually', 'index', '', 'Usually/index', '1', '1', '常用操作', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('12', '系统设置', '2', 'Admin', 'None', 'none', '', '#', '1', '1', '系统设置', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('13', '站点配置', '12', 'Admin', 'Config', 'index', '', 'Config/index', '1', '1', '站点配置', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('14', '邮箱配置', '13', 'Admin', 'Config', 'email', '', '', '1', '1', '邮箱配置', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('15', '附件管理', '13', 'Admin', 'Config', 'file', '', null, '1', '1', '附件管理', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('16', '高级配置', '13', 'Admin', 'Config', 'master', '', null, '1', '1', '高级配置', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('17', '扩展配置', '13', 'Admin', 'Config', 'extend', '', null, '1', '1', '扩展配置', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('19', '修改网站扩展配置', '13', 'Admin', 'Config', 'extend_edit', '', null, '1', '1', '修改网站扩展配置', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('20', '删除网站扩展配置', '13', 'Admin', 'Config', 'extend_del', '', null, '1', '1', '删除网站扩展配置', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('21', '管理员设置', '2', 'Admin', 'None', 'none', '', '#', '1', '1', '管理员设置', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('22', '管理员管理', '21', 'Admin', 'User', 'index', '', 'User/index', '1', '1', '管理员管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('23', '管理员添加', '21', 'Admin', 'User', 'add', '', null, '1', '1', '管理员添加', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('24', '管理员编辑', '21', 'Admin', 'User', 'edit', '', null, '1', '1', '管理员编辑', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('25', '管理员删除', '21', 'Admin', 'User', 'del', '', null, '1', '1', '管理员删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('26', '管理员Ajax验证', '21', 'Admin', 'User', 'check', '', null, '1', '1', '管理员Ajax验证', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('27', '角色管理', '21', 'Admin', 'Role', 'index', '', 'Role/index', '1', '1', '角色管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('28', '角色添加', '21', 'Admin', 'Role', 'add', '', null, '1', '1', '角色添加', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('29', '角色编辑', '21', 'Admin', 'Role', 'edit', '', null, '1', '1', '角色编辑', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('30', '角色删除', '21', 'Admin', 'Role', 'del', '', null, '1', '1', '角色删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('31', '角色权限查看', '21', 'Admin', 'Role', 'access', '', null, '1', '1', '角色权限查看', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('32', '角色授权', '21', 'Admin', 'Role', 'accredit', '', null, '1', '1', '角色授权', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('33', '日志管理', '2', 'Admin', 'None', 'none', '', '#', '1', '1', '日志管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('34', '个人中心', '0', 'Admin', 'Person', 'index', '', null, '1', '1', '个人中心', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('35', '修改个人信息', '34', 'Admin', 'Person', 'info', '', 'Person/info', '1', '1', '修改个人信息', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('36', '修改个人密码', '34', 'Admin', 'Person', 'pwd', '', 'Person/pwd', '1', '1', '修改个人密码', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('37', '密码Ajax验证', '34', 'Admin', 'Person', 'checkpwd', '', 'Person/checkpwd', '1', '1', '密码Ajax验证', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('38', '内容管理', '3', 'Admin', 'None', 'none', '', '#', '1', '1', '内容管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('39', '管理内容', '38', 'Admin', 'None', 'none', '', 'javascript:showTree();', '2', '1', '管理内容', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('40', '后台登陆日志管理', '33', 'Admin', 'Log', 'index', '', 'Log/index', '1', '1', '后台登陆日志管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('41', '后台登陆日志删除', '33', 'Admin', 'Log', 'del', '', null, '1', '1', '后台登陆日志删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('42', '后台操作日志管理', '33', 'Admin', 'Operationlog', 'index', '', 'Operationlog/index', '1', '1', '后台操作日志管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('43', '后台操作日志删除', '33', 'Admin', 'Operationlog', 'del', '', null, '1', '1', '后台操作日志删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('44', '友情链接管理', '3', 'Admin', 'None', 'none', '', '#', '1', '1', '友情链接管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('45', '友情链接', '44', 'Admin', 'Link', 'index', '', 'Link/index', '1', '1', '友情链接', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('46', '友情链接添加', '44', 'Admin', 'Link', 'add', '', null, '1', '1', '友情链接添加', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('47', '友情链接修改', '44', 'Admin', 'Link', 'edit', '', null, '1', '1', '友情链接修改', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('48', '友情链接删除', '44', 'Admin', 'Link', 'del', '', null, '1', '1', '友情链接删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('49', '友情链接分类管理', '44', 'Admin', 'Link', 'term', '', null, '1', '1', '友情链接分类管理', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('50', '友情链接分类修改', '44', 'Admin', 'Link', 'termedit', '', null, '1', '1', '友情链接分类修改', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('51', '友情链接分类删除', '44', 'Admin', 'Link', 'termdel', '', null, '1', '1', '友情链接分类删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('52', '友情链接分组添加', '44', 'Admin', 'Link', 'termadd', '', null, '1', '1', '友情链接分组添加', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('53', '内容添加', '56', 'Admin', 'Content', 'add', '', null, '1', '1', '内容添加', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('54', '内容删除', '56', 'Admin', 'Content', 'del', '', null, '1', '1', '内容删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('55', '内容修改', '56', 'Admin', 'Content', 'edit', '', null, '1', '1', '内容修改', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('56', '内容列表', '38', 'Admin', 'Content', 'index', '', null, '1', '1', '内容列表', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('57', '内容审核列表', '56', 'Admin', 'Content', 'check', '', null, '1', '1', '内容审核列表', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('58', '内容审核', '56', 'Admin', 'Content', 'checkout', '', null, '1', '1', '内容审核', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('59', '内容排序', '56', 'Admin', 'Content', 'sort', '', null, '1', '1', '内容排序', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('60', '取消审核', '56', 'Admin', 'Content', 'cancelcheck', '', null, '1', '1', '取消审核', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('61', '内容移至回收站', '56', 'Admin', 'Content', 'remove', '', null, '1', '1', '内容移至回收站', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('62', '内容还原', '56', 'Admin', 'Content', 'renew', '', null, '1', '1', '还原文章', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('63', '标题检测', '56', 'Admin', 'Content', 'test', '', null, '1', '1', '标题检测', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('64', '回收站内容列表', '56', 'Admin', 'Content', 'restore', '', null, '1', '1', '回收站内容列表', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('65', '栏目管理', '38', 'Admin', 'Class', 'index', '', 'Class/index', '1', '1', '栏目管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('66', '栏目排序', '65', 'Admin', 'Class', 'sort', '', null, '1', '1', '栏目排序', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('67', '栏目添加', '65', 'Admin', 'Class', 'add', '', null, '1', '1', '栏目添加', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('69', '栏目修改', '65', 'Admin', 'Class', 'edit', '', null, '1', '1', '栏目修改', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('70', '栏目删除', '65', 'Admin', 'Class', 'del', '', null, '1', '1', '栏目删除', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('71', '添加外部链接', '65', 'Admin', 'Class', 'addlink', '', null, '1', '1', '添加外部链接', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('72', '修改外部链接', '65', 'Admin', 'Class', 'editlink', '', null, '1', '1', '修改外部链接', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('73', '图片管理', '38', 'Admin', 'Picture', 'index', '', 'Picture/index', '1', '1', '图片管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('74', '获取栏目列表', '38', 'Admin', 'Index', 'getclass', '', null, '1', '1', '获取栏目列表', '0', '1');
INSERT INTO `wcdz_menu` VALUES ('76', '留言管理', '38', 'Admin', 'comment', 'index', '', 'Comment/index', '1', '1', '留言管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('78', '寝室管理', '38', 'Admin', 'Domitory', 'index', '', 'Domitory/index', '1', '1', '寝室管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('79', '党员管理', '38', 'Admin', 'Partymember', 'index', '', 'Partymember/index', '1', '1', '党员管理', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('80', '先进人物', '38', 'Admin', 'Advance', 'index', '', 'Advance/index', '1', '1', '先进人物', '0', '0');
INSERT INTO `wcdz_menu` VALUES ('81', '漂浮图片', '38', 'Admin', 'Flowimg', 'index', '', 'Flowimg/index', '1', '1', '漂浮图片', '0', '0');

-- ----------------------------
-- Table structure for wcdz_model
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_model`;
CREATE TABLE `wcdz_model` (
  `modelid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tablename` varchar(255) DEFAULT NULL,
  `isopen` tinyint(1) DEFAULT '1' COMMENT '是否启用，1：启用',
  PRIMARY KEY (`modelid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_model
-- ----------------------------
INSERT INTO `wcdz_model` VALUES ('1', '文章模型', null, null, '1');

-- ----------------------------
-- Table structure for wcdz_operationlog
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_operationlog`;
CREATE TABLE `wcdz_operationlog` (
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
) ENGINE=MyISAM AUTO_INCREMENT=348 DEFAULT CHARSET=utf8 COMMENT='后台操作日志表';

-- ----------------------------
-- Records of wcdz_operationlog
-- ----------------------------
INSERT INTO `wcdz_operationlog` VALUES ('347', '1', '1464507741', '0.0.0.0', '1', '提示语：修改站点配置成功! <br />模块：Admin,控制器：Config,方法：index <br />请求方式：POST', '/wcdz/admin.php/Config/index');

-- ----------------------------
-- Table structure for wcdz_picture
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_picture`;
CREATE TABLE `wcdz_picture` (
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
-- Records of wcdz_picture
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_role
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_role`;
CREATE TABLE `wcdz_role` (
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
-- Records of wcdz_role
-- ----------------------------
INSERT INTO `wcdz_role` VALUES ('1', '超级管理员', '0', '1', '拥有网站最高管理员权限！', '1329633709', '1329633709', '0');
INSERT INTO `wcdz_role` VALUES ('11', '文章发布员', '1', '1', '文章发布员', '1409668026', '0', '0');

-- ----------------------------
-- Table structure for wcdz_send
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_send`;
CREATE TABLE `wcdz_send` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sendtime` int(11) DEFAULT NULL COMMENT '发送时间',
  `username` varchar(255) DEFAULT NULL COMMENT '账号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_send
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_session
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_session`;
CREATE TABLE `wcdz_session` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `ip` char(64) NOT NULL,
  `name` char(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_session
-- ----------------------------
INSERT INTO `wcdz_session` VALUES ('32', '0.0.0.0', '3c9285983984122f3203cd57a43da02c');

-- ----------------------------
-- Table structure for wcdz_student
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_student`;
CREATE TABLE `wcdz_student` (
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_student
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_student_copy
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_student_copy`;
CREATE TABLE `wcdz_student_copy` (
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
-- Records of wcdz_student_copy
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_teacher
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_teacher`;
CREATE TABLE `wcdz_teacher` (
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
-- Records of wcdz_teacher
-- ----------------------------

-- ----------------------------
-- Table structure for wcdz_template
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_template`;
CREATE TABLE `wcdz_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0' COMMENT '0:封面模板，1：内容模板',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_template
-- ----------------------------
INSERT INTO `wcdz_template` VALUES ('1', '通用简介内容模板', 'index.php/List/content/class', '0');
INSERT INTO `wcdz_template` VALUES ('2', '通用文章内容模板', 'index.php/Show/content/id', '1');
INSERT INTO `wcdz_template` VALUES ('3', '通用文章列表模板', 'index.php/List/article/class', '0');
INSERT INTO `wcdz_template` VALUES ('8', '宿舍列表内容模板', 'index.php/List/domitory/class', '0');
INSERT INTO `wcdz_template` VALUES ('9', '教师详细信息模板', 'index.php/Show/teacher/id', '1');
INSERT INTO `wcdz_template` VALUES ('10', '教师列表内容模板', 'index.php/List/teacher/class', '0');

-- ----------------------------
-- Table structure for wcdz_term
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_term`;
CREATE TABLE `wcdz_term` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `parentid` smallint(5) NOT NULL COMMENT '父ID',
  `name` varchar(200) NOT NULL DEFAULT '' COMMENT '分类名称',
  `module` varchar(200) NOT NULL DEFAULT '' COMMENT '所属模块',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `module` (`module`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of wcdz_term
-- ----------------------------
INSERT INTO `wcdz_term` VALUES ('40', '0', '轮播图', 'Picture');
INSERT INTO `wcdz_term` VALUES ('31', '0', '院系链接', 'Link');
INSERT INTO `wcdz_term` VALUES ('32', '0', '公共课链接', 'Link');
INSERT INTO `wcdz_term` VALUES ('33', '0', '学习链接', 'Link');
INSERT INTO `wcdz_term` VALUES ('37', '0', '比赛链接', 'Link');
INSERT INTO `wcdz_term` VALUES ('39', '0', '新闻', 'Picture');

-- ----------------------------
-- Table structure for wcdz_user
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_user`;
CREATE TABLE `wcdz_user` (
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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

-- ----------------------------
-- Records of wcdz_user
-- ----------------------------
INSERT INTO `wcdz_user` VALUES ('1', 'admin', '超级管理员', '81dc9bdb52d04dc20036dbd8313ed055', '', '1464507723', '0.0.0.0', 'BmFZ3p', 'admin@abc3210.com', '我是超级管理员', '1408778905', '1464433993', '1', '1', '', 'photo/2014-12-16/54900d897dd25.jpg');
INSERT INTO `wcdz_user` VALUES ('2', 'e8network', '超级管理员', '81dc9bdb52d04dc20036dbd8313ed055', '', '1434088419', '127.0.0.1', '', '', '我是文章发布员', '0', '1464434018', '1', '11', '', 'photo/default.jpg');

-- ----------------------------
-- Table structure for wcdz_visit
-- ----------------------------
DROP TABLE IF EXISTS `wcdz_visit`;
CREATE TABLE `wcdz_visit` (
  `vid` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0' COMMENT '今日访问次数',
  `y` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=7241 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wcdz_visit
-- ----------------------------
INSERT INTO `wcdz_visit` VALUES ('7240', '0.0.0.0', '1464507676', '1', '16', '5', '29');
