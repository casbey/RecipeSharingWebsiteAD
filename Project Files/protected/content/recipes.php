<?php

$public_functions = ['lista', 'more', 'del', 'modify', 'add'];
require_once CORE_DIR.'database_manager.php';

function lista(){
    $query = 'SELECT * FROM recipes';
    $result = select($query);
    require_once VIEWS_DIR.'recipes/lista.php';
}
function get_p(){
     if(!filter_has_var(INPUT_GET, 'P')){
        die('Incorrect parameter.');
    }
    
    $id = filter_input(INPUT_GET, 'P', FILTER_VALIDATE_INT);
    if ($id === FALSE){
        die('Incorrect parameter.');
    }
    
    return $id;
}
function more(){
    $id = get_p();
    
    $result = select('SELECT * FROM recipes WHERE recipe_id = :recipe_id', TRUE, ['recipe_id' => $id]);
    if($result === FALSE){
        die('No such record.');
    }
    
    require_once VIEWS_DIR.'recipes/more.php';
}
function del(){
    $id = get_p();
    $success = executeStatement('DELETE FROM recipes WHERE recipe_id = :recipe_id', ['recipe_id' => $id]);
    
    if($success === TRUE){
        header('Location:'.BASE_URL.'?E=recipes&M=lista');
    }
    else{
        die('Deletion not successful.');
    }
}
function modify(){
    echo 'modify!';
}
function add(){
      if(!filter_has_var(INPUT_POST, 'submit') || 
      filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT) != 1 ){
         require VIEWS_DIR.'recipes/add.php';
    }
    else{
        $recipenameT = filter_input(INPUT_POST, 'recipename', FILTER_SANITIZE_STRING);
        $ingredientsT = filter_input(INPUT_POST, 'ingredients', FILTER_SANITIZE_STRING);
        $servingsT = filter_input(INPUT_POST, 'servings', FILTER_VALIDATE_INT);
        $instructionsT = filter_input(INPUT_POST, 'instructions', FILTER_SANITIZE_STRING);
    }
    $result = executeStatement('INSERT INTO recipes (recipename, ingredients, servings, instructions) values (recipenameT, ingredientsT, servingsT, instructionsT)', 
            ['recipenameT' => $recipenameT, 'ingredientsT' => $ingredientsT, 'servingsT' => $servingsT, 'instructionsT' => $instructionsT]);
}
?>