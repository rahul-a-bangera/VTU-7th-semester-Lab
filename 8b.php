<!-- Find the transpose of a matrix. -->
<?php
echo "<html><head><title>Transpose of matrix</title></head>";
$mat=Array(Array(1,2),Array(4,5),Array(7,8));
$transpose=Array();
echo "<body><h1>Matrix is: </br>";
for($i=0;$i<count($mat);$i++){
    for($j=0;$j<count($mat[0]);$j++){
        echo $mat[$i][$j]." ";

    }
    echo "</br>";
}
echo "</h1>";
echo "<h1>The Transpose matrix is </br>";
for($i=0;$i<count($mat);$i++){
    for($j=0;$j<count($mat[0]);$j++){
        $transpose[$j][$i]= $mat[$i][$j];
    }
}
for($i=0;$i<count($transpose);$i++){
    for($j=0;$j<count($transpose[0]);$j++){
        echo $transpose[$i][$j]." ";

    }
    echo "</br>";
}
echo "</h1></body>";
?>