<?php
/**
 * HiDev plugin for license generation.
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license\components;

use hidev\helpers\Helper;

/**
 * License generation.
 */
class License extends \hidev\base\Component
{
    /**
     * The license.
     * @var string
     */
    protected $_license;

    /**
     * Set license.
     * @param string $value
     */
    public function setLicense($value)
    {
        $this->_license = $value;
    }

    /**
     * Get license.
     * @return string
     */
    public function getLicense()
    {
        if ($this->_license === null) {
            $this->_license = $this->take('package')->getLicense();
        }

        return $this->_license;
    }

    /**
     * Get license template.
     * @return string
     */
    public function getTemplate()
    {
        return 'licenses/' . Helper::id2camel($this->getLicense()) . '.twig';
    }

    /**
     * Returns URL to license description.
     * @return string
     */
    public function getUrl()
    {
        return $this->getLicense() === 'proprietary'
            ? 'https://en.wikipedia.org/wiki/Proprietary_software'
            : 'http://choosealicense.com/licenses/' . Helper::camel2id($this->getLicense());
    }
}
