<?php

namespace Shopeca\XML\Feed;

use Shopeca\XML\Generators\BaseGenerator;

class FeedGenerator extends BaseGenerator {

	/**
	 * @param $name
	 * @return string
	 */
	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

	public function generate () {
		// Here might go some processing before the file is created
	}

}