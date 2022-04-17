<?php

trait Gps {
    public function getNewSum(int $price, int $hour): int
    {
        return 15 * $hour + $price;
    }
}

trait Driver {
    public function getNewPrice(int $price): int
    {
        return $price + 100;
    }
}

class TariffAdapter
{
    private $_service;

    public function __construct(I_Service $service)
    {
        $this->_service = $service;
    }

    public function getPrice(int $km, int $min)
    {
        $this->_service->getSum($km, $min);
    }
}
