<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use Shopeca\XML\Feed\Google\Generator;
use Shopeca\XML\Feed\Google\Item;
use Shopeca\XML\Storage;

class GoogleExportTest extends TestCase
{

	public function testFeed(): void
	{

		$fileName = 'google-export.xml';
		$item = new Item();

		$item
			->setId(1)
			->setTitle('Autíčko')
			->setDescription('<p>Jezdí jako ďas</p>')
			->setGoogleProductCategory('Hračka')
			->addProductType('Hračka')
			->setLink('http://eshop.cz/auticko')
			->setMobileLink('http://eshop.cz/auticko?mobile=true')
			->addImage('http://eshop.cz/auticko.jpg')
			->addImage('http://eshop.cz/galerie/auticko.jpg')
			->setCondition('new')
			->setAvailability(0)
			->setAvailabilityDate(new \DateTime('2020-06-01 19:00:00'))
			->setPrice(250)
			->setSalePrice(200)
			->setSalePriceEffectiveDate('2020-06-01')
			->setGtin(120)
			->setMpn('111000')
			->setBrand('Matel')
			->setIdentifierExists(false);

		$generator = new Generator(new Storage(__DIR__.'/../temp'));

		$this->assertSame('Matel', $item->brand);

		$generator->addItem($item);
		$generator->save($fileName);

		$filePath = __DIR__.'/../temp/'.$fileName;

		$this->assertFileExists($filePath);
		$this->assertXmlFileEqualsXmlFile(__DIR__.'/xml/'.$fileName, $filePath);
	}

	public function testIncompleteItem(): void
	{
		$item = new Item();

		$item
			->setId(1)
			->setTitle('Autíčko');

		$generator = new Generator(new Storage(__DIR__.'/../temp'));

		$this->expectExceptionMessage('Item is not complete');
		$generator->addItem($item);
	}

}
