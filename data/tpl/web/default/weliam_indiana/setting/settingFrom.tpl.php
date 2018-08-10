<?php defined('IN_IA') or exit('Access Denied');?><div class="tab-pane" id="tab_from">
	<div class="form-group">
		<label class="col-md-2 control-label">模板消息配置说明</label>
		<div class="col-md-8">
			<div class="alert alert-warning">
				<h5 style="text-indent: 18px;">注: 只有 <b>认证服务号</b> 添加消息模板后才可以使用模板消息功能。</h5>
				<ol>
					<li>登陆<a href="https://mp.weixin.qq.com/">【微信公众平台】</a>-【功能】-【模板消息】</li>
					<li>选择行业为：“IT科技 - 互联网|电子商务”</li>
					<li>在【模板库】搜索对应模板标题找到对应模板,点击详情保存添加,重复执行。</li>
					<li>把【我的模板】下对应标题复制模板ID到本页设置对应位置。</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="m_pay" class="form-control" value="<?php  echo $settings['m_pay'];?>" />
			<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——TM00001[名称：购买成功通知]</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="m_send" class="form-control" value="<?php  echo $settings['m_send'];?>" />
			<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——OPENTM200565259[名称:订单发货提醒]</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="m_suc" class="form-control" value="<?php  echo $settings['m_suc'];?>" />
			<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——OPENTM204632492[名称:中奖结果通知]</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="m_ref" class="form-control" value="<?php  echo $settings['m_ref'];?>" />
			<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——TM00004[名称:退款通知]</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="m_money" class="form-control" value="<?php  echo $settings['m_money'];?>" />
			<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——TM00980[名称:提现成功通知]</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="m_open" class="form-control" value="<?php  echo $settings['m_open'];?>" />
			<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——TM00011[名称:开奖结果通知]</span>
		</div>
	</div>
</div>