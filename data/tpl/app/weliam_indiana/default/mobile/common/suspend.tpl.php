<?php defined('IN_IA') or exit('Access Denied');?><!--悬浮层-->
	<div class="suspension">
				<div class="menu" id="menu">
				   <img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/list.png" />
				</div>
				
				<div class="hide-box" id="hidebox" data-status='hide'>
					<div class="join"></div>
					<div id="jojn-box">
						<a href="<?php  echo $this->createMobileUrl('index')?>">
							<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/home.png"/>
							<i>首页</i>
						</a>
						<a href="<?php  echo $this->createMobileUrl('allgoods')?>">
							<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/shop.png"/>
							<i>全部商品</i>
						</a>
						<a href="<?php  echo $this->createMobileUrl('jump',array('template'=>'newannounce'))?>">
							<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/crown.png"/>
							<i>最新揭晓</i>
						</a>
						<a href="<?php  echo $this->createMobileUrl('cart',array('op'=>'cart_detail'))?>">
							<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/cart.png"/>
							<i>购物车</i>
						</a>
						<a href="<?php  echo $this->createMobileUrl('person')?>">
							<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/my.png"/>
							<i>个人中心</i>
						</a>
						<?php  if($_GPC['do'] == 'allshare' || $_GPC['do'] == 'myshare') { ?>
						<a href="<?php  echo $this->createMobileUrl('upshare',array('op'=>'upspeech'))?>">
							<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/message.png"/>
							<i>发起讨论</i>
						</a>
						<?php  } ?>
					</div>
				</div>
	</div><!--悬浮层结束-->
<script type="text/javascript">
	var add = $('#menu');
	var add2 = $('#hidebox');
	add.click(function() {
		if(add2.attr('data-status') == 'show'){
			add2.hide();
			add2.attr('data-status','hide');
		}else{
			add2.show();
			add2.attr('data-status','show');
			setTimeout(function(){
				add2.hide();
				add2.attr('data-status','hide');
			},4000)
		}
	});
</script>