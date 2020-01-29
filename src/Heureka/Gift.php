<?php

namespace Shopeca\XML\Feed\Heureka;

use Nette\SmartObject;

/**
 * Class Gift
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 *
 * @property string $name
 */
class Gift
{

	use SmartObject;

	/** @var string */
	protected $name;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Gift constructor.
	 * @param $name
	 */
	public function __construct($name)
	{

		$this->name = (string)$name;
	}

}
