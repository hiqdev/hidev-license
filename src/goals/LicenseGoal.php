<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license\goals;

use hidev\helpers\Helper;

/**
 * Goal for LICENSE generation.
 */
class LicenseGoal extends \hidev\goals\TemplateGoal
{
    /**
     * The license.
     *
     * @var string
     */
    protected $_license;

    public function setLicense($value)
    {
        $this->_license = $value;
    }

    public function getLicense()
    {
        if ($this->_license === null) {
            $this->_license = $this->package->license;
        }

        return $this->_license;
    }

    public function getTemplate()
    {
        return 'licenses/' . Helper::id2camel($this->license) . '.twig';
    }

    public function getUrl()
    {
        return $this->license === 'proprietary'
            ? 'https://en.wikipedia.org/wiki/Proprietary_software'
            : 'http://choosealicense.com/licenses/' . Helper::camel2id($this->license);
    }
}
