<?php

namespace GeezDate\GeezDate;

class GeezDate {

    public  $geezNumbers;

    public function __construct()
    {
        $jsonFile = realpath(__DIR__ . '/../resources/jsons/geez.json');
        $this->geezNumbers = json_decode(file_get_contents($jsonFile), true);
    }
    public  function hello($number)  {
        $geezNumber = '';
        if($number<=1000){
        $number = strval($number);
        $geezNumber=$this->geezNumbers['numbers'][$number];
        return  $geezNumber;

        }
        else if($number>1000 && $number<10000){
        return $this->hundredMultiplier($number);
        }

        else if($number>=10000 && $number<=100000){
            if($number%10000==0){
                $frontnumber = strval(intdiv($number, 10000));
                return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']["1000"];
            }
              $frontnumber = strval(intdiv($number, 10000));
             $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']["1000"];
            $backnumber = $number%10000;
          return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']["1000"].$this->hundredMultiplier($backnumber);
        }
    }




    public function hundredMultiplier($number)  {
        if($number%10==0 && $number<100   ){
            // dd($number);
           return $this->geezNumbers['numbers'][$number];
        }
        $backnumber=strval($number%100);
        $frontnumber = strval(intdiv($number, 100));
        // dd($number);
      return $this->geezNumbers['numbers'][$frontnumber].$this->geezNumbers['multiplier']["100"]. $this->geezNumbers['numbers'][$backnumber];
    }
}
