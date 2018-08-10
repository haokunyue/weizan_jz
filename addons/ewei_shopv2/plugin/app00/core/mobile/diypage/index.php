<?php
//dezend by http://www.yunlu99.com/ QQ:270656184
if (!defined('IN_IA')) {
	exit('Access Denied');
}

require EWEI_SHOPV2_PLUGIN . 'app/core/page_mobile.php';
class Index_EweiShopV2Page extends AppMobilePage
{
	public function main()
	{
		global $_W;
		global $_GPC;
		$diypage = p('diypage');

		if (!$diypage) {
			app_error(AppError::$PluginNotFound);
		}

		$pageid = intval($_GPC['id']);

		if (empty($pageid)) {
			$pageid = trim($_GPC['type']);
		}

		if (empty($pageid)) {
			app_error(AppError::$PageNotFound);
		}

		$page = $this->model->getPage($pageid, true);
		if (empty($page) || empty($page['data'])) {
			app_error(AppError::$PageNotFound);
		}

		app_json(array('diypage' => $page['data']));
	}

	public function main2()
	{
		global $_W;
		global $_GPC;
		$diypage = p('diypage');

		if (!$diypage) {
			app_error(AppError::$PluginNotFound);
		}

		$pagetype = trim($_GPC['type']);

		if (!empty($pagetype)) {
			$pageid = $this->type2Pageid($pagetype);
		}
		else {
			$pageid = intval($_GPC['id']);
		}

		if (empty($pageid)) {
			app_error(AppError::$PageNotFound);
		}

		$page = $diypage->getPage($pageid, true);
		if (empty($page) || empty($page['data'])) {
			app_error(AppError::$PageNotFound);
		}

		app_json(array('diypage' => $page['data']));
	}

	/**
     * 根据type获取id
     * @param null $type
     * @return int
     */
	public function type2Pageid($type = NULL)
	{
		if (empty($type)) {
			return 0;
		}

		$set = m('common')->getPluginset('diypage');
		$pageset = $set['page'];
		$pageid = intval($pageset[$type . '_wxapp']);
		return $pageid;
	}
}

?>
