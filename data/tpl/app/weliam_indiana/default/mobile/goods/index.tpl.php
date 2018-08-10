<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style>
.x_new_publish{width:100%;height:40px;position:relative;overflow:hidden;background:#fff no-repeat 5% center;background-size:20px}
.x_new_publish:before {content: " ";position: absolute;left: 0;top: 0;width: 100%;height: 1px;border-top: 1px solid #e1e1e1;color: #C7C7C7;-webkit-transform-origin: 0 0;transform-origin: 0 0;-webkit-transform: scaleY(0.5);transform: scaleY(0.5);}
.x_new_publish:after {content: " ";position: absolute;left: 0;bottom: 0;width: 100%;height: 1px;border-bottom: 1px solid #e1e1e1;color: #C7C7C7;-webkit-transform-origin: 0 100%;transform-origin: 0 100%;-webkit-transform: scaleY(0.5);transform: scaleY(0.5);}
.x_new_publish .left-icon{position: absolute;padding-left: 15px;line-height: 40px;}
.x_new_publish .left-icon .iconfont{font-size: 24px;color: #d93a55;}
.x_newest_publish{width:100%;line-height:40px;position: absolute;padding-left: 15px;float: left;}
.x_newest_publish li{width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
</style>		    
<div class="page-group">
    <div class="page page-current" id="page-goods-list">
		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/followed', TEMPLATE_INCLUDEPATH)) : (include template('common/followed', TEMPLATE_INCLUDEPATH));?>
		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footbar', TEMPLATE_INCLUDEPATH)) : (include template('common/footbar', TEMPLATE_INCLUDEPATH));?>
		<div class="content infinite-scroll" data-distance="10" data-type="js">
		<div class="g-body">
		 	<div class="m-index">
		 		<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓幻灯片开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
		        <?php  if($advs) { ?>
				<div id="banner_box" class="box_swipe">
					<ul>
						<?php  if(is_array($advs)) { foreach($advs as $adv) { ?>
						<li>
							<a <?php  if($adv['link'] != 'http://') { ?>href="<?php  echo $adv['link'];?>"<?php  } ?>>
								<img src="<?php  echo tomedia($adv['thumb']);?>" style='width:100%;' />
							</a>
		
						</li>
						<?php  } } ?>
					</ul>
					<ol>
						<?php  $slideNum = 1;?> <?php  if(is_array($advs)) { foreach($advs as $adv) { ?>
						<li<?php  if($slideNum==1 ) { ?> class="on" <?php  } ?>></li>
						<?php  $slideNum++;?> <?php  } } ?>
					</ol>
				</div>
				<script>
					$(function() {
				        new Swipe($('#banner_box')[0], {
				            speed:500,
				            auto:3000,
				            callback: function(){
				                var lis = $(this.element).next("ol").children();
				                lis.removeClass("on").eq(this.index).addClass("on");
				            }
				        });
				    });
				</script>
				<?php  } ?>
				<!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑幻灯片结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
				<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓自定义菜单开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
				<?php  if($navis) { ?>
				<div class="s_index_icon" style="padding-bottom: 0px;">
			        <div class="swiper-wrapper" id="c_main_Prefecture">
				    	<ul class="s_index_ul" style="">
				    		<?php  if(is_array($navis)) { foreach($navis as $navi) { ?>
				    		<li><a <?php  if($navi['link'] != 'http://') { ?>href="<?php  echo $navi['link'];?>"<?php  } ?>><img src="<?php  echo tomedia($navi['thumb']);?>"><em><?php  echo $navi['name'];?></em></a></li>
				    		<?php  } } ?>
				    	</ul>
			        </div>
			   	</div>
			   	<?php  } ?>
			   	<div class="x_new_publish">
					<div class="left-icon">
				       	<img src="<?php echo WELIAM_INDIANA_STATIC;?>img/icon/appimg/horn2.png" />
				    </div>
					<ul class="x_newest_publish" id="publishData">
						<?php  if(is_array($notice)) { foreach($notice as $no) { ?>
						<li><span style="color: #4E555E;"><a href="<?php  echo $this->createMobileUrl('notice',array('id'=>$no['id']))?>" style="color: #4E555E;"><?php  echo $no['title'];?></a></span></li>
						<?php  } } ?>
					</ul>
				</div>
				<script type="text/javascript">
					function newnotice(){
						var a=0;
						$(
							$(".x_newest_publish li")[0]).clone(!0).insertAfter(
								$(
									$(".x_newest_publish li")[
									$(".x_newest_publish li").length-1]
									)
								);
								setInterval(
									function(){
										a-=40;
										a>=40*-($(".x_newest_publish li").length-2)?$(".x_newest_publish").animate({marginTop:a},2E3):$(".x_newest_publish").animate({marginTop:a},2E3,function(){a=0;$(".x_newest_publish").css({marginTop:0})})},4E3)};
					$(function () {
						newnotice();
					});
				</script>
			   	<!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑自定义菜单结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
			   	<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓滚动揭晓开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
			   	
			    <!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑滚动揭晓结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
			    <!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓首页商品展示开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
			    
			    <div class="c_new_goods b_index_fixed1">
			        <ul class="c_goods_title b_index_fixed" id="list_li" style="position: relative; top: 0px; left: 0px; z-index: 149;">
			          <li class="c_hot_color" val-data="fast">最快</li>
			          <li val-data="new">最新</li>
			          <li val-data="hot">最热</li>
			          <li val-data="priceup">价格 <i class="fa fa-long-arrow-up"></i></li>
			          <li val-data="pricedown">价格 <i class="fa fa-long-arrow-down"></i></li>
			        </ul>
			        <dl class="c_goods_details" id="dataList">
			          	<!-- ↓↓↓↓↓商品数据开始↓↓↓↓↓ -->
			        	
			        	<!-- ↑↑↑↑↑商品数据结束↑↑↑↑↑ -->
			      	</dl>
				  	<div id="dataMore" class="more">
				      	<div class="c_clear"></div>
				       	<div class="c_click_see" id="loading" style="display: none; background: none;">
				       	<img alt="loading" src="/static/img/loading2.gif" style="height:30px">
				       	</div>
					</div>
					<div class="infinite-scroll-preloader" id="preloader">
				      	上拉、试试
				    </div>
			    </div>
			    <!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑首页商品展示结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
		    </div>
		</div>
		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
		</div>
	</div>
</div>
<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓最新揭晓嵌入模块开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
<script type="text/html" id="nowannounce">
	{{# for(var i = 0, len = d.result.length; i < len; i++){ }}
	<li>
		<div class="c_newest_publish_text" id = "text_{{ d.result[i].id }}">
			<div style="height:40px;  overflow: hidden;line-height: 20px;">
				<a href="<?php  echo $this->createMobileUrl('detail')?>&periodid={{ d.result[i].id }}">(第{{ d.result[i].periods }}期){{ d.result[i].title }}</a>
			</div>
			{{# if(d.result[i].endtime > d.result[i].nowtime){ }}
			<p class="c_publish_time" id="time_{{ d.result[i].id }}">
				<span id="mm_10_{{ d.result[i].id }}">-</span><span id="mm_1_{{ d.result[i].id }}">-</span><span class="c_colon">:</span><span id="ss_10_{{ d.result[i].id }}">-</span><span id="ss_1_{{ d.result[i].id }}">-</span><span class="c_colon">:</span><span id="pp_10_{{ d.result[i].id }}">-</span><span id="pp_1_{{ d.result[i].id }}">-</span>
			</p>
			<div style="font-size:12px;line-height: 20px;height: 20px;overflow: hidden;display: none;" id = 'win_{{ d.result[i].id }}'><span style="float: left;">恭喜： </span><span style="float: left;width: 64px;overflow:hidden ;">{{d.result[i].nickname}}</span></div>
			{{# }else{ }}
			<div style="font-size:12px;line-height: 20px;height: 20px;overflow: hidden;"><span style="float: left;">恭喜： </span><span style="float: left;width: 64px;overflow:hidden ;">{{d.result[i].nickname}}</span></div>
			{{# } }}
		</div>
		<div class="c_newest_publish_img">
			<a href="<?php  echo $this->createMobileUrl('detail')?>&periodid={{ d.result[i].id }}">
				<img src="{{ d.result[i].picarr }}" class="img-responsive publish" style="width:95%;height: 40px;" alt="{{ d.result[i].title }}">			        				
			</a>
		</div>
	</li>
	{{# } }}
</script>
<!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑最新揭晓嵌入模块结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->
<!-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓商品嵌入模块开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ -->
<script type="text/html" id="goodslist">
	{{# for(var i = 0, len = d.result.length; i < len; i++){ }}
	<dd>
		{{# if(d.result[i].init_money > 1){ }}
		<div class="tag-top">{{ d.result[i].init_money }}元专区</div>
		<div class="tag-bottom"></div>
		{{# } }}
		<div class="c_goods_size">
			<a href="<?php  echo $this->createMobileUrl('detail')?>&id={{ d.result[i].id }}">
				<img id="img_{{ d.result[i].id }}" data-original="{{ d.result[i].picarr }}" class="img-responsive lazy2" style="width: 100%; display: block;" src="{{ d.result[i].picarr }}">
			</a>
		</div>
		<a href="#">(第{{ d.result[i].periods }}期){{ d.result[i].title }}</a>
		<div class="shopping-box">
		<div class="shopping-left">
			<p>开奖进度<span>{{ d.result[i].scale }}%</span></p>
			<div class="c_shopping_cart">
				<div class="c_progress_box">
					<span style="width:{{ d.result[i].scale }}%"></span>
				</div>
			</div>
		</div>
		<div class="shopping-right" onclick="addToCart('{{ d.result[i].period_number }}','{{ d.result[i].title }}')">
			<button>立即参与</button>
		</div>
		</div>
	</dd>
	{{# } }}
</script>
<!-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑商品嵌入模块结束↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ -->

<script>
	$(function() {
		'use strict';
		//商品列表页
		$(document).on("pageInit", "#page-goods-list", function(e, id, page) {	
			/*bindAccumulativePeople();*/
			/*newWinner();*/
			/******加载首页最新揭晓******/
			var page_num = 4;
			var page_start = 0;

			function addAnnounceItems(announce_num,announce_page){
				var announceAjaxUrl = "<?php  echo $this->createMobileUrl('index')?>"+"&op="+"announce"+"&announce_num="+ announce_num +"&announce_page=" + announce_page;
				$.ajax({
					type: "POST",
					url: announceAjaxUrl,
					dataType: 'json',
					beforeSend: function(XMLHttpRequest) {},
					success: function(data) {
						if (data.result.length > 0) {
							var gettpl = document.getElementById('nowannounce').innerHTML;
							laytpl(gettpl).render(data, function(html){
							    $(".c_newest_publish").html(html);
							});
						} else {
							$("#ann_ref").remove();			//移除最新揭晓的刷新效果
							$(".loading_more").remove();
							$('.noData').show();
						}
					},
					error: function() {
						$('.error').show();
					}
				});
			}
			addAnnounceItems(page_num,page_start);	//第一次进入加载
			
			/***********加载商品数据方法***********/
			var page_goods = 0;
			var op_goods = 'fast';
			var flag_goods = 0;		//数据加载完成标记
			
			function addGoodsItems(page,op){
				document.getElementById('preloader').innerHTML = '<div class="preloader"></div>';	//开启加载动态
				var goodsAjaxUrl = "<?php  echo $this->createMobileUrl('index')?>"+"&op="+ op +"&page="+ page;
				$.ajax({
					type: "POST",
					url: goodsAjaxUrl,
					dataType: 'json',
					beforeSend: function(XMLHttpRequest) {},
					success: function(data) {
						if (data.result.length > 0) {
							var gettpl = document.getElementById('goodslist').innerHTML;
							laytpl(gettpl).render(data, function(html){
							    $("#dataList").append(html);
							    document.getElementById('preloader').innerHTML = '上拉加载更多';		//关闭加载动态
							});
						} else {
							document.getElementById('preloader').innerHTML = '商品已加载完成';
							flag_goods = 1;
						}
					},
					error: function() {
						$('.error').show();
					}
				});
			}
			addGoodsItems(page_goods,op_goods);	//第一次进入加载
			
			/************商品类别方法************/
			$('.c_goods_title').find('li').click(function(){
				var op = $(this).attr('val-data');
				$(this).addClass('c_hot_color').siblings().removeClass('c_hot_color');
				document.getElementById('dataList').innerHTML = '';	//清空原有商品
				op_goods = op;		//重新定义全局变量
				page_goods = 0;		//重新定义全局变量
				flag_goods = 0;		//初始化数据加载完成标记
				addGoodsItems(page_goods,op_goods);
			});
			/**********刷新加载商品**********/
			$(page).on('infinite', function() {
				page_goods++;
				if(flag_goods == 0){
					addGoodsItems(page_goods,op_goods);
				}
			});
		});
		$.init();
	});
</script>
<script>
function addToCart(periodnumber,title){
	$.post("<?php  echo $this->createMobileUrl('cart',array('op'=>'tocart'))?>"
		,{periodnumber:periodnumber,title:title}
		,function(d){
			if(d.result==1){
				$.toast('添加到购物车成功');
				$('#count').html(d.num);
			}
		}
		,"json");
}
</script>
<script>
		$('#list_li').find('li').click(function() {
			$(this).addClass('c_hot_color').siblings().removeClass('c_hot_color');
		})
</script>
</body>
</html>