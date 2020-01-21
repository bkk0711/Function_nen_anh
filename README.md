# Function_nen_anh
$source_img = 'ảnh_cần_nén.png';
$destination_img = 'ảnh_sau_khi_nén';

$d = compress($source_img, $destination_img, 10); //10 - càng thấp thì chất lượng ảnh càng kém =>Kb ảnh càng giảm.
