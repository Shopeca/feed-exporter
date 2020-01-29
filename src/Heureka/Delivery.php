<?php

namespace Shopeca\XML\Feed\Heureka;

use Nette\SmartObject;

/**
 * Class Delivery
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 *
 * @property string $id
 * @property float $price
 * @property float $priceCod
 */
class Delivery
{

	use SmartObject;

	CONST CESKA_POSTA = 'CESKA_POSTA';
	CONST CESKA_POSTA_NA_POSTU = 'CESKA_POSTA_NA_POSTU';
	CONST CSAD_LOGISTIK_OSTRAVA = 'CSAD_LOGISTIK_OSTRAVA';
	CONST DPD = 'DPD';
	CONST DHL = 'DHL';
	CONST DSV = 'DSV';
	CONST EMS = 'EMS';
	CONST FOFR = 'FOFR';
	CONST GEBRUDER_WEISS = 'GEBRUDER_WEISS';
	CONST GEIS = 'GEIS';
	CONST GENERAL_PARCEL = 'GENERAL_PARCEL';
	CONST GLS = 'GLS';
	CONST HDS = 'HDS';
	CONST HEUREKAPOINT = 'HEUREKAPOINT';
	CONST INTIME = 'INTIME';
	CONST PPL = 'PPL';
	CONST RADIALKA = 'RADIALKA';
	CONST SEEGMULLER = 'SEEGMULLER';
	CONST TNT = 'TNT';
	CONST TOPTRANS = 'TOPTRANS';
	CONST UPS = 'UPS';
	CONST VLASTNI_PREPRAVA = 'VLASTNI_PREPRAVA';
	CONST ZASILKOVNA = 'ZASILKOVNA';

	static $ids = [
		self::CESKA_POSTA,
		self::CESKA_POSTA_NA_POSTU,
		self::CSAD_LOGISTIK_OSTRAVA,
		self::DPD,
		self::DHL,
		self::DSV,
		self::EMS,
		self::FOFR,
		self::GEBRUDER_WEISS,
		self::GEIS,
		self::GENERAL_PARCEL,
		self::GLS,
		self::HDS,
		self::HEUREKAPOINT,
		self::INTIME,
		self::PPL,
		self::RADIALKA,
		self::SEEGMULLER,
		self::TNT,
		self::TOPTRANS,
		self::UPS,
		self::VLASTNI_PREPRAVA,
		self::ZASILKOVNA,
	];

	/** @var string */
	private $id;
	/** @var float */
	private $price;
	/** @var float|null */
	private $priceCod;

	/**
	 * Delivery constructor.
	 * @param $id
	 * @param $price
	 * @param null $priceCod
	 */
	public function __construct($id, $price, $priceCod = null)
	{
		if (!in_array($id, self::$ids)) {
			throw new \InvalidArgumentException("Delivery with id $id doesn\t exist");
		}
		$this->id = (string)$id;
		$this->price = (float)$price;
		$this->priceCod = isset($priceCod) ? (float)$priceCod : null;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return float
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @return float|null
	 */
	public function getPriceCod()
	{
		return $this->priceCod;
	}

}
