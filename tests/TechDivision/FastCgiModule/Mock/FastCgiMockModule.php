<?php

/**
 * \TechDivision\FastCgiModule\Mock\FastCgiMockModule
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
 * @author    Bernhard Wick <b.wick@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_FastCgiModule
 */

namespace TechDivision\FastCgiModule\Mock;

use TechDivision\FastCgiModule\FastCgiModule;
use TechDivision\Server\Interfaces\RequestContextInterface;

/**
 * This module allows us to let requests be handled by Fast-CGI client
 * that has been configured in the web servers configuration.
 *
 * @category  Library
 * @package   TechDivision_FastCgiModule
 * @author    Tim Wagner <tw@techdivision.com>
 * @author    Bernhard Wick <b.wick@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_FastCgiModule
 */
class FastCgiMockModule extends FastCgiModule
{

    protected $mockFastCgiClient;

    public function injectFastCgiConnection($mockFastCgiClient)
    {
        $this->mockFastCgiClient = $mockFastCgiClient;
    }

    /**
     * Creates and returns a new FastCGI connection instance.
     *
     * @param \TechDivision\Server\Interfaces\RequestContextInterface $requestContext A requests context instance
     *
     * @return \Crunch\FastCGI\Connection The FastCGI connection instance
     */
    protected function getFastCgiConnection(RequestContextInterface $requestContext)
    {
        return $this->mockFastCgiClient;
    }
}
