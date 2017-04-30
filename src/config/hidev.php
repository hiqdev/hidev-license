<?php
/**
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' => [
        'license' => [
            'class' => \hidev\license\console\LicenseController::class,
        ],
        'LICENSE' => [
            'class' => \hidev\license\console\LicenseController::class,
        ],
        'LICENSE.md' => [
            'class' => \hidev\license\console\LicenseController::class,
        ],
        'LICENSE.txt' => [
            'class' => \hidev\license\console\LicenseController::class,
        ],
        'LICENSE.markdown' => [
            'class' => \hidev\license\console\LicenseController::class,
        ],
    ],
    'components' => [
        'license' => [
            'class' => \hidev\license\components\License::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@hidev/license/views'],
                ],
            ],
        ],
    ],
];
