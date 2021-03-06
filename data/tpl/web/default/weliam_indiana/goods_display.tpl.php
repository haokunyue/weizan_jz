<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="bs-callout bs-callout-danger" id="callout-glyphicons-empty-only">
    <h4>商品注意事项</h4>
    <p>已经购买过的商品不能再修改，查看往期可以查看该商品的所有期数！商品添加后夺宝码已经生成,不能修改本期价格。</p>
</div>
 	<div class="panel panel-default">
	    <div class="panel-heading">筛选</div>
	    <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="weliam_indiana" />
                <input type="hidden" name="do" value="goods" />
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">商品名称</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="title" id="" type="text" value="<?php  echo $_GPC['title'];?>" placeholder="可查询商品名称">
                    </div>
                </div>
                <div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">商品分类</label>
					<div class="col-xs-12 col-sm-8">
					 <?php  echo tpl_form_field_category_2level('category', $category, $childs, $goods['category_parentid'], $goods['category_childid'])?>
					</div>
				</div>
                <div class="form-group">
                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">上架时间</label>
                        <div class="col-sm-5 col-lg-7 col-xs-12">
                           <?php  echo tpl_form_field_daterange('time', array('starttime'=>date('Y-m-d H:i:s', $starttime),'endtime'=>date('Y-m-d H:i:s', $endtime)),true);?>
                        </div>
                        <div class="col-sm-3 col-lg-2" style="text-align:right;"><button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                        </div>
                    </div>
                <div class="form-group">
                </div>
            </form>
	    </div>
	</div>
	<!--
    	作者：800083075@qq.com
    	时间：2016-01-11
    	描述：商品列表
    -->
	<?php  if($_GPC['op']=='display' || $_GPC['op']=='') { ?>
	<div class="panel panel-default">
		<div class="table-responsive">
			<table class="table table-hover table-bordered" style="min-width: 300px;" >
				<thead class="navbar-inner" style="">
					<tr>
						<th style="width:30px;text-align: center;">ID</th>
						<th style="width:40px;text-align: center;">排序</th>
						<th style="width:100px;text-align: center;">商品名称</th>
						<?php  if(WELIAM_INDIANA_VERSION=='special') { ?><th style="width:60px;text-align: center;">所属商家</th><?php  } ?>
						<th style="width:50px;text-align: center;">商品图片</th>
						<th style="width:40px;text-align: center;">单价/元</th>
						<th style="width:50px;text-align: center;">当前/总期数</th>
						<th style="width:100px;text-align: center;">商品属性</th>
						<th style="width:200px;text-align: center;">操作</th>
					</tr>
				</thead>
				<tbody style="text-align: center;">
					<?php  if(is_array($goodses)) { foreach($goodses as $goodgoodsid => $goods) { ?>
					<tr>
						<td><?php  echo $goods['id'];?></td>
						<td><?php  echo $goods['sort'];?></td>
						<td><?php  echo $goods['title'];?></td>
						<?php  if(WELIAM_INDIANA_VERSION=='special') { ?><td><?php  echo $goods['merchant'];?></td><?php  } ?>
						<td><image src="<?php  echo tomedia($goods['picarr']);?>" style="max-width: 48px; max-height: 48px; border: 1px dotted gray"></td>
						<td><?php  echo $goods['price'];?></td>
						<td><?php  echo $goods['periods'];?>/<?php  echo $goods['maxperiods'];?></td>
						<!--<td><?php  echo $goods['canyurenshu'];?></td>-->
						<td>
							<?php  if($goods['status']==3) { ?>
								<!-- 商品终止 -->
								<label data='<?php  echo $goods['isnew'];?>' class='label label-default'>新品</label>
								<label data='<?php  echo $goods['ishot'];?>' class='label label-default'>热卖</label>
								<label data='<?php  echo $goods['status'];?>'class='label label-default'>上架</label>
							<?php  } else { ?>
							<label data='<?php  echo $goods['isnew'];?>' class='label label-default <?php  if($goods['isnew']==1) { ?>label-info<?php  } else { ?><?php  } ?>' onclick="setProperty(this,<?php  echo $goods['id'];?>,'new')">新品</label>
							<label data='<?php  echo $goods['ishot'];?>' class='label label-default <?php  if($goods['ishot']==1) { ?>label-info<?php  } ?>' onclick="setProperty(this,<?php  echo $goods['id'];?>,'hot')">热卖</label>
							<label data='<?php  echo $goods['status'];?>' class='label label-default <?php  if($goods['status']==2) { ?>label-info<?php  } ?>' onclick="setProperty(this,<?php  echo $goods['id'];?>,'status')">上架</label>
							<?php  } ?>
							</td>
						<td>
							<?php  if($goods['status']==3) { ?>
							<a class="btn btn-success">商品已终止不能操作</a>
							<a href="<?php  echo $this->createWebUrl('goods',array('op'=>'shiftdelete','id'=>$goods['id']));?>" onclick="return confirm('终止商品删除之后，将会删除所有该商品的数据，并且是不可恢复的？');return false;" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="删除"><i class="fa fa-times"></i>
						</a>
							<?php  } else { ?>
							<a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit', 'id'=>$goods['id']));?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="编辑"><i class="fa fa-pencil"></i></a>
							<a href="<?php  echo $this->createWebUrl('goods',array('op'=>'delete','id'=>$goods['id']));?>" onclick="return confirm('确认删除？');return false;" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="删除"><i class="fa fa-times"></i>
						</a>
							<a href="<?php  echo $this->createWebUrl('showperiod', array('gid'=>$goods['id']));?>" class="btn btn-success btn-sm" data-original-title="" title="">查看往期</a>
							<!--<a href="<?php  echo $this->createWebUrl('transfer', array('goodsid'=>$goods['id'],'periods' => $goods['periods']));?>" onclick="return confirm('终止商品后将退回用户余额，谨慎终止！！！');return false;"  class="btn btn-success btn-sm" data-original-title="" title="">终止商品
							</a>-->
							<a href="<?php  echo $this->createWebUrl('machine', array('goodsid'=>$goods['id'],'periods' => $goods['periods'],'title'=>$goods['title']));?>"  class="btn btn-success btn-sm" data-original-title="" title="">机器人
							</a>
							<?php  } ?>
						</td>
						</td>
						</td>
					</tr>
					<?php  } } ?>
					<?php  if(empty($goodses)) { ?>
					<tr>
						<td colspan="8">
							尚未添加商品
						</td>
					</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php  echo $pager;?>
	<?php  } ?>
	<!--
    	作者：800083075@qq.com
    	时间：2016-01-11
    	描述：商品回收站列表
    -->
		<?php  if($_GPC['op']=='recover') { ?>
	<div class="panel panel-default">
		<div class="table-responsive">
			<table class="table table-hover table-bordered" style="min-width: 300px;" >
				<thead>
					<tr >
						<th style="width:30px;text-align: center;">ID</th>
						<th style="width:100px;text-align: center;">商品名称</th>
						<?php  if(WELIAM_INDIANA_VERSION=='special') { ?><th style="width:60px;text-align: center;">所属商家</th><?php  } ?>
						<th style="width:50px;text-align: center;">商品图片</th>
						<th style="width:40px;text-align: center;">单价/元</th>
						<th style="width:60px;text-align: center;">当前/总期数</th>
						<th style="width:60px;text-align: center;">已参与人数</th>
						<th style="width:160px;text-align: center;">操作</th>
					</tr>
				</thead>
				<tbody style="text-align: center;">
					<?php  if(is_array($goodses)) { foreach($goodses as $goodgoodsid => $goods) { ?>
					<tr>
						<td><?php  echo $goods['id'];?></td>
						<td><?php  echo $goods['title'];?></td>
						<?php  if(WELIAM_INDIANA_VERSION=='special') { ?><td><?php  echo $goods['merchant'];?></td><?php  } ?>
						<td><image src="<?php  echo tomedia($goods['picarr']);?>" style="max-width: 48px; max-height: 48px; border: 1px dotted gray"></td>
						<td><?php  echo $goods['price'];?></td>
						<td><?php  echo $goods['periods'];?>/<?php  echo $goods['maxperiods'];?></td>
						<td><?php  echo $goods['canyurenshu'];?></td>
						<td >
							<a href="<?php  echo $this->createWebUrl('goods',array('op'=>'regain','id'=>$goods['id']));?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="恢复" onclick="return confirm('确定恢复该商品');return false;">还原商品</a>
							<a href="<?php  echo $this->createWebUrl('goods',array('op'=>'shiftdelete','id'=>$goods['id']));?>" onclick="return confirm('谨慎使用，适用于删除测试数据.删除会造成物品信息、中奖信息、晒单信息、购买信息等一系列信息彻底删除。此操作不可恢复，确认删除？');return false;" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="删除">彻底删除
						</a>
						</td>
					</tr>
					<?php  } } ?>
					<?php  if(empty($goodses)) { ?>
					<tr>
						<td colspan="8">
							尚未添加商品
						</td>
					</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php  echo $pager;?>
	<?php  } ?>
<script>
	function setProperty(obj,id,type){
		$(obj).html($(obj).html() + "...");
		$.post("<?php  echo $this->createWebUrl('setgoodsproperty')?>"
			,{id:id,type:type, data: obj.getAttribute("data")}
			,function(d){
				$(obj).html($(obj).html().replace("...",""));
				if(type=='type'){
				 $(obj).html( d.data=='1'?'实体物品':'虚拟物品');
				}
				if(type=='status'){
				 $(obj).html( d.data=='2'?'上架':'下架');
				}
				$(obj).attr("data",d.data);
				if(d.result==1){
					$(obj).toggleClass("label-info");
				}
			}
			,"json"
		);
	}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>