<?php
  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'http://www.goosdsdsdgle.com');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,0); //temps d'attente en s, 0 quand c'est inifi
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $buffer = curl_exec($curl_handle);

  curl_close($curl_handle);
  if (empty($buffer)){
      print "Nothing returned from url.<p>";
  }
  else{
      print $buffer;
  }
?>
