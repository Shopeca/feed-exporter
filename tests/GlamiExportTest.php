<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use Shopeca\XML\Feed\Glami\Generator;
use Shopeca\XML\Feed\Glami\Item;
use Shopeca\XML\Storage;

class GlamiExportTest extends TestCase
{

	public function testFeed(): void
	{

		$fileName = 'glami-export.xml';
		$item = new Item();

		$item
			->setProductName('Autíčko')
			->setDescription('<p>Jezdí jako ďas</p>')
			->setUrl('http://eshop.cz/auticko')
			->setPriceVat(250)
			->setDeliveryDate(0)
			->setItemId(1)
			->setEan(121212)
			->setManufacturer('Matel')
			->setImgUrl('http://eshop.cz/auticko.jpg')
			->addParameters('barva', 'zelena')
			->setItemGroupId('1')
			->setCategoryText('Hračka')
			->setCategoryId('11')
			->addDelivery('Na prodejne', 100, 0);

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
			->setProductName('Autíčko')
			->setDescription('<p>Jezdí jako ďas</p>')
			->setUrl('http://eshop.cz/auticko')
			->setPriceVat(250)
			->setDeliveryDate(0)
			->setItemId(1)
			->setEan(121212)
			->setManufacturer('Matel')
			->setImgUrl('http://eshop.cz/auticko.jpg')
			->addParameters('barva', 'zelena');

		$generator = new Generator(new Storage(__DIR__.'/../temp'));

		$this->expectExceptionMessage('Item is not complete');
		$generator->addItem($item);
	}

}
