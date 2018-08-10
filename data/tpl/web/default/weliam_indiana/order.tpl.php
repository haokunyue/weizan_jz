<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php  if($operation != 'alone_detail') { ?>
<ul class="nav nav-tabs">
	<li <?php  if($status=='' && $operation=='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order');?>">所有中奖订单(<?php  echo $status0;?>)</a></li>
	<li <?php  if($status==2 && $operation=='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order', array('status'=>2));?>">待揭晓(<?php  echo $status2;?>)</a></li>
	<li <?php  if($status==3 && $operation=='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order', array('status'=>3));?>">待确认地址(<?php  echo $status3;?>)</a></li>
	<li <?php  if($status==4 && $operation=='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order', array('status'=>4));?>">待发货(<?php  echo $status4;?>)</a></li>
	<li <?php  if($status==5 && $operation=='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order', array('status'=>5));?>">已发货(<?php  echo $status5;?>)</a></li>
	<li <?php  if($status==6 && $operation=='display') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order', array('status'=>6));?>">已完成(<?php  echo $status6;?>)</a></li>
	<?php  if($operation == 'upshare') { ?>
	<li class="active"><a href="#">机器人晒单</a></li>
	<?php  } ?>
</ul>
<?php  } ?>
<?php  if($operation == 'upshare') { ?>
<form action="<?php  echo $this->createWebUrl('order', array('op'=>'saveshare','period_number'=>$period_number));?>" method="post" class="form-horizontal form" id="form">
	<div class="main">
		<div class="panel panel-default">
			<div class="panel-heading">机器人晒单</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">晒单标题</label>
					<div class="col-xs-12 col-sm-8">
						<input style="width: 50%;" type="text" name="title" class="form-control" value="" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">晒单内容</label>
					<div class="col-xs-12 col-sm-8">
						<textarea name="mess" value=""></textarea>
					</div>
				</div>
				<div class="form-group">
        			<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">上传图片</label>
        			<div class="col-xs-12 col-sm-8">
           				<?php  echo tpl_form_field_multi_image('img',$piclist);?>
        			</div>
    			</div>
    			<div class="form-group">
					<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 col-sm-offset-3 col-md-offset-2 col-lg-offset-2">
						<input name="submit" type="submit" value="提交" class="btn btn-primary" />
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php  } ?>
<?php  if($operation=='display') { ?>
<div class="main">
	<?php  if($status==4) { ?>
	<div class="panel panel-info">
	    <div class="panel-heading">批量发货步骤</div>
	    <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-12 control-label" style="text-align: left;padding-right: 30px;">
                1.按条件搜索出需要导出的待发货订单文件。
                </label>
                 <label class="col-xs-12 col-sm-2 col-md-2 col-lg-12 control-label" style="text-align: left;padding-right: 30px;">
                2.导出订单文件，填写快递单号、快递公司。
                </label>
                 <label class="col-xs-12 col-sm-2 col-md-2 col-lg-12 control-label" style="text-align: left;padding-right: 30px;">
                3.导入该订单文件<span style="color: red;">(xls或csv格式文件)</span>，批量发货完成。
                </label>
            	
	   		</div>
	    </div>
	</div>
	<?php  } ?>
	<div class="panel panel-default">
		
	    <div class="panel-heading">筛选</div>
	    <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weliam_indiana" />
                <input type="hidden" name="do" value="order" />
                <input type="hidden" name="status" value="<?php  echo $status;?>"/>
                <div class="form-group">
					<label class="col-md-2 control-label">身份</label>
					<div class="col-sm-8 col-xs-12">
						<div class="btn-group">
							<a href="<?php  echo $this->createWebUrl('order')?>&status=<?php  echo $status;?>" class="btn <?php  if($_GPC['type'] == '') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">全部</a>
							<a href="<?php  echo $this->createWebUrl('order')?>&type=person&status=<?php  echo $status;?>" class="btn <?php  if($_GPC['type'] == 'person') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">真实用户</a>
							<a href="<?php  echo $this->createWebUrl('order')?>&type=machine&status=<?php  echo $status;?>" class="btn <?php  if($_GPC['type'] == 'machine') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">虚拟用户</a>
						</div>
					</div>
				</div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">期号</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="可查询期号">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">用户信息</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="member" id="" type="text" value="<?php  echo $_GPC['member'];?>" placeholder="可查询微信昵称/真实姓名/手机号">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">中奖时间</label>
                        <div class="col-sm-5 col-lg-7 col-xs-12">
                            <?php  echo tpl_form_field_daterange('time', array('starttime'=>date('Y-m-d H:m:s', $starttime),'endtime'=>date('Y-m-d H:m:s', $endtime)),true);?>
                        </div>
                        <div class="col-sm-3 col-lg-2" style="text-align:right;"><button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                        </div>
                    </div>
                <div class="form-group">
                </div>
            </form>
            <?php  if($status!=4) { ?>
            <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="text-align: right;padding-right: 30px;">导出订单</label>
            	<a href='<?php  echo $this->createWebUrl('order', array('op' => 'output','status'=>$status,'keyword'=>$keyword,'transid'=>$transid,'member'=>$member,'pay_type'=>$pay_type,'starttime'=>$starttime,'endtime'=>$endtime,'time'=>$time))?>'>
            		<button class="btn btn-info"><i class="fa fa-download"></i> 导出订单</button>
            	</a>(如果按条件导出请先选择条件后查询，再导出。)
	   		</div>
			<?php  } ?>    	
	    </div>
	</div>
	<?php  if($status==4) { ?>
	<div class="panel panel-info">
	    <div class="panel-heading">发货</div>
	    <div class="panel-body">
           <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label" style="text-align: right;padding-right: 30px;">导出订单</label>
            	<a href='<?php  echo $this->createWebUrl('order', array('op' => 'output','status'=>$status,'keyword'=>$keyword,'member'=>$member,'starttime'=>$starttime,'endtime'=>$endtime,'time'=>$time))?>'>
            		<button class="btn btn-info"><i class="fa fa-download"></i> 导出订单</button>
            	</a>
	   		</div>
	    	<form name="sendForm" enctype="multipart/form-data" class="form-horizontal" action="<?php  echo $this->createWebUrl('order', array('op' => 'import'))?>" method="post">
	   		   <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">导入发货订单</label>
                    <div class="col-sm-5 col-lg-7 col-xs-12">
                        <input type="file" name="fileName" class="btn btn-success" />
                    </div>
                    <div class="col-sm-3 col-lg-2" style="text-align:right;"><button id="searchBtn" type="submit" class="btn btn-success"> 导 入 </button>
                    </div>
                </div>
	   		</form>
	    </div>
	</div>
	<?php  } ?>
	<div class="panel panel-default">
		<div class="table-responsive">
			<table class="table table-hover table-bordered" style="min-width: 300px;">
				<thead class="navbar-inner">
					<tr>
						<th style="width:150px;text-align: center;">期号<br>(点击查看)</th>
						<th style="width:200px;text-align: center;">商品信息<br>(点击查看)</th>
						<th style="width:120px;text-align: center;">买家信息</th>
						<th style="width:60px;text-align: center;">购买<br>次数</th>
						<th style="width:120px;text-align: center;">中奖时间</th>
						<th style="width:80px;text-align: center;">中奖码</th>
						<th style="width:100px;text-align: center;">状态</th>
						<th style="width:100px;text-align: center;">管理</th>
					</tr>
				</thead>
				<tbody style="text-align: center;">
					<?php  if(is_array($list)) { foreach($list as $item) { ?>
					<tr>
						<td><a href="<?php  echo $this->createWebUrl('srecords', array('period_number'=>$item['period_number'],'gid'=>$item['goodsid']));?>"><?php  echo $item['period_number'];?></a></td>
						<td><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit', 'id'=>$item['goodsid']));?>">第(<font color="red"><?php  echo $item['periods'];?></font>)期 -<?php  echo $item['title'];?></a></td>
						<td><?php  if(strpos($item['openid'],'machine') == 'true') { ?><span style="color: red;">(机器人)</span><?php  echo $item['nickname'];?><?php  } ?><?php  echo $item['realname'];?><br><?php  echo $item['mobile'];?></td>
						<td><?php  echo $item['partakes'];?></td>
						<td><?php  echo date('Y-m-d H:i', $item['endtime'])?></td>
						<td><?php  echo $item['code'];?></td>
						<td><?php  if(strpos($item['openid'],'machine') == 'true' && $item['status']==3) { ?><a href="<?php  echo $this->createWebUrl('order', array('op'=>'upshare','period_number'=>$item['period_number']));?>"><span class="label label-primary">机器人去晒单</span></a>
							<?php  } else if($item['status']==2) { ?><span class="label label-default">待揭晓</span>
							<?php  } else if($item['status']==3) { ?><span class="label label-danger">待确认地址</span>
							<?php  } else if($item['status']==4) { ?><span class="label label-warning">待发货</span>
							<?php  } else if($item['status']==5) { ?><span class="label label-info">已发货</span>
							<?php  } else if($item['status']>=6) { ?><span class="label label-success">已完成</span>
							<?php  } ?>
						</td>
						<td class="text-right">
							<a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-getgoods<?php  echo $item['id'];?>"><i class="fa fa-file-text-o"></i></a>
							<a href="<?php  echo $this->createWebUrl('order', array('op' => 'detail', 'id' => $item['id']))?>" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="详情/修改"><i class="fa fa-cog fa-spin"></i></a>
						</td>
					</tr>
					<?php  } } ?>
				</tbody>
			</table>
		</div>
	</div>
	<!--修改收货信息-->
	<?php  if(is_array($list)) { foreach($list as $item) { ?>
	<div id="modal-getgoods<?php  echo $item['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="width:600px;margin:0px auto;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h3>第(<font color="red"><?php  echo $item['periods'];?></font>)期 <<?php  echo $item['title'];?>>商品备注信息</h3>
				</div>
				<div class="modal-body">
					<textarea name="comment" cols="50" id="comment<?php  echo $item['id'];?>" class="form-control" value="" style="margin: 0px -1px 0px 0px; height: 233px; width: 570px;"><?php  echo $item['comment'];?></textarea>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary span2" onclick="savecomment(<?php  echo $item['id'];?>)">保存</button>
					<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a>
				</div>
			</div>
		</div>
	</div>
	<?php  } } ?>
</div>	
<?php  echo $pager;?>
<?php  } else if($operation=='detail') { ?>

<style type="text/css">
	.main .form-horizontal .form-group{margin-bottom:0;}
	.main .form-horizontal .modal .form-group{margin-bottom:15px;}
	#modal-confirmsend .control-label{margin-top:0;}
</style>
<div class="main">
	<form class="form-horizontal form" action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck(this)">
		<div class="panel panel-default">
			<div class="panel-heading">
				用户信息
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">姓名 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['realname'];?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['mobile'];?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">地址 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['address'];?></p>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-9 col-xs-12 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-getgoods">修改收货信息</button>
					</div>
					
				</div>
				
			</div>
		</div>
		<!--修改收货信息-->
		<div id="modal-getgoods" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="width:600px;margin:0px auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
						<h3>修改收货信息</h3>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">姓名</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="recvname" class="form-control" value="<?php  echo $item['realname'];?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">电话</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="recvmobile" class="form-control" value="<?php  echo $item['mobile'];?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">地址</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="recvaddress" class="form-control" value="<?php  echo $item['address'];?>"/>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary span2" name="getgoods" value="yes">确认修改</button>
						<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
			</div>
		</div>
		<!--修改收货地址-->
		
		<div class="panel panel-default">
			<div class="panel-heading">
				快递信息
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">快递名称 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['express'];?></p>
					</div>
				</div>
			</div>
			<div class="panel-body">
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">快递号码 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $item['expressn'];?></p>
					</div>
			</div></div>	
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				商品信息
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-hover">
					<thead class="navbar-inner">
					<tr>
						<th style="width:5%;">ID</th>
						<th style="width:15%;">商品标题</th>
						<th style="width:15%;">商品图片</th>
						<th style="width:15%;">购买次数</th>
						<th style="width:15%;">备注信息</th>
					</tr>
					</thead>
					<?php  if(is_array($item['goods'])) { foreach($item['goods'] as $goods) { ?>
					<tr>
						<td><?php  echo $goods['id'];?></td>
						<td><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit', 'id'=>$goods['id']));?>">第(<font color="red"><?php  echo $goods['periods'];?></font>)期 -<?php  echo $goods['title'];?></a></td>
						<td>
						<div style=" width:40px;height:40px;">
                            <img src="<?php  echo $_W['attachurl'];?><?php  echo $goods['picarr'];?>" style=" width:40px;height:40px;" alt="" title="">
                        </div>  
						</td>
						<td><?php  echo $item['partakes'];?></td>
					</tr>
					<?php  } } ?>
					<tr>
						<td colspan="10" class="text-right">
							<button class="btn btn-default" onclick="javascript:history.back(-1);">返回上一页</button>

							<?php  if($item['status'] == 4) { ?>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-confirmsend">确认发货</button>
							<?php  } ?>
							<?php  if($item['status'] == 5) { ?>					
							<button type="submit" class="btn btn-danger" name="cancelsend"  value="yes">取消发货</button>
<!--							<button type="submit" class="btn btn-success" onclick="return confirm('确认完成此订单吗？'); return false;" name="finish" value="yes">完成订单</button>
-->							<?php  } ?>	
							<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		<!-- 确认发货 -->
		<div id="modal-confirmsend" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="width:600px;margin:0px auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
						<h3>快递信息</h3>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">是否需要快递</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<label for="radio_1" class="radio-inline">
									<input type="radio" name="isexpress" id="radio_1" value="1" onclick="$('#expresspanel').show();" checked> 是
								</label>
								<label for="radio_2" class="radio-inline">
									<input type="radio" name="isexpress" id="radio_2" value="0" onclick="$('#expresspanel').hide();"> 否
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">快递公司</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<select class="form-control" name="express" id="express">
									<option value="" data-name="">其他快递</option>
									<option value="顺丰" data-name="顺丰">顺丰</option>
									<option value="申通" data-name="申通">申通</option>
									<option value="韵达快运" data-name="韵达快运">韵达快运</option>
									<option value="天天快递" data-name="天天快递">天天快递</option>
									<option value="圆通速递" data-name="圆通速递">圆通速递</option>
									<option value="中通速递" data-name="中通速递">中通速递</option>
									<option value="ems快递" data-name="ems快递">ems快递</option>
									<option value="汇通快运<" data-name="汇通快运">汇通快运</option>
									<option value="全峰快递" data-name="全峰快递">全峰快递</option>
									<option value="宅急送" data-name="宅急送">宅急送</option>
									<option value="aae全球专递" data-name="aae全球专递">aae全球专递</option>
									<option value="安捷快递" data-name="安捷快递">安捷快递</option>
									<option value="安信达快递" data-name="安信达快递">安信达快递</option>
									<option value="彪记快递" data-name="彪记快递">彪记快递</option>
									<option value="bht" data-name="bht">bht</option>
									<option value="百福东方国际物流" data-name="百福东方国际物流">百福东方国际物流</option>
									<option value="coe" data-name="中国东方(COE)">中国东方(COE)</option>
									<option value="长宇物流" data-name="长宇物流">长宇物流</option>
									<option value="大田物流" data-name="大田物流">大田物流</option>
									<option value="德邦物流" data-name="德邦物流">德邦物流</option>
									<option value="dhl" data-name="dhl">dhl</option>
									<option value="dpex" data-name="dpex">dpex</option>
									<option value="dsukuaidi" data-name="d速快递">d速快递</option>
									<option value="递四方" data-name="递四方">递四方</option>
									<option value="fedex" data-name="fedex(国外)">fedex(国外)</option>
									<option value="飞康达物流" data-name="飞康达物流">飞康达物流</option>
									<option value="fenghuangkuaidi" data-name="凤凰快递">凤凰快递</option>
									<option value="feikuaida" data-name="飞快达">飞快达</option>
									<option value="国通快递" data-name="国通快递">国通快递</option>
									
								</select>
								<input type='hidden' name='expresscom' id='expresscom' />
							</div>
						</div>
						<br />
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">快递单号</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="expresssn" class="form-control" />
							</div>
						</div>
						<div id="module-menus"></div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary span2" name="confirmsend" value="yes">确认发货</button>
						<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script language='javascript'>
    $(function(){
        <?php  if(!empty($express)) { ?>
        $("#express").find("option[data-name='<?php  echo $express['express_name'];?>']").attr("selected",true);
        $("#expresscom").val($("#express").find("option:selected").attr("data-name"));
        <?php  } ?>
        $("#express").change(function(){
            var obj = $(this);
            var sel = obj.find("option:selected").attr("data-name");
            $("#expresscom").val(sel);
        });
    });
</script>

<script>
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});
</script>
<?php  } else if($operation=='alone_detail') { ?>
<style type="text/css">
	.main .form-horizontal .form-group{margin-bottom:0;}
	.main .form-horizontal .modal .form-group{margin-bottom:15px;}
	#modal-confirmsend .control-label{margin-top:0;}
</style>
<div class="main">
	<form class="form-horizontal form" action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck(this)">
		<div class="panel panel-default">
			<div class="panel-heading">
				用户信息
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">姓名 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $order['realname'];?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">手机 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $order['mobile'];?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">地址 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $order['address'];?></p>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-9 col-xs-12 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-getgoods">修改收货信息</button>
					</div>
					
				</div>
				
			</div>
		</div>
		<!--修改收货信息-->
		<div id="modal-getgoods" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="width:600px;margin:0px auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
						<h3>修改收货信息</h3>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">姓名</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="name" class="form-control" value="<?php  echo $order['realname'];?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">电话</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="mobile" class="form-control" value="<?php  echo $order['mobile'];?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">地址</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="address" class="form-control" value="<?php  echo $order['address'];?>"/>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary span2" name="getgoods" value="yes">确认修改</button>
						<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
			</div>
		</div>
		<!--修改收货地址-->
		<?php  if($order['expressn']) { ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				快递信息
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">快递名称 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $order['express'];?></p>
					</div>
				</div>
			</div>
			<div class="panel-body">
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">快递号码 :</label>
					<div class="col-sm-9 col-xs-12">
						<p class="form-control-static"><?php  echo $order['expressn'];?></p>
					</div>
			</div></div>	
		</div>
		<?php  } ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				商品信息
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-hover">
					<thead class="navbar-inner">
					<tr>
						<th style="width:5%;">ID</th>
						<th style="width:15%;">商品标题</th>
						<th style="width:15%;">商品图片</th>
						<th style="width:15%;">购买数量</th>
						<th style="width:15%;">备注信息</th>
					</tr>
					</thead>
					<tr>
						<td><?php  echo $goods['id'];?></td>
						<td><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit', 'id'=>$goods['id']));?>"><?php  echo $goods['title'];?></a></td>
						<td>
						<div style=" width:40px;height:40px;">
                            <img src="<?php  echo $_W['attachurl'];?><?php  echo $goods['picarr'];?>" style=" width:40px;height:40px;" alt="" title="">
                        </div>  
						</td>
						<td><?php  echo $order['num'];?></td>
					</tr>
					<tr>
						<td colspan="10" class="text-right">
							<button class="btn btn-default" onclick="javascript:history.back(-1);">返回上一页</button>

							<?php  if($order['status'] == 1 || $order['status']==4 ) { ?>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-confirmsend">确认发货</button>
							<?php  } ?>
							<?php  if($order['status'] == 2) { ?>					
							<button type="submit" class="btn btn-danger" name="cancelsend"  value="yes">取消发货</button>
<!--							<button type="submit" class="btn btn-success" onclick="return confirm('确认完成此订单吗？'); return false;" name="finish" value="yes">完成订单</button>
-->							<?php  } ?>	
							<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		<!-- 确认发货 -->
		<div id="modal-confirmsend" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="width:600px;margin:0px auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
						<h3>快递信息</h3>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">是否需要快递</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<label for="radio_1" class="radio-inline">
									<input type="radio" name="isexpress" id="radio_1" value="1" onclick="$('#expresspanel').show();" checked> 是
								</label>
								<label for="radio_2" class="radio-inline">
									<input type="radio" name="isexpress" id="radio_2" value="0" onclick="$('#expresspanel').hide();"> 否
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">快递公司</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<select class="form-control" name="express" id="express">
									<option value="" data-name="">其他快递</option>
									<option value="顺丰" data-name="顺丰">顺丰</option>
									<option value="申通" data-name="申通">申通</option>
									<option value="韵达快运" data-name="韵达快运">韵达快运</option>
									<option value="天天快递" data-name="天天快递">天天快递</option>
									<option value="圆通速递" data-name="圆通速递">圆通速递</option>
									<option value="中通速递" data-name="中通速递">中通速递</option>
									<option value="ems快递" data-name="ems快递">ems快递</option>
									<option value="汇通快运<" data-name="汇通快运">汇通快运</option>
									<option value="全峰快递" data-name="全峰快递">全峰快递</option>
									<option value="宅急送" data-name="宅急送">宅急送</option>
									<option value="aae全球专递" data-name="aae全球专递">aae全球专递</option>
									<option value="安捷快递" data-name="安捷快递">安捷快递</option>
									<option value="安信达快递" data-name="安信达快递">安信达快递</option>
									<option value="彪记快递" data-name="彪记快递">彪记快递</option>
									<option value="bht" data-name="bht">bht</option>
									<option value="百福东方国际物流" data-name="百福东方国际物流">百福东方国际物流</option>
									<option value="coe" data-name="中国东方(COE)">中国东方(COE)</option>
									<option value="长宇物流" data-name="长宇物流">长宇物流</option>
									<option value="大田物流" data-name="大田物流">大田物流</option>
									<option value="德邦物流" data-name="德邦物流">德邦物流</option>
									<option value="dhl" data-name="dhl">dhl</option>
									<option value="dpex" data-name="dpex">dpex</option>
									<option value="dsukuaidi" data-name="d速快递">d速快递</option>
									<option value="递四方" data-name="递四方">递四方</option>
									<option value="fedex" data-name="fedex(国外)">fedex(国外)</option>
									<option value="飞康达物流" data-name="飞康达物流">飞康达物流</option>
									<option value="fenghuangkuaidi" data-name="凤凰快递">凤凰快递</option>
									<option value="feikuaida" data-name="飞快达">飞快达</option>
									<option value="国通快递" data-name="国通快递">国通快递</option>
									
								</select>
								<input type='hidden' name='expresscom' id='expresscom' />
							</div>
						</div>
						<br />
						<div class="form-group">
							<label class="col-xs-10 col-sm-3 col-md-3 control-label">快递单号</label>
							<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
								<input type="text" name="expresssn" class="form-control" />
							</div>
						</div>
						<div id="module-menus"></div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary span2" name="confirmsend" value="yes">确认发货</button>
						<a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<script language='javascript'>
    $(function(){
        <?php  if(!empty($express)) { ?>
        $("#express").find("option[data-name='<?php  echo $express['express_name'];?>']").attr("selected",true);
        $("#expresscom").val($("#express").find("option:selected").attr("data-name"));
        <?php  } ?>
        $("#express").change(function(){
            var obj = $(this);
            var sel = obj.find("option:selected").attr("data-name");
            $("#expresscom").val(sel);
        });
    });
</script>

<script>
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});
</script>
<?php  } ?>
<script>
	function savecomment(id){
		var id = id;
		var comments = document.getElementById('comment'+id).value;
		$.post("<?php  echo $this->createWebUrl('commentsave')?>",
		{
			comments:comments,
			id:id,
		},function(data){
			if(data == 'true'){
				alert("备注消息修改成功！");
			}else{
				alert("备注消息修改失败！");
			}
		},
		"json"
		);
	}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>