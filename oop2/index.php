<style>body{background-color: #333;color: aliceblue;}</style>

<?
require_once 'src/Applience.php';
require_once 'src/TV.php';
require_once 'src/Money.php';
require_once 'src/Lenght.php';

$tv = new TV(1,'LG',75,new Money(100_00,"EUR"));
var_dump($tv);
$diag=new Lenght(75,Units::INCH);
var_dump($diag);
?>
