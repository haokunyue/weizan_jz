<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="bs-callout bs-callout-danger" id="callout-glyphicons-empty-only">
    <h4><?php  echo $cover['name'];?>入口设置</h4>
    <p>如果你有oAuth权限也可以直接设置自定义菜单到指定链接位置.</p>
</div>
<form action="" method="post" class="form-horizontal form" >
	<div class="panel">
		<div class="panel-body">
		    <div class="form-group">
		        <label class="col-sm-2 control-label">直接链接</label>
		        <div class="col-sm-9 col-xs-12">
		            <p class='form-control-static'><a href='javascript:;' class="js-copy" title='点击复制链接' data-url="<?php  echo $cover['url']?>" ><?php  echo $cover['url']?></a></p>
		        </div>
		    </div>
		    <div class="form-group js-qrcode-show">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码</label>
				<div class="col-sm-9 col-xs-12 ">
					<div class="qrcode-block" style="margin-top:5px"><img src="<?php  echo $this->createWebUrl('entry',array('op'=>'qr','url' => $url))?>" width="150" height="150"></canvas></div>
				</div>
			</div>
		   	<div class="form-group">
		        <label class="col-sm-2 control-label must" >关键词</label>
		        <div class="col-sm-9 col-xs-12">
		            <input type='text' class='form-control' name='cover[keyword]' value="<?php  echo $cover['keyword']['content'];?>" data-rule-required="true" />
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-sm-2 control-label">封面标题</label>
		        <div class="col-sm-9 col-xs-12">
		            <input type='text' class='form-control' name='cover[title]' value="<?php  echo $cover['cover']['title'];?>" />
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-sm-2 control-label">封面图片</label>
		        <div class="col-sm-9 col-xs-12">
		            <?php  echo tpl_form_field_image('cover[thumb]',$cover['cover']['thumb'])?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-sm-2 control-label">封面描述</label>
		        <div class="col-sm-9 col-xs-12">
		            <textarea name='cover[desc]' class='form-control'><?php  echo $cover['cover']['description'];?></textarea>
		        </div>
		    </div>
		    <div class="form-group">
		        <label class="col-sm-2 control-label">状态</label>
		        <div class="col-sm-9">
		            <label class="radio-inline">
		                <input type="radio" name="cover[status]" value="0" <?php  if(empty($cover['rule']['status'])) { ?> checked="checked"<?php  } ?> />
		                       禁用
		            </label>
		            <label class="radio-inline">
		                <input type="radio" name="cover[status]" value="1" <?php  if($cover['rule']['status']==1) { ?> checked="checked"<?php  } ?>/>
		                       启用
		            </label>
		        </div>
		    </div>
		      
		    <div class="form-group">
		        <label class="col-sm-2 control-label"></label>
		        <div class="col-sm-9">
		            <button type="submit" class="btn btn-primary col-lg-1" name="submit" value="提交">提交</button>
		            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		        </div>
		    </div>
		</div>
	</div>
</form>
<script type="text/javascript">
	require(['jquery', 'util'], function($, util){
		$('.js-copy').click(function(){
			util.clip($(".js-copy"), $(this).attr('data-url'));
		});
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>