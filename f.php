<?php
file_put_contents('files.txt',$_POST['t1'] . $_POST['t2']);
echo "inserted";
$f=fopen('file.txt','r');
echo fgets($f) . filesize("files.txt");

?>
