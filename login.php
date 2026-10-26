<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | AirAsia Rewards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="site-nav border-bottom bg-white">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <a class="site-brand" href="login.php">AirAsia Rewards</a>
            <div class="site-links">
                <a class="active" href="login.php" aria-current="page">Login</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <h1 class="mb-3">Login</h1>
        <p>Sign in to redeem gift cards with your AirAsia reward points.</p>

        <div class="row">
            <div class="col-md-8 col-lg-6">
                <form action="card-list.php" method="get">
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" required>
                    </div>

                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
