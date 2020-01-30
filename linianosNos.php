<?php
// PHP print Linianos and numbers from 1 to 100 without
function linianosNos($n)
{
    for ($i=1 ; $i<=100 ; $i++) {
        switch ($i) {
            case ($i%3==0 && $i%5==0):
                echo "Linianos<br>";
                break;
            case ($i%3==0):
                echo "Linio<br>";
                break;
            case ($i%5==0):
                echo "IT<br>";
                break;
            default:
                echo $i."<br>";
        }
    }
    return;
}

// execute
linianosNos(100);

?>