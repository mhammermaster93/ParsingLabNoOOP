<?php

function parseData($fileData) //null
{
    $interData = array();
    //empty

    $lines = explode("\n", $fileData);
    //empty

    for ($i = 1; $i < count($lines); $i++)
    {
        $cols = explode(",", $lines[$i]);
        //null

        if (count($cols) != 6)
        {
            echo "Problem at line: ".$i;
            break;
        }

        for ($y = 0; $y < count($cols); $y++)
        {
            $cols[$y] = trim($cols[$y]);
        }

        $interData[] = $cols;
    }

    return $interData;
    var_dump($interData);
}


?>