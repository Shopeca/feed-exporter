<?php

namespace Shopeca\XML\Feed\Zbozi;

use Nette\SmartObject;

/**
 * Class Image
 * @package Shopeca\XML\Feed\Zbozi
 *
 * @property string $url
 */
class Image
{

	use SmartObject;

	private $url;

	/**
	 * Image constructor.
	 * @param $url
	 */
	public function __construct($url)
	{
		$this->url = $url;
	}

	/**
	 * @return mixed
	 */
	public function getUrl()
	{
		return $this->url;
	}

}
