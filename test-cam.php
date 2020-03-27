<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display Webcam Stream</title>
<!-- Bootstrap online -->
 <!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Bootstrap offline -->
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css.map">
<!-- Style -->
<link rel="stylesheet" type="text/css" href="../xuLyAnh/css/style.css">
</head>
<body>
<div class="holder">
    <form method="POST" action="../xuLyAnh/listImage.php" class="form-image" enctype="multipart/form-data">
        <h3 class="display-3">Chụp ảnh sinh viên:</h3>
        <div class="camera" id="container">
        	<video autoplay="true" id="videoElement">
            
        	</video>
        </div>
        <div class="infor-customer">
            <!-- <img src="image/images.jfif" alt=""> -->
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="form-group col-md-12">Name</label>
                  <input name="name" type="text" class="form-control item form-group col-md-12" placeholder="Enter your name ..." focuson>
                </div>
                <div class="form-group col-md-6">
                  <label class="form-group col-md-12">MSV: </label>
                  <input name="msv" type="text" class="form-control item form-group col-md-12" placeholder="Enter your idetification card ... ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="form-group col-md-12">Upload file: </label>
                  <input type="file" class=" col-md-12" name="fileToUpload">
                </div>
                <div class="form-group col-md-6">
                    <label class="form-group col-md-12">&nbsp</label>
                    <button type="submit" class="gui btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
if(isset($_POST['submit'])){
  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
    <script type="text/javascript">
        var video = document.querySelector("#videoElement");

        if (navigator.mediaDevices.getUserMedia) {
          navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
              video.srcObject = stream;
            })
            .catch(function (err0r) {
              console.log("Something went wrong!");
            });
        } 
        function stop(e) {
          var stream = video.srcObject;
          var tracks = stream.getTracks();

          for (var i = 0; i < tracks.length; i++) {
            var track = tracks[i];
            track.stop();
          }

          video.srcObject = null;
        }
    </script>
</body>
</html>
