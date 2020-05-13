<?php

defined('IN_IA') or exit('Access Denied');

class Zh_cjdianc_plugin_jfshopModule extends WeModuleHook {
	public function hookMobileNotice() {
		global $_W;

	echo 123;die;
		$notice = pdo_getcolumn('shopping_notice', array('uniacid' => $_W['uniacid']), 'content');
		include $this->template('notice');
	}
}