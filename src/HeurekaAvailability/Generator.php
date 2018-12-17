<?php
namespace Shopeca\XML\Feed\HeurekaAvailability;

use Shopeca\XML\Feed\FeedGenerator;

/**
 * @see https://sluzby.heureka.cz/napoveda/dostupnostni-feed/ Documentation
 */
class Generator extends FeedGenerator {

	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

}
