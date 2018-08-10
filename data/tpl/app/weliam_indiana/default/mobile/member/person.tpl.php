<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="page-group">
    <div class="page page-current" id="page-goods-list">
		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/followed', TEMPLATE_INCLUDEPATH)) : (include template('common/followed', TEMPLATE_INCLUDEPATH));?>
		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footbar', TEMPLATE_INCLUDEPATH)) : (include template('common/footbar', TEMPLATE_INCLUDEPATH));?>
		<div class="content infinite-scroll native-scroll" data-distance="10">
			<div class="a_account_top" style="height:135px;">
		        <a href="<?php  echo $this->createMobileUrl('profile')?>" class="a_set_img"></a>
		        <a href="<?php  echo $this->createMobileUrl('profile')?>"><img class="a_user_img" id="headPicc" src="<?php  echo $reply['avatar'];?>"></a>
		        <div class="u_box">
			      	<p class="a_account_p1" style="">
			      		<em id="nickname">昵称:<?php  echo $reply['nickname'];?></em><img src="" style="height:20px;margin-bottom:10px;display:none" id="hhr">
			      		<!--<em id="u_grade">幼儿园</em>-->
			      	</p>
			       	<p class="a_account_p1" style="padding-top:10px; ">
			     		<em>可用夺宝币：<span class="a_orange" id="moneyTotal" style="padding-left:0px;"><?php  echo $reply['credit2'];?></span></em> 
		       		</p>
		       	</div>
		     	<a id="u_recharge" href="<?php  if($this->module['config']['rechargestatus'] == 2) { ?><?php  echo $this->module['config']['recharge']?><?php  } else { ?><?php  echo $this->createMobileUrl('recharge')?><?php  } ?>" class="a_now_recharge">立即充值</a> 
		    </div>
		       	<div  class="content-B"  style="background-color: white;position: relative;">
		       		<div class="con-box">
			           	<div class="a_account_p66"><span class="a_orange" id="score"><?php  echo $reply['credit1'];?></span><div>可用积分</div> </div>
			           	<div class="a_account_p66"><a href="<?php  echo $this->createMobileUrl('recharge_records')?>"><span class="a_orange" id="cardUsable"><?php  if(empty($recharge)) { ?>0<?php  } else { ?><?php  echo $recharge;?><?php  } ?></span><div style="color: #989898;">充值记录</div></a></div>
			           	<div id="BrokerOut" class="a_account_p66" data-val="2" style="width:31%;border-right:0px;"><a href="<?php  echo $this->createMobileUrl('consume')?>"><span class="a_orange" id="brokerageUsable"><?php  if(empty($consume)) { ?>0<?php  } else { ?><?php  echo $consume;?><?php  } ?></span><div style="color:#989898">消费记录</div></a> <i class="c_cirle"></i></div>   
		       	    </div>
		       	</div>
		       	<?php  if(m('member')->check_explorer() == 'weixin' && empty($account) && $this->module['config']['is_bingding'] == 2) { ?>
		       	<div class="notice">
		       		<div class="notice-box" onclick="location.href = '<?php  echo $this->createMobileUrl('login',array('op'=>'bingding'))?>'">
		       			<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/warn_fill.png"/>您还未绑定账号
		       		</div>
		       	</div>
		       	<?php  } ?>
		       	<div class="row no-gutter" style="overflow: hidden;background-color: white;">
		       <ul class="a_account_ul" id="thirdData">	
			      	<li class="col-33">
			        	<div class="col-33-box">
				          <a href="<?php  echo $this->createMobileUrl('order')?>">
				          	<div class="box-left">
					            <span class="a_span_li2"></span>
					        </div> 
					        <div class="box-right">
					            <em>参与记录</em>
					            <i>您的参与记录</i>
				            </div>
				          </a>
			            </div>
			        </li>
			        <li class="col-33">
			          <a href="<?php  echo $this->createMobileUrl('order_get')?>">
			          	<div class="box-left">
			            	<span class="a_span_li3"></span>
			            </div> 
			            <div class="box-right">
			           		 <em>中奖记录</em>
			          		<i>您的中奖记录</i>
			            </div>
			          </a>
			        </li>
			        <li class="col-33" style="background:url(<?php echo WELIAM_INDIANA_STATIC;?>img/icon/account_icon.png) no-repeat;
				background-size:40px;
				background-position:  right 0;
				background-size: auto 34px;">
			          <a href="<?php  echo $this->createMobileUrl('allshare')?>">
			          	<div class="box-left">
			            <span class="a_span_li95"></span>
			            </div>
			             <div class="box-right">
			            <em>发现</em>
			            <i>发现更多新奇</i>
			            </div>
			          </a>
			        </li>
			        <li class="col-33">
			           <a href="<?php  echo $this->createMobileUrl('invite')?>">
			           	<div class="box-left">
			            <span class="a_span_li98"></span>
			            </div>
			            <div class="box-right">
			            <em>邀请好友</em>
			            <i>邀请有礼</i>
			            </div>
			          </a>
			        </li>
			        <li class="col-33">
			          <a href="<?php  echo $this->createMobileUrl('credit1_credit2')?>">
			          	<div class="box-left">
			            <span class="a_span_li5"></span>
			            </div>
			            <div class="box-right">
			            <em>积分兑换</em>
			            <i>兑换更多礼品</i>
			            </div>
			          </a>
			        </li>
			        <li class="col-33">
			          <a href="<?php  echo $this->createMobileUrl('myshare')?>">
			          	<div class="box-left">
			            <span class="a_span_li7"></span>
			            </div>
			            <div class="box-right">
			            <em>我的晒单</em>
			            <i>查看晒单记录</i>
			            </div>
			          </a>
			        </li>
			        <li class="col-33">
			          <a href="<?php  echo $this->createMobileUrl('order',array('flag' => 'alone'))?>">
			          	<div class="box-left">
			            <span class="a_span_li7"></span>
			            </div>
			            <div class="box-right">
			            <em>购买记录</em>
			            <i>全价购买记录</i>
			            </div>
			          </a>
			        </li>
			    </ul>
		       	</div>
			        
		    
		    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
        </div>
    </div>
</div>
</body>
</html>