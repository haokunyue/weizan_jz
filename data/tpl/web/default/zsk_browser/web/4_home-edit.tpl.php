<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?> 
<style type="text/css">
	.active .tab-a{background-color: #428BCA !important;color:#FFF !important ;font-weight: bold !important;}
	.notice{color:#ff4444;font-size: 13px;margin-left:20px;}
  .h4{text-indent: 30px;}
  .alignR{text-align: right;}
	.editBtn{display: inline-block;color:blue;}.form-control{width: 90%;display: inline-block;}
	.row{margin-top: 20px;}.rowTitle{font-size: 16px;font-weight: bolder;} .rowLabel{line-height: 34px;}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo PUB;?>/main.css"> 
<script type="text/javascript" src="<?php echo PUB;?>/util.js"></script>
<div class="panel panel-info">
	<div class="panel-heading" style="text-align: center;">首页设置</div>
	<div class="panel-body">
		<form action="<?php  echo $this->createWebUrl('home');?>&act=save" id="setForm"  method="post">
		 <div class="row" >
		    <div class="alignR col-xs-3 col-md-3 rowLabel" >首页链接</div>
		    <div class="alignL col-xs-4 col-md-6 "> 
		    	<textarea name="url"  class="form-control" rows="3" style="resize: none;" placeholder="首页链接，仅支持https，需配置业务域名"><?php  echo urldecode($home['url']);?></textarea><br/>
		    	 <span class="notice">必填</span><a href="https://www.010xr.com" target="__block" style="margin-left:30px;color: blue;">更多说明</a>
		    </div>
		</div>
		 
		<div class="row" >
		    <div class="alignR col-xs-3 col-md-3 rowLabel" >标题背景色</div>
		    <div class="alignL col-xs-4 col-md-6 "> 
		    	<input type="text" name="bar_bgcolor" valid="length|1|20" id='bgcolor' value="<?php  echo ($home['bar_bgcolor']);?>"  style="width: 250px;"  valid-msg="名称不正确"  class="form-control"  placeholder="16进制颜色，默认黑色" > 取颜色:<input type="color" id="myColor" value="<?php  echo ($home['bar_bgcolor']);?>" onchange ="getcolor()">
		    </div>
		</div>
		<div class="row" >
		    <div class="alignR col-xs-3 col-md-3 rowLabel" >分享标题</div>
		    <div class="alignL col-xs-4 col-md-6 "> 
		    	<input type="text" name="share" valid="length|1|20"   value="<?php  echo ($home['share']);?>"  style="width: 250px;"  valid-msg="名称不正确"  class="form-control"  placeholder="20字以内" >  
		    </div>
		</div>
		 
		
	 
		</form>
		 <div class="row" >
		    <div class="col-xs-12 col-md-12 " style="text-align: center;" >
		    	<input type="submit"   class="btn btn-primary"  form="setForm"  style="margin:10px 20px;" onclick="sub()" value="保存"/>
		    	 
		    </div> 
		</div>
	</div>
</div>
<script type="text/javascript">
	function getcolor() {
	    var x = document.getElementById("myColor").value;
	    console.log(x);
	    document.getElementById("bgcolor").value = x;
	}
</script>
      
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>