<br/>
<h2 class="text-center mt-4 mb-4 fw-bold" id="main_title">List of recipes</h2>
<?php if($result === NULL || empty($result)): ?>
    <div class="alert alert-warning text-center" role="alert">
        <i class="bi bi-exclamation-circle"></i> No recipes found!
    </div>
<?php else: ?>
<div class="container">
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as &$row): ?>
        <tr>
            <td><?=$row['recipename']?></td>
            <td>
                <a class="btn btn-info btn-sm me-2" href="<?=BASE_URL?>?E=recipes&M=more&P=<?=$row['recipe_id']?>"><i class="bi bi-eye"></i>More</a>
                <a class="btn btn-warning btn-sm me-2" href="<?=BASE_URL?>?E=recipes&M=modify&P=<?=$row['recipe_id']?>"><i class="bi bi-pencil-square"></i>Modify</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this recipe?');" href="<?=BASE_URL?>?E=recipes&M=del&P=<?=$row['recipe_id']?>"><i class="bi bi-trash"></i> Delete</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<div class="container text-center mt-5">
    <a class="btn btn-success btn-lg shadow-sm" href="<?=BASE_URL?>?E=recipes&M=add"><i class="bi bi-plus-circle"></i>Add New Recipe</a>
</div>
<?php endif; ?>