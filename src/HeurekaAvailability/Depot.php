<?php

namespace Shopeca\XML\Feed\HeurekaAvailability;

use Nette\Object;

class Depot extends Object
{

	/** @var integer */
	protected $id;

	/** @var integer */
	protected $stockQuantity;

	/** @var \DateTime|int */
	protected $pickupTime;

	/** @var \DateTime|int */
	protected $deadlineTime;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return Depot
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getStockQuantity()
	{
		return $this->stockQuantity;
	}

	/**
	 * @param int $stockQuantity
	 * @return Depot
	 */
	public function setStockQuantity($stockQuantity)
	{
		$this->stockQuantity = $stockQuantity;
		return $this;
	}

	/**
	 * @return int|string
	 */
	public function getPickupTime()
	{
		return $this->pickupTime instanceof \DateTime ? $this->pickupTime->format('Y-m-d H:i') : $this->pickupTime;
	}

	/**
	 * @param string $pickupTime
	 * @return Depot
	 */
	public function setPickupTime($pickupTime)
	{
		$this->pickupTime = $pickupTime;
		return $this;
	}

	/**
	 * @return int|string
	 */
	public function getDeadlineTime()
	{
		return $this->deadlineTime instanceof \DateTime ? $this->deadlineTime->format('Y-m-d H:i') : $this->deadlineTime;
	}

	/**
	 * @param string $deadlineTime
	 * @return Depot
	 */
	public function setDeadlineTime($deadlineTime)
	{
		$this->deadlineTime = $deadlineTime;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function hasValidPickupTime()
	{
		$deadline = $this->deadlineTime->modify('+7 days');
		return $this->pickupTime <= $deadline;
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
