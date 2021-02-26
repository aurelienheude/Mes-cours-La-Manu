<?php 

    declare(strict_types=1);
    
    require "Character.php";

    class hero extends character
    {
        /** @var string */

        private $weapon;

        /** @var int */

        private $weaponDamage;

        /** @var string */

        private $shield;

        /** @var int */

        private $shieldValue;

        public function __construct(int $health, int $rage, string $new_weapon, int $new_weapon_damage, string $new_shield, int $new_shield_value)
        {
            Character::__construct($health, $rage);

            $this->set_weapon($new_weapon);
            $this->set_weapon_damage($new_weapon_damage);
            $this->set_shield($new_shield);
            $this->set_shield_value($new_shield_value);

        }

        public function get_weapon()
        {
            return $this->weapon;
        }

        public function get_weapon_damage()
        {
            return $this->weaponDamage;
        }

        public function get_shield()
        {
            return $this->shield;
        }

        public function get_shield_value()
        {
            return $this->shieldValue;
        }

        public function set_weapon(string $new_weapon)
        {
            $this->weapon = $new_weapon;
        }

        public function set_weapon_damage(int $new_weapon_damage)
        {
            $this->weaponDamage = $new_weapon_damage;
        }

        public function set_shield(string $new_shield)
        {
            $this->shield = $new_shield;
        }

        public function set_shield_value(int $new_shield_value)
        {
            $this->shieldValue = $new_shield_value;
        }

        public function attacked()
        {
            if($this->weaponDamage)
            {
                $damage = $this->weaponDamage - $this->shieldValue;
                
                character::set_health(character::get_health() - $damage);
                
                $this->set_hero_rage();
            }

        }

        public function set_hero_rage()
        {
            character::set_rage(character::get_rage() + 30);
        }

    }


?>