<?php

namespace Shopeca\XML\Feed\Zbozi;
use Shopeca\XML\Feed\FeedGenerator;

/**
 * @see http://napoveda.seznam.cz/cz/zbozi/specifikace-xml-pro-obchody/specifikace-xml-feedu/ Documentation
 */
class Generator extends FeedGenerator {

	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

}
