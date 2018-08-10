<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header-base', TEMPLATE_INCLUDEPATH)) : (include template('common/header-base', TEMPLATE_INCLUDEPATH));?>
	<div class="row" style="border-top: 4px solid #44b549;background-color: #fff;border-bottom: 1px solid #d9dadc;">
		<div class="col-xs-12 col-sm-3 col-lg-2">
			<div style="height: 60px;background: transparent url(<?php echo WELIAM_INDIANA_STATIC;?>img/yy_logo.png) center center no-repeat;background-color: white;"></div>
		</div>
		<div class="col-xs-12 col-sm-9 col-lg-10">
			<div class="navbar navbar-default" style="margin-bottom: 0px;background-color: #FFFFFF;border-color: #FFFFFF;border: 0px solid transparent;">
				<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="<?php  echo url('home/welcome/ext');?>"><i class="fa fa-home"></i> 一元夺宝</a> </li>
					<?php  if(is_array($top_menus)) { foreach($top_menus as $topmenus) { ?>
					<li <?php  if($fun['nav'] == $topmenus['active']) { ?>class="active"<?php  } ?>><a href="<?php  echo $topmenus['url'];?>"><?php  echo $topmenus['title'];?></a></li>
					<?php  } } ?>
			    </ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" style="display:block; max-width:200px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; "><img src="<?php  echo tomedia('headimg_'.$_W['acid'].'.jpg')?>?time=<?php  echo time()?>" class="img-responsive img-thumbnail" width="30"/>  <?php  echo $_W['account']['name'];?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php  if($_W['role'] != 'operator') { ?>
							<li><a href="<?php  echo url('account/post', array('uniacid' => $_W['uniacid']));?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 编辑当前账号资料</a></li>
							<?php  } ?>
							<li><a href="<?php  echo url('account/display');?>" target="_blank"><i class="fa fa-cogs fa-fw"></i> 管理其它公众号</a></li>
							<li><a href="<?php  echo url('utility/emulator');?>" target="_blank"><i class="fa fa-mobile fa-fw"></i> 模拟测试</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" style="display:block; max-width:185px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; "><i class="fa fa-user"></i>  <?php  echo $_W['user']['username'];?> (<?php  if($_W['role'] == 'founder') { ?>系统管理员<?php  } else if($_W['role'] == 'manager') { ?>公众号管理员<?php  } else { ?>公众号操作员<?php  } ?>) <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php  echo url('user/profile/profile');?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 我的账号</a></li>
							<?php  if($_W['role'] != 'operator') { ?>
							<li class="divider"></li>
							<li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-sitemap fa-fw"></i> 系统选项</a></li>
							<li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-cloud-download fa-fw"></i> 自动更新</a></li>
							<li><a href="<?php  echo url('system/updatecache');?>" target="_blank"><i class="fa fa-refresh fa-fw"></i> 更新缓存</a></li>
							<li class="divider"></li>
							<?php  } ?>
							<li><a href="<?php  echo url('user/logout');?>"><i class="fa fa-sign-out fa-fw"></i> 退出系统</a></li>
						</ul>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 36px;margin-bottom: 88px;min-height: 700px;max-width: 1400px;">
		<?php  if(defined('IN_MESSAGE')) { ?>
		<div class="jumbotron clearfix alert alert-<?php  echo $label;?>">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-lg-2">
					<i class="fa fa-5x fa-<?php  if($label=='success') { ?>check-circle<?php  } ?><?php  if($label=='danger') { ?>times-circle<?php  } ?><?php  if($label=='info') { ?>info-circle<?php  } ?><?php  if($label=='warning') { ?>exclamation-triangle<?php  } ?>"></i>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
					<?php  if(is_array($msg)) { ?>
						<h2>MYSQL 错误：</h2>
						<p><?php  echo cutstr($msg['sql'], 300, 1);?></p>
						<p><b><?php  echo $msg['error']['0'];?> <?php  echo $msg['error']['1'];?>：</b><?php  echo $msg['error']['2'];?></p>
					<?php  } else { ?>
					<h2><?php  echo $caption;?></h2>
					<p><?php  echo $msg;?></p>
					<?php  } ?>
					<?php  if($redirect) { ?>
					<p><a href="<?php  echo $redirect;?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>
					<script type="text/javascript">
						setTimeout(function () {
							location.href = "<?php  echo $redirect;?>";
						}, 3000);
					</script>
					<?php  } else { ?>
						<p>[<a href="javascript:history.go(-1);">点击这里返回上一页</a>] &nbsp; [<a href="./?refresh">首页</a>]</p>
					<?php  } ?>
				</div>
		<?php  } else { ?>
		<div class="row">
			<?php  _calc_current_frames2($frames);?>
			<?php  if(!empty($frames)) { ?>
				<div class="col-xs-12 col-sm-3 col-lg-2 big-menu" style="padding-right: 0px;">
					<?php  if(is_array($frames)) { foreach($frames as $k => $frame) { ?>
					<div class="panel panel-default">
						<div class="panel-heading" style='padding: 14px 15px;'>
							<h4 class="panel-title"><?php  echo $frame['title'];?></h4>
						</div>
						<ul class="list-group collapse in" id="frame-<?php  echo $k;?>">
							<?php  if(is_array($frame['items'])) { foreach($frame['items'] as $link) { ?>
							<?php  if(!empty($link['append'])) { ?>
							<li class="list-group-item <?php  echo $link['active'];?>" onclick="window.location.href = '<?php  echo $link['url'];?>';" style="cursor:pointer;padding-left: 40px;" kw="<?php  echo $link['title'];?>">
								<?php  echo $link['title'];?>
								<a class="pull-right" href="<?php  echo $link['append']['url'];?>"><?php  echo $link['append']['title'];?></a>
							</li>
							<?php  } else { ?>
							<a class="list-group-item <?php  echo $link['active'];?>" href="<?php  echo $link['url'];?>" kw="<?php  echo $link['title'];?>" style="padding-left: 40px;"><?php  echo $link['title'];?></a>
							<?php  } ?>
							<?php  } } ?>
						</ul>
					</div>
					<?php  } } ?>
				</div>
				<div class="col-xs-12 col-sm-9 col-lg-10">
			<?php  } else { ?>
				<div>
			<?php  } ?>
		<?php  } ?>