-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_flexSlider`
-- 
CREATE TABLE `tl_flexSlider` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `published` char(1) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `alias` varchar(128) NOT NULL default '',
  `slideshowSpeed` int(10) unsigned NOT NULL default '0',
  `animationSpeed` int(10) unsigned NOT NULL default '0',
  `animation` varchar(64) NOT NULL default '',
  `direction` varchar(64) NOT NULL default '',
  `css_theme` varchar(64) NOT NULL default '',
  `cssSRC` binary(16) NULL,
  `jqeasing` varchar(64) NOT NULL default '',
  `controlNav` char(1) NOT NULL default '',
  `directionNav` char(1) NOT NULL default '',
  `randomize` char(1) NOT NULL default '',
  `pauseOnHover` char(1) NOT NULL default '',
  `imgLinks` char(1) NOT NULL default '',
  `imgDesc` char(1) NOT NULL default '',
  `carousel` char(1) NOT NULL default '',
  `itemWidth` int(10) unsigned NOT NULL default '0',
  `itemMargin` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table `tl_flexPictures`
--
CREATE TABLE `tl_flexPictures` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `published` char(1) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `alt` varchar(255) NOT NULL default '',
  `singleSRC` binary(16) NULL,
  `linkTarget` varchar(255) NOT NULL default '',
  `fullsize` char(1) NOT NULL default '',
  `description` text NULL,
  `fadeDesc` char(1) NOT NULL default '',
  `cssID` varchar(255) NOT NULL default '',
  `start` varchar(10) NOT NULL default '',
  `stop` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table `tl_module`
--

CREATE TABLE `tl_module` (
  `select_flexSlider` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Table `tl_content`
--

CREATE TABLE `tl_content` (
  `select_flexSlider` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;