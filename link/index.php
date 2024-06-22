<?
class Link {
  private $text;
  private $url;
  public function __construct ($text, $url) {
      $this->__set("text", $text) ;
      $this->__set("url", $url);               
  }

public function __set($name, $value){
   if($name == "text")
   if ($value != "")
   $this->text=$value;
else 
     die ("ERROR:cannot leave {$name} empty!!!");
    else if ($name == "url")
    if($value != "")
    $this->url = $value;
else  die("ERROR:cannot leave {$name} empty!!!");
else 
 die   ("ERROR:unknown property {$name}");
}

public function __get($name){
   if($name == "text") return $this->text;
   else if ($name == "url") return $this->url;
   else if ("ERROR:unknown property {$name}");
}
public function __toString(){
    return "<a href='{$this->url}'>{$this->text}</a>";
}

public function __isset($property) {
    if ($property !== "") {
      return isset($this->$property) && $this->$property !== "";
    }
}
}
?>

<?
                 
$link1 = new Link("PHP is the best!", "http://php.net");

//  print ($link1->text="");
// print ($link1->url);

?>
<p><?= isset($link1) ? "Читайте {$link1} и радуйтесь!" : "" ?></p>