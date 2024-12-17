<br/>
<h2 class="text-center mt-4 mb-4 fw-bold">Search results</h2>
<?php if($result === NULL || empty($result)): ?>
    <div class="alert alert-warning text-center" role="alert">
        <i class="bi bi-exclamation-circle"></i> No recipes found. Try searching for something else!
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
                <a class="btn btn-info btn-sm me-2" href="<?=BASE_URL?>?E=recipes&M=more&P=<?=$row['recipe_id']?>"> <i class="bi bi-eye"></i>More</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php endif; ?>