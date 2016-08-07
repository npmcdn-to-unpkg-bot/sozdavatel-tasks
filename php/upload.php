<?php
header('Refresh: 1; url=4.php');

$uploadfile = $_FILES['uploadfile'];
$uploadfiledir = './images/'.basename($uploadfile['name']);
$ext = pathinfo($uploadfiledir)['extension'];
$type = exif_imagetype($uploadfile['tmp_name']);
$whitelist = ['jpg','png','gif'];

if (!in_array($ext, $whitelist)) {
  echo 'Неверный формат изображения!';
  exit;
}

if (!($type >= 1 && $type <= 17)) {
  echo 'Неверный тип изображения!';
  exit;
}

if (move_uploaded_file($uploadfile['tmp_name'], $uploadfiledir)) {
  echo "Файл успешно загружен!";
} else {
  echo "Ошибка! Не удалось загрузить файл на сервер!";
  exit;
}
?>
