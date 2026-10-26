<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gift Card List | AirAsia Rewards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="site-nav border-bottom bg-white">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <a class="site-brand" href="card-list.php">AirAsia Rewards</a>
            <div class="site-links">
                <a class="active" href="card-list.php" aria-current="page">Gift Cards</a>
                <a href="card-add.php">Add Gift Card</a>
                <a href="login.php">Logout</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <h1 class="mb-3">Gift Card List</h1>
        <p>Browse available gift cards and redeem with your reward points.</p>

        <p class="mb-4">
            <a class="btn btn-primary" href="card-add.php">Add Gift Card</a>
        </p>

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <caption>Available gift cards and points required</caption>
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Card Name</th>
                        <th scope="col">Points Required</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="card-details.php">
                                <img class="gift-thumb img-thumbnail" src="images/gift-card.png" alt="Amazon $25 Gift Card">
                            </a>
                        </td>
                        <td><a href="card-details.php">Amazon $25 Gift Card</a></td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="card-details.php">
                                <img class="gift-thumb img-thumbnail" src="images/gift-card.png" alt="Starbucks $15 Gift Card">
                            </a>
                        </td>
                        <td><a href="card-details.php">Starbucks $15 Gift Card</a></td>
                        <td>3,000</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="card-details.php">
                                <img class="gift-thumb img-thumbnail" src="images/gift-card.png" alt="Grab $20 Gift Card">
                            </a>
                        </td>
                        <td><a href="card-details.php">Grab $20 Gift Card</a></td>
                        <td>4,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
