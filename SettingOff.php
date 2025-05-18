<?php

$text = "false"; 
$filename = "Setting"; 
unlink($filename);$fh=fopen($filename,"a");
fwrite($fh, $text); fclose($fh);

     echo "
<script>window.close();</script>";

?>