<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs" id="myTab">
	<li class="active"><a href="#tab_share">分享设置</a></li>
	<li><a href="#tab_rebate">返利设置</a></li>
	<li><a href="#tab_from">模板消息</a></li>
	<li><a href="#tab_shop">商城信息</a></li>
	<li><a href="#tab_pay">支付参数</a></li>
	<li><a href="#tab_attention">引导关注</a></li>
	<!--<li><a href="#tab_note">短信通知</a></li>-->
	<li><a href="#tab_app">APP设置</a></li>
	<li><a href="#tab_other">其他设置</a></li>
</ul>
<div class="main">
	<form action="" method="post" class="form-horizontal form" id="setting-form">
		<div class="panel panel-default">
			<div class="panel-heading">参数设置</div>
			<div class="panel-body">
				<div class="tab-content">
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingShare', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingShare', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingRebate', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingRebate', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingFrom', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingFrom', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingShop', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingShop', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingPay', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingPay', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingAttention', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingAttention', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingNote', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingNote', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingApp', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingApp', TEMPLATE_INCLUDEPATH));?>
					<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('setting/settingOther', TEMPLATE_INCLUDEPATH)) : (include template('setting/settingOther', TEMPLATE_INCLUDEPATH));?>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</form>
</div>
<script>
$(function () {
		window.optionchanged = false;
		$('#myTab a').click(function (e) {
			e.preventDefault();//阻止a链接的跳转行为
			$(this).tab('show');//显示当前选中的链接及关联的content
		})
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>