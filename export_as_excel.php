<?php

$list[] = array('name','maths','physics','chemistry','biology','english','islamyath');
$list[] = array("kashif",78,88,90,76,80,85);
$list[] = array("wajid",93,86,76,77,64,88);
$list[] = array("danish",75,82,91,72,73,66);
$list[] = array("rizwan",77,75,67,84,92,94);
  
    $file_name = "export_as_excel.csv";
  $fp = fopen($file_name, 'w');

  foreach ($list as $fields) {
    fputcsv($fp, $fields);
  }
  
  fclose($fp);
  
 header('Content-Type: application/octet-stream');
 header("Content-Transfer-Encoding: Binary"); 
 header("Content-disposition: attachment; filename=\"" . basename($file_name) . "\""); 
 readfile($file_name); // do the double-download-dance (dirty but worky)

?>