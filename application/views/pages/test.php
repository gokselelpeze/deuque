<?php
$array = json_decode(json_encode($result), true);
print_r($array);
    foreach ($array as $row)
{
    echo $row['questionnaire_id'] . "\r\n";
    echo $row['user_id'] . "\r\n";
    echo $row['questionnaire_name'] . "\r\n";
    echo "<br>";
}