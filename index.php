List all files:

<?php
$directory = "/var/nfs/test/";

// Open a directory, and read its contents
if (is_dir($directory)){
  if ($opendirectory = opendir($directory)){
    while (($file = readdir($opendirectory)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($opendirectory);
  }
}
?>
