<?php

function createTour()
{

  //Create tour and generate a tour ID
  $tour_name = urlencode($_POST['tourname']);
  $username = 'mohamed@immoviewer.com';
  $password = 'Soussou28394';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL,"https://app.immoviewer.com/rest/v1/tour/create?name={$tour_name}&agentID=58e4c9d15f6266268511ac5e");

  $buffer = curl_exec($ch);
  //print_r($buffer);
  $foo = json_decode($buffer, true);
  $tour_id = $foo['details']['id'];
  $tour_created = $foo['type'];

  if ($tour_created == "TOUR_CREATED")
  {
    //echo "string";
    header("Location: dada.php?tourID=" . $tour_id."&chosen_tour_name=".$tour_name);
    //Example: http://localhost/geogram_1/dada.php?tourID=5e57c058cfd3073eff879a18&chosen_tour_name=werqs
  }

  else
  {
    echo "error!";
  }

  //echo $tour_id;
  curl_close($ch);
}
function createRoomAndPano($tour_id){

  $username = 'mohamed@immoviewer.com';
  $password = 'Soussou28394';

  //Initialise the cURL var
  $ch = curl_init();

  //Get the response from cURL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  //Set the Url
  curl_setopt($ch, CURLOPT_URL, "https://app.immoviewer.com/rest/v1/tour/{$tour_id}/pano");

  curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
  curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
  curl_setopt($ch, CURLOPT_POST, true);
  $args['file'] = new CurlFile($_FILES['file']['tmp_name'],'image/jpeg',$_FILES['file']['name']);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $args);


  // Execute the request
  $response = curl_exec($ch);
}


if (isset($_POST['submit']))
{
  createTour();
}
else if (isset($_GET['tourID']))
{
   createRoomAndPano($_GET['tourID']);
}

?>
