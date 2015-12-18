<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license\tests\unit;

use hidev\license\Plugin;

/**
 * Plugin test class.
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Plugin
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Plugin();
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertArrayHasKey('goals', $this->object->getItems());
    }
}
