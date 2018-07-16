<?php
$pulse=$_POST['hr'];
$t=$_POST['tbb'];
$write="pulse:". $pulse ."bpm,time b/t beates: " . $t ." milliseconds" ;
file_put_contents('data.txt',$write,FILE_APPEND);
?>