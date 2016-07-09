<?php

namespace Shopeca\XML\Feed\Zbozi;

use Nette\Object;

class Image extends Object {
    private $url;

    /**
     * Image constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

}
