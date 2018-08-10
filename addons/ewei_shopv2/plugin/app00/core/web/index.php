<?php
//dezend by http://www.yunlu99.com/ QQ:270656184
if (!defined('IN_IA')) {
	exit('Access Denied');
}

class Index_EweiShopV2Page extends PluginWebPage
{
	public function main()
	{
		global $_W;
		$this->apiFile();

		if (empty($_W['shopversion'])) {
			$this->message('请使用新版本访问');
		}

		$error = NULL;
		$auth = $this->model->getAuth();

		if (is_error($auth)) {
			$error = $auth['message'];
		}
		else {
			$list = $this->model->getReleaseList();
			if (is_error($list)) {
				$error = $list['message'];
			}
			else {
				if (empty($list)) {
					$error = '未查询到授权小程序';
				}
			}
		}

		include $this->template();
	}

	protected function apiFile()
	{
		$path1 = __DIR__ . '/../mobile/ewei_shopv2_api.php';
		$path2 = IA_ROOT . '/app/ewei_shopv2_api.php';
		if (is_file($path2) || !is_file($path1)) {
			return NULL;
		}

		@copy($path1, $path2);
	}
}

?>
