<?php defined('IN_IA') or exit('Access Denied');?><?php  if(!empty($seckillinfo) ) { ?>
<div class="seckill-container <?php  if($seckillinfo['status']==1) { ?>notstart<?php  } ?>"
     data-starttime="<?php  echo $seckillinfo['starttime']-time();?>"
     data-endtime="<?php  echo $seckillinfo['endtime']-time();?>"
     data-status="<?php  echo $seckillinfo['status'];?>"
>
    <div class="fui-list seckill-list" style="background:<?php echo $seckillinfo['status']==1?$diyitem['style']['bgleftwait']:$diyitem['style']['bgleft']?>">
        <div class="fui-list-media seckill-price" style="color:<?php echo $seckillinfo['status']==1?$diyitem['style']['pricecolorwait']:$diyitem['style']['pricecolor']?>">
            &yen;<span><?php  echo $seckillinfo['price'];?></span>
        </div>
        <div class="fui-list-inner">
            <div class="text"><span class="stitle"
            <?php  if($seckillinfo['status']==1) { ?>
                style="color:<?php  echo $diyitem['style']['tagcolorwait'];?>;border:1px solid <?php  echo $diyitem['style']['tagcolorwait'];?>"
             <?php  } else { ?>
                style="color:<?php  echo $diyitem['style']['tagcolor'];?>;border:1px solid <?php  echo $diyitem['style']['tagcolor'];?>"
                <?php  } ?>
            ><?php  echo $seckillinfo['tag'];?></span></div>
            <div class="text"><span class="oldprice" style="color:<?php echo $seckillinfo['status']==1?$diyitem['style']['marketpricecolorwait']:$diyitem['style']['marketpricecolor']?>">&yen;<?php  echo $goods['minprice'];?></span></div>
        </div>
    </div>

    <div class="fui-list seckill-list1"  style="background:<?php echo $seckillinfo['status']==1?$diyitem['style']['bgleftwait']:$diyitem['style']['bgleft']?>" >
        <div class="fui-list-inner">
            <div class="text " style="color:<?php  echo $diyitem['style']['processtextcolor'];?>"><?php  if($seckillinfo['status']==0) { ?>已出售 <?php  echo $seckillinfo['percent'];?>%<?php  } ?></div>
            <div class="text "><?php  if($seckillinfo['status']==0) { ?>
                <span class="process" style="border:1px solid <?php  echo $diyitem['style']['processcolor'];?>"><div class="inner" style="width:<?php  echo $seckillinfo['percent'];?>%;background:<?php  echo $diyitem['style']['processcolor'];?>"></div></span>
                <?php  } ?></div>
        </div>
    </div>

    <div class="fui-list seckill-list2"  style="background:<?php echo $seckillinfo['status']==1?$diyitem['style']['bgrightwait']:$diyitem['style']['bgright']?>">
        <div class="fui-list-inner">
            <div class="text " style="color:<?php echo $seckillinfo['status']==1?$diyitem['style']['statuscolorwait']:$diyitem['style']['statuscolor']?>">距<?php  if($seckillinfo['status']==1) { ?>开始<?php  } else { ?>结束<?php  } ?>还有</div>
            <div class="text timer">
                <span class="time-hour" style="background:<?php echo $seckillinfo['status']==1?$diyitem['style']['timebgcolorwait']:$diyitem['style']['timebgcolor']?>;color:<?php echo $seckillinfo['status']==1?$diyitem['style']['timecolorwait']:$diyitem['style']['timecolor']?>">-</span>
                <d style="color:<?php echo $seckillinfo['status']==1?$diyitem['style']['statuscolorwait']:$diyitem['style']['statuscolor']?>"> : </d>
                <span class="time-min" style="background:<?php echo $seckillinfo['status']==1?$diyitem['style']['timebgcolorwait']:$diyitem['style']['timebgcolor']?>;color:<?php echo $seckillinfo['status']==1?$diyitem['style']['timecolorwait']:$diyitem['style']['timecolor']?>">-</span>
                <d style="color:<?php echo $seckillinfo['status']==1?$diyitem['style']['statuscolorwait']:$diyitem['style']['statuscolor']?>"> : </d>
                <span class="time-sec" style="background:<?php echo $seckillinfo['status']==1?$diyitem['style']['timebgcolorwait']:$diyitem['style']['timebgcolor']?>;color:<?php echo $seckillinfo['status']==1?$diyitem['style']['timecolorwait']:$diyitem['style']['timecolor']?>">-</span>
            </div>
        </div>
    </div>
</div>
<?php  } ?>
<!--4000097827-->