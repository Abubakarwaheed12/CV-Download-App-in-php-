<?php
   $file=$_GET['file'] . ".pdf";

      header("Content-Disposition: attachment; filename=" . urldecode($file));
      $fb=fopen($file , "r");

      while(!feof($file)){
        echo fread($fb ,200);
      }

?>