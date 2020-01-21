<?php
function compress($source, $destination, $quality) {
  $info = getimagesize($source);
  if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);
  elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);
  elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);
  imagejpeg($image, $destination, $quality);
  return $destination;
}

$source_img = 'ảnh_cần_nén.png';
$destination_img = 'ảnh_sau_khi_nén';

$d = compress($source_img, $destination_img, 10); //10 - càng thấp thì chất lượng ảnh càng kém =>Kb ảnh càng giảm.
