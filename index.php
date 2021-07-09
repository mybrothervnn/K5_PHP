<?php
// supaisu 5
// imo 2
// niku 2
// mizu 3
$arr = array();
$arr["supaisu"] = 5;
$arr["imo"] = 2;
$arr["niku"] = 2;
$arr["mizu"] = 3;

print_r($arr["niku"]);
foreach($arr as $k => $v){
    echo "key la: $k value la: $v <br>";
}

?>