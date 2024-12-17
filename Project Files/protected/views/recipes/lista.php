<br/>
<h2>List of recipes<h2>
<a href="<?=BASE_URL?>?E=recipes&M=add">Add New Recipe</a>
<?php if($result === NULL || empty($result)): ?>
<p>No recipes found</p>
<?php else: ?>
<div class="container">
<table>
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
                <a href="<?=BASE_URL?>?E=recipes&M=modify&P=<?=$row['recipe_id']?>">Modify</a>
                <a href="<?=BASE_URL?>?E=recipes&M=del&P=<?=$row['recipe_id']?>">Delete</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<?php endif; ?>