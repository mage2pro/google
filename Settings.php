<?php
namespace Df\Google;
class Settings extends \Df\Core\Settings {
	/**
	 * @return string
	 */
	public function clientId() {return $this->v('client_id');}

	/**
	 * 2015-11-27
	 * @return string|null
	 */
	public function serverApiKey() {return $this->p('server_api_key');}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_api/google/';}

	/** @return self */
	public static function s() {static $r; return $r ? $r : $r = df_o(__CLASS__);}
}