                                                                                              suunnitelma.txt *                                                                                                          
<?php
$tagitus = $_GET['logotus'];

echo $tagitus. ":<br />\n";
$exif = exif_read_data($tagitus, 'IFD0');
echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

$exif = exif_read_data($tagitus, 0, true);
echo $tagitus. ":<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
?>
