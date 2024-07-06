<?
require_once './src/Applience.php';
class TV extends Applience{
private $diagonal;
public function __construct(int $id, string $name, int $diagonal,Money $price)
{
 parent::__construct($id, $name, $price);  
 $this->diagonal=$diagonal;
}
}