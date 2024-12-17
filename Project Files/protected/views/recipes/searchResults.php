<br/>
<h2>Search results</h2>
<?php if($result === NULL || empty($result)): ?>
<p>No recipes found</p>
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
                <a href="<?=BASE_URL?>?E=recipes&M=more&P=<?=$row['recipe_id']?>">More</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php endif; ?>