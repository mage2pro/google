<?php
namespace Df\Google;
/** @method static Settings s() */
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
	 * @see \Df\Core\Settings::prefix()
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_api/google/';}
}