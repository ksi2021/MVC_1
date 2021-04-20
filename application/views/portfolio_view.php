<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr>
        <td>Год</td>
        <td>Проект</td>
        <td>Описание</td>
    </tr>
    <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['Year'] ?></td>
            <td><?= $row['Name'] ?></td>
            <td><?= $row['Info'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</p>
