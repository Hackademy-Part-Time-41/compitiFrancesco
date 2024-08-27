<?php

class Company{
    public $name;
    public $location;
    public $tot_employees =0;
    public $avg_salary;
    public static $count = 0;
    public static $companyCost = [];

    public function __construct($name,$location,$tot_employees,$avg_salary)
    {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->avg_salary = $avg_salary;
    
        self::$companyCost[] = $this->annualExpense(12);
        self::$count++;
    }


    public function companyPresentation(){
        if($this->tot_employees > 0){

            echo "L'ufficio $this->name con sede a $this->location ha ben $this->tot_employees dipendenti\n";

        }else{

            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti\n";

        }
    }

    public function annualExpense($months) {

        return ($this->avg_salary * $this->tot_employees) * $months;

    }

    public function showAnnualExpense($months) {
        
        echo "Spesa totale di $this->name in $months mesi: " . $this->annualExpense($months) . "€\n\n";

    }

    public static function showCompanyCreated() {

        echo "Aziende create: " . self::$count;
        echo "Aziende create: " . self::$count . "\n";
    }

    public static function CalculatedAnnualCost() {

        return array_reduce(Company::$companyCost, function ($companyCost, $acc){
            return $acc += $companyCost; 
        });

    }

    public static function showCalculatedAnnualCost() {

        echo "Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di: " . Company::CalculatedAnnualCost() . "€";

    }

}



$aulab = new Company('Aulab', 'Bari',50, 800 );
$grandi_scuole = new Company('Grandi scuole', 'Catania', 300, 1000);
$autoscuolaStadio = new Company('Autoscuola Stadio', 'Piacenza', 6, 1200);
$cirfood = new Company('Cirfood', 'Parmma', 100000, 2500);
$scansafatiche = new Company('Gli scansafatiche', 'Malta', 0, 0);


$aulab->companyPresentation();
$aulab->showAnnualExpense(12);
$grandi_scuole->companyPresentation();
$grandi_scuole->showAnnualExpense(8);
$autoscuolaStadio->companyPresentation();
$autoscuolaStadio->showAnnualExpense(5);
$cirfood->companyPresentation();
$cirfood->showAnnualExpense(3);
$scansafatiche->companyPresentation();
$scansafatiche->showAnnualExpense(0);

Company::showCompanyCreated();
Company::showCalculatedAnnualCost();
