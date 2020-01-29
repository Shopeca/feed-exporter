<?php

namespace Shopeca\XML\Feed\Zbozi;

use Nette\SmartObject;

/**
 * Class ShopDepot
 * @package Shopeca\XML\Feed\Zbozi
 *
 * @property string $id
 */
class ShopDepot
{

	use SmartObject;

	private $id;

	public function __construct($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

}
