<!-- Write a PHP program named states.py that declares a variable states with value 
"Mississippi Alabama Texas Massachusetts Kansas". Write a PHP program that does the following:
 Search for a word in variable states that ends in xas. Store this word in element 0 of a list
named statesList.
 Search for a word in states that begins with k and ends in s. Perform a case-insensitive comparison.
[Note: Passing re.Ias a second parameter to method compile performs a case-insensitive comparison.] 
Store this word in element1 of statesList.
 Search for a word in states that begins with M and ends in s. Store this word in element 2 of the list.
 Search for a word in states that ends in a. Store this word in element 3 of the list. -->
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