<?php
namespace Shopeca\XML\Feed\Heureka;

use Shopeca\XML\Feed\FeedGenerator;

/**
 * Class HeurekaGenerator
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators
 * @see http://sluzby.heureka.cz/napoveda/xml-feed/ Documentation
 */
class Generator extends FeedGenerator {

	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

}
