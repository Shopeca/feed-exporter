<?php

namespace Shopeca\XML\Feed\Heureka;

use Nette\SmartObject;

/**
 * Class Image
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 *
 * @property string $url
 */
class Image
{

	use SmartObject;

	/** @var string */
	private $url;

	/**
	 * Image constructor.
	 * @param string $url
	 */
	public function __construct($url)
	{
		$this->url = (string)$url;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

}
