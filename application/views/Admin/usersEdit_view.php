<div>
    <h2>users edit</h2>

    <form method="post">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <div class="form-group">
            <label for="email">Username</label>
            <input type="text" class="form-control" id="email" name="username" aria-describedby="emailHelp"
                   placeholder="Enter username" value="<?= $data['username']; ?>">
        </div>
        <div class="form-group">
            <label for="number">Status</label>
            <input type="text" class="form-control" id="number" value="<?= $data['status']; ?>" name="status" placeholder="Enter status">
        </div>

        <div class="form-group">
            <label for="number1">Email</label>
            <input type="email" class="form-control" id="number1" value="<?= $data['email']; ?>" name="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="number11">Password</label>
            <input type="text" class="form-control" id="number11" value="<?= $data['password']; ?>" name="password" placeholder="Enter password">
        </div>

        <button type="submit" class="btn btn-primary mt-2" ">Submit</button>
    </form>
</div>