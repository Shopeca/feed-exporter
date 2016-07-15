<?php
	require '../vendor/autoload.php';

	$item = new \Shopeca\XML\Feed\Heureka\Item();

	$item
		->setProductName( 'Autíčko' )
		->setProduct( 'Autíčko' )
		->setDescription( '<p>Jezdí jako ďas</p>' )
		->setUrl( 'http://eshop.cz/auticko' )
		->setPriceVat( 250 )
		->setDeliveryDate( 0 )
		->setItemId( 1 )
		->setEan( 121212 )
		->setManufacturer( 'Matel' )
		->addImage( 'http://eshop.cz/auticko.jpg' );

	$exporter = new \Shopeca\XML\Feed\Heureka\Generator(new \Shopeca\XML\Storage('temp'));

	$exporter->addItem($item);

	$exporter->save('heureka-export.xml');
