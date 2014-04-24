<?php
/**
 * \TechDivision\FastCgiModule\FastCgiModuleTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision_FastCgiModule
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_FastCgiModule
 */

namespace TechDivision\FastCgiModule;

/**
 * Class FastCgiModuleTest
 *
 * @category  Library
 * @package   TechDivision_FastCgiModule
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_FastCgiModule
 */
class FastCgiModuleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The module to test.
     * 
     * @var \TechDivision\FastCgiModule\FastCgiModule
     */
    public $fastCgiModule;

    /**
     * Initializes module object to test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->fastCgiModule = new FastCgiModule();
    }

    /**
     * Test add header functionality on response object.
     * 
     * @return void
     */
    public function testModuleName()
    {
        $this->assertSame(FastCgiModule::MODULE_NAME, $this->fastCgiModule->getModuleName());
    }
}
