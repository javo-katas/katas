<?php

interface Reptile
{
    public function layEgg() : ReptileEgg;
}

class FireDragon implements Reptile
{

    private $hatched=FALSE;
    public function layEgg() : ReptileEgg {

        if($this->hatched==TRUE) {
            throw new Exception('The egg already hatched');
        }else{
        
        $this->hatched=TRUE;
        return new ReptileEgg('FireDragon');
        }
        
    }
}

class ReptileEgg
{

  
    private $reptileType;

    public function __construct(string $reptileType)
    {
        $this->reptileType = $reptileType;
    }
    
    public function hatch() : ? Reptile
    {
   
        echo $reptileType;
        return null;
    }

}
  
    $newDragon= new FireDragon();
    $dragonEgg = $newDragon->layEgg();
    echo 'Reptile Type -'.$dragonEgg->hatch();
    $newDragon->layEgg();

    ?>