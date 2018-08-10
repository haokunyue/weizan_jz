<?php defined('IN_IA') or exit('Access Denied');?><nav class="bar bar-tab" style="position: fixed;">
    <a class="tab-item external <?php  if($_GPC['do'] == 'index') { ?>active<?php  } ?>" href="<?php  echo $this->createMobileUrl('index');?>">
    	<i class="icon iconfont"><?php  if($_GPC['do'] == 'index') { ?>&#xe6bb;<?php  } else { ?>&#xe6b8;<?php  } ?></i>
        <div class="name">首页</div>
    </a>
    <a class="tab-item external <?php  if($_GPC['do'] == 'allgoods') { ?>active<?php  } ?>" href="<?php  echo $this->createMobileUrl('allgoods');?>">
     	<i class="icon iconfont"><?php  if($_GPC['do'] == 'allgoods') { ?>&#xe697;<?php  } else { ?>&#xe676;<?php  } ?></i>
        <div class="name">全部商品</div>
    </a>
    <a class="tab-item external <?php  if($_GPC['template'] == 'newannounce') { ?>active<?php  } ?>" href="<?php  echo $this->createMobileUrl('jump',array('template' => 'newannounce'));?>">
      	<i class="icon iconfont"><?php  if($_GPC['template'] == 'newannounce') { ?>&#xe776;<?php  } else { ?>&#xe777;<?php  } ?></i>
        <div class="name">最新揭晓</div>
    </a>
    <a class="tab-item external <?php  if($_GPC['do'] == 'cart') { ?>active<?php  } ?>" href="<?php  echo $this->createMobileUrl('cart',array('op'=>'cart_detail'));?>">
      	<i class="icon iconfont"><?php  if($_GPC['do'] == 'cart') { ?>&#xe6b9;<?php  } else { ?>&#xe6af;<?php  } ?></i>
        <div class="name">购物车</div>
        <?php  if($_GPC['do'] != 'cart') { ?><span class="badge" id="count"><?php  echo m('goods')->getCartNumber(m('user')->getOpenid())?></span><?php  } ?>
    </a>
    <a class="tab-item external <?php  if($_GPC['do'] == 'person') { ?>active<?php  } ?>" href="<?php  echo $this->createMobileUrl('person');?>">
      	<i class="icon iconfont"><?php  if($_GPC['do'] == 'person') { ?>&#xe78c;<?php  } else { ?>&#xe78b;<?php  } ?></i>
        <div class="name">个人中心</div>
    </a>
</nav>
