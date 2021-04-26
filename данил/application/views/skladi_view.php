<div>


<?php

use function PHPSTORM_META\type;

if($data->num_rows == 0): ?>
    null \ <a href="/company/add_sklad">create new sklad</a>
<?php else: ?> 
    <?php foreach($data as $element): ?>
        <div class="card p-2 text-center">
            <h2><a href="/company/products/?href=<?= $element['id'];?>"><?= $element['name']; ?><i class="fas fa-warehouse"></i></a></h2>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</div>

<style>
    a{
        text-decoration: none !important;
    }
</style>