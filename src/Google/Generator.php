<?php
namespace Shopeca\XML\Feed\Google;

use Shopeca\XML\Feed\FeedGenerator;

/**
 * Class Generator
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Google
 * @see https://support.google.com/merchants/answer/188494 Documentation
 */
class Generator extends FeedGenerator {

	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

    /**
     * @param \Mk\Feed\Generators\Google\Description $description
     * @throws \Exception
     * @throws \Throwable
     */
    public function addDescription(Description $description)
    {
        $this->addXmlItem($description, 'description');
    }

}
