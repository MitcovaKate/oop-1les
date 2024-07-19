<?
class Item{
    private Applience $appliance;
    private int $quantity;
    public function __construct(Applience $applience, int $quantity)
    {
       $this-> appliance=$applience;
       $this->quantity=$quantity;
    }
    public function getApplience():Applience{
        return $this->appliance;
    }

    public function getQuantity():int{
        return $this->quantity;
    }
}