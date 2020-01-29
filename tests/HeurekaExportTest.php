<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use Shopeca\XML\Feed\Heureka\Delivery;
use Shopeca\XML\Feed\Heureka\Generator;
use Shopeca\XML\Feed\Heureka\Item;
use Shopeca\XML\Storage;

class HeurekaExportTest extends TestCase
{

	public function testFeed(): void
	{

		$fileName = 'heureka-export.xml';
		$item = new Item();

		$item
			->setItemId(1)
			->setProductName('Autíčko')
			->setDescription('<p>Jezdí jako ďas</p>')
			->setUrl('http://eshop.cz/auticko')
			->addImage('http://eshop.cz/auticko.jpg')
			->addImage('http://eshop.cz/auticko2.jpg')
			->setVideoUrl('http://eshop.cz/auticko.mp4')
			->setPriceVat(250)
			->addParameter('barva', 'red')
			->setManufacturer('Matel')
			->setCategoryText('Hračky')
			->setEan('00012123456')
			->setIsbn('kniha0003')
			->setHeurekaCpc(2)
			->setDeliveryDate(new \DateTime('2020-06-01 19:00:00'))
			->addDelivery(Delivery::CESKA_POSTA, 100, 0)
			->setItemGroupId('group10')
			->addAccessory(105)
			->setDues(10)
			->addGift('Klíčenka');

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
			->setItemId(1)
			->setProductName('Autíčko');

		$generator = new Generator(new Storage(__DIR__.'/../temp'));

		$this->expectExceptionMessage('Item is not complete');
		$generator->addItem($item);
	}

}
