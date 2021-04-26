<h1 class="text-center">Склад: <?= $data[1]['name']; ?></h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">имя</th>
      <th scope="col">описание</th>
      <th scope="col">цена</th>
      <th scope="col">колличество</th>
      <th scope="col">изображение</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($data[0] as $key => $value): ?>
<tr>
      <th scope="row"><?= $value['id']; ?></th>
      <td><?= $value['name']; ?></td>
      <td><?= $value['body']; ?></td>
      <td><?= $value['price']; ?></td>
      <td><?= $value['count']; ?></td>
	  <td> <img src="/<?= $value['image']; ?>" width="100" alt=""></td>
    </tr>

<?php endforeach;?>
</tbody>
</table>