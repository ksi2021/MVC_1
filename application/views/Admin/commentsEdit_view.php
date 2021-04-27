<div>
    <h2>comment edit</h2>

    <form method="post">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <div class="form-group">
            <label for="text">Text</label>
            <textarea name="text" id="text" cols="30" rows="10"><?= $data['text']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2" ">Submit</button>
    </form>
</div>