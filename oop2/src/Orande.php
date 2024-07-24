<?
require_once './src/Product.php';
class orange extends Product{
    public int $weight;
    public int $period;
    public function __construct(string $name, int $price ,int $weight )
    {
        parent::__construct($name, $price);
        $this->weight=$weight;
    
        
    }
}
