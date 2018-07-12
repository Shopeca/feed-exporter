<?php
namespace Shopeca\XML\Feed\Glami;

use Shopeca\XML\Generators\BaseItem;

/**
 * Class Item
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @see https://www.glami.cz/info/feed/ Documentation
 */
class Item extends BaseItem {

	/** @var string @required */
	protected $itemId;

	/** @var string @required */
	protected $itemGroupId;

	/** @var string @required */
	protected $productName;

	/** @var string @required */
	protected $description;

	/**  @var string @required */
	protected $url;

	/** @var string @required */
	protected $imgUrl;

	/** @var float @required */
	protected $priceVat;

	/** @var string @required */
	protected $manufacturer;

	/** @var string @required */
	protected $categoryText;

	/** @var string @required */
	protected $categoryId;

	/** @var int @required */
	protected $deliveryDate;

	/**  @var string */
	protected $urlSize;

	/**  @var array */
	protected $imgUrlAlternative = [];

	/** @var string|null */
	protected $ean;

	/** @var string|null */
	protected $glamiCpc;

	/** @var string|null */
	protected $promotionId;

	/** @var Parameter[] */
	protected $parameters = [];

	/** @var Delivery[] */
	protected $deliveries = [];

	/**
	 * @return string
	 */
	public function getItemId () {
		return $this->itemId;
	}

	/**
	 * @param string $itemId
	 * @return Item
	 */
	public function setItemId ($itemId) {
		$this->itemId = $itemId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getItemGroupId () {
		return $this->itemGroupId;
	}

	/**
	 * @param string $itemGroupId
	 * @return Item
	 */
	public function setItemGroupId ($itemGroupId) {
		$this->itemGroupId = $itemGroupId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getProductName () {
		return $this->productName;
	}

	/**
	 * @param string $productName
	 * @return Item
	 */
	public function setProductName ($productName) {
		$this->productName = $productName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription () {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return Item
	 */
	public function setDescription ($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrl () {
		return $this->url;
	}

	/**
	 * @param string $url
	 * @return Item
	 */
	public function setUrl ($url) {
		$this->url = $url;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getImgUrl () {
		return $this->imgUrl;
	}

	/**
	 * @param string $imgUrl
	 * @return Item
	 */
	public function setImgUrl ($imgUrl) {
		$this->imgUrl = $imgUrl;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPriceVat () {
		return $this->priceVat;
	}

	/**
	 * @param float $priceVat
	 * @return Item
	 */
	public function setPriceVat ($priceVat) {
		$this->priceVat = $priceVat;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getManufacturer () {
		return $this->manufacturer;
	}

	/**
	 * @param string $manufacturer
	 * @return Item
	 */
	public function setManufacturer ($manufacturer) {
		$this->manufacturer = $manufacturer;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCategoryText () {
		return $this->categoryText;
	}

	/**
	 * @param string $categoryText
	 * @return Item
	 */
	public function setCategoryText ($categoryText) {
		$this->categoryText = $categoryText;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCategoryId () {
		return $this->categoryId;
	}

	/**
	 * @param string $categoryId
	 * @return Item
	 */
	public function setCategoryId ($categoryId) {
		$this->categoryId = $categoryId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDeliveryDate () {
		return $this->deliveryDate;
	}

	/**
	 * @param int $deliveryDate
	 * @return Item
	 */
	public function setDeliveryDate ($deliveryDate) {
		$this->deliveryDate = $deliveryDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrlSize () {
		return $this->urlSize;
	}

	/**
	 * @param string $urlSize
	 * @return Item
	 */
	public function setUrlSize ($urlSize) {
		$this->urlSize = $urlSize;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getImgUrlAlternative () {
		return $this->imgUrlAlternative;
	}

	/**
	 * @param string
	 * @return Item
	 */
	public function addAlternativeImage ($url) {
		$this->imgUrlAlternative[] = $url;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEan () {
		return $this->ean;
	}

	/**
	 * @param null|string $ean
	 * @return Item
	 */
	public function setEan ($ean) {
		$this->ean = $ean;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getGlamiCpc () {
		return $this->glamiCpc;
	}

	/**
	 * @param null|string $glamiCpc
	 * @return Item
	 */
	public function setGlamiCpc ($glamiCpc) {
		$this->glamiCpc = $glamiCpc;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPromotionId () {
		return $this->promotionId;
	}

	/**
	 * @param null|string $promotionId
	 * @return Item
	 */
	public function setPromotionId ($promotionId) {
		$this->promotionId = $promotionId;
		return $this;
	}

	/**
	 * @return Parameter[]
	 */
	public function getParameters () {
		return $this->parameters;
	}

	/**
	 * @param $name
	 * @param $val
	 * @return Item
	 */
	public function addParameters ($name, $val) {
		$this->parameters[] = new Parameter($name, $val);
		return $this;
	}

	/**
	 * @return Delivery[]
	 */
	public function getDeliveries () {
		return $this->deliveries;
	}

	/**
	 * @param $name
	 * @param $price
	 * @param $priceCod
	 * @return Item
	 */
	public function addDelivery ($name, $price, $priceCod) {
		$this->deliveries[] = new Delivery($name, $price, $priceCod);
		return $this;
	}

}
