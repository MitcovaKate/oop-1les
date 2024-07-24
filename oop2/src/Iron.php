<?
require_once './src/Product.php';
require_once './src/SwitchingTrait.php';
class Iron extends Product{
    public int $temperature;
  use SwitchingTrait;
    public function __construct(string $name, int $price ,int $temperature)
    {
        parent::__construct($name, $price);
        $this->temperature=$temperature;
        $this->isOn=false;
        
    }
}