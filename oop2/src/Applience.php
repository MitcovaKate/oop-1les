<?
require_once './src/Money.php';

abstract class Applience {
private int $id;
private string $name;
private Money $price;
const ID_MIN=0;
const ID_MAX=1000000;
public function __construct(int $id,string $name,Money $price)
{
  $this->setId($id);
  $this->name=$name;
  $this->price=$price;  
}
 public function setId(int $id) : void {
    if($id > static::ID_MIN && $id < static::ID_MAX){
       $this->id=$id;
    }
    else {
     # hw2 sprintf()
//      $errorMessage = sprintf("ERROR: id must be in range (%d..%d)", static::ID_MIN, static::ID_MAX);
// print($errorMessage);
      print("ERROR:id must be in range (".static::ID_MIN."..".static::ID_MAX.")");
    }
}
 public function getId():int{
   return $this->id;  
 }
#h1 __set(), __get()
// public function __set($name, $value){
   
//     if ($value != "")
//     $this->$name=$value;
//  else 
//       die ("ERROR:cannot leave {$name} empty!!!");
     
//  }
 
//  public function __get($name){
//     if ($name != ""){
//     return $this->$name;
// }else 
// die ("ERROR:cannot leave {$name} empty!!!");


//  }
}
