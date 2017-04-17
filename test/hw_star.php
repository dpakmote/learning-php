<?php
    function iterate($s,$n){ //this is the function
        for ($i = 0; $i <= $n; $i++){ //this is the loop procedure to iterate 10 times
            echo $s; //it will show 0123456789 on the screen
        } 
    }

    $s = "*"; //variable declaration
    echo iterate($s,5).'<br />';
    echo iterate($s,4).'<br />';
    echo iterate($s,3).'<br />';
    echo iterate($s,2).'<br />';
    echo iterate($s,1).'<br />';
?>