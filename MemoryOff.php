<?php

$text = "false"; 
$filename = "Memory"; 
unlink($filename);$fh=fopen($filename,"a");
fwrite($fh, $text); fclose($fh);

     echo "
<script>window.close();</script>";

?>