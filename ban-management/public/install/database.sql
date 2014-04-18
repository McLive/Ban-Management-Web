CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `UUID` varchar(35) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `verify_code` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL COMMENT 'sha1',
  `password_temp` varchar(40),
  `security_level` int(1) NOT NULL,
  `account_status` int(1),
  `created_at` datetime NOT NULL,
  `updated_at` datetime,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `servers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  `sql_connection` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `sql_connections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `database` varchar(99) NOT NULL,
  `bans_table` varchar(128) NOT NULL DEFAULT 'bm_bans',
  `bans_record_table` varchar(128) NOT NULL DEFAULT 'bm_ban_records',
  `ip_bans_table` varchar(128) NOT NULL DEFAULT 'bm_ip_bans',
  `ip_record_table` varchar(128) NOT NULL DEFAULT 'bm_ip_records',
  `mutes_table` varchar(128) NOT NULL DEFAULT 'bm_mutes',
  `mutes_record_table` varchar(128) NOT NULL DEFAULT 'bm_mutes_records',
  `kicks_table` varchar(128) NOT NULL DEFAULT 'bm_kicks',
  `warnings_table` varchar(128) NOT NULL DEFAULT 'bm_warnings',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;