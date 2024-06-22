<?
class Link {
  private $text;
  private $url;
  public function __construct ($text, $url) {
      $this->setText($text);
      $this->url=$url;               
  }
public function getText(){
    return $this->text;
}
  
public function setText($text){
    $text = trim($text); // no spaces hw1
if ($text == "") die ("ERROR:text is mandatory!");
$this->text = $text;
}
}
?>

<?
                 
$link1 = new Link("PHP is the best!", "http://php.net");
$link1->setText("");
print($link1->getText());

?>