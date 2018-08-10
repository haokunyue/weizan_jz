<?php defined('IN_IA') or exit('Access Denied');?><div class="tab-pane" id="tab_shop">
	<div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板选择</label>
        <div class="col-sm-8 col-xs-12">
            <select class='form-control' name='style'>
                <?php  if(is_array($styles)) { foreach($styles as $style) { ?>
                <option value='<?php  echo $style;?>' <?php  if($style==$settings['style']) { ?>selected<?php  } ?>><?php  echo $style;?></option>
                <?php  } } ?>
            </select>
        </div>
    </div> 
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商城名称</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="sname" class="form-control" value="<?php  echo $settings['sname'];?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">logo</label>
		<div class="col-xs-12 col-sm-8">
			<?php  echo tpl_form_field_image('shoplogo', $settings['shoplogo']);?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">版权信息</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="copyright" class="form-control" value="<?php  echo $settings['copyright'];?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">特别说明</label>
		<div class="col-xs-12 col-sm-8">
			<input type="text" name="instruction" class="form-control" value="<?php  echo $settings['instruction'];?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">规则介绍</label>
		<div class="col-sm-8 col-xs-12">
			<?php  echo tpl_ueditor('content', $settings['content']);?>
			<span class="help-block">为空则为默认介绍</span>
		</div>
	</div>
</div>