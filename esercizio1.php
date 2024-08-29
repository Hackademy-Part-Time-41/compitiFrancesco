<?php

class Continent{
 	public $nameContinent;


	 public function __construct($continent)
 	{
  		$this->nameContinent = $continent;
 	}
}

class Country extends Continent{
    public $nameCountry;

    public function __construct($nameContinent,$country){
       
        parent::__construct($nameContinent);
        
        $this->nameCountry = $country;
    }
}

class Region extends Country{
    public $nameRegion;

    public function __construct($nameContinent,$country,$region){
        
        parent::__construct($nameContinent,$country);
        
        $this->nameRegion = $region;
    }
}

class Province extends Region{
    public $nameProvince;

    public function __construct($nameContinent,$country,$region,$province){
        
        parent::__construct($nameContinent,$country,$region);
        
        $this->nameProvince = $province;
    }
}

class City extends Province{
    public $nameCity;

    public function __construct($nameContinent,$country,$region,$province,$city){
       
        parent::__construct($nameContinent,$country,$region,$province);
       
        $this->nameCity = $city;
    }
}

class Street extends City{
    public $nameStreet;

    public function __construct($nameContinent,$country,$region,$province,$city,$street){
       
        parent::__construct($nameContinent,$country,$region,$province,$city);
       
        $this->nameStreet = $street;
    }
    
    
    public function getMyCurrentLocation(){
        echo "mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }
}


$myLocation = new Street ('Europa', 'Italia', 'Puglia', 'Ba', 'Bari', 'San Giorgio Martire 2D“');
$myLocation->getMyCurrentLocation();
