<div>
    <h2>portfolio edit</h2>

    <form method="post">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <div class="form-group">
            <label for="email">Title</label>
            <input type="text" class="form-control" id="email" name="title" aria-describedby="emailHelp"
                   placeholder="Enter email" value="<?= $data['Name']; ?>">
        </div>
        <div class="form-group">
            <label for="number">Year</label>
            <input type="number" class="form-control" id="number" value="<?= $data['Year']; ?>" name="year" placeholder="Enter number">
        </div>

        <div class="form-group">
            <label for="text">Info</label>
            <textarea name="info" id="text" cols="30" rows="10"><?= $data['Info']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2" ">Submit</button>
    </form>
</div>