<?php

namespace Shopeca\XML\Feed\HledejCeny;

use Shopeca\XML\Feed\FeedGenerator;

/**
 * Class HledejCenyGenerator
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