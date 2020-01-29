<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use Shopeca\XML\Feed\Pricemania\Delivery;
use Shopeca\XML\Feed\Pricemania\Generator;
use Shopeca\XML\Feed\Pricemania\Item;
use Shopeca\XML\Storage;

class PricemaniaExportTest extends TestCase
{

	public function testFeed(): void
	{

		$fileName = 'pricemania-export.xml';
		$item = new Item();

		$item
			->setName('Autíčko')
			->setDescription('<p>Jezdí jako ďas</p>')
			->setPrice(250)
			->setCategory('Hračky')
			->setManufacturer('Matel')
			->setUrl('http://eshop.cz/auticko')
			->setPicture('http://eshop.cz/auticko.jpg')
			->setShipping(100)
			->setAvailability(0)
			->setId(1)
			->setEan('00012123456')
			->setPartNumber('kniha0003')
			->addParameter('barva', 'red');

		$generator = new Generator(new Storage(__DIR__.'/../temp'));

		$this->assertSame('Matel', $item->manufacturer);

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
			->setName('Autíčko');

		$generator = new Generator(new Storage(__DIR__.'/../temp'));

		$this->expectExceptionMessage('Item is not complete');
		$generator->addItem($item);
	}

}
