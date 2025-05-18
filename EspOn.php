<?php

$text = "Line"; 
$filename = "Esp"; 
unlink($filename);$fh=fopen($filename,"a");
fwrite($fh, $text); fclose($fh);

     echo "
<script>window.close();</script>";

?>