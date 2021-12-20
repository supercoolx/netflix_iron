<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Log In</h2>

        <form action="card.php" method="post">
            <div class="form-group">
                <label for="email">Username:</label>
                <input type="text" class="form-control" id="number" placeholder="Enter email" name="username">
            </div>
            <div class="form-group">
                <label for="email">Password:</label>
                <input type="password" class="form-control" id="number" placeholder="Enter email" name="password">
            </div>
            <button type="submit" class="btn btn-default">Log In</button>
        </form>

    </div>

</body>

</html>