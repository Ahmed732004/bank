<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited $amount into account $this->accountNumber. New balance: $this->balance<br>";
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance<br>";
        } else {
            echo "Insufficient balance in account $this->accountNumber. Current balance: $this->balance<br>";
        }
    }
}
 

// Create a new BankAccount object
$account = new BankAccount("123456789");

// Display account number and initial balance
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Initial Balance: " . $account->getBalance() . "<br>";

// Deposit money
$account->deposit(1000);

// Withdraw money
$account->withdraw(500);

// Attempt to withdraw more money than the balance
$account->withdraw(600);
 

?>
