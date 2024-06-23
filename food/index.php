<?
abstract class Item{
  public $name;
  public $image;
  public $price;

public function __construct($name , $image , $price){
$this ->name=$name;
$this ->image=$image;
$this->price=$price;
}
}

class Food extends Item{
 
    public $weight;

public function __construct($name , $image , $price, $weight){
  parent::__construct($name, $image, $price);
  $this->weight=$weight;
}
public function __toString()
{
  return "<p><b>Food:</b>{$this->name} {$this->price} {$this->weight}</p>";
}

}
class Drink extends Item{
 
  public $volume;

public function __construct($name , $image , $price, $volume){
parent::__construct($name, $image, $price);
$this->volume=$volume;
}
public function __toString()
{
return "<p><b>Drink:</b>{$this->name} {$this->price} {$this->volume}</p>";
}

}

class Delivery extends Item{

  public $adress;

public function __construct($name ,$image ,$price,$adress){
parent::__construct($name, $image ,$price);
$this->adress=$adress;
}
public function __toString()
{
return "<p><b>Delivery:</b>{$this->name} {$this->price} {$this->adress}</p>";
}

}
?>
<?
$food=new Food("Salad","img/food.jpg",100,1000);
$drink=new Drink("Coffe","img/drink.png",40,20);
$delivery=new Delivery("Soup","img/f.png",100,"Botanica");
print($food);
print($drink);
print($delivery);
?>