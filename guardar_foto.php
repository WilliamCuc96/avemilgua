<?php
/*
    Tomar una fotografía y guardarla en un archivo
    @date 2017-11-22
    @author parzibyte
    @web parzibyte.me/blog
*/

// baseFromJavascript will be the javascript base64 string retrieved of some way (async or post submited)
$baseFromJavascript = $_POST['base64']; //your data in base64 'data:image/png....';
if ($baseFromJavascript == "" || $baseFromJavascript == null || !$baseFromJavascript) {
$baseFromJavascript = json_decode(file_get_contents('php://input'), true);
}
// We need to remove the "data:image/png;base64,"
// $base_to_php = explode(',', $baseFromJavascript);
// // the 2nd item in the base_to_php array contains the content of the image
// $data = base64_decode($base_to_php[1]);
// // here you can detect if type is png or jpg if you want
// $filepath = "foto_" . uniqid() . ".png"; // or image.jpg
//
// // Save the image in a defined path
// file_put_contents($filepath,$data);

echo base64_decode($base_to_php);
?>
