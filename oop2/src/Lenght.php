<?
enum Units{
case INCH;
case FOOT;
case CM;
case M;
}

class Lenght{
    private int|float $value;
    private Units $unit;
    public function __construct(int|float $value, Units $unit)
    {
        $this->value=$value;
        $this->unit=$unit;
    }
}