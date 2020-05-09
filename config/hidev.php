<?php
/**
 * HiDev plugin for license generation.
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' => [
        'LICENSE' => [
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
    'aliases' => [
        '@hidev/license' => dirname(__DIR__) . '/src',
    ],
];
