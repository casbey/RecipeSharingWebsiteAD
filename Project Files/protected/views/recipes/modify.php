<br/>
<h2>Modify Recipe<h2>
<form action="" method="POST" accept-charset="UTF-8">
    <label for="recipename_id">Recipe name:</label>
    <input type="text" name="recipename" required="required" id="recipename_id" minlength="3" maxlength="20"/><br/>
    
    <label for="ingredients_id">Ingredients:</label>
    <input type="text" name="ingredients" required="required" id="ingredients_id" minlength="3" maxlength="50"/><br/>

    <label for="servings_id">Number of servings:</label>
    <input type="number" name="servings" required="required" min="1" max="30" id="servings_id" minlength="1" maxlength="3"/><br/>

    <label for="instructions_id">Instructions:</label>
    <input type="text" name="instructions" required="required" id="instructions_id" minlength="10" maxlength="1000"/><br/>

    <button type="submit" name="submit" value="1">Submit</button>
</form>