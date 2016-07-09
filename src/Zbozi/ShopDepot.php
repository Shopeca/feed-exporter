<?php

namespace Shopeca\XML\Feed\Zbozi;

use Nette\Object;

class ShopDepot extends Object {

    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}
