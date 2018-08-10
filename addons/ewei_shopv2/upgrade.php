<?php
$sql="CREATE TABLE IF NOT EXISTS `ims_ewei_shop_bargain_actor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `now_price` decimal(9,2) NOT NULL,
  `created_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `bargain_times` int(10) NOT NULL,
  `openid` varchar(50) NOT NULL DEFAULT '',
  `nickname` varchar(20) NOT NULL,
  `head_image` varchar(200) NOT NULL,
  `bargain_price` decimal(9,2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `account_id` int(11) NOT NULL,
  `initiate` tinyint(4) NOT NULL DEFAULT '0',
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_openid` (`openid`),
  KEY `idx_account_id` (`account_id`),
  KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_bargain_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actor_id` int(11) NOT NULL,
  `bargain_price` decimal(9,2) NOT NULL,
  `openid` varchar(50) NOT NULL DEFAULT '',
  `nickname` varchar(20) NOT NULL,
  `head_image` varchar(200) NOT NULL,
  `bargain_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_openid` (`openid`),
  KEY `idx_actor_id` (`actor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_commission_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `levelname` varchar(50) DEFAULT '',
  `commission1` decimal(10,2) DEFAULT '0.00',
  `commission2` decimal(10,2) DEFAULT '0.00',
  `commission3` decimal(10,2) DEFAULT '0.00',
  `commissionmoney` decimal(10,2) DEFAULT '0.00',
  `ordermoney` decimal(10,2) DEFAULT '0.00',
  `downcount` int(11) DEFAULT NULL,
  `ordercount` int(11) DEFAULT '0',
  `withdraw` decimal(10,2) DEFAULT '0.00',
  `repurchase` decimal(10,2) DEFAULT '0.00',
  `goodsids` varchar(1000) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_creditshop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `displayorder` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `cate` int(11) DEFAULT '0',
  `thumb` varchar(255) DEFAULT '',
  `price` decimal(10,2) DEFAULT '0.00',
  `type` tinyint(3) DEFAULT '0',
  `credit` int(11) DEFAULT '0',
  `money` decimal(10,2) DEFAULT '0.00',
  `total` int(11) DEFAULT '0',
  `totalday` int(11) DEFAULT '0',
  `chance` int(11) DEFAULT '0',
  `chanceday` int(11) DEFAULT '0',
  `detail` text,
  `rate1` int(11) DEFAULT '0',
  `rate2` int(11) DEFAULT '0',
  `endtime` int(11) DEFAULT '0',
  `joins` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  `status` tinyint(3) DEFAULT '0',
  `deleted` tinyint(3) DEFAULT '0',
  `showlevels` text,
  `buylevels` text,
  `showgroups` text,
  `buygroups` text,
  `vip` tinyint(3) DEFAULT '0',
  `istop` tinyint(3) DEFAULT '0',
  `isrecommand` tinyint(3) DEFAULT '0',
  `istime` tinyint(3) DEFAULT '0',
  `timestart` int(11) DEFAULT '0',
  `timeend` int(11) DEFAULT '0',
  `share_title` varchar(255) DEFAULT '',
  `share_icon` varchar(255) DEFAULT '',
  `share_desc` varchar(500) DEFAULT '',
  `followneed` tinyint(3) DEFAULT '0',
  `followtext` varchar(255) DEFAULT '',
  `subtitle` varchar(255) DEFAULT '',
  `subdetail` text,
  `noticedetail` text,
  `usedetail` varchar(255) DEFAULT '',
  `goodsdetail` text,
  `isendtime` tinyint(3) DEFAULT '0',
  `usecredit2` tinyint(3) DEFAULT '0',
  `area` varchar(255) DEFAULT '',
  `dispatch` decimal(10,2) DEFAULT '0.00',
  `storeids` text,
  `noticeopenid` varchar(255) DEFAULT '',
  `noticetype` tinyint(3) DEFAULT '0',
  `isverify` tinyint(3) DEFAULT '0',
  `goodstype` tinyint(3) DEFAULT '0',
  `couponid` int(11) DEFAULT '0',
  `goodsid` int(11) DEFAULT '0',
  `merchid` int(11) NOT NULL DEFAULT '0',
  `productprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `mincredit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `minmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `maxcredit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `maxmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `dispatchtype` tinyint(3) NOT NULL DEFAULT '0',
  `dispatchid` int(11) NOT NULL DEFAULT '0',
  `verifytype` tinyint(3) NOT NULL DEFAULT '0',
  `verifynum` int(11) NOT NULL DEFAULT '0',
  `grant1` decimal(10,2) NOT NULL DEFAULT '0.00',
  `grant2` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goodssn` varchar(255) NOT NULL,
  `productsn` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `showtotal` tinyint(3) NOT NULL,
  `totalcnf` tinyint(3) NOT NULL DEFAULT '0',
  `usetime` int(11) NOT NULL DEFAULT '0',
  `hasoption` tinyint(3) NOT NULL DEFAULT '0',
  `noticedetailshow` tinyint(3) NOT NULL DEFAULT '0',
  `detailshow` tinyint(3) NOT NULL DEFAULT '0',
  `packetmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplusmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `packetlimit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `packettype` tinyint(3) NOT NULL DEFAULT '0',
  `minpacketmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `packettotal` int(11) NOT NULL DEFAULT '0',
  `packetsurplus` int(11) NOT NULL DEFAULT '0',
  `maxpacketmoney` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_type` (`type`),
  KEY `idx_endtime` (`endtime`),
  KEY `idx_createtime` (`createtime`),
  KEY `idx_status` (`status`),
  KEY `idx_displayorder` (`displayorder`),
  KEY `idx_deleted` (`deleted`),
  KEY `idx_istop` (`istop`),
  KEY `idx_isrecommand` (`isrecommand`),
  KEY `idx_istime` (`istime`),
  KEY `idx_timestart` (`timestart`),
  KEY `idx_timeend` (`timeend`),
  KEY `idx_goodstype` (`goodstype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `type` int(2) NOT NULL DEFAULT '0',
  `endtime` datetime NOT NULL DEFAULT '2016-10-01 00:00:00',
  `mode` int(2) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0',
  `max` int(2) NOT NULL DEFAULT '0',
  `value` decimal(10,2) NOT NULL DEFAULT '0.00',
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `starttime` datetime NOT NULL DEFAULT '2016-10-01 00:00:00',
  `goods` text,
  `score` int(11) NOT NULL DEFAULT '0',
  `coupon` text,
  `use` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `red` decimal(10,2) NOT NULL DEFAULT '0.00',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `balance_left` decimal(10,2) NOT NULL DEFAULT '0.00',
  `balance_right` decimal(10,2) NOT NULL DEFAULT '0.00',
  `red_left` decimal(10,2) NOT NULL DEFAULT '0.00',
  `red_right` decimal(10,2) NOT NULL DEFAULT '0.00',
  `score_left` int(11) NOT NULL DEFAULT '0',
  `score_right` int(11) NOT NULL DEFAULT '0',
  `balance_type` int(11) NOT NULL,
  `red_type` int(11) NOT NULL,
  `score_type` int(11) NOT NULL,
  `title_reply` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `rule` text NOT NULL,
  `coupon_type` varchar(255) DEFAULT NULL,
  `basic_content` varchar(500) NOT NULL DEFAULT '',
  `reply_type` int(11) NOT NULL DEFAULT '0',
  `code_type` int(11) NOT NULL DEFAULT '0',
  `binding` int(11) NOT NULL DEFAULT '0',
  `showcount` int(11) DEFAULT '0',
  `postage` decimal(10,2) DEFAULT '0.00',
  `postage_type` int(11) DEFAULT '0',
  `banner` varchar(800) DEFAULT '',
  `keyword_reply` int(11) DEFAULT '0',
  `reply_status` int(11) DEFAULT '1',
  `reply_keyword` varchar(255) DEFAULT '',
  `input_banner` varchar(255) DEFAULT '',
  `diypage` int(11) NOT NULL DEFAULT '0',
  `sendname` varchar(255) DEFAULT '',
  `wishing` varchar(255) DEFAULT '',
  `actname` varchar(255) DEFAULT '',
  `remark` varchar(255) DEFAULT '',
  `repeat` tinyint(1) NOT NULL,
  `koulingstart` varchar(255) NOT NULL DEFAULT '',
  `koulingend` varchar(255) NOT NULL DEFAULT '',
  `kouling` tinyint(1) NOT NULL DEFAULT '0',
  `chufa` varchar(255) NOT NULL DEFAULT '',
  `chufaend` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_exchange_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `freeze` int(11) NOT NULL DEFAULT '0',
  `mistake` int(11) NOT NULL DEFAULT '0',
  `grouplimit` int(11) NOT NULL DEFAULT '0',
  `alllimit` int(11) NOT NULL DEFAULT '0',
  `no_qrimg` tinyint(3) NOT NULL,
  `rule` text,
  PRIMARY KEY (`id`,`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `goodsids` text NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `merchid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_enabled` (`enabled`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(10) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `thumb` varchar(60) DEFAULT '',
  `productprice` decimal(10,2) DEFAULT '0.00',
  `marketprice` decimal(10,2) DEFAULT '0.00',
  `costprice` decimal(10,2) DEFAULT '0.00',
  `stock` int(11) DEFAULT '0',
  `weight` decimal(10,2) DEFAULT '0.00',
  `displayorder` int(11) DEFAULT '0',
  `specs` text,
  `skuId` varchar(255) DEFAULT '',
  `goodssn` varchar(255) DEFAULT '',
  `productsn` varchar(255) DEFAULT '',
  `virtual` int(11) DEFAULT '0',
  `exchange_stock` int(11) DEFAULT '0',
  `exchange_postage` decimal(10,2) NOT NULL DEFAULT '0.00',
  `presellprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `day` int(3) NOT NULL,
  `allfullbackprice` decimal(10,2) NOT NULL,
  `fullbackprice` decimal(10,2) NOT NULL,
  `allfullbackratio` decimal(10,2) DEFAULT NULL,
  `fullbackratio` decimal(10,2) DEFAULT NULL,
  `isfullback` tinyint(3) NOT NULL,
  `islive` int(11) NOT NULL,
  `liveprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cycelbuy_periodic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_displayorder` (`displayorder`),
  KEY `idx_productsn` (`productsn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `goodsid` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `description` varchar(1000) DEFAULT '',
  `displaytype` tinyint(3) DEFAULT '0',
  `content` text,
  `displayorder` int(11) DEFAULT '0',
  `propId` varchar(255) DEFAULT '',
  `iscycelbuy` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_goodsid` (`goodsid`),
  KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_goods_spec_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `specid` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `show` int(11) DEFAULT '0',
  `displayorder` int(11) DEFAULT '0',
  `valueId` varchar(255) DEFAULT '',
  `virtual` int(11) DEFAULT '0',
  `cycelbuy_periodic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_specid` (`specid`),
  KEY `idx_show` (`show`),
  KEY `idx_displayorder` (`displayorder`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `displayorder` tinyint(3) unsigned DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '1',
  `advimg` varchar(255) DEFAULT '',
  `advurl` varchar(500) DEFAULT '',
  `isrecommand` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_displayorder` (`displayorder`),
  KEY `idx_enabled` (`enabled`),
  KEY `idx_name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `displayorder` int(11) unsigned DEFAULT '0',
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `category` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT '0',
  `price` decimal(10,2) DEFAULT '0.00',
  `groupsprice` decimal(10,2) DEFAULT '0.00',
  `singleprice` decimal(10,2) DEFAULT '0.00',
  `goodsnum` int(11) NOT NULL DEFAULT '1',
  `units` varchar(255) NOT NULL DEFAULT '件',
  `freight` decimal(10,2) DEFAULT '0.00',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `groupnum` int(10) NOT NULL DEFAULT '0',
  `sales` int(10) NOT NULL DEFAULT '0',
  `thumb` varchar(255) DEFAULT '',
  `description` varchar(1000) DEFAULT NULL,
  `content` text,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `ishot` tinyint(3) NOT NULL DEFAULT '0',
  `deleted` tinyint(3) NOT NULL DEFAULT '0',
  `goodsid` int(11) NOT NULL DEFAULT '0',
  `followneed` tinyint(2) NOT NULL DEFAULT '0',
  `followtext` varchar(255) DEFAULT NULL,
  `share_title` varchar(255) DEFAULT NULL,
  `share_icon` varchar(255) DEFAULT NULL,
  `share_desc` varchar(500) DEFAULT NULL,
  `goodssn` varchar(50) DEFAULT NULL,
  `productsn` varchar(50) DEFAULT NULL,
  `showstock` tinyint(2) NOT NULL,
  `purchaselimit` int(11) NOT NULL DEFAULT '0',
  `single` tinyint(2) NOT NULL DEFAULT '0',
  `dispatchtype` tinyint(2) NOT NULL,
  `dispatchid` int(11) NOT NULL,
  `isindex` tinyint(3) NOT NULL DEFAULT '0',
  `followurl` varchar(255) DEFAULT NULL,
  `deduct` decimal(10,2) NOT NULL DEFAULT '0.00',
  `rights` tinyint(2) NOT NULL DEFAULT '1',
  `thumb_url` text,
  `gid` int(11) DEFAULT '0',
  `discount` tinyint(3) DEFAULT '0',
  `headstype` tinyint(3) DEFAULT NULL,
  `headsmoney` decimal(10,2) DEFAULT '0.00',
  `headsdiscount` int(11) DEFAULT '0',
  `isdiscount` tinyint(3) DEFAULT '0',
  `isverify` tinyint(3) DEFAULT '0',
  `verifytype` tinyint(3) DEFAULT '0',
  `verifynum` int(11) DEFAULT '0',
  `storeids` text,
  `merchid` int(11) DEFAULT '0',
  `shorttitle` varchar(255) DEFAULT '',
  `teamnum` int(11) DEFAULT '0',
  `more_spec` tinyint(1) DEFAULT NULL,
  `is_ladder` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_type` (`category`),
  KEY `idx_createtime` (`createtime`),
  KEY `idx_status` (`status`),
  KEY `idx_istop` (`isindex`),
  KEY `idx_category` (`category`),
  KEY `idx_dispatchid` (`dispatchid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_goods_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `goodsid` int(11) DEFAULT NULL,
  `groups_goods_id` int(255) DEFAULT NULL,
  `goods_option_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `marketprice` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `single_price` decimal(10,2) DEFAULT NULL,
  `specs` varchar(255) DEFAULT NULL,
  `stock` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_ladder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `ladder_num` int(11) DEFAULT NULL,
  `ladder_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `openid` varchar(45) NOT NULL,
  `orderno` varchar(45) NOT NULL,
  `groupnum` int(11) NOT NULL,
  `paytime` int(11) NOT NULL,
  `price` decimal(11,2) DEFAULT '0.00',
  `freight` decimal(11,2) DEFAULT '0.00',
  `status` int(9) NOT NULL,
  `pay_type` varchar(45) DEFAULT NULL,
  `goodid` int(11) NOT NULL,
  `teamid` int(11) NOT NULL,
  `is_team` int(2) NOT NULL,
  `heads` int(11) DEFAULT '0',
  `starttime` int(11) NOT NULL,
  `endtime` int(45) NOT NULL,
  `createtime` int(11) NOT NULL,
  `success` int(2) NOT NULL DEFAULT '0',
  `delete` int(2) NOT NULL DEFAULT '0',
  `credit` int(11) DEFAULT '0',
  `creditmoney` decimal(11,2) DEFAULT '0.00',
  `dispatchid` int(11) DEFAULT NULL,
  `addressid` int(11) NOT NULL DEFAULT '0',
  `address` varchar(1000) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT '0.00',
  `canceltime` int(11) NOT NULL DEFAULT '0',
  `finishtime` int(11) NOT NULL DEFAULT '0',
  `refundid` int(11) NOT NULL DEFAULT '0',
  `refundstate` tinyint(2) NOT NULL DEFAULT '0',
  `refundtime` int(11) NOT NULL DEFAULT '0',
  `express` varchar(45) DEFAULT NULL,
  `expresscom` varchar(100) DEFAULT NULL,
  `expresssn` varchar(45) DEFAULT NULL,
  `sendtime` int(45) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `remarkclose` text,
  `remarksend` text,
  `message` varchar(255) DEFAULT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0',
  `realname` varchar(20) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `isverify` tinyint(3) DEFAULT '0',
  `verifytype` tinyint(3) DEFAULT '0',
  `verifycode` varchar(45) DEFAULT '0',
  `verifynum` int(11) DEFAULT '0',
  `printstate` int(11) NOT NULL DEFAULT '0',
  `printstate2` int(11) NOT NULL DEFAULT '0',
  `apppay` tinyint(3) NOT NULL DEFAULT '0',
  `isborrow` tinyint(1) DEFAULT '0',
  `borrowopenid` varchar(50) DEFAULT '',
  `source` tinyint(1) DEFAULT NULL,
  `ladder_id` tinyint(1) DEFAULT NULL,
  `is_ladder` tinyint(1) DEFAULT NULL,
  `more_spec` tinyint(1) DEFAULT NULL,
  `wxapp_prepay_id` varchar(255) DEFAULT NULL,
  `cancel_reason` varchar(255) DEFAULT NULL,
  `goods_price` decimal(10,2) DEFAULT NULL,
  `goods_option_id` int(11) DEFAULT NULL,
  `specs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_orderno` (`orderno`),
  KEY `idx_paytime` (`paytime`),
  KEY `idx_pay_type` (`pay_type`),
  KEY `idx_teamid` (`teamid`),
  KEY `idx_verifycode` (`verifycode`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_order_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `groups_goods_id` int(11) DEFAULT NULL,
  `groups_goods_option_id` int(11) DEFAULT NULL,
  `groups_order_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `option_name` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_order_refund` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `openid` varchar(45) NOT NULL DEFAULT '',
  `orderid` int(11) NOT NULL DEFAULT '0',
  `refundno` varchar(45) NOT NULL DEFAULT '0',
  `refundstatus` tinyint(3) NOT NULL DEFAULT '0',
  `refundaddressid` int(11) NOT NULL DEFAULT '0',
  `refundaddress` varchar(1000) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `applytime` varchar(45) NOT NULL DEFAULT '0',
  `applycredit` int(11) NOT NULL DEFAULT '0',
  `applyprice` decimal(11,2) NOT NULL DEFAULT '0.00',
  `reply` text NOT NULL,
  `refundtype` varchar(45) NOT NULL,
  `rtype` int(3) NOT NULL DEFAULT '0',
  `refundtime` varchar(45) NOT NULL,
  `endtime` varchar(45) NOT NULL DEFAULT '0',
  `message` varchar(255) NOT NULL,
  `operatetime` varchar(45) NOT NULL DEFAULT '0',
  `realcredit` int(11) NOT NULL,
  `realmoney` decimal(11,2) NOT NULL,
  `express` varchar(45) NOT NULL,
  `expresscom` varchar(100) NOT NULL,
  `expresssn` varchar(45) NOT NULL,
  `sendtime` varchar(45) NOT NULL DEFAULT '0',
  `returntime` int(11) NOT NULL DEFAULT '0',
  `rexpress` varchar(45) NOT NULL,
  `rexpresscom` varchar(100) NOT NULL,
  `rexpresssn` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `openid` (`openid`),
  KEY `orderid` (`orderid`),
  KEY `refundno` (`refundno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_groups_paylog` (
  `plid` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `openid` varchar(40) NOT NULL,
  `tid` varchar(64) NOT NULL,
  `credit` int(10) NOT NULL DEFAULT '0',
  `creditmoney` decimal(10,2) NOT NULL,
  `fee` decimal(10,2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `module` varchar(50) NOT NULL,
  `tag` varchar(2000) NOT NULL,
  `is_usecard` tinyint(3) unsigned NOT NULL,
  `card_type` tinyint(3) unsigned NOT NULL,
  `card_id` varchar(50) DEFAULT NULL,
  `card_fee` decimal(10,2) DEFAULT NULL,
  `encrypt_code` varchar(100) DEFAULT NULL,
  `uniontid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`plid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_tid` (`tid`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `uniontid` (`uniontid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_live` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `merchid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `livetype` tinyint(3) NOT NULL DEFAULT '0',
  `liveidentity` varchar(50) NOT NULL,
  `screen` tinyint(3) NOT NULL DEFAULT '0',
  `goodsid` text NOT NULL,
  `category` int(11) NOT NULL DEFAULT '0',
  `url` varchar(1000) NOT NULL,
  `thumb` varchar(1000) NOT NULL,
  `hot` tinyint(3) NOT NULL DEFAULT '0',
  `recommend` tinyint(3) NOT NULL DEFAULT '0',
  `living` tinyint(3) NOT NULL DEFAULT '0',
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `displayorder` int(11) NOT NULL DEFAULT '0',
  `livetime` int(10) NOT NULL DEFAULT '0',
  `lastlivetime` int(11) NOT NULL DEFAULT '0',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `introduce` text NOT NULL,
  `packetmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `packettotal` int(11) NOT NULL DEFAULT '0',
  `packetprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `packetdes` varchar(255) NOT NULL,
  `couponid` varchar(255) NOT NULL,
  `share_title` varchar(255) NOT NULL,
  `share_icon` varchar(1000) NOT NULL,
  `share_desc` text NOT NULL,
  `share_url` varchar(1000) NOT NULL DEFAULT '',
  `subscribe` int(11) NOT NULL DEFAULT '0',
  `subscribenotice` tinyint(3) NOT NULL DEFAULT '0',
  `visit` int(11) NOT NULL DEFAULT '0',
  `video` varchar(1000) NOT NULL DEFAULT '',
  `covertype` tinyint(3) NOT NULL DEFAULT '0',
  `cover` varchar(1000) NOT NULL DEFAULT '',
  `iscoupon` tinyint(3) NOT NULL DEFAULT '0',
  `nestable` text NOT NULL,
  `tabs` text NOT NULL,
  `invitation_id` int(11) NOT NULL DEFAULT '0',
  `showlevels` varchar(255) NOT NULL,
  `showgroups` varchar(255) NOT NULL,
  `showcommission` varchar(255) NOT NULL,
  `jurisdiction_url` varchar(1000) NOT NULL,
  `jurisdictionurl_show` tinyint(3) NOT NULL DEFAULT '0',
  `notice` varchar(255) NOT NULL,
  `notice_url` varchar(1000) NOT NULL,
  `followqrcode` varchar(1000) NOT NULL,
  `coupon_num` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`) USING BTREE,
  KEY `idx_merchid` (`merchid`) USING BTREE,
  KEY `idx_category` (`category`) USING BTREE,
  KEY `idx_hot` (`hot`) USING BTREE,
  KEY `idx_recommend` (`recommend`) USING BTREE,
  KEY `idx_living` (`living`) USING BTREE,
  KEY `idx_status` (`status`) USING BTREE,
  KEY `idx_livetime` (`livetime`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0',
  `groupid` varchar(1000) DEFAULT NULL,
  `level` int(11) DEFAULT '0',
  `agentid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT '',
  `realname` varchar(20) DEFAULT '',
  `mobile` varchar(11) DEFAULT '',
  `pwd` varchar(32) DEFAULT '',
  `weixin` varchar(100) DEFAULT '',
  `content` text,
  `createtime` int(10) DEFAULT '0',
  `agenttime` int(10) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `isagent` tinyint(1) DEFAULT '0',
  `clickcount` int(11) DEFAULT '0',
  `agentlevel` int(11) DEFAULT '0',
  `noticeset` text,
  `nickname` varchar(255) DEFAULT '',
  `credit1` decimal(10,2) DEFAULT '0.00',
  `credit2` decimal(10,2) DEFAULT '0.00',
  `birthyear` varchar(255) DEFAULT '',
  `birthmonth` varchar(255) DEFAULT '',
  `birthday` varchar(255) DEFAULT '',
  `gender` tinyint(3) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '',
  `province` varchar(255) DEFAULT '',
  `city` varchar(255) DEFAULT '',
  `area` varchar(255) DEFAULT '',
  `childtime` int(11) DEFAULT '0',
  `inviter` int(11) DEFAULT '0',
  `agentnotupgrade` int(11) DEFAULT '0',
  `agentselectgoods` tinyint(3) DEFAULT '0',
  `agentblack` int(11) DEFAULT '0',
  `fixagentid` tinyint(3) DEFAULT '0',
  `diymemberid` int(11) DEFAULT '0',
  `diymemberfields` text,
  `diymemberdata` text,
  `diymemberdataid` int(11) DEFAULT '0',
  `diycommissionid` int(11) DEFAULT '0',
  `diycommissionfields` text,
  `diycommissiondata` text,
  `diycommissiondataid` int(11) DEFAULT '0',
  `isblack` int(11) DEFAULT '0',
  `username` varchar(255) DEFAULT '',
  `commission_total` decimal(10,2) DEFAULT '0.00',
  `endtime2` int(11) DEFAULT '0',
  `ispartner` tinyint(3) DEFAULT '0',
  `partnertime` int(11) DEFAULT '0',
  `partnerstatus` tinyint(3) DEFAULT '0',
  `partnerblack` tinyint(3) DEFAULT '0',
  `partnerlevel` int(11) DEFAULT '0',
  `partnernotupgrade` tinyint(3) DEFAULT '0',
  `diyglobonusid` int(11) DEFAULT '0',
  `diyglobonusdata` text,
  `diyglobonusfields` text,
  `isaagent` tinyint(3) DEFAULT '0',
  `aagentlevel` int(11) DEFAULT '0',
  `aagenttime` int(11) DEFAULT '0',
  `aagentstatus` tinyint(3) DEFAULT '0',
  `aagentblack` tinyint(3) DEFAULT '0',
  `aagentnotupgrade` tinyint(3) DEFAULT '0',
  `aagenttype` tinyint(3) DEFAULT '0',
  `aagentprovinces` text,
  `aagentcitys` text,
  `aagentareas` text,
  `diyaagentid` int(11) DEFAULT '0',
  `diyaagentdata` text,
  `diyaagentfields` text,
  `salt` varchar(32) DEFAULT NULL,
  `mobileverify` tinyint(3) DEFAULT '0',
  `mobileuser` tinyint(3) DEFAULT '0',
  `carrier_mobile` varchar(11) DEFAULT '0',
  `isauthor` tinyint(1) DEFAULT '0',
  `authortime` int(11) DEFAULT '0',
  `authorstatus` tinyint(1) DEFAULT '0',
  `authorblack` tinyint(1) DEFAULT '0',
  `authorlevel` int(11) DEFAULT '0',
  `authornotupgrade` tinyint(1) DEFAULT '0',
  `diyauthorid` int(11) DEFAULT '0',
  `diyauthordata` text,
  `diyauthorfields` text,
  `authorid` int(11) DEFAULT '0',
  `comefrom` varchar(20) DEFAULT NULL,
  `openid_qq` varchar(50) DEFAULT NULL,
  `openid_wx` varchar(50) DEFAULT NULL,
  `diymaxcredit` tinyint(3) DEFAULT '0',
  `maxcredit` int(11) DEFAULT '0',
  `datavalue` varchar(50) NOT NULL DEFAULT '',
  `openid_wa` varchar(50) DEFAULT NULL,
  `nickname_wechat` varchar(255) DEFAULT '',
  `avatar_wechat` varchar(255) DEFAULT '',
  `updateaddress` tinyint(1) NOT NULL DEFAULT '0',
  `membercardid` varchar(255) DEFAULT '',
  `membercardcode` varchar(255) DEFAULT '',
  `membershipnumber` varchar(255) DEFAULT '',
  `membercardactive` tinyint(1) DEFAULT '0',
  `idnumber` varchar(255) DEFAULT NULL,
  `wxcardupdatetime` int(11) DEFAULT NULL,
  `commission` decimal(10,2) DEFAULT NULL,
  `commission_pay` decimal(10,2) DEFAULT NULL,
  `hasnewcoupon` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_shareid` (`agentid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_status` (`status`),
  KEY `idx_agenttime` (`agenttime`),
  KEY `idx_isagent` (`isagent`),
  KEY `idx_uid` (`uid`),
  KEY `idx_groupid` (`groupid`(333)),
  KEY `idx_level` (`level`),
  KEY `idx_mobile` (`mobile`),
  KEY `idx_openid_wx` (`openid_wx`),
  KEY `idx_openid_wa` (`openid_wa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_member_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `groupname` varchar(255) DEFAULT '',
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT '',
  `agentid` int(11) DEFAULT '0',
  `ordersn` varchar(30) DEFAULT '',
  `price` decimal(10,2) DEFAULT '0.00',
  `goodsprice` decimal(10,2) DEFAULT '0.00',
  `discountprice` decimal(10,2) DEFAULT '0.00',
  `status` tinyint(3) DEFAULT '0',
  `paytype` tinyint(1) DEFAULT '0',
  `transid` varchar(30) DEFAULT '0',
  `remark` varchar(1000) DEFAULT '',
  `addressid` int(11) DEFAULT '0',
  `dispatchprice` decimal(10,2) DEFAULT '0.00',
  `dispatchid` int(10) DEFAULT '0',
  `createtime` int(10) DEFAULT NULL,
  `dispatchtype` tinyint(3) DEFAULT '0',
  `carrier` text,
  `refundid` int(11) DEFAULT '0',
  `iscomment` tinyint(3) DEFAULT '0',
  `creditadd` tinyint(3) DEFAULT '0',
  `deleted` tinyint(3) DEFAULT '0',
  `userdeleted` tinyint(3) DEFAULT '0',
  `finishtime` int(11) DEFAULT '0',
  `paytime` int(11) DEFAULT '0',
  `expresscom` varchar(30) NOT NULL DEFAULT '',
  `expresssn` varchar(50) NOT NULL DEFAULT '',
  `express` varchar(255) DEFAULT '',
  `sendtime` int(11) DEFAULT '0',
  `fetchtime` int(11) DEFAULT '0',
  `cash` tinyint(3) DEFAULT '0',
  `canceltime` int(11) DEFAULT NULL,
  `cancelpaytime` int(11) DEFAULT '0',
  `refundtime` int(11) DEFAULT '0',
  `isverify` tinyint(3) DEFAULT '0',
  `verified` tinyint(3) DEFAULT '0',
  `verifyopenid` varchar(255) DEFAULT '',
  `verifycode` varchar(255) DEFAULT '',
  `verifytime` int(11) DEFAULT '0',
  `verifystoreid` int(11) DEFAULT '0',
  `deductprice` decimal(10,2) DEFAULT '0.00',
  `deductcredit` int(10) DEFAULT '0',
  `deductcredit2` decimal(10,2) DEFAULT '0.00',
  `deductenough` decimal(10,2) DEFAULT '0.00',
  `virtual` int(11) DEFAULT '0',
  `virtual_info` text,
  `virtual_str` text,
  `address` text,
  `sysdeleted` tinyint(3) DEFAULT '0',
  `ordersn2` int(11) DEFAULT '0',
  `changeprice` decimal(10,2) DEFAULT '0.00',
  `changedispatchprice` decimal(10,2) DEFAULT '0.00',
  `oldprice` decimal(10,2) DEFAULT '0.00',
  `olddispatchprice` decimal(10,2) DEFAULT '0.00',
  `isvirtual` tinyint(3) DEFAULT '0',
  `couponid` int(11) DEFAULT '0',
  `couponprice` decimal(10,2) DEFAULT '0.00',
  `diyformdata` text,
  `diyformfields` text,
  `diyformid` int(11) DEFAULT '0',
  `storeid` int(11) DEFAULT '0',
  `printstate` tinyint(1) DEFAULT '0',
  `printstate2` tinyint(1) DEFAULT '0',
  `address_send` text,
  `refundstate` tinyint(3) DEFAULT '0',
  `closereason` text,
  `remarksaler` text,
  `remarkclose` text,
  `remarksend` text,
  `ismr` int(1) NOT NULL DEFAULT '0',
  `isdiscountprice` decimal(10,2) DEFAULT '0.00',
  `isvirtualsend` tinyint(1) DEFAULT '0',
  `virtualsend_info` text,
  `verifyinfo` text,
  `verifytype` tinyint(1) DEFAULT '0',
  `verifycodes` text,
  `invoicename` varchar(255) DEFAULT '',
  `merchid` int(11) DEFAULT '0',
  `ismerch` tinyint(1) DEFAULT '0',
  `parentid` int(11) DEFAULT '0',
  `isparent` tinyint(1) DEFAULT '0',
  `grprice` decimal(10,2) DEFAULT '0.00',
  `merchshow` tinyint(1) DEFAULT '0',
  `merchdeductenough` decimal(10,2) DEFAULT '0.00',
  `couponmerchid` int(11) DEFAULT '0',
  `isglobonus` tinyint(3) DEFAULT '0',
  `merchapply` tinyint(1) DEFAULT '0',
  `isabonus` tinyint(3) DEFAULT '0',
  `isborrow` tinyint(3) DEFAULT '0',
  `borrowopenid` varchar(100) DEFAULT '',
  `merchisdiscountprice` decimal(10,2) DEFAULT '0.00',
  `apppay` tinyint(3) NOT NULL DEFAULT '0',
  `coupongoodprice` decimal(10,2) DEFAULT '1.00',
  `buyagainprice` decimal(10,2) DEFAULT '0.00',
  `authorid` int(11) DEFAULT '0',
  `isauthor` tinyint(1) DEFAULT '0',
  `ispackage` tinyint(3) DEFAULT '0',
  `packageid` int(11) DEFAULT '0',
  `taskdiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `seckilldiscountprice` decimal(10,2) DEFAULT '0.00',
  `verifyendtime` int(11) NOT NULL DEFAULT '0',
  `willcancelmessage` tinyint(1) DEFAULT '0',
  `sendtype` tinyint(3) NOT NULL DEFAULT '0',
  `lotterydiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `contype` tinyint(1) DEFAULT '0',
  `wxid` int(11) DEFAULT '0',
  `wxcardid` varchar(50) DEFAULT '',
  `wxcode` varchar(50) DEFAULT '',
  `dispatchkey` varchar(30) NOT NULL DEFAULT '',
  `quickid` int(11) NOT NULL DEFAULT '0',
  `istrade` tinyint(3) NOT NULL DEFAULT '0',
  `isnewstore` tinyint(3) NOT NULL DEFAULT '0',
  `liveid` int(11) NOT NULL,
  `ordersn_trade` varchar(32) NOT NULL,
  `tradestatus` tinyint(1) DEFAULT '0',
  `tradepaytype` tinyint(1) NOT NULL,
  `tradepaytime` int(11) DEFAULT '0',
  `dowpayment` decimal(10,2) NOT NULL DEFAULT '0.00',
  `betweenprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `isshare` int(11) NOT NULL DEFAULT '0',
  `wxapp_prepay_id` varchar(100) DEFAULT NULL,
  `officcode` varchar(50) NOT NULL,
  `iswxappcreate` tinyint(1) DEFAULT NULL,
  `cashtime` int(11) DEFAULT NULL,
  `random_code` varchar(4) DEFAULT NULL,
  `print_template` text,
  `city_express_state` tinyint(1) NOT NULL,
  `ces` int(1) DEFAULT NULL,
  `is_cashier` tinyint(3) NOT NULL,
  `commissionmoney` decimal(10,2) DEFAULT NULL,
  `iscycelbuy` tinyint(3) DEFAULT NULL,
  `cycelbuy_predict_time` int(11) DEFAULT NULL,
  `cycelbuy_periodic` varchar(255) DEFAULT NULL,
  `invoice_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_shareid` (`agentid`),
  KEY `idx_status` (`status`),
  KEY `idx_createtime` (`createtime`),
  KEY `idx_refundid` (`refundid`),
  KEY `idx_paytime` (`paytime`),
  KEY `idx_finishtime` (`finishtime`),
  KEY `idx_merchid` (`merchid`),
  KEY `idx_ordersn` (`ordersn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_order_buysend` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `openid` varchar(255) DEFAULT NULL,
  `credit` float(10,2) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_orderid` (`orderid`),
  KEY `idx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_sendticket_draw` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `cpid` varchar(50) NOT NULL,
  `openid` varchar(200) NOT NULL,
  `createtime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `openid` (`openid`),
  KEY `cpid` (`cpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_ewei_shop_task_list` (
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `displayorder` int(11) NOT NULL DEFAULT '0',
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `title` char(50) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(50) NOT NULL DEFAULT '',
  `starttime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `demand` int(11) NOT NULL DEFAULT '0',
  `requiregoods` text NOT NULL,
  `picktype` tinyint(1) NOT NULL DEFAULT '0',
  `stop_type` tinyint(1) NOT NULL DEFAULT '0',
  `stop_limit` int(11) NOT NULL DEFAULT '0',
  `stop_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stop_cycle` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_type` tinyint(1) NOT NULL DEFAULT '0',
  `repeat_interval` int(11) NOT NULL DEFAULT '0',
  `repeat_cycle` tinyint(1) NOT NULL DEFAULT '0',
  `reward` text NOT NULL,
  `followreward` text NOT NULL,
  `goods_limit` int(11) NOT NULL DEFAULT '0',
  `notice` text NOT NULL,
  `design_data` text NOT NULL,
  `design_bg` varchar(255) NOT NULL DEFAULT '',
  `native_data` text NOT NULL,
  `native_data2` text,
  `native_data3` text,
  `reward2` text,
  `reward3` text,
  `level2` int(11) NOT NULL DEFAULT '0',
  `level3` int(11) NOT NULL DEFAULT '0',
  `member_group` text,
  `auto_pick` tinyint(1) NOT NULL,
  `keyword_pick` varchar(20) NOT NULL,
  `verb` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `member_level` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_passive` (`picktype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
";
pdo_run($sql);
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'goods_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `goods_id` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'now_price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `now_price` decimal(9,2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'created_time')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `created_time` datetime NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'update_time')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `update_time` datetime NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'bargain_times')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `bargain_times` int(10) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `openid` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'nickname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `nickname` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'head_image')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `head_image` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'bargain_price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `bargain_price` decimal(9,2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `status` tinyint(2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'account_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `account_id` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'initiate')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `initiate` tinyint(4) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_bargain_actor',  'order')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD `order` int(11) DEFAULT '0';");
}
if(!pdo_indexexists('ewei_shop_bargain_actor',  'idx_openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD KEY `idx_openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_bargain_actor',  'idx_account_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD KEY `idx_account_id` (`account_id`);");
}
if(!pdo_indexexists('ewei_shop_bargain_actor',  'idx_status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_actor')." ADD KEY `idx_status` (`status`);");
}
if(!pdo_fieldexists('ewei_shop_bargain_record',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_bargain_record',  'actor_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD `actor_id` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_record',  'bargain_price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD `bargain_price` decimal(9,2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_record',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD `openid` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_bargain_record',  'nickname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD `nickname` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_record',  'head_image')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD `head_image` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_bargain_record',  'bargain_time')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD `bargain_time` datetime NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_bargain_record',  'idx_openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD KEY `idx_openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_bargain_record',  'idx_actor_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_bargain_record')." ADD KEY `idx_actor_id` (`actor_id`);");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'levelname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `levelname` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'commission1')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `commission1` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'commission2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `commission2` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'commission3')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `commission3` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'commissionmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `commissionmoney` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'ordermoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `ordermoney` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'downcount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `downcount` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'ordercount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `ordercount` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'withdraw')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `withdraw` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'repurchase')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `repurchase` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_commission_level',  'goodsids')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD `goodsids` varchar(1000) DEFAULT '';");
}
if(!pdo_indexexists('ewei_shop_commission_level',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_commission_level')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `displayorder` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `title` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'cate')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `cate` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `thumb` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `price` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `type` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'credit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `credit` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'money')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `money` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'total')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `total` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'totalday')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `totalday` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'chance')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `chance` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'chanceday')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `chanceday` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'detail')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `detail` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'rate1')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `rate1` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'rate2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `rate2` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'endtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `endtime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'joins')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `joins` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'views')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `views` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `createtime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `status` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'deleted')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `deleted` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'showlevels')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `showlevels` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'buylevels')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `buylevels` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'showgroups')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `showgroups` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'buygroups')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `buygroups` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'vip')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `vip` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'istop')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `istop` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'isrecommand')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `isrecommand` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'istime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `istime` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'timestart')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `timestart` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'timeend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `timeend` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'share_title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `share_title` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'share_icon')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `share_icon` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'share_desc')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `share_desc` varchar(500) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'followneed')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `followneed` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'followtext')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `followtext` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'subtitle')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `subtitle` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'subdetail')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `subdetail` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'noticedetail')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `noticedetail` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'usedetail')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `usedetail` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'goodsdetail')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `goodsdetail` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'isendtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `isendtime` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'usecredit2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `usecredit2` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'area')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `area` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'dispatch')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `dispatch` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'storeids')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `storeids` text;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'noticeopenid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `noticeopenid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'noticetype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `noticetype` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'isverify')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `isverify` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'goodstype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `goodstype` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'couponid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `couponid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `goodsid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'merchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `merchid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'productprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `productprice` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'mincredit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `mincredit` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'minmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `minmoney` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'maxcredit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `maxcredit` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'maxmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `maxmoney` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'dispatchtype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `dispatchtype` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'dispatchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `dispatchid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'verifytype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `verifytype` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'verifynum')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `verifynum` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'grant1')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `grant1` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'grant2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `grant2` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'goodssn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `goodssn` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'productsn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `productsn` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'weight')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `weight` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'showtotal')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `showtotal` tinyint(3) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'totalcnf')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `totalcnf` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'usetime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `usetime` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'hasoption')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `hasoption` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'noticedetailshow')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `noticedetailshow` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'detailshow')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `detailshow` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'packetmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `packetmoney` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'surplusmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `surplusmoney` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'packetlimit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `packetlimit` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'packettype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `packettype` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'minpacketmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `minpacketmoney` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'packettotal')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `packettotal` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'packetsurplus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `packetsurplus` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_creditshop_goods',  'maxpacketmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD `maxpacketmoney` decimal(10,2) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_type` (`type`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_endtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_endtime` (`endtime`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_createtime` (`createtime`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_status` (`status`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_displayorder` (`displayorder`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_deleted')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_deleted` (`deleted`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_istop')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_istop` (`istop`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_isrecommand')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_isrecommand` (`isrecommand`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_istime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_istime` (`istime`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_timestart')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_timestart` (`timestart`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_timeend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_timeend` (`timeend`);");
}
if(!pdo_indexexists('ewei_shop_creditshop_goods',  'idx_goodstype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_creditshop_goods')." ADD KEY `idx_goodstype` (`goodstype`);");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `title` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `type` int(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'endtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `endtime` datetime NOT NULL DEFAULT '2016-10-01 00:00:00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'mode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `mode` int(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `status` int(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'max')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `max` int(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'value')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `value` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'starttime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `starttime` datetime NOT NULL DEFAULT '2016-10-01 00:00:00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'goods')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `goods` text;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'score')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `score` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'coupon')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `coupon` text;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'use')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `use` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'total')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `total` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'red')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `red` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'balance')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `balance` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'balance_left')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `balance_left` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'balance_right')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `balance_right` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'red_left')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `red_left` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'red_right')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `red_right` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'score_left')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `score_left` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'score_right')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `score_right` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'balance_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `balance_type` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'red_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `red_type` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'score_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `score_type` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'title_reply')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `title_reply` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'img')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `img` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'content')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `content` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'rule')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `rule` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'coupon_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `coupon_type` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'basic_content')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `basic_content` varchar(500) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'reply_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `reply_type` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'code_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `code_type` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'binding')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `binding` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'showcount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `showcount` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'postage')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `postage` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'postage_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `postage_type` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'banner')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `banner` varchar(800) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'keyword_reply')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `keyword_reply` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'reply_status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `reply_status` int(11) DEFAULT '1';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'reply_keyword')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `reply_keyword` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'input_banner')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `input_banner` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'diypage')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `diypage` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'sendname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `sendname` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'wishing')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `wishing` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'actname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `actname` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'remark')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `remark` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'repeat')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `repeat` tinyint(1) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'koulingstart')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `koulingstart` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'koulingend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `koulingend` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'kouling')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `kouling` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'chufa')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `chufa` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_group',  'chufaend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_group')." ADD `chufaend` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'freeze')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `freeze` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'mistake')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `mistake` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'grouplimit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `grouplimit` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'alllimit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `alllimit` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'no_qrimg')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `no_qrimg` tinyint(3) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_exchange_setting',  'rule')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_exchange_setting')." ADD `rule` text;");
}
if(!pdo_fieldexists('ewei_shop_goods_group',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_goods_group',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_group',  'name')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD `name` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_group',  'goodsids')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD `goodsids` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_group',  'enabled')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD `enabled` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_group',  'merchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD `merchid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_indexexists('ewei_shop_goods_group',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_goods_group',  'idx_enabled')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_group')." ADD KEY `idx_enabled` (`enabled`);");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `goodsid` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `title` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `thumb` varchar(60) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'productprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `productprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'marketprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `marketprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'costprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `costprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'stock')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `stock` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'weight')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `weight` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `displayorder` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'specs')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `specs` text;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'skuId')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `skuId` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'goodssn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `goodssn` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'productsn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `productsn` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'virtual')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `virtual` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'exchange_stock')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `exchange_stock` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'exchange_postage')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `exchange_postage` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'presellprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `presellprice` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'day')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `day` int(3) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'allfullbackprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `allfullbackprice` decimal(10,2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'fullbackprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `fullbackprice` decimal(10,2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'allfullbackratio')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `allfullbackratio` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'fullbackratio')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `fullbackratio` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'isfullback')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `isfullback` tinyint(3) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'islive')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `islive` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'liveprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `liveprice` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_goods_option',  'cycelbuy_periodic')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD `cycelbuy_periodic` varchar(20) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_goods_option',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_goods_option',  'idx_goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD KEY `idx_goodsid` (`goodsid`);");
}
if(!pdo_indexexists('ewei_shop_goods_option',  'idx_displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD KEY `idx_displayorder` (`displayorder`);");
}
if(!pdo_indexexists('ewei_shop_goods_option',  'idx_productsn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_option')." ADD KEY `idx_productsn` (`productsn`);");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `goodsid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `title` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'description')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `description` varchar(1000) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'displaytype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `displaytype` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'content')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `content` text;");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `displayorder` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'propId')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `propId` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec',  'iscycelbuy')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD `iscycelbuy` tinyint(1) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_goods_spec',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_goods_spec',  'idx_goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD KEY `idx_goodsid` (`goodsid`);");
}
if(!pdo_indexexists('ewei_shop_goods_spec',  'idx_displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec')." ADD KEY `idx_displayorder` (`displayorder`);");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'specid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `specid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `title` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `thumb` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'show')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `show` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `displayorder` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'valueId')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `valueId` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'virtual')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `virtual` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_goods_spec_item',  'cycelbuy_periodic')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD `cycelbuy_periodic` varchar(20) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_goods_spec_item',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_goods_spec_item',  'idx_specid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD KEY `idx_specid` (`specid`);");
}
if(!pdo_indexexists('ewei_shop_goods_spec_item',  'idx_show')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD KEY `idx_show` (`show`);");
}
if(!pdo_indexexists('ewei_shop_goods_spec_item',  'idx_displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_goods_spec_item')." ADD KEY `idx_displayorder` (`displayorder`);");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'name')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `name` varchar(50) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `thumb` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `displayorder` tinyint(3) unsigned DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'enabled')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `enabled` tinyint(1) DEFAULT '1';");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'advimg')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `advimg` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'advurl')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `advurl` varchar(500) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_groups_category',  'isrecommand')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD `isrecommand` tinyint(3) DEFAULT '0';");
}
if(!pdo_indexexists('ewei_shop_groups_category',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_groups_category',  'idx_displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD KEY `idx_displayorder` (`displayorder`);");
}
if(!pdo_indexexists('ewei_shop_groups_category',  'idx_enabled')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD KEY `idx_enabled` (`enabled`);");
}
if(!pdo_indexexists('ewei_shop_groups_category',  'idx_name')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_category')." ADD KEY `idx_name` (`name`);");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `displayorder` int(11) unsigned DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `title` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'category')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `category` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'stock')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `stock` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `price` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'groupsprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `groupsprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'singleprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `singleprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'goodsnum')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `goodsnum` int(11) NOT NULL DEFAULT '1';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'units')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `units` varchar(255) NOT NULL DEFAULT '件';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'freight')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `freight` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'endtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `endtime` int(11) unsigned NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'groupnum')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `groupnum` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'sales')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `sales` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `thumb` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'description')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `description` varchar(1000) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'content')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `content` text;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `createtime` int(11) unsigned NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `status` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'ishot')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `ishot` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'deleted')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `deleted` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `goodsid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'followneed')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `followneed` tinyint(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'followtext')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `followtext` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'share_title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `share_title` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'share_icon')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `share_icon` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'share_desc')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `share_desc` varchar(500) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'goodssn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `goodssn` varchar(50) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'productsn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `productsn` varchar(50) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'showstock')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `showstock` tinyint(2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'purchaselimit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `purchaselimit` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'single')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `single` tinyint(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'dispatchtype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `dispatchtype` tinyint(2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'dispatchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `dispatchid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'isindex')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `isindex` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'followurl')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `followurl` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'deduct')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `deduct` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'rights')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `rights` tinyint(2) NOT NULL DEFAULT '1';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'thumb_url')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `thumb_url` text;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'gid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `gid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'discount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `discount` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'headstype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `headstype` tinyint(3) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'headsmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `headsmoney` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'headsdiscount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `headsdiscount` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'isdiscount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `isdiscount` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'isverify')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `isverify` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'verifytype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `verifytype` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'verifynum')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `verifynum` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'storeids')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `storeids` text;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'merchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `merchid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'shorttitle')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `shorttitle` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'teamnum')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `teamnum` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'more_spec')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `more_spec` tinyint(1) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods',  'is_ladder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD `is_ladder` tinyint(1) DEFAULT NULL;");
}
if(!pdo_indexexists('ewei_shop_groups_goods',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_groups_goods',  'idx_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD KEY `idx_type` (`category`);");
}
if(!pdo_indexexists('ewei_shop_groups_goods',  'idx_createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD KEY `idx_createtime` (`createtime`);");
}
if(!pdo_indexexists('ewei_shop_groups_goods',  'idx_status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD KEY `idx_status` (`status`);");
}
if(!pdo_indexexists('ewei_shop_groups_goods',  'idx_istop')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD KEY `idx_istop` (`isindex`);");
}
if(!pdo_indexexists('ewei_shop_groups_goods',  'idx_category')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD KEY `idx_category` (`category`);");
}
if(!pdo_indexexists('ewei_shop_groups_goods',  'idx_dispatchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods')." ADD KEY `idx_dispatchid` (`dispatchid`);");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `goodsid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'groups_goods_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `groups_goods_id` int(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'goods_option_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `goods_option_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `title` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'marketprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `marketprice` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `price` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'single_price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `single_price` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'specs')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `specs` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_goods_option',  'stock')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_goods_option')." ADD `stock` int(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_ladder',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_ladder')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_ladder',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_ladder')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_ladder',  'goods_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_ladder')." ADD `goods_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_ladder',  'ladder_num')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_ladder')." ADD `ladder_num` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_ladder',  'ladder_price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_ladder')." ADD `ladder_price` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `openid` varchar(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'orderno')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `orderno` varchar(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'groupnum')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `groupnum` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'paytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `paytime` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `price` decimal(11,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'freight')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `freight` decimal(11,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `status` int(9) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'pay_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `pay_type` varchar(45) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'goodid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `goodid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'teamid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `teamid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'is_team')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `is_team` int(2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'heads')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `heads` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'starttime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `starttime` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'endtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `endtime` int(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `createtime` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'success')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `success` int(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'delete')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `delete` int(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'credit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `credit` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'creditmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `creditmoney` decimal(11,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'dispatchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `dispatchid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'addressid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `addressid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'address')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `address` varchar(1000) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'discount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `discount` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'canceltime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `canceltime` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'finishtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `finishtime` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'refundid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `refundid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'refundstate')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `refundstate` tinyint(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'refundtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `refundtime` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'express')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `express` varchar(45) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'expresscom')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `expresscom` varchar(100) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'expresssn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `expresssn` varchar(45) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'sendtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `sendtime` int(45) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'remark')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `remark` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'remarkclose')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `remarkclose` text;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'remarksend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `remarksend` text;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'message')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `message` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'deleted')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `deleted` int(2) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'realname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `realname` varchar(20) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'mobile')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `mobile` varchar(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'isverify')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `isverify` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'verifytype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `verifytype` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'verifycode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `verifycode` varchar(45) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'verifynum')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `verifynum` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'printstate')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `printstate` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'printstate2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `printstate2` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'apppay')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `apppay` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'isborrow')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `isborrow` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'borrowopenid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `borrowopenid` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'source')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `source` tinyint(1) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'ladder_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `ladder_id` tinyint(1) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'is_ladder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `is_ladder` tinyint(1) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'more_spec')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `more_spec` tinyint(1) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'wxapp_prepay_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `wxapp_prepay_id` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'cancel_reason')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `cancel_reason` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'goods_price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `goods_price` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'goods_option_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `goods_option_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order',  'specs')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD `specs` varchar(255) DEFAULT NULL;");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_orderno')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_orderno` (`orderno`);");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_paytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_paytime` (`paytime`);");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_pay_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_pay_type` (`pay_type`);");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_teamid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_teamid` (`teamid`);");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_verifycode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_verifycode` (`verifycode`);");
}
if(!pdo_indexexists('ewei_shop_groups_order',  'idx_createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order')." ADD KEY `idx_createtime` (`createtime`);");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'goods_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `goods_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'groups_goods_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `groups_goods_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'groups_goods_option_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `groups_goods_option_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'groups_order_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `groups_order_id` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `price` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'option_name')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `option_name` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_goods',  'create_time')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_goods')." ADD `create_time` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `openid` varchar(45) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'orderid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `orderid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'refundno')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `refundno` varchar(45) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'refundstatus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `refundstatus` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'refundaddressid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `refundaddressid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'refundaddress')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `refundaddress` varchar(1000) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'content')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `content` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'reason')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `reason` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'images')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `images` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'applytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `applytime` varchar(45) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'applycredit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `applycredit` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'applyprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `applyprice` decimal(11,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'reply')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `reply` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'refundtype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `refundtype` varchar(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'rtype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `rtype` int(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'refundtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `refundtime` varchar(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'endtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `endtime` varchar(45) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'message')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `message` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'operatetime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `operatetime` varchar(45) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'realcredit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `realcredit` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'realmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `realmoney` decimal(11,2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'express')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `express` varchar(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'expresscom')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `expresscom` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'expresssn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `expresssn` varchar(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'sendtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `sendtime` varchar(45) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'returntime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `returntime` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'rexpress')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `rexpress` varchar(45) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'rexpresscom')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `rexpresscom` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_order_refund',  'rexpresssn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD `rexpresssn` varchar(45) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_groups_order_refund',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD KEY `uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_groups_order_refund',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD KEY `openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_groups_order_refund',  'orderid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD KEY `orderid` (`orderid`);");
}
if(!pdo_indexexists('ewei_shop_groups_order_refund',  'refundno')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_order_refund')." ADD KEY `refundno` (`refundno`);");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'plid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `plid` bigint(11) unsigned NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `type` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'acid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `acid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `openid` varchar(40) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'tid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `tid` varchar(64) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'credit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `credit` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'creditmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `creditmoney` decimal(10,2) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'fee')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `fee` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `status` tinyint(4) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'module')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `module` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'tag')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `tag` varchar(2000) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'is_usecard')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `is_usecard` tinyint(3) unsigned NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'card_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `card_type` tinyint(3) unsigned NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'card_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `card_id` varchar(50) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'card_fee')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `card_fee` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'encrypt_code')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `encrypt_code` varchar(100) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_groups_paylog',  'uniontid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD `uniontid` varchar(50) DEFAULT NULL;");
}
if(!pdo_indexexists('ewei_shop_groups_paylog',  'idx_openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD KEY `idx_openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_groups_paylog',  'idx_tid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD KEY `idx_tid` (`tid`);");
}
if(!pdo_indexexists('ewei_shop_groups_paylog',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_groups_paylog',  'uniontid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_groups_paylog')." ADD KEY `uniontid` (`uniontid`);");
}
if(!pdo_fieldexists('ewei_shop_live',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_live',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'merchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `merchid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'livetype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `livetype` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'liveidentity')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `liveidentity` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'screen')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `screen` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'goodsid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `goodsid` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'category')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `category` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'url')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `url` varchar(1000) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'thumb')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `thumb` varchar(1000) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'hot')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `hot` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'recommend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `recommend` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'living')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `living` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `status` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `displayorder` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'livetime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `livetime` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'lastlivetime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `lastlivetime` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `createtime` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'introduce')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `introduce` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'packetmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `packetmoney` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_live',  'packettotal')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `packettotal` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'packetprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `packetprice` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_live',  'packetdes')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `packetdes` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'couponid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `couponid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'share_title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `share_title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'share_icon')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `share_icon` varchar(1000) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'share_desc')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `share_desc` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'share_url')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `share_url` varchar(1000) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_live',  'subscribe')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `subscribe` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'subscribenotice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `subscribenotice` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'visit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `visit` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'video')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `video` varchar(1000) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_live',  'covertype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `covertype` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'cover')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `cover` varchar(1000) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_live',  'iscoupon')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `iscoupon` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'nestable')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `nestable` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'tabs')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `tabs` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'invitation_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `invitation_id` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'showlevels')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `showlevels` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'showgroups')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `showgroups` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'showcommission')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `showcommission` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'jurisdiction_url')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `jurisdiction_url` varchar(1000) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'jurisdictionurl_show')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `jurisdictionurl_show` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_live',  'notice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `notice` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'notice_url')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `notice_url` varchar(1000) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'followqrcode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `followqrcode` varchar(1000) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_live',  'coupon_num')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD `coupon_num` int(11) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_uniacid` (`uniacid`) USING BTREE;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_merchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_merchid` (`merchid`) USING BTREE;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_category')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_category` (`category`) USING BTREE;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_hot')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_hot` (`hot`) USING BTREE;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_recommend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_recommend` (`recommend`) USING BTREE;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_living')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_living` (`living`) USING BTREE;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_status` (`status`) USING BTREE;");
}
if(!pdo_indexexists('ewei_shop_live',  'idx_livetime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_live')." ADD KEY `idx_livetime` (`livetime`) USING BTREE;");
}
if(!pdo_fieldexists('ewei_shop_member',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_member',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'uid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `uid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'groupid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `groupid` varchar(1000) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'level')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `level` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'agentid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `agentid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `openid` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'realname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `realname` varchar(20) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'mobile')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `mobile` varchar(11) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'pwd')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `pwd` varchar(32) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'weixin')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `weixin` varchar(100) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'content')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `content` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `createtime` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'agenttime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `agenttime` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `status` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'isagent')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `isagent` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'clickcount')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `clickcount` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'agentlevel')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `agentlevel` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'noticeset')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `noticeset` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'nickname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `nickname` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'credit1')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `credit1` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_member',  'credit2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `credit2` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_member',  'birthyear')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `birthyear` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'birthmonth')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `birthmonth` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'birthday')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `birthday` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'gender')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `gender` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'avatar')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `avatar` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'province')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `province` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'city')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `city` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'area')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `area` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'childtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `childtime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'inviter')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `inviter` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'agentnotupgrade')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `agentnotupgrade` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'agentselectgoods')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `agentselectgoods` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'agentblack')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `agentblack` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'fixagentid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `fixagentid` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diymemberid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diymemberid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diymemberfields')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diymemberfields` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diymemberdata')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diymemberdata` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diymemberdataid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diymemberdataid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diycommissionid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diycommissionid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diycommissionfields')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diycommissionfields` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diycommissiondata')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diycommissiondata` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diycommissiondataid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diycommissiondataid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'isblack')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `isblack` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'username')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `username` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'commission_total')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `commission_total` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_member',  'endtime2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `endtime2` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'ispartner')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `ispartner` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'partnertime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `partnertime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'partnerstatus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `partnerstatus` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'partnerblack')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `partnerblack` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'partnerlevel')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `partnerlevel` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'partnernotupgrade')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `partnernotupgrade` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyglobonusid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyglobonusid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyglobonusdata')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyglobonusdata` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyglobonusfields')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyglobonusfields` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'isaagent')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `isaagent` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagentlevel')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagentlevel` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagenttime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagenttime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagentstatus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagentstatus` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagentblack')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagentblack` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagentnotupgrade')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagentnotupgrade` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagenttype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagenttype` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagentprovinces')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagentprovinces` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagentcitys')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagentcitys` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'aagentareas')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `aagentareas` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyaagentid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyaagentid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyaagentdata')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyaagentdata` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyaagentfields')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyaagentfields` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'salt')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `salt` varchar(32) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'mobileverify')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `mobileverify` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'mobileuser')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `mobileuser` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'carrier_mobile')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `carrier_mobile` varchar(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'isauthor')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `isauthor` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'authortime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `authortime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'authorstatus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `authorstatus` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'authorblack')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `authorblack` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'authorlevel')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `authorlevel` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'authornotupgrade')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `authornotupgrade` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyauthorid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyauthorid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyauthordata')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyauthordata` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diyauthorfields')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diyauthorfields` text;");
}
if(!pdo_fieldexists('ewei_shop_member',  'authorid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `authorid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'comefrom')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `comefrom` varchar(20) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'openid_qq')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `openid_qq` varchar(50) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'openid_wx')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `openid_wx` varchar(50) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'diymaxcredit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `diymaxcredit` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'maxcredit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `maxcredit` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'datavalue')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `datavalue` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'openid_wa')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `openid_wa` varchar(50) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'nickname_wechat')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `nickname_wechat` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'avatar_wechat')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `avatar_wechat` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'updateaddress')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `updateaddress` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'membercardid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `membercardid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'membercardcode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `membercardcode` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'membershipnumber')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `membershipnumber` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member',  'membercardactive')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `membercardactive` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member',  'idnumber')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `idnumber` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'wxcardupdatetime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `wxcardupdatetime` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'commission')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `commission` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'commission_pay')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `commission_pay` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_member',  'hasnewcoupon')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD `hasnewcoupon` tinyint(1) DEFAULT NULL;");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_shareid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_shareid` (`agentid`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_status` (`status`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_agenttime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_agenttime` (`agenttime`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_isagent')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_isagent` (`isagent`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_uid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_uid` (`uid`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_groupid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_groupid` (`groupid`(333));");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_level')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_level` (`level`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_mobile')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_mobile` (`mobile`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_openid_wx')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_openid_wx` (`openid_wx`);");
}
if(!pdo_indexexists('ewei_shop_member',  'idx_openid_wa')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member')." ADD KEY `idx_openid_wa` (`openid_wa`);");
}
if(!pdo_fieldexists('ewei_shop_member_group',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member_group')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_member_group',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member_group')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_member_group',  'groupname')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member_group')." ADD `groupname` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_member_group',  'description')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_member_group')." ADD `description` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_order',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `uniacid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `openid` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'agentid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `agentid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'ordersn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `ordersn` varchar(30) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'price')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `price` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'goodsprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `goodsprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'discountprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `discountprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `status` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'paytype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `paytype` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'transid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `transid` varchar(30) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'remark')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `remark` varchar(1000) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'addressid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `addressid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'dispatchprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `dispatchprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'dispatchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `dispatchid` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `createtime` int(10) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'dispatchtype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `dispatchtype` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'carrier')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `carrier` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'refundid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `refundid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'iscomment')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `iscomment` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'creditadd')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `creditadd` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'deleted')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `deleted` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'userdeleted')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `userdeleted` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'finishtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `finishtime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'paytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `paytime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'expresscom')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `expresscom` varchar(30) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'expresssn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `expresssn` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'express')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `express` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'sendtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `sendtime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'fetchtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `fetchtime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'cash')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `cash` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'canceltime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `canceltime` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'cancelpaytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `cancelpaytime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'refundtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `refundtime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isverify')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isverify` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'verified')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verified` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifyopenid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifyopenid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifycode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifycode` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifytime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifystoreid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifystoreid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'deductprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `deductprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'deductcredit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `deductcredit` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'deductcredit2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `deductcredit2` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'deductenough')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `deductenough` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'virtual')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `virtual` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'virtual_info')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `virtual_info` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'virtual_str')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `virtual_str` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'address')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `address` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'sysdeleted')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `sysdeleted` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'ordersn2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `ordersn2` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'changeprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `changeprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'changedispatchprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `changedispatchprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'oldprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `oldprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'olddispatchprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `olddispatchprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isvirtual')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isvirtual` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'couponid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `couponid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'couponprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `couponprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'diyformdata')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `diyformdata` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'diyformfields')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `diyformfields` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'diyformid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `diyformid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'storeid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `storeid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'printstate')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `printstate` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'printstate2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `printstate2` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'address_send')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `address_send` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'refundstate')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `refundstate` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'closereason')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `closereason` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'remarksaler')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `remarksaler` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'remarkclose')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `remarkclose` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'remarksend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `remarksend` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'ismr')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `ismr` int(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isdiscountprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isdiscountprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isvirtualsend')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isvirtualsend` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'virtualsend_info')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `virtualsend_info` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifyinfo')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifyinfo` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifytype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifytype` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifycodes')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifycodes` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'invoicename')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `invoicename` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'merchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `merchid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'ismerch')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `ismerch` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'parentid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `parentid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isparent')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isparent` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'grprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `grprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'merchshow')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `merchshow` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'merchdeductenough')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `merchdeductenough` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'couponmerchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `couponmerchid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isglobonus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isglobonus` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'merchapply')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `merchapply` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isabonus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isabonus` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isborrow')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isborrow` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'borrowopenid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `borrowopenid` varchar(100) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'merchisdiscountprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `merchisdiscountprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'apppay')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `apppay` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'coupongoodprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `coupongoodprice` decimal(10,2) DEFAULT '1.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'buyagainprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `buyagainprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'authorid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `authorid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isauthor')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isauthor` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'ispackage')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `ispackage` tinyint(3) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'packageid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `packageid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'taskdiscountprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `taskdiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'seckilldiscountprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `seckilldiscountprice` decimal(10,2) DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'verifyendtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `verifyendtime` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'willcancelmessage')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `willcancelmessage` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'sendtype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `sendtype` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'lotterydiscountprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `lotterydiscountprice` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'contype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `contype` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'wxid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `wxid` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'wxcardid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `wxcardid` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'wxcode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `wxcode` varchar(50) DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'dispatchkey')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `dispatchkey` varchar(30) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_order',  'quickid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `quickid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'istrade')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `istrade` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isnewstore')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isnewstore` tinyint(3) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'liveid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `liveid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'ordersn_trade')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `ordersn_trade` varchar(32) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'tradestatus')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `tradestatus` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'tradepaytype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `tradepaytype` tinyint(1) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'tradepaytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `tradepaytime` int(11) DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'dowpayment')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `dowpayment` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'betweenprice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `betweenprice` decimal(10,2) NOT NULL DEFAULT '0.00';");
}
if(!pdo_fieldexists('ewei_shop_order',  'isshare')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `isshare` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_order',  'wxapp_prepay_id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `wxapp_prepay_id` varchar(100) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'officcode')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `officcode` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'iswxappcreate')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `iswxappcreate` tinyint(1) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'cashtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `cashtime` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'random_code')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `random_code` varchar(4) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'print_template')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `print_template` text;");
}
if(!pdo_fieldexists('ewei_shop_order',  'city_express_state')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `city_express_state` tinyint(1) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'ces')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `ces` int(1) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'is_cashier')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `is_cashier` tinyint(3) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'commissionmoney')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `commissionmoney` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'iscycelbuy')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `iscycelbuy` tinyint(3) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'cycelbuy_predict_time')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `cycelbuy_predict_time` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'cycelbuy_periodic')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `cycelbuy_periodic` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order',  'invoice_img')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD `invoice_img` varchar(255) DEFAULT NULL;");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_shareid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_shareid` (`agentid`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_status` (`status`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_createtime` (`createtime`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_refundid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_refundid` (`refundid`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_paytime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_paytime` (`paytime`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_finishtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_finishtime` (`finishtime`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_merchid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_merchid` (`merchid`);");
}
if(!pdo_indexexists('ewei_shop_order',  'idx_ordersn')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order')." ADD KEY `idx_ordersn` (`ordersn`);");
}
if(!pdo_fieldexists('ewei_shop_order_buysend',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD `id` int(10) unsigned NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_order_buysend',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD `uniacid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order_buysend',  'orderid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD `orderid` int(11) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order_buysend',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD `openid` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order_buysend',  'credit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD `credit` float(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order_buysend',  'money')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD `money` decimal(10,2) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_order_buysend',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD `createtime` int(11) DEFAULT NULL;");
}
if(!pdo_indexexists('ewei_shop_order_buysend',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_order_buysend',  'idx_orderid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD KEY `idx_orderid` (`orderid`);");
}
if(!pdo_indexexists('ewei_shop_order_buysend',  'idx_openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_order_buysend')." ADD KEY `idx_openid` (`openid`);");
}
if(!pdo_fieldexists('ewei_shop_sendticket_draw',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD `id` int(11) unsigned NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_sendticket_draw',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_sendticket_draw',  'cpid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD `cpid` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_sendticket_draw',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD `openid` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_sendticket_draw',  'createtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD `createtime` int(11) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_sendticket_draw',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD KEY `uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_sendticket_draw',  'openid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD KEY `openid` (`openid`);");
}
if(!pdo_indexexists('ewei_shop_sendticket_draw',  'cpid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_sendticket_draw')." ADD KEY `cpid` (`cpid`);");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'status')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `status` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'displayorder')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `displayorder` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'id')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `id` int(11) unsigned NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `uniacid` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'title')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `title` char(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'image')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `image` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `type` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'starttime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `starttime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'endtime')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'demand')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `demand` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'requiregoods')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `requiregoods` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'picktype')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `picktype` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'stop_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `stop_type` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'stop_limit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `stop_limit` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'stop_time')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `stop_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'stop_cycle')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `stop_cycle` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'repeat_type')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `repeat_type` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'repeat_interval')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `repeat_interval` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'repeat_cycle')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `repeat_cycle` tinyint(1) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'reward')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `reward` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'followreward')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `followreward` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'goods_limit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `goods_limit` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'notice')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `notice` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'design_data')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `design_data` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'design_bg')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `design_bg` varchar(255) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'native_data')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `native_data` text NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'native_data2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `native_data2` text;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'native_data3')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `native_data3` text;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'reward2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `reward2` text;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'reward3')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `reward3` text;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'level2')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `level2` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'level3')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `level3` int(11) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'member_group')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `member_group` text;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'auto_pick')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `auto_pick` tinyint(1) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'keyword_pick')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `keyword_pick` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'verb')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `verb` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'unit')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `unit` varchar(255) DEFAULT NULL;");
}
if(!pdo_fieldexists('ewei_shop_task_list',  'member_level')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD `member_level` int(11) NOT NULL;");
}
if(!pdo_indexexists('ewei_shop_task_list',  'idx_uniacid')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD KEY `idx_uniacid` (`uniacid`);");
}
if(!pdo_indexexists('ewei_shop_task_list',  'idx_passive')) {
	pdo_query("ALTER TABLE ".tablename('ewei_shop_task_list')." ADD KEY `idx_passive` (`picktype`);");
}

?>