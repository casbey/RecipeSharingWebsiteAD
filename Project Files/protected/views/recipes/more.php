<br/>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <!-- Card for Recipe Details -->
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4"><?=$result['recipename']?></h3>

                    <div class="mb-4">
                        <h4 class="fw-bold">Ingredients</h3>
                        <p class="card-text"><?=$result['ingredients']?></p>
                    </div>

                    <div class="mb-4">
                        <h4 class="fw-bold">Number of servings</h3>
                        <p class="card-text"><?=$result['servings']?></p>
                    </div>

                    <div class="mb-4">
                        <h4 class="fw-bold">Instructions</h3>
                        <p class="card-text"><?=$result['instructions']?></p>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</div>