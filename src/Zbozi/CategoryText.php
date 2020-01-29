<?php

namespace Shopeca\XML\Feed\Zbozi;

use Nette\SmartObject;

/**
 * Class ExtraMessage
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Zbozi
 *
 * @property string $text
 */
class CategoryText
{

	use SmartObject;

	/** @var string */
	protected $text;

	/**
	 * ExtraMessage constructor.
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
