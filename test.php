<?php
$t1 = microtime(true);
function tetst($a){
$myfile = fopen("/server/cop/data.txt", "a") or die("Unable to open file!");
$txt = $a."\r\n";
fwrite($myfile, $txt);
fclose($myfile);
echo $a.'<br/>';
}
for ($i=0; $i <5000 ; $i++) { 
	cop_create('tetst',$i);
}
$t2 = microtime(true);
echo 'cop协程扩展耗时为：'.(($t2-$t1)*1000).':ms';

