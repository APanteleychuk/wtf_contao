--
-- Table `tl_services_category`
--

CREATE TABLE `tl_services_category` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `title` varchar(64) NOT NULL default '',
  `description` text NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table `tl_services_sub_category`
--
#
# CREATE TABLE `tl_services_sub_category` (
#   `id` int(10) unsigned NOT NULL auto_increment,
#   `tstamp` int(10) unsigned NOT NULL default '0',
#   `title` varchar(64) NOT NULL default '',
#   `description` text NULL,
#   PRIMARY KEY  (`id`),
#   KEY `pid` (`pid`)
# ) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table `tl_services`
--

CREATE TABLE `tl_services` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `title` varchar(64) NOT NULL default '',
  `image` varchar(64) NOT NULL default '',
  `comment` text NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;