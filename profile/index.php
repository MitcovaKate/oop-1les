<?
class Profile{
//properties
public $name;
public $logo;
public $rating;
public function __construct(string $name, string $logo, float $rating){
    $this->name=$name;
    $this->logo=$logo;
    $this->rating=$rating;

}

public function toHTML(){
    return
"<div>
  <h1>{$this->name}</h1>
  <img src={$this->logo}>
  <h2>Rating: {$this->rating}</h2>

</div>";
    
    
}
}

 $profile1= new Profile("Mark","https://icons.iconarchive.com/icons/hopstarter/soft-scraps/256/User-Administrator-Blue-icon.png",2);
  $profile2= neW Profile("Lucy","https://icons.iconarchive.com/icons/hopstarter/sleek-xp-basic/256/Office-Girl-icon.png",3);
 
 echo $profile1->toHTML();
echo $profile2->toHTML();
 ?>