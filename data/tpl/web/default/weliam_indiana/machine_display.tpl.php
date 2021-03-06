<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
 
<!-- ClockPicker Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo WELIAM_INDIANA_STATIC;?>clockpicker/dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo WELIAM_INDIANA_STATIC;?>layer/skin/layer.css">
<!-- ClockPicker script -->
<script type="text/javascript" src="<?php echo WELIAM_INDIANA_STATIC;?>clockpicker/dist/bootstrap-clockpicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo WELIAM_INDIANA_STATIC;?>bootstrap_module/checkbox/css/bootstrap-switch.css">

<script type="text/javascript" src="<?php echo WELIAM_INDIANA_STATIC;?>bootstrap_module/checkbox/js/bootstrap-switch.js"></script>

<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓机器人添加开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
<div class="panel panel-info">
	<div class="panel-heading">设置购买商品</div>
	<div class="panel-body">
	<form action="<?php  echo $this->createWebUrl('machine',array('op' => 'create_goods'))?>" method="post"class="form-horizontal">
		
		<div class="form-group">
			<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">选择商品</label>
			 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-8">
				<select name="goodsid" class="form-control select" id="test" onchange="selectChange();">
					<option name='goods_name'>--选择--</option>
					<?php  if(is_array($result_goods)) { foreach($result_goods as $row) { ?>
			            <option value="<?php  echo $row['id'];?>"><?php  echo $row['title'];?></option>
					<?php  } } ?>
		        </select>
			</div>
		</div>
		
		<div class="form-group" id="level">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="panel-body table-responsive" style="padding:0px;">
						<table class="table table-hover">
							<thead>
							<tr>
								<th style="text-align: center;width: 17%;">购买数量范围</th>
								<th style="text-align: center;width: 17%;">购买时间范围</th>
								<th style="text-align: center;width: 17%;">购买时间开始</th>
								<th style="text-align: center;width: 17%;">购买时间结束</th>
								<th style="text-align: center;width: 17%;">最大购买数量</th>
								<th style="text-align: center;width: 17%;">是否连期</th>
							</tr>
							</thead>
							<tbody id="param-items-level">
								<tr>
									<td>
										<input type="text" name="machine_num" class="form-control param_title"  style="width: 90%;margin-left: 5%;" placeholder="购买范围（例：10）"/>
									</td>
									<td>
										<input type="text" name="timebucket" class="form-control param_title" style="width: 90%;margin-left: 5%;" placeholder="时间范围（例：100）"/>
									</td>
									<td>
										<div class="input-group clockpicker" data-placement="left" data-align="top" id='time_start' data-autoclose="true" style="text-align: center;width: 70%;margin-left: 15%;">
										    <input type="text" name="start_time" class="form-control" value="08:30">
										    <span class="input-group-addon">
										        <span class="glyphicon glyphicon-time"></span>
										    </span>
										</div>
										<script type="text/javascript">
											$('#time_start').clockpicker();
										</script>
									</td>
									<td>
										<div class="input-group clockpicker" data-placement="left" data-align="top" id='time_end' data-autoclose="true" style="text-align: center;width: 70%;margin-left: 15%;">
										    <input type="text" name="end_time" class="form-control" value="22:30">
										    <span class="input-group-addon">
										        <span class="glyphicon glyphicon-time"></span>
										    </span>
										</div>
										<script type="text/javascript">
											$('#time_end').clockpicker();
										</script>
									</td>
									<td>
										<input name="max_number" type="text" class="form-control param_title" value="<?php  echo $item['groupnum'];?>" style="width: 60%;margin-left: 20%;" placeholder="默认不限制"/>
									</td>
									<td>
										<div class="plugin_status" style="width: 40%;margin-left: 30%;">
											<i class="access"></i>
											<span class="status_txt">	
												<input class="flag" type="checkbox" name="is_followed"/>
											</span>
										</div>
										<script type="text/javascript">
											$('.flag:checkbox').bootstrapSwitch({onText: '启用', offText: '禁用'});
										</script>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
			<div class="form-group col-sm-12">
				<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		
	</form>
	</div>
