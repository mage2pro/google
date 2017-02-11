<?php
namespace Df\Google;
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/**
	 * @return string
	 */
	function clientId() {return $this->v('client_id');}

	/**
	 * 2015-11-27
	 * @return string|null
	 */
	function serverApiKey() {return $this->p('server_api_key');}

	/**
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_api/google';}
}