
<h2>3. Reverse Sting</h2>
<?php 
$str = 'ABCD';
$strReversed = '';
$length = strlen($str);
for($i=$length-1; $i >= 0; $i--){
    $strReversed .= $str[$i];
}
echo $strReversed;
 ?>