<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style>
	/*多图上传*/
.multi-img-details{margin-top:.5em;}
.multi-img-details .multi-item{height: 150px; max-width: 150px; position:relative; float: left; margin-right: 18px;}
.multi-img-details .multi-item img{max-width: 150px; max-height: 150px;}
.multi-img-details .multi-item em{position:absolute; top: 0; right: -14px;}

@media (min-width: 1200px)
.col-lg-7 {
    width: 4%;
}
</style>
<ul class="nav nav-tabs">
	<li><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'display'));?>">商品列表</a></li>
	<li <?php  if(empty($id)) { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit'));?>">添加商品</a></li>
	<?php  if(!empty($id)) { ?>
	<li class="active"><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit', 'id'=>$id));?>">编辑商品</a></li>
	<?php  } ?>
</ul>

<div class="main">
	<form action="" method="post" class="form-horizontal form" id="form">
		<div class="panel panel-default">
			<div class="panel-heading">商品信息</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品排序</label>
					<div class="col-xs-12 col-sm-8">
						<input style="width: 50%;" type="text" name="goods[sort]" class="form-control" value="<?php  echo $goods['sort'];?>" />
						(数字越大排序越靠前)
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品标题</label>
					<div class="col-xs-12 col-sm-8">
						<input type="text" name="goods[title]" class="form-control" value="<?php  echo $goods['title'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>商品分类</label>
					<div class="col-xs-12 col-sm-8">
					 <?php  echo tpl_form_field_category_2level('category', $category, $childs, $goods['category_parentid'], $goods['category_childid'])?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品图片</label>
					<div class="col-xs-12 col-sm-8">
						<?php  echo tpl_form_field_image('goods[picarr]', $goods['picarr']);?>
						<span class="help-block">图片建议为正方形</span>
					</div>
				</div>
				<div class="form-group">
        			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品幻灯图</label>
        			<div class="col-xs-12 col-sm-8">
           				<?php  echo tpl_form_field_multi_image('img',$piclist);?>
            			<span class="help-block">商品详情幻灯片，建议600X300</span>
        			</div>
    			</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品价格</label>
					<div class="col-xs-12 col-sm-8">
						<div class="input-group">
							<input type="text" name="goods[price]" class="form-control" value="<?php  echo $goods['price'];?>" <?php  if(!empty($id)) { ?> disabled="disabled" <?php  } ?>>
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品详情</label>
					<div class="col-xs-12 col-sm-8">
						<?php  echo tpl_ueditor('goods[content]', $goods['content']);?>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">夺宝设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">几元专区</label>
					<div class="col-xs-12 col-sm-8">
						<input style="width: 50%;" type="text" name="goods[init_money]" class="form-control" value="<?php  echo $goods['init_money'];?>" />
						<?php  if($goods['next_init_money'] == 0) { ?>(下期专区价格不变)<?php  } else { ?>(本期结束，下一期专区价格修改为<?php  echo $goods['next_init_money'];?>元专区)<?php  } ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">最大购买数</label>
					<div class="col-xs-12 col-sm-8">
						<input style="width: 50%;" type="text" name="goods[maxnum]" class="form-control" value="<?php  echo $goods['maxnum'];?>" />
						(0为任意购买数量，默认0)
					</div>
				</div>
				
				<div class="form-group">
		            <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">是否发送开奖通知</label>
              		<div class="col-xs-12 col-sm-8" style="width: 70%;">
                        <label class="radio radio-inline">
							<input type="radio" name="goods[is_alert]" value="1" <?php  if($goods['is_alert']==1 || $goods['is_alert']==0) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="goods[is_alert]" value="2" <?php  if($goods['is_alert']==2) { ?>checked="checked"<?php  } ?>>开启(真实用户参与过多的情况下，会根据限制随机发送200个通知)
						</label>
					</div>
          		</div>
          		
          		<div class="form-group">
		            <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">自动发货</label>
					<div class="col-xs-12 col-sm-3 input-group" style="float: left;margin-left: 15px;">
                        <input type="text" name="goods[automatic]" class="form-control" value="<?php  echo $goods['automatic'];?>">
                        <span class="input-group-addon">个</span>
              		</div>	
              		<div class="col-xs-12 col-sm-8" style="width: 33.3%;">
                        <label class="radio radio-inline">
							<input type="radio" name="goods[select_automatic]" value="1" <?php  if($goods['select_automatic']==1 || empty($goods['select_automatic'])) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="goods[select_automatic]" value="2" <?php  if($goods['select_automatic']==2) { ?>checked="checked"<?php  } ?>>积分
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="goods[select_automatic]" value="3" <?php  if($goods['select_automatic']==3) { ?>checked="checked"<?php  } ?>>夺宝币
						</label>
					</div>
          		</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品总期数</label>
					<div class="col-xs-12 col-sm-4">
						<div class="input-group">
							<input type="text" name="goods[maxperiods]" class="form-control" value="<?php  echo $goods['maxperiods'];?>" >
							<span class="input-group-addon">期</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">揭晓分钟数</label>
					<div class="col-xs-12 col-sm-8">
						<div class="input-group">
							<input type="text" name="goods[jiexiao_time]" class="form-control" value="<?php  echo $goods['jiexiao_time'];?>" >
							<span class="help-block">中奖后倒计时分钟数（整数）</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商品中奖码(例1000001)</label>
					<div class="col-xs-12 col-sm-8">
						<input type="text" name="code" class="form-control" value="<?php  echo $goods['code'];?>" />
						<span class="help-block">第一次添加商品时，请勿填写，等添加购买以后再填（谨慎使用）</span>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">一口价设置</div>
			<div class="panel-body">
				<!--------------------是否直接购买---------------------------------->
				<div class="form-group">
		            <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">是否开启全价购买</label>
              		<div class="col-xs-12 col-sm-8" style="width: 70%;">
                        <label class="radio radio-inline">
							<input type="radio" name="goods[is_alone]" value="0" <?php  if($goods['is_alone']==0 || $goods['is_alone']==0) { ?>checked="checked"<?php  } ?>> 关闭
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="goods[is_alone]" value="1" <?php  if($goods['is_alone']==1) { ?>checked="checked"<?php  } ?>>开启
						</label>
					</div>
          		</div>
          		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">直接购买价格</label>
					<div class="col-xs-12 col-sm-8">
						<div class="input-group">
							<input type="text" placeholder="请输入直接购买价格" name="goods[aloneprice]" class="form-control" value="<?php  echo $goods['aloneprice'];?>" >
							<span class="input-group-addon">元</span>
						</div>
					</div>
				</div>
				<!----------------------------------------------------------------->
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">其他设置</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">状态</label>
					<div class="col-xs-12 col-sm-8">
						<label class="radio radio-inline">
							<input type="radio" name="goods[status]" value="1" <?php  if(intval($goods['status']) != 2) { ?>checked="checked"<?php  } ?>> 下架
						</label>
						<label class="radio radio-inline">
							<input type="radio" name="goods[status]" value="2" <?php  if(intval($goods['status']) == 2) { ?>checked="checked"<?php  } ?>> 上架
						</label>
					</div>
				</div>
				<?php  if(!empty($id)) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">添加日期</label>
					<div class="col-xs-12 col-sm-8">
						<p class="form-control-static"><?php  echo date('Y-m-d', $goods['createtime']);?></p>
					</div>
				</div>
				<?php  } ?>
			</div>
		</div>
		<div class="form-group">
					<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 col-sm-offset-3 col-md-offset-2 col-lg-offset-2">
						<input type="hidden" name="id" value="<?php  echo $goods['id'];?>" />
						<input type="hidden" name="periods" value="<?php  echo $goods['periods'];?>" />
						<input type="hidden" name="maxcode" value="<?php  echo $goods['price'];?>" />
						<input name="submit" type="submit" value="提交" class="btn btn-primary" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
				</div>
	</form>
</div>

<script>
require(['jquery', 'util'], function($, util){
	$(function(){
		$('#form').submit(function(){
			var re = /^[1-9]+[0-9]*]*$/; 
			if(!re.test($('input[name="goods[init_money]"]').val())){
				util.message('几元专区必须是正整数.');
				return false;
			}
			if($('input[name="goods[title]"]').val() == ''){
				util.message('请填写商品名称.');
				return false;
			}
			if($('input[name="goods[picarr]"]').val() == ''){
				util.message('请上传商品图片.');
				return false;
			}
			if(!re.test($('input[name="goods[price]"]').val()/$('input[name="goods[init_money]"]').val())){
				util.message('商品价格必须是'+$('input[name="goods[init_money]"]').val()+'的整数倍');
				return false;
			}
			var maxperiods = parseFloat($('input[name="goods[maxperiods]"]').val());
			if(isNaN(maxperiods)){
				util.message('请填写商品期数.');
				return false;
			}
			return true;
		});
	});
});
require(['jquery', 'util'], function($, u){
	$(function(){
		u.editor($('.richtext')[0]);
	});
});





</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>