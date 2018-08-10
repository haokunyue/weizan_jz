<?php defined('IN_IA') or exit('Access Denied');?><!--返利设置-->
<div class="tab-pane" id="tab_rebate">
	<div class="panel-body">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">返利等级</label>
            <div class="col-sm-9 col-xs-12">
                <select class="form-control" name="level">
                    <option value="0" selected="">不开启返利机制</option>
                    <option value="1" <?php  if($settings['level']==1) { ?>selected="selected" <?php  } ?>>一级返利</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
            <div class="col-sm-9 col-xs-12">
                <div class="input-group">
                    <div class="input-group-addon">一级返利</div>
                    <input type="text" name="level1" class="form-control" value="<?php  echo $settings['level1'];?>">
                    <div class="input-group-addon">积分</div>
                </div>
            </div>
        </div>
        <div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">邀请图片</label>
			<div class="col-xs-12 col-sm-8">
	<?php  echo tpl_form_field_image('invitepicarr', $this->module['config']['invitepicarr']);?>
				<span class="help-block"></span>
			</div>
		</div>
		
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">积分兑换</label>
			<div class="col-xs-12 col-sm-4 input-group" style="float: left;margin-left: 15px;">
                <input type="text" name="credit1" class="form-control" value="<?php  echo $settings['credit1'];?>">
                <span class="input-group-addon">积分 兑换</span>
                <input type="text" name="credit2" class="form-control" value="<?php  echo $settings['credit2'];?>">
                <span class="input-group-addon">夺宝币</span>
      		</div>	
      		<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
                <label class="radio radio-inline">
					<input type="radio" name="creditstatus" value="1" <?php  if($settings['creditstatus']==1) { ?>checked="checked"<?php  } ?>> 关闭
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="creditstatus" value="2" <?php  if($settings['creditstatus']==2) { ?>checked="checked"<?php  } ?>> 开启
				</label>
			</div>
  		</div>
  		<div class="form-group">
	        <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">关注商城送夺宝币</label>
			<div class="col-xs-12 col-sm-3 input-group" style="float: left;margin-left: 15px;">
	            <input type="text" name="duobao_followed" class="form-control" value="<?php  echo $settings['duobao_followed'];?>">
	            <span class="input-group-addon">夺宝币</span>
	  		</div>	
	  		<span class="help-block">（默认不送夺宝币）</span>
		</div>
		<div class="form-group">
	        <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">购买返积分（购买基数为1个夺宝币）</label>
			<div class="col-xs-12 col-sm-3 input-group" style="float: left;margin-left: 15px;">
	            <input type="text" name="buy_followed" class="form-control" value="<?php  echo $settings['buy_followed'];?>">
	            <span class="input-group-addon">积分</span>
	  		</div>	
	  		<span class="help-block">（默认不送积分）</span>
		</div>
		<div class="form-group">
	        <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">晒单返积分</label>
			<div class="col-xs-12 col-sm-3 input-group" style="float: left;margin-left: 15px;">
	            <input type="text" name="creditBySingle" class="form-control" value="<?php  echo $settings['creditBySingle'];?>">
	            <span class="input-group-addon">积分</span>
	  		</div>	
	  		<span class="help-block">（默认不送积分）</span>
		</div>
    </div>
</div>