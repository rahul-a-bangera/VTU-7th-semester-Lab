<html>
<head>
<title>Pattern matching using Python</title>
</head>
<body>
<?php
$res=shell_exec("python states.py");
$states=explode("\n",$res);
echo "Statement is: <b>".$states[4]."</b><br/>";
echo "word that end with xas: <b>".$states[0]."</b><br/>";
echo "word that start with k and ends with s (case insensitive) <b>".$states[1]."</b><br/>";
echo "word that start with m and ends with s <b>".$states[2]."</b><br/>";
echo "word that end with a : <b>".$states[3]."</b><br/>";
?>
</body>
</html>