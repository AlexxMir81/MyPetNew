<?php   

class Pet {
    public $happiness;
    public $satiety;
    public $sleep;

    function __construct($happiness = 50, $satiety = 50, $sleep = 50){
        $this->happiness = $happiness;
        $this->satiety = $satiety;
        $this->sleep = $sleep;
    }

    function toGame(int $point = 10){
        if($this->happiness + $point > 100) $this->happiness = 100;
        elseif ($this->happiness + $point < 0) $this->happiness = 0;
        else $this->happiness += $point;
        return $this->happiness;
    }
    function toEat(int $point = 10){
        if($this->satiety + $point > 100) $this->satiety = 100;
        elseif ($this->satiety + $point < 0) $this->satiety = 0;
        else $this->satiety += $point;
        return $this->satiety;
    }
    function toSleep(int $point = 10){
        if($this->sleep + $point > 100) $this->sleep = 100;
        elseif ($this->sleep + $point < 0) $this->sleep = 0;
        else $this->sleep += $point;
        return $this->sleep;
    }

    function decreaseIndicators()
    {
        if($this->happiness-1<0) $this->happiness=0;
        else $this->happiness-= 1;
        if($this->satiety-1<0) $this->satiety=0;
        else $this->satiety-= 1;
        if($this->sleep-1<0) $this->sleep=0;
        else $this->sleep-= 1;
    }
    function getHappiness()
    {
        return "happiness:"."{$this->happiness}";
    }
    function getSatiety()
    {
        return "satiety:"."{$this->satiety}";
    }
    function getSleep()
    {
        return "sleep:"."{$this->sleep}";
    }
}
?>