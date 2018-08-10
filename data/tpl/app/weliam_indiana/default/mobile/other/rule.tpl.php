<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta name = "format-detection" content = "telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>什么是<?php  echo $this->module['config']['sname']?></title>
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/common.css" rel="stylesheet">
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/help.css" rel="stylesheet">
    <script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>js/jquery.js' charset='utf-8'></script>
</head>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/wxshare', TEMPLATE_INCLUDEPATH)) : (include template('common/wxshare', TEMPLATE_INCLUDEPATH));?>
<body class="webkit chrome ios iphone">
	<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/suspend', TEMPLATE_INCLUDEPATH)) : (include template('common/suspend', TEMPLATE_INCLUDEPATH));?>
<div class="g-body">
    <div class="m-help">
        <!-- 正文 -->
        <div class="g-wrap">
        	<?php  if($share_data['content']) { ?>
                <?php  echo $share_data['content'];?>
            <?php  } else { ?>
            <div class="m-help-main">
                <h3><?php  echo $this->module['config']['sname']?></h3>
                <div class="m-help-main-txt">
                    <p class="m-help-main-intro"><?php  echo $this->module['config']['sname']?>，就是指只需花费1元，就有机会获得一件奖品。</p>
                    <p>奖品分配对应数量的号码，每个号码价值1元；当一件奖品所有号码售出后，根据预先制定的规则计算出一个幸运号码，持有该号码的用户，直接获得该奖品。</p>
                </div>
            </div>
            <div class="m-help-ext">
                <h4><?php  echo $this->module['config']['sname']?>规则</h4>
                <ol>
                    <li><span class="index">1</span><b class="txt-red">获得夺宝币：</b>用户充值1元，即可获得1个夺宝币；</li>
                    <li><span class="index">2</span><b class="txt-red">挑选喜欢的商品：</b>商品分配对应数量的号码，1个夺宝币，可以获得其中1个号码（系统随机分配）；</li>
                    <li><span class="index">3</span><b class="txt-red">获得商品：</b>当所有号码都被分配完毕后，系统根据规则计算出1个幸运号码，持有该号码的用户，直接获得该商品。</li>
                </ol>

                <h4>幸运号码计算规则</h4>
                <ol>
                    <li><span class="index">1</span>商品的最后一个号码分配完毕后，将公示该分配时间点前本站全部商品的最后20个参与时间；</li>
                    <li><span class="index">2</span>将这20个时间的数值进行求和（得出数值A）（每个时间按时、分、秒、毫秒的顺序组合，如20:15:25.362则为201525362）；</li>
                    <li><span class="index">3</span>为保证公平公正公开，系统还会等待一小段时间，取最近下一期中国福利彩票“老时时彩”的开奖结果（一个五位数值B）；</li>
                    <li><span class="index">4</span>（数值A+数值B）除以该商品总需人次得到的余数 + 原始数&nbsp;10000001，得到最终幸运号码，拥有该幸运号码者，直接获得该商品。</li>
                    <li>注：最后一个号码认购时间距离“老时时彩”最近下一期开奖大于24小时，默认“老时时彩”开奖结果为00000；如遇福彩中心通讯故障，无法获取“老时时彩”开奖结果，最后一个号码分配时间距离故障时间大于24小时，亦默认“老时时彩”开奖结果为00000。</li>
                </ol>
            </div>
            <?php  } ?>
        </div>
    </div>
</div>
</body>

</html>