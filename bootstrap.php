<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    tests
 * @package     selenium
 * @subpackage  runner
 * @author      Magento Core Team <core@magentocommerce.com>
 * @copyright   Copyright (c) 2013 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
if (version_compare(PHPUnit_Runner_Version::id(), '3.6.0', '<')) {
    throw new RuntimeException('PHPUnit 3.6.0 (or later) is required.');
}
define('SELENIUM_TESTS_BASEDIR', realpath(dirname(__FILE__)));
define('SELENIUM_TESTS_SCREENSHOTDIR',
        realpath(SELENIUM_TESTS_BASEDIR . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'screenshots'));
define('SELENIUM_TESTS_LOGS',
        realpath(SELENIUM_TESTS_BASEDIR . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'logs'));

date_default_timezone_set('America/Los_Angeles');

set_include_path(implode(PATH_SEPARATOR, array(
            realpath(SELENIUM_TESTS_BASEDIR . DIRECTORY_SEPARATOR . 'framework'),
            realpath(SELENIUM_TESTS_BASEDIR . DIRECTORY_SEPARATOR . 'testsuite'), //To allow load tests helper files
            get_include_path(),
        )));

require_once 'Mage/Selenium/Autoloader.php';
Mage_Selenium_Autoloader::register();

require_once 'functions.php';

Mage_Selenium_TestConfiguration::getInstance();

//Mage_Listener_EventListener::autoAttach(SELENIUM_TESTS_BASEDIR
//                                            . implode(DIRECTORY_SEPARATOR, array('', 'framework', 'Mage', 'Listener', 'Observers', '*.php')));
//Mage_Testlink_Listener::registerObserver('Mage_Testlink_Annotation');
