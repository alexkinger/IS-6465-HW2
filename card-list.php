<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gift Card List | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <div class="site-header-inner">
      <a class="brand" href="card-list.php">AirAsia Rewards</a>
      <nav class="nav-links" aria-label="Primary">
        <a class="active" href="card-list.php" aria-current="page">Gift Cards</a>
        <a href="card-add.php">Add Gift Card</a>
        <a href="login.php">Logout</a>
      </nav>
    </div>
  </header>

  <main>
    <h1>Gift Card List</h1>
    <p class="page-intro">Browse available gift cards and redeem with your reward points.</p>

    <p class="top-actions">
      <a class="btn btn-primary" href="card-add.php">Add Gift Card</a>
    </p>

    <section class="card-list" aria-label="Available gift cards">
      <article class="card-row">
        <a class="card-thumb" href="card-details.php">
          <img src="images/gift-card.png" alt="Amazon $25 Gift Card">
        </a>
        <div class="card-row-body">
          <h2><a href="card-details.php">Amazon $25 Gift Card</a></h2>
          <p class="points">5,000 points required</p>
        </div>
      </article>

      <article class="card-row">
        <a class="card-thumb" href="card-details.php">
          <img src="images/gift-card.png" alt="Starbucks $15 Gift Card">
        </a>
        <div class="card-row-body">
          <h2><a href="card-details.php">Starbucks $15 Gift Card</a></h2>
          <p class="points">3,000 points required</p>
        </div>
      </article>

      <article class="card-row">
        <a class="card-thumb" href="card-details.php">
          <img src="images/gift-card.png" alt="Grab $20 Gift Card">
        </a>
        <div class="card-row-body">
          <h2><a href="card-details.php">Grab $20 Gift Card</a></h2>
          <p class="points">4,000 points required</p>
        </div>
      </article>
    </section>
  </main>
</body>
</html>
