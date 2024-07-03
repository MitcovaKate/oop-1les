<?
class Applience {
private int $id;
private string $name;
private float $price;

public function __construct(int $id,string $name,float $price)
{
  $this->id=$id;
  $this->name=$name;
  $this->price=$price;  
}
 public function setId(int $id):void{
    if($id>0 && $id<1000000){
     $this->id=$id;
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
