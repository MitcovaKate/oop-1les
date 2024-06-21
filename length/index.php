<?
class Length {
  private $value;
  private $unit;
  public function __construct ($value, $unit) {
      $this->setUnit($unit);
      $this->setValue($value);               
  }

  // HW2:  "value" allow >= 0
  public function getValue() {
      return $this->value;
  }

  public function setValue($value) {
      if ($value >= 0) {
          $this->value = $value;
      } else {
          die("ERROR: value < 0!");
      }
  }

  public function getUnit() {
      return $this->unit;
  }

  public function setUnit($unit) {
      if (in_array($unit, ["%", "px", "vh", "vw", "rem", "em"])) {
          $this->unit = $unit;
      } else {
          die("ERROR: Wrong unit value!!!");
      }
  }
}

?>

<?
                 
$width = new Length(100, "%");
$height = new Length(70, "%");

$width->setUnit("px");
$width->setValue(-1);

// var_dump($width);
// var_dump($height);
print($width->getValue());
print($width->getUnit());

?>