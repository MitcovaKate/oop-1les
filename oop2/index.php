<style>body{background-color: #333;color: aliceblue;}</style>

<?

require_once './src/TV.php';
require_once './src/Money.php';
require_once './src/Lenght.php';
require_once './src/Volume.php';

$tv = new TV(1,'LG',
new \Lenght\Lenght(75,\Lenght\Units::INCH),
new Money(100_00,"EUR"));
var_dump($tv);

$washer=new DishWasher(
    1001,'LG',12,
    new \Volume\Volume(100,\Volume\Units::LITTER),
    new Money(12000,'MDL')
);
var_dump($washer);
?>
