<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license\console;

use hidev\helpers\FileHelper;

/**
 * License generation.
 */
class LicenseController extends \hidev\base\Controller
{
    public $path;

    public function actionIndex()
    {
        FileHelper::write($this->getPath(), $this->getContent());
    }

    public function getPath()
    {
        return $this->path ?: $this->id;
    }

    public function getContent()
    {
        return $this->getComponent()->render($this->getComponent()->getTemplate());
    }

    public function getComponent()
    {
        return $this->getApp()->get('license');
    }
}
