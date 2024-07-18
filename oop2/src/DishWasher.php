<?
require_once '.src/Appliance.php';


class DishWasher extends Applience{
    private int $programsCount;
    public \Volume\Volume $volume;
    public function __construct(
        int $id,
        string $name,
        int $programsCount,
        \Volume\Volume $volume,
        Money $price
    )
    {
       parent::__construct($id,$name,$price);
       $this -> programsCount = $programsCount;
       $this -> volume = $volume;
    }
}