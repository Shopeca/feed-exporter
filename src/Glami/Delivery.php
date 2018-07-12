<?php
namespace Shopeca\XML\Feed\Glami;

use Nette\Object;

class Delivery extends Object {

	/** @var string */
	private $name;

	/** @var float */
	private $price;

	/** @var float */
	private $priceCod;

	/**
	 * Delivery constructor.
	 * @param $name
	 * @param $price
	 * @param $priceCod
	 */
    public function __construct($name, $price, $priceCod)
    {
	    $this->name = (string) $name;
	    $this->priceCod = (float) $price;
	    $this->priceCod = (float) $priceCod;
    }

	/**
	 * @return string
	 */
	public function getName () {
		return $this->name;
	}

	/**
	 * @return float
	 */
	public function getPrice () {
		return $this->price;
	}

	/**
	 * @return float
	 */
	public function getPriceCod () {
		return $this->priceCod;
	}

}
