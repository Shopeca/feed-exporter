<?php

namespace Shopeca\XML\Feed\Zbozi;

use Shopeca\XML\Generators\BaseParameter;

/**
 * Class Parameter
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Zbozi
 * @see http://napoveda.seznam.cz/cz/zbozi/specifikace-xml-pro-obchody/specifikace-xml-feedu/#PARAM
 */
class Parameter extends BaseParameter {

    protected $unit;

    /**
     * Parameter constructor.
     * @param $name
     * @param $value
     * @param $unit
     */
    public function __construct($name, $value, $unit = null)
    {
		parent::__construct($name, $value);
        $this->unit = isset($unit) ? (string) $unit : null;
    }

    /**
     * @return null
     */
    public function getUnit()
    {
        return $this->unit;
    }

}
