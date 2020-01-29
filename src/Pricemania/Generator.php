<?php

namespace Shopeca\XML\Feed\Pricemania;

use Shopeca\XML\Feed\FeedGenerator;

/**
 * Class PricemaniaGenerator
 * @author Tom Hnatovsky <tom@hnatovsky.cz>
 * @package Mk\Feed\Generators
 * @see www.hledejceny.cz/napoveda/pro-internetove-obchody/ Documentation
 */
class Generator extends FeedGenerator
{

	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

}
