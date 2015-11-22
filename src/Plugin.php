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

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
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