</div>
<!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑机器人添加结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
<div class="order-overview">
	<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓统计开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
	<div class="order-widget">
		<div class="panel panel-default">
			<div class="panel-heading"></div>
			<div class="panel-body">
				<div class="info clearfix">
					<div class="info-group" >
						<p class="h4">
							<a href="#"><?php  echo $this->getMachine_machinenum()?></a>
						</p>
						<p class="info-description">机器人总数</p>
					</div>
					<div class="info-group" >
						<p class="h4">
							<a href="#"><?php  echo $this->getMachine_nicknamenum()?></a>
						</p>
						<p class="info-description">名称数</p>
					</div>
					<div class="info-group" >
						<p class="h4">
							<a href="#"><?php  echo $this->getMachine_IPnum()?></a>
						</p>
						<p class="info-description">IP段数</p>
					</div>
				</div>
				<ul class="nav nav-tabs" style="border-color: #ddd;"></ul>
				<div class="clearfix" id="clear" style="padding-top: 20px;"></div>
				<table>
					<thead>
						<tr>
							<th style="text-align: center;width: 37%;"></th>
							<th style="text-align: center;width: 37%;"></th>
							<th style="text-align: center;width: 50%;"></th>
						</tr>
					</thead>
					<tbody id="param-items-level">
							<tr style="height: 35px;">
								<td style="text-align: center;width: 37%;"><label>创建机器人</label></td>
								<td style="text-align: center;width: 37%;">
									<input  type="text" class="form-control param_title" id='machine_num' style="width: 60%;" placeholder="机器人个数（大于0）"/>
								</td>
								<td style="text-align: center;width: 50%;">
									<?php  if($this->getMachine_nicknamenum() != 0 && $this->getMachine_IPnum() != 0) { ?>
									<button class="btn btn-info" style="float: left;" onclick="create_machine();">创建</button>
									<?php  } else { ?>
									<button class="btn btn-default" style="float: left;" onclick="alert('未导入名称或者ip');">创建</button>
									<?php  } ?>
									
									<?php  if($this->checkMachineStatus() == 'no') { ?>
									<form action="<?php  echo $this->createWebUrl('machine',array('op'=>'open_machine'))?>" method="post"class="form-horizontal">
										<button class="btn btn-info" style="float: left;margin-left: 3px;" type="submit">启动进程</button>
										<div class="plugin_status">
											<i class="access"></i>
											<span class="status_txt">	
												<input class="flag" type="checkbox" name="machine_status"/>
											</span>
										</div>
										<script type="text/javascript">
											$('.flag:checkbox').bootstrapSwitch({offText: '本地'});
										</script>
									</form>
									<?php  } else if($this->checkMachineStatus() == 'local_open') { ?>
									<button class="btn btn-info" style="float: left;margin-left: 3px;" onclick="location.href='<?php  echo $this->createWebUrl('machine',array('op'=>'close_machine'))?>'">关闭本地进程</button>
									<?php  } else if($this->checkMachineStatus() == 'tenlent_open') { ?>
									<button class="btn btn-info" style="float: left;margin-left: 3px;" onclick="location.href='<?php  echo $this->createWebUrl('machine',array('op'=>'close_machine'))?>'">关闭远程进程</button>
									<?php  } else if($this->checkMachineStatus() == 'tenlent_wait') { ?>
									<button class="btn btn-default" style="float: left;margin-left: 3px;" onclick="location.href='<?php  echo $this->createWebUrl('machine',array('op'=>'close_machine'))?>'">远程进程审核中</button>
									<?php  } ?>
								</td>
							</tr>
							<script>
								//创建机器人
								function create_machine(){
									var num = document.getElementById('machine_num').value;
									var re = /^[0-9]*[1-9][0-9]*$/; 
									if(re.test(num)){
										location.href = "<?php  echo $this->createWebUrl('machine',array('op'=>'create_machine','start_number'=>0))?>&all_number="+num;
									}else{
										alert('请填写正确的机器人数');
									}
								}
							</script>
						<form enctype="multipart/form-data" action="<?php  echo $this->createWebUrl('machine',array('op' => 'import_nickname'))?>" method="post" class="form-horizontal" id = 'nickname_up'>
							<tr style="height: 35px;">
								<td style="text-align: center;width: 37%;"><label>导入名称(.xls或.csv格式)</label></td>
								<td style="text-align: center;width: 37%;"><input type="file" name="file"></td>
								<td style="text-align: center;width: 37%;">
									<button class="btn btn-info" ><i class="fa fa-upload"></i> 导入名称</button>
			            			<a href="<?php  echo $this->createWebUrl('machine',array('op' => 'download_nickname'))?>"><i class="fa fa-download"></i></a>（下载名称导入模板）
								</td>
							</tr>
						</form>
						<form enctype="multipart/form-data" action="<?php  echo $this->createWebUrl('machine',array('op' => 'import_IP'))?>" method="post" class="form-horizontal" id = 'ip_up'>
							<tr style="height: 35px;">
								<td style="text-align: center;width: 37%;"><label>导入IP(.xls或.csv格式)</label></td>
								<td style="text-align: center;width: 37%;"><input type="file" name="file"></td>
								<td style="text-align: center;width: 37%;">
									<button class="btn btn-info" ><i class="fa fa-upload"></i> 导入IP段</button>
			            			<a href="<?php  echo $this->createWebUrl('machine',array('op' => 'download_IP'))?>"><i class="fa fa-download"></i></a>（下载IP段导入模板）
								</td>
							</tr>
						</form>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑统计结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
