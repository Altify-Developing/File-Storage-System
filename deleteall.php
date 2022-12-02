<?php
$files = glob('uploads/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}
$files2 = glob('pages/*'); // get all file names
foreach($files2 as $file2){ // iterate files
  if(is_file($file2)) {
    unlink($file2); // delete file
  }
}
echo "Deleted Successfully!";
?>