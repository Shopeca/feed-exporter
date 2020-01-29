<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use Shopeca\XML\Feed\HledejCeny\Delivery;
use Shopeca\XML\Feed\HledejCeny\Generator;
use Shopeca\XML\Feed\HledejCeny\Item;
use Shopeca\XML\Storage;

class HledejCenyExportTest extends TestCase
{

	public function testFeed(): void
	{

		$fileName = 'hledej-ceny-export.xml';
		$item = new Item();

		$item
			->setProduct('Autíčko')
			->setUrl('http://eshop.cz/auticko')
			->setDescription('<p>Jezdí jako ďas</p>')
			->setPriceVat(250)
			->setImgUrl('http://eshop.cz/auticko.jpg')
			->setDeliveryDate(0)
			->setManufacturer('Matel')
			->setCategoryText('Hračky')
			->setDeliveryCost(100)
			->setId(1)
			->setEan('00012123456')
			->setProductNo('kniha0003')
			->setWarranty('5 let')
			->setDues(4.5)
			->setToll(660)
			->setNoImport(0)
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
			->setProduct('Autíčko');

		$generator = new Generator(new Storage(__DIR__.'/../temp'));

		$this->expectExceptionMessage('Item is not complete');
		$generator->addItem($item);
	}

}
