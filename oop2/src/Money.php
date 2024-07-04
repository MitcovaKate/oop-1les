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
      $this->amount=$amount;
    }
    public function getAmount(int $amount):int{
     return   $this->amount;
      }
      public function setCurrency(int $currency):void{
        $this->currency=$currency;
      }
      public function getCurrency(int $currency):int{
       return   $this->currency;
        }
}

