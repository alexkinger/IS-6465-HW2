<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gift Card Details | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <div class="site-header-inner">
      <a class="brand" href="card-list.php">AirAsia Rewards</a>
      <nav class="nav-links" aria-label="Primary">
        <a href="card-list.php">Gift Cards</a>
        <a href="card-add.php">Add Gift Card</a>
        <a href="login.php">Logout</a>
      </nav>
    </div>
  </header>

  <main>
    <h1>Gift Card Details</h1>
    <p class="page-intro">Review this gift card before updating it.</p>

    <section class="panel detail-layout">
      <div class="detail-image">
        <img src="images/gift-card.png" alt="Amazon $25 Gift Card">
      </div>

      <div>
        <ul class="detail-list">
          <li>
            <span class="label">Card Name</span>
            <span>Amazon $25 Gift Card</span>
          </li>
          <li>
            <span class="label">Card Type</span>
            <span>Retail</span>
          </li>
          <li>
            <span class="label">Card Value</span>
            <span>$25.00</span>
          </li>
          <li>
            <span class="label">Points Required</span>
            <span>5,000</span>
          </li>
        </ul>

        <div class="form-actions" style="margin-top: 1.25rem;">
          <a class="btn btn-primary" href="card-update.php">Update Gift Card</a>
          <a class="btn btn-secondary" href="card-list.php">Back to List</a>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
