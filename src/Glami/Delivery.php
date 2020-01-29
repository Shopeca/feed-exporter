<?php
namespace Shopeca\XML\Feed\Glami;

use Nette\SmartObject;

/**
 * @property string $name
 * @property float $price
 * @property float $priceCod
 */
class Delivery
{

	use SmartObject;

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
	    $this->price = (float) $price;
	    $this->priceCod = (float) $priceCod;
    }

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return float
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @return float
	 */
	public function getPriceCod()
	{
		return $this->priceCod;
	}

}
