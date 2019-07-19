<?php

$res = array("Maths"=>95, "Physics"=>90,   
                  "Chemistry"=>96, "English" => array("set1"=>"78",
                "set2"=>80),   
                  "Computer"=>98);  
echo (json_encode($res));



?>