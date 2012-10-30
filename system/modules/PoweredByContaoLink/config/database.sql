-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `phrase` int(10) unsigned NOT NULL default '0',
  `target` char(1) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `phrase` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;