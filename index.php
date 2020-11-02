<?php

    require_once 'Car.php';

        //create car1
        $car1 = new Car('red', 4, 'essence');
        $car1->setEnergyLevel(100);
        $car1->setCurrentSpeed(150);
        $car1->setNumberWheels(4);
        
       

        try {
            echo $car1->start();
        } catch(Exception $e){
            echo "Exception received : ". $e->getMessage();
        }finally{
            echo "Ma voiture roule comme un donut";
        }
        
        var_dump($car1);
       // Moving car1
       echo $car1->start();
       echo $car1->forward();
       echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
       echo $car1->brake();
       echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
       echo $car1->brake();


       

?>