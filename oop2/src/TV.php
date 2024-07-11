<?
require_once './src/Applience.php';
class TV extends Applience{
private Lenght $diagonal;
public function __construct(int $id, string $name, Lenght $diagonal,Money $price)
{
 parent::__construct($id, $name, $price);  
 $this->diagonal=$diagonal;
}
}