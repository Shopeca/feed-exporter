<?php
namespace Shopeca\XML\Feed\Glami;

use Shopeca\XML\Feed\FeedGenerator;

class Generator extends FeedGenerator
{

	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

}
