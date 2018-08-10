<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li class="active"><a href="<?php  echo $this->createWebUrl('member', array('op' => 'display'))?>">会员列表</a></li>
</ul>
<?php  if($op=='display') { ?>
<div class="panel panel-default">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form" id="form">
			<input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="weliam_indiana" />
            <input type="hidden" name="do" value="member" />
            <input type="hidden" name="ptype" value="<?php  echo $ptype;?>" />
            <div class="form-group">
				<label class="col-md-2 control-label">身份</label>
				<div class="col-sm-8 col-xs-12">
					<div class="btn-group">
						<a href="<?php  echo $this->createWebUrl('member')?>&ptype=person" class="btn <?php  if($ptype == 'person' || empty($ptype)) { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">真实用户</a>
						<a href="<?php  echo $this->createWebUrl('member')?>&ptype=machine" class="btn <?php  if($ptype == 'machine') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">虚拟用户</a>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">关键字类型</label>
				<div class="col-sm-8 col-xs-12">
					<select name="type" class="form-control">
						<option value="2" <?php  if($_GPC['type'] == 2) { ?>selected<?php  } ?>>手机号</option>
						<option value="4" <?php  if($_GPC['type'] == 4) { ?>selected<?php  } ?>>真实姓名</option>
						<option value="3" <?php  if($_GPC['type'] == 3) { ?>selected<?php  } ?>>昵称</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">关键字</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="keyword" id="keyword" value="<?php  echo $_GPC['keyword'];?>" />
				</div>
				<div class="pull-right col-md-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="panel panel-default">
	<?php  if($_GPC['ptype'] == 'person' || empty($_GPC['ptype'])) { ?>
    <table class="table">
        <thead class="navbar-inner">
			<tr>
				<th style="width:50px;">头像</th>
				<th style="width:100px;">昵称</th>
				<th style="width:110px;">手机</th>
				<th style="width:100px;">真实姓名</th>
				<th style="width:100px;">积分</th>
				<th style="width:100px;">余额</th>
				<th style="width:240px;" class="text-center">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php  if(is_array($members)) { foreach($members as $li) { ?>
			<tr>
				<td><image src="<?php  echo tomedia($li['avatar']);?>" style="max-width: 48px; max-height: 48px; border: 1px dotted gray"></td>
				<td><?php  echo $li['nickname'];?></td>
				<td><?php  echo $li['mobile'];?></td>
				<td><?php  echo $li['realname'];?></td>
				<td id="credit1<?php  echo $li['uid'];?>"><span class="label label-warning">积分：<?php  echo $li['credit1'];?></span></td>
				<td id="credit2<?php  echo $li['uid'];?>"><span class="label label-primary">余额：<?php  echo $li['credit2'];?></span></td>
				<td>
					<div class="btn-group">
						<a href="javascript:;" title="积分" class="btn btn-default modal-trade-credit1" data-type="credit1" data-uid="<?php  echo $li['uid'];?>">积分</a>
						<a href="javascript:;" title="余额" class="btn btn-default modal-trade-credit2" data-type="credit2" data-uid="<?php  echo $li['uid'];?>">余额</a>
						<a href="<?php  echo url('mc/member/credit_stat',array('uid' => $li['uid'], 'type' => 1))?>" title="日志" class="btn btn-success">日志</a>
						<a href="<?php  echo $this->createWebUrl('member', array('op' => 'buyre','openid'=>$li['openid']))?>" class="btn btn-default" target="_blank">购买记录</a>
						<a href="<?php  echo $this->createWebUrl('member', array('op' => 'recharge','openid'=>$li['openid']))?>" class="btn btn-default" target="_blank">充值记录</a>
					</div>
				</td>
			</tr>
		<?php  } } ?>
        </tbody>
    </table>
    <?php  } ?>
    <?php  if($_GPC['ptype'] == 'machine') { ?>
    <table class="table">
        <thead class="navbar-inner">
			<tr>
				<th style="width:100px;">头像</th>
				<th style="width:100px;">昵称</th>
				<th style="width:100px;">IP</th>
				<th style="width:100px;">IP所属地</th>
				<th style="width:100px;" class="text-center">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php  if(is_array($members)) { foreach($members as $li) { ?>
			<tr>
				<td><image src="<?php  echo tomedia($li['avatar']);?>" style="max-width: 48px; max-height: 48px; border: 1px dotted gray"></td>
				<td><?php  echo $li['nickname'];?></td>
				<td><?php  echo $li['ip'];?></td>
				<td><?php  echo $li['ipaddress'];?></td>
				<td>
					<div class="btn-group">
						<a href="<?php  echo $this->createWebUrl('member', array('op' => 'buyre','openid'=>$li['openid']))?>" class="btn btn-default" target="_blank">购买记录</a>
					</div>
					<div class="btn-group">
						<a href="<?php  echo $this->createWebUrl('member', array('op' => 'machine_edit_display','mid'=>$li['mid']))?>" class="btn btn-default" target="_blank">修改资料</a>
					</div>
				</td>
			</tr>
		<?php  } } ?>
        </tbody>
    </table>
    <?php  } ?>
</div>
<?php  echo $pager;?>
<script>
	require(['trade', 'bootstrap'], function(trade){
		trade.init();
	});
</script>
<?php  } ?>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>