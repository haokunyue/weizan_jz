<?php defined('IN_IA') or exit('Access Denied');?><!-- 关注参数设置开始 -->
<div class="tab-pane" id="tab_attention">
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">关注二维码</label>
		<div class="col-sm-8">
			<?php  echo tpl_form_field_image('followed_image', $settings['followed_image']);?>(建议430*430)
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">引导关注提示语</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="followed_message" class="form-control" value="<?php  echo $settings['followed_message'];?>" />(建议少于15字)
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">未关注时能否购买</label>
		<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
                <label class="radio radio-inline">
					<input type="radio" name="followed_isbuy" value="1" <?php  if($settings['followed_isbuy']==1) { ?>checked="checked"<?php  } ?>> 能
				</label>
				<label class="radio radio-inline">
					<input type="radio" name="followed_isbuy" value="2" <?php  if($settings['followed_isbuy']==2) { ?>checked="checked"<?php  } ?>> 不能         (默认能够买)
				</label>
		</div>
	</div>
	<div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">邀请关注送积分</label>
		<div class="col-xs-12 col-sm-3 input-group" style="float: left;margin-left: 15px;">
            <input type="text" name="credit1_followed" class="form-control" value="<?php  echo $settings['credit1_followed'];?>">
            <span class="input-group-addon">积分</span>
  		</div>	
  		<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
            <label class="radio radio-inline">
				<input type="radio" name="iscredit1_followed" value="1" <?php  if($settings['iscredit1_followed']==1) { ?>checked="checked"<?php  } ?>> 关闭
			</label>
			<label class="radio radio-inline">
				<input type="radio" name="iscredit1_followed" value="2" <?php  if($settings['iscredit1_followed']==2) { ?>checked="checked"<?php  } ?>> 开启(默认关闭)
			</label>
		</div>
	</div>
</div>
<!-- 关注参数设置结束 -->