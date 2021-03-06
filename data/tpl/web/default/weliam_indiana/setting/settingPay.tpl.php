<?php defined('IN_IA') or exit('Access Denied');?><!--
	作者：800083075@qq.com
	时间：2016-01-20
	描述：ping++支付参数设置开始
-->

<style>
	.tab-pane-pay{margin-top: 5px;border: 1px solid #f2f2f2;padding:10px 0px 10px 0px; border-radius: 3px;}
</style>
<div id="tab_pay" class="tab-pane">
	<!--余额支付开始-->
	<div class="tab-pane tab-pane-pay" id="tab_sys">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">余额支付</label>
			<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	            <label class="radio radio-inline">
					<input type="radio" name="switch_credit" value="1" <?php  if($settings['switch_credit']==1 || empty($settings['switch_credit'])) { ?>checked="checked"<?php  } ?>  onclick="$('#syspay').hide()"> 关闭
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="switch_credit" value="2" <?php  if($settings['switch_credit']==2) { ?>checked="checked"<?php  } ?> onclick="$('#syspay').show()"> 开启
				</label>
			</div>
		</div>
	</div>
	<!--余额支付结束-->
	<!--ping++支付开始-->
	<div class="tab-pane tab-pane-pay" id="tab_sys">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微赞支付</label>
			<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	            <label class="radio radio-inline">
					<input type="radio" name="switch_sys" value="1" <?php  if($settings['switch_sys']==1 || empty($settings['switch_sys'])) { ?>checked="checked"<?php  } ?>  onclick="$('#syspay').hide()"> 关闭
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="switch_sys" value="2" <?php  if($settings['switch_sys']==2) { ?>checked="checked"<?php  } ?> onclick="$('#syspay').show()"> 开启
				</label>
			</div>
		</div>
		<div id="syspay" style="<?php  if(intval($settings['switch_sys']) != 2) { ?>display: none;<?php  } ?>">
			<div class="alert alert-warning" style="width: 80%;margin-left: 10%;">
				<div class="alert alert-warning">
					开启本支付，首先需要对应开启微赞自带支付，请到支付参数进行设置。
				</div>
			</div>
			<!-- 支付方式设置 -->
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微赞微信支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	                    <label class="radio radio-inline">
							<input type="radio" name="sys_wxpay" value="1" <?php  if($settings['sys_wxpay']==1 || empty($settings['sys_wxpay'])) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="sys_wxpay" value="2" <?php  if($settings['sys_wxpay']==2) { ?>checked="checked"<?php  } ?>> 开启
						</label>
					</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微赞支付宝支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	                    <label class="radio radio-inline">
							<input type="radio" name="sys_alipay" value="1" <?php  if($settings['sys_alipay']==1 || empty($settings['sys_alipay'])) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="sys_alipay" value="2" <?php  if($settings['sys_alipay']==2) { ?>checked="checked"<?php  } ?>> 开启
						</label>
					</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微赞银联支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
                    <label class="radio radio-inline">
						<input type="radio" name="sys_ylpay" value="1" <?php  if($settings['sys_ylpay']==1 || empty($settings['sys_ylpay'])) { ?>checked="checked"<?php  } ?>> 关闭
					</label>
					<label class="radio radio-inline">
						<input type="radio" name="sys_ylpay" value="2" <?php  if($settings['sys_ylpay']==2) { ?>checked="checked"<?php  } ?>> 开启
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微赞百度钱包支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	                    <label class="radio radio-inline">
							<input type="radio" name="sys_bdpay" value="1" <?php  if($settings['sys_bdpay']==1 || empty($settings['sys_bdpay'])) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="sys_bdpay" value="2" <?php  if($settings['sys_bdpay']==2) { ?>checked="checked"<?php  } ?>> 开启
						</label>
				</div>
			</div>
		</div>
	</div>
	<!--系统支付支付结束-->
	
	
	<!--ping++支付开始-->
	<div class="tab-pane tab-pane-pay" id="tab_pingpay">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">Ping++支付</label>
			<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	            <label class="radio radio-inline">
					<input type="radio" name="switch_ping" value="1" <?php  if($settings['switch_ping']==1 || empty($settings['switch_ping'])) { ?>checked="checked"<?php  } ?>  onclick="$('#pingxx').hide()"> 关闭
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="switch_ping" value="2" <?php  if($settings['switch_ping']==2) { ?>checked="checked"<?php  } ?> onclick="$('#pingxx').show()"> 开启
				</label>
			</div>
		</div>
		<div id="pingxx" style="<?php  if(intval($settings['switch_ping']) != 2) { ?>display: none;<?php  } ?>">
			<div class="alert alert-warning" style="width: 80%;margin-left: 10%;">
				<div class="alert alert-warning">
					<h4>微信支付授权目录</h4>
					<p><?php  echo $_W['siteroot'];?>app/</p><br />
					<h4>Webhooks接收 URL</h4>
					<p><?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=webhooks&m=weliam_indiana</p><br />
					Ping++登录地址 <a href="https://www.pingxx.com" target="_blank">申请及详情请查看这里</a>.
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">应用 ID (App_ID)</label>
				<div class="col-xs-12 col-sm-8">
					<input type="text" name="App_ID" class="form-control" value="<?php  echo $settings['App_ID'];?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">Live Secret Key</label>
				<div class="col-xs-12 col-sm-8">
					<input type="text" name="Secret_Key" class="form-control" value="<?php  echo $settings['Secret_Key'];?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">Live Publishable Key</label>
				<div class="col-xs-12 col-sm-8">
					<input type="text" name="Publishable_Key" class="form-control" value="<?php  echo $settings['Publishable_Key'];?>" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">Ping++ 公钥</label>
				<div class="col-sm-8 col-xs-12">
					<textarea name="PUBLIC_KEY" class="form-control" style="margin: 0px; width: 100%; height: 130px;"><?php  echo $settings['PUBLIC_KEY'];?></textarea>
					<span class="help-block">所有配置不得为空</span>
				</div>
			</div>
			<!-- 支付方式设置 -->
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">支付宝支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	                    <label class="radio radio-inline">
							<input type="radio" name="isalipay" value="1" <?php  if($settings['isalipay']==1) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="isalipay" value="2" <?php  if($settings['isalipay']==2) { ?>checked="checked"<?php  } ?>> 开启
						</label>
					</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微信支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	                    <label class="radio radio-inline">
							<input type="radio" name="iswxpay" value="1" <?php  if($settings['iswxpay']==1) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="iswxpay" value="2" <?php  if($settings['iswxpay']==2) { ?>checked="checked"<?php  } ?>> 开启
						</label>
					</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">京东钱包支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	                    <label class="radio radio-inline">
							<input type="radio" name="isjdpay" value="1" <?php  if($settings['isjdpay']==1) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="isjdpay" value="2" <?php  if($settings['isjdpay']==2) { ?>checked="checked"<?php  } ?>> 开启
						</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">百度钱包支付</label>
				<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	                    <label class="radio radio-inline">
							<input type="radio" name="isbfbpay" value="1" <?php  if($settings['isbfbpay']==1) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="isbfbpay" value="2" <?php  if($settings['isbfbpay']==2) { ?>checked="checked"<?php  } ?>> 开启
						</label>
				</div>
			</div>
		</div>
	</div>
	<!--ping++支付结束-->
		
		
	<!--微信云支付开始-->
	<div class="tab-pane tab-pane-pay" id="tab_yunpay">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微信云支付</label>
			<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	            <label class="radio radio-inline">
					<input type="radio" name="switch_yunpay" value="1" <?php  if($settings['switch_yunpay']==1 || empty($settings['switch_yunpay'])) { ?>checked="checked"<?php  } ?>  onclick="$('#yunpay').hide()"> 关闭
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="switch_yunpay" value="2" <?php  if($settings['switch_yunpay']==2) { ?>checked="checked"<?php  } ?> onclick="$('#yunpay').show()"> 开启
				</label>
			</div>
		</div>
		<div id="yunpay" style="<?php  if(intval($settings['switch_yunpay']) != 2) { ?>display: none;<?php  } ?>">
			<div class="alert alert-warning" style="width: 80%;margin-left: 10%;">
				为防止您的微信支付被封，建议您采用云支付接口 <a href="http://www.yunpay.net.cn/" target="_blank">申请及详情请查看这里</a>.
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">云支付PID</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="yunpay_partner" class="form-control" value="<?php  echo $settings['yunpay_partner'];?>" />
					<span class="help-block">功能选项-注意更新缓存一下</span>
				</div>
			</div>
	        <div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">云支付KEY</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="yunpay_key" class="form-control" value="<?php  echo $settings['yunpay_key'];?>" />
					
				</div>
			</div>
	        <div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">云支付账号</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="yunpay_seller_email" class="form-control" value="<?php  echo $settings['yunpay_seller_email'];?>" />
				</div>
			</div>
		</div>
	</div>
	<!--微信云支付结束-->
	
	<!--爱贝支付开始-->
	<div class="tab-pane tab-pane-pay" id="tab_iapppay">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">爱贝支付</label>
			<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	            <label class="radio radio-inline">
					<input type="radio" name="switch_iapppay" value="1" <?php  if($settings['switch_iapppay']==1 || empty($settings['switch_iapppay'])) { ?>checked="checked"<?php  } ?>  onclick="$('#iapppay').hide()"> 关闭
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="switch_iapppay" value="2" <?php  if($settings['switch_iapppay']==2) { ?>checked="checked"<?php  } ?> onclick="$('#iapppay').show()"> 开启
				</label>
			</div>
		</div>
		<div id="iapppay" style="<?php  if(intval($settings['switch_iapppay']) != 2) { ?>display: none;<?php  } ?>">
			<div class="alert alert-warning" style="width: 80%;margin-left: 10%;">
				爱贝云支付接口 <a href="https://www.iapppay.com/home.html" target="_blank">申请及详情请查看这里</a>.
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">应用appid</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="iapppay_appid" class="form-control" value="<?php  echo $settings['iapppay_appid'];?>" />
				</div>
			</div>
	        <div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">应用密匙（PHP版本密匙）</label>
				<div class="col-sm-8 col-xs-12">
					<textarea name="iapppay_appv_key" style="margin: 0px; width: 100%; height: 130px;"><?php  echo $settings['iapppay_appv_key'];?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">平台公钥</label>
				<div class="col-sm-8 col-xs-12">
					<textarea name="iapppay_platp_key"  style="margin: 0px; width: 100%; height: 130px;"><?php  echo $settings['iapppay_platp_key'];?></textarea>
				</div>
			</div>
		</div>
	</div>
	<!--爱贝支付结束-->
	
	<!--微信服务商支付开始-->
	<div class="tab-pane tab-pane-pay" id="tab_fwpay">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微信服务商支付</label>
			<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
	            <label class="radio radio-inline">
					<input type="radio" name="switch_fwpay" value="1" <?php  if($settings['switch_fwpay']==1 || empty($settings['switch_fwpay'])) { ?>checked="checked"<?php  } ?>  onclick="$('#fwpay').hide()"> 关闭
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="switch_fwpay" value="2" <?php  if($settings['switch_fwpay']==2) { ?>checked="checked"<?php  } ?> onclick="$('#fwpay').show()"> 开启
				</label>
			</div>
		</div>
		<div id="fwpay" style="<?php  if(intval($settings['switch_fwpay']) != 2) { ?>display: none;<?php  } ?>">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">服务商appid</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="fw_appid" class="form-control" value="<?php  echo $settings['fw_appid'];?>" />
				</div>
			</div>
	        <div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">服务商商户号mch_id</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="fw_mch_id" class="form-control" value="<?php  echo $settings['fw_mch_id'];?>" />
					
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">服务商支付密钥(API密钥)</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="fw_api" class="form-control" value="<?php  echo $settings['fw_api'];?>" />
				</div>
			</div>
	        <div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">特约商户商户号sub_mch_id</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="ty_sub_mch_id" class="form-control" value="<?php  echo $settings['ty_sub_mch_id'];?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">特约商户appid(可不填)</label>
				<div class="col-sm-8 col-xs-12">
					<input type="text" name="ty_appid" class="form-control" value="<?php  echo $settings['ty_appid'];?>" />
				</div>
			</div>
		</div>
	</div>
	<!--微信服务商支付结束-->
</div>
