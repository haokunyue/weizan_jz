<?php

if (!defined('IN_IA')) {
	exit('Access Denied');
}
define("EWEI_SHOPV2_AUTH_WXAPP","http://renren.weapp.cc/");

return array(
	'version' => '1.0',
	'id'      => 'app',
	'name'    => '小程序',
	'v3'      => true,
	'menu'    => array(
		'title'     => '小程序',
		'plugincom' => 1,
		'icon'      => 'xiaochengxu',
		'iconcolor' => '#54a532',
		'items'     => array(
			array('title' => '页面设计', 'route' => 'page'),
			array('title' => '商品二维码', 'route' => 'goods'),
			array('title' => '底部导航', 'route' => 'tabbar'),
			array('title' => '小程序设置', 'route' => 'setting'),
			array('title' => '发布与审核', 'route' => 'release'),
			array(
				'title' => '其他设置',
				'items' => array(
					array('title' => '模板消息', 'route' => 'tmessage')
					)
				)
			)
		)
	);

?>
