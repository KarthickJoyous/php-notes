<?php

abstract class Bank {

    /*
        abstract public $account_number; ❌ | Properties cannot be declared as abstract.

        $bank = new Bank(); ❌ | Abstract class cannot be instantiate.

        An abstract class can be created without any abstract methods, it behaves like a regular class, except that it cannot be instantiated directly.
    */

    protected $account_number;

    public function __construct($account_number)
    {
        $this->account_number = $account_number;
    }

    abstract public function deposit($amount);

    abstract public function withdraw($amount);

    abstract protected function balance();

    public function account_number() {

        return "Account Number : $this->account_number";
    }
}

/*
    Sub-classes of bank must implement all the abstract methods of Bank.

    If not implemented error will be thrown (Class HDFC contains 1 abstract method and must therefore be declared abstract or implement the remaining methods)

    balance() is defined as protected, so it can be defined as protected / public but not private.
*/

class HDFC extends Bank {

    public function deposit($amount)
    {
        return "Amount $amount deposited to your HDFC bank account $this->account_number.";
    }

    public function withdraw($amount)
    {
        return "Amount $amount withdrew from your HDFC bank account $this->account_number.";
    }

    public function balance()
    {
        return "Your HDFC bank account ($this->account_number) balance is : " . rand(10, 100);
    }
}

class SBI extends Bank {

    public function deposit($amount)
    {
        return "Amount $amount deposited to your SBI bank account $this->account_number.";
    }

    public function withdraw($amount)
    {
        return "Amount $amount withdrew from your SBI bank account $this->account_number.";
    }

    public function balance()
    {
        return "Your SBI bank account ($this->account_number) balance is : " . rand(10, 100);
    }
}

$banks = [new HDFC("7878 6567 8991 1211"), new SBI("7891 0979 7889 5643")];

foreach($banks as $bank) {

    echo $bank->deposit(69) . PHP_EOL;

    echo $bank->withdraw(30) . PHP_EOL;

    echo $bank->balance() . PHP_EOL;

    echo $bank->account_number() . PHP_EOL;
}