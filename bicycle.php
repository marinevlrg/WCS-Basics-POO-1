
  <?php

    // Bicycle.php

    class Bicycle
    {
        
        private int $nbWheels = 2;

        private int $currentSpeed;

        private string $color;

        private int $nbSeats = 1;

        

        //Constructor
        public function __construct(int $nbWheels, string $color,int $nbSeats)
        {
            $this->nbWheels = $nbWheels;
            $this->color = $color;
            $this->nbSeats = $nbSeats;
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

        public function setCurrentSpeed(int $currentSpeed): void
        {
            if ($currentSpeed >= 0) {
                $this->currentSpeed = $currentSpeed;
            }
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



        //Move bike
        public function forward(): string
        {
            $this->currentSpeed = 15;

            return "Go !";
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
