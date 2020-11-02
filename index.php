<?php




    require 'Bicycle.php';

        //create bike
        $bike = new Bicycle('red');
        var_dump($bike);
    
        //Moving bike
        echo $bike->forward();
        echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
        echo $bike->brake();
        echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
        echo $bike->brake();
    




    require_once 'Car.php';

        //create car1
        $car1 = new Car('red', 4, 'essence');
        $car1->setEnergyLevel(100);
        $car1->setCurrentSpeed(150);
        $car1->setNumberWheels(4);
        $car1->setHasParkBreak(false);
        
        var_dump($car1);
       // Moving car1
       echo $car1->start();
       echo $car1->forward();
       echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
       echo $car1->brake();
       echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
       echo $car1->brake();


        //create car2
       $car2 = new Car ('blue', 2, 'diesel');
       $car2->setEnergyLevel(150);
       $car2->setCurrentSpeed(110);
       $car2->setNumberWheels(4);

       var_dump($car2);

        // Moving car2
        echo $car2->start();
        echo $car2->forward();
        echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
        echo $car2->brake();
        echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
        echo $car2->brake();

?>