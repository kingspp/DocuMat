<?php
//error_reporting(E_ALL);
//var_dump($_SERVER);
$post_head = $_POST['head'];
$post_data = $_POST['data'];
if (!empty($post_data)) {
    //$dir = 'D:/';
    $file = uniqid().getmypid();
    $filename = $file.'.txt';
    $handle = fopen($filename, "w");
    fwrite($handle, $post_data);
    fclose($handle);
    echo $file;
}
?>