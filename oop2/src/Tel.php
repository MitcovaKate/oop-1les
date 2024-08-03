<?
require_once './src/Product.php';
require_once './src/SwitchingTrait.php';
require_once './SwitchebleInterface.php';
class Tel extends Product{
    public int $diagonal;
    use SwitchingTrait;
    public function __construct(string $name, int $price ,int $diagonal)
    {
        parent::__construct($name, $price);
        $this->diagonal=$diagonal;
        $this->isOn=false;
        
    }
    //interface logic
    //class Tel extends Product implements SwitchbleInterface{
       // public int $diagonal;
      // private bool $status;
      //  public function __construct(string $name, int $price ,int $diagonal)
      //  {
      //parent::__construct($name, $price);
         //   $this->diagonal=$diagonal;
         //   $this->status =false;
            // }
           // public function turnOn():void{
          //$this->status=true; 
           // }
            // public function turnOff():void{
          //$this->status=false; 
           // }
            // public function isOn():bool{
          //return $this -> status; 
           // }
           
   // }
    
}