<?php
session_start();
$rannum = $_SESSION["rannum"];
$A =0;
$B =0;
//echo $_POST["N"];
$num= $_POST['num'];
$num1= $_POST['num1'];
$num2= $_POST['num2'];
$num3= $_POST['num3'];

//玩家猜的數字
$clinum =[$num,$num1,$num2,$num3];   
//解答
$ansnum=str_split($string);

// for($i=0;$i<4;$i++)
// {
//     if($clinum[$i]==$ansnum[$i])
//     {
//         $A++;
//     }
// }
// for($i=0;$i<4;$i++)
// {
//     for($j=0;$j<4;$j++)
//     {
//         if($clinum[$i]==$ansnum[$j+1])
//         {
//              $B ++;
//         }
//     }
// }
echo $A."A".$B."B";

return;
