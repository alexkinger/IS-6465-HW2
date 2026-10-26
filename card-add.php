<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Gift Card | AirAsia Rewards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="site-nav border-bottom bg-white">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <a class="site-brand" href="card-list.php">AirAsia Rewards</a>
            <div class="site-links">
                <a href="card-list.php">Gift Cards</a>
                <a class="active" href="card-add.php" aria-current="page">Add Gift Card</a>
                <a href="login.php">Logout</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <h1 class="mb-3">Add Gift Card</h1>
        <p>Enter details for a new gift card. Card ID is generated automatically.</p>

        <div class="row">
            <div class="col-md-8 col-lg-6">
                <form action="card-list.php" method="get">
                    <div class="mb-3">
                        <label class="form-label" for="cardName">Card Name</label>
                        <input class="form-control" type="text" id="cardName" name="cardName" required maxlength="100">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="cardType">Card Type</label>
                        <input class="form-control" type="text" id="cardType" name="cardType" required maxlength="100">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="cardValue">Card Value</label>
                        <input class="form-control" type="number" id="cardValue" name="cardValue" required min="0" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="points">Points Required</label>
                        <input class="form-control" type="number" id="points" name="points" required min="0" step="1">
                    </div>

                    <button class="btn btn-primary me-2" type="submit">Submit</button>
                    <a class="btn btn-outline-secondary" href="card-list.php">Cancel</a>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
