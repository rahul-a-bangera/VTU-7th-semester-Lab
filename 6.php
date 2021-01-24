<!-- Write a PHP program to keep track of the number of
visitors visiting the web page and to display this count
of visitors, with proper headings -->
<html>
<head>
<title>Visitors Count</title>
<style type="text/css">
h1,h2
{
    text-align: center
}
</style>
</head>
<body>
<h1>Welcome to my Web Page</h1>
<h2>
<?php
$file="count.txt";
$count=strval(file_get_contents($file));
file_put_contents($file,$count + 1);
echo("you are visitor number: ".$count);
?></h2>
</body>
</html>