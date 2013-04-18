-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the Contao    *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


--
-- Table `tl_iso_config`
--

CREATE TABLE `tl_iso_config` (
  `iso_mail_newsletter_subscription` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------


-- 
-- Table `tl_member`
-- 

CREATE TABLE `tl_member` (
  `iso_newsletter_subscription` int(10) unsigned NULL default NULL,
  `iso_newsletter_subscription_confirmed` int(10) unsigned NULL default NULL,
  `iso_newsletter_subscription_hash` varchar(40) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;