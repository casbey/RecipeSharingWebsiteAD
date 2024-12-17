<br/>
<!-- Main Container -->
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <!-- Card Wrapper -->
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Submit Recipe<h2>
                </div>
                <div class="card-body">
                <!-- Recipe Submission Form -->
                <form action="" method="POST" accept-charset="UTF-8">
                    <div class="mb-3">
                      <label for="recipename_id" class="form-label">Recipe name:</label>
                      <input type="text" placeholder="Enter the recipe title" class="form-control" name="recipename" required="required" id="recipename_id" minlength="3" maxlength="20"/><br/>
                    </div>   

                    <div class="mb-3">
                        <label for="ingredients_id" class="form-label">Ingredients:</label>
                        <input type="text" class="form-control" name="ingredients" required="required" id="ingredients_id" minlength="3" maxlength="50" placeholder="List the ingredients, separated by commas"/><br/>
                    </div>

                    <label for="servings_id">Number of servings:</label>
                    <input type="number" name="servings" required="required" min="1" max="30" id="servings_id" minlength="1" maxlength="3"/><br/>
                    <br/>
                    
                    <div class="mb-3">
                        <label for="instructions_id">Instructions:</label>
                        <textarea class="form-control" placeholder="Write step-by-step instructions" rows="6" type="text" name="instructions" required="required" id="instructions_id" minlength="10" maxlength="1000"></textarea><br/>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="submit" value="1">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>