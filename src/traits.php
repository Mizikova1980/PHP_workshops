<?php

trait ServiceGPS
{
    public function addGPS($time)
    {
       $hours = ceil($time / 60);
       return  $gps = 15 * $hours;
    }
}

trait ServiceDriver
{
    public function addDriver()
    {
        return  100;
    }
}

trait Servises
{
    use ServiceGPS, ServiceDriver;

    public function addServices($services, $time)
    {
        $addService = 0;
        if (in_array('gps', $services)) {
            $addService += $this->addGPS($time);
        }

        if (in_array('addDriver', $services)) {
            $addService += $this->addDriver();
        }
        
        return $addService;
       
    }
}


?>