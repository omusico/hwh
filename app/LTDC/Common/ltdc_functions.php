<?php

namespace LTDC\Common;

function getDOBYearRange(){
    $return = '<option value=""></option>';
    for($i=1940;$i<(date('Y')-16);$i++) {
        $return .= '<option value="' . $i . '">' . $i . '</option>';
    }
    return $return;
}