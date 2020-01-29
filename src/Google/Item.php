<?php

namespace Shopeca\XML\Feed\Google;

use Shopeca\XML\Generators\BaseItem;

/**
 * Class Item
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Google
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $googleProductCategory
 * @property ProductType[] $productTypes
 * @property string $link
 * @property string $mobileLink
 * @property Image[] $images
 * @property string $condition
 * @property string $availability
 * @property \DateTime $availabilityDate
 * @property string $price
 * @property string $salePrice
 * @property string $salePriceEffectiveDate
 * @property int $gtin
 * @property string $mpn
 * @property string $brand
 * @property bool $identifierExists
 */
class Item extends BaseItem
{

	CONST CONDITION_NEW = 'new';
	CONST CONDITION_REFURBISHED = 'refurbished';
	CONST CONDITION_USED = 'used';

	CONST AVAILABILITY_PREORDER = 'preorder';
	CONST AVAILABILITY_IN_STOCK = 'in stock';
	CONST AVAILABILITY_OUT_OF_STOCK = 'out of stock';

	static $conditions = [
		self::CONDITION_NEW,
		self::CONDITION_REFURBISHED,
		self::CONDITION_USED,
	];

	static $availabilities = [
		self::AVAILABILITY_PREORDER,
		self::AVAILABILITY_IN_STOCK,
		self::AVAILABILITY_OUT_OF_STOCK,
	];

	/** @var string @required */
	protected $id;

	/** @var string @required */
	protected $title;

	/** @var string @required */
	protected $description;

	/** @var string|null */
	protected $googleProductCategory;

	/** @var ProductType[] */
	protected $productTypes = [];

	/**  @var string @required */
	protected $link;

	/**  @var string|null */
	protected $mobileLink;

	/** @var Image[] */
	protected $images = [];

	/** @var string|null */
	protected $condition = self::CONDITION_NEW;

	/** @var string @required */
	protected $availability = self::AVAILABILITY_IN_STOCK;

	/** @var \DateTime|null */
	protected $availabilityDate;

	/** @var string @required */
	protected $price;

	/** @var string */
	protected $salePrice;

	/** @var string */
	protected $salePriceEffectiveDate;

	/** @var int */
	protected $gtin;

	/** @var string */
	protected $mpn;

	/** @var string */
	protected $brand;

	/** @var bool */
	protected $identifierExists;

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 * @return self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return self
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return self
	 */
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getGoogleProductCategory()
	{
		return $this->googleProductCategory;
	}

	/**
	 * @param null|string $googleProductCategory
	 * @return self
	 */
	public function setGoogleProductCategory($googleProductCategory)
	{
		$this->googleProductCategory = $googleProductCategory;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getLink()
	{
		return $this->link;
	}

	/**
	 * @param string $link
	 * @return self
	 */
	public function setLink($link)
	{
		$this->link = $link;

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMobileLink()
	{
		return $this->mobileLink;
	}

	/**
	 * @param null|string $mobileLink
	 * @return self
	 */
	public function setMobileLink($mobileLink)
	{
		$this->mobileLink = $mobileLink;

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

	/**
	 * @return string
	 */
	public function getSalePrice()
	{
		return $this->salePrice;
	}

	/**
	 * @param string $salePrice
	 * @return self
	 */
	public function setSalePrice($salePrice)
	{
		$this->salePrice = $salePrice;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getSalePriceEffectiveDate()
	{
		return $this->salePriceEffectiveDate;
	}

	/**
	 * @param string $salePriceEffectiveDate
	 * @return self
	 */
	public function setSalePriceEffectiveDate($salePriceEffectiveDate)
	{
		$this->salePriceEffectiveDate = $salePriceEffectiveDate;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getGtin()
	{
		return $this->gtin;
	}

	/**
	 * @param int $gtin
	 * @return self
	 */
	public function setGtin($gtin)
	{
		$this->gtin = $gtin;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getMpn()
	{
		return $this->mpn;
	}

	/**
	 * @param string $mpn
	 * @return self
	 */
	public function setMpn($mpn)
	{
		$this->mpn = $mpn;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBrand()
	{
		return $this->brand;
	}

	/**
	 * @param string $brand
	 * @return self
	 */
	public function setBrand($brand)
	{
		$this->brand = $brand;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isIdentifierExists()
	{
		return $this->identifierExists !== null ? $this->identifierExists : $this->checkIdentifierExistence();
	}

	public function checkIdentifierExistence()
	{
		$identifierCount = 0;
		if ($this->brand != null) {
			$identifierCount++;
		}
		if ($this->gtin != null) {
			$identifierCount++;
		}
		if ($this->mpn != null) {
			$identifierCount++;
		}
		return $identifierCount > 1;
	}

	/**
	 * @param boolean $identifierExists
	 * @return self
	 */
	public function setIdentifierExists($identifierExists)
	{
		$this->identifierExists = $identifierExists;

		return $this;
	}

	/**
	 * @return \DateTime|null
	 */
	public function getAvailabilityDate()
	{
		return $this->availabilityDate instanceof \DateTime ? $this->availabilityDate->format('c') : $this->availabilityDate;
	}

	/**
	 * @param \DateTime|null $availabilityDate
	 * @return self
	 */
	public function setAvailabilityDate(\DateTime $availabilityDate = null)
	{
		$this->availabilityDate = $availabilityDate;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getAvailability()
	{
		return $this->availability;
	}

	/**
	 * @param float $availability
	 * @return self
	 */
	public function setAvailability($availability)
	{
		if (!in_array($availability, self::$availabilities)) {
			throw new \InvalidArgumentException("Availability with id $availability doesn\t exist");
		}
		$this->availability = $availability;

		return $this;
	}

	/**
	 * @param $url
	 * @return $this
	 */
	public function addImage($url)
	{
		$this->images[] = new Image($url);

		return $this;
	}

	public function addProductType($text)
	{
		$this->productTypes[] = new ProductType($text);

		return $this;
	}

	/**
	 * @return ProductType[]
	 */
	public function getProductTypes()
	{
		return $this->productTypes;
	}

	/**
	 * @return null|string
	 */
	public function getCondition()
	{
		return $this->condition;
	}

	/**
	 * @param null|string $condition
	 * @return self
	 */
	public function setCondition($condition)
	{
		if (!in_array($condition, self::$conditions)) {
			throw new \InvalidArgumentException("Condition with id $condition doesn\t exist");
		}
		$this->condition = $condition;

		return $this;
	}

	/**
	 * @return Image[]
	 */
	public function getImages()
	{
		return $this->images;
	}

}
