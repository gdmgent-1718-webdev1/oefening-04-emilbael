<?php

    function type($watIs){
        return "Waarde is " . gettype($watIs) . "</br>" ;
        
    }

echo type("test");
echo type(true);
echo type(1.5);
echo type(2);
echo type(["appel", "peer"]);

?>