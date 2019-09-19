<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace AnSyS\TestBundle\Tests;

use AnSyS\TestBundle\TestBundle;
use PHPUnit\Framework\TestCase;

class TestBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new TestBundle();

        $this->assertInstanceOf('AnSyS\TestBundle\TestBundle', $bundle);
    }
}
