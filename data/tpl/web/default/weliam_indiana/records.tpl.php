<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<?php  if($openid) { ?>
	<li><a href="<?php  echo $this->createWebUrl('member', array('op' => 'display'))?>">会员列表</a></li>
	<li class="active"><a href="<?php  echo $this->createWebUrl('member', array('op' => 'buyre','openid'=>$openid))?>">购买记录</a></li>
	<?php  } else { ?>
	<li <?php  if($op == 'display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('record');?>">全部交易记录</a></li>
	<li <?php  if($op == 'recharge') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('record',array('op'=>'recharge'));?>">全部充值记录</a></li>
	<?php  } ?>
</ul>
<div class="panel panel-default">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form" id="form">
			<input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="weliam_indiana" />
            <input type="hidden" name="do" value="<?php  echo $_GPC['do'];?>" />
            <input type="hidden" name="op" value="<?php  echo $op;?>" />
            <input type="hidden" name="openid" value="<?php  echo $openid;?>" />
            <?php  if($op == 'display') { ?>
            <div class="form-group">
				<label class="col-md-2 control-label">身份</label>
				<div class="col-sm-8 col-xs-12">
					<div class="btn-group">
						<a href="<?php  echo $this->createWebUrl('record')?>" class="btn <?php  if($_GPC['type'] == '') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">全部</a>
						<a href="<?php  echo $this->createWebUrl('record')?>&type=person" class="btn <?php  if($_GPC['type'] == 'person') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">真实用户</a>
						<a href="<?php  echo $this->createWebUrl('record')?>&type=machine" class="btn <?php  if($_GPC['type'] == 'machine') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">虚拟用户</a>
					</div>
				</div>
			</div>
			<?php  } ?>
			<div class="form-group">
				<label class="col-md-2 control-label">时间</label>
				<div class="col-md-4">
					<?php  echo tpl_form_field_daterange('time', array('starttime'=>date('Y-m-d H:i:s', $starttime),'endtime'=>date('Y-m-d H:i:s', $endtime)),true);?>
				</div>
				<div class="col-md-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">交易记录</div>
	<div class="panel-body">
		<div class="table-responsive panel-body">
			<table class="table table-hover table-bordered" style="min-width: 300px;">
				<thead class="navbar-inner">
					<tr>
						<th class="col-sm-1 text-center">头像</th>
						<th class="col-sm-2 text-center">昵称</th>
						<th class="col-sm-1 text-center">商品图片</th>
						<th class="col-sm-2 text-center">商品名称</th>
						<th class="col-sm-1 text-center">消费<?php  echo $this -> module['config']['scose']?>数量</th>
						<th class="col-sm-1 text-center">状态</th>
						<th class="col-sm-2 text-center">消费时间</th>
						<!--<th class="col-sm-1 text-center">操作</th>-->
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($goodses)) { foreach($goodses as $goodsid => $goods) { ?>
					<tr>
						<td class="text-center"><img src="<?php  echo tomedia($goods['avatar'])?>" style="width: 40px; height: 40px;padding:1px;border: 1px dotted gray;"></td>
						<td class="text-center"><?php  if(strpos($goods['openid'],'machine') == 'true') { ?><span style="color: red;">(机器人)</span><?php  } ?><?php  echo $goods['nickname'];?></td>
						<td class="text-center"><img src="<?php  echo tomedia($goods['picarr'])?>" style="width: 40px; height: 40px;padding:1px;border: 1px dotted gray;"></td>
						<td class="text-center">第（<?php  echo $goods['periods'];?>）期  &nbsp;<?php  echo $goods['title'];?></td>
						<td class="text-center"><?php  echo $goods['num'];?> 个</td>
						<td class="text-center"><?php  if($goods['status']==1) { ?><span class="label label-success">消费成功</span><?php  } else { ?><span class="label label-default">消费失败</span><?php  } ?></td>
						<td class="text-center"><?php  echo date('Y-m-d H:i:s', $goods['createtime'])?></td>
						<!--<td class="text-center">
							<a href="<?php  echo $this->createWebUrl('showrecords', array('id'=>$goods['id']));?>" class="btn btn-success btn-sm" data-original-title="" title="">查看兑换码</a>
						</td>-->
					</tr>
					<?php  } } ?>
					<?php  if(empty($goodses)) { ?>
					<tr>
						<td colspan="8">
							没有交易记录
						</td>
					</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php  echo $pager;?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>