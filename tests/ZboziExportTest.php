<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use Shopeca\XML\Feed\Zbozi\Delivery;
use Shopeca\XML\Feed\Zbozi\ExtraMessage;
use Shopeca\XML\Feed\Zbozi\Generator;
use Shopeca\XML\Feed\Zbozi\Item;
use Shopeca\XML\Storage;

class ZboziExportTest extends TestCase
{

	public function testFeed(): void
	{

		$fileName = 'zbozi-export.xml';
		$item = new Item();

		$item
			->setProductName('Autíčko')
			->setDescription('<p>Jezdí jako ďas</p>')
			->setUrl('http://eshop.cz/auticko')
			->setPriceVat(250)
			->setDeliveryDate(new \DateTime('2020-06-01 19:00:00'))
			->setItemId(1)
			->addImage('http://eshop.cz/auticko.jpg')
			->addImage('http://eshop.cz/auticko2.jpg')
			->setEan('00012123456')
			->setIsbn('kniha0003')
			->setProductNo('45455')
			->setItemGroupId('group10')
			->setManufacturer('Matel')
			->setErotic(false)
			->setBrand('Matel')
			->setCategoryId('Hračky')
			->addCategoryText('Hračky')
			->setProduct('Autíčko')
			->setItemType('new')
			->addExtraMessage(ExtraMessage::FREE_CASE)
			->addShopDepot(112)
			->setVisibility(true)
			->setCustomLabel('Pouze u nás')
			->setCustomLabel1('Doručíme do Vánoc')
			->setMaxCpc(2)
			->setMaxCpcSearch(2)
			->addParameter('barva', 'red')
			->setProductLine('Ghost Town')
			->setListPrice(1000)
			->setReleaseDate(new \DateTime('2020-01-01'));


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
