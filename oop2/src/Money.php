<?
class Money{
    private int $amount;
    private string $currency;
    public function __construct(int $amount, string $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
        
    }
    public function setAmount(int $amount):void{
      $this->amount = min(max($amount, PHP_INT_MIN), PHP_INT_MAX);#HW4
    }
    public function getAmount(int $amount):int{
     return   $this->amount;
      }
      public function setCurrency(int $currency): void#HW5
      {
          $currencyLIMIT = [
              'EUR' => 1,
              'MDL' => 2,
              'USD' => 3,
          ];
      
          if (!isset($currencyLIMIT[$currency])) {
              die('Invalid currency. Allowed currencies are: EUR, MDL, USD');
          }
      
          $this->currency = $currency;
      }
      public function getCurrency(int $currency):int{
       return   $this->currency;
        }
}

