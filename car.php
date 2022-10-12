
  <?php

    // car.php

    class Car
    {

        private int $nbWheels=4;

        private int $currentSpeed=0;

        private string $color;

        private int $nbSeats;

        private string $energy;

        private int $energyLevel=100;



        //Constructor
        public function __construct(string $color, int $nbSeats, string $energy)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
        }

        //nbWheels
        public function getNbWheels(): int
        {
            return $this->nbWheels;
        }

        public function setNbWheels(int $nbWheels): void
        {
            if ($nbWheels >= 1) {
                $this->nbWheels = $nbWheels;
            }
        }

        //currentSpeed

        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }


        //Color
        public function getColor(): string
        {
            return $this->color;
        }

        public function setColor(string $color): void
        {
            $this->color = $color;
        }

        //nbSeats
        public function getNbSeats(): int
        {
            return $this->nbSeats;
        }

        public function setNbSeats(int $nbSeats): void
        {
            if ($nbSeats >= 1) {
                $this->nbSeats = $nbSeats;
            }
        }

        //Energy
        public function getEnergy(): string
        {
            return $this->energy;
        }

        public function setEnergy(string $energy): void
        {
            $this->energy = $energy;
        }

        //EnergyLevel

        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            if ($energyLevel > 100) {
                $this->energyLevel = 100;
            } elseif ($energyLevel < 0) {
                $this->energyLevel = 0;
            } else {
                $this->energyLevel = $energyLevel;
            }
        }

        //Move car
        public function start(): string
        {
            $this->currentSpeed = 1;

            return "Start";
        }

        public function forward(int $speed=15): string
        {
            if(($this->currentSpeed+$speed)>120){
                $this->currentSpeed = 120;
                return "Go! Go! Go!";
            } else {
                $this->currentSpeed += $speed;
                return "So fast!";
            }
        }

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



        public function dump()
        {
            var_dump($this);
        }
    }
