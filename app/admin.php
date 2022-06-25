<?php
echo "<ul>";
$filename = 'list.txt';
$delim = ",";
    $row = 0;
    $dump = array();
    $f = fopen ($filename,"r");
    $size = filesize($filename)+1;
    while ($data = fgetcsv($f, $size, $delim)) {
        echo "<li><a href='pkill.php?pid=".$data[0]."'>[".$data[0]."]</a>";
        echo " <a href='http://185.193.126.191/:".$data[1]."'>".$data[1]."</a></li>";
        $row++;
    }
    fclose ($f);
echo "</ul>";
?>
