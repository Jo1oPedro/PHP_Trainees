<?php

function subsequente()
{
    for($cont=0;$cont<10;$cont++)
    {
        echo $cont."<br/>";
    }
    echo "<hr/>";
}

function numVezes($num)
{
    for($cont=0;$cont<$num;$cont++)
    {
        subsequente();
    }
}

numVezes(3);
//subsequente();