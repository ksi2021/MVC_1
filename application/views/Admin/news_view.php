
<form method="post" style="margin-bottom: 10px">

    <h2>Форма добавления</h2>
    <div class="form-group" >
        <label for="email">Title</label>
        <input type="text" class="form-control" id="email" name="title" aria-describedby="emailHelp"
               placeholder="Enter title" ">
    </div>

    <div class="form-group">
        <label for="text">Info</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" style="width:90px;height: 20px; background-color: white;border: 1px solid grey;cursor: pointer">Add news</button>

</form><hr>
<div style="margin-top: 10px;">
    <h2>Новости</h2>

    <?php if($data): ?>
        <table>
            <tr>
                <td>Дата добавления</td>
                <td>Заголовок</td>
                <td>Автор</td>
                <td>Описание</td>
                <td>Действия</td>
            </tr>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['date'] ?></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['author'] ?></td>
                    <td style="max-width: 300px;"><?= $row['text'] ?></td>
                    <td style="display:flex;flex-direction: row;justify-content: center" >
                        <div>
                            <form action="/admin/delete" method="post">
                                <input type="hidden" name="type" value="news">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <button  style="background: none;border: none; cursor: pointer;width:25px;height:25px;font-size: 20px;" type="submit"> <i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>&nbsp;
                        <div>
                            <a href="/admin/edit/?table=news&id=<?= $row['id']; ?>"><i style="width:25px;height:25px;font-size: 20px;" class="far fa-edit"></i></a>
                        </div>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>

<style>
    td{
        overflow-wrap: break-word;
    }
</style>
