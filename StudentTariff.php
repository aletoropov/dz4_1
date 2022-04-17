<?php

class StudentTariff implements I_Service
{
    private $priceMin = 4;
    private $priceKm = 1;

    public function getSum(int $min, int $km) : int
    {
        return $min * $this->priceMin + $km * $this->priceKm;
    }
}
