<?php
require 'traits.php';

interface iTariff
{
    public function calculate($time, $distance, $services);
    //public function getMinutes();
    //public function getDistance();
}


abstract class TariffAbstract implements iTariff
{
    protected $tariff;
    protected $priceRerKilometr;
    protected $pricePerTime;
    protected $distance;
    protected $time;
    protected $services = [];

    use Servises;

    public function calculate($distance, $time, $services)
    {
        $tariff = $this->tariff;
        $addService = $this->addServices($services, $time);
                
        $price = $this->priceRerKilometr * $distance + $this->pricePerTime * $time + $addService;
        
        if($tariff != 'Почасовой') {
            echo "Тариф $tariff" . ':' . '<br>';
            echo "Расстояние: $distance км" . '<br>';
            echo "Время: $time минут" . '<br>';
            echo "Дополнительные сервисы " . '<br>';
            foreach($services as $service) {
                echo $service . '<br>' ;
            }
            echo "Цена: $price" . '<br>';
        } else {
            echo "Тариф $tariff" . ':' . '<br>';
            echo "Расстояние: $distance км" . '<br>';
            echo "Время: $time часов" . '<br>';
            echo "Дополнительные сервисы " . '<br>';
            foreach($services as $service) {
                echo $service . '<br>' ;
            }
            echo "Цена: $price" . '<br>';
        }
       
    }

}

class Basic extends TariffAbstract
{
    protected $tariff = 'Базовый';
    protected $priceRerKilometr = 10;
    protected $pricePerTime = 3; 
}

class Student extends TariffAbstract
{
    protected $tariff = 'Студенческий';
    protected $priceRerKilometr = 4;
    protected $pricePerTime = 1; 
}

class Hourly extends TariffAbstract
{
    protected $tariff = 'Почасовой';
    protected $priceRerKilometr = 0;
    protected $pricePerTime = 200;

    public function calculate($distance, $time, $services)
    {
        $time = ceil($time / 60);
        parent::calculate($distance, $time, $services);
             
        
        
    }

    
    
}





?>