<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>4</title>
  <link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.min.css">
  <style>
    .image {
      height: 200px;
    }
  </style>
</head>
<body>
<div id="lightgallery">
<?php
  function validImageFormat($files) {
    $result = [];
    for ($i = 0; $i < count($files); $i++) {
      if (preg_match("/.*\.(jpe?g|png|gif)$/", $files[$i])) {
        $result[] = $files[$i];
      }
    }
    return $result;
  }
  $dir = 'images';
  $files = array_slice(scandir($dir), 2);
  $files = validImageFormat($files);
  for($i = 0; $i < count($files); $i++) { ?>
    <a href="<?=$dir."/".$files[$i]?>">
      <img class="image" src="<?=$dir."/".$files[$i]?>"/>
    </a>
  <?php } ?>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="uploadfile">
  <input type="submit" value="Загрузить">
</form>
<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.min.js"></script>
<script>
  lightGallery(document.getElementById('lightgallery'));
</script>
</body>
</html>
