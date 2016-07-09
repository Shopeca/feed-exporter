<?php
namespace Shopeca\XML\Feed\Heureka;

use Nette\Object;

/**
 * Class Gift
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 */
class Gift extends Object {

    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gift constructor.
     * @param $name
     */
    public function __construct($name)
    {

        $this->name = (string)$name;
    }

}
