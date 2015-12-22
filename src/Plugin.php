<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license;

/**
 * Plugin class.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Plugin extends \hiqdev\pluginmanager\Plugin
{
    /**
     * The items.
     * @var array
     */
    protected $_items = [
        'goals' => [
            'license'           => 'hidev\license\goals\LicenseGoal',
            'LICENSE'           => 'hidev\license\goals\LicenseGoal',
            'LICENSE.md'        => 'hidev\license\goals\LicenseGoal',
            'LICENSE.txt'       => 'hidev\license\goals\LicenseGoal',
            'LICENSE.markdown'  => 'hidev\license\goals\LicenseGoal',
        ],
        'views' => [
            '@hidev/license/views',
        ],
    ];
}
