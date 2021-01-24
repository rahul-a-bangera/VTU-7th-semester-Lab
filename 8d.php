<!-- Addition of two matrices. -->
<?php
$mat1=Array(Array(1,2),Array(3,4),Array(5,6));
$mat2=Array(Array(1,3),Array(3,5),Array(5,7));
$res=Array();

echo "<html><head><title>Matrix Addition</title></head>";

if(count($mat1[0])!=count($mat2[0]) && count($mat1)!=count($mat2) ){
    echo "<h1>incomplatible matrices </br></h1>";
    exit(0);
}
echo "<h1>Matrix A: </br>";
for($i=0;$i<count($mat1);$i++){
    for($j=0;$j<count($mat1[0]);$j++){
        echo $mat1[$i][$j]."  ";
    }
    echo "</br>";
}
echo "</h1>";

echo "<h1>Matrix B: </br>";
for($i=0;$i<count($mat2);$i++){
    for($j=0;$j<count($mat2[0]);$j++){
        echo $mat2[$i][$j]."  ";
    }
    echo "</br>";
}
echo "</h1>";

for($i=0;$i<count($mat1);$i++){
    for($j=0;$j<count($mat1[0]);$j++){
        $res[$i][$j]=$mat1[$i][$j] + $mat2[$i][$j];
    }
}

echo "<h1>A+B is : </br>";
for($i=0;$i<count($res);$i++){
    for($j=0;$j<count($res[0]);$j++){
        echo $res[$i][$j]." ";
    }
    echo "</br>";
}
echo "</h1></html>";
?>
