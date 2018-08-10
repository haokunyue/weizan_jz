<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>首页 - <?php  echo $this->module['config']['sname']?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--<link rel="stylesheet" href="<?php echo WELIAM_INDIANA_STATIC;?>components/light/light7.min.css">-->
    <link rel="stylesheet" href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/light7.min.css"><!--岑更改-->
    <link rel="stylesheet" href="<?php echo WELIAM_INDIANA_STATIC;?>components/weui/weui.css">
    <!--<link href="<?php echo WELIAM_INDIANA_STATIC;?>css/common.css" rel="stylesheet">-->
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/common.css" rel="stylesheet"><!--岑更改-->
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/index.css" rel="stylesheet">
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/list.css" rel="stylesheet">
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/member.css" rel="stylesheet" type="text/css">
    <!--<link href="<?php echo WELIAM_INDIANA_STATIC;?>css/cart.css" rel="stylesheet">-->
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/cart.css" rel="stylesheet"><!--岑更改-->
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>iconfont/demo.css" rel="stylesheet"><!--矢量图标-->
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>iconfont/iconfont.css" rel="stylesheet"><!--矢量图标-->
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/main.min.css" rel="stylesheet"><!--岑更改-->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" >
    <?php  echo register_jssdk();?>
    <script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>js/jquery.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>js/global.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>js/laytpl.js' charset='utf-8'></script>
    <script type='text/javascript' src="<?php echo WELIAM_INDIANA_STATIC;?>js/swipe.js" charset='utf-8'></script>
    <script type='text/javascript' src="<?php echo WELIAM_INDIANA_STATIC;?>js/weliam.js" charset='utf-8'></script>
		<script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>components/light/light7.min.js' charset='utf-8'></script>
		<script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>components/light/light7-city-picker.js' charset='utf-8'></script>
		<script src="http://static.ydbimg.com/API/YdbOnline.js" type="text/javascript"></script>
</head>
<body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/wxshare', TEMPLATE_INCLUDEPATH)) : (include template('common/wxshare', TEMPLATE_INCLUDEPATH));?>
