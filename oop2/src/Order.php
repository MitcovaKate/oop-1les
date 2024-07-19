<?
declare(strict_types=1);
class Order{
    private array $items;
    private Money $total;
    public function __construct()
    {
       $this -> items = [];
        
    }
    public function addItem(Item $item):void{
        $items[]= $item;
        $this->adjustTotal($item->getApplience()->getPrice(),$item->getQuantity());
    }
    private function adjustTotal(Money $price, int $quantity):void{
    $this->total = new Money(
    $this->total->getAmount() + $price->getAmount() * $quantity,
    $price->getCurrency()
);
    }
}