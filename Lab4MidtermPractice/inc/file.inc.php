<?php
//here we are making the file agent which reads the file and outputs it.

function getFileContents()
{
    $handle = fopen(FILE_NAME, 'r');

    $contents = fread($handle, filesize(FILE_NAME));
    
    fclose($handle);

    return $contents;
}




?>