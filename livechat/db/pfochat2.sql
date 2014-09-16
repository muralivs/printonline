-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 21, 2009 at 10:24 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `pfochat2`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_autoinvite`
-- 

CREATE TABLE `livehelp_autoinvite` (
  `idnum` int(10) NOT NULL auto_increment,
  `isactive` char(1) NOT NULL default '',
  `department` int(10) NOT NULL default '0',
  `message` text,
  `page` varchar(255) NOT NULL default '',
  `visits` int(8) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `typeof` varchar(255) NOT NULL default '',
  `seconds` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`idnum`)
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

CREATE TABLE `livehelp_channels` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10) NOT NULL default '0',
  `statusof` char(1) NOT NULL default '',
  `startdate` bigint(8) NOT NULL default '0',
  `sessionid` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `livehelp_channels`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_config`
-- 

CREATE TABLE `livehelp_config` (
  `version` varchar(10) NOT NULL default '2.16.5',
  `site_title` varchar(100) NOT NULL default '',
  `use_flush` varchar(10) NOT NULL default 'YES',
  `membernum` int(8) NOT NULL default '0',
  `offset` int(5) NOT NULL default '0',
  `show_typing` char(1) NOT NULL default '',
  `webpath` varchar(255) NOT NULL default '',
  `s_webpath` varchar(255) NOT NULL default '',
  `speaklanguage` varchar(60) NOT NULL default 'English',
  `scratch_space` text,
  `admin_refresh` varchar(30) NOT NULL default 'auto',
  `maxexe` int(5) default '180',
  `refreshrate` int(5) NOT NULL default '1',
  `chatmode` varchar(60) NOT NULL default 'xmlhttp-flush-refresh',
  `adminsession` char(1) NOT NULL default 'Y',
  `ignoreips` text,
  `directoryid` varchar(32) NOT NULL default '',
  `tracking` char(1) NOT NULL default 'N',
  `colorscheme` varchar(30) NOT NULL default 'white',
  `matchip` char(1) NOT NULL default 'N',
  `gethostnames` char(1) NOT NULL default 'N',
  `maxrecords` int(10) NOT NULL default '75000',
  `maxreferers` int(10) NOT NULL default '50',
  `maxvisits` int(10) NOT NULL default '75',
  `maxmonths` int(10) NOT NULL default '12',
  `maxoldhits` int(10) NOT NULL default '1',
  `showgames` char(1) NOT NULL default 'Y',
  `showsearch` char(1) NOT NULL default 'Y',
  `showdirectory` char(1) NOT NULL default 'Y',
  `usertracking` char(1) NOT NULL default 'N',
  `resetbutton` char(1) NOT NULL default 'N',
  `keywordtrack` char(1) NOT NULL default 'N',
  `reftracking` char(1) NOT NULL default 'N',
  `topkeywords` int(10) NOT NULL default '50',
  `everythingelse` text,
  `rememberusers` char(1) NOT NULL default 'Y',
  `smtp_host` varchar(255) NOT NULL default '',
  `smtp_username` varchar(60) NOT NULL default '',
  `smtp_password` varchar(60) NOT NULL default '',
  `owner_email` varchar(255) NOT NULL default '',
  `topframeheight` int(8) NOT NULL default '45',
  `topbackground` varchar(156) NOT NULL default 'header_images/customersupport.png',
  `usecookies` char(1) NOT NULL default 'Y',
  `smtp_portnum` int(10) NOT NULL default '25',
  PRIMARY KEY  (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `livehelp_config`
-- 

INSERT INTO `livehelp_config` (`version`, `site_title`, `use_flush`, `membernum`, `offset`, `show_typing`, `webpath`, `s_webpath`, `speaklanguage`, `scratch_space`, `admin_refresh`, `maxexe`, `refreshrate`, `chatmode`, `adminsession`, `ignoreips`, `directoryid`, `tracking`, `colorscheme`, `matchip`, `gethostnames`, `maxrecords`, `maxreferers`, `maxvisits`, `maxmonths`, `maxoldhits`, `showgames`, `showsearch`, `showdirectory`, `usertracking`, `resetbutton`, `keywordtrack`, `reftracking`, `topkeywords`, `everythingelse`, `rememberusers`, `smtp_host`, `smtp_username`, `smtp_password`, `owner_email`, `topframeheight`, `topbackground`, `usecookies`, `smtp_portnum`) VALUES 
('2.16.5', 'Live Help!', 'YES', 0, 0, 'Y', 'http://localhost/prabhu/projects/printfastonline/livechat/', 'http://localhost/prabhu/projects/printfastonline/livechat/', 'English', ' Welcome to Print Fast Online Live Help \r\n\r\n All the administrative functions are located to the left of this text. \r\n \r\nYou can use this section to keep notes for yourself and other admins, etc. \r\n \r\nTo change the text that is located in this box just click on the small edit \r\nbutton on the top right corner of this box. \r\n        ', 'auto', 180, 1, 'xmlhttp-flush-refresh', 'Y', NULL, '', 'N', 'white', 'N', 'N', 75000, 50, 75, 12, 1, 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 50, NULL, 'Y', '', '', '', 'sprabhu@i-netsolution.com', 45, 'header_images/customersupport.png', 'Y', 25);

-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_departments`
-- 

CREATE TABLE `livehelp_departments` (
  `recno` int(5) NOT NULL auto_increment,
  `nameof` varchar(30) NOT NULL default '',
  `onlineimage` varchar(255) NOT NULL default '',
  `offlineimage` varchar(255) NOT NULL default '',
  `layerinvite` varchar(255) NOT NULL default '',
  `requirename` char(1) NOT NULL default '',
  `messageemail` varchar(60) NOT NULL default '',
  `leaveamessage` varchar(10) NOT NULL default '',
  `opening` text,
  `offline` text,
  `creditline` char(1) NOT NULL default 'L',
  `imagemap` text,
  `whilewait` text,
  `timeout` int(5) NOT NULL default '150',
  `leavetxt` text,
  `topframeheight` int(10) NOT NULL default '75',
  `topbackground` varchar(255) NOT NULL default '',
  `botbackground` varchar(255) NOT NULL default '',
  `midbackground` varchar(255) NOT NULL default '',
  `topbackcolor` varchar(255) NOT NULL default '',
  `midbackcolor` varchar(255) NOT NULL default '',
  `botbackcolor` varchar(255) NOT NULL default '',
  `colorscheme` varchar(255) NOT NULL default '',
  `speaklanguage` varchar(60) NOT NULL default '',
  `busymess` text,
  `emailfun` char(1) NOT NULL default 'Y',
  `dbfun` char(1) NOT NULL default 'Y',
  `everythingelse` text,
  `ordering` int(8) NOT NULL default '0',
  `smiles` char(1) NOT NULL default 'Y',
  `visible` int(1) NOT NULL default '1',
  PRIMARY KEY  (`recno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `livehelp_departments`
-- 

INSERT INTO `livehelp_departments` (`recno`, `nameof`, `onlineimage`, `offlineimage`, `layerinvite`, `requirename`, `messageemail`, `leaveamessage`, `opening`, `offline`, `creditline`, `imagemap`, `whilewait`, `timeout`, `leavetxt`, `topframeheight`, `topbackground`, `botbackground`, `midbackground`, `topbackcolor`, `midbackcolor`, `botbackcolor`, `colorscheme`, `speaklanguage`, `busymess`, `emailfun`, `dbfun`, `everythingelse`, `ordering`, `smiles`, `visible`) VALUES 
(1, 'default', 'onoff_images/online3.jpg', 'onoff_images/offline3.jpg', 'dhtmlimage.gif', 'Y', 'sprabhu@i-netsolution.com', 'YES', '<blockquote>Welcome to our Live Help. Please enter your name in the input box below to begin.</blockquote>', '<blockquote>Sorry no operators are currently online to provide Live support at this time.</blockquote>', 'N', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,400,197><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,157,213,257><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=237,157,400,257></MAP>', 'Please be patient while an operator is contacted... ', 150, '<h3><SPAN CLASS=wh>LEAVE A MESSAGE:</SPAN></h3>Please type in your comments/questions in the below box <br> and provide an e-mail address so we can get back to you', 75, 'header_images/customersupport.png', 'bottom_images/chat_bubble.png', 'background_images/chat_bubble_bg.png', '#FFFFFF', '#FFFFFF', '#F0F0F0', 'white', '', '<blockquote>Sorry all operators are currently helping other clients and are unable to provide Live support at this time.<br>Would you like to continue to wait for an operator or leave a message?<br><table width=450><tr><td><a href=livehelp.php?page=livehelp.php&department=[department]&tab=1 target=_top><font size=+1>Continue to wait</font></a></td><td align=center><b>or</b></td><td><a href=leavemessage.php?department=[department]><font size=+1>Leave A Message</a></td></tr></table><blockquote>', 'Y', 'Y', NULL, 0, 'Y', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_identity_daily`
-- 

CREATE TABLE `livehelp_identity_daily` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `isnamed` char(1) NOT NULL default 'N',
  `groupidentity` int(11) NOT NULL default '0',
  `groupusername` int(11) NOT NULL default '0',
  `identity` varchar(100) NOT NULL default '',
  `cookieid` varchar(40) NOT NULL default '',
  `ipaddress` varchar(30) NOT NULL default '',
  `username` varchar(100) NOT NULL default '',
  `dateof` bigint(14) NOT NULL default '0',
  `uservisits` int(10) NOT NULL default '0',
  `seconds` int(10) NOT NULL default '0',
  `useragent` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
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

CREATE TABLE `livehelp_identity_monthly` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `isnamed` char(1) NOT NULL default 'N',
  `groupidentity` int(11) NOT NULL default '0',
  `groupusername` int(11) NOT NULL default '0',
  `identity` varchar(100) NOT NULL default '',
  `cookieid` varchar(40) NOT NULL default '',
  `ipaddress` varchar(30) NOT NULL default '',
  `username` varchar(100) NOT NULL default '',
  `dateof` bigint(14) NOT NULL default '0',
  `uservisits` int(10) NOT NULL default '0',
  `seconds` int(10) NOT NULL default '0',
  `useragent` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
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

CREATE TABLE `livehelp_keywords_daily` (
  `recno` int(11) NOT NULL auto_increment,
  `parentrec` int(11) unsigned NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `pageurl` varchar(255) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `dateof` int(8) NOT NULL default '0',
  `levelvisits` int(11) unsigned NOT NULL default '0',
  `directvisits` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`recno`),
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

CREATE TABLE `livehelp_keywords_monthly` (
  `recno` int(11) NOT NULL auto_increment,
  `parentrec` int(11) unsigned NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `pageurl` varchar(255) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `dateof` int(8) NOT NULL default '0',
  `levelvisits` int(11) unsigned NOT NULL default '0',
  `directvisits` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`recno`),
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

CREATE TABLE `livehelp_layerinvites` (
  `layerid` int(10) NOT NULL default '0',
  `name` varchar(60) NOT NULL default '',
  `imagename` varchar(60) NOT NULL default '',
  `imagemap` text,
  `department` varchar(60) NOT NULL default '',
  `user` int(10) NOT NULL default '0',
  PRIMARY KEY  (`layerid`)
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

CREATE TABLE `livehelp_leavemessage` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(255) NOT NULL default '',
  `subject` varchar(200) NOT NULL default '',
  `department` int(11) unsigned NOT NULL default '0',
  `dateof` bigint(14) NOT NULL default '0',
  `sessiondata` text,
  `deliminated` text,
  PRIMARY KEY  (`id`),
  KEY `department` (`department`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `livehelp_leavemessage`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_messages`
-- 

CREATE TABLE `livehelp_messages` (
  `id_num` int(10) NOT NULL auto_increment,
  `message` text,
  `channel` int(10) NOT NULL default '0',
  `timeof` bigint(14) NOT NULL default '0',
  `saidfrom` int(10) NOT NULL default '0',
  `saidto` int(10) NOT NULL default '0',
  `typeof` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id_num`),
  KEY `channel` (`channel`),
  KEY `timeof` (`timeof`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- 
-- Dumping data for table `livehelp_messages`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_modules`
-- 

CREATE TABLE `livehelp_modules` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL default '',
  `path` varchar(255) NOT NULL default '',
  `adminpath` varchar(255) NOT NULL default '',
  `query_string` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
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

CREATE TABLE `livehelp_modules_dep` (
  `rec` int(10) NOT NULL auto_increment,
  `departmentid` int(10) NOT NULL default '0',
  `modid` int(10) NOT NULL default '0',
  `ordernum` int(8) NOT NULL default '0',
  `isactive` char(1) NOT NULL default 'N',
  `defaultset` char(1) NOT NULL default '',
  PRIMARY KEY  (`rec`)
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

CREATE TABLE `livehelp_operator_channels` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10) NOT NULL default '0',
  `channel` int(10) NOT NULL default '0',
  `userid` int(10) NOT NULL default '0',
  `statusof` char(1) NOT NULL default '',
  `startdate` bigint(8) NOT NULL default '0',
  `bgcolor` varchar(10) NOT NULL default '000000',
  `txtcolor` varchar(10) NOT NULL default '000000',
  `channelcolor` varchar(10) NOT NULL default 'F7FAFF',
  `txtcolor_alt` varchar(10) NOT NULL default '000000',
  PRIMARY KEY  (`id`),
  KEY `channel` (`channel`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `livehelp_operator_channels`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_operator_departments`
-- 

CREATE TABLE `livehelp_operator_departments` (
  `recno` int(10) NOT NULL auto_increment,
  `user_id` int(10) NOT NULL default '0',
  `department` int(10) NOT NULL default '0',
  `extra` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`recno`),
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

CREATE TABLE `livehelp_operator_history` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `opid` int(11) unsigned NOT NULL default '0',
  `action` varchar(60) NOT NULL default '',
  `dateof` bigint(14) NOT NULL default '0',
  `sessionid` varchar(40) NOT NULL default '',
  `transcriptid` int(10) NOT NULL default '0',
  `totaltime` int(10) NOT NULL default '0',
  `channel` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `opid` (`opid`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
(36, 1, 'Stopped Chatting', 20090312105928, 'abb382a750a0007ab3ae3d2e7443c902', 0, 13, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_paths_firsts`
-- 

CREATE TABLE `livehelp_paths_firsts` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `visit_recno` int(11) unsigned NOT NULL default '0',
  `exit_recno` int(11) unsigned NOT NULL default '0',
  `dateof` int(8) NOT NULL default '0',
  `visits` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `visit_recno` (`visit_recno`,`dateof`,`visits`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `livehelp_paths_firsts`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_paths_monthly`
-- 

CREATE TABLE `livehelp_paths_monthly` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `visit_recno` int(11) unsigned NOT NULL default '0',
  `exit_recno` int(11) unsigned NOT NULL default '0',
  `dateof` int(8) NOT NULL default '0',
  `visits` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `visit_recno` (`visit_recno`,`dateof`,`visits`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `livehelp_paths_monthly`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_qa`
-- 

CREATE TABLE `livehelp_qa` (
  `recno` int(10) NOT NULL auto_increment,
  `parent` int(10) NOT NULL default '0',
  `question` text,
  `typeof` varchar(10) NOT NULL default '',
  `status` varchar(20) NOT NULL default '',
  `username` varchar(60) NOT NULL default '',
  `ordernum` int(10) NOT NULL default '0',
  PRIMARY KEY  (`recno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `livehelp_qa`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_questions`
-- 

CREATE TABLE `livehelp_questions` (
  `id` int(10) NOT NULL auto_increment,
  `department` int(10) NOT NULL default '0',
  `ordering` int(8) NOT NULL default '0',
  `headertext` text,
  `fieldtype` varchar(30) NOT NULL default '',
  `options` text,
  `flags` varchar(60) NOT NULL default '',
  `module` varchar(60) NOT NULL default '',
  `required` char(1) NOT NULL default 'N',
  PRIMARY KEY  (`id`),
  KEY `department` (`department`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `livehelp_questions`
-- 

INSERT INTO `livehelp_questions` (`id`, `department`, `ordering`, `headertext`, `fieldtype`, `options`, `flags`, `module`, `required`) VALUES 
(1, 1, 0, 'E-mail:', 'email', '', '', 'leavemessage', 'Y'),
(2, 1, 0, 'Question:', 'textarea', '', '', 'leavemessage', 'N'),
(3, 1, 0, 'Name', 'username', '', '', 'livehelp', 'N'),
(5, 1, 1, 'Question', 'textarea', '', '', 'livehelp', 'N');

-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_quick`
-- 

CREATE TABLE `livehelp_quick` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `typeof` varchar(30) NOT NULL default '',
  `message` text,
  `visiblity` varchar(20) NOT NULL default '',
  `department` varchar(60) NOT NULL default '0',
  `user` int(10) NOT NULL default '0',
  `ishtml` varchar(3) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `livehelp_quick`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_referers_daily`
-- 

CREATE TABLE `livehelp_referers_daily` (
  `recno` int(11) NOT NULL auto_increment,
  `pageurl` varchar(255) NOT NULL default '0',
  `dateof` int(8) NOT NULL default '0',
  `levelvisits` int(11) unsigned NOT NULL default '0',
  `directvisits` int(11) unsigned NOT NULL default '0',
  `parentrec` int(11) unsigned NOT NULL default '0',
  `level` int(10) NOT NULL default '0',
  PRIMARY KEY  (`recno`),
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

CREATE TABLE `livehelp_referers_monthly` (
  `recno` int(11) NOT NULL auto_increment,
  `pageurl` varchar(255) NOT NULL default '0',
  `dateof` int(8) NOT NULL default '0',
  `levelvisits` int(11) unsigned NOT NULL default '0',
  `directvisits` int(11) unsigned NOT NULL default '0',
  `parentrec` int(11) unsigned NOT NULL default '0',
  `level` int(10) NOT NULL default '0',
  PRIMARY KEY  (`recno`),
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

CREATE TABLE `livehelp_sessions` (
  `session_id` varchar(100) NOT NULL default '',
  `session_data` text NOT NULL,
  `expires` int(11) NOT NULL default '0',
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `livehelp_sessions`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_smilies`
-- 

CREATE TABLE `livehelp_smilies` (
  `smilies_id` smallint(5) unsigned NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `smile_url` varchar(100) default NULL,
  `emoticon` varchar(75) default NULL,
  PRIMARY KEY  (`smilies_id`)
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

CREATE TABLE `livehelp_transcripts` (
  `recno` int(10) NOT NULL auto_increment,
  `who` varchar(100) NOT NULL default '',
  `endtime` bigint(14) default NULL,
  `transcript` text,
  `sessionid` varchar(40) NOT NULL default '',
  `sessiondata` text,
  `department` int(10) NOT NULL default '0',
  `email` varchar(100) NOT NULL default '',
  `starttime` bigint(14) NOT NULL default '0',
  `duration` int(11) unsigned NOT NULL default '0',
  `operators` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`recno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `livehelp_transcripts`
-- 

INSERT INTO `livehelp_transcripts` (`recno`, `who`, `endtime`, `transcript`, `sessionid`, `sessiondata`, `department`, `email`, `starttime`, `duration`, `operators`) VALUES 
(1, 'prabhu', 20090312070438, ' <b>prabhu : </b> nullstring <br> <b>prabhu : </b> <b>Question</b><br>test?<br> <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br> <b>prabhu : </b> hi <br> <b>prabhu : </b> i need help <br> <b>admin : </b> yes tell me <br> <b>prabhu : </b> <img src=http://localhost/prabhu/test/craftysyntax/chat_smiles/happybeer.gif> <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>test?<br></font>', 1, '', 20011130000000, 0, 'X1X'),
(2, 'prabhu', 20090312071108, ' <b>prabhu : </b> <b>Question</b><br>test?<br> <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br> <b>admin : </b> nullstring <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>test?<br></font>', 1, '', 20090312071035, 33, 'X1X'),
(3, 'prabhu', 20090312073211, ' <b>prabhu : </b> <b>Question</b><br>sfdsf <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br> <b>prabhu : </b> i  love u <br> <b>admin : </b> mee too <br> <b>admin : </b> nullstring <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>sfdsf</font>', 1, '', 20090312073059, 72, 'X1X'),
(4, 'EQWEWEWQ', 20090312074825, ' <b>EQWEWEWQ : </b> <b>Question</b><br>EWQE <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> DSADSAD <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>EWQE</font>', 1, '', 20090312074818, 7, 'X1X'),
(5, 'prabhu', 20090312105927, ' <b>prabhu : </b> <b>Question</b><br>hi <br> <b>admin : </b> How may I help You? <br> <b>admin : </b> hi <br>', '39468c845a73b6d90650ebfe927270b0', '<table width=100%><tr><td colspan=2 bgcolor=DDDDDD>User Information</td></tr><tr><td align=left><b>Referer:</b> <a href=http:// target=_blank>http://</a><br><b>Status:</b>chat<br><b>Departments</b> default<br><b>E-mail :</b><br><b>SessionID :</b>39468c845a73b6d90650ebfe927270b0<br><b>identity :</b>127.-cslhVISITOR<br><b>HostName:</b>host_lookup_not_enabled<br><b>User Agent :</b>mozilla/5.0 (windows; u; windows nt 5.1; en-us; rv:1.9.1.2) gecko/20090729 firefox/3.5.2<br><b>Browser :</b>firefox<br><b>Browser_Version :</b>3.5.2<br><b>Ip :</b>127.0.0.1<br><b>Cookied :</b>Y<br><b>New Session :</b>N<br><b> Question:</b> <br><font color=000000>hi</font>', 1, '', 20090312105913, 14, 'X1X');

-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_users`
-- 

CREATE TABLE `livehelp_users` (
  `user_id` int(10) NOT NULL auto_increment,
  `lastaction` bigint(14) default '0',
  `username` varchar(30) NOT NULL default '',
  `password` varchar(60) NOT NULL default '',
  `isonline` char(1) NOT NULL default '',
  `isoperator` char(1) NOT NULL default 'N',
  `onchannel` int(10) NOT NULL default '0',
  `isadmin` char(1) NOT NULL default 'N',
  `department` int(5) NOT NULL default '0',
  `identity` varchar(255) NOT NULL default '',
  `status` varchar(30) NOT NULL default '',
  `isnamed` char(1) NOT NULL default 'N',
  `showedup` bigint(14) default NULL,
  `email` varchar(60) NOT NULL default '',
  `camefrom` varchar(255) NOT NULL default '',
  `show_arrival` char(1) NOT NULL default 'N',
  `user_alert` char(1) NOT NULL default '',
  `auto_invite` char(1) NOT NULL default 'N',
  `istyping` char(1) NOT NULL default '3',
  `visits` int(8) NOT NULL default '0',
  `jsrn` int(5) NOT NULL default '0',
  `hostname` varchar(255) NOT NULL default '',
  `useragent` varchar(255) NOT NULL default '',
  `ipaddress` varchar(255) NOT NULL default '',
  `sessionid` varchar(40) NOT NULL default '',
  `typing_alert` char(1) NOT NULL default 'N',
  `authenticated` char(1) NOT NULL default '',
  `cookied` char(1) NOT NULL default 'N',
  `sessiondata` text,
  `expires` bigint(14) NOT NULL default '0',
  `greeting` text,
  `photo` varchar(255) NOT NULL default '',
  `chataction` bigint(14) default '0',
  `new_session` char(1) NOT NULL default 'Y',
  `showtype` int(10) NOT NULL default '1',
  `chattype` char(1) NOT NULL default 'Y',
  `externalchats` varchar(255) NOT NULL default '',
  `layerinvite` int(10) NOT NULL default '0',
  `askquestions` char(1) NOT NULL default 'Y',
  `showvisitors` char(1) NOT NULL default 'N',
  `cookieid` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `livehelp_users`
-- 

INSERT INTO `livehelp_users` (`user_id`, `lastaction`, `username`, `password`, `isonline`, `isoperator`, `onchannel`, `isadmin`, `department`, `identity`, `status`, `isnamed`, `showedup`, `email`, `camefrom`, `show_arrival`, `user_alert`, `auto_invite`, `istyping`, `visits`, `jsrn`, `hostname`, `useragent`, `ipaddress`, `sessionid`, `typing_alert`, `authenticated`, `cookied`, `sessiondata`, `expires`, `greeting`, `photo`, `chataction`, `new_session`, `showtype`, `chattype`, `externalchats`, `layerinvite`, `askquestions`, `showvisitors`, `cookieid`) VALUES 
(1, 20090312112723, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Y', 'Y', 0, 'Y', 0, '127.-cslhOPERATOR', 'chat', 'Y', 20090312112651, 'sprabhu@i-netsolution.com', '', 'N', 'N', 'N', '3', 2, 1, 'host_lookup_not_enabled', '', '127.0.0.1', 'abb382a750a0007ab3ae3d2e7443c902', '', 'Y', 'Y', NULL, 20090312114723, 'How may I help You?', '', 0, 'N', 1, 'x', '', 0, 'Y', 'N', '375207518013050ceff44e8e139d4639');

-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_visit_track`
-- 

CREATE TABLE `livehelp_visit_track` (
  `recno` int(10) NOT NULL auto_increment,
  `sessionid` varchar(40) NOT NULL default '0',
  `location` varchar(255) NOT NULL default '',
  `page` bigint(14) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `whendone` bigint(14) NOT NULL default '0',
  `referrer` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`recno`),
  KEY `sessionid` (`sessionid`),
  KEY `location` (`location`),
  KEY `page` (`page`),
  KEY `whendone` (`whendone`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `livehelp_visit_track`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `livehelp_visits_daily`
-- 

CREATE TABLE `livehelp_visits_daily` (
  `recno` int(11) NOT NULL auto_increment,
  `pageurl` varchar(255) NOT NULL default '0',
  `dateof` int(8) NOT NULL default '0',
  `levelvisits` int(11) unsigned NOT NULL default '0',
  `directvisits` int(11) unsigned NOT NULL default '0',
  `parentrec` int(11) unsigned NOT NULL default '0',
  `level` int(10) NOT NULL default '0',
  PRIMARY KEY  (`recno`),
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

CREATE TABLE `livehelp_visits_monthly` (
  `recno` int(11) NOT NULL auto_increment,
  `pageurl` varchar(255) NOT NULL default '0',
  `dateof` int(8) NOT NULL default '0',
  `levelvisits` int(11) unsigned NOT NULL default '0',
  `directvisits` int(11) unsigned NOT NULL default '0',
  `parentrec` int(11) unsigned NOT NULL default '0',
  `level` int(10) NOT NULL default '0',
  PRIMARY KEY  (`recno`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `livehelp_visits_monthly`
-- 

