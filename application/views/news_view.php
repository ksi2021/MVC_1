<h1>Новости</h1>
<div class="section">
<?php foreach ($data as $row): ?>
    <div class="card">
        <h4><?= $row['title'] ?></h4>
        <hr>
        <p><?= $row['text'] ?></p>
        <hr>
        <small>Author: <?= $row['author']; ?></small><br>
        <hr>
        <small>Date: <?= $row['date']; ?></small>
    </div>
<?php endforeach; ?>
</div>
<style>
    .section{
        height: 500px;
        overflow-y: auto;
    }
    .card {
        border: 1px double rgba(0, 0, 0, .1);
        box-shadow: inset 0px 0px 0px 1px #fff;
        padding: 10px;
        background-color: rgba(0, 0, 0, .05);
        margin-bottom: 10px;
        overflow-wrap: break-word;
    }
</style>


