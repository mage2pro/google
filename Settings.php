<?php
namespace Df\Google;
# 2015-11-27
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/**
	 * 2015-11-27
	 */
	function clientId():string {return $this->v('client_id');}

	/**
	 * 2015-11-27
	 * @return string|null
	 */
	function serverApiKey() {return $this->p('server_api_key');}

	/**
	 * 2015-11-27
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	protected function prefix():string {return 'df_api/google';}
}