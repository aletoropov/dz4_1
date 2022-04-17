<?php

class BaseTariff implements I_Service
{
    private $priceMin = 10;
    private $priceKm = 3;

    public function getSum(int $min, int $km) : int
    {
        return $min * $this->priceMin + $km * $this->priceKm;
    }
}
