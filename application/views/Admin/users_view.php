<div style="margin-top: 10px;">
    <h2>Пользователи</h2>

    <?php if($data): ?>
        <table>
            <tr>
                <td>id</td>
                <td>username</td>
                <td>email</td>
                <td>password</td>
                <td>status</td>
                <td>Действия</td>
            </tr>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td style="display:flex;flex-direction: row;justify-content: center" >
                        <div>
                            <form action="/admin/delete" method="post">
                                <input type="hidden" name="type" value="users">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <button  style="background: none;border: none; cursor: pointer;width:25px;height:25px;font-size: 20px;" type="submit"> <i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>&nbsp;
                        <div>
                            <a href="/admin/edit/?table=users&id=<?= $row['id']; ?>"><i style="width:25px;height:25px;font-size: 20px;" class="far fa-edit"></i></a>
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
