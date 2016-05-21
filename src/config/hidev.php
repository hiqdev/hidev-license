<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'license' => [
                'class' => 'hidev\license\controllers\LicenseController',
            ],
            'LICENSE' => [
                'class' => 'hidev\license\controllers\LicenseController',
            ],
            'LICENSE.md' => [
                'class' => 'hidev\license\controllers\LicenseController',
            ],
            'LICENSE.txt' => [
                'class' => 'hidev\license\controllers\LicenseController',
            ],
            'LICENSE.markdown' => [
                'class' => 'hidev\license\controllers\LicenseController',
            ],
            'views' => [
                '@hidev/license/views',
            ],
        ],
    ],
];