</div>

<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓结果展示开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
<div class="order-list">
	<div class="panel-body table-responsive collapse in" id="order-template-item-4" style="padding: 0;">
		<table class="table table-bordered">
			<thead style="background-color: #FFFFFF;">
				<tr>
					<!--<th style="width:50px;" class="text-center"><input type="checkbox" onclick="var ck = this.checked;$(':checkbox').each(function(){this.checked = ck});" />全选</th>-->
					<th style="width:50px">序号</th>
					<th style="width:220px;">商品</th>
					<th style="width:70px; text-align:center;">单次购买范围</th>
					<th style="width:70px; text-align:center;">单次时间范围</th>
					<th style="width:60px; text-align:center;">购买时间范围</th>
					<th style="width:60px; text-align:center;">剩余购买数量</th>
					<th style="width:55px; text-align:center;">连期</th>
					<th style="width:55px; text-align:center;">状态</th>
					<th style="width:120px; text-align:center;">已购买次数</th>
				</tr>
			</thead>
		</table>
	</div>
	
	<?php  if(is_array($result_machineset)) { foreach($result_machineset as $machineset) { ?>
	<div class="panel panel-default">
			<div class="panel-heading clearfix" style="padding: 10px 15px;">
				<div class="pull-left">
					<b>商品期号: <?php  echo $machineset['period_number'];?></b>
				</div>
				<div class="pull-right">
					<span class="text-muted"></span>&nbsp;&nbsp;
					<a href="<?php  echo web_url('order/order/detail', array('id' => $item['id']))?>" target="_blank">查看详情</a> -
					<a href="<?php  echo $this->createWebUrl('machine',array('op'=>'delete_goods','id'=>$machineset['id']))?>" class="js-remove" order-id="<?php  echo $item['id'];?>" >删除</a>
				</div>
			</div>
			<div class="panel-body table-responsive" style="padding: 0px;">
				<table class="table table-bordered">
					<tbody >
						<tr>
							<!--<td class="text-center" style="width:50px;">
								<center><input type="checkbox" name="checkbox[]" class="checkbox" value="<?php  echo $item['id'];?>" /></center>
							</td>-->
							<td style="width: 50px;" ><center><?php  echo $machineset['sort'];?></center></td>
							<td class="goods-info line-feed" style="width:220px;padding-left: 10px;">
								<div class="img" style="width: 60px;float: left;"><img width="50" height="50" class="oscrollLoading" src="<?php  echo $machineset['picarr'];?>" data-url="<?php  echo $machineset['picarr'];?>" height="50" width="50" onerror="this.src='<?php echo IMAGE_NOPIC_SMALL;?>'" ></div>
								<div class="title" style="width: 150px;float: left;">
									<span style="width: 140px;overflow: auto;">（第<?php  echo $machineset['periods'];?>期）<?php  echo $machineset['title'];?></span>
								</div>
							</td>
							<td class="text-center" style="width:70px;">
								<p>0～<?php  echo $machineset['machine_num'];?></p>
							</td>
							<td class="text-center" style="width:70px;">
								<p>0～<?php  echo $machineset['timebucket'];?></p>
							</td>
							<td class="text-center" style="width:60px;">
								<p><?php  echo date('H:i',($machineset['start_time']-28800))?></p>
								<p><?php  echo date('H:i',($machineset['end_time']-28800))?></p>
							</td>
							<td class="text-center" style="width:60px;">
								<p><?php  if($machineset['max_num'] == -1) { ?>无限制<?php  } else { ?><?php  echo $machineset['max_num'];?><?php  } ?></p>
							</td>
							<td class="text-center" style="width:55px;">
								<label <?php  if($machineset['is_followed'] == 1) { ?>class='label label-success'<?php  } else if($machineset['is_followed'] == 0) { ?>class='label label-warning'<?php  } else { ?>class='label label-danger'<?php  } ?>><?php  if($machineset['is_followed'] == 1) { ?>开启<?php  } else if($machineset['is_followed'] == 0) { ?>禁用<?php  } else { ?>出错<?php  } ?></label>
							</td>
							<td class="text-center" style="width:55px;">
								<label onclick="change_status(<?php  echo $machineset['id'];?>);" id='status_<?php  echo $machineset['id'];?>' <?php  if($machineset['status'] == 1) { ?>class='label label-success'<?php  } else if($machineset['status'] == 0) { ?>class='label label-warning'<?php  } else { ?>class='label label-danger'<?php  } ?>><?php  if($machineset['status'] == 1) { ?>开启<?php  } else if($machineset['status'] == 0) { ?>暂停<?php  } else { ?>终止<?php  } ?></label>
							</td>
							<td class="text-center" style="width:120px;">
								<p style="color: #08A600;">参与次数：<?php  echo $machineset['all_buy'];?></p>
								<p style="color: #24BFFF;">总需次数：<?php  if($machineset['is_followed'] == 1) { ?>∞<?php  } else { ?><?php  echo $machineset['times'];?><?php  } ?></p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<?php  } } ?>
		<?php  echo $pager;?>
		<!--<div id="de1" style="margin-top: 15px;">
			<a href="javascript:;" class="btn btn-default min-width js-batch js-delete">删除选中订单</a>
		</div>-->
</div>
<!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑结果展示结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
<script>
	function change_status(id){
		//改变机器人的状态
		var status = document.getElementById('status_'+id);
		var val_status = status.innerText;
		if(val_status == '开启' || val_status == '暂停'){
			if(val_status == '开启'){
				val_status = 1;
			}else{
				val_status = 0;
			}
			var surl = "<?php  echo $this->createWebUrl('machine',array('op'=>'update_goods'))?>&id="+id+"&status="+val_status;
			$.ajax({
				type: "POST",
				url: surl,
				dataType: 'json',
				beforeSend: function(XMLHttpRequest) {},
				success: function(data) {
					if(data.status == 'true'){
						if(data.msg == '1'){
							status.className = 'label label-success';
							status.innerHTML = '开启';
						}
						if(data.msg == '0'){
							status.className = 'label label-warning';
							status.innerHTML = '暂停';
						}
					}
				},
				error: function() {
					$('.error').show();
				}
			});
		}
	}
	
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>