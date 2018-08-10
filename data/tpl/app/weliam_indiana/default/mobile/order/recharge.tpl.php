<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
	<head>
    <title>充值 - <?php  echo $this->module['config']['sname']?></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Pragma" content="no-cache">   
    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Expires" content="0">
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/common.css" rel="stylesheet">
    <link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/pay.css" rel="stylesheet">
    <script   src="<?php echo WELIAM_INDIANA_STATIC;?>js/jquery.js" type="text/javascript"></script>
</head>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/wxshare', TEMPLATE_INCLUDEPATH)) : (include template('common/wxshare', TEMPLATE_INCLUDEPATH));?>
<body>
    <div class="m-pay-order m-pay-recharge">
        <div data-pro="list"></div>
		 <form name='form' action="<?php  echo $this->createMobileUrl('recharge')?>"  method="post">
	        <div data-pro="options" class="m-pay-order-options">
	           <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/suspend', TEMPLATE_INCLUDEPATH)) : (include template('common/suspend', TEMPLATE_INCLUDEPATH));?>
	            <div class="w-bar m-pay-noBgTitleBar" id="pro-view-1">1、选择充值金额（元）</div>
	            <div class="m-pay-moneySelector" id="pro-view">
	                <div class="m-pay-moneySelector-item m-pay-moneySelector-item-selected"  onclick="chgclass(this)">20</div>
	                <div class="m-pay-moneySelector-item"  id="pro-view-50" onclick="chgclass(this)">50</div>
	                <div class="m-pay-moneySelector-item"  id=" pro-view-100" onclick="chgclass(this)">100</div>
	                <div class="m-pay-moneySelector-item"  id="pro-view-200" onclick="chgclass(this)">200</div>
	                <div class="m-pay-moneySelector-item"  id="pro-view-0" onclick="chgclass(this)">
	                <input type="text" placeholder="其他金额"  id="other" value="">
	                <input type="hidden" id="money" name="money" value="">
	                </div>
	            </div>
	        </div>
	        
		
        <div  class="m-pay-order-submit">
        	<input class="w-button w-button-main w-button-l" id="submit" type="submit" name="submit" value="提交"/>
        	<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
        </form>
    </div>
</body>
<script>
	var flag=0; 
	$('#submit').bind('click',function(){
		var money = $('.m-pay-moneySelector-item-selected').html();
		var num = document.getElementById('other').value;
		if(flag == 9){
			if(isNaN(num)||num<1){
				alert('输入大于1的兑换数');
				return false;
			}
		}
		money = parseInt(money);
		if(!isNaN(money)){
			if(money<=0){
				alert("兄弟,你是要商家给你钱吗");return false;
			}else{
				$('#money').val(money);
				
			}
		}else{
			var money=$('#other').val();
			money = parseInt(money);
			if(money<=0){
				alert("兄弟,你是要商家给你钱吗");return false;
			}else{
				$('#money').val(money);
			}
			
		}
	});
</script>
<script>
//div切换
function chgclass(o) {
	var u = document.getElementById('pro-view');
	var c = u.childNodes;
	for (var i = 0; i < c.length; i++) {
		if (c[i].tagName && c[i].tagName.toLowerCase() == 'div') {
			if (c[i] == o) {
				c[i].className = 'm-pay-moneySelector-item m-pay-moneySelector-item-selected';
				flag = i;
			} else {
				c[i].className = 'm-pay-moneySelector-item';
			}
		}
	}
}
</script>
</html>