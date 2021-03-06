<?php defined('IN_IA') or exit('Access Denied');?>			</div>
		</div>
	</div>
	<style>
		.ft.links{margin-bottom: 0px;}
		.ft .links_item{border-left-color:#f1f1f1;*line-height:15px}
		.ft .links_item a{color:#f1f1f1}
		.foot{padding:24px 0;color:#f1f1f1;text-align:center;background-color:#b8b9b9;bottom: 0px;position: inherit;width: 100%;}
		.foot ul {list-style-type: none;}
		.copyright{display:inline}
	</style>
	<script>
		require(['bootstrap']);
		$('.js-clip').each(function(){
			util.clip(this, $(this).attr('data-url'));
		});
		function subscribe(){
			$.post("<?php  echo url('utility/subscribe');?>", function(){
				setTimeout(subscribe, 5000);
			});
		}
		function sync() {
			$.post("<?php  echo url('utility/sync');?>", function(){
				setTimeout(sync, 60000);
			});
		}
		$(function(){
			subscribe();
			sync();
		});
		<?php  if($_W['uid']) { ?>
			function checknotice() {
				$.post("<?php  echo url('utility/notice')?>", {}, function(data){
					var data = $.parseJSON(data);
					$('#notice-container').html(data.notices);
					$('#notice-total').html(data.total);
					if(data.total > 0) {
						$('#notice-total').css('background', '#ff9900');
					} else {
						$('#notice-total').css('background', '');
					}
					setTimeout(checknotice, 60000);
				});
			}
			checknotice();
		<?php  } ?>
	</script>
	<div class="foot" id="footer">
		<ul class="links ft">
            <li class="links_item"><p class="copyright">Copyright © 2015-2016 <?php  echo $_W['account']['name'];?>. All Rights Reserved.</p> </li>
		</ul>
	</div>
</body>
</html>

