<?php

    //car

    class Car
    {
        //attributs
        private $numberWheels;
        private $currentSpeed;
        private $color;
        private $numberSeats;
        private $energy;
        private $energyLevel;
        private $hasParkBreak;

        //méthodes

        public function __construct(string $color, int $numberSeats, string $energy)
        {
            $this->color = $color;
            $this->numberSeats = $numberSeats;
            $this->energy = $energy;
        }


        //start
        public function start()
        {
            if ($hasParkBreak = false){
                throw new exception('frein à main serrer');
            }
    
            try {
    
            } catch(Exception $e){
                echo "Exception received : ". $e->getMessage();
            }finally{
                echo "Ma voiture roule comme un donut";
            }
        }

        //forward
        public function forward()
        {
            $this->currentSpeed;

            return "Go !";
        }

        //stop
        public function brake(): string
        {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
        }

        //wheels
        public function getNumberWheels(): int
        {
            return $this->numberWheels;
        }

        public function setNumberWheels(int $numberWheels): void
        {
            $this->numberWheels = $numberWheels;
        }

        //speed
        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

        public function setCurrentSpeed(int $currentSpeed): void
        {
            if($currentSpeed >= 0){
                $this->currentSpeed = $currentSpeed;
            }
        }

        //color
        public function getColor(): string
        {
            return $this->color;
        }

        //seats
        public function getNumberSeats(): int
        {
            return $this->numberSeats;
        }

        //energy type
        public function getEnergy(): string
        {
            return $this->energy;
        }


        //energy level
        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLEvel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }

        public function getHasParkBreak(): bool
        {
            return $this->ghasParkBreak;
        }

        public function setHasParkBreak(bool $hasParkBreak): void 
        {
            $this->hasParkBreak = $hasParkBreak;
        }







    }