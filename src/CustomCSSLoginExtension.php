<?php
/**
 * @copyright   Copyright (C) 2010-2019 Combodo SARL
 * @license     https://www.combodo.com/documentation/combodo-software-license.html
 *
 */

namespace Combodo\iTop\CustomCSS;

use iLoginUIExtension;
use LoginBlockData;
use LoginTwigData;
use utils;

/**
 * Class CustomCSSLoginExtension
 */
class CustomCSSLoginExtension implements  iLoginUIExtension
{

	/**
	 * Return the list of supported login modes for this plugin
	 *
	 * @return array of supported login modes
	 */
	public function ListSupportedLoginModes()
	{
		return array('form','basic', 'external', 'url');
	}

	/**
	 * @return LoginTwigData
	 */
	public function GetTwigBlockData()
	{
		$sPath = APPROOT.'env-'.utils::GetCurrentEnvironment().'/itop-login-custom-css/view';
		$oLoginData = new LoginTwigData(array(), $sPath);

		$oLoginData->AddBlockData('css', new LoginBlockData('custom_css.css.twig'));

		return $oLoginData;
	}
}
