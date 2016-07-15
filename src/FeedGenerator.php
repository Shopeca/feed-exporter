<?php

namespace Shopeca\XML\Feed;

use Shopeca\XML\Generators\BaseGenerator;

class FeedGenerator extends BaseGenerator {

	/**
	 * @param $name
	 * @return string
	 */
	protected function getTemplate ($name)
	{
		// Should be defined in children
	}

	public function generate () {
		// Here might go some processing before the file is created
	}

}