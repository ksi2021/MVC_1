<div>
    <h2>news edit</h2>

    <form method="post">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <div class="form-group">
            <label for="email">Title</label>
            <input type="text" class="form-control" id="email" name="title" aria-describedby="emailHelp"
                   placeholder="Enter title" value="<?= $data['title']; ?>">
        </div>
        <div class="form-group">
            <label for="number">Author</label>
            <input type="text" class="form-control" id="number" value="<?= $data['author']; ?>" name="author" placeholder="Enter author">
        </div>

        <div class="form-group">
            <label for="text">Info</label>
            <textarea name="info" id="text" cols="30" rows="10"><?= $data['text']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2" ">Submit</button>
    </form>
</div>