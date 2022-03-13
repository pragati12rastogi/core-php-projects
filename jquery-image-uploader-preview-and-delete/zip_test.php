<?php

$zip = new ZipArchive();
if ($zip->open('src/test_new1.zip', ZipArchive::CREATE) === TRUE)
{
    
    // Add files to the zip file
    $zip->addFile('upload.php');
    
    // Add a file new.txt file to zip using the text specified
    $zip->addFromString('new.txt', 'text to be added to the new.txt file');
 
    // All files are added, so close the zip file.
    $zip->close();

}