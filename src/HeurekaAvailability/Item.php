<?php

namespace Shopeca\XML\Feed\HeurekaAvailability;

use Shopeca\XML\Generators\BaseItem;

/**
 * Class Item
 * @see     https://sluzby.heureka.cz/napoveda/dostupnostni-feed/ Documentation
 */
class Item extends BaseItem
{

	/** @var string @required */
	protected $itemId;

	/** @var float */
	protected $stockQuantity;

	/** @var \DateTime|int */
	protected $deliveryTime;

	/** @var \DateTime|int */
	protected $deadlineTime;

	/** @var Depot[] */
	protected $depot = [];

	/**
	 * @return string
	 */
	public function getItemId()
	{
		return $this->itemId;
	}

	/**
	 * @param string $itemId
	 * @return Item
	 */
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getStockQuantity()
	{
		return $this->stockQuantity;
	}

	/**
	 * @param float $stockQuantity
	 * @return Item
	 */
	public function setStockQuantity($stockQuantity)
	{
		$this->stockQuantity = $stockQuantity;
		return $this;
	}

	/**
	 * @return int|string
	 */
	public function getDeliveryTime()
	{
		return $this->deliveryTime instanceof \DateTime ? $this->deliveryTime->format('Y-m-d H:i') : $this->deliveryTime;
	}

	/**
	 * @param string $deliveryTime
	 * @return Item
	 */
	public function setDeliveryTime($deliveryTime)
	{
		$this->deliveryTime = $deliveryTime;
		return $this;
	}

	/**
	 * @return Depot[]
	 */
	public function getDepots()
	{
		return $this->depot;
	}

	/**
	 * @param Depot $depot
	 * @return Item
	 */
	public function setDepot(Depot $depot)
	{
		$this->depot[] = $depot;
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
	 * @return Item
	 */
	public function setDeadlineTime($deadlineTime)
	{
		$this->deadlineTime = $deadlineTime;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function hasValidDeliveryTime()
	{
		if (!$this->deadlineTime instanceof \DateTime) {
			return false;
		}

		$deadline = $this->deadlineTime->modify('+7 days');
		return $this->deliveryTime <= $deadline;
	}


}
