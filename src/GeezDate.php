<?php

namespace GeezDate\GeezDate;

use phpDocumentor\Reflection\DocBlock\Tags\Throws;

class GeezDate
{
    public $geezNumbers;

    public function __construct()
    {
        $jsonFile = realpath(__DIR__.'/../resources/jsons/geez.json');
        $this->geezNumbers = json_decode(file_get_contents($jsonFile), true);
    }

    public function changeDatetoGeez($date)
{

    $dateParts = explode('-', $date);

    if (count($dateParts) != 3) {
        throw new \Exception("Invalid date format. Please use YYYY-MM-DD.");
    }

    $year = ltrim($dateParts[0], '0');
    $month = ltrim($dateParts[1], '0');
    $day = ltrim($dateParts[2], '0');
    if ($month < 1 || $month > 13) {
        throw new \Exception("Invalid month. Please use a month between 1 and 12.");
    }

    if ($day < 1 || $day > 31) {
        throw new \Exception("Invalid day. Please use a valid day for the given month.");
    }

    $geezYear = $this->changeNumber($year);
    $geezMonth = $this->changeNumber($month);
    $geezDay = $this->changeNumber($day);

    return $geezYear . "-" . $geezMonth . "-" . $geezDay;
}
    public  function changeNumber(string $number)
    {
        $number = (int)$number;
        $geezNumber = '';
        if ($number <= 1000) {
            $number = strval($number);
            $geezNumber = $this->geezNumbers['numbers'][$number];
            return  $geezNumber;
        } else if ($number > 1000 && $number < 10000) {

            return $this->hundredMultiplier($number);

        } else if ($number >= 10000 && $number <= 100000) {
            return $this->thousandMultiplier($number);
        }
            else{
                return  throw new \Exception("Please use a number from 1-100,000");;
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
