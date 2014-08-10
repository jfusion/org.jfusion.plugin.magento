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

use JFusion\Plugin\Plugin_Front;

/**
 * JFusion Front Class for Magento 1.1
 * For detailed descriptions on these functions please check Plugin_Front
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage magento
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Front extends Plugin_Front
{
    /**
     * @return string
     */
    function getRegistrationURL() {
        return 'index.php/customer/account/create/';
    }

    /**
     * @return string
     */
    function getLostPasswordURL() {
        return 'index.php/customer/account/forgotpassword/';
    }

    /**
     * @return string
     */
    function getLostUsernameURL() {
        return 'index.php/customer/account/forgotpassword/'; // not available in Magento, map to lostpassword
	}
}
