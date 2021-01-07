<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="dropzone.css">
  </head>
  <body>
    <center><img src="images/immoviewer_logo-01.png" alt="logo" style="width:300px;padding-top: 50px;height:100px;"></center>
    <h2><font face="Helvetica"></font></h2>
    <style media="screen">
      h2
      {
        padding-left: 10px;
      }
    </style>
    <center><form action="curl_imm1.php" method ="POST" enctype="multipart/form-data">
<br><br>
      <label for="tname">Enter Tour Name:</label>
        <style media="screen">
          label
            {
              color: #007daf;
              padding-left: 10px;
            }
        </style>

      <input value="" type="text" step="any" name="tourname" <?php if (isset($_GET['chosen_tour_name'])) echo "placeholder='". $_GET['chosen_tour_name']."'" ?> >
      <!--<button data-dz-remove class="btn btn-warning cancel">
               <i class="glyphicon glyphicon-ban-circle"></i> > -->
      <button type="submit" class="btn btn-primary"  name="submit" <?php if (isset($_GET['chosen_tour_name'])) echo "disabled=disabled" ?> >Create Tour</button>
<br><br>
    </form>
    <div>
    </center>
    <?php if (isset($_GET['tourID'])) { ?>
      <div class="container">
        <h3 align="center">Panorama Drop</h3>

      </div>
      <form action="curl_imm1.php?tourID=<?php echo $_GET['tourID']; ?>" class="dropzone" id="dropzoneFrom">

        </div>
      </form><br><br>
      <div class="dz-preview dz-file-preview">
  <div class="dz-details">
    <div class="dz-filename"><span data-dz-name></span></div>
    <div class="dz-size" data-dz-size></div>
    <img data-dz-thumbnail/>
  </div>
  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
  <div class="dz-error-message"><span data-dz-errormessage></span></div>
      </div>
        <center><button style="bachground-color: #007daf;" type="button" class="btn btn-primary" id="uploadfiles">Upload Panos</button></center>
      </div>
    <?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

<script type="text/javascript">


 Dropzone.options.dropzoneFrom = {
  autoProcessQueue: false,
  addRemoveLinks: true,
  acceptedFiles:".png,.jpg,.bmp,.jpeg",

  parallelUploads: 20,
  init: function(){
   var submitButton = document.querySelector('#uploadfiles');
   myDropzone = this;
   submitButton.addEventListener("click", function(){
    event.preventDefault();
    myDropzone.processQueue();


   });
   /*
   myDropzone.on("complete", function(file) {
     myDropzone.removeFile(file);
   });
*/
  },
 };




</script>
</body>
</html>
