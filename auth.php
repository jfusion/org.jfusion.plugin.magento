<?php namespace JFusion\Plugins\magento;
/**
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage magento
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */

use JFusion\User\Userinfo;

/**
 * JFusion Auth Class for Magento 1.1
 * For detailed descriptions on these functions please check Plugin_Auth
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage magento
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Auth extends \JFusion\Plugin\Auth
{
	/**
	 * @param Userinfo $userinfo
	 * @return string
	 */

	function generateEncryptedPassword(Userinfo $userinfo) {
        $magentoEncryption = $this->params->get('magento_encryption', 'MD5');
        if ($magentoEncryption == "MD5") {
			if ($userinfo->password_salt) {
				$hash = md5($userinfo->password_salt . $userinfo->password_clear);
			} else {
				$hash = md5($userinfo->password_clear);
			}

		} else {
			if ($userinfo->password_salt) {
				$hash = hash('sha256', $userinfo->password_salt . $userinfo->password_clear);
			} else {
				$hash = hash('sha256', $userinfo->password_clear);
			}

		}
		return $hash;
	}
}
