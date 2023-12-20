<?php
    function checkEmpty($arr) {
        $result = true;

        foreach ($arr as $check) {

            $check = preg_replace('/\s+/', ' ', $check);
            if(empty($check) || $check == " "){
                 $result = false;
            }

        }
        return $result;
    }
    
    function checklength($arr, $mode) {
        $result = true;
        if ($mode == "short"){ 
            foreach($arr as $value) {
                if (strlen($value) > 60) {
                    $result = false;
                }
            }
        }elseif($mode == "long") {
            foreach($arr as $value) {
                if (strlen($value) > 140) {
                    $result = false;
                }
            }
        }elseif($mode == "extLong") {
            foreach($arr as $value) {
                if (strlen($value) > 500) {
                    $result = false;
                }
            }
        }else{ echo "Invalid mode"; }
        return $result;
    }
?>