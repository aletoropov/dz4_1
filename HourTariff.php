<?php

class HourTariff implements I_Service
{
    private $priceHour = 200;
    private $priceKm = 0;
    private $time;

    public function getSum(int $min, int $km): int
    {
        if ($min < 60) {
            $this->time = 60;
        } else {
            $this->time = $min;
        }

        return ($this->time / 60) * 200;
    }
}
