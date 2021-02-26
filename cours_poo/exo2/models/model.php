<?php 

    declare(strict_types=1);

    class AccountBank
    {
    
        /** @var string */
        private $Holder;
    
        /** @var int */
        private $Balance;
    
        /** @var int */
        private $InterestRate;
    
        /** @var string */
        private $Currency;
    
        /**
         * Default constructor
         */
        public function __construct(string $newHolder, int $newBalance, int $newRate, string $newCurrency)
        {
            $this->set_holder($newHolder);
            $this->set_balance($newBalance);
            $this->set_interestRate($newRate);
            $this->set_currency($newCurrency);
        }
    
        /**
         * @param int $amount
         */
        
        public function Credit(int $amount)
        {
            $this->Balance += $amount;
        }
    
        /**
         * @param int $amount
         */
        public function Debit(int $amount)
        {
            $this->Balance -= $amount;
        }
    
        /***  GET FUNCTION  ***/

        public function get_interestRate() 
        {
            echo $this->InterestRate;
        }

        public function get_currency() 
        {
            echo $this->Currency;
        }

        public function get_balance() 
        {
            echo $this->Balance;
        }

        public function get_holder() 
        {
            echo $this->Holder;
        }

        /***  SET FUNCTION  ***/

        public function set_holder(string $newHolder) 
        {
            $this->Holder = $newHolder;
        }
    
        public function set_balance(int $newBalance) 
        {
            $this->Balance = $newBalance;
        }

        public function set_interestRate(int $newRate) 
        {
            $this->InterestRate = $newRate;
        }

        public function set_currency(string $newCurrency) 
        {
            $this->Currency = $newCurrency;
        }
    }
?>