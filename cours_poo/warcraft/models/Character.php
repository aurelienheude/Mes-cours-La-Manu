<?php 

    declare(strict_types=1);

    class character
    {
        /** @var int */
        private $health;

        /** @var int */
        private $rage;

        public function __construct(int $new_health, int $new_rage)
        {
            $this->set_health($new_health);
            $this->set_rage($new_rage);
        }
        
        /****   GETTER    ****/

        public function get_health()
        { 
            return $this->health;
        }
        
        public function get_rage()
        { 
            return $this->rage;
        }

        /****   SETTER    ****/

        public function set_health(int $new_health) 
        {
            $this->health = $new_health;
        }

        public function set_rage(int $new_rage) 
        {
            $this->rage = $new_rage;
        }
    }

?>