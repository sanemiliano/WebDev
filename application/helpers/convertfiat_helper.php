<?php
function convertFiat($amount, $from, $to){
    switch ($from) {
        case 'euro':
            if($to == 'peso'){
                return $amount * 21.83;
            }
            else{
                return $amount * 1.13;
            }
            break;
        case 'peso':
            if($to == 'euro'){
                return $amount * .046;
            }
            else{
                return $amount * .052;
            }
            break;
        case 'dollar':
        if($to == 'euro'){
            return $amount * .89;
        }
        else{
            return $amount * 19.39;
        }
            break;
    }
}
?>