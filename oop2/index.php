<style>body{background-color: #333;color: aliceblue;}</style>

<?

require_once './src/TV.php';
require_once './src/Money.php';
require_once './src/Lenght.php';
require_once './src/Volume.php';
require_once './src/Order.php';
require_once './src/Tel';
require_once './src/Orange.php';
require_once './src/Iron.php';

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
$order=new Order();
$order->addItem(new Item($tv,1));
var_dump($order);

$tel=new Tel('/lG', 1000, 55);
$orange=new Orange('Equador',10,1000);
$iron=new Iron('RTR',10,50);

$tel->switchOn();

var_dump($tel);
var_dump($orange);
var_dump($iron);

?>
