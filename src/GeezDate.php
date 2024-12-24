<?php

namespace GeezDate\GeezDate;

class GeezDate
{
    public $geezNumbers;

    public function __construct()
    {
        $jsonFile = realpath(__DIR__.'/../resources/jsons/geez.json');
        $this->geezNumbers = json_decode(file_get_contents($jsonFile), true);
    }

    public function hello($number)
    {

        $geezNumber = '';
        if ($number <= 1000) {
            $number = strval($number);
            $geezNumber = $this->geezNumbers['numbers'][$number];

            return $geezNumber;
        } elseif ($number > 1000 && $number < 10000) {
            return $this->hundredMultiplier($number);
        } elseif ($number >= 10000 && $number <= 100000) {
            return $this->thousandMultiplier($number);
        } elseif ($number > 100000) {
            $result = '';

            $tenthnumber = intdiv($number, 10000);
            $thousandth = $number % 10000;
            $backnumber = $this->hundredMultiplier($thousandth);
            if ($tenthnumber < 10000) {
                $frontnumber = $this->hundredMultiplier($tenthnumber);

                return $frontnumber.$this->geezNumbers['multiplier']['1000'].$backnumber;
            } else {

                if ($tenthnumber > 10000 && $tenthnumber < 100000) {
                    $frontnumber = $this->thousandMultiplier($tenthnumber);

                    return $frontnumber.$this->geezNumbers['multiplier']['1000'].$backnumber;
                } else {

                    $backnumber = [];
                    while ($tenthnumber > 100000) {

                        $thousandth = $tenthnumber % 10000;
                        if ($tenthnumber > 10000 && $tenthnumber < 100000) {
                            $newfront = $this->thousandMultiplier($tenthnumber);
                            $frontnumber = $newfront.$this->geezNumbers['multiplier']['1000'].$this->hundredMultiplier($thousandth);

                            return $frontnumber.$this->geezNumbers['multiplier']['1000'].$backnumber;

                        } else {
                            $backnumber[] = $this->hundredMultiplier($thousandth);
                            $tenthnumber = intdiv($tenthnumber, 10000);
                            // dd($tenthnumber);
                        }

                    }
                }

            }
        }
    }

    public function hundredMultiplier($number)
    {
        if ($number % 10 == 0 && $number < 100) {
            return $this->geezNumbers['numbers'][$number];
        }
        if ($number % 1000 == 0) {
            $frontnumber = strval(intdiv($number, 100));

            return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']['100'];
        }
        $backnumber = strval($number % 100);
        $frontnumber = strval(intdiv($number, 100));
        if ($backnumber == 0) {
            return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']['100'];
        } else {
            return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']['100'].$this->geezNumbers['numbers'][$backnumber];
        }
    }

    public function thousandMultiplier($number)
    {
        if ($number % 10000 == 0) {
            $frontnumber = strval(intdiv($number, 10000));

            return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']['1000'];
        }
        $frontnumber = strval(intdiv($number, 10000));
        $backnumber = $number % 10000;

        return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']['1000'].$this->hundredMultiplier($backnumber);
    }
}
