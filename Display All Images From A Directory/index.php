<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Image Gallery Using PHP</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

  <div class="container-fluid">
  <h3 class="text-center mt-3">DISPLAY ALL IMAGES FROM DIRECTORY/FOLDER</h3>
  <h5 class="text-center">Responsive Grid Image Gallery Using PHP AND BOOTSTRAP</h5>
    <?php
    // Enter your Directry/Folder Name I have Given Folder Name As Images
      $files = scandir('images/');
      echo "<div class='row'>";
      foreach ($files as $file) {
        if ($file !== "." && $file !== "..") {
          // Give Image source -- src='folder-name/$file'
          echo "<div class=' col-6 col-sm-4 col-md-3 mt-3 mb-3'><img src='images/$file' alt='image' width='100%' /></div>";
        }
      }
      echo "</div>";
    ?>
  </div>

</body>
</html>