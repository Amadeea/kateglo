<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Controller
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: Action.php 22792 2010-08-05 18:30:27Z matthew $
 */

/**
 * @see Zend_Controller_Front
 */
require_once 'Zend/Controller/Action.php';

/**
 * @category   Zend
 * @package    Zend_Controller
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
abstract class Zend_Controller_Action_Stubbles extends Zend_Controller_Action {
	
	/**
	 * Class constructor
	 *
	 * The request and response objects should be registered with the
	 * controller, as should be any additional optional arguments; these will be
	 * available via {@link getRequest()}, {@link getResponse()}, and
	 * {@link getInvokeArgs()}, respectively.
	 *
	 * When overriding the constructor, please consider this usage as a best
	 * practice and ensure that each is registered appropriately; the easiest
	 * way to do so is to simply call parent::__construct($request, $response,
	 * $invokeArgs).
	 *
	 * After the request, response, and invokeArgs are set, the
	 * {@link $_helper helper broker} is initialized.
	 *
	 * Finally, {@link init()} is called as the final action of
	 * instantiation, and may be safely overridden to perform initialization
	 * tasks; as a general rule, override {@link init()} instead of the
	 * constructor to customize an action controller's instantiation.
	 *
	 * @param Zend_Controller_Request_Abstract $request
	 * @param Zend_Controller_Response_Abstract $response
	 * @param array $invokeArgs Any additional invocation arguments
	 * @return void
	 */
	public function __construct(Zend_Controller_Request_Abstract $request = null, Zend_Controller_Response_Abstract $response = null, array $invokeArgs = array()) {
	}
	
	/**
	 * Set invocation arguments
	 *
	 * @param array $args
	 * @return Zend_Controller_Action
	 */
	public function setInvokeArgs(array $args = array()) {
		$this->_invokeArgs = $args;
		return $this;
	}
	
	/**
	 * Set invocation helper
	 *
	 * @param Zend_Controller_Action_HelperBroker $helper
	 * @return Zend_Controller_Action
	 */
	public function setHelper(Zend_Controller_Action_HelperBroker $helper) {
		$this->_helper = $helper;
		return $this;
	}

}

?>