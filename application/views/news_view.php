<h1>Новости</h1>

<?php foreach ($data[0] as $row): ?>
    <div class="card">
        <h4><?= $row['title'] ?></h4>
        <hr>
        <p><?= $row['text'] ?></p>
        <hr>
        <small>Author: <?= $row['author']; ?></small><br>
        <hr>
        <small>Date: <?= $row['date']; ?></small>
        <?php if(Session::GetUser()): ?>
        <form  method="post" class="comm">
            <h4>Форма добавления комментария</h4>
            <input type="hidden" name="post_id" value="<?= $row['id']; ?>">
            <textarea name="text" id="" cols="40" rows="5" placeholder="Введите коментарий"></textarea><br>
            <button type="submit">добавить</button>
        </form>
        <?php endif; ?>

            <?php if($data[1]->num_rows > 0): ?>

        <div style="max-height: 400px;overflow-y: auto;" class="comment_section">
            <h4>Коментарии:</h4>
                <?php foreach ($data[1] as $el): ?>
                    <?php if($el['news_id'] == $row['id']): ?>
                        <div class="comment">
                            <?php if($el['user_id'] == Session::GetUser()['id']): ?>
                                <form action="" style="float: right">
                                    <input type="hidden" name="post_id" value="<?= $el['id']; ?>">
                                    <button type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                            <?php endif; ?>
                            <p><?= $el['text']; ?></p>
                            <small>Author: <?= $el['author']; ?></small>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
        </div>
            <?php endif; ?>

    </div>

<?php endforeach; ?>

<style>
    .section{
        height: 500px;
        overflow-y: auto;
    }
    .comm{
        border: 1px solid black;
        padding: 5px;
    }
    .card {
        border: 1px double rgba(0, 0, 0, .1);
        box-shadow: inset 0px 0px 0px 1px #fff;
        padding: 10px;
        background-color: rgba(0, 0, 0, .05);
        margin-bottom: 10px;
        overflow-wrap: break-word;
    }
    .comment{
        border: 1px dashed #0a94ff;
        padding: 5px;
    }
    /*.comment_section::-webkit-scrollbar {*/
    /*    width: 10px; !* ширина для вертикального скролла *!*/
    /*    height: 8px; !* высота для горизонтального скролла *!*/
    /*    background-color: #e7e7e7;*/
    /*}*/

    /*!* ползунок скроллбара *!*/
    /*.comment_section::-webkit-scrollbar-thumb {*/
    /*    background-color: #757575;*/
    /*    border-radius: 9em;*/
    /*    box-shadow: inset 1px 1px 5px #f3faf7;*/
    /*}*/

    /*.comment_section::-webkit-scrollbar-thumb:hover {*/
    /*    background-color: #b1b1b1;*/
    /*}*/
</style>


