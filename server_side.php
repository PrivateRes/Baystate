<html>
<body>
<head>
    <title>Barcode scanned!</title>
</head>
<h2>Barcode scanned!</h2>
You can view the result below:
<br>
<?php
$code = $_GET['result'];
$type = $_GET['format'];
echo "Code: $code<br>";
echo "Type: $type";
echo "<br><br>";
echo "<a href=\"http://www.google.com/search?q=$code\">Perform a google search for result</a>";
?>
</body>
</html>