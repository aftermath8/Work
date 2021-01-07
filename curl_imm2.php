<?php

$username ='mohamed@immoviewer.com';
$password ='Soussou28394';

//initialize the URL
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);

curl_setopt($ch, CURLOPT_URL, 'https://app.immoviewer.com/rest/v1/tour/5e5cd6d9ec80e45ccd838861?scope=panoramas,attachments');

//Set the URL that you want to GET by using the CURLOPT_URL option.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$request = curl_exec($ch);

$foo = json_decode($request, true);

$tour_id = $foo['id'];
$pano_file = $foo['panoramas'];




for ($i=0; $i < count($foo['panoramas']); $i++) {

  echo('<form method ="POST"><img src="'.$foo['panoramas'][$i]['fileUrls']['SMALL'].'"><div><input type="file" name="replace_pano"value="Replace"/><br><input type="submit" name="delete_pano" value="Delete"/><br><input type="submit" value="Rename"></div></form>');
  echo'<br>';

if (isset($_POST['delete_pano'])) {
  foreach ($pano_file as $key => $value) {
    unset($foo['panoramas'][$i]);
  }
}

}

?>
<input type="submit" name="" value="UPDATE TOUR">
<?php




curl_close($ch);
//print_r($pano_file_count);


 ?>
