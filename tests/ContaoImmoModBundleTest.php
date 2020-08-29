<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Nextbrand\ContaoImmoModBundle\Tests;

use Nextbrand\ContaoImmoModBundle\ContaoImmoModBundle;
use PHPUnit\Framework\TestCase;

class ContaoImmoModBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoImmoModBundle();

        $this->assertInstanceOf('Nextbrand\ContaoImmoModBundle\ContaoImmoModBundle', $bundle);
    }
}
