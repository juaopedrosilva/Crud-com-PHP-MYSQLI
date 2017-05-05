/*
MySQL Data Transfer
Source Host: localhost
Source Database: mydb
Target Host: localhost
Target Database: mydb
Date: 2011/6/3 13:59:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `cadastroclientes` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(50) default NULL,
  `sobrenome` varchar(50) default NULL,
  `telefone` varchar(200) default NULL,
  `email` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `cadastroclientes` VALUES ('1', 'Alexandre', 'Silva', '(21)99999-9999', 'ale@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('2', 'Alberto', 'Almeida', '(11)99898-9877', 'alberto@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('3', 'Ana', 'Henriques', '(31)97788-0990', 'ana@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('4', 'Amanda', 'Maior', '(11)2452-3625', 'amanda@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('5', 'Armando', 'Silva', '(21)4251-3321', 'armando@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('7', 'Bruno', 'Prado', '(11)5482-0445', 'bruno@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('8', 'Bahia', 'Lima', '(61)4155-5588', 'bahia@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('9', 'Bernardo', 'Silva', '(71)2123-4122', 'bernardo@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('10', 'Cássia', 'Couto', '(71)4477-5522', 'cassia@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('11', 'Rodrigo', 'Andrade', '(81)2456-1452', 'rodrigo@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('12', 'Lurdes', 'Silva', '(41)2546-0338', 'lurdes@gmail.com');
INSERT INTO `cadastroclientes` VALUES ('13', 'Zenite', 'Coelho', '(41)4251-1222', 'zenite@gmail.com');
