<?php
$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/geogram/uploaded_files/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

echo '<pre>';
	echo $uploadfile;
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "OK.\n";
} else {
    echo "ERROR\n";
}

echo 'Weitere Debugging Informationen:';
print_r($_FILES);
?>
