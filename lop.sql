/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : lop

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2017-10-14 22:25:00
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `uname` varchar(50) DEFAULT NULL,
  `pword` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('admin', 'admin', 'Adrian Ty', 'November 1, 1997', 'Male');
