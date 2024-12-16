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
    if(!filter_has_var(INPUT_POST, 'submit') || 
      filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT) != 1 ){
         require VIEWS_DIR.'recipes/modify.php';
    }
    else{
        $id = get_p();
        $recipenameM = filter_input(INPUT_POST, 'recipename', FILTER_SANITIZE_STRING);
        $ingredientsM = filter_input(INPUT_POST, 'ingredients', FILTER_SANITIZE_STRING);
        $servingsM = filter_input(INPUT_POST, 'servings', FILTER_VALIDATE_INT);
        $instructionsM = filter_input(INPUT_POST, 'instructions', FILTER_SANITIZE_STRING);

        $result = executeStatement('UPDATE recipes SET recipename = :recipenameM, ingredients = :ingredientsM, servings = :servingsM, instructions = :instructionsM WHERE recipe_id = :recipe_id', 
        [':recipenameM' => $recipenameM, ':ingredientsM' => $ingredientsM, ':servingsM' => $servingsM, ':instructionsM' => $instructionsM, ':recipe_id' => $id]);
    }
   
}
function add(){
      if(!filter_has_var(INPUT_POST, 'submit') || 
      filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT) != 1 ){
         require VIEWS_DIR.'recipes/add.php';
    }
    else{
        $recipenameF = filter_input(INPUT_POST, 'recipename', FILTER_SANITIZE_STRING);
        $ingredientsF = filter_input(INPUT_POST, 'ingredients', FILTER_SANITIZE_STRING);
        $servingsF = filter_input(INPUT_POST, 'servings', FILTER_VALIDATE_INT);
        $instructionsF = filter_input(INPUT_POST, 'instructions', FILTER_SANITIZE_STRING);

        $result = executeStatement('INSERT INTO recipes (recipename, ingredients, servings, instructions) values (:recipenameF, :ingredientsF, :servingsF, :instructionsF)', 
        [':recipenameF' => $recipenameF, ':ingredientsF' => $ingredientsF, ':servingsF' => $servingsF, ':instructionsF' => $instructionsF,]); 
    }
}
?>