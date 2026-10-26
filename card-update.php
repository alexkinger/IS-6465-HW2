<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Gift Card | AirAsia Rewards</title>
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
    <h1>Update Gift Card</h1>
    <p class="page-intro">Edit the selected gift card. Card ID is not editable.</p>

    <section class="panel">
      <form class="form-stack" action="card-list.php" method="get">
        <div class="form-field">
          <label for="cardName">Card Name</label>
          <input type="text" id="cardName" name="cardName" required maxlength="100" value="Amazon $25 Gift Card">
        </div>
        <div class="form-field">
          <label for="cardType">Card Type</label>
          <input type="text" id="cardType" name="cardType" required maxlength="100" value="Retail">
        </div>
        <div class="form-field">
          <label for="cardValue">Card Value</label>
          <input type="number" id="cardValue" name="cardValue" required min="0" step="0.01" value="25.00">
        </div>
        <div class="form-field">
          <label for="points">Points Required</label>
          <input type="number" id="points" name="points" required min="0" step="1" value="5000">
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Submit</button>
          <a class="btn btn-secondary" href="card-list.php">Cancel</a>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
