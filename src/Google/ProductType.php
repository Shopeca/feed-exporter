<?php

namespace Shopeca\XML\Feed\Google;

use Nette\SmartObject;

/**
 * Class ProductType
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Google
 *
 * @property string $text
 */
class ProductType
{

	use SmartObject;

	/** @var string */
	protected $text;

	/**
	 * ProductType constructor.
	 * @param $text
	 */
	public function __construct($text)
	{

		$this->text = (string)$text;
	}

	/**
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

}
