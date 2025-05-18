<?php

$text = "false"; 
$filename = "SilentAim"; 
unlink($filename);$fh=fopen($filename,"a");
fwrite($fh, $text); fclose($fh);

    echo "
<script>window.close();</script>";

?>