<?php

namespace Shopeca\XML\Feed\Zbozi;

use Nette\SmartObject;

/**
 * Class ExtraMessage
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Zbozi
 *
 * @property string $type
 */
class ExtraMessage
{

	use SmartObject;

	CONST EXTENDED_WARRANTY = 'extended_warranty';
	CONST FREE_ACCESSORIES = 'free_accessories';
	CONST FREE_CASE = 'free_case';
	CONST FREE_DELIVERY = 'free_delivery';
	CONST FREE_GIFT = 'free_gift';
	CONST FREE_INSTALLATION = 'free_installation';
	CONST FREE_STORE_PICKUP = 'free_store_pickup';
	CONST VOUCHER = 'voucher';

	static $types = [
		self::EXTENDED_WARRANTY,
		self::FREE_ACCESSORIES,
		self::FREE_CASE,
		self::FREE_DELIVERY,
		self::FREE_GIFT,
		self::FREE_INSTALLATION,
		self::FREE_STORE_PICKUP,
		self::VOUCHER,
	];

	/** @var string */
	protected $type;

	/**
	 * ExtraMessage constructor.
	 * @param $type
	 */
	public function __construct($type)
	{
		if (!in_array($type, self::$types)) {
			throw new \InvalidArgumentException("Extra message with type $type doesn\t exist");
		}
		$this->type = (string)$type;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

}
