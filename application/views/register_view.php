<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form method="post" class="border rounded border-primary p-2" action="/user/post_register">
    <h3>Регистрация</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp" placeholder="Enter email">

    </div>

    <div class="form-group">
        <label for="exampleInputEmail11">User name</label>
        <input type="text" class="form-control" id="exampleInputEmail11"  name="username" aria-describedby="emailHelp" placeholder="Enter username">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password"  placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!--<style>-->
<!--    form{-->
<!--        border:2px solid silver;-->
<!--        padding: 5px;-->
<!--        text-align: center;-->
<!--    }-->
<!--    form button{-->
<!--        padding: 5px;-->
<!--        width:150px;-->
<!--        cursor: pointer;-->
<!--    }-->
<!--</style>-->