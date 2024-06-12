<?php

require 'I18N/Arabic.php';
   
$IsRounded = false;   

$Arabic = new \ArPHP\I18N\Arabic();
function textPrint($Arabic,$text,$index_image,$fontsize,$font_path,$xa,$ya,$color)
{
  $text = $Arabic->utf8Glyphs($text);
  $image_width = imagesx($index_image);
  $text_box = imagettfbbox($fontsize, 0, $font_path, $text);
  $x = ceil(($xa - $text_box[2]) / 2);
  $y = $ya;
  imagettftext($index_image, $fontsize, 0, $x, $y, $color, $font_path, $text);
}

function textPrintRTL($Arabic,$text,$index_image,$fontsize,$font_path,$xa,$ya,$color)
{
  $text = $Arabic->utf8Glyphs($text);
  $dimensions = imagettfbbox($fontsize, 0, $font_path, $text);
  $textWidth = abs($dimensions[4] - $dimensions[0]);
  $x = $xa - $textWidth;
  $y = $ya;
  imagettftext($index_image, $fontsize, 0, $x, $y, $color, $font_path, $text);
}

function countMoment()
{
  $use = file_get_contents('use.txt');
  $use++;
  $fp = fopen('use.txt', 'w');
  fwrite($fp, $use);
  fclose($fp);
}


function rounded($filename,$newwidth,$newheight){
  $image_s = imagecreatefromstring(file_get_contents($filename));
  $width = imagesx($image_s);
  $height = imagesy($image_s); 
  $image = imagecreatetruecolor($newwidth, $newheight);
  imagealphablending($image, true);
  imagecopyresampled($image, $image_s, 0, 0, 0, 0, $newwidth, $newheight, $width, $height); 
  $mask = imagecreatetruecolor($newwidth, $newheight); 
  $transparent = imagecolorallocate($mask, 255, 255, 255);
  imagecolortransparent($mask,$transparent); 
  imagefilledellipse($mask, $newwidth/ 2, $newheight/2, $newwidth, $newheight,$transparent);
  $red = imagecolorallocate($mask, 0, 0,0);
  imagecopymerge($image, $mask, 0, 0, 0, 0, $newwidth,$newheight,100);
  imagecolortransparent($image,$red);
  imagefill($image, 0, 0, $red); 
  imagepng($image,$filename);
  
  
  }
  function nonRounded($filename,$newwidth,$newheight){
  $image_s = imagecreatefromstring(file_get_contents($filename));
  $width = imagesx($image_s);
  $height = imagesy($image_s); 
  $image = imagecreatetruecolor($newwidth, $newheight);
  imagealphablending($image, true);
  imagecopyresampled($image, $image_s, 0, 0, 0, 0, $newwidth, $newheight, $width, $height); 
  $mask = imagecreatetruecolor($newwidth, $newheight); 
  $transparent = imagecolorallocate($mask, 255, 255, 255);
  imagecolortransparent($mask,$transparent); 
  imagefilledellipse($mask, $newwidth/ 2, $newheight/2, $newwidth, $newheight,$transparent);
  $red = imagecolorallocate($mask, 0, 0,0);
  imagepng($image,$filename);
  }
  




// header('Content-Type: image/png');


function upload($fname,$uname,$up_img_w,$up_img_h){
$target_dir = "uploads/";
$target_file = $target_dir . $fname;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$check = getimagesize($_FILES[$uname]["tmp_name"]);
if ($check !== false) {
  $uploadOk = 1;
} else {
  // echo "File is not an image.";
  $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES[$uname]["size"] > 5000000000000) {
  // echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES[$uname]["tmp_name"], $target_file)) {

  } 
  else {

  }
}

if($_FILES[$uname]["error"] == 0) {
  



  $in = $target_dir . $fname;

   
  $IsRounded = false;   
  if($IsRounded == true){
    rounded($in, $up_img_w,$up_img_h);
  }
  else{
    nonRounded($in, $up_img_w,$up_img_h);

  }
  


  }
  else{
    $in = $target_dir . $fname;

  }
}
