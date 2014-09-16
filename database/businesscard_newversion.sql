-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2012 at 10:32 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `businesscard_newversion`
--

-- --------------------------------------------------------

--
-- Table structure for table `drt_designs`
--

CREATE TABLE IF NOT EXISTS `drt_designs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(3) NOT NULL,
  `subcat_id` int(3) NOT NULL,
  `subcat_id2` int(10) NOT NULL,
  `clipname` varchar(75) NOT NULL,
  `clipimage` varchar(75) NOT NULL,
  `dst_file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `drt_designs`
--

INSERT INTO `drt_designs` (`id`, `cat_id`, `subcat_id`, `subcat_id2`, `clipname`, `clipimage`, `dst_file`) VALUES
(1, 1, 1, 1, 'Bear1', 'Bear1.gif', ''),
(2, 1, 1, 1, 'Bear2', 'Bear2.gif', ''),
(8, 3, 18, 5, 'test', '12617213684.gif', '1261721368f2.jpg'),
(10, 1, 1, 1, 'dsfsd', '1345881851Eagle3.gif', ''),
(11, 1, 1, 1, 'jkjk', '1345882165index.jpeg', ''),
(12, 1, 1, 1, 'aaa', '1347371529bubble.png', ''),
(13, 1, 3, 6, 'eagle', '13474540661345881851Eagle3.gif', ''),
(14, 3, 18, 4, 'Test', '1348846293download.jpg', '1348846293download.jpg'),
(15, 3, 18, 5, 'Test2', '1348846565images (7).jpg', '1348846565images (7).jpg'),
(16, 2, 15, 3, 'Test', '1349153701falling_in_love_png___by_awaythousands-d3438xd.png', ''),
(17, 2, 15, 3, 'Test', '1349153761heart1.png', ''),
(18, 2, 15, 3, 'Test', '1349153771love.png', ''),
(19, 3, 18, 4, 'Test', '1349153823images (9).jpg', '1349153823images (9).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_autoinvite`
--

CREATE TABLE IF NOT EXISTS `livehelp_autoinvite` (
  `idnum` int(10) NOT NULL AUTO_INCREMENT,
  `isactive` char(1) NOT NULL DEFAULT '',
  `department` int(10) NOT NULL DEFAULT '0',
  `message` text,
  `page` varchar(255) NOT NULL DEFAULT '',
  `visits` int(8) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `typeof` varchar(255) NOT NULL DEFAULT '',
  `seconds` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idnum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `livehelp_autoinvite`
--

INSERT INTO `livehelp_autoinvite` (`idnum`, `isactive`, `department`, `message`, `page`, `visits`, `referer`, `typeof`, `seconds`) VALUES
(1, 'Y', 0, '2', '', 0, '', 'layer', 30);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_channels`
--

CREATE TABLE IF NOT EXISTS `livehelp_channels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `statusof` char(1) NOT NULL DEFAULT '',
  `startdate` bigint(8) NOT NULL DEFAULT '0',
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `livehelp_channels`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_config`
--

CREATE TABLE IF NOT EXISTS `livehelp_config` (
  `version` varchar(10) NOT NULL DEFAULT '2.16.5',
  `site_title` varchar(100) NOT NULL DEFAULT '',
  `use_flush` varchar(10) NOT NULL DEFAULT 'YES',
  `membernum` int(8) NOT NULL DEFAULT '0',
  `offset` int(5) NOT NULL DEFAULT '0',
  `show_typing` char(1) NOT NULL DEFAULT '',
  `webpath` varchar(255) NOT NULL DEFAULT '',
  `s_webpath` varchar(255) NOT NULL DEFAULT '',
  `speaklanguage` varchar(60) NOT NULL DEFAULT 'English',
  `scratch_space` text,
  `admin_refresh` varchar(30) NOT NULL DEFAULT 'auto',
  `maxexe` int(5) DEFAULT '180',
  `refreshrate` int(5) NOT NULL DEFAULT '1',
  `chatmode` varchar(60) NOT NULL DEFAULT 'xmlhttp-flush-refresh',
  `adminsession` char(1) NOT NULL DEFAULT 'Y',
  `ignoreips` text,
  `directoryid` varchar(32) NOT NULL DEFAULT '',
  `tracking` char(1) NOT NULL DEFAULT 'N',
  `colorscheme` varchar(30) NOT NULL DEFAULT 'white',
  `matchip` char(1) NOT NULL DEFAULT 'N',
  `gethostnames` char(1) NOT NULL DEFAULT 'N',
  `maxrecords` int(10) NOT NULL DEFAULT '75000',
  `maxreferers` int(10) NOT NULL DEFAULT '50',
  `maxvisits` int(10) NOT NULL DEFAULT '75',
  `maxmonths` int(10) NOT NULL DEFAULT '12',
  `maxoldhits` int(10) NOT NULL DEFAULT '1',
  `showgames` char(1) NOT NULL DEFAULT 'Y',
  `showsearch` char(1) NOT NULL DEFAULT 'Y',
  `showdirectory` char(1) NOT NULL DEFAULT 'Y',
  `usertracking` char(1) NOT NULL DEFAULT 'N',
  `resetbutton` char(1) NOT NULL DEFAULT 'N',
  `keywordtrack` char(1) NOT NULL DEFAULT 'N',
  `reftracking` char(1) NOT NULL DEFAULT 'N',
  `topkeywords` int(10) NOT NULL DEFAULT '50',
  `everythingelse` text,
  `rememberusers` char(1) NOT NULL DEFAULT 'Y',
  `smtp_host` varchar(255) NOT NULL DEFAULT '',
  `smtp_username` varchar(60) NOT NULL DEFAULT '',
  `smtp_password` varchar(60) NOT NULL DEFAULT '',
  `owner_email` varchar(255) NOT NULL DEFAULT '',
  `topframeheight` int(8) NOT NULL DEFAULT '45',
  `topbackground` varchar(156) NOT NULL DEFAULT 'header_images/customersupport.png',
  `usecookies` char(1) NOT NULL DEFAULT 'Y',
  `smtp_portnum` int(10) NOT NULL DEFAULT '25',
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livehelp_config`
--

INSERT INTO `livehelp_config` (`version`, `site_title`, `use_flush`, `membernum`, `offset`, `show_typing`, `webpath`, `s_webpath`, `speaklanguage`, `scratch_space`, `admin_refresh`, `maxexe`, `refreshrate`, `chatmode`, `adminsession`, `ignoreips`, `directoryid`, `tracking`, `colorscheme`, `matchip`, `gethostnames`, `maxrecords`, `maxreferers`, `maxvisits`, `maxmonths`, `maxoldhits`, `showgames`, `showsearch`, `showdirectory`, `usertracking`, `resetbutton`, `keywordtrack`, `reftracking`, `topkeywords`, `everythingelse`, `rememberusers`, `smtp_host`, `smtp_username`, `smtp_password`, `owner_email`, `topframeheight`, `topbackground`, `usecookies`, `smtp_portnum`) VALUES
('2.16.5', 'Live Help!', 'YES', 0, 0, 'Y', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/livechat/', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/livechat/', 'English', ' Welcome to Print Fast Online Live Help \r\n\r\n All the administrative functions are located to the left of this text. \r\n \r\nYou can use this section to keep notes for yourself and other admins, etc. \r\n \r\nTo change the text that is located in this box just click on the small edit \r\nbutton on the top right corner of this box. \r\n        ', 'auto', 180, 1, 'xmlhttp-flush-refresh', 'Y', '', '', 'N', 'white', 'N', 'N', 75000, 50, 75, 12, 1, 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 50, 'YY', 'Y', '', '', '', 'info@2daybiz.com', 45, 'header_images/customersupport.png', 'Y', 25);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_departments`
--

CREATE TABLE IF NOT EXISTS `livehelp_departments` (
  `recno` int(5) NOT NULL AUTO_INCREMENT,
  `nameof` varchar(30) NOT NULL DEFAULT '',
  `onlineimage` varchar(255) NOT NULL DEFAULT '',
  `offlineimage` varchar(255) NOT NULL DEFAULT '',
  `layerinvite` varchar(255) NOT NULL DEFAULT '',
  `requirename` char(1) NOT NULL DEFAULT '',
  `messageemail` varchar(60) NOT NULL DEFAULT '',
  `leaveamessage` varchar(10) NOT NULL DEFAULT '',
  `opening` text,
  `offline` text,
  `creditline` char(1) NOT NULL DEFAULT 'L',
  `imagemap` text,
  `whilewait` text,
  `timeout` int(5) NOT NULL DEFAULT '150',
  `leavetxt` text,
  `topframeheight` int(10) NOT NULL DEFAULT '75',
  `topbackground` varchar(255) NOT NULL DEFAULT '',
  `botbackground` varchar(255) NOT NULL DEFAULT '',
  `midbackground` varchar(255) NOT NULL DEFAULT '',
  `topbackcolor` varchar(255) NOT NULL DEFAULT '',
  `midbackcolor` varchar(255) NOT NULL DEFAULT '',
  `botbackcolor` varchar(255) NOT NULL DEFAULT '',
  `colorscheme` varchar(255) NOT NULL DEFAULT '',
  `speaklanguage` varchar(60) NOT NULL DEFAULT '',
  `busymess` text,
  `emailfun` char(1) NOT NULL DEFAULT 'Y',
  `dbfun` char(1) NOT NULL DEFAULT 'Y',
  `everythingelse` text,
  `ordering` int(8) NOT NULL DEFAULT '0',
  `smiles` char(1) NOT NULL DEFAULT 'Y',
  `visible` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`recno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `livehelp_departments`
--

INSERT INTO `livehelp_departments` (`recno`, `nameof`, `onlineimage`, `offlineimage`, `layerinvite`, `requirename`, `messageemail`, `leaveamessage`, `opening`, `offline`, `creditline`, `imagemap`, `whilewait`, `timeout`, `leavetxt`, `topframeheight`, `topbackground`, `botbackground`, `midbackground`, `topbackcolor`, `midbackcolor`, `botbackcolor`, `colorscheme`, `speaklanguage`, `busymess`, `emailfun`, `dbfun`, `everythingelse`, `ordering`, `smiles`, `visible`) VALUES
(1, 'default', 'onoff_images/online3.jpg', 'onoff_images/offline3.jpg', 'dhtmlimage.gif', 'Y', 'sprabu@i-netsolution.com', 'YES', '<blockquote>Welcome to our Live Help. Please enter your name in the input box below to begin.</blockquote>', '<blockquote>Sorry no operators are currently online to provide Live support at this time.</blockquote>', 'N', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,400,197><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,157,213,257><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=237,157,400,257></MAP>', 'Please be patient while an operator is contacted... ', 150, '<h3><SPAN CLASS=wh>LEAVE A MESSAGE:</SPAN></h3>Please type in your comments/questions in the below box <br> and provide an e-mail address so we can get back to you', 75, 'header_images/customersupport.png', 'bottom_images/chat_bubble.png', 'background_images/chat_bubble_bg.png', '#FFFFFF', '#FFFFFF', '#F0F0F0', 'white', '', '<blockquote>Sorry all operators are currently helping other clients and are unable to provide Live support at this time.<br>Would you like to continue to wait for an operator or leave a message?<br><table width=450><tr><td><a href=livehelp.php?page=livehelp.php&department=[department]&tab=1 target=_top><font size=+1>Continue to wait</font></a></td><td align=center><b>or</b></td><td><a href=leavemessage.php?department=[department]><font size=+1>Leave A Message</a></td></tr></table><blockquote>', 'Y', 'Y', NULL, 0, 'Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_identity_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_identity_daily` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isnamed` char(1) NOT NULL DEFAULT 'N',
  `groupidentity` int(11) NOT NULL DEFAULT '0',
  `groupusername` int(11) NOT NULL DEFAULT '0',
  `identity` varchar(100) NOT NULL DEFAULT '',
  `cookieid` varchar(40) NOT NULL DEFAULT '',
  `ipaddress` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `uservisits` int(10) NOT NULL DEFAULT '0',
  `seconds` int(10) NOT NULL DEFAULT '0',
  `useragent` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `isnamed` (`isnamed`),
  KEY `groupidentity` (`groupidentity`),
  KEY `groupusername` (`groupusername`),
  KEY `identity` (`identity`),
  KEY `cookieid` (`cookieid`),
  KEY `username` (`username`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_identity_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_identity_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_identity_monthly` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isnamed` char(1) NOT NULL DEFAULT 'N',
  `groupidentity` int(11) NOT NULL DEFAULT '0',
  `groupusername` int(11) NOT NULL DEFAULT '0',
  `identity` varchar(100) NOT NULL DEFAULT '',
  `cookieid` varchar(40) NOT NULL DEFAULT '',
  `ipaddress` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `uservisits` int(10) NOT NULL DEFAULT '0',
  `seconds` int(10) NOT NULL DEFAULT '0',
  `useragent` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `isnamed` (`isnamed`),
  KEY `groupidentity` (`groupidentity`),
  KEY `groupusername` (`groupusername`),
  KEY `identity` (`identity`),
  KEY `cookieid` (`cookieid`),
  KEY `username` (`username`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_identity_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_keywords_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_keywords_daily` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `pageurl` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `levelvisits` (`levelvisits`),
  KEY `dateof` (`dateof`),
  KEY `referer` (`referer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_keywords_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_keywords_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_keywords_monthly` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `pageurl` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `levelvisits` (`levelvisits`),
  KEY `dateof` (`dateof`),
  KEY `referer` (`referer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_keywords_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_layerinvites`
--

CREATE TABLE IF NOT EXISTS `livehelp_layerinvites` (
  `layerid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL DEFAULT '',
  `imagename` varchar(60) NOT NULL DEFAULT '',
  `imagemap` text,
  `department` varchar(60) NOT NULL DEFAULT '',
  `user` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`layerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livehelp_layerinvites`
--

INSERT INTO `livehelp_layerinvites` (`layerid`, `name`, `imagename`, `imagemap`, `department`, `user`) VALUES
(1, '', 'layer-Help_button.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,400,197><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,157,213,257><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=237,157,400,257></MAP>', '', 0),
(2, '', 'layer-Man_invite.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,400,197><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,157,213,257><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=237,157,400,257></MAP>', '', 0),
(3, '', 'layer-Phone.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,472,150><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=241,150,484,256><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=0,150,241,250></MAP>', '', 0),
(4, '', 'layer-Subsilver.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,419,216><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,216,319,279><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=326,218,429,280></MAP>', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_leavemessage`
--

CREATE TABLE IF NOT EXISTS `livehelp_leavemessage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(200) NOT NULL DEFAULT '',
  `department` int(11) unsigned NOT NULL DEFAULT '0',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `sessiondata` text,
  `deliminated` text,
  PRIMARY KEY (`id`),
  KEY `department` (`department`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `livehelp_leavemessage`
--

INSERT INTO `livehelp_leavemessage` (`id`, `email`, `subject`, `department`, `dateof`, `sessiondata`, `deliminated`) VALUES
(1, 'inetsolution.asif@gmail.com', 'default - Contact', 1, 20110117044316, 'referer=http%3A%2F%2F&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+en-us%29+applewebkit%2F534.11+%28khtml%2C+like+gecko%29+chrome%2F9.0.570.1+safari%2F534.11&os=na&os_version=na&browser=chrome&ip=122.165.61.128', 'this=that&field_1=inetsolution.asif%40gmail.com&field_2=hello+how+r+u'),
(2, 'inetsolution.asif@gmail.com', 'default - Contact', 1, 20110117044502, 'referer=http%3A%2F%2F&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+en-us%29+applewebkit%2F534.11+%28khtml%2C+like+gecko%29+chrome%2F9.0.570.1+safari%2F534.11&os=na&os_version=na&browser=chrome&ip=122.165.61.128', 'this=that&field_1=inetsolution.asif%40gmail.com&field_2=Hello'),
(3, 'inetsolution.asif@gmail.com', 'default - Contact', 1, 20110117044606, 'referer=http%3A%2F%2F&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+en-us%29+applewebkit%2F534.11+%28khtml%2C+like+gecko%29+chrome%2F9.0.570.1+safari%2F534.11&os=na&os_version=na&browser=chrome&ip=122.165.61.128', 'this=that&field_1=inetsolution.asif%40gmail.com&field_2=hiajkdfkjfdk'),
(4, 'inetsolution.asif@gmail.com', 'default - Contact', 1, 20110118090918, 'referer=http%3A%2F%2Flocalhost%2Fprintfastonline%2Fmyaccount.php%3Ftask%3Dview&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+en-us%29+applewebkit%2F534.11+%28khtml%2C+like+gecko%29+chrome%2F9.0.570.1+safari%2F534.11&os=na&os_version=na&browser=chrome&ip=122.165.61.128', 'this=that&field_1=inetsolution.asif%40gmail.com&field_2=hello+this+is+test'),
(5, 'inetsolution.asif@gmail.com', 'default - Contact', 1, 20110118091016, 'referer=http%3A%2F%2Flocalhost%2Fprintfastonline%2Fmyaccount.php%3Ftask%3Dview&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+en-us%29+applewebkit%2F534.11+%28khtml%2C+like+gecko%29+chrome%2F9.0.570.1+safari%2F534.11&os=na&os_version=na&browser=chrome&ip=122.165.61.128', 'this=that&field_1=inetsolution.asif%40gmail.com&field_2=hello+whos+there'),
(6, 'simbakhsh@gmail.com', 'default - Contact', 1, 20110203075322, 'referer=http%3A%2F%2Fwww.2daybiz.com%2Fcustombuss_cardscript_multi-language_version.html&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+6.1%3B+en-us%3B+rv%3A1.9.2.13%29+gecko%2F20101203+firefox%2F3.6.13&os=na&os_version=na&browser=firefox&ip=217.136.6.254', 'this=that&field_1=simbakhsh%40gmail.com&field_2=Hi+dear+Supporter%2C%3Cbr%3E%3Cbr%3ESeveral+minutes+ago+I+created+an+account++for+testing+your+system.+I+received+username+%26amp%3B+password+but+isn%27t+work.%3Cbr%3E%3Cbr%3EPlease+help+me'),
(7, 'antidote.mani@gmail.com', 'default - Contact', 1, 20110208053608, 'referer=http%3A%2F%2F2daybiz.com%2Fcustombuss_cardscript_basic_version.html&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+6.0%3B+en-us%29+applewebkit%2F534.13+%28khtml%2C+like+gecko%29+chrome%2F9.0.597.84+safari%2F534.13&os=na&os_version=na&browser=chrome&ip=27.54.151.151', 'this=that&field_1=antidote.mani%40gmail.com&field_2=i+am+not+able+to+login%3F'),
(8, 'manoj.vadlakonda@gmail.com', 'default - Contact', 1, 20110211013846, 'referer=http%3A%2F%2F2daybiz.com%2Fcustombuss_cardscript_basic_version.html&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+en-us%3B+rv%3A1.9.2.13%29+gecko%2F20101203+alexatoolbar%2Falxf-2.01+asktbfxtv5%2F3.9.1.14019+firefox%2F3.6.13+gtb7.1&os=na&os_version=na&browser=firefox&ip=122.165.61.128', 'this=that&field_1=manoj.vadlakonda%40gmail.com&field_2=how+ru%3F'),
(9, 'fncbiz@gmail.com', 'default - Contact', 1, 20110212163715, 'referer=http%3A%2F%2Fwww.2daybiz.com%2Fcustombuss_cardscript_basic_version.html&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28macintosh%3B+u%3B+intel+mac+os+x+10_5_5%3B+en-us%29+applewebkit%2F525.18.1+%28khtml%2C+like+gecko%29+version%2F3.1.2+safari%2F525.20.1&os=na&os_version=na&browser=safari&ip=174.52.87.161', 'this=that&field_1=fncbiz%40gmail.com&field_2=You+say+I+have+registered%2C+and+when+I+follow+the+link+and+put+in+the+password%2C+you+say+I+need+to+put+a+valid+email+address+in...+I+have+already+done+that...+it+is+not+working%2C+why'),
(10, 'crimea1999@mail.ru', 'default - Contact', 1, 20110214152723, 'referer=http%3A%2F%2Fwww.2daybiz.com%2Fcustombuss_cardscript_multi-language_version.html&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+ru%3B+rv%3A1.9.2.13%29+gecko%2F20101203+firefox%2F3.6.13+gtb7.1&os=na&os_version=na&browser=firefox&ip=178.93.184.8', 'this=that&field_1=crimea1999%40mail.ru&field_2=I+wanted+to+try+a+demo+of+your+service+Custom+Business+Card+script+multilanguage+version.+Entered+my+name+and+e-mail%2C+I+came+up+with+a+link+when+clicked%2C+it+opens+the+entrance+to+the+demo+and+the+inscription+%26quot%3BInvalid+Username+and+Password%26quot%3B%3Cbr%3EI%27ve+tried+so+many+times+and+with+different+boxes%2C+nothing+happened.%3Cbr%3EPlease+help.'),
(11, 'markmurphy@printingpages.co.uk', 'default - Contact', 1, 20110421023046, 'referer=http%3A%2F%2Fwww.2daybiz.com%2Fcustombuss_cardscript_seo_version.html&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows%3B+u%3B+windows+nt+5.1%3B+en-us%29+applewebkit%2F534.16+%28khtml%2C+like+gecko%29+chrome%2F10.0.648.204+safari%2F534.16&os=na&os_version=na&browser=chrome&ip=92.40.241.61', 'this=that&field_1=markmurphy%40printingpages.co.uk&field_2=Hi%2C+I+am+interested+in+this+script+%28business+cards%29+but+no+links+seem+to+work%2C+got+a+broken+link+and+how+are+we+supposed+to+test+the+demo%3F%3Cbr%3E%3Cbr%3EThanks%2C%3Cbr%3EMark.%3Cbr%3E'),
(12, 'mohan.kirar@gmail.com', 'default - Contact', 1, 20110502072615, 'referer=http%3A%2F%2F&hostname=host_lookup_not_enabled&ua=mozilla%2F4.0+%28compatible%3B+msie+8.0%3B+windows+nt+6.1%3B+wow64%3B+trident%2F4.0%3B+slcc2%3B+.net+clr+2.0.50727%3B+.net+clr+3.5.30729%3B+.net+clr+3.0.30729%3B+cpntdf%29&os=na&os_version=na&browser=msie&ip=203.122.35.165', 'this=that&field_1=mohan.kirar%40gmail.com&field_2=I%27m+not+able+to+signup+on+your+site%3Cbr%3ENot+mail+is+sent+with+activation+link.+Actually+I+need+a+software+by+which+User+on+my+site+can+create+business+card+and+place+an+order+in+PHP%2FMySql%3Cbr%3EHow+can+I+see+demo+on+your+site%3F'),
(13, 'mugeshmca@gmail.com', 'default - Contact', 1, 20110629072012, 'referer=http%3A%2F%2F&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows+nt+5.1%3B+rv%3A2.0.1%29+gecko%2F20100101+firefox%2F4.0.1&os=na&os_version=na&browser=firefox&ip=192.168.2.19', 'this=that&field_1=mugeshmca%40gmail.com&field_2=asdasd'),
(14, 'mugeshmca@gmail.com', 'default - Contact', 1, 20110629074630, 'referer=http%3A%2F%2F&hostname=host_lookup_not_enabled&ua=mozilla%2F5.0+%28windows+nt+5.1%3B+rv%3A2.0.1%29+gecko%2F20100101+firefox%2F4.0.1&os=na&os_version=na&browser=firefox&ip=192.168.2.19', 'this=that&field_1=mugeshmca%40gmail.com&field_2=asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_messages`
--

CREATE TABLE IF NOT EXISTS `livehelp_messages` (
  `id_num` int(10) NOT NULL AUTO_INCREMENT,
  `message` text,
  `channel` int(10) NOT NULL DEFAULT '0',
  `timeof` bigint(14) NOT NULL DEFAULT '0',
  `saidfrom` int(10) NOT NULL DEFAULT '0',
  `saidto` int(10) NOT NULL DEFAULT '0',
  `typeof` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_num`),
  KEY `channel` (`channel`),
  KEY `timeof` (`timeof`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `livehelp_messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_modules`
--

CREATE TABLE IF NOT EXISTS `livehelp_modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `adminpath` varchar(255) NOT NULL DEFAULT '',
  `query_string` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `livehelp_modules`
--

INSERT INTO `livehelp_modules` (`id`, `name`, `path`, `adminpath`, `query_string`) VALUES
(1, 'Live Help!', 'livehelp.php', '', ''),
(2, 'Contact', 'leavemessage.php', '', ''),
(3, 'Q & A', 'user_qa.php', 'qa.php', '');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_modules_dep`
--

CREATE TABLE IF NOT EXISTS `livehelp_modules_dep` (
  `rec` int(10) NOT NULL AUTO_INCREMENT,
  `departmentid` int(10) NOT NULL DEFAULT '0',
  `modid` int(10) NOT NULL DEFAULT '0',
  `ordernum` int(8) NOT NULL DEFAULT '0',
  `isactive` char(1) NOT NULL DEFAULT 'N',
  `defaultset` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `livehelp_modules_dep`
--

INSERT INTO `livehelp_modules_dep` (`rec`, `departmentid`, `modid`, `ordernum`, `isactive`, `defaultset`) VALUES
(8, 1, 3, 0, 'N', ''),
(7, 1, 2, 2, 'N', 'Y'),
(6, 1, 1, 1, 'N', '');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_operator_channels`
--

CREATE TABLE IF NOT EXISTS `livehelp_operator_channels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `channel` int(10) NOT NULL DEFAULT '0',
  `userid` int(10) NOT NULL DEFAULT '0',
  `statusof` char(1) NOT NULL DEFAULT '',
  `startdate` bigint(8) NOT NULL DEFAULT '0',
  `bgcolor` varchar(10) NOT NULL DEFAULT '000000',
  `txtcolor` varchar(10) NOT NULL DEFAULT '000000',
  `channelcolor` varchar(10) NOT NULL DEFAULT 'F7FAFF',
  `txtcolor_alt` varchar(10) NOT NULL DEFAULT '000000',
  PRIMARY KEY (`id`),
  KEY `channel` (`channel`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `livehelp_operator_channels`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_operator_departments`
--

CREATE TABLE IF NOT EXISTS `livehelp_operator_departments` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `department` int(10) NOT NULL DEFAULT '0',
  `extra` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`recno`),
  KEY `user_id` (`user_id`),
  KEY `department` (`department`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `livehelp_operator_departments`
--

INSERT INTO `livehelp_operator_departments` (`recno`, `user_id`, `department`, `extra`) VALUES
(1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_operator_history`
--

CREATE TABLE IF NOT EXISTS `livehelp_operator_history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opid` int(11) unsigned NOT NULL DEFAULT '0',
  `action` varchar(60) NOT NULL DEFAULT '',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  `transcriptid` int(10) NOT NULL DEFAULT '0',
  `totaltime` int(10) NOT NULL DEFAULT '0',
  `channel` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `opid` (`opid`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `livehelp_operator_history`
--

INSERT INTO `livehelp_operator_history` (`id`, `opid`, `action`, `dateof`, `sessionid`, `transcriptid`, `totaltime`, `channel`) VALUES
(1, 1, 'login', 20090312065753, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(2, 1, 'Started Monitoring Traffic', 20090312065829, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(3, 1, 'startchat', 20090312070223, '', 0, 0, 1),
(4, 1, 'Started Chatting', 20090312070225, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(5, 1, 'Stopchat', 20090312070807, '', 1, 0, 0),
(6, 1, 'Stopped Chatting', 20090312070417, 'abb382a750a0007ab3ae3d2e7443c902', 0, 112, 0),
(7, 1, 'startchat', 20090312071035, '', 0, 0, 1),
(8, 1, 'Started Chatting', 20090312071036, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(9, 1, 'Stopped Chatting', 20090312071108, 'abb382a750a0007ab3ae3d2e7443c902', 0, 32, 0),
(10, 1, 'Stopped Monitoring Traffic', 20090312071750, 'abb382a750a0007ab3ae3d2e7443c902', 0, 1161, 0),
(11, 1, 'Started Chatting', 20090312072400, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(12, 1, 'Started Monitoring Traffic', 20090312072401, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(13, 1, 'Stopchat', 20090312072407, '', 2, 0, 0),
(14, 1, 'Stopped Chatting', 20090312072403, 'abb382a750a0007ab3ae3d2e7443c902', 0, 3, 0),
(15, 1, 'Stopped Monitoring Traffic', 20090312072409, 'abb382a750a0007ab3ae3d2e7443c902', 0, 8, 0),
(16, 1, 'Started Monitoring Traffic', 20090312073038, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(17, 1, 'startchat', 20090312073059, '', 0, 0, 1),
(18, 1, 'Started Chatting', 20090312073101, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(19, 1, 'Stopchat', 20090312073404, '', 3, 0, 0),
(20, 1, 'Stopped Chatting', 20090312073211, 'abb382a750a0007ab3ae3d2e7443c902', 0, 70, 0),
(21, 1, 'startchat', 20090312074818, '', 0, 0, 2),
(22, 1, 'Started Chatting', 20090312074820, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(23, 1, 'Stopchat', 20090312074833, '', 4, 0, 0),
(24, 1, 'Stopped Chatting', 20090312074826, 'abb382a750a0007ab3ae3d2e7443c902', 0, 6, 0),
(25, 1, 'Stopped Monitoring Traffic', 20090312090406, 'abb382a750a0007ab3ae3d2e7443c902', 0, 5608, 0),
(26, 1, 'Started Monitoring Traffic', 20090312095656, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(27, 1, 'Stopped Monitoring Traffic', 20090312101401, 'abb382a750a0007ab3ae3d2e7443c902', 0, 1025, 0),
(28, 1, 'Started Monitoring Traffic', 20090312103936, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(29, 1, 'Logout', 20090312104744, 'abb382a750a0007ab3ae3d2e7443c902', 0, 13791, 0),
(30, 1, 'login', 20090312104840, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(31, 1, 'Stopped Monitoring Traffic', 20090312104651, 'abb382a750a0007ab3ae3d2e7443c902', 0, 435, 0),
(32, 1, 'Started Monitoring Traffic', 20090312105851, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(33, 1, 'startchat', 20090312105913, '', 0, 0, 4),
(34, 1, 'Started Chatting', 20090312105915, 'abb382a750a0007ab3ae3d2e7443c902', 0, 0, 0),
(35, 1, 'Stopchat', 20090312105941, '', 5, 0, 0),
(36, 1, 'Stopped Chatting', 20090312105928, 'abb382a750a0007ab3ae3d2e7443c902', 0, 13, 0),
(37, 1, 'login', 20110117043607, '00c74b55c7046a339bbade7f5966e406', 0, 0, 0),
(38, 1, 'Logout', 20110117043914, '00c74b55c7046a339bbade7f5966e406', 0, 187, 0),
(39, 1, 'login', 20110117044529, '00c74b55c7046a339bbade7f5966e406', 0, 0, 0),
(40, 1, 'Logout', 20110117045743, '00c74b55c7046a339bbade7f5966e406', 0, 734, 0),
(41, 1, 'Stopped Monitoring Traffic', 20110117045711, '91186d4db8028ccaf8009efd8bc6d426', 0, 58388300, 0),
(42, 1, 'login', 20110118090953, 'aedfe35b4e96b21e34e06eca4a447dd1', 0, 0, 0),
(43, 1, 'Started Monitoring Traffic', 20110118091032, 'aedfe35b4e96b21e34e06eca4a447dd1', 0, 0, 0),
(44, 1, 'startchat', 20110118091408, '', 0, 0, 6),
(45, 1, 'Started Chatting', 20110118091414, 'aedfe35b4e96b21e34e06eca4a447dd1', 0, 0, 0),
(46, 1, 'Stopchat', 20110118091534, '', 6, 0, 0),
(47, 1, 'Stopped Chatting', 20110118091527, 'aedfe35b4e96b21e34e06eca4a447dd1', 0, 73, 0),
(48, 1, 'Logout', 20110118091927, 'aedfe35b4e96b21e34e06eca4a447dd1', 0, 574, 0),
(49, 1, 'Stopped Monitoring Traffic', 20110118091901, 'a55607d315ce2c669807bf9be9146014', 0, 509, 0);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_paths_firsts`
--

CREATE TABLE IF NOT EXISTS `livehelp_paths_firsts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `visit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `exit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `visits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `visit_recno` (`visit_recno`,`dateof`,`visits`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_paths_firsts`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_paths_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_paths_monthly` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `visit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `exit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `visits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `visit_recno` (`visit_recno`,`dateof`,`visits`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_paths_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_qa`
--

CREATE TABLE IF NOT EXISTS `livehelp_qa` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `parent` int(10) NOT NULL DEFAULT '0',
  `question` text,
  `typeof` varchar(10) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(60) NOT NULL DEFAULT '',
  `ordernum` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_qa`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_questions`
--

CREATE TABLE IF NOT EXISTS `livehelp_questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `department` int(10) NOT NULL DEFAULT '0',
  `ordering` int(8) NOT NULL DEFAULT '0',
  `headertext` text,
  `fieldtype` varchar(30) NOT NULL DEFAULT '',
  `options` text,
  `flags` varchar(60) NOT NULL DEFAULT '',
  `module` varchar(60) NOT NULL DEFAULT '',
  `required` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `department` (`department`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `livehelp_questions`
--

INSERT INTO `livehelp_questions` (`id`, `department`, `ordering`, `headertext`, `fieldtype`, `options`, `flags`, `module`, `required`) VALUES
(1, 1, 0, 'E-mail:', 'email', '', '', 'leavemessage', 'Y'),
(2, 1, 0, 'Question:', 'textarea', '', '', 'leavemessage', 'N'),
(3, 1, 0, 'Name', 'username', '', '', 'livehelp', 'N'),
(5, 1, 1, 'Question', 'textarea', '', '', 'livehelp', 'N'),
(6, 0, 0, 'E-mail:', 'email', NULL, '', 'leavemessage', 'Y'),
(7, 0, 0, 'Question:', 'textarea', NULL, '', 'leavemessage', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_quick`
--

CREATE TABLE IF NOT EXISTS `livehelp_quick` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `typeof` varchar(30) NOT NULL DEFAULT '',
  `message` text,
  `visiblity` varchar(20) NOT NULL DEFAULT '',
  `department` varchar(60) NOT NULL DEFAULT '0',
  `user` int(10) NOT NULL DEFAULT '0',
  `ishtml` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_quick`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_referers_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_referers_daily` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_referers_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_referers_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_referers_monthly` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_referers_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_sessions`
--

CREATE TABLE IF NOT EXISTS `livehelp_sessions` (
  `session_id` varchar(100) NOT NULL DEFAULT '',
  `session_data` text NOT NULL,
  `expires` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livehelp_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_smilies`
--

CREATE TABLE IF NOT EXISTS `livehelp_smilies` (
  `smilies_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `smile_url` varchar(100) DEFAULT NULL,
  `emoticon` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`smilies_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `livehelp_smilies`
--

INSERT INTO `livehelp_smilies` (`smilies_id`, `code`, `smile_url`, `emoticon`) VALUES
(1, ':D', 'icon_biggrin.gif', 'Very Happy'),
(2, ':-D', 'icon_biggrin.gif', 'Very Happy'),
(3, ':grin:', 'icon_biggrin.gif', 'Very Happy'),
(4, ':)', 'icon_smile.gif', 'Smile'),
(5, ':-)', 'icon_smile.gif', 'Smile'),
(6, ':smile:', 'icon_smile.gif', 'Smile'),
(7, ':(', 'icon_sad.gif', 'Sad'),
(8, ':-(', 'icon_sad.gif', 'Sad'),
(9, ':sad:', 'icon_sad.gif', 'Sad'),
(10, ':o', 'icon_surprised.gif', 'Surprised'),
(11, ':-o', 'icon_surprised.gif', 'Surprised'),
(12, ':eek:', 'icon_surprised.gif', 'Surprised'),
(13, ':shock:', 'icon_eek.gif', 'Shocked'),
(14, ':?', 'icon_confused.gif', 'Confused'),
(15, ':-?', 'icon_confused.gif', 'Confused'),
(16, ':???:', 'icon_confused.gif', 'Confused'),
(17, '8)', 'icon_cool.gif', 'Cool'),
(18, '8-)', 'icon_cool.gif', 'Cool'),
(19, ':cool:', 'icon_cool.gif', 'Cool'),
(20, ':lol:', 'icon_lol.gif', 'Laughing'),
(21, ':x', 'icon_mad.gif', 'Mad'),
(22, ':-x', 'icon_mad.gif', 'Mad'),
(23, ':mad:', 'icon_mad.gif', 'Mad'),
(24, ':P', 'icon_razz.gif', 'Razz'),
(25, ':-P', 'icon_razz.gif', 'Razz'),
(26, ':razz:', 'icon_razz.gif', 'Razz'),
(27, ':oops:', 'icon_redface.gif', 'Embarassed'),
(28, ':cry:', 'icon_cry.gif', 'Crying or Very sad'),
(29, ':evil:', 'icon_evil.gif', 'Evil or Very Mad'),
(30, ':twisted:', 'icon_twisted.gif', 'Twisted Evil'),
(31, ':roll:', 'icon_rolleyes.gif', 'Rolling Eyes'),
(32, ':wink:', 'icon_wink.gif', 'Wink'),
(33, ';)', 'icon_wink.gif', 'Wink'),
(34, ';-)', 'icon_wink.gif', 'Wink'),
(35, ':!:', 'icon_exclaim.gif', 'Exclamation'),
(36, ':?:', 'icon_question.gif', 'Question'),
(37, ':idea:', 'icon_idea.gif', 'Idea'),
(38, ':arrow:', 'icon_arrow.gif', 'Arrow'),
(39, ':|', 'icon_neutral.gif', 'Neutral'),
(40, ':-|', 'icon_neutral.gif', 'Neutral'),
(41, ':neutral:', 'icon_neutral.gif', 'Neutral'),
(42, ':mrgreen:', 'icon_mrgreen.gif', 'Mr. Green');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_transcripts`
--

CREATE TABLE IF NOT EXISTS `livehelp_transcripts` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `who` varchar(100) NOT NULL DEFAULT '',
  `endtime` bigint(14) DEFAULT NULL,
  `transcript` text,
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  `sessiondata` text,
  `department` int(10) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '',
  `starttime` bigint(14) NOT NULL DEFAULT '0',
  `duration` int(11) unsigned NOT NULL DEFAULT '0',
  `operators` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`recno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `livehelp_transcripts`
--

INSERT INTO `livehelp_transcripts` (`recno`, `who`, `endtime`, `transcript`, `sessionid`, `sessiondata`, `department`, `email`, `starttime`, `duration`, `operators`) VALUES
(1, 'prabhu', 20090312070438, ' <b>prabhu : </b> nullstring <br> <b>prabhu : </b> <b>Question</b><br>test?<br> <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br> <b>prabhu : </b> hi <br> <b>prabhu : </b> i need help <br> <b>admin : </b> yes tell me <br> <b>prabhu : </b> <img src=http://localhost/prabhu/test/craftysyntax/chat_smiles/happybeer.gif> <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>test?<br></font>', 1, '', 20011130000000, 0, 'X1X'),
(2, 'prabhu', 20090312071108, ' <b>prabhu : </b> <b>Question</b><br>test?<br> <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br> <b>admin : </b> nullstring <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>test?<br></font>', 1, '', 20090312071035, 33, 'X1X'),
(3, 'prabhu', 20090312073211, ' <b>prabhu : </b> <b>Question</b><br>sfdsf <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br> <b>prabhu : </b> i  love u <br> <b>admin : </b> mee too <br> <b>admin : </b> nullstring <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>sfdsf</font>', 1, '', 20090312073059, 72, 'X1X'),
(4, 'EQWEWEWQ', 20090312074825, ' <b>EQWEWEWQ : </b> <b>Question</b><br>EWQE <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> DSADSAD <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>EWQE</font>', 1, '', 20090312074818, 7, 'X1X'),
(5, 'prabhu', 20090312105927, ' <b>prabhu : </b> <b>Question</b><br>hi <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>hi</font>', 1, '', 20090312105913, 14, 'X1X'),
(6, 'Asif', 20110118091441, ' <b>Asif : </b> <b>Question</b><br>hello how r &gt;<br> <br> <b>admin : </b> How may I help You? <br> <b>Asif : </b> <img src=http://2daybiz.com/products/businesscard/livechat/chat_smiles/banghead.gif> <br>', '54913351a9d41a054d34d433794c452d', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http://localhost/printfastonline/myaccount.php?task=view target=_blank>http://localhost/printfastonline/myaccount.php?task=view</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>54913351a9d41a054d34d433794c452d<br><b>identity :</b>122.165.61-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us) applewebkit/534.11 (khtml, like gecko) chrome/9.0.570.1 safari/534.11<br><b>Browser :</b>chrome<br><b>Browser_Version :</b>9.0.570.1<br><b>Ip :</b>122.165.61.128<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>hello how r &gt;<br></font>', 1, '', 20110118091408, 33, 'X1X');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_users`
--

CREATE TABLE IF NOT EXISTS `livehelp_users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `lastaction` bigint(14) DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `isonline` char(1) NOT NULL DEFAULT '',
  `isoperator` char(1) NOT NULL DEFAULT 'N',
  `onchannel` int(10) NOT NULL DEFAULT '0',
  `isadmin` char(1) NOT NULL DEFAULT 'N',
  `department` int(5) NOT NULL DEFAULT '0',
  `identity` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(30) NOT NULL DEFAULT '',
  `isnamed` char(1) NOT NULL DEFAULT 'N',
  `showedup` bigint(14) DEFAULT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `camefrom` varchar(255) NOT NULL DEFAULT '',
  `show_arrival` char(1) NOT NULL DEFAULT 'N',
  `user_alert` char(1) NOT NULL DEFAULT '',
  `auto_invite` char(1) NOT NULL DEFAULT 'N',
  `istyping` char(1) NOT NULL DEFAULT '3',
  `visits` int(8) NOT NULL DEFAULT '0',
  `jsrn` int(5) NOT NULL DEFAULT '0',
  `hostname` varchar(255) NOT NULL DEFAULT '',
  `useragent` varchar(255) NOT NULL DEFAULT '',
  `ipaddress` varchar(255) NOT NULL DEFAULT '',
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  `typing_alert` char(1) NOT NULL DEFAULT 'N',
  `authenticated` char(1) NOT NULL DEFAULT '',
  `cookied` char(1) NOT NULL DEFAULT 'N',
  `sessiondata` text,
  `expires` bigint(14) NOT NULL DEFAULT '0',
  `greeting` text,
  `photo` varchar(255) NOT NULL DEFAULT '',
  `chataction` bigint(14) DEFAULT '0',
  `new_session` char(1) NOT NULL DEFAULT 'Y',
  `showtype` int(10) NOT NULL DEFAULT '1',
  `chattype` char(1) NOT NULL DEFAULT 'Y',
  `externalchats` varchar(255) NOT NULL DEFAULT '',
  `layerinvite` int(10) NOT NULL DEFAULT '0',
  `askquestions` char(1) NOT NULL DEFAULT 'Y',
  `showvisitors` char(1) NOT NULL DEFAULT 'N',
  `cookieid` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=622 ;

--
-- Dumping data for table `livehelp_users`
--

INSERT INTO `livehelp_users` (`user_id`, `lastaction`, `username`, `password`, `isonline`, `isoperator`, `onchannel`, `isadmin`, `department`, `identity`, `status`, `isnamed`, `showedup`, `email`, `camefrom`, `show_arrival`, `user_alert`, `auto_invite`, `istyping`, `visits`, `jsrn`, `hostname`, `useragent`, `ipaddress`, `sessionid`, `typing_alert`, `authenticated`, `cookied`, `sessiondata`, `expires`, `greeting`, `photo`, `chataction`, `new_session`, `showtype`, `chattype`, `externalchats`, `layerinvite`, `askquestions`, `showvisitors`, `cookieid`) VALUES
(1, 20110118091927, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'N', 'Y', 0, 'Y', 0, '122.165.61-cslhOPERATOR', 'offline', 'Y', 0, 'sprabhu@i-netsolution.com', '', 'N', 'N', 'N', '3', 5, 1, 'host_lookup_not_enabled', '', '122.165.61.128', 'a55607d315ce2c669807bf9be9146014', '', 'N', 'Y', NULL, 20110118093927, 'How may I help You?', '', 0, 'N', 1, '', '', 0, 'Y', 'N', '054835766c2ca455fd9fb7a5f7d100e9'),
(621, 20110629091346, '192.168.2.19_1', '', '', 'N', -1, 'N', 1, '192.168.2-cslhVISITOR', 'Visiting', 'N', 20110629085659, '', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/business_v12.swf', 'N', '0', 'N', '3', 0, 0, 'host_lookup_not_enabled', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.100 Safari/534.30', '192.168.2.19', 'feccf3d855bbc8c412930d8d50d35c50', 'N', '', 'Y', NULL, 20110629093346, NULL, '', 0, 'N', 1, 'Y', '', 0, 'Y', 'N', '9885bc985571c6fab700498e4ce8c58e');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_visits_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_visits_daily` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_visits_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_visits_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_visits_monthly` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_visits_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_visit_track`
--

CREATE TABLE IF NOT EXISTS `livehelp_visit_track` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `sessionid` varchar(40) NOT NULL DEFAULT '0',
  `location` varchar(255) NOT NULL DEFAULT '',
  `page` bigint(14) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `whendone` bigint(14) NOT NULL DEFAULT '0',
  `referrer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`recno`),
  KEY `sessionid` (`sessionid`),
  KEY `location` (`location`),
  KEY `page` (`page`),
  KEY `whendone` (`whendone`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2888 ;

--
-- Dumping data for table `livehelp_visit_track`
--

INSERT INTO `livehelp_visit_track` (`recno`, `sessionid`, `location`, `page`, `title`, `whendone`, `referrer`) VALUES
(2876, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090958, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php'),
(2875, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629090956, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2874, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090953, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php'),
(2873, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629090946, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2872, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090637, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php'),
(2871, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629090633, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2870, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090548, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php'),
(2869, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629090545, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2868, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090526, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php'),
(2867, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629090524, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2866, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090518, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php'),
(2865, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php', 1, 'Business Card', 20110629090505, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2864, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090503, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php'),
(2863, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php', 1, 'Business Card', 20110629090501, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php'),
(2862, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629090457, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2861, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629090443, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php'),
(2860, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php', 1, 'Business Card', 20110629090431, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//index.php'),
(2859, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//index.php', 1, 'Business Card', 20110629090424, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//portfolio.php'),
(2858, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//portfolio.php', 1, 'Business Card', 20110629090135, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//order_details.php?oid=8'),
(2857, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//order_details.php?oid=8', 1, 'Business Card', 20110629090133, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//orderhistory.php'),
(2856, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//orderhistory.php', 1, 'Business Card', 20110629090131, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//order_details.php?oid=7'),
(2855, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//order_details.php?oid=7', 1, 'Business Card', 20110629090128, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//orderhistory.php'),
(2854, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//orderhistory.php', 1, 'Business Card', 20110629090124, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//portfolio.php'),
(2853, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//portfolio.php', 1, 'Business Card', 20110629090117, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//display_cart.php'),
(2852, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//display_cart.php', 1, 'Business Card', 20110629090050, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//portfolio.php'),
(2851, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//portfolio.php', 1, 'Business Card', 20110629090045, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//success.php'),
(2850, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//success.php', 1, 'Business Card', 20110629090037, 'http://'),
(2849, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/checkout.php', 1, 'Business Card', 20110629085800, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/shipping.php'),
(2848, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/shipping.php', 1, 'Business Card', 20110629085753, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/display_cart.php'),
(2847, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/display_cart.php', 1, 'Business Card', 20110629085747, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/home.php'),
(2846, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/home.php', 1, 'Business Card', 20110629085709, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/login.php'),
(2845, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/login.php', 1, 'Business Card', 20110629085700, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard/business_v12.swf'),
(2877, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629091000, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2878, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php', 1, 'Business Card', 20110629091002, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php'),
(2879, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629091006, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php'),
(2880, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php', 1, 'Business Card', 20110629091037, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2881, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629091227, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//categories.php'),
(2882, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//home.php', 1, 'Business Card', 20110629091240, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2883, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//index.php', 1, 'Business Card', 20110629091245, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//home.php'),
(2884, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629091252, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//index.php'),
(2885, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//index.php', 1, 'Business Card', 20110629091329, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php'),
(2886, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php', 1, 'Business Card', 20110629091339, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//index.php'),
(2887, 'feccf3d855bbc8c412930d8d50d35c50', 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//login.php', 1, 'Business Card', 20110629091345, 'http://192.168.2.130/2daybiz/businesscard/project/businesscard//product.php');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_admin`
--

CREATE TABLE IF NOT EXISTS `pfo_admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pfo_admin`
--

INSERT INTO `pfo_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_bookmark`
--

CREATE TABLE IF NOT EXISTS `pfo_bookmark` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `prod_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pfo_bookmark`
--

INSERT INTO `pfo_bookmark` (`book_id`, `user_id`, `prod_id`) VALUES
(1, 57, 23),
(2, 57, 26),
(3, 57, 24),
(12, 104, 2),
(13, 104, 1),
(14, 57, 1),
(15, 57, 4),
(17, 145, 1),
(18, 148, 11);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_cart`
--

CREATE TABLE IF NOT EXISTS `pfo_cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `imgpathf` varchar(75) NOT NULL DEFAULT '',
  `imgpathb` varchar(75) NOT NULL DEFAULT '',
  `imgcount` int(10) NOT NULL DEFAULT '0',
  `imgtype` varchar(45) NOT NULL DEFAULT '',
  `quantity` int(10) NOT NULL DEFAULT '0',
  `paper` varchar(75) NOT NULL DEFAULT '',
  `ship_method` varchar(45) NOT NULL DEFAULT '',
  `price` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `pfo_cart`
--

INSERT INTO `pfo_cart` (`id`, `user_id`, `imgpathf`, `imgpathb`, `imgcount`, `imgtype`, `quantity`, `paper`, `ship_method`, `price`) VALUES
(1, 100, 'userdesign/1297905610133272.jpg', 'userdesign/1297905619762a68.jpg', 0, '', 100, 'glossy', '', '80'),
(2, 105, 'userdesign/1295004924.jpg', 'userdesign/1295004932.jpg', 0, '', 100, 'glossy', '', ''),
(3, 100, 'userdesign/1299693469fffdfa.jpg', 'userdesign/1299693474fcfef9.jpg', 1, '', 100, 'glossy', '', ''),
(4, 134, 'userdesign/1302959127f5f7f6.jpg', 'userdesign/1302959132fffffd.jpg', 0, '', 5000, 'glossy', '', '20'),
(18, 3, 'userdesign/1237718691f6fcf8.jpg', 'userdesign/1237718692f5fbf7.jpg', 2, '', 500, 'matt', 'standard', '29.99'),
(19, 57, 'userdesign/1297407543fffdfa.jpg', 'userdesign/1297407557fcfef9.jpg', 1, '', 100, 'matt', 'slow', '40'),
(100, 0, 'userdesign/1309337809.jpg', 'userdesign/1309337812.jpg', 0, '', 100, 'matt', '', ''),
(102, 147, 'userdesign/1309414063fffefa.jpg', 'userdesign/1309414065fbfff9.jpg', 0, '', 100, 'glossy', '', ''),
(104, 100, 'userdesign/1298673774762a68.jpg', 'userdesign/1299648996.jpg', 0, '', 5000, 'matt', '', ''),
(106, 147, 'userdesign/13092655842aafe.jpg', 'userdesign/13092655874d0a01.jpg', 0, '', 100, 'matt', '', ''),
(114, 0, 'userdesign/front459.png', 'userdesign/back797.png', 0, '', 100, 'matt', 'slow', '150'),
(117, 145, 'userdesign/front220.png', 'userdesign/back352.png', 0, '', 100, 'matt', 'standard', '20'),
(127, 148, 'userdesign/front258.png', 'userdesign/back300.png', 0, '', 100, 'matt', 'slow', '150'),
(128, 148, 'userdesign/front305.png', 'userdesign/back572.png', 0, '', 100, 'matt', 'slow', '150'),
(129, 148, 'userdesign/front114.png', 'userdesign/back353.png', 0, '', 100, 'matt', 'slow', '150');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_category`
--

CREATE TABLE IF NOT EXISTS `pfo_category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pfo_category`
--

INSERT INTO `pfo_category` (`cat_id`, `category`) VALUES
(1, 'Agriculture'),
(2, 'Animals & Pet Care'),
(3, 'Arts, Music & Entertainment'),
(4, 'Automotive & Transportation'),
(5, 'Beauty, Massage & Spa'),
(6, 'Business Services'),
(7, 'Construction & Trade'),
(8, 'Education & Child Care'),
(9, 'Finance & Insurance'),
(11, 'Health Care & Social Assistance'),
(12, 'Home Maintenance & Improvement'),
(13, 'Information & Technology'),
(14, 'Manufacturing'),
(15, 'Marketing & Communications'),
(16, 'Politics, Law & Public Safety'),
(17, 'Property & Estate Agents'),
(18, 'Religious & Spiritual'),
(19, 'Retail & Sales'),
(20, 'Sports & Fitness'),
(21, 'Travel & Accommodation'),
(22, 'Retail ');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_country`
--

CREATE TABLE IF NOT EXISTS `pfo_country` (
  `countryid` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL DEFAULT '',
  `countrycode` varchar(20) NOT NULL DEFAULT '',
  `country_abbr` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`countryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=227 ;

--
-- Dumping data for table `pfo_country`
--

INSERT INTO `pfo_country` (`countryid`, `country`, `countrycode`, `country_abbr`) VALUES
(56, 'Dominica', '+1', ''),
(57, 'Dominican Republic', '+1', ''),
(58, 'East Timor', '+670', ''),
(59, 'Ecuador', '+593', ''),
(60, 'Egypt', '+20', ''),
(61, 'El Salvador', '+503', ''),
(62, 'Equatorial Guinea', '+240', ''),
(63, 'Eritrea', '+291', ''),
(64, 'Estonia', '+372', ''),
(65, 'Ethiopia', '+251', ''),
(66, 'Falkland Islands', '+500', ''),
(67, 'Faroe Islands', '+298', ''),
(68, 'Fiji Islands', '+679', ''),
(69, 'Finland', '+358', ''),
(70, 'France', '+33', ''),
(71, 'French Guiana', '+594', ''),
(72, 'French Polynesia', '+689', ''),
(73, 'Gabon', '+241', ''),
(74, 'Gambia', '+220', ''),
(75, 'Georgia', '+995', ''),
(76, 'Germany', '+49', ''),
(77, 'Ghana', '+233', ''),
(78, 'Gibraltar', '+350', ''),
(79, 'Greece', '+30', ''),
(80, 'Greenland', '+299', ''),
(81, 'Grenada', '+1', ''),
(82, 'Guadeloupe', '+590', ''),
(83, 'Guam', '+1', ''),
(84, 'Guatemala', '+502', ''),
(85, 'Guinea', '+224', ''),
(86, 'Guinea-Bissau', '+245', ''),
(87, 'Guyana', '+592', ''),
(88, 'Haiti', '+509', ''),
(89, 'Honduras', '+504', ''),
(90, 'Hong Kong SAR', '+852', ''),
(91, 'Hungary', '+36', ''),
(92, 'Iceland', '+354', ''),
(93, 'India', '+91', 'IN'),
(94, 'Indonesia', '+62', ''),
(95, 'Iran', '+98', ''),
(96, 'Iraq', '+964', ''),
(97, 'Ireland', '+353', ''),
(98, 'Israel', '+972', ''),
(99, 'Italy', '+39', ''),
(100, 'Jamaica', '+1', ''),
(101, 'Japan', '+81', ''),
(102, 'Jordan', '+962', ''),
(103, 'Kazakhstan', '+7', ''),
(104, 'Kenya', '+254', ''),
(105, 'Kiribati', '+686', ''),
(106, 'Korea', '+82', ''),
(107, 'Kuwait', '+965', ''),
(108, 'Kyrgyzstan', '+996', ''),
(109, 'Laos', '+856', ''),
(110, 'Latvia', '+371', ''),
(111, 'Lebanon', '+961', ''),
(112, 'Lesotho', '+266', ''),
(113, 'Liberia', '+231', ''),
(114, 'Libya', '+218', ''),
(115, 'Liechtenstein', '+423', ''),
(116, 'Lithuania', '+370', ''),
(117, 'Luxembourg', '+352', ''),
(118, 'Macao SAR', '+853', ''),
(119, 'Madagascar', '+261', ''),
(120, 'Malawi', '+265', ''),
(121, 'Malaysia', '+60', ''),
(122, 'Maldives', '+960', ''),
(123, 'Mali', '+223', ''),
(124, 'Malta', '+356', ''),
(125, 'Martinique', '+596', ''),
(126, 'Mauritania', '+222', ''),
(127, 'Mauritius', '+230', ''),
(128, 'Mayotte', '+269', ''),
(129, 'Mexico', '+52', ''),
(130, 'Micronesia', '+691', ''),
(131, 'Moldova', '+373', ''),
(132, 'Monaco', '+377', ''),
(133, 'Mongolia', '+976', ''),
(134, 'Montserrat', '+1', ''),
(135, 'Morocco', '+212', ''),
(136, 'Mozambique', '+258', ''),
(137, 'Myanmar', '+95', ''),
(138, 'Namibia', '+264', ''),
(139, 'Nauru', '+674', ''),
(140, 'Nepal', '+977', ''),
(141, 'Netherlands', '+31', ''),
(142, 'Netherlands Antilles', '+599', ''),
(143, 'New Caledonia', '+687', ''),
(144, 'New Zealand', '+64', ''),
(145, 'Nicaragua', '+505', ''),
(146, 'Niger', '+227', ''),
(147, 'Nigeria', '+234', ''),
(148, 'Niue', '+683', ''),
(149, 'Norfolk Island', '+672', ''),
(150, 'Norway', '+47', ''),
(151, 'Oman', '+968', ''),
(152, 'Pakistan', '+92', ''),
(153, 'Panama', '+507', ''),
(154, 'Papua New Guinea', '+675', ''),
(155, 'Paraguay', '+595', ''),
(156, 'Peru', '+51', ''),
(157, 'Philippines', '+63', ''),
(158, 'Pitcairn Islands', '+672', ''),
(159, 'Poland', '+48', ''),
(160, 'Portugal', '+351', ''),
(161, 'Puerto Rico', '+1', ''),
(162, 'Qatar', '+974', ''),
(163, 'Reunion', '+262', ''),
(164, 'Romania', '+40', ''),
(165, 'Russia', '+7', ''),
(166, 'Rwanda', '+250', ''),
(167, 'St. Helena', '+290', ''),
(168, 'St. Kitts and Nevis', '+1', ''),
(169, 'St. Lucia', '+1', ''),
(170, 'St. Pierre and Miquelon', '+508', ''),
(171, 'St. Vincent Grenadines', '+1', ''),
(172, 'Samoa', '+685', ''),
(173, 'San Marino', '+378', ''),
(174, 'Sao Tome and Principe', '+239', ''),
(175, 'Saudi Arabia', '+966', ''),
(176, 'Senegal', '+221', ''),
(177, 'Serbia and Montenegro', '+381', ''),
(178, 'Seychelles', '+248', ''),
(179, 'Sierra Leone', '+232', ''),
(180, 'Singapore', '+65', ''),
(181, 'Slovakia', '+421', ''),
(182, 'Slovenia', '+386', ''),
(183, 'Solomon Islands', '+677', ''),
(184, 'Somalia', '+252', ''),
(185, 'South Africa', '+27', ''),
(186, 'Spain', '+34', ''),
(187, 'Sri Lanka', '+94', ''),
(188, 'Sudan', '+249', ''),
(189, 'Suriname', '+597', ''),
(190, 'Swaziland', '+268', ''),
(191, 'Sweden', '+46', ''),
(192, 'Switzerland', '+41', ''),
(193, 'Syria', '+963', ''),
(194, 'Taiwan', '+886', ''),
(195, 'Tajikistan', '+992', ''),
(196, 'Tanzania', '+255', ''),
(197, 'Thailand', '+66', ''),
(198, 'Macedonia', '+389', ''),
(199, 'Togo', '+228', ''),
(200, 'Tokelau', '+690', ''),
(201, 'Tonga', '+676', ''),
(202, 'Trinidad and Tobago', '+1', ''),
(203, 'Tunisia', '+216', ''),
(204, 'Turkey', '+90', ''),
(205, 'Turkmenistan', '+993', ''),
(206, 'Turks and Caicos Islands', '+1', ''),
(207, 'Tuvalu', '+688', ''),
(208, 'Uganda', '+256', ''),
(209, 'Ukraine', '+380', ''),
(210, 'United Arab Emirates', '+971', ''),
(211, 'United Kingdom', '', ''),
(212, 'Virgin Islands', '+1', ''),
(213, 'Uruguay', '+598', ''),
(214, 'Uzbekistan', '+998', ''),
(215, 'Vanuatu', '+678', ''),
(216, 'Venezuela', '+58', ''),
(217, 'Vietnam', '+84', ''),
(218, 'Wallis and Futuna', '+681', ''),
(219, 'Yemen', '+967', ''),
(220, 'Yugoslavia', '+381', ''),
(221, 'Zambia', '+260', ''),
(222, 'Zimbabwe', '+263', ''),
(223, 'United States of America', '', ''),
(224, 'India1', '', ''),
(225, 'india1234', '', ''),
(226, 'Indiaa', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_coupon`
--

CREATE TABLE IF NOT EXISTS `pfo_coupon` (
  `cp_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `used_date` varchar(45) NOT NULL DEFAULT '',
  `coupon` varchar(45) NOT NULL DEFAULT '',
  `cp_discount` varchar(10) NOT NULL DEFAULT '',
  `cp_status` int(3) NOT NULL DEFAULT '0',
  `cp_adstatus` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `pfo_coupon`
--

INSERT INTO `pfo_coupon` (`cp_id`, `user_id`, `used_date`, `coupon`, `cp_discount`, `cp_status`, `cp_adstatus`) VALUES
(3, 0, '', '28D6ABF291', '10', 0, 0),
(4, 0, '', '853573B5A9', '10', 0, 0),
(5, 0, '', '81448138F5', '20', 0, 0),
(7, 0, '', 'CA6AB34959', '85', 0, 0),
(8, 0, '', '29586CB449', '85', 0, 0),
(11, 0, '', 'F517783927', '85', 0, 0),
(12, 0, '', 'D79C878818', '85', 0, 0),
(13, 0, '', '32FCC8CFE1', '85', 0, 0),
(14, 0, '', '35936514A3', '85', 0, 0),
(15, 0, '', 'A45A1D12EE', '85', 0, 0),
(16, 0, '', '85EF8E8952', '4', 0, 0),
(17, 0, '', 'CC225865B7', '4', 0, 0),
(18, 0, '', '48A79BCF61', '4', 0, 0),
(20, 0, '', 'E43739BBA7', '4', 0, 0),
(21, 0, '', '7BEC7E63A4', '4', 0, 0),
(22, 0, '', '67C18C9898', '10', 0, 0),
(23, 0, '', '193F65E181', '10', 0, 0),
(29, 0, '', 'A9B7BA7178', '65', 0, 0),
(30, 0, '', '3323FE11E9', '65', 0, 0),
(31, 0, '', '81F24EF493', '65', 0, 0),
(32, 0, '', '84CDDE86A4', '65', 0, 0),
(37, 0, '', 'B1ADDA1482', '12', 0, 0),
(42, 0, '', '691F44C8C2', '20', 1, 0),
(43, 0, '', '8C5B18CBDF', '1', 0, 0),
(44, 0, '', '98B17F168D', '1', 0, 0),
(45, 0, '', 'F47D1AD31C', '2', 0, 0),
(46, 0, '', '31411BE149', '2', 0, 0),
(47, 0, '', 'FD9DD764A6', '2', 0, 0),
(48, 0, '', 'F9322B1465', '2', 1, 0),
(49, 0, '', '65DED5353C', '5', 0, 0),
(50, 0, '', '9BCCC2A217', '5', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_custompage`
--

CREATE TABLE IF NOT EXISTS `pfo_custompage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aboutus` text NOT NULL,
  `contactus` text NOT NULL,
  `services` varchar(255) NOT NULL,
  `terms` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pfo_custompage`
--

INSERT INTO `pfo_custompage` (`id`, `aboutus`, `contactus`, `services`, `terms`) VALUES
(1, '<table border="0" cellspacing="0" cellpadding="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td class="heading1" style="padding: 5px; text-align: justify;" width="89%">Welcome to Print Fast hhh<em>r<strong>b<span style="text-decoration: underline;">b<span style="text-decoration: line-through;">fg</span>dfgd</span></strong></em><br /></td>\r\n<td width="11%">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="padding:5px" align="left" valign="top">\r\n<table border="0" cellspacing="0" cellpadding="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td style="padding-bottom:10px">\r\n<p>Lorem Ipsumf is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It  has roots in a piece of classical Latin literature from 45 BC, making  it over 2000 years old. Richard McClintock, a Latin professor at  Hampden-Sydney College in Virginia, looked up one of the more obscure  Latin words, consectetur, from a Lorem Ipsum passage, and going through  the cites of the word in classical literature, discovered the  undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33  of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by  Cicero, written in 45 BC. This book is a treatise on the theory of  ethics, very popular during the Renaissance. The first line of Lorem  Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section  1.10.32.</p>\r\n<p><strong>Easy to Design</strong></p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced  below for those interested. Sections 1.10.32 and 1.10.33 from "de  Finibus Bonorum et Malorum" by Cicero are also reproduced in their  exact original form, accompanied by English versions from the 1914  translation by H. Rackham.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style="padding-bottom:5px"><strong>Impress clients and associates with custom business card designs.</strong></td>\r\n</tr>\r\n<tr>\r\n<td style="padding-bottom:5px">\r\n<table border="0" cellspacing="3" cellpadding="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td width="4%" align="center"><img src="images/small_arrow.jpg" alt="" width="7" height="7" /></td>\r\n<td width="96%">Optional printing on back of business cards</td>\r\n</tr>\r\n<tr>\r\n<td width="4%" align="center"><img src="images/small_arrow.jpg" alt="" width="7" height="7" /></td>\r\n<td>Space for multiple addresses and numbers</td>\r\n</tr>\r\n<tr>\r\n<td width="4%" align="center"><img src="images/small_arrow.jpg" alt="" width="7" height="7" /></td>\r\n<td>Horizontal and vertical business card layouts available</td>\r\n</tr>\r\n<tr>\r\n<td width="4%" align="center"><img src="images/small_arrow.jpg" alt="" width="7" height="7" /></td>\r\n<td>The more you order, the more you save</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td align="center" valign="top">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td class="dottedborder" style="padding:5px" colspan="2" align="justify">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td class="heading1" style="padding:5px" colspan="2" align="left" valign="top">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p><span style="color: #0000ff;"><span style="font-size: xx-large;"><strong><span style="font-family: mceinline;">Contact address</span></strong></span></span></p>\r\n<p>\r\n<table border="0" cellspacing="0" cellpadding="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td class="text" colspan="2">\r\n<p><strong>i-Net Solution</strong><br />No.1, Ayyavu Street,<br />Opp. to Indian Bank(Aminjikarai Branch),<br />Shenoy Nagar,&nbsp;<br />Aminjikarai P.O,<br />Chennai - 600030<br />Tamilnadu State,<br />India</p>\r\n<p>\r\n<table border="0" cellspacing="0" cellpadding="0" width="100%">\r\n<tbody>\r\n<tr>\r\n<td class="text" width="10%"><span class="nomspace"><strong>E-mail :</strong></span></td>\r\n<td class="text" width="48%"><a href="mailto:info@i-netsolution.com"><img id="Image86" src="http://i-netsolution.com/images/enquiry_mail.jpg" border="0" alt="" width="143" height="18" /></a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>', '', '<p><span style="color: #0000ff;"><span style="font-size: xx-large;"><strong>Coming Soon.........</strong></span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_enquiry`
--

CREATE TABLE IF NOT EXISTS `pfo_enquiry` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `subject` varchar(200) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pfo_enquiry`
--

INSERT INTO `pfo_enquiry` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Prabhu', 'sprabhu@i-netsolution.com', 'Subject', 'Message about test'),
(2, 'test', 'svithya@gmail.com', 'test subject', 'fdfadfaf\r\n'),
(3, 'xubuhmqaf', 'ctgkgu@legeyp.com', 'qWhZriTGIQrl', 'GKrHaG  <a href="http://appndyqcsawj.com/">appndyqcsawj</a>, [url=http://sqwyfcqfyxns.com/]sqwyfcqfyxns[/url], [link=http://jaxhksjxuxmj.com/]jaxhksjxuxmj[/link], http://dhlwgflciqub.com/'),
(4, 'rrr', 'ravindra.rdy@gmail.com', 'hat', 'asdfasdf'),
(5, 'raj', 'raj@gmail.com', 'testing', 'how about testing'),
(6, 'Nivethitha.G', 'nivethithaganesan@gmail.com', 'card', 'plz enqiure abt it..'),
(7, 'bavi', 'bavi@gmail.com', 'jsdjsdn', 'sjdfsjdnjk'),
(8, 'Test', 'xyz@gmail.com', 'Test subject', 'dsfdsfasd'),
(9, '111111', 'qweqeqw@gmail.com', '11111', '111'),
(10, '111111', 'aruncourage@gmail.com', '11111', 'gfrdgd'),
(11, 'Sana Siddiqui', 'sana@ferotech.com', 'Custom Business Card', 'I would like to enquire regarding Custom Business Card. Do call me on\r\n+91-99911922600'),
(12, 'Arun', 'arun.inetsolution@gmail.com', 'hi', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_faq`
--

CREATE TABLE IF NOT EXISTS `pfo_faq` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL DEFAULT '',
  `answer` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `pfo_faq`
--

INSERT INTO `pfo_faq` (`id`, `question`, `answer`, `status`) VALUES
(1, 'Impress clients and associates with custom business card designs?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 1),
(3, 'testing', 'ZXXZXZXZX\r\nZX\r\nZX\r\nmy final test ZXZXzX', 1),
(4, 'sdsadsaf', '', 0),
(6, 'My test query?', '', 0),
(7, 'asdasdasdasd?', '', 0),
(8, 'asdasdasdds?', '', 0),
(9, 'Impress clients and associates with custom business card designs?', '', 0),
(10, 'My test query?', 'xadasd', 1),
(11, 'dfgd', '', 0),
(12, 'testing ready', '', 0),
(13, 'This is for test. Please ignore.', '', 0),
(14, 'Please ignore. This is for test', '', 0),
(15, 'card details', '', 0),
(16, 'enqiry?', '', 0),
(17, 'dfhghdfgh', '', 0),
(18, 'xcvdfsgff', '', 0),
(19, 'What is the procedure to design a Card', '', 0),
(20, 'test 1', '', 0),
(21, 'hfghgfhfghfghfg', '', 0),
(23, 'what is u  name?', 'Test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_generalpackage`
--

CREATE TABLE IF NOT EXISTS `pfo_generalpackage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `silver_discount` int(11) NOT NULL DEFAULT '0',
  `silver_duration` int(11) NOT NULL DEFAULT '0',
  `gold_discount` int(11) NOT NULL DEFAULT '0',
  `gold_duration` int(11) NOT NULL DEFAULT '0',
  `platinum_discount` int(11) NOT NULL DEFAULT '0',
  `platinum_duration` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pfo_generalpackage`
--

INSERT INTO `pfo_generalpackage` (`id`, `silver_discount`, `silver_duration`, `gold_discount`, `gold_duration`, `platinum_discount`, `platinum_duration`) VALUES
(1, 20, 25, 30, 38, 40, 51);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_generalsettings`
--

CREATE TABLE IF NOT EXISTS `pfo_generalsettings` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL DEFAULT '',
  `project_title` varchar(45) NOT NULL DEFAULT '',
  `site_name` varchar(75) NOT NULL DEFAULT '',
  `admin_mail` varchar(45) NOT NULL DEFAULT '',
  `site_logo` varchar(255) NOT NULL,
  `paypal_id` varchar(45) NOT NULL DEFAULT '',
  `logo` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pfo_generalsettings`
--

INSERT INTO `pfo_generalsettings` (`id`, `title`, `project_title`, `site_name`, `admin_mail`, `site_logo`, `paypal_id`, `logo`) VALUES
(1, 'Business Card', 'Business Card', 'http://localhost/2daybiz%20projects/bussiness_card/businesscard_newversion/', 'info@2daybiz.com', 'logo.jpg', 'alagirivimal@i-netsolution.com', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_help`
--

CREATE TABLE IF NOT EXISTS `pfo_help` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL DEFAULT '',
  `answer` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pfo_help`
--

INSERT INTO `pfo_help` (`id`, `question`, `answer`, `status`) VALUES
(3, 'Welcome to Print Fast?????', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1),
(5, 'Impress clients and associates with custom business card designs?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_membership`
--

CREATE TABLE IF NOT EXISTS `pfo_membership` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `membertype` int(3) NOT NULL DEFAULT '0',
  `title` varchar(45) NOT NULL DEFAULT '',
  `joining_date` date NOT NULL DEFAULT '0000-00-00',
  `expiry_date` date NOT NULL DEFAULT '0000-00-00',
  `amount_paid` varchar(10) NOT NULL DEFAULT '',
  `amount_rem` varchar(10) NOT NULL DEFAULT '',
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=147 ;

--
-- Dumping data for table `pfo_membership`
--

INSERT INTO `pfo_membership` (`id`, `user_id`, `membertype`, `title`, `joining_date`, `expiry_date`, `amount_paid`, `amount_rem`, `status`) VALUES
(1, 3, 1, 'Gold', '2010-11-29', '2021-09-29', '', '', 0),
(2, 4, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(3, 5, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(4, 6, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(5, 7, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(6, 8, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(7, 9, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(8, 10, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(9, 11, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(10, 12, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(11, 13, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(12, 14, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(13, 15, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(14, 16, 1, 'Silver', '2010-11-29', '2011-05-29', '', '', 0),
(15, 17, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(16, 18, 1, 'Platinum', '2010-11-29', '2021-09-29', '', '', 0),
(17, 19, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(18, 20, 1, 'Platinum', '2010-11-29', '2012-11-29', '', '', 0),
(19, 21, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(20, 22, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(21, 23, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(22, 24, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(23, 25, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(24, 26, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(25, 27, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(26, 28, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(27, 29, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(28, 30, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(29, 31, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(30, 32, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(31, 33, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(32, 34, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(33, 35, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(34, 36, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(35, 37, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(36, 38, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(37, 39, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(38, 40, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(39, 41, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(40, 42, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(41, 43, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(42, 44, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(43, 45, 1, 'Silver', '2010-11-26', '2011-05-26', '', '', 0),
(44, 46, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(45, 47, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(46, 48, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(47, 49, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(48, 50, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(49, 51, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(50, 52, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(51, 53, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(52, 54, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(53, 55, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(54, 56, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(55, 57, 1, 'Gold', '2011-05-12', '2014-07-12', '', '', 0),
(56, 58, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(57, 59, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(58, 60, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(59, 61, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(60, 62, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(61, 63, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(62, 64, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(63, 65, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(64, 66, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(65, 67, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(66, 68, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(67, 69, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(68, 70, 1, 'Silver', '2010-11-26', '2011-05-26', '', '', 0),
(69, 71, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(70, 72, 1, 'Silver', '2010-11-26', '2011-05-26', '', '', 0),
(71, 73, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(72, 74, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(73, 75, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(74, 76, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(75, 77, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(76, 78, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(77, 79, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(78, 80, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(79, 81, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(80, 82, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(81, 83, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(82, 84, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(83, 85, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(84, 86, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(85, 87, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(86, 88, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(87, 89, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(88, 90, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(89, 91, 1, 'Gold', '2011-01-04', '2021-11-04', '', '', 0),
(90, 92, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(91, 93, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(92, 94, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(93, 95, 1, 'Free', '0000-00-00', '0000-00-00', '', '', 0),
(94, 96, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(95, 97, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(96, 98, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(97, 99, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(98, 100, 1, 'Silver', '2011-01-10', '2021-11-10', '', '', 0),
(99, 101, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(100, 102, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(101, 103, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(102, 104, 1, 'Platinum', '2011-01-18', '2014-01-18', '', '', 0),
(103, 105, 1, 'Silver', '2011-01-18', '2012-01-18', '', '', 0),
(104, 106, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(105, 107, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(106, 108, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(107, 109, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(108, 110, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(109, 111, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(110, 112, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(111, 113, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(112, 114, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(113, 115, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(114, 116, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(115, 117, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(116, 118, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(117, 119, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(118, 120, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(119, 121, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(120, 122, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(121, 123, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(122, 124, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(123, 125, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(124, 126, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(125, 127, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(126, 128, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(127, 129, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(128, 130, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(129, 131, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(130, 132, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(131, 133, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(132, 134, 1, 'Gold', '2011-05-12', '2014-07-12', '', '', 0),
(133, 135, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(134, 136, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(135, 137, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(136, 138, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(137, 139, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(138, 140, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(139, 141, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(140, 142, 1, 'Silver', '2011-05-12', '2013-06-12', '', '', 0),
(141, 143, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(142, 144, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(143, 145, 1, 'Gold', '2011-05-12', '2014-07-12', '', '', 0),
(144, 146, 1, 'Free Membership', '0000-00-00', '0000-00-00', '', '', 0),
(145, 147, 1, 'Gold', '2011-06-28', '2014-08-28', '', '', 0),
(146, 148, 1, 'Free Membership', '2012-10-17', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_membership_request`
--

CREATE TABLE IF NOT EXISTS `pfo_membership_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `request_type` varchar(10) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pfo_membership_request`
--

INSERT INTO `pfo_membership_request` (`id`, `user_id`, `request_type`, `status`) VALUES
(1, 147, 'Gold', 'Waiting Status');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_myimage`
--

CREATE TABLE IF NOT EXISTS `pfo_myimage` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `img_name` varchar(75) NOT NULL DEFAULT '',
  `img_type` varchar(45) NOT NULL DEFAULT '',
  `img_dimen` varchar(45) NOT NULL DEFAULT '',
  `img_date` varchar(45) NOT NULL DEFAULT '',
  `img_status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `pfo_myimage`
--

INSERT INTO `pfo_myimage` (`img_id`, `user_id`, `img_name`, `img_type`, `img_dimen`, `img_date`, `img_status`) VALUES
(9, 41, '1280488095Sunset.jpg', 'image', '800*600', '1280488095', 1),
(10, 43, '1281078052signgirl_blue[1].jpg', 'image', '645*180', '1281078052', 1),
(17, 46, '1281645373logobigwhitebk.jpg', 'image', '900*288', '1281645373', 1),
(18, 51, '12820374038slogo-copy.jpg', 'image', '100*93', '1282037403', 1),
(19, 59, '12826298071215713_f520.jpg', 'image', '520*783', '1282629807', 1),
(22, 66, '1287057376logo sml.jpg', 'image', '441*336', '1287057376', 1),
(23, 72, '1287240926Creek.jpg', 'image', '1024*768', '1287240926', 1),
(24, 57, '1287671405Shamu-1-749750.jpg', 'image', '1064*1600', '1287671405', 1),
(25, 76, '1287927227Penguins.jpg', 'image', '1024*768', '1287927227', 1),
(26, 89, '1291056132Penguins.jpg', 'image', '1024*768', '1291056132', 1),
(27, 57, '1291094175home_banner_3.jpg', 'image', '317*183', '1291094175', 1),
(28, 92, '1291100812Winter.jpg', 'image', '800*600', '1291100812', 1),
(29, 57, '1291197807rss.jpg', 'image', '14*14', '1291197807', 1),
(31, 91, '1291369448Blue hills.jpg', 'image', '800*600', '1291369448', 1),
(32, 95, '12923221241290421829.jpg', 'image', '76*48', '1292322124', 1),
(33, 95, '12923221371290421829.jpg', 'image', '76*48', '1292322137', 1),
(34, 95, '129232217812904218291234.jpg', 'image', '70*42', '1292322178', 1),
(35, 57, '1292490568ajith-miracle.jpg', 'image', '520*600', '1292490568', 1),
(36, 57, '1292491106Water lilies.jpg', 'image', '800*600', '1292491106', 1),
(37, 57, '1292491263Blue hills.jpg', 'image', '800*600', '1292491263', 1),
(40, 42, '1294903149227.jpg', 'image', '360*480', '1294903149', 1),
(41, 104, '1294924853giftcard.jpg', 'image', '675*638', '1294924853', 1),
(43, 106, '1295091421Dock.jpg', 'image', '1038*495', '1295091421', 1),
(44, 118, '129703906174-FOLDABLE WATER BOTTLE copy_3.jpg', 'image', '1750*2250', '1297039061', 1),
(45, 57, '1297406582Sunset.jpg', 'image', '800*600', '1297406582', 1),
(48, 142, '1304431841Neon02.jpg', 'image', '140*170', '1304431841', 1),
(49, 39, '1304674049168140416.png', 'image', '572*318', '1304674049', 1),
(50, 39, '1304674081168140416a.png', 'image', '572*318', '1304674081', 1),
(52, 145, '1305182651Sunset.jpg', 'image', '800*600', '1305182651', 1),
(53, 145, '1305196734Blue hills.jpg', 'image', '800*600', '1305196734', 1),
(54, 147, '1309267257logo.jpg', 'image', '180*69', '1309267257', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_newsletter`
--

CREATE TABLE IF NOT EXISTS `pfo_newsletter` (
  `ne_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `attachment` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`ne_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `pfo_newsletter`
--

INSERT INTO `pfo_newsletter` (`ne_id`, `email`, `message`, `attachment`) VALUES
(2, 'sprabhu1@i-netsolution.com', '', ''),
(3, 'kkk@kkk.com', '', ''),
(4, 'kkk@kkk.net', '', ''),
(5, 'inetsolution.asif@gmail.com', '', ''),
(7, 'Free Membership', '<p>Hello! this is test not to consider...</p>', '1295340924giftcard.jpg'),
(8, 'non', '<p>Hello this is test not to consider</p>', ''),
(9, 'non', '<p>Hello this is test not to consider</p>', '1295342223giftcard.jpg'),
(10, 'non', '<p>Hello this is test not to consider</p>', '1295342275giftcard.jpg'),
(11, 'non', '<p>dfdsfdfdf</p>', '1295342526giftcard.jpg'),
(12, 'non', '<p>dfdsfdfdf</p>', '1295342539giftcard.jpg'),
(13, 'non', '<p>dfdsfdfdf</p>', '1295342729giftcard.jpg'),
(14, 'non', '<p>Hello testing</p>', ''),
(15, 'Silver', '<p>sdfsdfasdfasdfsdfsadfasd</p>', ''),
(16, 'Silver', '<p>Helllo this is test not to consider</p>', ''),
(17, 'Free Membership', '<p>jiiihubgy</p>', ''),
(18, 'Free Membership', '<p>jiiihubgy</p>', ''),
(19, 'Silver', '<p>Hello this is test not to consider</p>', '1295344690giftcard.jpg'),
(20, 'Silver', '<p>Hello this is test not to consider</p>', '1295344806giftcard.jpg'),
(21, 'Silver', '<p>Hello this is test not to consider</p>', ''),
(22, 'Free Membership', '<p>Hello testing is in process please not to consider this mail</p>', ''),
(23, 'Silver', '<p>Hi this is test not to consider please</p>', '1295345633giftcard.jpg'),
(24, 'Silver', '<p>Hi this is test not to consider....</p>', '1295346492giftcard.jpg'),
(25, 'Silver', '<p>Hi this is test not to consider....</p>', ''),
(26, 'Silver', '<p>Hi this is test not to consider....</p>', ''),
(27, 'Silver', '<p>Hi this is test not to consider....</p>', ''),
(28, 'Silver', '<p>Hi this is test not to consider....</p>', ''),
(29, 'Free Membership', '<p>hello this is test&nbsp;</p>', '1295347967giftcard.jpg'),
(30, 'Free Membership', '<p>Newsletter tesing not to consider</p>', '1295348193giftcard.jpg'),
(31, 'Free Membership', '<p>News letter testing not to consider</p>', '1295348223giftcard.jpg'),
(32, 'Free Membership', '<p>Letest Newsletter testing..so Not to consider</p>', '1295349390giftcard.jpg'),
(33, 'Free Membership', '<p>kdjfksdjfkdsjf</p>', ''),
(35, 'Free Membership', '<p>sdfdsfdgdfgadgasdg</p>', '1295351136giftcard.jpg'),
(36, 'Free Membership', '<p>Hello thsi is test</p>', ''),
(37, 'Free Membership', '<p>hello</p>', ''),
(38, 'all', '<p>Hello this is test for asif</p>', '1295353150giftcard.jpg'),
(39, 'Platinum', '<p>Hello this is test for newletter not to consider....</p>', '1295354048giftcard.jpg'),
(40, 'Platinum', '<p>Hello this is test for newletter not to consider....</p>', ''),
(41, 'Platinum', '<p>hello</p>', ''),
(42, 'Platinum', '<p>Hello this is test!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1</p>', ''),
(43, 'Platinum', '<p>Hello this is test for newsletter !!!!</p>', ''),
(44, 'Platinum', '<p>Hello this is test for newsletter !!!!</p>', ''),
(45, 'Platinum', '<p>Hai this is test not to consider..........</p>', ''),
(46, 'Platinum', '<p>Hai this is test not to consider..........</p>', ''),
(47, 'Platinum', '<p>Hai this is test not to consider..........</p>', ''),
(48, 'Platinum', '<p>Hello this is test kdfksdjfkj</p>', ''),
(49, 'Platinum', '<p>hello this is test</p>', ''),
(50, 'Silver', '<p>hghjg</p>', ''),
(51, 'Gold', '<p>hi test</p>', '1305203167Winter.jpg'),
(52, 'Gold', '<p>Hi Gold Members</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_otherprice`
--

CREATE TABLE IF NOT EXISTS `pfo_otherprice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `logo` varchar(10) NOT NULL DEFAULT '',
  `slow` varchar(10) NOT NULL DEFAULT '',
  `standard` varchar(10) NOT NULL DEFAULT '',
  `ship_discount` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pfo_otherprice`
--

INSERT INTO `pfo_otherprice` (`id`, `logo`, `slow`, `standard`, `ship_discount`) VALUES
(1, '20', '20', '20', '20');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_portfolio`
--

CREATE TABLE IF NOT EXISTS `pfo_portfolio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `imgpathf` varchar(75) NOT NULL DEFAULT '',
  `imgpathb` varchar(75) NOT NULL DEFAULT '',
  `imgcount` int(10) NOT NULL DEFAULT '0',
  `imgtype` varchar(45) NOT NULL DEFAULT '',
  `quantity` int(10) NOT NULL DEFAULT '0',
  `paper` varchar(75) NOT NULL DEFAULT '',
  `ship_method` varchar(45) NOT NULL DEFAULT '',
  `cdate` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `pfo_portfolio`
--

INSERT INTO `pfo_portfolio` (`id`, `user_id`, `imgpathf`, `imgpathb`, `imgcount`, `imgtype`, `quantity`, `paper`, `ship_method`, `cdate`) VALUES
(1, 39, 'userdesign/1305039447133272.jpg', 'userdesign/1305039449762a68.jpg', 0, '', 100, '', '', '1305039450'),
(2, 104, 'userdesign/1294923504.jpg', 'userdesign/1294923517.jpg', 0, '', 100, '', '', '1294923517'),
(3, 57, 'userdesign/1297407543fffdfa.jpg', 'userdesign/1297407557fcfef9.jpg', 1, '', 1000, '', '', '1297407558'),
(4, 134, 'userdesign/1302959127f5f7f6.jpg', 'userdesign/1302959132fffffd.jpg', 0, '', 500, '', '', '1302959133'),
(6, 147, 'userdesign/13092655842aafe.jpg', 'userdesign/13092655874d0a01.jpg', 0, '', 100, '', '', '1309265587'),
(100, 104, 'userdesign/1295336740fffdfa.jpg', 'userdesign/1295336751fcfef9.jpg', 0, '', 100, '', '', '1295336760'),
(102, 147, 'userdesign/1309414063fffefa.jpg', 'userdesign/1309414065fbfff9.jpg', 0, '', 100, '', '', '1309414080');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_price`
--

CREATE TABLE IF NOT EXISTS `pfo_price` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `qty` varchar(10) NOT NULL DEFAULT '',
  `matt` varchar(10) NOT NULL DEFAULT '',
  `glossy` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pfo_price`
--

INSERT INTO `pfo_price` (`id`, `qty`, `matt`, `glossy`) VALUES
(1, '100', '20', '50'),
(2, '250', '20', '20'),
(3, '500', '20', '20'),
(4, '1000', '20', '20'),
(5, '2000', '20', '20'),
(6, '5000', '20', '20');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_products`
--

CREATE TABLE IF NOT EXISTS `pfo_products` (
  `prod_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `subcat_id` int(10) NOT NULL DEFAULT '0',
  `style` int(10) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '',
  `position` varchar(75) NOT NULL DEFAULT '',
  `front_image` varchar(255) NOT NULL,
  `back_image` varchar(255) NOT NULL,
  `slow` varchar(45) NOT NULL DEFAULT '',
  `standard` varchar(45) NOT NULL DEFAULT '',
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pfo_products`
--

INSERT INTO `pfo_products` (`prod_id`, `cat_id`, `subcat_id`, `style`, `title`, `position`, `front_image`, `back_image`, `slow`, `standard`, `status`) VALUES
(2, 1, 1, 12, 'tes2', 'H', '1294119498400_F_13249558_JoybSS4q7BI2McW7QOsq9TB0z7ywQAYa.jpg', '1294119498400_F_13249558_JoybSS4q7BI2McW7QOsq9TB0z7ywQAYab.jpg', '', '', 1),
(10, 1, 2, 16, 'Testcardnew', 'H', '1350396174100635-Waterdrop-Business-Card-Template-Or-Website-Background-With-Blue-Copyspace-Poster-Art-Print.jpg', '1350396174100635-Waterdrop-Business-Card-Template-Or-Website-Background-With-Blue-Copyspace-Poster-Art-Printb.jpg', '', '', 1),
(11, 1, 2, 16, 'Orange card', 'H', '1350398560vector-bokeh-business-cards-preview-by-dragonart.png', '1350398560vector-bokeh-business-cards-preview-by-dragonartb.png', '', '', 1),
(12, 1, 2, 16, 'Color', 'H', '135057440929414.jpg', '135057440929414b.jpg', '', '', 1),
(13, 1, 2, 16, 'Black', 'H', '135057469329583.jpg', '135057469329583b.jpg', '', '', 1),
(14, 1, 2, 16, 'Gold', 'H', '135057480429558.jpg', '135057480429558b.jpg', '', '', 1),
(15, 1, 1, 16, 'Testcardnew', 'H', '135065633629493.jpg', '135065633629493b.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_register`
--

CREATE TABLE IF NOT EXISTS `pfo_register` (
  `reg_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL DEFAULT '',
  `lastname` varchar(45) NOT NULL DEFAULT '',
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(20) NOT NULL DEFAULT '',
  `fax` varchar(20) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `country` char(3) NOT NULL DEFAULT '',
  `state` varchar(45) NOT NULL DEFAULT '',
  `city` varchar(45) NOT NULL DEFAULT '',
  `zipcode` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `photo` varchar(75) NOT NULL DEFAULT '',
  `reg_date` varchar(45) NOT NULL DEFAULT '',
  `last_signin` varchar(20) NOT NULL DEFAULT '',
  `active_status` int(2) NOT NULL DEFAULT '0',
  `reg_status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `pfo_register`
--

INSERT INTO `pfo_register` (`reg_id`, `firstname`, `lastname`, `address1`, `address2`, `phone`, `fax`, `mobile`, `country`, `state`, `city`, `zipcode`, `email`, `password`, `photo`, `reg_date`, `last_signin`, `active_status`, `reg_status`) VALUES
(38, 'qwerty', 'qwerty', 'qwerty', '', '123 345 8765', '', '', '211', 'qwerty', 'jsdjjesjes', '89706', '123@yahoo.com', 'qazxsw', '', '1280245589', '', 1, 1),
(39, 'fred', 'fred', '3453 fred', '', '344-4444-3455-43444', '', '', '42', 'dinghow', 'hk', '34567', 'frangly@i-netsolution.com', 'prabhu', '', '1280302402', '1305055725', 1, 1),
(40, 'shashi', 'taylor', '123', '', '123-4567', '', '', '28', 'fafasfdas', 'affasfsfasfa', '1235568', 'shashi@alphadigital.ca', 'pebbles', '', '1280418209', '1280418276', 1, 1),
(41, 'srinivas', 'thouti', 'hyd', 'hyd', '9700666585', '', '9700666585', '93', 'ap', 'hyd', '500007', 'msg4srinu@gmail.com', '123456789', '', '1280479325', '1280488066', 1, 1),
(42, 'raj', 'vs', 'no:iyyavu street', 'aminjikarai', '9841301280', '', '', '93', 'tamil nadu', 'chennai', '600012', 'raj@gmail.com', 'nithya1004', '1291009208Albertsons logo.jpg', '1280731094', '1305173197', 1, 1),
(43, 'osman', 'canan', 'sssertrreyry', '', '902126176727', '', '', '204', 'gaziosmanpasa', 'istanbul', '34250', 'satanlar@gmail.com', 'zaqzaqzaq', '', '1281077783', '1281077958', 1, 1),
(44, 'asdfas', 'asdf', 'asdfasdf', 'asdf', 'asdfsaffa', 'asf', 'asdfasdf', '208', 'fl', 'm', '33141', 'ltd300@aol.com', '12341234', '', '1281212069', '1281212152', 1, 1),
(45, 'Matt', 'C', '147 thorn', '', '452456856', '', '', '211', 'Clev', 'UK', 'TS18 6HG', 'info@phatprinting.info', 'olivercook', '', '1281426939', '1281426989', 1, 1),
(46, 'Andrew', 'Dawson', 'Test Address', '', '215232545', '', '', '211', 'Lancs', 'Lancs', 'FHT RHF', 'me.dawson@hotmail.co.uk', '09659280770', '', '1281645140', '1281645177', 1, 1),
(47, 'AN', 'Mai', 'kapou 111', '', '+3474987498', '', '', '73', 'sdsdf', 'aaafdre', '13465', 'a.maier@made-easy.cc', '123456', '', '1281699422', '1281699460', 1, 1),
(49, 'victor', 'chang', '176 shikuang Road', '', '00886655820', '', '', '194', 'changhua', 'changhua', '50000', 'rehouse@hotmail.com', '081818', '', '1281844037', '', 1, 1),
(50, 'suresh', 'reddy', 'hyd', 'ndl', '9885607760', '', '', '93', 'A.P', 'hyd', '500007', 'yellasureshreddy@gmail.com', 'sangeetha', '', '1282030068', '1282030361', 1, 1),
(51, 'udaykiran', 'kona', 'kphb', '', '9966225444', '', '', '93', 'AP', 'hyderabad', '500062', 'udaykool@gmail.com', 'udaykiran', '', '1282037156', '1282037209', 1, 1),
(52, 'Iryna', 'Chernenko', 'Lenina 122', '', '8(093) 1809638', '', '', '209', 'NA', 'Kiev', '25635', 'Irishka.Chernenko@gmail.com', 'esrt23lle', '', '1282053273', '1283422636', 1, 1),
(53, 'blah', 'blah', '123 hello st', '', '1231231234', '', '', '223', 'NJ', 'Jello', '07071', 'hello@jellomello.com', 'simple5', '', '1282068775', '', 1, 1),
(54, 'Sukh', 'Singh', '7 Pind St', '', '1231231234', '', '', '223', 'NJ', 'Lyndhurst', '07071', 'sukhnyc@gmail.com', 'simple5', '', '1282069006', '1282884961', 1, 1),
(55, 'Jonathan', 'Narwold', 'N54W15879 Larkspur Lane', '', '262-432-1636', '', '', '223', 'WI', 'Menomonee Falls', 'WI', 'jon@getair.us', 'narw6josh', '', '1282225058', '1282225082', 1, 1),
(56, 'Dhaval', 'Parikh', 'Test address', '', '9898989898', '', '', '93', 'Gujarat', 'Ahmedabad', '380015', 'dhaval.parikh@neesatech.in', 'k4hvdq9tj9', '', '1282365752', '1282715021', 1, 1),
(57, '4564645', '56464645', '46465645@@@@@', 'chennai', '23424234234', 'greeterte', '9465897461', '74', '1111111', 'Chennai', '22423', 'manitest@gmail.com', 'prabhu', '1297406053Water lilies.jpg', '1282429478', '1297405306', 1, 1),
(58, 'd', 'd', 'd', '', '232323', '', '', '58', 'wew', 'd', '232', 'saadmo@gmail.com', 'saadmo', '', '1282478742', '', 1, 1),
(59, 'ravindra', 'nath', 'chinnavangali', '', '8143438609', '0000000', '', '93', 'ap', 'kurnool', '5000221', 'ravindra.rdy@gmail.com', 'ravindraindia', '', '1282628791', '1282648561', 1, 1),
(60, 'AN', 'Mai', 'kapou 111', '', '+3474987498', '', '', '47', 'sdsdf', 'aaafdre', '13465', 'a.maier@yougles.com', '080668', '', '1282904338', '1282904404', 1, 1),
(62, 'os', 'cc', 'po box 5555', 'po bnox 3321', '6612555555', '', '', '223', 'ca', 'delano', '93215', 'oscarjc@netzero.net', '20102010', '', '1284814174', '1284814436', 1, 1),
(63, 'suresh', 'reddy', 'hyd', 'ndl', '040-23456789', '', '9885607760', '93', 'AP', 'hyd', '500007', 'suresh.smart26@gmail.com', 'sangeetha143', '', '1284985186', '1284986252', 1, 1),
(64, 'john', 'smith', '123 jay st', '', '212-514-4565', '', '', '223', 'new york', 'brooklyn', '11232', 'chrisexq@yahoo.com', 'brother', '', '1285270407', '1285270482', 1, 1),
(65, 'jaja', 'ja', 'ajj', 'ajaj', '56745474', '', '', '121', 'sese', 'cscs', '23456', 'jackson5759@hotmail.com', 'ccb', '', '1286364013', '1286364053', 1, 1),
(66, 'Sean', 'Brophy', '6 Appaloosa Crescent', 'Table View', '+27218136710', '0866719344', '0825394472', '185', 'Western Cape', 'Cape Town', '7441', 'sean@intelmedia.co.za', 'madpro', '', '1287055103', '1290155500', 1, 1),
(67, 'nikos', 'nikos', 'athens', '', '2294022396', '', '', '79', 'athens', 'athens', '19009', '801100@gmail.co', '801100', '', '1287057517', '', 0, 1),
(68, 'Testy', 'Westy', '11 Caroline Court', '', '78623456', '', '', '223', 'california', 'los angeles', '36456', 'mystif30@yahoo.com.au', 'qazwsx', '', '1287120365', '', 0, 1),
(69, 'Mick', 'Thurston', '11 Caroline Court', '', '78623456', '', '', '223', 'california', 'los angeles', '36456', 'tricke.micke@gmail.com', 'wsxqaz', '', '1287120623', '1287120699', 1, 1),
(70, 'ds', 'dsds', 'dsd', '', '46+46+4646', '', '', '59', 'dss', 'dsd', '25644', 'hankafetrova@seznam.cz', 'a', '', '1287227862', '1287227913', 1, 1),
(71, 'xande', 'xande', 'teste', '', '4522154', '', '', '223', 'ny', 'ny', '212523', 'test@test.com', '123456', '', '1287240406', '', 0, 1),
(72, 'Remi', 'da Silva', 'Orlando', '', '4072180937', '', '', '223', 'Florida', 'Orlando', '32809', 'contact@webserv.us', '123456', '', '1287240511', '1287240563', 1, 1),
(73, 'senthil', 'kumar', '38,kamlanehru nagar 1st street', 'choolaimedu', '044-42307403', '', '9894614279', '93', 'tamilnadu', 'chennai', '600094', 'senthismart.k@gmail.com', 'senthismart', '', '1287555253', '1287557598', 1, 1),
(74, 'xande', 'xande', 'teste', '', '4522154', '', '', '223', 'ny', 'ny', '212523', 'test@test.com', '123123', '', '1287671087', '', 0, 1),
(75, 'xande', 'xande', 'teste', '', '4522154', '', '', '223', 'ny', 'ny', '212523', 'test@gtest.com', '123123', '', '1287671148', '', 0, 1),
(76, 'chris', 'tselis', 'kleisouras 4', '', '6939535573', '', '', '79', 'ilion', 'athens', '13123', 'xristostselis@hotmail.com', '123456', '', '1287686441', '1287927118', 1, 1),
(77, 'demo911', 'demo', 'demo 911', '', '55522233', '', '', '46', '', 'demo', '11111', 'mihkel80@hot.ee', 'demo911', '', '1288698340', '', 0, 1),
(78, 'Mytest', 'Testname', 'Test address', '', '0035358785989', '', '', '97', '', 'Dub', '0001', 'ampofo.kofi@yahoo.com', 'test', '', '1289052615', '1289052701', 1, 1),
(79, 'Kinkar', 'Saha', '1D,2 Regent Enclave', '', '111111111111', '', '', '93', 'Bengal', 'Kolkata', '700052', 'test@codeclouds.com', 'nandini32', '', '1289212367', '', 0, 1),
(80, 'alain', 's', '12 free', '', '5435353553', '', '', '31', '', 'certi', '343434', 'saamego@yahoo.com', '111111', '', '1289343409', '1289473544', 1, 1),
(81, 'nader', 'simbakhsh', 'J.Vuylstekelaan', '', '004921124701553', '', '', '76', '', 'Düsseldorf', '40211', 'simbakhsh@gmail.com', 'NaDeR1970', '', '1289465750', '1289465906', 1, 1),
(82, 'Richard', 'Wojcik', '618 Hwy 52 Bypass E', '', '6156885151', '', '', '223', '', 'Lafayette', '37083', 'richard@techforceservices.com', 'qualcomm', '', '1289542490', '1289542545', 1, 1),
(83, 'david', 'wood', '8', 'kfk', '232323232', '', '', '39', 'eqeqeq', 'qeqeqe', '2232', 'poo@disoria.com', 'q1w2e3', '', '1289620972', '', 0, 1),
(84, 'david', 'dada', 'adada', 'dadad', 'dadadada', 'dadaa', '', '43', '', 'adadada', 'dadadad', 'david@distoria.com', 'q1w2e3', '', '1289621105', '1289897922', 1, 1),
(85, 'Christopher', 'Drosos', 'Kallidromiou 8', '', '2102470923', '', '', '79', '', 'Athens', '13341', 'akisdrosos@yahoo.com', 'sonik', '', '1290216316', '1290216438', 1, 1),
(86, 'Stevenson', 'Chew', 'Singapore', '', '1234567', '', '', '180', '', 'Singapore', '12346', 'stechew@singnet.com.sg', '1746176', '', '1290524866', '', 0, 1),
(87, 'Yoshio', 'Mihara', '465, Okayama', 'Japan', '0867663165', '0867664566', '090-8999-3324', '101', '', 'Maniwa', '717-0504', 'mihara@shok.co.jp', 'miharayoshio', '', '1290642672', '1290642744', 1, 1),
(88, 'raj', 'vs', 'noi', 'sdsa', '3432432432', '', '', '101', 'tamail nadu', 'chennai', '600030', 'raj@yahoo.com', 'nithya1004', '', '1291009036', '', 0, 1),
(89, 'Kimmo', 'Ko', 'test', '', '15613713880', '', '', '223', '3346', 'West Palm Beach', '33460', 'korkiakoski.kimmo@gmail.com', 'qwerty', '', '1291055936', '1291155158', 1, 1),
(90, 'gfh', 'gfdh', 'gfdh', '', 'gfdh', '', '', '30', '', 'gfh', 'gfdh', 'info@domular.com', 'nl1474', '', '1291058869', '', 0, 1),
(91, 'Hema', 'Latha', 'West Tambaram', 'Chenani', '1365489', '1118462365637971', '9887421365', '93', 'TamilNadu', 'Chennai', '600 001', 'manojitha@i-netsolution.com', '123456', '1291266523Blue hills.jpg', '1291095581', '1291369329', 1, 1),
(92, 'Hema', 'Latha', 'Chennai', '', '1365489', '918465576', '852146397', '93', 'TamilNadu', 'Chennai', '600 001', '	manojitha@i-netsolution.com', '123456', '1291096747Sunset.jpg', '1291095753', '1291096287', 1, 1),
(94, 'arun', 'kumar', 'chennai', 'chennai', '8870444365', '8870444365', '8870444365', '93', '', 'Trichy', '621112', 'arun@i-netsolution.com', '123456', '', '1292317168', '', 0, 1),
(95, 'arun', 'kumar', 'chennai', 'chennai', '8870444365', '8870444365', '8870444365', '93', 'TamilNadu', 'Chennai', '621112', 'arun@i-netsolution.com', '123456', '', '1292317990', '1292321233', 1, 1),
(96, '123456789', '12345', 'm g r nagar ', 'chennai', 'dfgdfgdf', 'dfgfdgfdg', 'sdfdfsds', '93', '', 'chennai', 'sdgfg', 'priyaaaa.shanmugam@gmail.com', '1', '', '1292474339', '', 0, 1),
(97, '123456789', '12345', 'dgdf', 'dgfd', 'dgdgfg', 'sdfgsdfr', 'asdf', '93', '', 'chennai', 'fsdf', 'priya@gmail.com', '1', '', '1292474524', '', 0, 1),
(98, '123456789', '12345', 'dgdf', 'sfgsfgfj', 'ghdghdg', 'dfdgdgfsd', 'dfgdfgdfg', '93', '', 'chennai', 'sdgdfsg', 'priyaa@gmail.com', '1', '', '1292475800', '', 0, 1),
(99, 'aishu', 'J', 'dsfsd', 'zxx', '234324', '', '', '93', '', 'chennai', '600045', 'jaish87@gmail.com', '123456', '', '1292475958', '', 0, 1),
(104, 'Asif', 'Basha', 'Periamet', '', '9554645950', '', '', '93', 'TamilNadu', 'chennai', '524003', 'inetsolution.asif@gmail.com', 'abcd_1234', '', '1294922099', '1295409642', 1, 1),
(105, 'test', 'test', 'test', '', '+375295665685', '', '', '209', 'BY', 'Minsk', '220085', 'gotin@nsys.by', '123456789', '', '1295004575', '1295004733', 1, 1),
(106, 'rasca', 'melos', '123 my way', '', '19724956870', '', '', '223', 'Texas', 'Anna', '567840', 'theflyingsombrerorestaurant@yahoo.com', 'rascame', '', '1295089986', '1295353162', 1, 1),
(107, 'asdf', 'asdf', 'asdf', 'a', '2342342342', '', '', '60', 'ertertert', 'asdfsdf', '234343', 'rany13@gmail.com', 'test123456', '', '1295461540', '', 1, 1),
(108, 'Anes', 'El bardoudi', 'Rue des ', '', '003228881617', '', '', '220', '123', 'belgrade', '11121', 'annisso@gmail.com', 'annisso', '', '1295602478', '', 0, 1),
(109, 'ali', 'kaplan', 'kartal', '', '02162162525', '', '', '204', 'kartal', 'istanbul', '34000', 'siberspeed@hotmail.com', '111213', '', '1295694094', '1295694730', 1, 1),
(110, 'suryta', 'mona', 'wijkm,', 'njuhbn', '04566221863', '', '', '93', 'tn', 'chennai', '600030', 'n.mohanaa@gmail.com', 'suryamona', '', '1295942233', '', 0, 1),
(111, 'test', 'tester', '44334 test st', '', '9543433456', '', '', '223', 'fl', 'miami', '33234', 'support@puredsn.com', 'Puredsn', '', '1296157678', '', 1, 1),
(112, 'test', 'test', 'test', '', '9041456545', '', '', '93', 'test', 'test', '11156', 'test@test1.com', 'test123', '', '1296159448', '', 0, 1),
(113, 'test', 'test', 'test', '', '9041456545', '', '', '93', 'test', 'test', '11156', 'arpit@artworldwebsolutions.com', 'test123', '', '1296159665', '1296313303', 1, 1),
(114, 'test', 'me', '2510 crow valley', '', '512-687-8899', '', '', '223', 'texas', 'austin', '78247', 'eric@pitcrewtechnologies.com', 'ranjeet', '', '1296625693', '', 0, 1),
(115, 'la', 'mishto', 'lamistho', '', '5556264584', '', '', '164', 'vs', 'bd', '731051', 'lamishto@yahoo.com', 'caterinca', '', '1296643071', '', 0, 1),
(116, 'asl?', 'asd', 'asddas', '', '3245234234', '', '', '69', 'asda', 'asdasd', '23424', 'dedevanya@gmail.com', '123456', '', '1296726549', '', 1, 1),
(117, 'nader', 'simbakhsh', 'Julius Vuylstekelaan 18 / E11', '', '+32489335534', '', '', '70', 'BELGIUM', 'Antwerpe,', '03110', 'simbakhsh@gmail.com', 'NadeR123', '', '1296736786', '', 1, 1),
(118, 'ian', 'carson', '189 brock street', '', '5199000580', '', '', '223', 'california', 'brantford', '90210', 'icarson@visionsigns.ca', 'test007', '', '1297038717', '1297038819', 1, 1),
(119, 'dee', 'dee', 'aaaklkjk', 'jhkhj', '3433437777', '098080', '08080', '93', 'nn', 'nnjl', '54545', 'antidote.mani@gmail.com', '1234567', '', '1297159920', '', 1, 1),
(120, 'mark', 'thomas', '424', '', '14155130090', '', '', '223', 'ohio', 'cleve', '44144', 'marktg@yahoo.com', 'apple006', '', '1297220470', '', 0, 1),
(121, 'janelson', 'nelson', '1220 emir', '', '801-225-0055', '', '', '223', 'UT', 'Orem', '84097', 'fncbiz@gmail.com', 'tavish95', '', '1297546041', '', 1, 1),
(122, 'qiao', 'feng', 'nali', '', '92839212312', '', '', '194', 'Taipet', 'Taipei', '99282', 'qfeng_85@yahoo.com', '123456', '', '1297623124', '1297623345', 1, 1),
(123, 'mark', 'gottschalk', 'lake rd', '', '415-513-0090', '', '', '223', 'CAlifornia', 'fremont', '94555', 'gottschalk.mark@gmail.com', 'apple006', '', '1297738114', '', 1, 1),
(124, 'mark', 'thomas', '1312 Lake Rf', '', '415-313-3123', '', '', '223', 'Ca', 'fremont', '94555', 'mvp.chicago@yahoo.com', '006apple', '', '1297816604', '', 0, 1),
(126, 'Adil', 'Moosa', '123', '', '4165445111', '', '', '204', '1', 'TTT', '12345', 'adilmoosa@hotmail.com', 'adil123', '', '1299330667', '', 0, 1),
(127, 'pippo', 'paolo', 'via xx geffraio', '', '+39064678995', '', '', '99', 'Italia', 'Roma', '00141', 'info@capselling.it', 'andreamartina', '', '1300699198', '1300699291', 1, 1),
(128, 'John', 'Smiithers', '123 anywhere street', '', '234-787-9887', '', '', '223', 'GA', 'atlanta', '23456', 'abc@aol.com', 'abc123', '', '1301059578', '', 0, 1),
(129, 'kris', 'kumak', 'pcim 444', '', '48652232545', '', '', '159', 'podkarpacie', 'pcim', '32432', 'classic7@mail.com', 'makumba111', '', '1301509877', '1305036740', 1, 1),
(130, 'Tim', 'Giberson', '120 Boxley Drive', 'West Bridgford', '0115 923 5604', '', '', '211', 'Nottinghamshire', 'Nottingham', '10233', 'tim@printed4u.com', 'jitterbug', '', '1301905338', '', 1, 1),
(131, 'gold', 'smith', 'sdfsdfsdf', '', '599-5555-5852', '', '', '223', 'seattle', 'sdfsdf', '98104', 'depavic@msn.com', 'depavic', '', '1302078502', '1302078719', 1, 1),
(132, 'avi', 'Avi', 'adasadasdasd', '', '2332342342', '', '', '58', 'sada sad', 'asdsad', '243234', 'avijaticar357@google.com', 'triplem', '', '1302214572', '', 0, 1),
(133, 'Aman', 'Kumar', 'GF-1, 138, Sector-3', 'Raj Nagar', '9999999999', '', '', '93', 'Uttar Pradesh', 'Kanpur', '334456', 'aman26jan@rediffmail.com', 'password', '', '1302800614', '', 0, 1),
(134, '.', '.', '.', '', '2222222222', '', '', '223', '.', '.', '11111', 'robertrnoble@gmail.com', 'tester3', '', '1302958240', '1302958547', 1, 1),
(135, 'bvcb', 'bvcb', 'bvcb', 'bvc', '0895698786', '5435', '534', '99', 'bvcbc', 'vcxvxc', '43432', 'bbb@pp.it', '30111999', '', '1303733883', '', 0, 1),
(136, 'ghjk', 'hjk', 'ghjk', 'ghj', '56345475675', '', '', '63', 'nsad', 'hjkl', '56789', 'iuhu@mailinator.com', 'iuhu@mailinator.com', '', '1303812410', '', 1, 1),
(137, 'ghjk', 'ugukhuo', '2 king st', '', '4789654321', '', '', '60', 'sma', 'ka asdk', '34346', 'hu@mailinator.com', 'pppppp', '', '1303812809', '1303813255', 1, 1),
(138, 'Ilyés', 'Csaba', '1112', '2121212', '+36209451414', '', '', '91', 'Pest', 'Budapest', '21155', 'ilyescsaba@recomp.hu', '123456', '', '1303902368', '', 1, 1),
(139, 'Anupam', 'Bajaj', 'Logix Park, Noida', '', '9811999287', '', '', '93', 'Delhi', 'New Delhi', '401301', 'abajaj@ferotech.com', '123456', '', '1304328248', '', 0, 1),
(140, 'Anupam', 'Bajaj', 'Noida', '', '9811999287', '', '', '93', 'Delhi', 'New Delhi', '110026', 'artywebcreator@gmail.com', '100%perfect', '', '1304329408', '', 0, 1),
(141, 'mohan', 'k', 'Delhi', '', '9997772222', '', '', '93', 'd', 'madangir', '110062', 'mohan.kirar@gmail.com', 'mohan1', '', '1304334889', '', 0, 1),
(142, 'asdasd', 'asdasdasd', 'asdasdsd', '', '5352148898', '5352148898', '', '68', 'asdasdasfasfa', 'safasdf', '23542', 'ahmetongul@hotmail.com', '123456', '', '1304431441', '1304431790', 1, 1),
(143, 'Csaba', 'Csaba', 'Árpád hid', '', '+361221-2904', '', '', '91', 'Pest', 'Budapest', '21155', 'ilyescsaba@recomp.hu', 'Almafa', '', '1304672380', '', 1, 1),
(144, 'Aamir', 'n', 'sewri', '', '9820426651', '', '', '93', 'Maha', 'Mumbai', '400015', 'amir007@rediffmail.com', 'badshah', '', '1305055926', '1305088836', 1, 1),
(145, 'Arun', 'kumar', 'shenoy nagar', '', '98765432111', '', '', '93', 'Tamilnadu', 'chennai', '60054', 'arun.inetsolution@gmail.com', '111111', '1305200411Water lilies.jpg', '1305108416', '1350470886', 1, 1),
(147, 'mukesh', 'test', 'Address', 'vadapalani', '1236547895', '', '', '93', 'Tamilnadu', 'Chennai', '123654', 'mugeshinet2011@gmail.com', '123456', '', '1309260438', '1309410065', 1, 1),
(148, 'sheik', 'mohaideen', 'chennai', '', '919988775566', '', '919988775566', '93', 'Tamil nadu', 'chennai', '600030', 'sheik.inet@gmail.com', '111111', '', '1350479725', '1351836831', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pfo_shipping`
--

CREATE TABLE IF NOT EXISTS `pfo_shipping` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `firstname` varchar(45) NOT NULL DEFAULT '',
  `lastname` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `address1` varchar(200) NOT NULL DEFAULT '',
  `address2` varchar(200) NOT NULL DEFAULT '',
  `country` int(5) NOT NULL DEFAULT '0',
  `state` varchar(45) NOT NULL DEFAULT '',
  `city` varchar(45) NOT NULL DEFAULT '',
  `zip` varchar(45) NOT NULL DEFAULT '',
  `phone` varchar(45) NOT NULL DEFAULT '',
  `fax` varchar(45) NOT NULL DEFAULT '',
  `mobile` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pfo_shipping`
--

INSERT INTO `pfo_shipping` (`id`, `user_id`, `firstname`, `lastname`, `email`, `address1`, `address2`, `country`, `state`, `city`, `zip`, `phone`, `fax`, `mobile`) VALUES
(1, 3, 'prabhu', 'S', 'frangly@i-netsolution.com', 'mmda', 'chennai', 2, 'tamilnadu', 'chennai', '600106', '610293', '231232', '9812323213'),
(2, 104, 'Asif', 'Basha', 'inetsolution.asif@gmail.com', 'Periamet', '', 93, 'TamilNadu', 'chennai', '524003', '9554645950', '', ''),
(3, 57, '1111111', '111111', 'hdfhgfhf@gmail.com', '1111111111', '111111', 72, '1111111', 'fgf', '22423', 'ff', 'f', 'fff'),
(4, 137, 'ghjk', 'ugukhuo', 'hu@mailinator.com', '2 king st', '', 60, 'sma', 'ka asdk', '34346', '4789654321', '', ''),
(5, 145, 'Arun', 'kumar', 'arun.inetsolution@gmail.com', 'shenoy nagar', '', 93, 'Tamilnadu', 'chennai', '60054', '98765432111', '', ''),
(6, 147, 'mukesh', 'test', 'mugeshinet2011@gmail.com', 'Address', 'vadapalani', 93, 'Tamilnadu', 'Chennai', '123654', '1236547895', '', ''),
(7, 148, 'sheik', 'mohaideen', 'sheik.inet@gmail.com', 'chennai', '', 93, 'Tamil nadu', 'chennai', '600030', '919988775566', '', '919988775566');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_shopping`
--

CREATE TABLE IF NOT EXISTS `pfo_shopping` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `order_id` varchar(45) NOT NULL DEFAULT '',
  `imgpathf` varchar(75) NOT NULL DEFAULT '',
  `imgpathb` varchar(75) NOT NULL DEFAULT '',
  `imgcount` int(10) NOT NULL DEFAULT '0',
  `quantity` int(10) NOT NULL DEFAULT '0',
  `paper` varchar(75) NOT NULL DEFAULT '',
  `ship_method` varchar(45) NOT NULL DEFAULT '',
  `total` varchar(10) NOT NULL DEFAULT '',
  `pur_date` varchar(45) NOT NULL DEFAULT '',
  `pay_status` varchar(45) NOT NULL DEFAULT '',
  `order_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pfo_shopping`
--

INSERT INTO `pfo_shopping` (`id`, `user_id`, `order_id`, `imgpathf`, `imgpathb`, `imgcount`, `quantity`, `paper`, `ship_method`, `total`, `pur_date`, `pay_status`, `order_status`) VALUES
(1, 104, '5A4BE1FA34', 'userdesign/1294923504.jpg', 'userdesign/1294923517.jpg', 0, 100, 'glossy', 'slow', '2.00', '1295336856', '1', ''),
(2, 57, '92C8C96E4C', 'userdesign/1297407543fffdfa.jpg', 'userdesign/1297407557fcfef9.jpg', 1, 250, 'glossy', 'slow', '28.00', '1297407664', '0', 'Product Delivered'),
(3, 137, '6CF821BC98', 'userdesign/1303813628fffdfa.jpg', 'userdesign/1303813648fcfef9.jpg', 0, 100, 'glossy', 'standard', '2.00', '1303813735', '0', ''),
(4, 145, '31DE9ECE7C', 'userdesign/130517970895a81b.jpg', 'userdesign/1305179711e1fdff.jpg', 0, 100, 'matt', 'standard', '16.00', '1305181103', '0', 'Product Delivered'),
(5, 145, 'DC91D6E23D', 'userdesign/1305196525fffdfa.jpg', 'userdesign/1305196528fcfef9.jpg', 1, 100, 'glossy', 'slow', '49.00', '1305200723', '0', 'Product Delivered'),
(6, 147, 'AFF82E8811', 'userdesign/13092655842aafe.jpg', 'userdesign/13092655874d0a01.jpg', 0, 100, 'matt', 'slow', '14.00', '1309265763', '1', 'Product Delivered'),
(7, 147, '8B5711112B', 'userdesign/1309268672.jpg', 'userdesign/1309268673.jpg', 0, 100, 'matt', 'slow', '14.00', '1309268744', '0', 'Product Delivered'),
(8, 147, 'AE51221456', 'userdesign/13092655842aafe.jpg', 'userdesign/13092655874d0a01.jpg', 0, 100, '', 'slow', '14.00', '1309337883', '1', 'Product Delivered'),
(9, 148, 'EA214361FE', 'userdesign/front943.png', 'userdesign/back202.png', 0, 100, 'matt', 'slow', '40.00', '1350572265', '0', ''),
(10, 148, 'EA214361FE', 'userdesign/front537.png', 'userdesign/back174.png', 0, 100, 'matt', 'slow', '40.00', '1350572265', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_state`
--

CREATE TABLE IF NOT EXISTS `pfo_state` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL DEFAULT '0',
  `state` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `pfo_state`
--

INSERT INTO `pfo_state` (`sid`, `cid`, `state`) VALUES
(1, 1, 'Ontario'),
(2, 1, 'Quebec'),
(3, 1, 'British Columbia'),
(4, 1, 'Alberta'),
(5, 1, 'Manitoba'),
(6, 1, 'Saskatchewan'),
(7, 1, 'Nova Scotia'),
(8, 1, 'New Brunswick'),
(9, 1, 'Newfoundland and Labrador'),
(10, 1, 'Prince Edward Island'),
(11, 1, 'Northwest Territories'),
(12, 1, 'Yukon'),
(13, 1, 'Nunavut'),
(14, 2, 'Delaware'),
(15, 2, 'Pennsylvania'),
(16, 2, 'New Jersey'),
(17, 2, 'Georgia'),
(18, 2, 'Connecticut'),
(19, 2, 'Massachusetts'),
(20, 2, 'Maryland'),
(21, 2, 'South Carolina'),
(22, 2, 'New Hampshire'),
(23, 2, 'Virginia'),
(24, 2, 'New York'),
(25, 2, 'North Carolina'),
(26, 2, 'Rhode Island'),
(27, 2, 'Vermont'),
(28, 2, 'Kentucky'),
(29, 2, 'Tennessee'),
(30, 2, 'Ohio'),
(31, 2, 'Louisiana'),
(32, 2, 'Indiana'),
(33, 2, 'Mississippi'),
(34, 2, 'Illinois'),
(35, 2, 'Alabama'),
(36, 2, 'Maine'),
(37, 2, 'Missouri'),
(38, 2, 'Arkansas'),
(39, 2, 'Michigan'),
(40, 2, 'Florida'),
(41, 2, 'Texas'),
(42, 2, 'Iowa'),
(43, 2, 'Wisconsin'),
(44, 2, 'California'),
(45, 2, 'Minnesota'),
(46, 2, 'Oregon'),
(47, 2, 'Kansas'),
(48, 2, 'West Virginia'),
(49, 2, 'Nevada'),
(50, 2, 'Nebraska'),
(51, 2, 'Colorado'),
(52, 2, 'North Dakota'),
(53, 2, 'South Dakota'),
(54, 2, 'Montana'),
(55, 2, 'Washington'),
(56, 2, 'Idaho'),
(57, 2, 'Wyoming'),
(58, 2, 'Utah'),
(59, 2, 'Oklahoma'),
(60, 2, 'New Mexico'),
(61, 2, 'Arizona'),
(62, 2, 'Alaska'),
(63, 2, 'Hawaii'),
(64, 95, 'tehran'),
(66, 93, 'AP'),
(67, 226, 'Tamil'),
(68, 57, 'zxc');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_styles`
--

CREATE TABLE IF NOT EXISTS `pfo_styles` (
  `sty_id` int(10) NOT NULL AUTO_INCREMENT,
  `style` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`sty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pfo_styles`
--

INSERT INTO `pfo_styles` (`sty_id`, `style`) VALUES
(1, 'Bold'),
(2, 'Conservative'),
(3, 'Elegant'),
(4, 'Environmental'),
(5, 'Floral'),
(6, 'Fun'),
(7, 'Geometric & Borders'),
(8, 'Modern'),
(9, 'Monograms'),
(10, 'Nature & Landscapes'),
(11, 'Patriotic & Cultural'),
(12, 'Personal'),
(13, 'Retro'),
(14, 'Sensual'),
(15, 'Solid Colours'),
(16, 'Textures'),
(17, 'Using your photos & logos'),
(18, 'OPs'),
(19, 'hhhh'),
(20, 'Hiphopp');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_subcategory`
--

CREATE TABLE IF NOT EXISTS `pfo_subcategory` (
  `subcat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `subcategory` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pfo_subcategory`
--

INSERT INTO `pfo_subcategory` (`subcat_id`, `cat_id`, `subcategory`) VALUES
(1, 1, 'Crop Farming'),
(2, 1, 'Livestock Farming & Breeding'),
(3, 2, 'Animals'),
(4, 2, 'Boarding Kennel & Catteries'),
(5, 2, 'Grooming'),
(6, 2, 'Pet Sitting & Dog Walking'),
(7, 2, 'Pet Supplies & Pet Shops'),
(8, 2, 'Training'),
(9, 2, 'Veterinary'),
(10, 23, 'car'),
(11, 25, 'Business1'),
(16, 34, 'design1'),
(17, 34, 'logo'),
(18, 24, 'sub1 cat'),
(19, 22, 'Business card');

-- --------------------------------------------------------

--
-- Table structure for table `pfo_tmpcart`
--

CREATE TABLE IF NOT EXISTS `pfo_tmpcart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `imgpath` varchar(75) NOT NULL DEFAULT '',
  `imgcount` int(10) NOT NULL DEFAULT '0',
  `imgtype` varchar(45) NOT NULL DEFAULT '',
  `quanty` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pfo_tmpcart`
--


-- --------------------------------------------------------

--
-- Table structure for table `pfo_uploaddesign`
--

CREATE TABLE IF NOT EXISTS `pfo_uploaddesign` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `frontimage` varchar(100) NOT NULL DEFAULT '',
  `backimage` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pfo_uploaddesign`
--

INSERT INTO `pfo_uploaddesign` (`id`, `user_id`, `frontimage`, `backimage`) VALUES
(1, 3, '12757840696.jpg', '12757840696b.jpg'),
(2, 16, '1281085590Untitled-1.jpg', '1281085590Untitled-1b.jpg'),
(3, 35, '1280084618Broward.jpg', '1280084618Browardb.jpg'),
(4, 52, '1282138039c2call4.jpg', '1282138039c2call4b.jpg'),
(5, 57, '1292489156Sunset.jpg', '1292489156Sunsetb.jpg'),
(6, 100, 'itemImages/thumbs/1297828259cover_image.jpg', 'itemImages/thumbs/1297828259'),
(7, 145, 'itemImages/thumbs/1350380958100635-Waterdrop-Business-Card-Template-Or-Website-Background-With-Blue-', 'itemImages/thumbs/1350380958100640-Water-Drop-Business-Card-Template-Or-Website-Background-With-Blue');
