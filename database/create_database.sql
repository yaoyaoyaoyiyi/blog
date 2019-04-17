DROP database if EXISTS `db_blog`;
CREATE database `db_blog` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
use `db_blog`;

CREATE TABLE `t_admin` (
  `f_id` bigint(16) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `f_username` varchar(128) NOT NULL COMMENT 'username',
  `f_password` varchar(128) NOT NULL COMMENT 'password',
  `f_status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '1 valid, 2 invalid',
  `f_create_time` timestamp NOT NULL DEFAULT '2019-01-01 00:00:00' COMMENT 'create time',
  `f_update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'update time',
  PRIMARY KEY (`f_id`),
  UNIQUE KEY `uk_name` (`f_username`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='admin table';

INSERT `t_admin` (`f_username`, `f_password`) VALUES ('username', 'pwd');