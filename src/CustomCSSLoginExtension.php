<?php
/**
 * @copyright   Copyright (C) 2010-2019 Combodo SARL
 * @license     https://www.combodo.com/documentation/combodo-software-license.html
 *
 */

namespace Combodo\iTop\CustomCSS;

use iLoginUIExtension;
use LoginBlockExtension;
use LoginTwigContext;
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
		return array('form');
	}

	public function GetTwigContext()
	{
		$oLoginContext = new LoginTwigContext();
		$oLoginContext->SetLoaderPath(utils::GetAbsoluteModulePath('itop-login-custom-css').'view');
		$oLoginContext->AddBlockExtension('css', new LoginBlockExtension('custom_css.css.twig'));

		return $oLoginContext;
	}
}
