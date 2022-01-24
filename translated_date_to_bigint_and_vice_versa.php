<?php
function switch_date_month($DateTime){
    $array = explode('/', $DateTime);
    $tmp = $array[0];
    $array[0] = $array[1];
    $array[1] = $tmp;
    unset($tmp);
    $result = implode('/', $array);
    return $result;
}
echo date("d/m/Y");
echo '<br>';
echo switch_date_month(date("d/m/Y"));
echo '<br>';
$a1 = strtotime(switch_date_month(date("d/m/Y")));
echo $a1;
echo '<br>';
echo date("d/m/Y",$a1);
?>
