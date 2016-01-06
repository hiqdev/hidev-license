<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'license' => [
                'class' => 'hidev\license\goals\LicenseGoal',
            ],
            'LICENSE' => [
                'class' => 'hidev\license\goals\LicenseGoal',
            ],
            'LICENSE.md' => [
                'class' => 'hidev\license\goals\LicenseGoal',
            ],
            'LICENSE.txt' => [
                'class' => 'hidev\license\goals\LicenseGoal',
            ],
            'LICENSE.markdown' => [
                'class' => 'hidev\license\goals\LicenseGoal',
            ],
            'views' => [
                '@hidev/license/views',
            ],
        ],
    ],
];
