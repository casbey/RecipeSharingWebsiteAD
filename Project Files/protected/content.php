<?php
    if(!filter_has_var(INPUT_GET, 'E')){
        $unit = START_CONTENT;
    }
    else {
        $unit = filter_input(INPUT_GET, 'E', FILTER_SANITIZE_STRING);
    }
    
    $unitAccess = CONTENT_DIR.$unit.'.php';
    
    if(!file_exists($unitAccess)){
        header('Location: '.BASE_URL);
    }
    
    require_once $unitAccess;
    
    $operation = 'lista';
    if(filter_has_var(INPUT_GET, 'M')){
    $local_operation = filter_input(INPUT_GET, 'M', FILTER_SANITIZE_STRING);
    
        if($local_operation === FALSE){
            header('Location: '.BASE_URL);
        }

        if(!function_exists($local_operation) || !in_array($local_operation, $public_functions)){
            header('Location: '.BASE_URL);
        }

        $operation = $local_operation;
        
        $operation();
    }
    
?>
