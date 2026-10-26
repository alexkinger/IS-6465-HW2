<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <div class="site-header-inner">
      <a class="brand" href="login.php">AirAsia Rewards</a>
      <nav class="nav-links" aria-label="Primary">
        <a class="active" href="login.php" aria-current="page">Login</a>
      </nav>
    </div>
  </header>

  <main>
    <h1>Login</h1>
    <p class="page-intro">Sign in to redeem gift cards with your AirAsia reward points.</p>

    <section class="panel">
      <form class="form-stack" action="card-list.php" method="get">
        <div class="form-field">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required autocomplete="username">
        </div>
        <div class="form-field">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required autocomplete="current-password">
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Login</button>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
