<?php

class Vertebrates{
    public function __construct(){
        $this->printClass();
    }

    protected function printClass(){
        echo "Vertebrato \n";
    }
}
class WarmBlood extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->printHot();
    }
    protected function printHot(){
        echo "Sangue Caldo \n";
    }
}
class ColdBlood extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->printCold();
    }
    protected function printCold(){
        echo "Sangue freddo \n";
    }
}
class Mammals extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->printMammal();
    }
    protected function printMammal(){
        echo "Mammifero \n";
    }
}
class Birds extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->printBird();
    }
    protected function printBird(){
        echo "Uccello \n";
    }
}
class Fishes extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printFish();
    }
    protected function printFish(){
        echo "Pesce \n";
    }
}
class Reptiles extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printReptile();
    }
    protected function printReptile(){
        echo "Rettile \n";
    }
}
class Amphibians extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printAmphibian();
    }
    protected function printAmphibian(){
        echo "Anfibio \n";
    }
}

$magikarp = new Fishes();