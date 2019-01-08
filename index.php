<?php
$url = "localhost/page.php?e=hello,world,how,are,you";
$parts = parse_url($url);
parse_str($parts['query'], $query);
$array = (explode(',',$query['e']));
foreach ($array as $item) {
   echo "<li>$item</li>";
}
?>
