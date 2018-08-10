<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/wxshare', TEMPLATE_INCLUDEPATH)) : (include template('common/wxshare', TEMPLATE_INCLUDEPATH));?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php  if($record['type']==1) { ?>充值 - <?php  echo $this->module['config']['sname']?><?php  } else { ?>支付订单 - <?php  echo $this->module['config']['sname']?><?php  } ?></title>
	<meta name="format-detection" content="telephone=no, address=no">
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
	<meta name="apple-touch-fullscreen" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<link href="<?php  echo $_W['siteroot'];?>app/resource/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo WELIAM_INDIANA_STATIC;?>components/weui/weui.css">
	<meta content="telephone=no" name="format-detection">
	<link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/common.css" rel="stylesheet">
	<link href="<?php echo WELIAM_INDIANA_STATIC;?>css/increase/pay.css" rel="stylesheet">
	<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>components/light/light7.min.js' charset='utf-8'></script>
	<script type='text/javascript' src='<?php echo WELIAM_INDIANA_STATIC;?>components/light/light7-city-picker.js' charset='utf-8'></script>
	<script src="http://static.ydbimg.com/API/YdbOnline.js" type="text/javascript"></script>
</head>
<body>
	
<style>
	body{background:#EEE;}
	.container-fill{}
	h4{margin:15px 0;}
	h4:first-of-type{margin-top:10px;}
	.panel{padding:.5em; margin-bottom:10px;}
	.nav.nav-tabs{margin-bottom:.8em;}
	.alert .form-group{margin-bottom:0;}
	label.form-group{display:block;}
	label.form-group{font-weight:normal; overflow:hidden; border-top:1px #DDD solid; padding-top:10px;padding-bottom:0;margin-bottom:0 }
	label.form-group .col-xs-2{margin-top:0px;}
	label.form-group input[name="type"]{opacity:0; width:0;}
	#wq_card .form-group{border-top:none;border-bottom:1px solid #ccc;}
	#wq_card .form-group .col-xs-2{margin-top:15px;}
	#wq_card .form-group:last-child{border-bottom:none}
	.list-group-item{border: 1px solid #FFF;}
	.tr-main{background-color: #FFFFFF;border-top: 1px solid rgba(222,222,220,0.8);border-bottom: 1px solid rgba(222,222,220,0.8);padding-left: 15px;margin-top: 20px;}
	.tr-main p{display: block;heightu: 44px;line-height: 44px;border-bottom: 1px solid rgba(222,222,220,0.8);color: #333333;position: relative; font-size: 15px}
	.tr-main p:last-child{border-bottom:none;}
	p{margin: 0 0 0px;}
	.pull-right{margin-right: 8px;}
	.btn-success{background-color: #04BE02;border-color: #04BE02;}
</style>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/suspend', TEMPLATE_INCLUDEPATH)) : (include template('common/suspend', TEMPLATE_INCLUDEPATH));?>
<div class="m-pay-order">
	<input type="hidden" id="ordersn" name="ordersn" value="<?php  echo $params['tid'];?>" />
	<!--订单统计开始-->
	<?php  if($record['type']!=1) { ?>
	<div data-pro="list">
		<div id="pro-view-1">
			<div data-pro="entry" class="m-pay-order-list" style="max-height: 128px;overflow: auto;font-size: 13.4px;">
				<?php  if(is_array($thisCart)) { foreach($thisCart as $cart) { ?>
				<div class="m-pay-order-list-item" id="pro-view-2">
					<span class="m-pay-order-list-item-name"><?php  echo $cart['title'];?></span><span class="m-pay-order-list-item-num"><b class="txt-red"><?php  echo $cart['num'];?></b>人次</span>
				</div>
				<?php  } } ?>
				<input type="hidden" id="openid" name="openid" value="<?php  echo $record['openid'];?>" />
				<input type="hidden" id="uniacid" name="uniacid" value="<?php  echo $record['uniacid'];?>" />
			</div>
			<div class="m-pay-order-total"style="font-size: 16px;">
				商品合计：<b class="txt-red"><?php  echo $money;?>夺宝币</b>
			</div>
		</div>
	</div>
	<?php  } ?>
	<!--订单统计结束-->
	
	<input type="hidden" id="money" name="money" value="<?php  echo $money;?>" />
	<!--余额支付开始-->
	<?php  if($this->module['config']['switch_credit'] == 2 && $record['type'] != 1) { ?>
	<div class="small-title">
		<em>余额支付</em>
	</div>
	<div class="w-checkBar w-checkBar-box"style="height: 68px;line-height: normal;" id="yepay" onclick="confirm('您将使用余额支付')==true ? yepay():$.toast('已取消余额支付');">
		<span id="pro-view-23"><img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/yu.png" />
		<div class="payment">余额支付</div>
		<span class="txt-red w-bar-extText"style="line-height: 68px;font-size: 14px;"><?php  echo $money;?>夺宝币</span>
		<i>余额：<?php  echo $thismember['credit2'];?>夺宝币</i>
		</span>
	</div>
	<?php  } ?>
	<!--余额支付结束-->
	<div class="small-title">
		<em>其他支付方式</em>
	</div>
	<div data-pro="options" class="m-pay-order-options" id="choose">
		
		
		
		
		<!--系统支付开始-->
		<?php  if($this->module['config']['switch_sys'] == 2) { ?>
		<?php  if(!empty($pay['wechat']['switch']) && $this->module['config']['sys_wxpay'] == 2 && WL_USER_AGENT == 'weixin') { ?>
		<form action="<?php  echo url('mc/cash/wechat');?>" method="post" id="post_wxpay">
			<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
			<input type="hidden" name="encrypt_code" value="" />
			<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
			<input type="hidden" name="coupon_id" value="" />
			<div class="w-checkBar w-bar w-checkBar-disabled" onclick="$.toast('支付跳转中');$('#post_wxpay').submit();">
				<span id="pro-view-24">
				<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/wei.png">微信支付
					<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
				<div class="w-bar-ext">
					<b data-pro="switcher" class="w-checkbox">
					</b>
					<input type="checkbox">
				</div>
			</div>
		</form>
		<?php  } ?>
		
		<?php  if(!empty($pay['alipay']['switch']) && $this->module['config']['sys_alipay'] == 2 && WL_USER_AGENT == 'weixin') { ?>
		<form action="<?php  echo url('mc/cash/alipay');?>" method="post" id="post_alipay">
			<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
			<input type="hidden" name="encrypt_code" value="" />
			<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
			<input type="hidden" name="coupon_id" value="" />
			<div class="w-checkBar w-bar w-checkBar-disabled" id="" onclick="$.toast('支付跳转中');$('#post_alipay').submit();">
				<span id="pro-view-24">
					<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/zhi.png">支付宝支付
					<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
				<div class="w-bar-ext">
					<b data-pro="switcher" class="w-checkbox">
					</b>
					<input type="checkbox" disabled="disabled">
				</div>
			</div>
		</form>
		<?php  } ?>
		
		<?php  if(WL_USER_AGENT == 'yunapp' && $this->module['config']['switch_appAlipay'] == 2) { ?>
		<div class="w-checkBar w-bar w-checkBar-disabled" id="" onclick="Alipay()">
			<span id="pro-view-24">
				<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/zhi.png">支付宝支付
				<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
			<div class="w-bar-ext">
				<b data-pro="switcher" class="w-checkbox">
				</b>
				<input type="checkbox" disabled="disabled">
			</div>
		</div>
		<?php  } ?>
		
		<?php  if(!empty($pay['unionpay']['switch']) && $this->module['config']['sys_ylpay'] == 2) { ?>
		<form action="<?php  echo url('mc/cash/unionpay');?>" method="post" id="post_ylpay">
			<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
			<input type="hidden" name="encrypt_code" value="" />
			<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
			<input type="hidden" name="coupon_id" value="" />
			<div class="w-checkBar w-bar w-checkBar-disabled" id="" onclick="$.toast('支付跳转中');$('#post_ylpay').submit();">
				<span id="pro-view-24">银联支付<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
				<div class="w-bar-ext">
					<b data-pro="switcher" class="w-checkbox">
					</b>
					<input type="checkbox" disabled="disabled">
				</div>
			</div>
		</form>
		<?php  } ?>
		
		<?php  if(!empty($pay['baifubao']['switch']) && $this->module['config']['sys_bdpay'] == 2) { ?>
		<form action="<?php  echo url('mc/cash/baifubao');?>" method="post" id="post_bdpay">
			<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
			<input type="hidden" name="encrypt_code" value="" />
			<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
			<input type="hidden" name="coupon_id" value="" />
			<div class="w-checkBar w-bar w-checkBar-disabled" id="" onclick="$.toast('支付跳转中');$('#post_bdpay').submit();">
				<span id="pro-view-24">百度钱包支付<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
				<div class="w-bar-ext">
					<b data-pro="switcher" class="w-checkbox">
					</b>
					<input type="checkbox" disabled="disabled">
				</div>
			</div>
		</form>
		<?php  } ?>
		<?php  } ?>
		<!--系统支付结束-->
		
		<!--Ping++支付开始-->
		<?php  if($this->module['config']['switch_ping'] == 2) { ?>
		<div class="w-checkBar w-bar w-checkBar-disabled" id="pingxx">
			<span id="pro-view-24">
				<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/p++.png">ping++支付
				<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
			<div class="w-bar-ext">
				<b data-pro="switcher" class="w-checkbox">
				</b>
				<input type="checkbox">
			</div>
		</div>
		<?php  } ?>
		<!--Ping++支付结束-->
		
		<!--微信云支付开始-->
		<?php  if($this->module['config']['switch_yunpay'] == 2) { ?>
		<form action="<?php  echo $this->createMobileUrl('cash',array('type'=>'yunpay','params'=>base64_encode(json_encode($params)),'card_id'=>base64_encode($card_id),'cart_type'=>$record['buystatus']))?>" method="post" id="post_yunpay">
			<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
			<input type="hidden" name="encrypt_code" value="" />
			<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
            <input type="hidden" id="cart_type" name="cart_type" value="<?php  echo $record['buystatus'];?>" />
			<input type="hidden" name="coupon_id" value="" />
			<div class="w-checkBar w-bar w-checkBar-disabled" onclick="$.toast('支付跳转中');$('#post_yunpay').submit();">
				<span id="pro-view-24">
					<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/yun.png">微信云支付
					<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
				<div class="w-bar-ext">
					<b data-pro="switcher" class="w-checkbox">
					</b>
					<input type="checkbox">
				</div>
			</div>
		</form>
		<?php  } ?>
		<!--微信云支付结束-->
		
		<!--爱贝支付开始-->
		<?php  if($this->module['config']['switch_iapppay'] == 2) { ?>
		<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
		<input type="hidden" name="encrypt_code" value="" />
		<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
		<input type="hidden" name="coupon_id" value="" />
		<div class="w-checkBar w-bar w-checkBar-disabled" id="aipay" value="iapppay" onclick="$.toast('支付跳转中');aiPay();">
			<span id="pro-view-24">
				<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/ai.png">爱贝支付
				<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
			<div class="w-bar-ext">
				<b data-pro="switcher" class="w-checkbox">
				</b>
				<input type="checkbox">
			</div>
		</div>
		<?php  } ?>
		<!--爱贝云支付结束-->
		
		<!--服务商支付开始-->
		<?php  if($this->module['config']['switch_fwpay'] == 2 && WL_USER_AGENT == 'weixin') { ?>
		<form action="<?php  echo $this->createMobileUrl('wechat_cash')?>" method="post" id="post_fwpay">
			<input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
			<input type="hidden" name="encrypt_code" value="" />
			<input type="hidden" name="card_id" value="<?php  echo base64_encode($card_id);?>" />
			<input type="hidden" name="coupon_id" value="" />
			<div class="w-checkBar w-bar w-checkBar-disabled" id="" onclick="$.toast('支付跳转中');$('#post_fwpay').submit();">
				<span id="pro-view-24">
					<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/wei2.png">微信支付
					<span class="txt-red w-bar-extText"><?php  echo $money;?>.00元</span></span>
				<div class="w-bar-ext">
					<b data-pro="switcher" class="w-checkbox">
					</b>
					<input type="checkbox">
				</div>
			</div>
		</form>
		<?php  } ?>
		<!--服务商支付结束-->
	</div>
	<?php  if(!empty($mine)) { ?>
		<?php  if(is_array($mine)) { foreach($mine as $mi) { ?>
		<p><?php  echo $mi['name'];?> :<span class="pull-right"><?php  echo $mi['value'];?></span></p>
		<?php  } } ?>
	<?php  } ?>	
</div>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/common_message', TEMPLATE_INCLUDEPATH)) : (include template('common/common_message', TEMPLATE_INCLUDEPATH));?>
<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
<script type="text/javascript" src="<?php echo WELIAM_INDIANA_STATIC;?>js/pingpp_one.js"></script>
<script src="http://web.iapppay.com/h5/v1.0.1/js/aibei_v1.1.0.js" type="text/javascript" charset="utf-8"></script>
<script>
	//余额支付
	var nexttime = 0;
	function yepay(){
		if(nexttime < (new Date()).valueOf()){
			nexttime = (new Date()).valueOf() + 30000;
		}else{
			$.toast('不能频繁提交');
			return false;
		} 
		$.toast('正在支付，请稍后');
		var openid = $('#openid').val();
		var uniacid = $('#uniacid').val();
		var ordersn = $('#ordersn').val();
		
		$.post("<?php  echo $this->createMobileUrl('pay',array('type'=>'credit2'))?>",{openid:openid,uniacid:uniacid,ordersn:ordersn},function(d){
			if(d.result==1){
				tip("余额支付成功!",true);
				var url ="<?php  echo $this->createMobileUrl('endbuy');?>&money="+money;
				location.href=url;
			}else{
				tip(d.why,true);
			}
		},"json");
	}
</script>

<script>
	//ping++支付
	var cztype = <?php  echo $record['type'];?>;
	if(cztype == 1){
		var URL = "<?php  echo $this->createMobileUrl('person')?>";
	}else{
		var URL = "<?php  echo $this->createMobileUrl('endbuy')?>";
	}
	
	//支付方式判断
	var paytype = [];
	if('<?php  echo $this->module['config']['isalipay']?>' == 2){
		paytype.push('alipay_wap');
	}
	if('<?php  echo $this->module['config']['iswxpay']?>' == 2){
		paytype.push('wx_pub');
	}
	if('<?php  echo $this->module['config']['isjdpay']?>' == 2){
		paytype.push('jdpay_wap');
	}
	if('<?php  echo $this->module['config']['isbfbpay']?>' == 2){
		paytype.push('bfb_wap');
	}
    document.getElementById('pingxx').addEventListener('click',function(){
        pingpp_one.init({
            app_id:'<?php  echo $this->module['config']['App_ID']?>',                     //该应用在 ping++ 的应用 ID
            order_no:'<?php  echo $params['tid'];?>',                     //订单在商户系统中的订单号
            amount:<?php  echo $money;?>,                               //订单价格，单位：人民币 分
            // 壹收款页面上需要展示的渠道，数组，数组顺序即页面展示出的渠道的顺序
            // upmp_wap 渠道在微信内部无法使用，若用户未安装银联手机支付控件，则无法调起支付
            channel:paytype,
            charge_url:"<?php  echo $this->createMobileUrl('pay_ping')?>",  //商户服务端创建订单的 url
            charge_param:{cztype:cztype},                      //(可选，用户自定义参数，若存在自定义参数则壹收款会通过 POST 方法透传给 charge_url)
            open_id:'<?php  echo $openid;?>',                      //(可选，使用微信公众号支付时必须传入)
            debug:false                                   //(可选，debug 模式下会将 charge_url 的返回结果透传回来)
        },function(res){
            //debug 模式下获取 charge_url 的返回结果
            if(res.debug&&res.chargeUrlOutput){
                console.log(res.chargeUrlOutput);
            }
            if(!res.status){
                //处理错误
                alert(JSON.stringify(res));
            }
            else{
                //debug 模式下调用 charge_url 后会暂停，可以调用 pingpp_one.resume 方法继续执行
                if(res.debug&&!res.wxSuccess){
                    if(confirm('当前为 debug 模式，是否继续支付？')){
                        pingpp_one.resume();
                    }
                }
                window.location.href = URL;
            }
        });
    });
</script>

<script>
　　//爱贝支付生成对象
　　var aibeiPay = new AiBeiPay();
   //进入方法
    function aiPay() {
        try{
            javascript:contact.pay($('#ordersn').val());
        }catch(err){  
            var transId = selectPost($('#ordersn').val()); //向服务器下单获取下单编号，此函数需自己编写
            if (transId == undefined){
                return '参数错误';
            }
            var urls = getEncStr(transId);
            location.href = "https://web.iapppay.com/czb/exbegpay?"+urls;
        }
    }
   
    //向服务器请求下单
    function selectPost(waresid) {
        var id = "";
        <?php  if($record['type']==1) { ?>
        var ptype = 'recharge';
        <?php  } else { ?>
        var ptype = 'buy';
        <?php  } ?>
        $.ajax({
            url : "<?php  echo $this->createMobileUrl('aibeipay')?>",
            type : 'POST',
            dataType : "text",
            async : false,
            data : {
                orderid : waresid,
                op : 'sendpay',
                ptype : ptype,
            },
            success : function(data) {
                id = data;
            },
            error : function(e) {
                console.log(e);
            }
        });
        return id;
    }
//			
//			    //获得sign
    function getEncStr(id) {
        var urls = ""
        $.ajax({
            url : "<?php  echo $this->createMobileUrl('aibeipay')?>",
            type : 'POST',
            dataType : "text",
            data : {
				id : id,
                op : 'getencstr'
            },
            async : false,
            success : function(data) {
                urls = data;
            },
            error : function(e) {
                console.log(e);
            }
        });
        return urls;
    }
</script>

<script>
	//云打包支付
	//支付宝移动支付
	function Alipay(){
		var YDB = new YDBOBJ();
		var type = 0;
		<?php  if($record['type']==1) { ?>
		type = 1;
		<?php  } ?>
		YDB.SetAlipayInfo("<?php  echo $this->module['config']['sname']?>", "<?php  echo $openid.'|'.$_W['uniacid'].'|'?>"+type, "<?php  echo $money;?>","<?php  echo $params['tid'];?>");
	}
</script>