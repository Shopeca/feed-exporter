<?php

namespace Shopeca\XML\Feed\Google;

use Nette\SmartObject;

/**
 * @property string $country
 * @property string $region
 * @property string $service
 * @property string $price
 */
class Shipping
{

	use SmartObject;

	/** @var string */
	protected $country;

	/** @var string */
	protected $region;

	/** @var string @required */
	protected $service;

	/** @var string @required */
	protected $price;

	/**
	 * Shipping constructor.
	 * @param string $service
	 * @param string $price
	 */
	public function __construct($service, $price)
	{
		$this->service = (string)$service;
		$this->price = (string)$price;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 * @return self
	 */
	public function setCountry($country)
	{
		$this->country = $country;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRegion()
	{
		return $this->region;
	}

	/**
	 * @param string $region
	 * @return self
	 */
	public function setRegion($region)
	{
		$this->region = $region;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * @param string $service
	 * @return self
	 */
	public function setService($service)
	{
		$this->service = $service;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @param string $price
	 * @return self
	 */
	public function setPrice($price)
	{
		$this->price = $price;

		return $this;
	}

}
