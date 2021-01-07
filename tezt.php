<?php

$data = $_SERVER['DOCUMENT_ROOT'] . '/mohamed/uploaded_files/';
$extension_array = array('jpg', 'png', 'jpeg', 'JPEF', 'PNG');

if(is_dir($data)) // checks if it's a directory, directory is a location for storing files on y
{
    $files = scandir($data);

    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            // get file name
            echo "File Name -> $files[$i]<br>";

            // get file extension
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
            echo "File Extension-> $extension<br>";
            echo "<img src = '$data$files[$i]' style = 'width = 150px; height:150px;'>";


    }
  }
}

 ?>
