<?php defined('IN_IA') or exit('Access Denied');?><script type="text/html" id="tpl_goods">
    <%each list as item%>
        <div class="fui-list" data-id="<%item.id%>" data-can="<?php if(cv('goods.edit')) { ?>1<?php  } ?>">
            <div class="fui-list-media batch-item">
                <input type="checkbox" class="fui-radio fui-radio-success batch-item-check" name="checkbox" value="<%item.id%>" />
            </div>
            <div class="fui-list-media round">
                <img src="<%item.thumb%>" class="round" onerror="this.src='../addons/ewei_shopv2/static/images/nopic100.jpg';" />
                <%if item.merchid>0%>
                    <div class="title">多商户</div>
                <%/if%>
            </div>
            <div class="fui-list-inner">
                <div class="title"><%item.title%></div>
                <div class="subtitle">
                    <span class="price">￥<%item.minprice%><%if item.maxprice>item.minprice%>~￥<%item.maxprice%><%/if%></span>
                </div>
                <div class="subtitle">
                    <span class="total">库存: <%item.total%></span>
                    <span class="total">销量: <%item.sales%></span>
                </div>
            </div>
            <?php if(cv('goods.edit|goods.delete|goods.restore|goods.stock')) { ?>
                <div class="fui-list-angle fundot-parent batch-hide">
                    <div class="fundot"><i class="icon icon-more"></i></div>
                    <div class="funmenu">
                        <?php if(cv('goods.edit')) { ?>
                            <a class="btn-goods" data-action="edit"><i class="icon icon-edit"></i><span>编辑</span></a>
                        <?php  } ?>
                        <%if status=='sale'||status=='out'%>
                            <?php if(cv('goods.edit')) { ?>
                                <a class="btn-goods" data-action="status" data-status="0"><i class="icon icon-icondownload"></i><span>下架</span></a>
                            <?php  } ?>
                        <%/if%>
                        <%if status=='stock'%>
                            <?php if(cv('goods.edit')) { ?>
                                <a class="btn-goods" data-action="status" data-status="1"><i class="icon icon-top"></i><span>上架</span></a>
                            <?php  } ?>
                        <%/if%>
                        <%if status!='cycle'%>
                            <?php if(cv('goods.delete')) { ?>
                                <a class="btn-goods" data-action="delete"><i class="icon icon-delete"></i><span>删除</span></a>
                            <?php  } ?>
                        <%else%>
                            <?php if(cv('goods.restore')) { ?>
                                <a class="btn-goods" data-action="restore"><i class="icon icon-refresh"></i><span>还原</span></a>
                            <?php  } ?>
                        <%/if%>
                        <%if status=='sale'||status=='out'%>
                            <a class="btn-goods" data-action="view"><i class="icon icon-enclosure"></i><span>查看</span></a>
                        <%/if%>
                    </div>
                </div>
            <?php  } ?>
        </div>
    <%/each%>
</script>
<!--6Z2S5bKb5piT6IGU5LqS5Yqo572R57uc56eR5oqA5pyJ6ZmQ5YWs5Y+454mI5p2D5omA5pyJ-->